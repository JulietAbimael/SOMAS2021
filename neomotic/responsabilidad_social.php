<?php

include('header.php');

$arrayClients = [
    "1" => "Neomotic se compromete con la sociedad y el deporte  juvenil",
    "1En" => "Neomotic is committed to society and youth sports",
    "2" => "Empresa Socialmente Responsable",
    "2En" => "Socially Responsible Company",
    "3" => "En neomotic como parte de nuestra responsabilidad social, estamos orgullosos de apoyar a los jóvenes en la participación en el deporte, donde aprenden la importancia de valores fundamentales como la honestidad, el trabajo en equipo, el juego limpio, el respeto por una/o misma/o y por los demás.",
    "3En" => "At neomotic, as part of our social responsibility, we are proud to support young people in participating in sport, where they learn the importance of fundamental values such as honesty, teamwork, fair play, and respect for oneself. / or and for others.",
    "4" => "FOTOS",
    "4En" => "PHOTOS",
];

?>



<div class="about_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="section_title text_left mb-40 mt-3">
						<div class="section_sub_title uppercase mb-3">
						
						</div>
						<div class="section_main_title">
							<h3><?php echo $arrayClients["1".$var]?></h3>
						<span><?php echo $arrayClients["2".$var]?></span>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
						<div class="section_content_text bold pt-5">
							<p style="text-align: justify;" ><?php echo $arrayClients["3".$var]?></p>
						</div>
					</div>
						
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fneomoticautomation%2Fvideos%2F993675084462659%2F&show_text=false&width=560&autoplay=1&mute=1&rel=0" width="100%" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    
				</div>
                
                
			</div>
		</div>	
	</div>

	<!----- Start Techno Portfolio Area ----->
	<!--==================================================-->
	<div class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<!-- Start Section Tile -->
				<div class="col-lg-12">
					<div class="section_title text_center mb-50 mt-3">
						
						<div class="section_sub_title uppercase mb-3">
							<h2><?php echo $arrayClients["4".$var]?></h2>
						</div>
						
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
						
					</div>
					
				</div>
			</div>
		
			<div class="row image_load">
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item physics english">
					<div class="single_portfolio">
						<div class="single_portfolio_inner">
							<div class="single_portfolio_thumb">
								<a href="#"><img src="assets/images/neomotic/rp1.jpg" alt="" /></a>
							</div>
						</div>
						<div class="single_portfolio_content">
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="assets/images/neomotic/rp1.jpg"><i class="fa fa-search-plus"></i></a>
							</div>
							<!--<div class="single_portfolio_content_inner">
								<span>Prototype UX Research</span>
								<h2><a href="#">Digital Marketing</a></h2>
								
							</div>-->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
					<div class="single_portfolio">
						<div class="single_portfolio_inner">
							<div class="single_portfolio_thumb">
								<a href="#"><img src="assets/images/neomotic/rs2.jpg" alt="" /></a>
							</div>
						</div>
						<div class="single_portfolio_content">
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="assets/images/neomotic/rs2.jpg"><i class="fa fa-search-plus"></i></a>
							</div>
						<!--	<div class="single_portfolio_content_inner">
								<span>UX Research</span>
								<h2><a href="#">Awesome Creative</a></h2>
								
							</div>-->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
					<div class="single_portfolio">
						<div class="single_portfolio_inner">
							<div class="single_portfolio_thumb">
								<a href="#"><img src="assets/images/neomotic/rs3.jpg" alt="" /></a>
							</div>
						</div>
						<div class="single_portfolio_content">
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="assets/images/neomotic/rs3.jpg"><i class="fa fa-search-plus"></i></a>
							</div>
							<!--<div class="single_portfolio_content_inner">
								<span>UX Research</span>
								<h2><a href="#">Awesome Creative</a></h2>
								
							</div>-->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Portfolio Area ----->
	<!--==================================================-->

<?php
include('footer.php');
?>

