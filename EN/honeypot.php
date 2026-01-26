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
	<title> Honeypot & Sandbox</title>

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
				<h1> Honeypot & Sandbox</h1>
				<span>PostecH Cyber Security Solutions</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Solutions</a></li>
					<li class="active"> Honeypot & Sandbox</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content -->
		<section id="content" style="margin-bottom: 0px;">

			<div class="content-wrap">

				<div class="section header-stick">
					<div class="container clearfix">


						<center><p></p><h3 class="titulo sombra" style="padding-top: 80px;">Honeypot &amp; Sandbox</h3><p></p></center>

						<p></p><hr class="hr1"><p></p>

						<p style="text-align: justify;"></p><br><br>

						<p class="blue"><b>Honeypot</b></p>

						<p style="text-align: justify;">It is called a honeypot software or set of computers intended to attract attackers, pretending to be systems vulnerable or weak to attacks. It is a computer security tool used to collect information about the attackers and their techniques. Honeypots can distract attackers from the most important machines in the system, and promptly warn the system administrator of an attack, in addition to allowing an in-depth examination of the attacker, during and after the honeypot attack. There are low interaction honeypots, used primarily as a security measure, and high interaction honeypots, capable of gathering much more information for research purposes.</p>

						<br><br>

						<p class="blue"><b>Sandbox</b></p>

						<p style="text-align: justify;">It is a process of separation of environment, that is, any computer is isolated, in order that said execution is safe to test without affecting the rest of the system, in case it was infected with any malicious software. It is extremely useful in computer security, since they allow us to execute and evaluate programs downloaded from the internet without compromising our computer against any type of malware. This isolated environment allows you to closely monitor the resources provided to the client programs to be executed, such as temporary space on disks and memory. Network access capabilities, the ability to inspect the host machine, and input devices, among others, are usually restricted. In this sense, process isolation is a specific example of virtualization.</p>

						<br><br><p style="text-align: center;"><img src="../images/honeypot/z01.png" alt=".">&nbsp;&nbsp;&nbsp;<img src="../images/honeypot/z02.jpg" alt="."></p>

					</div>
				</div>
				<div class="clear"></div>
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