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
	<title>PostecH Cyber Security Solutions</title>

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
				<h1>security it</h1>
				<span>PostecH Cyber Security Solutions S.A de C.V.</span>
				<ol class="breadcrumb">
					<li class="active">Security IT</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">
					  <p>Our portfolio of solutions is wide and varies according to the type of business and its activities. Among the options you can be found:</p>
					  <ul style="list-style:none">
					    <li><i class="icon-ok blue"></i>&nbsp; Availability Monitoring of platforms and services</li>
					    <li><i class="icon-ok blue"></i>&nbsp; Integrity monitoring information platforms and services</li>
					    <li><i class="icon-ok blue"></i>&nbsp; Perimeter protection against attackers and intrusion</li>
					    <li><i class="icon-ok blue"></i>&nbsp; Management systems data protection (DLP - Antivirus - Among others)</li>
					    <li><i class="icon-ok blue"></i>&nbsp; Vulnerability management platforms (Periodic testing)</li>
					    <li><i class="icon-ok blue"></i>&nbsp; Event management and security incidents (As a CSIRT)</li>
						<li><i class="icon-ok blue"></i>&nbsp; Device management and security platforms and communications (In conjunction with the NOC - Network Operations Center)</li>
					    <li><i class="icon-ok blue"></i>&nbsp; Among others…</li>
				      </ul>
				  </div>
			
					<div class="clear"></div>
<!-- -->

<center><div><img class="img-responsive" src="../images/Diagrama-Funcional.jpg" alt="."></div></center>

<!-- -->
<br><br>

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