<?php header("Location: EN/index.php"); ?>

<!DOCTYPE html>
<html dir="ltr" lang="es-MX" xml:lang="es-MX">
<head>


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />	
  	<meta name="keywords" content="consultoria, servicios, TI, monitoreo, big data, servicios, analisis, seguridad, informatica, seguridad informatica, perimetral, firewall, ids, ips, telecomunicaciones, TICS, BSM, BCM, DRP, BCP, ITIL, Cobit, ISO 27001, ISO 27002, ISO 27035, cert, csirt, noc , soc, seguridad informatica, capacitacion, cursos, TT, TICs, analisis de datos, mineria de datos, dataware, hosting, housing, desarrollo, politicas, normatividad, enisa, first, alapsi, 20/20, trafico, red, reconstruccion, desencripcion, ciber defensa, ciber seguridad, firewall" />
  	<meta name="rights" content="PostecH Cyber Security Solutions" />
  	<meta name="description" content="PostecH Cyber Security Solutions, Soluciones en monitoreo y seguridad de la información: Hacemos eficiente y productivo su negocio, sin grandes inversiones utilizando código abierto en nuetsras aplicaciones." />
  	<META NAME="ROBOTS" CONTENT="All">

	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon-152.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon-120.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" 	 href="favicon-72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57"	 href="favicon-57.png">

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">


	<!-- Document Title
	============================================= -->
	<title>PostecH Cyber Security Solutions</title>

<style type="text/css">

	body, html {height: 100%; overflow:hidden;}
	#background { background-image: url('images/bg1.jpg');}
	#foreground {background-image: url('images/bg2.png');}
	#fore-foreground {background-image: url('images/bg3.png');}
	#fore-fore-foreground {background-image: url('images/bg4.png');}
	.mouse-bg { left: 0; right: 0; bottom: 0; top: 0; position: fixed; z-index: -1; }
    .design { padding-top: 20px; padding-bottom: 20px; background-color: rgba(0,0,0,.8); text-align: center;}
	.centrado-porcentual {position: absolute; width: 100%;  left: 50%;  top: 50%; transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); }

</style>

</head>

<body>



<div class="centrado-porcentual design" style="border-bottom: 1px solid #FFF; border-top: 1px solid #FFF;">

		<a href="ES/index.php"><img src="images/postech-log1.png" class="responsive"></a>

<?php
$pais="No definido"; $accept = strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]); $lang = explode( ",", $accept);
$idioma_primario = explode('-',$lang[0]); $idioma = $idioma_primario[0]; if($idioma_primario[1]){
$pais = explode( "-", $lang[0]); $pais = $pais[1]; }
/*echo "<br />"; 
echo "El idioma primario es = " . $idioma; */
echo "<br />"; 
echo "El código de país es = ". $pais;

if ($idioma=='es'){ $linkr="ES/index.php"; } else { $linkr="EN/index.php"; } $delay = "100"; 

echo "<br><center><b> Idioma detectado es =</b> $idioma</center>"; 
echo '<meta http-equiv="refresh" content="'.$delay.';url='.$linkr.'">';
 ?>

</div>


<!-- Parallax -->

<div id="background" class="mouse-bg"></div>
<div id="foreground" class="mouse-bg"></div>
<div id="fore-foreground"  class="mouse-bg"></div>
<div id="fore-fore-foreground"  class="mouse-bg"></div>
<script src="js/jquery.min.js"></script>

<script src="js/mouse.parallax.js"></script>

<script>
$(document).ready(function() {
				$('#background').mouseParallax({ moveFactor: 5 });
				$('#foreground').mouseParallax({ moveFactor: 10 });
				$('#fore-foreground').mouseParallax({ moveFactor: 15 });
				$('#fore-fore-foreground').mouseParallax({ moveFactor: 20 });
				
				$('body').height(3000);
			});
</script>

</body>
</html>