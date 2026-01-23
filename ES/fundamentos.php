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
  	<meta name="description" content="La seguridad de la información de titulares de tarjetas de crédito se ha convertido en una verdadera preocupación en todo el mundo, tanto para los bancos que emiten tarjetas de pago como para los comercios que las aceptan y, por supuesto, para los clientes que las utilizan.">
  	<meta name="keywords" content="Curso PCI DSS, Estándar de Seguridad, Seguridad de Datos para la Industria de Tarjeta de Pago">
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
	<title>Fundamentos de PCI DSS</title>

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
				<h1>fundamentos de pci dss</h1>
				<span>Postech IT Solution Provider S.A de C.V.</span>
				<ol class="breadcrumb">
                	<li><a href="capacitacion.php">Capacitaci&oacute;n</a></li>
					<li class="active">Fundamentos de PCI DSS</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">


<p>PCI DSS, en su idioma nativo (Inglés): Payment Card Industry Data Security Standard, significa Estándar de Seguridad de Datos para la Industria de Tarjeta de Pago.</p>


<p>Este estándar ha sido desarrollado por un comité conformado por las compañías de tarjetas (débito y crédito) más importantes, comité denominado PCI SSC (Payment Card Industry Security Standards Council) como una guía que ayude a las organizaciones que procesan, almacenan y/o transmiten datos de tarjetahabientes (o titulares de tarjeta), a asegurar dichos datos, con el fin de prevenir los fraudes que involucran tarjetas de pago débito y crédito.</p>


<p>Las compañías que procesan, guardan o trasmiten datos de tarjetas deben cumplir con el estándar o arriesgan la pérdida de sus permisos para procesar las tarjetas de crédito y débito (Perdida de franquicias), enfrentar auditorías rigurosas o pagos de multas1 Los Comerciantes y proveedores de servicios de tarjetas de crédito y débito, deben validar su cumplimiento al estándar en forma periódica.</p>


<p>Esta validación es realizada por auditores autorizados Qualified Security Assessor (QSAs). Sólo a las compañías que procesan menos de 80,000 transacciones por año se les permite realizar una auto evaluación utilizando un cuestionario provisto por el Consorcio del PCI (PCI SSC).</p>

<p class="blue"><b>Curso PCI – DSS</b></p>

<p>La seguridad de la información de titulares de tarjetas de crédito se ha convertido en una verdadera preocupación en todo el mundo, tanto para los bancos que emiten tarjetas de pago como para los comercios que las aceptan y, por supuesto, para los clientes que las utilizan.</p>

<p><strong>Objetivo general.</strong></p>

<img src="../images/arr.png" alt="."> Analizar de forma general la norma PCI DSS, Seguridad de Datos de la Industria de Tarjetas de Pago.<br>
<img src="../images/arr.png" alt="."> Conocer sus implicaciones en las organizaciones.<br>
<img src="../images/arr.png" alt="."> Conocer las tareas fundamentales para cumplir con la norma.<br><br>

<p>Se trata de definir las medidas de protección para las infraestructuras de sistemas que intervienen en el tratamiento, procesamiento o almacenamiento de información de los medios de pago. Los requerimientos que marca este estándar son conocidos como PCI Data Security Standard (PCI-DSS).</p>

<center><p><img class="img-responsive" src="../images/fun1.jpg" alt="Curso PCI – DSS"></p></center>




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