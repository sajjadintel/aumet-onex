<?php

class Controller
{
    protected $f3;
    protected $phpMail;
    protected $log;
    protected $audit;
    protected $cache;
    protected $isAuth;
    protected $objUser;
    protected $language;

    protected $objCompany;
    protected $objCompanyProfile;
    protected $objManufacturer;
    protected $objCountry;
    protected $arrProducts;

    protected $headers;

    protected $webResponse;

    function __construct()
    {
        $this->f3 = \Base::instance();
        $this->webResponse = new WebResponse();

        if (getenv('ENV') == Constants::ENV_PROD) {
            $client = new \Redis();
            $client->connect('127.0.0.1');
            $this->cache = new \MatthiasMullie\Scrapbook\Adapters\Redis($client);
        }
        $this->audit = \Audit::instance();

        $this->headers = $this->getHttpHeaders();

        $this->setLanguage();

        $this->objUser = $this->f3->get('SESSION.objUser');

        if ($this->objUser && is_object($this->objUser)) {
            $this->isAuth = true;
            $this->f3->set('objUser', $this->objUser);

            $this->objCompany = $this->f3->get('SESSION.objCompany');
            $this->f3->set('objCompany', $this->objCompany);

            $this->objCompanyProfile = $this->f3->get('SESSION.objCompanyProfile');
            $this->f3->set('objCompanyProfile', $this->objCompanyProfile);

            $this->objManufacturer = $this->f3->get('SESSION.objManufacturer');
            $this->f3->set('objManufacturer', $this->objManufacturer);

            $this->objCountry = $this->f3->get('SESSION.objCountry');
            $this->f3->set('objCountry', $this->objCountry);

            $this->arrProducts = $this->f3->get('SESSION.arrProducts');
            $this->f3->set('arrProducts', $this->arrProducts);
        } else {
            $this->isAuth = false;
        }

        $this->f3->set("ajaxUrl", $_SERVER['REQUEST_URI']);
    }

    function beforeroute()
    {
        if (!$this->isAuth) {
            $this->rerouteAuth();
        }
    }

    function setLanguage($language = false){
        if(!$language) {
            $this->language = $this->f3->get("PARAMS.language");
        }
        else {
            $this->language = $language;
        }

        if ($this->language != 'ar' && $this->language != 'fr' && $this->language != 'en') {
            $this->language = $this->f3->get("SESSION.uiLanguage");
            if ($this->language != 'ar' || $this->language != 'fr' && $this->language != 'en') {
                $this->language = 'en';
            }
        }
        $this->f3->set('SESSION.uiLanguage', $this->language);
        $this->f3->set('cssDirection', $this->language == "ar" ? "rtl" : "ltr");
        $this->f3->set('LANGUAGE', $this->language);
    }

    function rerouteAuth()
    {
        if ($this->f3->ajax()) {
            echo $this->webResponse->jsonResponse();
        } else {
            $this->f3->reroute("/$this->language/auth/signin");
        }
    }

    function rerouteMemberHome()
    {
        if ($this->f3->ajax()) {
            echo $this->webResponse->jsonResponse();
        } else {
            $this->f3->reroute("/$this->language");
        }
    }

    function renderLayout($ajaxUrl = false)
    {
        if($ajaxUrl) {
            //$ajaxUrl = "$this->language/$ajaxUrl";
            $this->f3->set("ajaxUrl", $ajaxUrl);
        }
        echo View::instance()->render('layout/layout.php');
    }

    function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

    function mb_str_replace($search, $replace, $subject, &$count = 0)
    {
        if (!is_array($subject)) {
            // Normalize $search and $replace so they are both arrays of the same length
            $searches = is_array($search) ? array_values($search) : array($search);
            $replacements = is_array($replace) ? array_values($replace) : array($replace);
            $replacements = array_pad($replacements, count($searches), '');
            foreach ($searches as $key => $search) {
                $parts = mb_split(preg_quote($search), $subject);
                $count += count($parts) - 1;
                $subject = implode($replacements[$key], $parts);
            }
        } else {
            // Call mb_str_replace for each subject in array, recursively
            foreach ($subject as $key => $value) {
                $subject[$key] = mb_str_replace($search, $replace, $value, $count);
            }
        }
        return $subject;
    }

    function getHttpHeaders()
    {
        $headers = [];
        foreach ($_SERVER as $name => $value) {
            if (substr($name, 0, 5) == 'HTTP_') {
                $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
            }
        }
        return $headers;
    }



    function generateRandomString($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    function jsonResponse($statusCode = false, $data = null, $message = "")
    {
        // clear the old headers
        header_remove();
        // set the actual code
        http_response_code(200);
        // set the header to make sure cache is forced
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        // treat this as json
        header('Content-Type: application/json');
        // ok, validation error, or failure
        header('Status: 200 OK');
        // return the encoded json
        return json_encode(array(
            'status' => $statusCode, // success or not?
            'message' => $message,
            'data' => $data
        ));
    }

    function jsonResponseDebug($statusCode = false, $data = null, $debugData = null)
    {

        if ($statusCode) {
            $code = 200;
        }

        // clear the old headers
        header_remove();
        // set the actual code
        http_response_code($code);
        // set the header to make sure cache is forced
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        // treat this as json
        header('Content-Type: application/json');
        $status = array(
            200 => '200 OK',
            400 => '400 Bad Request',
            422 => 'Unprocessable Entity',
            500 => '500 Internal Server Error'
        );
        // ok, validation error, or failure
        header('Status: ' . $status[$code]);
        // return the encoded json
        return json_encode(array(
            'status' => $statusCode, // success or not?
            'data' => $data,
            'debugData' => $debugData
        ));
    }

    function jsonResponseRaw($data)
    {
        // clear the old headers
        header_remove();
        // set the actual code
        http_response_code(200);
        // set the header to make sure cache is forced
        //header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        // treat this as json
        header('Content-Type: application/json');

        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        header('Status: 200 OK');
        // return the encoded json
        return json_encode($data);
    }

    function getUploadDirectory()
    {
        return $this->f3->get('uploadDIR');
    }

    function getRootDirectory()
    {
        return $this->f3->get('rootDIR');
    }

    function getTempDirectory()
    {
        return $this->f3->get('tempDIR');
    }

    function getCurrentDirectory()
    {
        return __DIR__;
    }

    function downloadFile($filePath)
    {

        header('Content-Type: ' . mime_content_type($filePath));

        $buffer = '';
        $cnt = 0;
        $handle = fopen($filePath, 'rb');

        if ($handle === false) {
            return false;
        }

        while (!feof($handle)) {
            $buffer = fread($handle, CHUNK_SIZE);
            echo $buffer;
            ob_flush();
            flush();
        }

        $status = fclose($handle);
    }

    function downloadPDFFile($file_path, $saveFileName = "")
    {
        // hide notices
        //@ini_set('error_reporting', E_ALL & ~ E_NOTICE);
        //- turn off compression on the server
        //@apache_setenv('no-gzip', 1);
        //@ini_set('zlib.output_compression', 'Off');
        // sanitize the file request, keep just the name and extension
        // also, replaces the file location with a preset one ('./myfiles/' in this example)
        //$file_path  = $_REQUEST['file'];
        $path_parts = pathinfo($file_path);
        $file_name = $path_parts['basename'];
        $file_ext = $path_parts['extension'];
        //$file_path  = './files/' . $file_name;
        // allow a file to be streamed instead of sent as an attachment
        //$is_attachment = isset($_REQUEST['stream']) ? false : true;

        $is_attachment = false;

        if ($saveFileName == "") {
            $saveFileName = $file_name;
        }

        // make sure the file exists
        if (is_file($file_path)) {
            $file_size = filesize($file_path);
            $file = @fopen($file_path, "rb");
            if ($file) {
                //                    if($_SESSION['user_refUserTypeID'] == 1 ){
                //                            echo "File Opened \"$file_name\"";
                //                            return;
                //                        }
                // set the headers, prevent caching
                header("Pragma: public");
                header("Expires: -1");
                header("Cache-Control: public, must-revalidate, post-check=0, pre-check=0");
                header("Content-Disposition: attachment; filename=\"$saveFileName\"");




                // set appropriate headers for attachment or streamed file
                if ($is_attachment) {
                    header("Content-Disposition: attachment; filename=\"$saveFileName\"");
                } else {
                    header("Content-Disposition: inline; filename=\"$saveFileName\"");
                    header('Content-Transfer-Encoding: binary');
                }


                header("Content-Type: application/pdf");



                //check if http_range is sent by browser (or download manager)
                if (isset($_SERVER['HTTP_RANGE'])) {
                    list($size_unit, $range_orig) = explode('=', $_SERVER['HTTP_RANGE'], 2);
                    if ($size_unit == 'bytes') {
                        //multiple ranges could be specified at the same time, but for simplicity only serve the first range
                        //http://tools.ietf.org/id/draft-ietf-http-range-retrieval-00.txt
                        list($range, $extra_ranges) = explode(',', $range_orig, 2);
                    } else {
                        $range = '';
                        header('HTTP/1.1 416 Requested Range Not Satisfiable');
                        exit;
                    }
                } else {
                    $range = '';
                }

                //figure out download piece from range (if set)
                list($seek_start, $seek_end) = explode('-', $range, 2);

                //set start and end based on range (if set), else set defaults
                //also check for invalid ranges.
                $seek_end = (empty($seek_end)) ? ($file_size - 1) : min(abs(intval($seek_end)), ($file_size - 1));
                $seek_start = (empty($seek_start) || $seek_end < abs(intval($seek_start))) ? 0 : max(abs(intval($seek_start)), 0);

                //Only send partial content header if downloading a piece of the file (IE workaround)
                if ($seek_start > 0 || $seek_end < ($file_size - 1)) {
                    header('HTTP/1.1 206 Partial Content');
                    header('Content-Range: bytes ' . $seek_start . '-' . $seek_end . '/' . $file_size);
                    header('Content-Length: ' . ($seek_end - $seek_start + 1));
                } else
                    header("Content-Length: $file_size");

                header('Accept-Ranges: bytes');

                set_time_limit(0);
                fseek($file, $seek_start);

                while (!feof($file)) {
                    print(@fread($file, 1024 * 8));
                    ob_flush();
                    flush();
                    if (connection_status() != 0) {
                        @fclose($file);
                        exit;
                    }
                }

                // file save was a success
                @fclose($file);
                exit;
            } else {
                // file couldn't be opened
                header("HTTP/1.0 500 Internal Server Error");
                exit;
            }
        } else {
            // file does not exist
            header("HTTP/1.0 404 Not Found");
            exit;
        }
    }

    function sendEmail($subject, $html, $arrTo, $arrCC = null, $arrBCC = null)
    {

        $email = new \SendGrid\Mail\Mail();

        $email->setFrom($this->f3->get('mailFromEmail'), $this->f3->get('mailFromName'));

        $email->setSubject($subject);

        $email->addTos($arrTo);

        if ($arrCC != null) {
            $email->addCcs($arrCC);
        }

        if ($arrBCC != null) {
            $email->addBccs($arrBCC);
        }

        $email->addContent(
            "text/html",
            $html
        );

        $sendgrid = new \SendGrid($this->f3->get('mailPassword'));
        try {
            $response = $sendgrid->send($email);
            return $response->statusCode();
        } catch (Exception $e) {
            //echo 'Caught exception: ' . $e->getMessage() . "\n";
            return FALSE;
        }
    }

    function sendInvite($subject, $iCalendar, $arrTo, $arrCC = null, $arrBCC = null)
    {

        $email = new \SendGrid\Mail\Mail();

        $email->setFrom($this->f3->get('mailFromEmail'), $this->f3->get('mailFromName'));

        $email->setSubject($subject);

        $email->addTos($arrTo);

        if ($arrCC != null) {
            $email->addCcs($arrCC);
        }

        if ($arrBCC != null) {
            $email->addBccs($arrBCC);
        }

        $email->addContent(
            "text/calendar",
            $iCalendar
        );

        $sendgrid = new \SendGrid($this->f3->get('mailPassword'));
        try {
            $response = $sendgrid->send($email);
            return $response->statusCode();
        } catch (Exception $e) {
            //echo 'Caught exception: ' . $e->getMessage() . "\n";
            return FALSE;
        }
    }

    function sendEmailV2($sendGridPassword, $fromEmail, $fromName, $subject, $htmlContent, $arrTo, $arrCC = null, $arrBCC = null)
    {



        $email = new \SendGrid\Mail\Mail();

        $email->setFrom($fromEmail, $fromName);

        $email->setSubject($subject);

        $email->addTos($arrTo);

        if ($arrCC != null) {
            $email->addCcs($arrCC);
        }

        if ($arrBCC != null) {
            $email->addBccs($arrBCC);
        }

        $email->addContent("text/html", $htmlContent);

        $sendgrid = new \SendGrid($sendGridPassword);
        try {
            $response = $sendgrid->send($email);
            return $response->statusCode();
        } catch (Exception $e) {
            //echo 'Caught exception: ' . $e->getMessage() . "\n";
            return FALSE;
        }
    }

    function sendEmailFrom($fromEmail, $fromName, $subject, $html, $arrTo, $arrCC = null, $arrBCC = null)
    {



        $email = new \SendGrid\Mail\Mail();

        $email->setFrom($fromEmail, $fromName);

        $email->setSubject($subject);

        $email->addTos($arrTo);

        if ($arrCC != null) {
            $email->addCcs($arrCC);
        }

        if ($arrBCC != null) {
            $email->addBccs($arrBCC);
        }

        $email->addContent(
            "text/html",
            $html
        );

        $sendgrid = new \SendGrid($this->f3->get('mailPassword'));
        try {
            $response = $sendgrid->send($email);
            return $response->statusCode();
        } catch (Exception $e) {
            //echo 'Caught exception: ' . $e->getMessage() . "\n";
            return FALSE;
        }
    }

    function getTimeElapsedString($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime, new DateTimeZone('Asia/Dubai'));
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full)
            $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}
