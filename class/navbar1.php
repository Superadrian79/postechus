
<title>Navbar ES</title>

<?php  

class navbar {
	public $languages=array('ES','EN');
	public $lang;
	public function __construct($language, $leng, $path) {
        $this->lang = $leng;

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
									<li><a href="contacto.php"><div><i class="icon-phone-sign"></i>'.$this->lang->home_contact.'</div></a></li>
								</ul>
							</li>
                            
							<li><a href="seguridad.php"><div><i class="icon-code"></i>'.$this->lang->security.'</div></a><ul>
									<li><a href="NOC.php"><div><i class="icon-stack"></i>'.$this->lang->security_noc.'</div></a></li>
									<li><a href="SOC.php"><div><i class="icon-umbrella"></i>'.$this->lang->security_soc.'</div></a></li>
									<li><a href="assurance.php"><div><i class="icon-line-columns"></i>'.$this->lang->security_assurance.'</div></a></li>
									<li><a href="pentest.php"><div><i class="icon-align-justify2"></i>'.$this->lang->security_pentest.'</div></a></li>
									<li><a href="vulnerability.php"><div><i class="icon-ok-sign"></i>'.$this->lang->security_vulnerability.'</div></a></li>
								</ul>
							</li>
                            
							<li><a href="soluciones.php"><div><i class="icon-code"></i>'.$this->lang->solutions.'</div></a><ul>
									
									<li><a href="it_insight.php"><div><i class="icon-th"></i>'.$this->lang->solutions_itinsight.'</div></a></li>
									<li><a href="ncsm.php"><div><i class="icon-th"></i>'.$this->lang->solutions_ncsm.'</div></a></li>
									<li><a href="public.php"><div><i class="icon-line-columns"></i>'.$this->lang->social_osint.'</div></a></li>
									<li><a href="big.php"><div><i class="icon-user"></i>'.$this->lang->solutions_big.'</div></a></li>
									<li><a href="domainwhois.php"><div><i class="icon-stack"></i>'.$this->lang->solutions_domains.'</div></a></li>
									<li><a href="metodologia.php"><div><i class="icon-calendar3"></i>'.$this->lang->solutions_methodology.'</div></a></li>
									<li><a href="cth.php"><div><i class="icon-calendar3"></i>'.$this->lang->solutions_cthmdr.'</div></a></li>
									<li><a href="cognitus.php"><div><i class="icon-calendar3"></i>'.$this->lang->solutions_cognitus.'</div></a></li>
									<li><a href="tihub.php"><div><i class="icon-calendar3"></i>'.$this->lang->solutions_technology.'</div></a></li>
								</ul>

								<li><a href="#"><div><i class="icon-line-monitor"></i>'.$this->lang->technologies.'</div></a><ul>
									<li><a href="cth.php"><div><i class="icon-calendar3"></i>'.$this->lang->solutions_cthmdr.'</div></a></li>
									<li><a href="ncsm.php"><div><i class="icon-th"></i>'.$this->lang->solutions_ncsm.'</div></a></li>
									<li><a href="SGA.php"><div><i class="icon-tasks"></i>'.$this->lang->sga_security_gateway.'</div></a></li>
									<li><a href="it_insight.php"><div><i class="icon-external-link"></i>'.$this->lang->it_insight.'</div></a></li>
									<li><a href="tunich.php"><div><i class="icon-connection-25"></i>'.$this->lang->tunich_ai.'</div></a></li>
									<li><a href="edr.php"><div><i class="icon-line-lock"></i>'.$this->lang->edr.'</div></a></li>
									<li><a href="mdm.php"><div><i class="icon-line-disc"></i>'.$this->lang->mdm.'</div></a></li>
									<li><a href="siem.php"><div><i class="icon-line-eye"></i>'.$this->lang->siem.'</div></a></li>
									<li><a href="siem_compliance.php"><div><i class="icon-eye-open"></i>'.$this->lang->siem_compliance.'</div></a></li>
									<li><a href="soar.php"><div><i class="icon-lock"></i>'.$this->lang->soar.'</div></a></li>
									<li><a href="honeypot.php"><div><i class="icon-wrench"></i>'.$this->lang->honeypot.'</div></a></li>
								</ul>
                            
							<li><a href="capacitacion.php"><div><i class="icon-line-file"></i>'.$this->lang->training.'</div></a><ul>
									<li><a href="https://kb.postech.us" target="_blank"><div><i class="icon-stack"></i>'.$this->lang->training_kb.'</div></a></li>
									<li><a href="incident.php"><div><i class="icon-stack"></i>'.$this->lang->training_incident.'</div></a></li>
					                <li><a href="tecnicas.php"><div><i class="icon-umbrella"></i>'.$this->lang->training_techniques.'</div></a></li>
									<li><a href="fundamentos.php"><div><i class="icon-line-layout"></i>'.$this->lang->training_pci.'</div></a></li>
									<li><a href="network.php"><div><i class="icon-line-columns"></i>'.$this->lang->training_network.'</div></a></li>
									<li><a href="TI.php"><div><i class="icon-align-justify2"></i>'.$this->lang->training_it.'</div></a></li>
									<li><a href="ITIL.php"><div><i class="icon-ok-sign"></i>'.$this->lang->training_itil.'</div></a></li>
								</ul>
							</li>
                            
							<li><a href="alianzas.php"><div><i class="icon-line-check"></i>'.$this->lang->partnership.'</div></a><ul>
									<li><a href="https://tssc.mx/" target="_blank"><div><i class="icon-line-monitor"></i>'.$this->lang->tssc.'</div></a></li>
								</ul>
							</li>
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
											<a href="http://postech.us/webmail/" target="_blank"><img src="../images/correo.jpg" alt="." /></a>
										</div>
										<div style="padding-top:10px;">
											'.$this->lang->access_email.'
										</div>
									</div>

									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="https://pm.postech.us/feng/index.php" target="_blank"><img src="../images/pm.jpg" alt="." /></a>
										</div>
										<div style="padding-top:10px;">
											'.$this->lang->access_pm.'
										</div>
									</div>

									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="http://postech.us/soporte" target="_blank"><img src="../images/support.jpg" alt="." /></a>
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