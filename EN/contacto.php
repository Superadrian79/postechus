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
	
	<!-- hcaptcha -->
	<script src="https://www.hCaptcha.com/1/api.js" async defer></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->


	<!-- Document Title
	============================================= -->
	<title>Contact | PostecH Cyber Security Solutions</title>

	<meta name="description" content="Contact PostecH Cyber Security Solutions to learn more about our cybersecurity services, IT solutions, professional training, and enterprise security support." />

	<meta name="keywords" content="contact PostecH, cybersecurity services, IT security solutions, enterprise security support, cybersecurity consulting, IT services contact, information security" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Contact | PostecH Cyber Security Solutions" />
	<meta property="og:description" content="Get in touch with PostecH to explore cybersecurity solutions, IT services, professional training, and enterprise security support." />
	<meta property="og:url" content="https://postech.us/EN/contacto.php" />
	<meta property="og:site_name" content="PostecH Cyber Security Solutions" />
	<meta property="og:image" content="https://www.postech.us/Facebook-Card.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="628" />
	<meta property="og:image:type" content="image/jpeg" />

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
				<h1>Contact</h1>
				<span>PostecH Cyber Security Solutions</span>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

<div class="col_full just"><div style="text-align:center">
Please add your details in the fields below. Fields marked with red are required.</div></div>
			
					<div class="clear"></div>
<!-- -->

<div class="container clearfix"></div>



<div style="clear:both"></div>


<div class="container" >
	<form class="form-horizontal" id="emailForm" role="form" name="form1" method="post" action="form.php" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="cname"><span style="color:#F00; font-size:18px;">&#8226;</span> Name:</label>
      <div class="col-sm-10">
        <input name="cname" type="text" class="form-control" id="cname" placeholder="Enter your name" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="movil"><span style="color:#F00; font-size:18px;">&#8226;</span>Phone:</label>
      <div class="col-sm-10">
        <input name="movil" type="text" class="form-control" id="movil" placeholder="Enter your Phone" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><span style="color:#F00; font-size:18px;">&#8226;</span> Email:</label>
      <div class="col-sm-10">
        <input name="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="text" class="form-control" id="email" placeholder="Enter your Email" required>
      </div>
    </div>
    
    
    <div class="form-group">
   <label class="control-label col-sm-2" for="comentarios"><span style="color:#F00; font-size:18px;">&#8226;</span> Comments:</label>
      <div class="col-sm-10">
      <textarea name="comentarios" rows="5" class="form-control" id="comentarios"  placeholder="Enter your Comments" required></textarea>
      </div>
    </div>
    
    <div class="col-sm-offset-2 col-sm-10">
    	<div class="h-captcha" data-sitekey="f9cbd12a-49ae-4c60-89f7-95605bc86486"></div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="button" id="button">Send</button>
      </div>
    </div>
  </form>
    </div>

    <br><br>
    <center><p class="blue"><strong>Montaña 80, Col. Los Pastores, Estado de México, Naucalpan, C.P. 53340</strong></p></center>    
                
<!-- --><!-- --><!-- -->

<div class="col_full just">
  
  <p></p>
  
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