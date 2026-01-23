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
	<title>Data Mining</title>

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
				<h1>data mining</h1>
				<span>Postech IT Solution Provider S.A de C.V.</span>
				<ol class="breadcrumb">
                	<li><a href="soluciones.php">Solutions</a></li>
					<li class="active">Data Mining</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="col_full just">
					<p style="text-align:center"><img src="../images/adbc.png" alt="ADB Connect"></p>
					<p style="text-align:center"><h3 class="blue">ADB CONNECT ®</h3></p>

				<p>	
Extract, transform and load (ETL) is a process that involves extracting data from multiple sources in different formats, the execution of the transformation that meets business needs and ultimately, the load on a target system. The target system may generally refer to any type of storage structure in itself is usually a database, but can also be an application, file, web service among others. The purpose of ADBConnect ETL is to move data from multiple sources, reformat, clean and standardize data so that you can analyze or adapt to meet business needs and promote interoperability.</p>
					
				<p>ADB Connect consists of 4 main modules:</p>

<img src="../images/arr.png" alt="."> ETL for extraction, transformation and loading of data.<br>
<img src="../images/arr.png" alt="."> BI to implement business rules.<br>
<img src="../images/arr.png" alt="."> Reporting to generate graphs and reports.<br>
<img src="../images/arr.png" alt="."> Georeferencing for geospatial location of records.<br>
<p>&nbsp;</p>

				<center><img class="img-responsive" src="../images/adb_sample.png" alt="."></p></center><p>

<p>In this a case of use it exemplified where:</p>

<img src="../images/arr.png" alt="."> The connection to the database is done by the client or access to certain files.<br>
<img src="../images/arr.png" alt="."> With the consultations provided the information is extracted.<br>
<img src="../images/arr.png" alt="."> The data are processed in the ADBConnect generating output data.<br>
<img src="../images/arr.png" alt="."> This output is stored either in tables, flat files, XML or other specified output.<br>

<p>&nbsp;</p>
<p>Advantage:</p>

<img src="../images/arr.png" alt="."> An ETL tool is able to communicate with different databases and read different file formats used throughout the organization.<br>
<img src="../images/arr.png" alt="."> ETL functions are incorporated into integration with enterprise applications.<br>
<img src="../images/arr.png" alt="."> During the process of production - transformation is possible to ensure the integrity of the data being processed, regardless of the source.<br>
<img src="../images/arr.png" alt="."> Simplifies the process of data migration.<br>
<img src="../images/arr.png" alt="."> Standardize the method of data migration.<br>
<img src="../images/arr.png" alt="."> Save all the logic of transformation.<br>
<img src="../images/arr.png" alt="."> Allows users, administrators and architects understand, review and modify the various processes of transformation.<br>
<img src="../images/arr.png" alt="."> It reduces the cost and effort associated with processing the data.<br>
<p>&nbsp;</p>
<p>Some of its most common uses are:</p>

<img src="../images/arr.png" alt="."> Database synchronization (synchronous and asynchronous).<br>
<img src="../images/arr.png" alt="."> Disaster recovery information (DRP schemes).<br>
<img src="../images/arr.png" alt="."> Consolidation of information for BI (Reporting).<br>
<img src="../images/arr.png" alt="."> Sending information between heterogeneous systems (Messaging).<br>
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