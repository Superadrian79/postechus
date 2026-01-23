<?php
include('./verifyrecap.php');
$hc_apk = '0xD707d03D97348864591dE3870BeBe8aB9E3174e9';
$token = isset($_POST['h-captcha-response']) ? $_POST['h-captcha-response'] : '';
$verify_send = sendVerify($hc_apk,$token);
?>
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
	<meta name="author" content="SemiColonWeb" />
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
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Gracias</title>

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
				<h1>Contacto</h1>
				<span>Postech IT Solution Provider S.A de C.V.</span>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Contacto</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
		    
<?php
    if($verify_send) {
?>

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just" style="text-align:center">Muchas gracias por contactarnos. Su información fué enviada y en breve, nuestro staff se pondré en contacto con usted.</div>
			
					<div class="clear"></div>
<!-- -->

<div class="container clearfix"></div>
<!-- -->

<p><div style="text-align:center"><h1>MENSAJE ENVIADO CORRECTAMENTE</h1></div></p>
<p><div style="text-align:center"><h2>VUELVA PRONTO</h2></div></p>
<p style="text-align:center"><img src="../images/enviado.png" alt="."></p>

<!-- -->

<div class="col_full just">
  
  <p></p>
  
</div>

<!-- -->
				  <div class="clear"></div>

				</div>

			</div>

<?php
    } else {
    	echo '<div class="centrado-porcentual design" style="border-bottom: 1px solid #FFF; border-top: 1px solid #FFF;">';
    	echo '<h1 style="text-align:center;font-family: verdana;">ERROR 404</h1>';
    	echo '<p style="text-align:center;font-family: verdana;"> <b>La página a la cual desea acceder no existe </b></p>';
    	echo '<p style="text-align:center;font-family: verdana; font-size: 12px; padding-left: 20%; padding-right: 20%;">Le invitamos a que se ponga en contacto con nuestro departamento de ventas al correo <a href="mailto:ventas@postech.com.mx" style="color: #337ab7">ventas@postech.com.mx</a> ó usando nuestra forma de <a href="http://www.postech.com.mx/Postech/ES/contacto.php" style="color: #337ab7">contacto en línea</a> y así permitirnos apoyarle a desarrollar una solución a la medida de sus necesidades en tecnologías de la información y comunicaciones.</p>';
    	echo '</div>';
    }
?>

		</section><!-- #content end -->

<?php
include ('../class/footer.php');
$foot=new footer($path, $lang);
?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>

</body>
</html>

<?php

if($verify_send) {

$Nombre = $_POST['cname'];
$titulo = "New Mail Postech!";

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Postech <ventas@postech.com.mx>' . "\r\n";
$cabeceras .= 'From: '.$Nombre.' <'.$_POST['email'].'>' . "\r\n";

	
	
$mensaje = "<center><h4>Enviado desde: ${_SERVER['SERVER_NAME']}${_SERVER['PHP_SELF']}</h4><table width=\'700\' border=\"0\" bordercolor=\"#333333\" cellpadding=\"10\" cellspacing=\"0\" bgcolor=\"#d1d1d1\"><tr><td><table width=\"700\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\"><tr><td><img src=\"http://www.postech.us/images/mensaje_postech1.jpg\" width=\"700\" height=\"200\" alt=\"Mensaje Nuevo\" /></td></tr>
        <tr>
          <td  bgcolor=\"#d1d1d1\">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor=\"#a4b2c9\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#3c6bb7\"><h2>NOMBRE</h2></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#d1d1d1\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#0b192d\"><h4>".$Nombre."</h4></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#a4b2c9\" align=\"center\">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor=\"#d1d1d1\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#3c6bb7\"><h2>TELÉFONO LOCAL</h2></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#a4b2c9\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#0b192d\"><h4>".$_POST['local']."</h4></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#d1d1d1\" align=\"center\">&nbsp;</td>
        </tr>		
        <tr>
          <td bgcolor=\"#d1d1d1\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#3c6bb7\"><h2>TELÉFONO MÓVIL</h2></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#a4b2c9\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#0b192d\"><h4>".$_POST['movil']."</h4></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#d1d1d1\" align=\"center\">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor=\"#a4b2c9\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#3c6bb7\"><h2>CORREO ELECTRÓNICO</h2></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#d1d1d1\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#0b192d\"><h4>".$_POST['email']."</h4></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#a4b2c9\">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor=\"#d1d1d1\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#3c6bb7\"><h2>COMENTARIOS</h2></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#a4b2c9\" align=\"center\"><font face=\"Verdana, Geneva, sans-serif\" color=\"#0b192d\"><h4>".$_POST['comentarios']."</h4></font></td>
        </tr>
        <tr>
          <td bgcolor=\"#a4b2c9\">&nbsp;</td>
        </tr>
        <tr>
          <td><img src=\"http://www.postech.us/images/mensaje_postech2.jpg\" width=\"700\" height=\"72\" alt=\"http://www.postech.com.mx/\" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <center>";
mail($para, $titulo, $mensaje, $cabeceras);
    
}
?>
