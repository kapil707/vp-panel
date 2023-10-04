<?php 
//Template Name:Life-at-bsi-pg
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
                    <h4><a href="<?php echo site_url(); ?>"> Home </a> / Life at Bsi </h4>
                    <h3>Life at Bsi</h3>
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
                <?php echo the_content(); ?>

				<?php $home_page_about_image = get_field('video_galler_image','95');?>
				<?php $sizes = ($home_page_about_image["sizes"]) ?>
				<div class="col-xs-12 col-md-12 mobile-about">
					<img src="<?php echo ($sizes["2048x2048"]) ?>" alt="" width="100%">
				</div>
				
				<div class="col-xs-12 col-md-12 mobile-about">
					<h1 style="font-weight:400; color:#7a868c;">Video Gallery</h1>
				</div>
				
				<?php echo get_field('video_galler','95'); ?>
            </div>
            <!--End: row-->
        </div>
        <!-- End: container-->
    </section>
    <!--  End: About Section
==================================================-->



    <!-- Start: Skill Section 
==================================================-->
    <section class="our-skill section">
        <div class="container">
            <div class="base-header">
                <h3>Gallery</h3>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>



    <!-- End: Skill Section 
==================================================-->
<?php get_footer(); ?>