
<?php  

class footer {
	var $lang;
	function footer ($language, $leng) {
		$this->lang=$leng;
echo '



		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div style="background-color:#283950"><br>
                
                </div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						'.$this->lang->copyright.'<br>
						<div class="copyright-links"><a href="../'.$language.'/uso.php">'.$this->lang->terms.'</a> / <a href="../'.$language.'/privacidad.php">'.$this->lang->privacy.'</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
						 <a href="mailto:ventas@postech.com.mx">'.$this->lang->mail.'</a>
					  </div>

						<div class="clear"></div>
                        <!-- <span class="middot">&middot;</span>  --> <a href="tel:+41250121"><i class="icon-phone-sign"></i> '.$this->lang->phone.'</a>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->



			<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

				';

			}
		}

