<?php

$arrayAbout = [
    "1" => "¿Quiénes Somos?",
    "1En" => "About Us ?",
    "2" => "Somos una Empresa Mexicana de Servicios de Ingeniería Especializada (TI), Automatización y Suministros Industriales, nuestra experiencia y proveedores asociados están enfocados sinérgicamente en desarrollar soluciones integrales de éxito.",
    "2En" => "We are a Mexican Company of Specialized Engineering Services (IT), Automation and Industrial Supplies, our experience and associated suppliers are synergistically focused on developing successful comprehensive solutions.",
    "3" => "EQUIPO DE TRABAJO",
    "3En" => "TEAMWORK",
    "4" => "Nuestra ",
    "4En" => "Our",
    "5" => "Filosofía",
    "5En" => "Philosophy",
    "6" => "VISIÓN",
    "6En" => "VISION",
    "7" => "En un mundo interrelacionado por las tecnologías de información y comunicaciones, ser líder global en la provisión de soluciones innovadoras de infraestructuras de hardware y software.",
    "7En" => "In a world interrelated by information and communication technologies, to be a global leader in the provision of innovative solutions for hardware and software infrastructures.",
    "8" => "MISIÓN",
    "8En" => "MISSION",
    "9" => "Desarrollar una empresa dedicada a la investigación, desarrollo e implementación de tecnología, servicios de hardware y software apoyándonos permanentemente en criterios vanguardistas y tecnologías en evolución, así como brindar servicios de asesoría y soporte que apoye y acompañe a nuestros clientes a lograr sus objetivos empresariales o particulares y la concretización de sus metas.",
    "9En" => "Develop a company dedicated to the research, development and implementation of technology, hardware and software services, permanently relying on avant-garde criteria and evolving technologies, as well as providing advisory and support services that support and accompany our clients to achieve their business objectives or individuals and the realization of their goals.",
    "10" => "¡Tus aliados en la inovación!",
    "10En" => "Your allies in innovation",
    "11" => "Objetivos",
    "11En" => "Objetives",
    "12" => "Proveer soluciones de tecnologías aplicadas a la gestión de procesos productivos, buscando permanentemente la diferenciación por la calidad del servicio y la satisfacción de nuestros clientes. Ser una compañía reconocida como “socio tecnológico” de sus clientes, por la calidad de las propuestas y soluciones.
Asegurar una cultura institucional basada en la ética, la innovación y la búsqueda permanente de la excelencia.",
    "12En" => "Provide technology solutions applied to the management of production processes, permanently seeking differentiation for the quality of service and the satisfaction of our customers. To be a company recognized as a technological partner of its clients, for the quality of the proposals and solutions. Ensure an institutional culture based on ethics, innovation and the permanent search for excellence."
    
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
                
                	<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service_style_nine wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
						<div class="services_style_nine_icon pb-25">
							<div class="icon">
								<i class="flaticon-intelligent"></i>
							</div>
						</div>
						<div class="service_style_nine_content">
							<h4> <?php echo $arrayAbout["11".$var] ?></h4>
							<p class="pt-15" style="text-align: justify"> <?php echo $arrayAbout["12".$var] ?></p>
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

