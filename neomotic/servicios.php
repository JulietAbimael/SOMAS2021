<?php

include('header.php');


$arrayText1 = [
    "1" => "SEGURIDAD, SOLUCIONES EN TI,TRABAJOS ESPECIALIZADOS",
    "1En" => "SECURITY, IT SOLUTIONS, SPECIALIZED JOBS",
    "2" => "Tiempo-Real",
    "2En" => "Real-Time",
    "3"=> "Monitoreo en ",
    "3En"=> " Monitoring",
"4"=> "Trusted Services",
    "4En"=> "Servicios de confianza",
 "5"=> "Sporte 24/7",
    "5En"=> "24/7 Support",
    
 "6"=> "Expertos y Profesionales",
    "6En"=> "Expert & Professional",
    
 "7"=> "",
    "7En"=> "",
    
 "8"=> "",
    "8En"=> "",
    
 "9"=> "",
    "9En"=> "",
    
];


$arraySCADA = [
    "1" => "Sistema SCADA",
    "1En" => "SCADA System",
    "2" => "Los sistemas SCADA son necesarios para el sector industrial, ya que ayudan a mantener la eficiencia, procesan los datos para tomar decisiones inteligentes y comunican los eventos del proceso que ayudan a reducir el tiempo de respuesta y mantener la producción.

Los datos obtenidos por medio del sistema de monitoreo y control permiten tomar decisiones operativas sobre los equipos involucrados, y poder programar mantenimientos predictivos y correctivos.",
    "2En" => "The SCADA systems are fundamental for industrial organizations, since it helps to maintain the efficiency, process data for intelligent decisions and communicate the events of the process helping to reduce the response time and maintain the production.

The data gathered by use of monitoring and control systems allows making operational decisions about involved equipment and enables to schedule preventive and corrective maintenance."
    
];
?>

<!----- Start Techno Slider Area ----->
	<!--==================================================-->
	<div class="slider_area d-flex align-items-center slider10" id="home">
		<div class="container">
			<div class="row">
				<!--Start Single Portfolio -->
				<div class="col-lg-12">
					<div class="single_slider">
						<div class="slider_content">
							<div class="slider_text">
								<div class="slider_text_inner">
									<h5><?php echo $arrayText1["1".$var]?></h5>
									<h1><?php echo $arrayText1["3".$var]?></h1>
                                    <h1><span style="color:#bc23ab;"><?php echo $arrayText1["2".$var]?></span></h1>
								<!--	<h1>Overall IT Business</h1>-->
								</div>
							<!--	<div class="slider_text_desc pt-4">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto laborum eaque! Deserunt maxime, minus quas molestiae reiciendis.</p>
								</div>	-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="lines">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
        
	</div>
	<!--==================================================-->
	<!----- End Techno Slider Area ----->
	<!--==================================================-->
	<!--==================================================-->
	<!----- Start Techno Feature Area ----->
	<!--==================================================-->
	<div class="feature_area pb-2">
		<div class="container">
			<div class="row nagative_margin4">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_feature_six">
						<div class="single_feature_six_icon mr-3">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div>
						<div class="single_feature_six_content white">
							<h5>Trusted Services</h5>
							<p>Lorem ipsum dolor sit amet ame consecte tur adipisicing there. Ipsa libero abser</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_feature_six">
						<div class="single_feature_six_icon mr-3">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
						</div>
						<div class="single_feature_six_content white">
							<h5>24/7 Support</h5>
							<p>Lorem ipsum dolor sit amet ame consecte tur adipisicing there. Ipsa libero abser</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_feature_six">
						<div class="single_feature_six_icon mr-3">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</div>
						<div class="single_feature_six_content white">
							<h5>Expert & Professional</h5>
							<p>Lorem ipsum dolor sit amet ame consecte tur adipisicing there. Ipsa libero abser</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Feature Area ----->


<!----- Start Techno Service Area ----->
	<!--==================================================-->
	<div class="service_area style2 pt-80 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6"></div>
				<div class="col-lg-6">
					<div class="section_title text_left mb-55">
						<div class="section_main_title">
							<h1><?php echo $arraySCADA["1".$var]?></h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
						<div class="section_content_text pt-4">
							<p><?php echo $arraySCADA["2".$var]?></p>
						</div>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="service_single_thumb left">
						<div class="single_service_inner_thumb">
							<img src="assets/images/service1.png" alt="" />
						</div>
						<div class="single_service_brg">
							<div class="single_service_brg_thumb rotateme">
								<img src="assets/images/service-rot.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Service Area ----->

<div class="service_area pt-80 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text_center mb-55">
						<div class="section_sub_title uppercase mb-3">
							<h6>SERVICES</h6>
						</div>
						<div class="section_main_title">
							<h1>Services Style 15</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_ten wow flipInY animated" data-wow-delay="0ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
						<div class="single_service_style_ten">
							<div class="service_style_ten_icon pb-2">
								<div class="icon">
									<i class="flaticon-algorithm"></i>
								</div>
							</div>
							<div class="service_style_ten_content">
								<h4 class="pb-2"><a href="service-details.html">IT Professionals</a></h4>
								<p>It is a long established fact that reader will be distracted the readable content page when looking at its layout.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_ten wow flipInY animated" data-wow-delay="0ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
						<div class="single_service_style_ten">
							<div class="service_style_ten_icon pb-2">
								<div class="icon">
									<i class="flaticon-chart"></i>
								</div>
							</div>
							<div class="service_style_ten_content">
								<h4 class="pb-2"><a href="service-details.html">Software Engineers</a></h4>
								<p>It is a long established fact that reader will be distracted the readable content page when looking at its layout.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_ten wow flipInY animated" data-wow-delay="0ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
						<div class="single_service_style_ten">
							<div class="service_style_ten_icon pb-2">
								<div class="icon">
									<i class="flaticon-server"></i>
								</div>
							</div>
							<div class="service_style_ten_content">
								<h4 class="pb-2"><a href="service-details.html">Health &amp; Manufacturing</a></h4>
								<p>It is a long established fact that reader will be distracted the readable content page when looking at its layout.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_ten wow flipInY animated" data-wow-delay="0ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
						<div class="single_service_style_ten">
							<div class="service_style_ten_icon pb-2">
								<div class="icon">
									<i class="flaticon-work"></i>
								</div>
							</div>
							<div class="service_style_ten_content">
								<h4 class="pb-2"><a href="service-details.html">Security &amp; Surveillance</a></h4>
								<p>It is a long established fact that reader will be distracted the readable content page when looking at its layout.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_ten wow flipInY animated" data-wow-delay="0ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
						<div class="single_service_style_ten">
							<div class="service_style_ten_icon pb-2">
								<div class="icon">
									<i class="flaticon-process-1"></i>
								</div>
							</div>
							<div class="service_style_ten_content">
								<h4 class="pb-2"><a href="service-details.html">Automatic Optimization</a></h4>
								<p>It is a long established fact that reader will be distracted the readable content page when looking at its layout.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_ten wow flipInY animated" data-wow-delay="0ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
						<div class="single_service_style_ten">
							<div class="service_style_ten_icon pb-2">
								<div class="icon">
									<i class="flaticon-system"></i>
								</div>
							</div>
							<div class="service_style_ten_content">
								<h4 class="pb-2"><a href="service-details.html">Data Analysts</a></h4>
								<p>It is a long established fact that reader will be distracted the readable content page when looking at its layout.</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

<?php
include('footer.php');
?>

