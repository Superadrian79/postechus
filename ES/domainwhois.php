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
  	<meta name="description" content="Public Intelligence Analytics es la herramienta más completa del mercado para minería de datos basada en OSINT (Open Source Intelligence) con acceso desde una plataforma web.">
  	<meta name="keywords" content="investigaciones de inteligencia, investigacion en redes sociales, monitoreo en social media, pluralidad de opiniones, gustos, geografías, géneros, sentimientos, comportamiento de los individuos">
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

    <link rel="stylesheet" type="text/css" href="../swstyles.css" />       

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Dominios</title>

<?php 

$swSecure = false;
$swCacheLifetime = 0;
$swClean = 'optional';
$swHilite = 'optional';
$swAuth = true;
$swOnlyShowAuth = false;
$swTlds = '';
$swListTlds = false;
$swTldOptions = true;
$swAlphabeticalTlds = false;
$swAvailableMessage = '{domain} is <span style="color: green;">Available.</span>';
$swRegisteredMessage = '{domain} is <span style="color: red;">Registered.</span>';
$swSubmitLabel = '>>';
$swOnlyShowAvailability = false;
$swDefaultSld = 'domain';
$swDefaultTld = 'com';
?>


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
				<h1>Disponibilidad de Dominios</h1>
				<span>Postech IT Solution Provider S.A de C.V.</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Soluciones</a></li>
					<li class="active">Disponibilidad de Dominios</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">

<!-- -->

<p class="blue"><strong>Registre hoy su dominio con Postech y obtenga los siguientes beneficios</strong></p>
 
<ul>
	<li>Seguridad - Proteja su dominio al registrarlo con una empresa Acreditada por ICANN, no deje en manos de cualquiera su negocio.</li>
	<li>Rapidez - Registro de dominio de forma inmediata en cuanto su pago es recibido en nuestro sistema. Si paga con tarjeta de crédito se hace automáticamente (en otras formas de pago el registro se hace hasta que se recibe el pago en el sistema lo cual toma de 1 hasta 24 horas hábiles).</li>
	<li>Propiedad - El registro se hace a su nombre usted es el dueño de su dominio y tendrá una factura que lo respalda.</li>
	<li>Control - En nuestra Área de Clientes puede cambiar todas las veces que desee los datos de los dominios que registre incluyendo los DNS.</li>
	<li>Tranquilidad - Con al menos 20 días de anticipación le notificamos del pago del dominio para que lo pueda renovarlo a tiempo.</li>
	<li>Experiencia - Desde 1999 en Postech somos pioneros del Internet, conocemos muy bien nuestro negocio y constantemente nos renovamos para brindarles lo mejor a nuestros clientes.</li>
</ul>
 




<?php

require_once(dirname(__FILE__).'/samswhois/samswhois.inc.php');

?>


<!-- -->
				  <div class="clear"></div>

				</div>

			</div>

		</section><!-- #content end -->

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