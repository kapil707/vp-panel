<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <?php echo vp_head(); ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/css/revslider/settings.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/css/style3661.css?v=2.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="top-bar" class="top-bar w-full mnh-16 sm-mnh-20 sm-pt-2 flex align-items-center lh-normal nav-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 lg-text-left sm-text-center">
                    <p class="text-base">
						<i class="fa fa-file-text-o" aria-hidden="true"></i>
						e-Brochure |
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<?php echo get_field_data("contact_email") ?> |
						<i class="fa fa-phone" aria-hidden="true"></i>
						<?php echo get_field_data("contact_phone") ?>
					</p>					
                </div>
				
				
                <div class="col-sm-6 col-12 lg-text-right sm-text-center">
					<a href="<?php echo $facebook ?>" target="_blank" class="icon-md hover-text-blue transition duration-300">
					<i class="bi-facebook"></i></a>
					
                    <a href="<?php echo $twitter ?>" target="_blank" class="icon-md hover-text-blue transition duration-300">
					<i class="bi-twitter"></i></a>
					
					<a href="<?php echo $linkedin ?>" target="_blank" class="icon-md hover-text-blue transition duration-300">
					<i class="bi-linkedin"></i></a>					
					
					<a href="<?php echo $instagram ?>" target="_blank" class="icon-md hover-text-blue transition duration-300">
					<i class="bi-instagram"></i></a>
					
					<a href="<?php echo $youtube ?>" target="_blank" class="icon-md hover-text-blue transition duration-300">
					<i class="bi-youtube"></i></a>
					
					<a href="<?php echo $whatsappno ?>" target="_blank" class="icon-md hover-text-blue transition duration-300">
					<i class="bi-whatsapp"></i></a></div>
            </div>
        </div>
    </div>
    <nav id="navigation" class="modern-nav sticky nav-lg text-sm bordered bg-dark-600 font-secondary fixed-height"
        data-offset="15">
        <div class="container nav-container">
            <div class="flex-row nav-wrapper justify-content-between">
                <div class="column">
					<a href="#top" class="logo">
                    <img src="<?php echo $logo = get_library_to_image(get_field_data("image_site_logo"),'main'); ?>" alt="website logo" class="logo-white mxw-20">
					<img src="<?php echo $logo; ?>" alt="website logo" class="logo-dark mxw-20"></a>
				</div>
                
				<div id="nav-menu" class="column ml-auto nav-menu">
                    <ul class="nav-links justify-content-end">
                        <li class="logo-for-mobile-navigation">
							<img src="<?php echo $logo; ?>" alt="website logo" class="logo-white mxw-22">
							
                            <img src="<?php echo $logo; ?>" alt="website logo" class="logo-dark mxw-22">
                        </li>
						<?php echo vp_menu(); ?>
                    </ul>
                </div>
                <div class="mobile-nb">
                    <div class="hamburger-menu">
                        <div class="top-bun"></div>
                        <div class="meat"></div>
                        <div class="bottom-bun"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-nav-bg"></div>
    </nav>
	
