<?php

$arrayFooter = [
    "1" => "Nuestros Servicios",
    "1En" => "Our Services",
    "2" => "NEOMOTIC es una empresa mexicana especializada en servicios de instrumentación, control y telecomunicaciones para el sector industrial. Ofrecemos soluciones innovadoras y estrategias integrales especialmente diseñadas para cada uno de nuestros clientes.",
    "2En" => "NEOMOTIC is a Mexican company specialized in instrumentation, control and telecommunications services for the industrial sector. We offer innovative solutions and comprehensive strategies specially designed for each of our clients.",
    "3" => "Síguenos",
    "3En" => "Follow us",
    "4" => "Sistemas de monitoreo y control (SCADA)",
    "4En" => "Monitoring and control systems",
    "5" => "Sistemas de supresión de fuego y detección de gas",
    "5En" => "Fire suppression and gas detection systems",
    "6" => "Sistemas de paro por emergencia",
    "6En" => "Emergency shutdown systems",
    "7" => "Telemetría",
    "7En" => "Telemetry",
    "8" => "CCTVs",
    "8En" => "CCTVs",
    "9" => "Dirección de la compañia",
    "9En" => "Company Address",
    "10" => "Dirección de la compañia",
    "10En" => "Company Address",
    "11" => "Publicaciones Destacadas",
    "11En" => "Popular Post",
    "12" => "NOSOTROS",
    "12En" => "ABOUT",
    "13" => "RESPONSABILIDAD SOCIAL",
    "13En" => "SOCIAL RESPONSABILITY"
];


?>


<div class="footer-middle pt-70" style="background-image:url(assets/images/call-bg.png)" > 
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widgets-company-info">
						<div class="footer-bottom-logo pb-40">
							<img src="assets/images/neomotic/logo-neomotic.png" alt="" style="
    width: 80%;
"/>
						</div>
						<div class="company-info-desc">
							<p style="text-align: justify;"><?php echo $arrayFooter["2".$var] ?>
							</p>
						</div>
						<div class="follow-company-info pt-3">
							<div class="follow-company-text mr-3">
								<a href="#"><p><?php echo $arrayFooter["3".$var] ?></p></a>
							</div>
							<div class="follow-company-icon">
								<a href="https://www.facebook.com/neomoticautomation" target="_blank"><i class="fa fa-facebook" ></i></a>
								<a href="https://www.instagram.com/neomotic_/" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.linkedin.com/company/neomotic/" target="_blank"><i class="fa fa-linkedin"></i></a>
								<a href="https://api.whatsapp.com/send/?phone=5212294531339&text&app_absent=0" target="_blank"><i class="fa fa-whatsapp"></i></a>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widget-nav-menu">
						<h4 class="widget-title pb-4"><?php echo $arrayFooter["1".$var] ?></h4>
						<div class="menu-quick-link-container ml-4">
							<ul id="menu-quick-link" class="menu">
								<li><a href="#"><?php echo $arrayFooter["4".$var] ?></a></li>
								<li><a href="#"><?php echo $arrayFooter["5".$var] ?></a></li>
								<li><a href="#"><?php echo $arrayFooter["6".$var] ?></a></li>
								<li><a href="#"><?php echo $arrayFooter["7".$var] ?></a></li>
								<li><a href="#"><?php echo $arrayFooter["8".$var] ?></a></li>
					
							</ul>
						</div>
					</div>
				</div>	
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widgets-company-info">
						<h3 class="widget-title pb-4"><?php echo $arrayFooter["9".$var] ?></h3>
						<div class="company-info-desc">
                            <p><i class="fa fa-envelope-o"></i> info@neomotic.com</p>
						</div>	
						<div class="footer-social-info">
						<p><i class="fa fa-map-marker"></i>Bv.Adolfo Ruíz Cortines 1778 C.P: 94299</p>
						</div>
					
						<div class="footer-social-info">
							<p><i class="fa fa-phone"></i>+52 229 386 5110</p>
						</div>
						
					</div>					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div id="em-recent-post-widget">
						<div class="single-widget-item">
							<h4 class="widget-title pb-3"><?php echo $arrayFooter["11".$var] ?></h4>
                            
							<div class="recent-post-item active pb-3 row">
								<div class="recent-post-image mr-3">
									<a href="<?php echo $arrayNavegation["acerca".$var] ?>">
										<img width="80" height="80" src="assets/images/neomotic/about.jpg" alt="">					
									</a>
								</div>
								<div class="recent-post-text">
									<h6><a href="<?php echo $arrayNavegation["acerca".$var] ?>">
										<?php echo $arrayFooter["12".$var] ?>										
										</a>
									</h6>					
									
								</div>
							</div>
                            
							<div class="recent-post-item pt-1 ">
								<div class="recent-post-image mr-3">
									<a href="<?php echo $arrayNavegation["responsabilidad".$var]?>">
										<img width="80" height="80" src="assets/images/neomotic/rp1.jpg" alt="" style="margin-left: -10;margin-left: -13px;">					
									</a>
								</div>
								<div class="recent-post-text">
									<h6><a href="<?php echo $arrayNavegation["responsabilidad".$var]?>">
										<?php echo $arrayFooter["13".$var] ?>									
										</a>
									</h6>					
									
								</div>
							</div>
							
						</div>
					</div>	
				</div>
				
			</div>
			<div class="row footer-bottom mt-70 pt-3 pb-1">
				<div class="col-lg-6 col-md-6">
					<div class="footer-bottom-content">
						<div class="footer-bottom-content-copy">
							<p>© 2020 Neomootic</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="footer-bottom-right">
						<!--<div class="footer-bottom-right-text">
							<a class="absod" href="#">Privacy Policy </a>
							<a href="#"> Terms & Conditions</a>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>		
	<!--==================================================-->
	<!----- End Techno Footer Middle Area ----->
	<!--==================================================-->
	
	<!-- jquery js -->	
	<script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>
	<!-- bootstrap js -->	
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<!-- wow js -->
	<script type="text/javascript" src="assets/js/wow.js"></script>
	<!-- imagesloaded js -->
	<script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script type="text/javascript" src="venobox/venobox.js"></script>
	
	<!--  testimonial js -->	
	<script type="text/javascript" src="assets/js/testimonial.js"></script>
	<!--  animated-text js -->	
	<script type="text/javascript" src="assets/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script type="text/javascript" src="venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
	<!-- jquery nivo slider pack js -->
	<script type="text/javascript" src="assets/js/jquery.nivo.slider.pack.js"></script>
	<!-- jquery meanmenu js -->	
	<script type="text/javascript" src="assets/js/jquery.meanmenu.js"></script>
	<!-- jquery scrollup js -->	
	<script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script>
	<!-- theme js -->	
	<script type="text/javascript" src="assets/js/theme.js"></script>
		<!-- jquery js -->	
</body>
</html>