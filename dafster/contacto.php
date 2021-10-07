<?php

include('header.php');

?>

	<!----- Start Techno Contact Area ----->
	<!--==================================================-->
	<div class="main_contact_area style_three pt-80 pb-90">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="section_title text_left mb-50 mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6>Contact Info</h6>
						</div>
						<div class="section_main_title">
							<h1>Get in Touch</h1>
						</div>
						<div class="section_title_text pt-2">
							<p>Lorem ipsum dolor sit amet cotetur adipi sicing elit, sed do mod tempor incid idunt ut labore etdolore emu some the and one baldbe dear sod ales justo sit amet urna auctor scele risqu.</p>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
					<div class="contact_address">
						<div class="contact_address_company mb-3">
							<ul>
								<li><i class="fa fa-envelope-o"></i><span><a href="#">Contact@examplesite.com</a></span></li>
								<li><i class="fa fa-mobile"></i><span> +088 01314 183818</span></li>
								<li><i class="fa fa-map-marker"></i> <span> 245, King Street, New York - 65432 NY.</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact_from">
						<div class="contact_from_box">
							<div class="contact_title pb-4">
								<h3>Send Message </h3>
							</div>
							<form id="contact_form" action="mail.php" method="POST" >
								<div class="row">
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<input type="text" name="name"  placeholder="Name">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<input type="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
										</div>
										<div class="quote_btn">
											<button class="btn" type="submit">Send Message</button>
										</div>
									</div>
								</div>
							</form>
							<p class="form-message"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Contact Area ----->
	<!--==================================================-->


<!--==================================================-->
	<!----- End Techno Map Area ----->
	<!--==================================================-->
<!--	<div class="google_map_area">
		<div class="row-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="google_map_area">
					<iframe class="map" src="https://snazzymaps.com/embed/65241"></iframe>		
				</div>
			</div>				
		</div>
	</div>-->

  <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60293.98980510486!2d-96.21133585708755!3d19.178844547997777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3414245ca78c5%3A0x18a4d642e936019b!2sVeracruz%2C+Ver.!5e0!3m2!1ses!2smx!4v1561951340164!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

	<!--==================================================-->
	<!----- End Techno Map Area ----->
	<!--==================================================-->
<?php
include('footer.php');
?>

