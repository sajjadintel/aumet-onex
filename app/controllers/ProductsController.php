<?php

class ProductsController extends Controller
{

    function getEntityProduct()
    {

        if (!$this->f3->ajax()) {
            $this->f3->set("pageURL", $this->f3->get('SERVER.REQUEST_URI'));
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $entityId = $this->f3->get('PARAMS.entityId');
            $productId = $this->f3->get('PARAMS.productId');

            global $dbConnection;

            $dbEntityProduct = new BaseModel($dbConnection, "vwEntityProductSell");
            $dbEntityProduct->getWhere("entityId=$entityId and productId=$productId");
            $this->f3->set('objEntityProduct', $dbEntityProduct);

            $dbEntityProductRelated = new BaseModel($dbConnection, "vwEntityProductSell");
            $arrRelatedEntityProduct = $dbEntityProductRelated->getWhere("stockStatusId=1 and scientificNameId =$dbEntityProduct->scientificNameId and id != $dbEntityProduct->id");
            $this->f3->set('arrRelatedEntityProduct', $arrRelatedEntityProduct);

            $this->webResponse->errorCode = 1;
            $this->webResponse->title = $this->f3->get('vTitle_entityProductDetail');
            $this->webResponse->data = View::instance()->render('app/products/single/entityProduct.php');
            echo $this->webResponse->jsonResponse();
        }
    }

    function getDistributorProducts()
    {
        if (!$this->f3->ajax()) {
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $dbStockStatus = new BaseModel($this->db, "stockStatus");
            $dbStockStatus->name = "name_" . $this->objUser->language;
            $arrStockStatus = $dbStockStatus->all("id asc");
            $this->f3->set('arrStockStatus', $arrStockStatus);

            $dbScientificName = new BaseModel($this->db, "scientificName");
            $arrScientificName = $dbScientificName->findAll();


            $this->webResponse->errorCode = 1;
            $this->webResponse->title = $this->f3->get('vModule_product_title');
            $this->webResponse->data = View::instance()->render('app/products/distributor/products.php');
            echo $this->webResponse->jsonResponse();
        }
    }

    function getProductDetails()
    {
        if (!$this->f3->ajax()) {
            $this->f3->set("pageURL", $this->f3->get('SERVER.REQUEST_URI'));
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $productId = $this->f3->get('PARAMS.productId');

            $dbProduct = new BaseModel($this->db, "vwEntityProductSell");
            //$dbProduct->getByField("productId", $productId);
            //$this->f3->set("objProduct", $dbProduct);
            $arrProduct = $dbProduct->findWhere("productId = $productId");

            $data['product'] = $arrProduct[0];

            echo $this->webResponse->jsonResponseV2(1, "", "", $data);

            //$this->webResponse->errorCode = 1;
            //$this->webResponse->title = $this->f3->get('vModule_feedback_title');
            //$this->webResponse->data = View::instance()->render('app/products/distributor/modals/edit.php');
            //echo $this->webResponse->jsonResponse();
        }
    }

    function getProductQuantityDetails()
    {
        if (!$this->f3->ajax()) {
            $this->f3->set("pageURL", $this->f3->get('SERVER.REQUEST_URI'));
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $productId = $this->f3->get('PARAMS.productId');

            $dbProduct = new BaseModel($this->db, "vwEntityProductSell");
            $arrProduct = $dbProduct->findWhere("productId = '$productId'");

            $dbBonus = new BaseModel($this->db, "entityProductSellBonusDetail");
            $dbBonus->bonusId = 'id';
            $arrBonus = $dbBonus->findWhere("entityProductId = '$productId' AND isActive = 1");

            $data['product'] = $arrProduct[0];
            $data['bonus'] = $arrBonus;

            echo $this->webResponse->jsonResponseV2(1, "", "", $data);
            return;
        }
    }

    function postDistributorProducts()
    {
        $arrEntityId = Helper::idListFromArray($this->f3->get('SESSION.arrEntities'));
        $query = "entityId IN ($arrEntityId)";

        $datatable = array_merge(array('pagination' => array(), 'sort' => array(), 'query' => array()), $_REQUEST);

        if ($datatable['query'] != "") {

            $productId = $datatable['query']['productId'];
            if (isset($productId)) {
                if (is_array($productId)) {
                    $query .= " AND id in (" . implode(",", $productId) . ")";
                } else {
                    $query .= " AND id = $productId";
                }
            }

            $scientificNameId = $datatable['query']['scientificNameId'];
            if (isset($scientificNameId)) {
                if (is_array($scientificNameId)) {
                    $query .= " AND scientificNameId in (" . implode(",", $scientificNameId) . ")";
                } else {
                    $query .= " AND scientificNameId = $scientificNameId";
                }
            }

            $entityId = $datatable['query']['entityId'];
            if (isset($entityId)) {
                if (is_array($entityId)) {
                    $query .= " AND entityId in (" . implode(",", $entityId) . ")";
                } else {
                    $query .= " AND entityId = $entityId";
                }
            }

            if ($datatable['query']['stockOption'] == 1) {
                $query .= " AND stockStatusId=1";
            }
        }

        $sort = !empty($datatable['sort']['sort']) ? $datatable['sort']['sort'] : 'asc';
        $field = !empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'id';

        $meta = array();
        $page = !empty($datatable['pagination']['page']) ? (int)$datatable['pagination']['page'] : 1;
        $perpage = !empty($datatable['pagination']['perpage']) ? (int)$datatable['pagination']['perpage'] : 10;

        $offset = ($page - 1) * $perpage;
        $total = 0;

        $dbProducts = new BaseModel($this->db, "vwEntityProductSell");

        if (!$dbProducts->exists($field)) {
            $field = 'id';
        }
        if ($query == "") {
            $total = $dbProducts->count();
            $data = $dbProducts->findAll("$field $sort", $perpage, $offset);
        } else {
            $total = $dbProducts->count($query);
            $data = $dbProducts->findWhere($query, "$field $sort", $perpage, $offset);
        }

        $pages = 1;

        // $perpage 0; get all data
        if ($perpage > 0) {
            $pages = ceil($total / $perpage); // calculate total pages
            $page = max($page, 1); // get 1 page when $_REQUEST['page'] <= 0
            $page = min($page, $pages); // get last page when $_REQUEST['page'] > $totalPages
            $offset = ($page - 1) * $perpage;
            if ($offset < 0) {
                $offset = 0;
            }

            //$data = array_slice($data, $offset, $perpage, true);
        }

        $meta = array(
            'page' => $page,
            'pages' => $pages,
            'perpage' => $perpage,
            'total' => $total,
        );

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

        $result = array(
            'q' => $query,
            'meta' => $meta + array(
                'sort' => $sort,
                'field' => $field,
            ),
            'data' => $data
        );

        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    function postEditDistributorProduct()
    {
        if (!$this->f3->ajax()) {
            $this->f3->set("pageURL", "/web/distributor/product");
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $id = $this->f3->get('POST.id');

            $dbEntityProduct = new BaseModel($this->db, "entityProductSell");
            $dbEntityProduct->getWhere("productId=$id");

            $dbProduct = new BaseModel($this->db, "product");
            $dbProduct->getWhere("id=$id");

            if ($dbEntityProduct->dry() || $dbProduct->dry()) {
                $this->webResponse->errorCode = 2;
                $this->webResponse->title = "";
                $this->webResponse->message = "No Product";
                echo $this->webResponse->jsonResponse();
            } else {
                $unitPrice = $this->f3->get('POST.unitPrice');

                $dbEntityProduct->unitPrice = $unitPrice;

                $dbEntityProduct->update();

                $scientificNameId = $this->f3->get('POST.scientificNameId');
                $madeInCountryId = $this->f3->get('POST.madeInCountryId');
                $name_en = $this->f3->get('POST.name_en');
                $name_ar = $this->f3->get('POST.name_ar');
                $name_fr = $this->f3->get('POST.name_fr');

                $dbProduct->name_en = $name_en;
                $dbProduct->name_fr = $name_fr;
                $dbProduct->name_ar = $name_ar;
                $dbProduct->scientificNameId = $scientificNameId;
                $dbProduct->madeInCountryId = $madeInCountryId;

                $dbProduct->update();

                $this->webResponse->errorCode = 1;
                $this->webResponse->title = "";
                $this->webResponse->data = $dbProduct->name_ar;
                echo $this->webResponse->jsonResponse();
            }
        }
    }

    function postEditQuantityDistributorProduct()
    {
        if (!$this->f3->ajax()) {
            $this->f3->set("pageURL", "/web/distributor/product");
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $id = $this->f3->get('POST.id');

            $dbEntityProduct = new BaseModel($this->db, "entityProductSell");
            $dbEntityProduct->getWhere("productId=$id");

            $dbProduct = new BaseModel($this->db, "product");
            $dbProduct->getWhere("id=$id");

            if ($dbEntityProduct->dry() || $dbProduct->dry()) {
                $this->webResponse->errorCode = 2;
                $this->webResponse->title = "";
                $this->webResponse->message = "No Product";
                echo $this->webResponse->jsonResponse();
            } else {
                $stock = $this->f3->get('POST.stock');
                $stockStatusId = $this->f3->get('POST.stockStatus');
                $bonusTypeId = $this->f3->get('POST.bonusType');
                $bonusRepeater = $this->f3->get('POST.bonusRepeater');

                if ($stock > 0) {
                    $stockStatusId = 1;
                } else {
                    if (isset($stockStatusId) && $stockStatusId == 'on') {
                        $stockStatusId = 3;
                    } else {
                        $stockStatusId = 2;
                    }
                }

                if (isset($bonusTypeId) && $bonusTypeId == 'on') {
                    $bonusTypeId = 2;
                } else {
                    $bonusTypeId = 1;
                }

                $dbEntityProduct->stock = $stock;
                $dbEntityProduct->stockStatusId = $stockStatusId;
                $dbEntityProduct->bonusTypeId = $bonusTypeId;
                $dbEntityProduct->stockUpdateDateTime = $dbEntityProduct->getCurrentDateTime();

                $dbEntityProduct->update();

                if ($bonusTypeId != 1) {
                    $dbBonus = new BaseModel($this->db, "entityProductSellBonusDetail");
                    $dbBonus->load(array("entityProductId = $id AND isActive = 1"));
                    while (!$dbBonus->dry()) {
                        $dbBonus->delete();
                        $dbBonus->next();
                    }

                    foreach ($bonusRepeater as $bonus) {
                        $dbBonus->reset();
                        if ($bonus['minOrder'] != '' && $bonus['bonus'] != '') {
                            $dbBonus->entityProductId = $id;
                            $dbBonus->minOrder = $bonus['minOrder'];
                            $dbBonus->bonus = $bonus['bonus'];
                            $dbBonus->add();
                        }
                    }
                }

                $this->webResponse->errorCode = 1;
                $this->webResponse->title = "";
                $this->webResponse->data = $bonusRepeater;
                echo $this->webResponse->jsonResponse();
            }
        }
    }

    function postAddDistributorProduct()
    {
        if (!$this->f3->ajax()) {
            $this->f3->set("pageURL", "/web/distributor/product");
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $scientificNameId = $this->f3->get('POST.scientificNameId');
            $madeInCountryId = $this->f3->get('POST.madeInCountryId');
            $name_en = $this->f3->get('POST.name_en');
            $name_ar = $this->f3->get('POST.name_ar');
            $name_fr = $this->f3->get('POST.name_fr');
            $image = $this->f3->get('POST.image');


            $dbProduct = new BaseModel($this->db, "product");
            $dbProduct->scientificNameId = $scientificNameId;
            $dbProduct->madeInCountryId = $madeInCountryId;
            $dbProduct->name_en = $name_en;
            $dbProduct->name_fr = $name_fr;
            $dbProduct->name_ar = $name_ar;
            $dbProduct->image = $image;

            $dbProduct->addReturnID();
            $arrEntityId = Helper::idListFromArray($this->f3->get('SESSION.arrEntities'));
            $entityId = $arrEntityId;
            $unitPrice = $this->f3->get('POST.unitPrice');
            $stock = $this->f3->get('POST.stock');


            $dbEntityProduct = new BaseModel($this->db, "entityProductSell");
            $dbEntityProduct->productId = $dbProduct->id;
            $dbEntityProduct->entityId = $entityId;
            $dbEntityProduct->unitPrice = $unitPrice;
            $dbEntityProduct->stock = $stock;
            $dbEntityProduct->stockStatusId = 1;
            $dbEntityProduct->bonusTypeId = 1;
            $dbEntityProduct->stockUpdateDateTime = $dbEntityProduct->getCurrentDateTime();

            $dbEntityProduct->add();

            $this->webResponse->errorCode = 1;
            $this->webResponse->title = "";
            $this->webResponse->data = $dbProduct['name_' . $this->objUser->language];
            echo $this->webResponse->jsonResponse();
        }
    }

    function getStockUpload()
    {
        if (!$this->f3->ajax()) {
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $this->webResponse->errorCode = 1;
            $this->webResponse->title = "Stock Update";//$this->f3->get('vModule_stock_title');
            $this->webResponse->data = View::instance()->render('app/products/stock/upload.php');
            echo $this->webResponse->jsonResponse();
        }
    }

    function postStockUpload(){
        $ext = pathinfo(basename($_FILES["file"]["name"]), PATHINFO_EXTENSION);
        // basename($_FILES["file"]["name"])

        $targetFile = $this->getUploadDirectory() . $this->generateRandomString(16).".$ext";

        if($ext == "xlsx" || $ext == "xls" || $ext == "csv") {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                global $dbConnection;
                $dbStockUpdateUpload = new BaseModel($dbConnection, "stockUpdateUpload");
                $dbStockUpdateUpload->userId = $this->objUser->id;
                $dbStockUpdateUpload->filePath = $targetFile;
                $dbStockUpdateUpload->entityId = $this->objUser->entityId;
                $dbStockUpdateUpload->addReturnID();
                echo "OK";
            }
        }
    }

    function postStockUploadProcess(){
        global $dbConnection;

        $dbStockUpdateUpload = new BaseModel($dbConnection, "stockUpdateUpload");

        $dbStockUpdateUpload->getByField("userId", $this->objUser->id, "insertDateTime desc");

        $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($dbStockUpdateUpload->filePath);
        try {
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
            $spreadsheet = $reader->load($dbStockUpdateUpload->filePath);

            $worksheet = $spreadsheet->getActiveSheet();

            $dbStockUpdateUpload->recordsCount = 0;
            foreach ($worksheet->getRowIterator() as $row) {
                $dbStockUpdateUpload->recordsCount++;
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,

            }
            $dbStockUpdateUpload->recordsCount -= 1;


            $dbStockUpdateUpload->completedCount = $dbStockUpdateUpload->recordsCount -5;
            $dbStockUpdateUpload->importSuccessRate = round($dbStockUpdateUpload->completedCount / $dbStockUpdateUpload->recordsCount, 2) * 100;

            $dbStockUpdateUpload->failedCount = $dbStockUpdateUpload->recordsCount - $dbStockUpdateUpload->completedCount;
            $dbStockUpdateUpload->importFailureRate = round($dbStockUpdateUpload->failedCount / $dbStockUpdateUpload->recordsCount, 2) * 100;

            $dbStockUpdateUpload->update();

            $this->f3->set("objStockUpdateUpload", $dbStockUpdateUpload);

            $this->webResponse->errorCode = 1;
            $this->webResponse->title = "";
            $this->webResponse->data = View::instance()->render('app/products/stock/uploadResult.php');
            echo $this->webResponse->jsonResponse();

        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
        }
    }

    function getBonusUpload()
    {
        if (!$this->f3->ajax()) {
            echo View::instance()->render('app/layout/layout.php');
        } else {
            $this->webResponse->errorCode = 1;
            $this->webResponse->title = "Bonus Update";//$this->f3->get('vModule_bonus_title');
            $this->webResponse->data = View::instance()->render('app/products/bonus/upload.php');
            echo $this->webResponse->jsonResponse();
        }
    }

    function postBonusUpload(){
        $ext = pathinfo(basename($_FILES["file"]["name"]), PATHINFO_EXTENSION);
        // basename($_FILES["file"]["name"])

        $targetFile = $this->getUploadDirectory() . $this->generateRandomString(16).".$ext";

        if($ext == "xlsx" || $ext == "xls" || $ext == "csv") {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                global $dbConnection;
                $dbStockUpdateUpload = new BaseModel($dbConnection, "stockUpdateUpload");
                $dbStockUpdateUpload->userId = $this->objUser->id;
                $dbStockUpdateUpload->filePath = $targetFile;
                $dbStockUpdateUpload->entityId = $this->objUser->entityId;
                $dbStockUpdateUpload->addReturnID();
                echo "OK";
            }
        }
    }

    function postBonusUploadProcess(){
        global $dbConnection;

        $dbStockUpdateUpload = new BaseModel($dbConnection, "stockUpdateUpload");

        $dbStockUpdateUpload->getByField("userId", $this->objUser->id, "insertDateTime desc");

        $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($dbStockUpdateUpload->filePath);
        try {
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
            $spreadsheet = $reader->load($dbStockUpdateUpload->filePath);

            $worksheet = $spreadsheet->getActiveSheet();

            $dbStockUpdateUpload->recordsCount = 0;
            foreach ($worksheet->getRowIterator() as $row) {
                $dbStockUpdateUpload->recordsCount++;
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,

            }
            $dbStockUpdateUpload->recordsCount -= 1;


            $dbStockUpdateUpload->completedCount = $dbStockUpdateUpload->recordsCount -5;
            $dbStockUpdateUpload->importSuccessRate = round($dbStockUpdateUpload->completedCount / $dbStockUpdateUpload->recordsCount, 2) * 100;

            $dbStockUpdateUpload->failedCount = $dbStockUpdateUpload->recordsCount - $dbStockUpdateUpload->completedCount;
            $dbStockUpdateUpload->importFailureRate = round($dbStockUpdateUpload->failedCount / $dbStockUpdateUpload->recordsCount, 2) * 100;

            $dbStockUpdateUpload->update();

            $this->f3->set("objBonusUpdateUpload", $dbStockUpdateUpload);

            $this->webResponse->errorCode = 1;
            $this->webResponse->title = "";
            $this->webResponse->data = View::instance()->render('app/products/bonus/uploadResult.php');
            echo $this->webResponse->jsonResponse();

        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
        }
    }
}
