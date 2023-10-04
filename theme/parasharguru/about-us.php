<?php 
//Template Name:Aboutus-pg
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
                    <h4><a href="<?php echo site_url(); ?>"> Home </a> / About Us</h4>
                    <h3>About Us</h3>
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
    <section class="about-section about_pg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 about_bottom_warp">
                    <div class="about_list">
                        <div class="base-header">
                            <h3><?php echo get_field('about_us_title','27'); ?></h3>
                        </div>
                        <?php echo get_field('about_us_text','27'); ?>
                    </div>
                </div>
                <!--End: about_bottom_warp
                <div class="col-sm-6">
					<?php $home_page_about_image = get_field('about_us_image','27');?>
					<?php $sizes = ($home_page_about_image["sizes"]) ?>
                    <img src="<?php echo ($sizes["medium_large"]) ?>" alt="">
                </div> -->
				<?php 
				$wpnew = array(
				'post_type'=>'about_us_page_items',
				'post_status'=>'publish',
				'posts_per_page'=>30,
				'order' => 'ASC',);
				$wpq = new WP_Query($wpnew);
				while($wpq->have_posts()){ 
					$row = $wpq->the_post();
				?>
				<div class="col-sm-12 about_bottom_warp" style="margin-top:50px;">
                    <div class="about_list">
                        <div class="base-header">
                            <h3><?php echo the_title(); ?></h3>
                        </div>
						<?php
						$imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
						?>
						<img src="<?php echo $imagepath[0]; ?>" alt="" style="margin-top:30px;" />
                        <?php echo the_content(); ?>
                    </div>
                </div>
				<?php } ?>
                <!--End: About Video -->
            </div>
            <!--End: row-->
        </div>
        <!-- End: container-->
    </section>
    <!--  End: About Section
==================================================-->
<?php get_footer(); ?>