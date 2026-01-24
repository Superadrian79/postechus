<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

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
	<title>Training</title>

</head>

<body class="stretched no-transition">

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
				<h1>training</h1>
				<span>Postech IT Solution Provider</span>
				<ol class="breadcrumb">
					<li class="active">Training</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">
<p>In POSTECH we are committed to the generation, adaptation and dissemination of knowledge within organizations.
Our goal is to promote learning through our training programs in Information Technology and Communications:</p>

<img src="../images/arr.png" alt="."> Best Practices.<br>
<img src="../images/arr.png" alt="."> Frameworks.<br>
<img src="../images/arr.png" alt="."> management and continuous improvement processes.<br>
<img src="../images/arr.png" alt="."> Information Security.<br><br>

<p>Our training services are offered by company or group, being very flexible in scheduling issues and facilities, in order to provide the best possible experience, understanding their TI training needs.</p>

<center><p><img class="img-responsive" src="../images/cap1.jpg" alt="Training"></p></center>
				  </div>
			
					<div class="clear"></div>
<!-- -->




<!-- -->


<div class="col_full just">

<p>We invite you to contact our sales department mail <a href="mailto:ventas@postech.com.mx">ventas@postech.com.mx</a> or using our form <a href="contacto.php">contact online</a> and so allow us to support you to develop a solution tailored to their needs in information technology and communications.</p>
</div>

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