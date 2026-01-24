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
	<title>PCI DSS Fundaments</title>

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
				<h1>pci dss fundaments</h1>
				<span>PostecH Cyber Security Solutions</span>
				<ol class="breadcrumb">
                	<li><a href="capacitacion.php">Training</a></li>
					<li class="active">PCI DSS Fundaments</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">

<p>PCI DSS, in their native language (English): Payment Card Industry Data Security Standard Data Security Standard means for Payment Card Industry.</p>


<p>This standard has been developed by a committee formed by the major card companies (debit and credit) committee called PCI SSC (Payment Card Industry Security Standards Council) as a guide to help organizations that process, store and / or transmit cardholder data (or cardholders), to ensure that data, in order to prevent fraud involving payment cards debit and credit.</p>


<p>Companies that process, store or transmit card data must comply with the standard or risk losing their permits to process credit cards and debit cards (Loss franchise), face rigorous audits or payments multas1 Merchants and service providers credit card and debit must validate their compliance periodically standard.</p>


<p>This validation is performed by authorized Qualified Security Assessor (QSA) auditors. Only companies that process less than 80,000 transactions per year are allowed to perform a self-evaluation using a questionnaire provided by the Consortium PCI (PCI SSC).</p>

<p class="blue">Course PCI - DSS</p>

<p>The information security holders of credit cards has become a real concern worldwide, both for banks that issue payment cards to retailers that accept them and, of course, for customers who use.</p>

<p><strong>General objective.</strong></p>

<img src="../images/arr.png" alt="."> Generally analyze the PCI DSS Security Industry Data Payment Card standard.<br>
<img src="../images/arr.png" alt="."> Knowing its implications in organizations.<br>
<img src="../images/arr.png" alt="."> Knowing the fundamental tasks to meet the standard.<br><br>

<p>It is defined protection measures for infrastructure systems involved in the treatment, processing or storage of means of payment. Marking requirements this standard are known as PCI Data Security Standard (PCI-DSS).</p>

<center><p><img class="img-responsive" src="../images/fun1.jpg" alt="."></p></center>

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