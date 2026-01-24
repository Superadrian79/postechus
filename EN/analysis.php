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
	<title>Traffic Analysis</title>

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
				<h1>traffic analysis</h1>
				<span>PostecH Cyber Security Solutions</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones-EN.html">Solutions</a></li>
					<li class="active">Traffic Analysis</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full just">
<p><img class="img-responsive" src="../images/img07.jpg"></p>

<p class="blue">Traffic Analysis</p>

<p>It's called traffic analysis to the process of inferring information from the characteristics of communication traffic without analyzing the information callers are exchanged. For information we can rely for example on the origin and destination of communications, its size, frequency, timing, communication patterns, etc.</p>

<p>Traffic analysis is closely related to packet analysis and are often used together. In the packet analysis information in the packets flowing through the network is studied and from that tries to infer information.</p> 

<p>Traffic analysis infers information from observable characteristics of data flowing through the network. For example, it may be interesting packet size or timing of messages. Such techniques can be used by attackers to deduce such key sizes during interactive sessions or to deduce the origin and destination of a communication. It can also be used by network administrators to discover potentially malicious activities.
Therefore computer security deals with the study of traffic analysis techniques and countermeasures to protect us from this kind of techniques.</p>

<p>The origin of the traffic analysis is the analysis of traffic information that has traditionally been done for military applications. This type of information systems traditionally inferred from the analysis of the communication signals. Today traffic analysis is very useful for inferring information from the traffic there in communications networks.</p>

<p>Postech has one of the analysis tools more effective market traffic, traffic analysis used for large volumes (Big data analytics), with applications for industry standards and banking applications for military use. It allows real-time analysis of large volumes of information and to perform semantic searches within the contents. Allowing to make alerts related to content and to discover potentially malicious activities. And of course traffic containing malicious code such as viruses, worms, backdoors, etc.</p>

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