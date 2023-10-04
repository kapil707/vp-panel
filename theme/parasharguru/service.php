<?php 
//Template Name:Service-pg
?>
<?php get_header(); ?>
<?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); ?>
<style>
header.blog-banner {
    background: transparent url('<?php echo $imagepath[0] ?>');
	height: 140px;
}
header .container{
	padding-top: 0px !important;
}
</style>
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="<?php echo site_url(); ?>"> Home </a> / Service </h4>
                    <h3>Service</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
==================================================-->

    <!-- Start: About Section 
==================================================-->
    <section class="service_section" id="agenda">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>Services</h3>
            </div>
            <!-- End:  heading -->
            <div class="row" id="">
				<?php 
				$wpnew = array(
				'post_type'=>'homepageservices',
				'post_status'=>'publish',
				'posts_per_page'=>30,
				'order' => 'ASC',);
				$wpq = new WP_Query($wpnew);
				while($wpq->have_posts()){ 
					$row = $wpq->the_post();
				?>
                <div class="col-sm-6">
                    <div class="service_img">
						<?php
						$imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'small');
						?>
                        <img alt="team" class="img-responsive" src="<?php echo $imagepath[0]; ?>" style="height:300px;">
                    </div>
                    <div class="service_para">
                        <a href="#"><h5><?php echo the_title(); ?></h5></a>
                        <?php echo the_content(); ?>
                        <!--<a class="srvic_read" href="services.html">read  more <span class="fa fa-angle-double-right"></span></a>-->
                    </div>
                </div>
				<?php } ?>
            </div>
            <!---/.row -->
        </div>
        <!--/.container -->
    </section>
    <!--  End : Blog Page Content
==================================================-->
<?php get_footer(); ?>