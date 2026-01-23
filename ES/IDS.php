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
  	<meta name="description" content="IDS es un sistema de detección de intrusos que posee sensores que le permite obtener datos e identificar por medio de anomalías o comportamientos extraños, si se trata de un ataque o un falso positivo.">
  	<meta name="keywords" content="ids, ips, prevención, detección, sensores, intrusos, estática, heterogéneos, tráficos, sincronizados, respaldo, centralizada, reglas, reconstrucción, obtener datos">
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

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>IDS / IPS</title>

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
				<h1>IDS / IPS</h1>
				<span>Postech IT Solution Provider S.A de C.V.</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Soluciones</a></li>
					<li class="active">IDS / IPS</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">


<p>El IDS es un sistema de detección de intrusos, como su nombre en inglés lo dice “Intrusion Detection System”, se utiliza para detectar accesos no permitidos a una red.</p>
<p>El IDS posee sensores que les permite obtener datos, de manera que cuando el IDS detecta el tráfico puede identificar por intermedio de anomalías o comportamientos extraños si se trata de un ataque o un falso positivo.
El modo de funcionamiento del IDS es analizar a nivel muy profundo todo el tráfico de red, en el momento que dicho tráfico pasa se con firmas de ataques ya reconocidos, así como también se controlan los comportamientos extraños como el escaneo de puertos por ejemplo. Este equipo debe funcionar junto con un Firewall debido a que el IDS no tiene la funcionalidad de bloquear un ataque.</p>

<p class="blue"><b>Tipos de IDS:</b></p>

<p><img src="../images/arr.png" alt="."> HIDS: busca datos que hayan dejado los atacantes en un equipo cuando intentan tomar control del mismo, con toda la información que consiguen saca sus conclusiones</p>
<p><img src="../images/arr.png" alt=".">NIDS: IDS de red, detecta ataques a nivel de toda la red. Debe ver todo el tráfico que entra a la red.</p> 
<p class="blue"><b>IPS (Intrusion Prevention System)</b></p> 

<p>Controla el acceso de usuarios ilegítimos adicionando la posibilidad de bloquear los ataques, no simplemente de monitorearlos. Tiene varias opciones para implementarlo, Hardware, software o combinación de ambas. Los IPS se categorizan según el modo en el que detectan el tráfico malicioso:</p>


<img src="../images/arr.png" alt="."> Basado en firmas: compara el tráfico con firmas de ataques conocidos, debe tener la lista de firmas actualizada.<br>
<img src="../images/arr.png" alt="."> Basado en políticas: se definen políticas de seguridad estrictas, si el tráfico esta permitido el IPS permite el tráfico, si no lo está lo bloquea.<br>
<img src="../images/arr.png" alt="."> Basado en anomalías: este método es el que mas falsos positivos genera debido a que es muy difícil que es lo normal o estándar. En este modo encontramos dos opciones:<br><br>
<img src="../images/bull.png" alt="."> Detección estadística de Anormalidades: analiza todo el trafico durante un tiempo determinado, luego de este tiempo crea una línea de lo que es “normal o estandar”. Luego de terminado este período si el comportamiento varía mucho en comparación a la regla creada, se toma como una posibilidad de ataque.<br>
<img src="../images/bull.png" alt="."> Detección no Estadística de Anormalidades: en esta opción el Administrador define la línea de lo que es lo “normal o estándar” que va a ser la base para la comparación del tráfico.<br><br>


<p>En resumen, el IPS agrega la posibilidad de bloquear ataques y además protege de forma proactiva la red, mientras que el IDS no permite bloquear y protege de forma reactiva la red.</p>

<p>Nuestras Soluciones de IDS e IPS basadas en soluciones propietarias y de código abierto, permiten tener una combinación de sistema heterogéneos, sincronizados y administrados de manera centralizada y conjunta así como la integración con sistemas de reconstrucción de tráfico, firewalls, honeypots, etc. Además por supuesto de contar con el respaldo de las instalaciones que hemos realizado y los sitios y la infraestructura que hoy protegen, siendo una de las soluciones más robustas del mercado.</p>

					</div>
			
					<div class="clear"></div>
<!-- -->



<!-- -->


<div class="col_full just">

<p>Le invitamos a que se ponga en contacto con nuestro departamento de ventas al correo <a href="mailto:ventas@postech.com.mx">ventas@postech.com.mx</a> ó usando nuestra forma de <a href="contacto.php">contacto en línea</a> y así permitirnos apoyarle a desarrollar una solución a la medida de sus necesidades en tecnologías de la información y comunicaciones.</p></div>

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