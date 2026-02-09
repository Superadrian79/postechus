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
	<title>Honeypot de Seguridad | Detección y Análisis de Ataques | PostecH</title>

	<meta name="description" content="Soluciones Honeypot para la detección temprana de ataques, análisis de comportamiento malicioso y generación de inteligencia de amenazas. PostecH fortalece la seguridad empresarial mediante técnicas de engaño controlado." />

	<meta name="keywords" content="honeypot, honeypots de seguridad, detección de ataques, análisis de ataques, engaño de seguridad, threat intelligence, detección temprana de amenazas, seguridad proactiva, ciberseguridad avanzada, monitoreo de ataques" />

	<meta property="og:locale" content="es_MX" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Honeypot de Seguridad | Detección y Análisis de Ataques | PostecH" />
	<meta property="og:description" content="Honeypots de seguridad para detectar ataques, analizar comportamientos maliciosos y generar inteligencia de amenazas en tiempo real." />
	<meta property="og:url" content="https://postech.us/ES/honeypot.php" />
	<meta property="og:site_name" content="PostecH Cyber Security Solutions" />
	<meta property="og:image" content="https://www.postech.us/Facebook-Card.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="628" />
	<meta property="og:image:type" content="image/ jpeg " />

	<meta name="twitter:card" content="summary_large_image" />

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
                	<li><a href="soluciones.php">Soluciones</a></li>
					<li class="active"> Honeypot & Sandbox</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content -->
		<section id="content" style="margin-bottom: 0px;">
			<div class="content-wrap">
				<div class="section header-stick">
					<div class="container clearfix">

						<div style="text-align:center"><p></p><h3 class="titulo sombra" style="padding-top: 80px;">Honeypot &amp; Sandbox</h3><p></p></div>

						<p></p><hr class="hr1"><p></p>

						<p style="text-align: justify;"></p><br><br>

						<p class="blue"><b>Honeypot</b></p>

						<p style="text-align: justify;">Se denomina honeypot al software o conjunto de computadores cuya intención es atraer a atacantes, simulando ser sistemas vulnerables o débiles a los ataques. Es una herramienta de seguridad informática utilizada para obtener información sobre los atacantes y sus técnicas. Los honeypots pueden distraer a los atacantes de las máquinas más importantes del sistema, y advertir rápidamente al administrador del sistema de un ataque, además de permitir un éxamen en profundidad del atacante, durante y después del ataque al honeypot. Existen honeypots de baja interacción, usados fundamentalmente como medida de seguridad, y honeypots de alta interacción, capaces de reunir mucha más información para fines de investigación.</p>

						<br><br>

						<p class="blue"><b>Sandbox</b></p>

						<p style="text-align: justify;">Es un proceso de separación de entorno, es decir, se aísla un proceso informático cualquiera, con la finalidad de que dicha ejecución sea segura para probarla sin que pueda afectar al resto del sistema, en el caso de que estuviese infectado con cualquier software malicioso. Es sumamente útil en seguridad informática, ya que nos permiten ejecutar y evaluar programas descargados desde internet sin comprometer a nuestra computadora ante cualquier tipo de Malware. Ese entorno aislado permite controlar de cerca los recursos proporcionados a los programas cliente a ejecutarse, tales como espacio temporal en discos y memoria. Habitualmente se restringen las capacidades de acceso a redes, la habilidad de inspeccionar la máquina anfitrión y dispositivos de entrada entre otros. En este sentido, el aislamiento de procesos es un ejemplo específico de virtualización.</p>

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