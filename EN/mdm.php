<!DOCTYPE html>
<html dir="ltr" lang="es-MX" xml:lang="es-MX">
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PBGBGN5');</script>
<!-- End Google Tag Manager -->

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="all" /><meta name="googlebot" content="index, follow" />
  	<meta name="description" content="El ETL ADBConnect es una herramienta para mover datos desde múltiples fuentes, reformatear, limpiar y normalizar los datos para que se puede analizar o adecuar para hacer frente a las necesidades del negocio y promover la interoperabilidad.">
  	<meta name="keywords" content="data, minning, adb, connect, cualquier base, datos, extraer, transformar, cargar, etl, multiples, fuentes, formatos, reglas">
  	<meta name="author" content="Postech IT Solutions Provider">	
	<meta name="viewport" content="width=device-width, initial-scale=1" />	 	
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />


	
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
	<link rel="stylesheet" href="../css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="../css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="../css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="../css/custom26.css" type="text/css"/>


	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title> MDM</title>

</head>

<body class="stretched no-transition">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBGBGN5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

<?php
$path_array = pathinfo($_SERVER['PHP_SELF']);
$path = explode("/",$path_array['dirname']);
$path =$path[count($path) - 1];
include ('../class/navbar.php');
include ("../language/$path.php");
$lang=new language();
$nav=new navbar($path, $lang, $path_array['filename']);
?>

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark">

			<div class="container clearfix">
				<h1> MDM</h1>
				<span>PostecH Cyber Security Solutions</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Solutions</a></li>
					<li class="active"> MDM</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content -->
		<section id="content" style="margin-bottom: 0px;">
			<div class="content-wrap">
				<div class="section header-stick">
					<div class="container clearfix">


						<div style="text-align:center"><p></p><h3 class="titulo sombra" style="padding-top: 80px;"> MDM </h3><p></p></div>

						<p></p><hr class="hr1"><p></p>

						<div style="background-color: #c1c1c1; padding: 15px; text-align: justify;">
							<p style="margin: 0;">Mobile Device Management (MDM) is a type of security software used by an IT department to monitor, manage, and protect employee mobile devices (laptops, smartphones, tablets, etc.) that are deployed across multiple mobile service providers and on multiple mobile devices. operating systems used in organizations.</p>
						</div>

						<br>

						<div style="text-align: justify;">
							<p>Mobile Device Management (MDM) is the process of managing mobile portable devices, primarily in terms of use and security. Mobile devices are managed through a strategy that tracks essential information about each device, determines which applications can be installed, and remotely protects mobile devices in the event of loss or theft. MDM can also track mobile device location by both user and geographic location.</p>
							<br>
							<p>In some corporate environments, mobile devices have completely replaced traditional desktops, a drastic change made possible by cloud computing. When a company runs everything from the cloud, employees can access the company's data, applications, and network virtually anywhere there is an Internet connection. This ease of use is exactly why mobile device management is crucial.</p>
							<br>
							<div style="width:300px; margin-right:auto; margin-left:auto;"><img class="img-responsive" src="../images/mdm/mdm1.jpg"></div>
						</div>

						<br><br>

						<div class="clear"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- #content end -->

<?php
include ('../class/footer.php');
$foot=new footer($path, $lang);
?>



	</div><!-- #wrapper end -->



	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>

</body>
</html>