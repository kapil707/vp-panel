<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html lang="zxx">
<!--[if gt IE 8]> <!-->
<!--
<![endif]-->

<head>
	<?php echo vp_head(); ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link href="<?php echo get_theme_path(); ?>css/login.css" rel="stylesheet">
	<link href="<?php echo get_theme_path(); ?>css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
</head>
<body style="background-image: url(<?php echo get_theme_path(); ?>images/login_page/bg.png);" class="main-body">
<nav class="navbar navbar-expand-lg">
	<div class="container">
		<div class="d-flex align-items-center">
			<a class="navbar-brand" href="#">
				<img src="<?php echo $logo = get_library_to_image(get_field_data("image_site_logo"),'main'); ?>" width="30%">
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item menu-button-css">
					<a class="nav-link" href="<?php echo site_url(); ?>home">
						Learn
					</a>
				</li>
				<li class="nav-item menu-button-css">
					<a class="nav-link" href="<?php echo site_url(); ?>bhava">
						About
					</a>
				</li>
				<li class="nav-item menu-button-css">
					<a class="nav-link" href="<?php echo site_url(); ?>janmarashi">
						Our Services
					</a>
				</li>
				<li class="nav-item menu-button-css">
					<a class="nav-link" href="<?php echo site_url(); ?>panchang">
						Contact Us
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>