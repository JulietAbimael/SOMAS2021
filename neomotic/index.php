<?php


$arrayClients = [
    "Navbar1" => "Nuestros",
    "Navbar1En" => "Our",
    "Navbar2" => "Clientes",
    "Navbar2En" => "Clients"
];


include('header.php');
?>


<iframe src="https://www.facebook.com/plugins/video.php?height=280&href=https%3A%2F%2Fwww.facebook.com%2Fneomoticautomation%2Fvideos%2F1481067212100706%2F&show_text=false&width=560&autoplay=1&mute=1&rel=0" data-autoplay="true" width="100%" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

	<!--==================================================-->
	<!----- Start Techno Call Do Action Area ----->
	<!--==================================================-->
	<div class="call_do_action pt-85 pb-130 bg_color" style="background-image:url(assets/images/slider/slider-4.jpg)" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title white text_center mb-60 mt-3">
						<div class="phone_number mb-3">
							<h5>+880 013 143 206</h5>
						</div>
						<div class="section_main_title">
							<h1>To make requests for the</h1>
							<h1>further information</h1>
						</div>
						<div class="button three mt-40">
							<a href="#">Join With Now<i class="fa fa-long-arrow-right"></i></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Call Do Action Area ----->
	<!--==================================================-->
<!--==================================================-->
	<!----- Start Techno Counter Area ----->
	<!--==================================================-->
	<div class="counter_area">
		<div class="container">
			<div class="row cntr_bg_up nagative_margin pt-50 pb-45">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">15</span><span>K</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Happy Clients</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">1280</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Account Number</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">10</span><span>K</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Finished Projects</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">992</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Win Awards</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Counter Area ----->
	<!--==================================================-->

<!--==================================================-->
	<!----- Start Techno Brand Area ----->
	<!--==================================================-->

	<div class="brand_area bg_color2 pt-35 pb-15">
		<div class="container">
            <div class="section_main_title" style="text-align: center;">
							<h1><?php echo $arrayClients["Navbar1".$var]?>  <span><?php echo $arrayClients["Navbar2".$var]?></span></h1>
						</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
					<div class="row">
						<!--brand owl curousel -->
						<div class="brand_list owl-carousel curosel-style">
							<!-- Start Single Brand -->
							<div class="col-lg-12" >
								<div class="single_brand mt-3 mb-5" >
									<div class="single_brand_thumb" style="background-color: #023969;padding: 25px;">
										<img src="assets/images/neomotic/clients/logo-culligan.png" alt=""  style="width: 80%;margin-top: 10%;margin-left: 15px;"/>
									</div>
								</div>
							</div>
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="assets/images/neomotic/clients/logo-cfe.png" alt="" style="width: 100%;"/>
									</div>
								</div>
							</div>
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="assets/images/neomotic/clients/logo-megamak.png" alt="" style="width: 60%;"/>
									</div>
								</div>
							</div>
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="assets/images/neomotic/clients/logo-pemex.png" style="
    width: 100%;
"alt="" />
									</div>
								</div>
							</div>
							<!-- Start Single Brand -->
							<div class="col-lg-12">
								<div class="single_brand mt-3 mb-5">
									<div class="single_brand_thumb">
										<img src="assets/images/neomotic/clients/ienova.jpg" style="width: 100%;height: 100px;" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Brand Area ----->

<?php
include('footer.php');
?>

