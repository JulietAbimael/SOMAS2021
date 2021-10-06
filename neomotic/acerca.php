<?php

$arrayAbout = [
    "1" => "¿Quiénes Somos?",
    "1En" => "About Us ?",
    "2" => "NEOMOTIC es una empresa mexicana especializada en servicios de instrumentación, control y telecomunicaciones para el sector industrial. Ofrecemos soluciones innovadoras y estrategias integrales especialmente diseñadas para cada uno de nuestros clientes.",
    "2En" => "NEOMOTIC is a Mexican company specialized in instrumentation, control and telecommunications services for the industrial sector. We offer innovative solutions and comprehensive strategies specially designed for each of our clients.",
    "3" => "EQUIPO DE TRABAJO",
    "3En" => "TEAMWORK",
    "4" => "Nuestra ",
    "4En" => "Our",
    "5" => "Filosofía",
    "5En" => "Philosophy",
    "6" => "VISIÓN",
    "6En" => "VISION",
    "7" => "Ser una empresa líder en el mercado de la tecnología, instrumentación, control y telecomunicaciones para el sector industrial a nivel nacional, que cumpla con estándares internacionales de calidad, apegados a una ética e integridad institucional, y que se encuentre respaldado por resultados operativos y financieros.",
    "7En" => "To be a leading company in technology market, instrumentation, control and telecommunication for industrial sector at the national level; that fulfills with international quality standards devoted to institutional ethics and integrity, and who is backed with operational and financial results.",
    "8" => "MISIÓN",
    "8En" => "MISSION",
    "9" => "Brindar servicios personalizados de instrumentación, control y telecomunicaciones a empresas del sector industrial. Involucrando innovación y trabajando por la calidad en cada uno de nuestros procesos.",
    "9En" => "To provide companies of industrial sector with personalized services of instrumentation, control and telecommunications, involving innovations and working for the quality of each one of our processes.",
    "10" => "Soluciones en
Instrumentación, Control y Telecomunicaciones",
    "10En" => ""
    
];

include('header.php');

?>

	<!--==================================================-->
	<!----- Start About----->
	<!--==================================================-->
<div class="about_area pt-70 pb-100" style="
    background-color: #f8f8f8;
">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="section_title text_left mb-40 mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6><?php echo $arrayAbout["10".$var] ?></h6>
						</div>
						<div class="section_main_title">
							<h1 ><?php echo $arrayAbout["1".$var] ?></h1>
							
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
						<div class="section_content_text bold pt-5">
							<p style="text-align: justify;"><?php echo $arrayAbout["2".$var] ?></p>
						</div>
					</div>
					<!--<div class="singel_about_left mb-30">
						<div class="singel_about_left_inner mb-3">
							<div class="singel-about-content boder pl-4">
								<p>The standard chunk of Lorem Ipsum used since the 1500s is and reproduced below for those interested. Sections 1.10.32 and also 1.10.33 from “de Finibus Bonorum et Malorum" by Cicero are alse reproduced in their exact original form, accompanied</p>
								<p>The standard chunk of Lorem Ipsum used since the 1500s is and reproduced below for those interested</p>
							</div>
						</div>
						<div class="singel_about_left_inner pl-4">
							<div class="button two">
								<a href="#">More Details</a>
							</div>
						</div>
					</div>	-->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="team_style_three mb-40">
						<div class="team_style_three_inner">
							<div class="team_style_three-thumb">
								<div class="team_style_three_thumb_inner">
									<img src="assets/images/neomotic/about.jpg" alt="">
								</div>
							</div>
							<div class="team_style_three_content">
								<div class="team_style_three_title">
									<h4><?php echo $arrayAbout["3".$var] ?></h4>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>	
	</div>
	<!--==================================================-->
	<!----- End About ----->
	<!--==================================================-->


<!----- Start Techno Service New Style ----->
	<!--==================================================-->
	<div class="service_area bg_color2 pt-80 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text_center mb-55">
						<div class="section_sub_title uppercase mb-3">
						
						</div>
						<div class="section_main_title">
							<h1><?php echo $arrayAbout["4".$var] ?> <span><?php echo $arrayAbout["5".$var] ?></span></h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_nine wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
						<div class="services_style_nine_icon pb-25">
							<div class="icon">
								<i class="flaticon-business-and-finance"></i>
							</div>
						</div>
						<div class="service_style_nine_content">
							<h4><?php echo $arrayAbout["8".$var] ?> </h4>
							<p class="pt-15" style="text-align: justify">
                            <?php echo $arrayAbout["9".$var] ?> 
                            </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_nine wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
						<div class="services_style_nine_icon pb-25">
							<div class="icon">
								<i class="flaticon-intelligent"></i>
							</div>
						</div>
						<div class="service_style_nine_content">
							<h4> <?php echo $arrayAbout["6".$var] ?></h4>
							<p class="pt-15" style="text-align: justify"> <?php echo $arrayAbout["7".$var] ?></p>
						</div>
					</div>
				</div>
                
                	<div class="col-lg-4 col-md-6 col-sm-12" style="
    background-color: darkmagenta;
">
					<div class="service_style_nine wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms" style="margin-top: 40px;">
						<div class="services_style_nine_icon pb-25" >
						
              	<img src="assets/images/neomotic/logo-footer-neomotic.png" style="width:50%">  
                    <img src="assets/images/neomotic/otaku2.jpg" style="width: 100%;
                height: 65%;">
            
					</div>
				</div>
                
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno Service New Style ----->
<?php
include('footer.php');
?>

