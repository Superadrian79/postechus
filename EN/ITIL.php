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
	<title>ITIL v3 | IT Service Management | PostecH</title>

	<meta name="description" content="ITIL v3 focused on IT Service Management best practices to improve service delivery, operations, and continuous improvement aligned with business objectives." />

	<meta name="keywords" content="ITIL v3, IT service management, ITSM, ITIL best practices, service delivery management, IT operations management, IT governance, incident management ITIL, continuous service improvement" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="ITIL v3 | IT Service Management | PostecH" />
	<meta property="og:description" content="ITIL v3 framework for IT Service Management, enabling effective service delivery, operational efficiency, and continuous improvement." />
	<meta property="og:url" content="https://postech.us/EN/ITIL.php" />
	<meta property="og:site_name" content="PostecH Cyber Security Solutions" />

	<meta property="og:image" content="https://www.postech.us/Facebook-Card.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="628" />
	<meta property="og:image:type" content="image/jpeg " />

	<meta name="twitter:card" content="summary_large_image" />

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
				<h1>itil v 3 management services</h1>
				<span>PostecH Cyber Security Solutions</span>
				<ol class="breadcrumb">
                	<li><a href="capacitacion.php">Training</a></li>
					<li class="active">ITIL V 3 Management Services</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">
<p>The course ITIL® V3 born with the idea of offering a brief introduction to the set of Best Practices ITIL®, also known as Information Technology Infrastructure Library.</p>

<p>Its primary objective is to provide a reference to Spanish-speaking users that can hold and from which begin to start in the methods and concepts of ITIL®.</p>

<p>Obviously the course has no intention to replace formal training, but what is it to be a useful resource for people who want to dig a little deeper in ITIL® and for those interested in obtaining a supplementary official certification to its training, the "Foundation Certificate in TI Service Management".</p>

<center><p><img  class="img-responsive" src="../images/itil.jpg" alt="ITIL"></p></center>
				  </div>
			
					<div class="clear"></div>
<!-- -->




<!-- -->


<div class="col_full just">

<p>We invite you to contact our sales department mail <a href="mailto:ventas@postech.us">ventas@postech.us</a> or using our form <a href="contacto.php">contact online</a> and so allow us to support you to develop a solution tailored to their needs in information technology and communications.</p>
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