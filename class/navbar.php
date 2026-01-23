
<title>Navbar ES</title>

<?php  

class navbar {
	public $languages=array('ES','EN');
	var $lang;
	function navbar ($language, $leng, $path) {
		$this->lang=$leng;
echo '



		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="../images/logo.png"><img src="../images/logo.png" alt="Postech Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="../images/logo@2x.png"><img src="../images/logo@2x.png" alt="Postech Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"><a href="index.php"><div><i class="icon-home"></i>'.$this->lang->home.'</div></a>
								<ul>
									<li><a href="acerca.php"><div><i class="icon-suitcase"></i>'.$this->lang->home_about.'</div></a></li>
									<li><a href="historias.php"><div><i class="icon-globe"></i>'.$this->lang->home_sucess.'</div></a></li>
									<li><a href="contacto.php"><div><i class="icon-phone-sign"></i>'.$this->lang->home_contact.'</div></a></li>
								</ul>
							</li>
                            
							<li><a href="seguridad.php"><div><i class="icon-code"></i>'.$this->lang->security.'</div></a><ul>
									<li><a href="NOC.php"><div><i class="icon-stack"></i>'.$this->lang->security_noc.'</div></a></li>
									<li><a href="SOC.php"><div><i class="icon-umbrella"></i>'.$this->lang->security_soc.'</div></a></li>
									<li><a href="CSIRT.php"><div><i class="icon-line-layout"></i>'.$this->lang->security_csirt.'</div></a></li>
									<li><a href="assurance.php"><div><i class="icon-line-columns"></i>'.$this->lang->security_assurance.'</div></a></li>
									<li><a href="pentest.php"><div><i class="icon-align-justify2"></i>'.$this->lang->security_pentest.'</div></a></li>
									<li><a href="vulnerability.php"><div><i class="icon-ok-sign"></i>'.$this->lang->security_vulnerability.'</div></a></li>
									<li><a href="SGA.php"><div><i class="icon-th"></i>'.$this->lang->security_sga.'</div></a></li>
								</ul>
							</li>
                            
							<li><a href="soluciones.php"><div><i class="icon-code"></i>'.$this->lang->solutions.'</div></a><ul>
									<li><a href="cfi.php"><div><i class="icon-th"></i>'.$this->lang->solutions_cfi.'</div></a></li>
									<li><a href="data.php"><div><i class="icon-envelope-alt"></i>'.$this->lang->solutions_data.'</div></a></li>
									<li><a href="monitoreo.php"><div><i class="icon-th"></i>'.$this->lang->solutions_monitoring.'</div></a></li>
									<li><a href="nsm.php"><div><i class="icon-th"></i>'.$this->lang->solutions_nsm.'</div></a></li>
									<li><a href="public.php"><div><i class="icon-line-columns"></i>'.$this->lang->social_media_monitoring.'</div></a></li>
									<li><a href="perimetral.php"><div><i class="icon-calendar3"></i>'.$this->lang->solutions_perimetral.'</div></a></li>
									<li><a href="IDS.php"><div><i class="icon-line-expand"></i>'.$this->lang->solutions_ids.'</div></a></li>
									<li><a href="analysis.php"><div><i class="icon-time"></i>'.$this->lang->solutions_analysis.'</div></a></li>
									<li><a href="reconstruction.php"><div><i class="icon-time"></i>'.$this->lang->solutions_reconstruction.'</div></a></li>
									<li><a href="desencription.php"><div><i class="icon-time"></i>'.$this->lang->solutions_desencription.'</div></a></li>
									<li><a href="big.php"><div><i class="icon-user"></i>'.$this->lang->solutions_big.'</div></a></li>
									<li><a href="gestion.php"><div><i class="icon-envelope-alt"></i>'.$this->lang->solutions_incident.'</div></a></li>
									<li><a href="alojamiento.php"><div><i class="icon-th"></i>'.$this->lang->solutions_hosting.'</div></a></li>
									<li><a href="domainwhois.php"><div><i class="icon-stack"></i>'.$this->lang->solutions_domains.'</div></a></li>
									<li><a href="metodologia.php"><div><i class="icon-calendar3"></i>'.$this->lang->solutions_methodology.'</div></a></li>
									<li><a href="voz.php"><div><i class="icon-line-expand"></i>'.$this->lang->solutions_speech.'</div></a></li>
								</ul>
                            
							<li><a href="capacitacion.php"><div><i class="icon-line-file"></i>'.$this->lang->training.'</div></a><ul>
									<li><a href="incident.php"><div><i class="icon-stack"></i>'.$this->lang->training_incident.'</div></a></li>
					                <li><a href="tecnicas.php"><div><i class="icon-umbrella"></i>'.$this->lang->training_techniques.'</div></a></li>
									<li><a href="fundamentos.php"><div><i class="icon-line-layout"></i>'.$this->lang->training_pci.'</div></a></li>
									<li><a href="network.php"><div><i class="icon-line-columns"></i>'.$this->lang->training_network.'</div></a></li>
									<li><a href="TI.php"><div><i class="icon-align-justify2"></i>'.$this->lang->training_it.'</div></a></li>
									<li><a href="ITIL.php"><div><i class="icon-ok-sign"></i>'.$this->lang->training_itil.'</div></a></li>
								</ul>
							</li>
                            
							<li><a href="alianzas.php"><div><i class="icon-line-check"></i>'.$this->lang->partnership.'</div></a>

							<li><a href="mdr.php" target="_blank"><div><i class="icon-line-monitor"></i>CTH MDR Platform</div></a>

							<li><a href="https://tssc.mx/" target="_blank"><div><i class="icon-line-monitor"></i>CSOC 360</div></a>
                            

                            
							
						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-user"></i></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>'.$this->lang->access.'</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="http://postech.com.mx/webmail/" target="_blank"><img src="../images/correo.jpg" alt="." /></a>
										</div>
										<div style="padding-top:10px;">
											'.$this->lang->access_email.'
										</div>
									</div>

									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="https://pm.postech.com.mx/feng/index.php" target="_blank"><img src="../images/pm.jpg" alt="." /></a>
										</div>
										<div style="padding-top:10px;">
											'.$this->lang->access_pm.'
										</div>
									</div>

									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="http://postech.com.mx/soporte" target="_blank"><img src="../images/support.jpg" alt="." /></a>
										</div>
										<div style="padding-top:10px;">
											'.$this->lang->access_support.'
										</div>
									</div>
								</div>
							
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">';
						for($k=0;$k<count($this->languages);$k++){
							$lango=$this->languages[$k];
							if($language != $lango){
								echo '<div style=" margin-right:10px;"><a href="../'.$lango.'/'.$path.'.php"><img style="max-width:200%;" src="../images/'.$lango.'.jpg" width="22px"  height="22px" alt="'.$lango.'"></a></div>';
							}
						}
					
					echo '
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->



		';

			}
			
		}