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
	<title>IDS / IPS</title>

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
				<h1>IDS / IPS</h1>
				<span>Postech IT Solution Provider</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Solutions</a></li>
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

<p>The IDS is an intrusion detection system, as its name says in English "Intrusion Detection System", it is used to detect not allowed access to a network.</p>
<p>The IDS has sensors that allows them to obtain data so that when the IDS detects traffic can identify through anomalies or strange behavior if it is an attack or a false positive.
The mode of operation of the IDS is to analyze a very deep level all network traffic at the time that the traffic passes are already recognized with signatures of attacks and the strange behavior such as port scans for example are also controlled. This team must work in conjunction with a firewall because the IDS does not have the functionality to block an attack.</p>

<p class="blue">Types of IDS:</p>

<p><img src="../images/arr.png" alt="."> HIDS: search for data that have left attackers on a computer when they attempt to take control of it, with all the information they get draws conclusions.</p>
<p><img src="../images/arr.png" alt=".">NIDS: Network IDS detects attacks-wide network. You should see all traffic entering the network.</p> 
<p class="blue">IPS (Intrusion Prevention System).</p> 

<p>Controls access to illegitimate users by adding the ability to block attacks, not simply monitor them. You have several options to implement it, Hardware, software or any combination thereof. The IPS are categorized according to the way that detect malicious traffic:</p>


<img src="../images/arr.png" alt="."> Based on firms: compare traffic against signatures of known attacks, you must have the updated list of signatures.<br>
<img src="../images/arr.png" alt="."> Based on policies: define strict security policies, if traffic is permitted IPS allows traffic, if it is not blocking it.<br>
<img src="../images/arr.png" alt="."> Based on anomalies: This method is the one that generates more false positives because it is very difficult to be normal or standard. In this mode there are two options:<br>
<img src="../images/bull.png" alt="."> Statistical Detection Abnormalities: analyzes all traffic for a certain time, after this time creates a line of what is "normal or standard". After finishing this period if the behavior varies a lot compared to the rule created, it is taken as a chance to attack.<br>
<img src="../images/bull.png" alt="."> No statistic Detection Abnormalities. This option Administrator defines the line of what is "normal or standard" that will be the basis for comparison of traffic.<br><br>


<p>In short, the IPS adds the ability to block attacks and also proactively protects the network while the IDS does not allow block and protects the network reactively.</p>

<p>Our Solutions IDS and IPS based on proprietary and open source solutions, allow to have a combination of heterogeneous, synchronized and managed system of centralized and jointly as well as integration with reconstruction of traffic, firewalls, honeypots, etc. . In addition of course to have the backing of the facilities we have done and the sites and protect infrastructure today, one of the most robust solutions on the market.</p>

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