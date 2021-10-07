<?php

$arrayHeader = [
    "Navbar1" => "INICIO",
    "Navbar1En" => "HOME",
    "Navbar2" => "NOSOTROS",
    "Navbar2En" => "ABOUT",
    "Navbar3" => "SERVICIOS",
    "Navbar3En" => "SERVICES",
    "Navbar4" => "CONTACTO",
    "Navbar4En" => "CONTACT",
    "Navbar5" => "RESPONSABILIDAD SOCIAL",
    "Navbar5En" => "SOCIAL RESPONSABILITY",
    "Navbar6" => "ncloud.php",
    "Navbar6En" => "ncloud.php?En"
];

$arrayNavegation = [
    "index" => "index.php",
    "ncloud" => "ncloud.php",
    "acerca" => "acerca.php",
    "servicios" => "servicios.php",
    "contacto" => "contacto.php",
    "responsabilidad" => "responsabilidad_social.php",
    "indexEn" => "index.php?En",
    "ncloudEn" => "ncloud.php?En",
    "acercaEn" => "acerca.php?En",
    "serviciosEn" => "servicios.php?En",
    "contactoEn" => "contacto.php?En",
    "responsabilidadEn" => "responsabilidad_social.php?En"

];

$language= $_SERVER["REQUEST_URI"];
//echo $language;


$str_text = $language;
$str_find   = 'En';
$position = strpos($str_text, $str_find);
$var = '';


if ($position) {
    $var ='En' ;
    }

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>DAFSTER Solutions</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/dafster/favicon.ico">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />	
	<!-- responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
	<!-- nivo-slider CSS -->
	<link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />	
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all" />	
	<!-- font-awesome CSS -->
	<link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all" />	
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all" />	
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />	
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="style.css" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="assets/css/widget.css" type="text/css" media="all" />
	<!-- modernizr js -->	
	<script type="text/javascript" src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js?hl=es-419' async defer></script>
</head>
<body>
    <!--==================================================-->
	<!----- Start	Techno Header Top Menu Area Css ----->
	<!--==================================================-->
	<div class="header_top_menu pt-2 pb-2 bg_color">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-8">
					<div class="header_top_menu_address">
						<div class="header_top_menu_address_inner">
							<ul>
								<li><a href="#"><i class="fa fa-envelope-o"></i>contacto@dafster.com.mx</a></li>
								<li><a href="#"><i class="fa fa-map-marker"></i>Boca del Río,Veracruz.</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>+52 229 315 9048</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-4">
					<div class="header_top_menu_icon">
						<div class="header_top_menu_icon_inner">
							<ul>
								<li><a href="https://www.facebook.com/neomoticautomation" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/neomotic_/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.linkedin.com/company/neomotic/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send/?phone=5212294531339&text&app_absent=0" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#" onclick="Spanish();"><img src="assets/images/dafster/es.png"></a></li>
                                <li><a href="#" onclick="English();"><img src="assets/images/dafster/en.png"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End	Techno Header Top Menu Area Css ----->
	<!--===================================================-->
    
    
	<!--==================================================-->
	<!----- Start Techno Main Menu Area ----->
	<!--==================================================-->
		<div id="sticky-header" class="techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo mt-4">
							<a class="logo_img" href="<?php echo $arrayNavegation["index".$var]?>" title="NEOMOTIC">
								<img src="assets/images/dafster/logo_peque.png"  width="180%" />
							</a>
						
						</div>
					</div>
					<div class="col-md-10">
						<nav class="techno_menu">
							<ul class="nav_scroll">
                               
                                <li><a href="<?php echo $arrayNavegation["index".$var]?>" class="divNavbar"><?php echo $arrayHeader["Navbar1".$var]?></a></li>
                                <li><a href="<?php echo $arrayNavegation["acerca".$var]?>" class="divNavbar"><?php echo $arrayHeader["Navbar2".$var]?></a></li>
                                <li><a href="<?php echo $arrayNavegation["servicios".$var]?>" class="divNavbar"><?php echo $arrayHeader["Navbar3".$var]?></a></li>
                                <li><a href="<?php echo $arrayNavegation["contacto".$var]?>" class="divNavbar"><?php echo $arrayHeader["Navbar4".$var]?></a></li>
                          
							</ul>
										
						</nav>
						
					</div>
				</div>
			</div>
		</div>
		
		<!----- Techno Mobile Menu Area ----->
		<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
             <div class="row" style="padding-left: 80%;">
                <a href="#" onclick="Spanish();"><img src="assets/images/dafster/es.png" ></a>
                <a href="#" onclick="English();"><img src="assets/images/dafster/en.png" ></a>
            </div>
			<div class="mobile-menu">
					<nav class="techno_menu">
						<ul class="nav_scroll">
                               
					
                                <li><a href="<?php echo $arrayNavegation["index".$var]?>" class="divNavbar"><?php echo $arrayHeader["Navbar1".$var]?></a></li>
                                <li><a href="<?php echo $arrayNavegation["acerca".$var]?>" class="divNavbar"><?php echo $arrayHeader["Navbar2".$var]?></a></li>
                                <li><a href="<?php echo $arrayNavegation["servicios".$var]?>" class="divNavbar"><?php echo $arrayHeader["Navbar3".$var]?></a></li>
                                <li><a href="<?php echo $arrayNavegation["contacto".$var]?>" class="divNavbar"><?php echo $arrayHeader["Navbar4".$var]?></a></li>
                          
                        </ul>
							
					</nav>
			</div>
		</div>
	<!--==================================================-->
	<!----- End Techno Main Menu Area ----->
	<!--==================================================-->
	<script>
    function Spanish(){
        //Get current url 
         var pathname = window.location.pathname;
        //alert(pathname);
        window.location.href = pathname;
    }
        
    function English(){
        //Get current url 
        var pathname = window.location.pathname + '?En';
        window.location.href = pathname;
    }
           
    </script>
    
    <style>
    
.divNavbar{
    border: solid 1px #03989E;
    padding: 5px;
    }
        
.techno_menu > ul > li > a:hover{
   color:white;  
   border: solid 1px #03989E;    
  background-color: #03989E;    
}        
        
     /*   ul.nav.nav-pills li > * :hover {
  color: #47abd2;
}*/
    </style>