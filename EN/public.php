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
	<title>OSINT | Open Source Intelligence | PostecH</title>

	<meta name="description" content="OSINT (Open Source Intelligence) solutions for collecting, analyzing, and correlating publicly available information to identify threats, risks, and digital exposure across enterprise environments." />

	<meta name="keywords" content="OSINT, open source intelligence, OSINT analysis, digital investigation, threat intelligence, public data monitoring, cyber intelligence, risk identification, data-driven intelligence, security OSINT" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="OSINT | Open Source Intelligence | PostecH" />
	<meta property="og:description" content="Open Source Intelligence solutions to identify threats, risks, and digital exposure through analysis of publicly available information." />
	<meta property="og:url" content="https://postech.us/EN/osint.php" />
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
				<h1>OSINT</h1>
				<span>PostecH Cyber Security Solutions</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Solutions</a></li>
					<li class="active">OSINT</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">

<p class="blue"><strong>Public Intelligence Analytics</strong></p>

 

<p>The most complete tool on the market for data mining based on OSINT (Open Source Intelligence) with access from a web platform. Public Intelligence Analytics arises from the need to measure the behavior of millions of users who live on the internet, which integrate a social system that conductive thinking, thinking and desire. </p>
 

<p>The importance of the operation of Public Intelligence Analitics lies in the ability to visualize from the Internet the plurality of opinions, tastes, geographies, genres, feelings and behavior of individuals, allowing us to have the ability to link, analyze concepts and segment criteria creating universes Specific research and continuous monitoring, which can be used for different purposes, ranging from a marketing application to intelligence research.</p>


<p>Thanks to these properties of the tool, we can rely on this, to take measures of strategy based on the following principles:</p>

<img src="../images/bull.png" alt=".">Prevention<br>
<img src="../images/bull.png" alt=".">Action<br>
<img src="../images/bull.png" alt=".">Correction<br><br>

<p>With Public Intelligence you can develop the strategy you need precisely, according to the information you determine through various sources of extraction, including:</p>

 

<img src="../images/arr.png" alt="."> Social networks<br>
<img src="../images/arr.png" alt="."> Blogs<br>
<img src="../images/arr.png" alt="."> Forums <br>
<img src="../images/arr.png" alt="."> News <br>
<img src="../images/arr.png" alt="."> Static pages<br>
<img src="../images/arr.png" alt="."> Fonts with controlled access<br><br>



<center><p><img class="img-responsive" src="../images/public.jpg" alt="Public Intelligence"></p></center>

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