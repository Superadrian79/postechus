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

    <link rel="stylesheet" type="text/css" href="../swstyles.css" />       

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Domain Check </title>

<?php 

$swSecure = false;
$swCacheLifetime = 0;
$swClean = 'optional';
$swHilite = 'optional';
$swAuth = true;
$swOnlyShowAuth = false;
$swTlds = '';
$swListTlds = false;
$swTldOptions = true;
$swAlphabeticalTlds = false;
$swAvailableMessage = '{domain} is <span style="color: green;">Available.</span>';
$swRegisteredMessage = '{domain} is <span style="color: red;">Registered.</span>';
$swSubmitLabel = '>>';
$swOnlyShowAvailability = false;
$swDefaultSld = 'domain';
$swDefaultTld = 'com';
?>


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
				<h1>Domain Check</h1>
				<span>Postech IT Solution Provider S.A de C.V.</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Solutions</a></li>
					<li class="active">Domain Check</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">




			
					<div class="clear"></div>
<!-- -->

<p class="blue"><strong>Register your domain with Postech today and get the following benefits:</strong></p>
 
<ul>
	<li>Security - Protect your domain by registering with a company Accredited by ICANN, do not leave your business to anyone.</li>
	<li>Rapidity - Domain registration immediately as soon as your payment is received in our system. If paying by credit card is done automatically (in other forms of payment the registration is done until the payment is received in the system which takes from 1 to 24 working hours).</li>
	<li>Property - Registration is done in your name you are the owner of your domain and you will have an invoice that supports it.</li>
	<li>Control - In our Client Area you can change all the times you want the data of the domains you register including the DNS.</li>
	<li>Tranquility - At least 20 days in advance we notify you of the payment of the domain so you can renew it on time.</li>
	<li>Experience - Since 1999 in Postech we are pioneers of the Internet, we know our business very well and we constantly renew ourselves to provide the best to our customers.</li>
</ul>
 




<?php

require_once(dirname(__FILE__).'/samswhois/samswhois.inc.php');

?>



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