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
	<title> SOAR</title>

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
				<h1> SOAR</h1>
				<span>PostecH Cyber Security Solutions</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Tecnologías</a></li>
					<li class="active"> SOAR</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content -->
		<section id="content" style="margin-bottom: 0px;">
			<div class="content-wrap">
				<div class="section header-stick">
					<div class="container clearfix">

						<div style="text-align:center"><p></p><h3 class="titulo sombra" style="padding-top: 80px;"> SOAR </h3><p></p></div>

						<p></p><hr class="hr1"><p></p>

						<div style="background-color: #c1c1c1; padding: 15px; text-align: justify;">
							<p>SOAR son las siglas de Security Orchestration, Automation y Response. El término se utiliza para describir tres capacidades de software: gestión de amenazas y vulnerabilidades, respuesta a incidentes de seguridad y automatización de operaciones de seguridad. SOAR permite a las empresas recopilar datos relacionados con amenazas de una variedad de fuentes y automatizar las respuestas a amenazas de bajo nivel.</p>
						</div><br>

						<div style="text-align: justify;">

							<p>El término fue acuñado originalmente por Gartner, quien también definió las tres capacidades. La gestión de amenazas y vulnerabilidades (orquestación) cubre tecnologías que ayudan a corregir las amenazas cibernéticas, mientras que la automatización de las operaciones de seguridad (automatización) se relaciona con las tecnologías que permiten la automatización y la orquestación dentro de las operaciones.</p>
							<p>Como muchas de las amenazas cibernéticas que enfrentan las empresas requerirán múltiples tecnologías para combatirlas y varios miembros del equipo para realizar tareas manuales y vincular la información, la organización de la remediación debe ser perfecta. Si bien la orquestación tiene como objetivo la eficiencia al ejecutar la corrección de amenazas, la automatización tiene como objetivo reducir el tiempo de estas acciones mediante el aprendizaje automático, lo que hace que el proceso de orquestación en sí sea más eficiente.</p>
							<p>La respuesta a incidentes de seguridad (Respuesta) es cómo se planifica, gestiona, coordina y supervisa la respuesta a una amenaza. La respuesta mide el proceso de respuesta a una amenaza o vulnerabilidad y se puede utilizar para informar la estrategia.</p>
						</div>

						<br>

						<div class="col_half"><img src="../images/soar/soar01.jpg"></div>
						<div class="col_half col_last"><img src="../images/soar/soar2.jpg"></div>

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