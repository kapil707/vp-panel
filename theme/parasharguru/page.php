<?php get_header(); ?>
<!-- header -->
<header id="page-top" class="blog-banner">
	<!-- Start: Header Content -->
	<div class="container" id="blog">
		<div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
			<div class="col-sm-12">
				<!-- Headline Goes Here -->
				<h4><a href=""> Home </a> / <?php the_title(); ?> </h4>
				<h3><?php the_title(); ?></h3>
			</div>
		</div>
		<!-- End: .row -->
	</div>
	<!-- End: Header Content -->
</header>
<!--/. header -->

<!-- End: Header Section
==================================================-->
<?php the_content(); ?>
<?php get_footer(); ?>