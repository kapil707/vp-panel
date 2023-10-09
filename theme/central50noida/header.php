<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <?php echo vp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_theme_path(); ?>css/bootstrap.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js"></script>
    <script src="<?php echo get_theme_path(); ?>js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?php echo get_theme_path(); ?>css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="<?php echo get_theme_path(); ?>css-1/plugins.min.css">
    <link rel="stylesheet" href="<?php echo get_theme_path(); ?>css-1/revslider/settings.css">
    <link rel="stylesheet" href="<?php echo get_theme_path(); ?>css-1/style3661.css?v=2.0"> -->

    <?php /*
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo get_theme_path(); ?>css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo get_theme_path(); ?>css/revslider/settings.css">
    <link rel="stylesheet" href="<?php echo get_theme_path(); ?>css/style3661.css?v=2.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> */ ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css">

</head>

<body>
    <div id="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-12 num-b wow bounceInLeft">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    e-Brochure |
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <?php echo get_field_data("contact_email2",9) ?> |
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <?php echo get_field_data("contact_phone",9) ?>
                </div>
				
                <div class="col-sm-6 col-12">
                    <ul class="social_icon">
                        <?php 
                        $result = get_social_icon();
                        foreach($result as $row) { ?>
                            <li class="wow bounceInRight"><a href="<?php echo $row->url ?>" target="_blank" class="icon-md"><?php echo $row->description ?></a></li>
                        <?php } ?>
                    </ul>
				</div>
            </div>
        </div>
    </div>
    <div id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-2">
                    <h2 id="logo">
                        <img src="<?php echo $logo = get_library_to_image(get_field_data("image_site_logo"),'main'); ?>" alt="logo" class="logo"></a>
                    </h2>
                </div>
                <div class="col-10 mobile_show text-right" style="padding:10px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="col-md-8 col-12">
                    <div class="web_menu">
                        <?php echo vp_menu(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
