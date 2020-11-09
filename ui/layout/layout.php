<?php
ob_start("compress_htmlcode");
function compress_htmlcode($codedata)
{
	$searchdata = array(
		'/\>[^\S ]+/s', // remove whitespaces after tags
		'/[^\S ]+\</s', // remove whitespaces before tags
		'/(\s)+/s' // remove multiple whitespace sequences
	);
	$replacedata = array('>', '<', '\\1');
	$codedata = preg_replace($searchdata, $replacedata, $codedata);
	return $codedata;
}
?>
<!DOCTYPE html>
<html lang="<?php echo $LANGUAGE ?>" dir="<?php echo $cssDirection ?>" direction="<?php echo $cssDirection ?>" style="direction: <?php echo $cssDirection ?>">
<!--begin::Head-->

<head>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-performance.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-messaging.js"></script>



    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyBy1rh8zZNp1lnUBLyQ15a-cgNvZzsNFBU",
            authDomain: "aumet-com.firebaseapp.com",
            databaseURL: "https://aumet-com.firebaseio.com",
            projectId: "aumet-com",
            storageBucket: "aumet-com.appspot.com",
            messagingSenderId: "380649916442",
            appId: "1:380649916442:web:8ff3bfa9cd74f7c69969a3",
            measurementId: "G-YJ2BRPK2JD"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();

        var perf = firebase.performance();

        // Retrieve Firebase Messaging object.
        const messaging = firebase.messaging();
        messaging.getToken({vapidKey: "BAWnIpT8aicmoYRvjyaeTnWjpL1eMoMHEmWYvRmsehUF8JB0_BmM-yVqBK3PTxd2lgl2w8lx59FNlNcCPXswvDM"});

        messaging.onMessage((payload) => {
            console.log('Message received. ', payload);
            // ...
        });
    </script>

	<meta charset="utf-8" />
	<title><?php echo $vTitle; ?></title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://exhibition.aumet.tech" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap">
	<!--end::Fonts-->

	<!--end::Page Custom Styles-->

    <script src="//maps.google.com/maps/api/js?key=AIzaSyD7aGrZMxZrisUJsfG1rpTCjrUWqExhUO4"></script>
    <script src="/theme/assets/plugins/custom/gmaps/gmaps.js"></script>

	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="/theme/assets/plugins/global/plugins.bundle<?php echo $cssDirection == "ltr" ? "" : ".rtl" ?>.css" rel="stylesheet" type="text/css" />
	<link href="/theme/assets/plugins/custom/prismjs/prismjs.bundle.min.css" rel="stylesheet" type="text/css" />
	<link href="/theme/assets/css/style.bundle<?php echo $cssDirection == "ltr" ? "" : ".rtl" ?>.css<?php echo $platformVersion ?>" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="/theme/assets/css/themes/layout/header/base/light<?php echo $cssDirection == "ltr" ? "" : ".rtl" ?>.min.css<?php echo $platformVersion ?>" rel="stylesheet" type="text/css" />
	<link href="/theme/assets/css/themes/layout/header/menu/light<?php echo $cssDirection == "ltr" ? "" : ".rtl" ?>.min.css<?php echo $platformVersion ?>" rel="stylesheet" type="text/css" />
	<link href="/theme/assets/css/themes/layout/brand/light<?php echo $cssDirection == "ltr" ? "" : ".rtl" ?>.min.css<?php echo $platformVersion ?>" rel="stylesheet" type="text/css" />
	<link href="/theme/assets/css/themes/layout/aside/light<?php echo $cssDirection == "ltr" ? "" : ".rtl" ?>.min.css<?php echo $platformVersion ?>" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->

	<link href="/assets/css/app.css<?php echo $platformVersion ?>" rel="stylesheet" type="text/css" />

	<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">

	<link rel="icon" href="/favicons/favicon.ico">

	<meta name="theme-color" content="#ffffff">

	<script>
		var HOST_URL = "";
	</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1400
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#3699FF",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#E4E6EF",
						"dark": "#181C32"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#E1F0FF",
						"secondary": "#EBEDF3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#3F4254",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#EBEDF3",
					"gray-300": "#E4E6EF",
					"gray-400": "#D1D3E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#7E8299",
					"gray-700": "#5E6278",
					"gray-800": "#3F4254",
					"gray-900": "#181C32"
				}
			},
			"font-family": "Cairo"
		};
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="/theme/assets/plugins/global/plugins.bundle.min.js"></script>
	<script src="/theme/assets/plugins/custom/prismjs/prismjs.bundle.min.js"></script>
	<script src="/theme/assets/js/scripts.bundle.min.js"></script>
	<script src="/assets/js/jquery.foggy.min.js"></script>
	<!--end::Global Theme Bundle-->


</head>
<!--end::Head-->
<!--begin::Body ** subheader-enabled subheader-fixed -->

<body id="kt_body" class="header-fixed header-mobile-fixed  aside-enabled aside-fixed aside-minimize-hoverable aside-minimize page-loading">

	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<?php include_once 'headerMobile.php'; ?>
	<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root" id="kt_root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<?php if (!$vIsPlatformLocked) : ?>
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<?php include_once 'asideBrand.php'; ?>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<?php include_once file_exists(__DIR__ . "/../asideMenu/$objUser->menuCode.php") ? __DIR__ . "/../asideMenu/$objUser->menuCode.php" : "asideMenu.php";
					?>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
			<?php endif ?>
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header header-fixed">
					<!--begin::Container-->
					<div class="container-fluid d-flex align-items-stretch justify-content-between">
						<!--begin::Header Menu Wrapper-->
						<?php include_once 'headerMenu.php'; ?>
						<!--end::Header Menu Wrapper-->
						<!--begin::Topbar-->
						<?php include_once 'headerTopbar.php'; ?>
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid  py-7" id="kt_content">
				</div>
				<!--end::Content-->
				<?php include_once 'modal.php'; ?>
                <?php //include_once 'webGuidedTour-distributor.php'; ?>
				<!--begin::Footer-->
				<?php include_once 'footer.php'; ?>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->
	<!-- begin::User Panel-->
	<?php include_once 'userPanel.php'; ?>
	<!-- end::User Panel-->
	<!--begin::Quick Cart-->

	<!--end::Quick Cart-->
	<!--begin::Quick Panel-->
	<?php //include_once 'quickPanel.php'; ?>
	<!--end::Quick Panel-->
	<!--begin::Chat Panel-->
	<?php include_once 'chatPanel.php'; ?>
	<!--end::Chat Panel-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop">
		<span class="svg-icon">
			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
					<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>
	<!--end::Scrolltop-->
	<!--begin::Sticky Toolbar-->
	<?php //include_once 'stickyToolbar.php'; ?>
	<!--end::Sticky Toolbar-->

    <?php //include_once __DIR__. '/../onboarding/modals.php'; ?>

	<script>
		var docLang = "<?php echo $LANGUAGE; ?>";
        var _ajaxUrl = "<?php echo $ajaxUrl; ?>";
		var _id = "<?php echo $objUser->uid ?>";
	</script>

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/geodata/data/countries2.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

	<script type="text/javascript" src="/assets/js/math.min.js"></script>
    <script type="text/javascript" src="/assets/js/locals.js<?php echo $platformVersion ?>"></script>
	<script type="text/javascript" src="/assets/js/app.js<?php echo $platformVersion ?>"></script>

    <script type="text/javascript" src="/assets/js/onboarding.js<?php echo $platformVersion ?>"></script>

    <script>

        jQuery(document).ready(function () {
            WebApp.init();
        });
    </script>
</body>
<!--end::Body-->

</html>
<?php ob_end_flush(); ?>