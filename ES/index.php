<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<?php
$path_array = pathinfo($_SERVER['PHP_SELF']);
$path = explode("/",$path_array['dirname']);
$path =$path[count($path) - 1];
include ('../class/head.php');
include ("../language/$path.php");
$lang=new language();
$head=new head($path, $lang, $path_array['filename']);
?>
<body class="stretched">

	<!-- Document Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="full-header dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html">
								<img class="logo-default" srcset="../images/logo.png, i../mages/logo@2x.png 2x" src="../images/logo@2x.png" alt="Postech Logo">
							</a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
							<div style=" margin-right:10px;"><a href="../EN/index.php"><img style="max-width:200%;" src="../images/EN.jpg" width="22px" height="22px" alt="EN"></a></div>
							</div><!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<div id="top-cart" class="header-misc-icon d-none d-sm-block">
								<a href="#" id="top-cart-trigger"><i class="fa-solid fa-user"></i></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt"></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Blue Round-Neck Tshirt with a Button</a>
													<span class="top-cart-item-price d-block">$19.99</span>
												</div>
												<div class="top-cart-item-quantity">x 2</div>
											</div>
										</div>
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress"></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Light Blue Denim Dress</a>
													<span class="top-cart-item-price d-block">$24.99</span>
												</div>
												<div class="top-cart-item-quantity">x 3</div>
											</div>
										</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price">$114.95</span>
										<a href="#" class="button button-3d button-small m-0">View Cart</a>
									</div>
								</div>
							</div><!-- #top-cart end -->

						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="index.html"><div>Home</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="niche-demos.html"><div>Niche Demos</div></a></li>
										<li class="menu-item"><a class="menu-link" href="onepage-demos.html"><div>One-Page Demos</div></a></li>
									</ul>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="#"><div>Features</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="#"><div><i class="bi-menu-button-wide-fill"></i>Headers</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item"><a class="menu-link" href="#"><div>Custom Layouts</div></a></li>
												<li class="menu-item"><a class="menu-link" href="header-light.html"><div>Light Version</div></a></li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small"><a class="menu-link" href="#"><div><i class="bi-border-style"></i>Menu Styles</div></a></li>
										<li class="menu-item"><a class="menu-link" href="mega-menu.html"><div><i class="bi-layout-split"></i>Mega Menu</div></a></li>
										<li class="menu-item-divider"></li>
										<li class="menu-item"><a class="menu-link" href="forms.html"><div><i class="bi-postcard"></i>Forms</div></a></li>
										<li class="menu-item"><a class="menu-link" href="contact.html"><div><i class="bi-envelope-at"></i>Contact Pages</div></a></li>
									</ul>
								</li>

							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<section id="slider" class="slider-element slider-parallax swiper_wrapper vh-75">
			<div class="slider-inner">

				<div class="swiper swiper-parent">
					<div class="swiper-wrapper">

					<div class="video-wrap no-placeholder">
						<video poster="../images/videos/tech_bg.jpg" preload="auto" loop autoplay muted playsinline>
							<source src='../images/videos/tech_bg.mp4' type='video/mp4'>
							<source src='../images/videos/tech_bg.webm' type='video/webm'>
						</video>
						<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
					</div>

						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp"><img class="img-responsive" src="../images/postech-log1.png" alt="Postech"></h2>
                        		<p data-caption-animate="fadeInUp" data-caption-delay="200">Postech IT Solution Provider S.A de C.V. © 2019 </p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../images/slider/swiper/1.jpg');"></div>
						</div>

						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Seguridad IT</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Comprometidos con la generación, adaptación y difusión del conocimiento de TICs y seguridad de TI dentro de las organizaciones. Nuestro objetivo es fomentar el aprendizaje a través de nuestros programas de formación empresarial.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../images/1.jpg');"></div>
						</div>

						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Soluciones</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Utilizando herramientas, tecnología y experiencia líderes apoyamos a las organizaciones a ampliar sus capacidades contra ataques coordinados, el crecimiento de la normativa y la creciente presión para adoptar el nuevo estilo de TI.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../images/2.jpg');"></div>
						</div>

						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Capacitación</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Comprometidos con la generación, adaptación y difusión del conocimiento de TICs y seguridad de TI dentro de las organizaciones. Nuestro objetivo es fomentar el aprendizaje a través de nuestros programas de formación empresarial.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../images/3.jpg');"></div>
						</div>

						<!--
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp"><a href="http://postech.tv" target="_blank"><img src="../images/postechtv.png"></a></h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">SOLUCIONES DE CONSULTA, REPRODUCCIÓN, ALMACENAMIENTO E INGESTA DE ARCHIVOS DE VIDEO</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../images/4.jpg');"></div>
						</div>

						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp"><a href="http://csoc360.com" target="_blank"><img class="notopmargin flip animated" src="../images/csoc360.png"></a></h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">CSOC360 implementa soluciones integrales de seguridad y la construcción de centros capacitados para solucionar factores de vulnerabilidad empresarial</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('../images/5.jpg');"></div>
						</div> -->

					</div>
					<div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
					<div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>/div>
				</div>

			</div>
		</section>

		<!-- Content -->
		<section id="content">
			<div class="content-wrap">


			




			</div>
		</section><!-- #content end -->

		<!-- Footer -->
		<footer id="footer" class="dark">

			<!-- Copyrights -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end mb-2">
								<a href="#" class="social-icon border-transparent si-small h-bg-facebook">
									<i class="fa-brands fa-facebook-f"></i>
									<i class="fa-brands fa-facebook-f"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-x-twitter">
									<i class="fa-brands fa-x-twitter"></i>
									<i class="fa-brands fa-x-twitter"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
									<i class="fa-brands fa-linkedin"></i>
									<i class="fa-brands fa-linkedin"></i>
								</a>
							</div>

							<i class="bi-envelope"></i> info@canvas.com <span class="middot">&middot;</span> <i class="fa-solid fa-phone"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="bi-skype"></i> CanvasOnSkype
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="../js/plugins.min.js"></script>
	<script src="../js/functions.bundle.js"></script>

</body>
</html>