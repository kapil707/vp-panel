<style>
header.blog-banner {
background: transparent url(<?php echo get_library_to_image($page_data->image,'main'); ?>);
}
</style>
<header id="page-top" class="blog-banner">
    <!-- Start: Header Content -->
    <div class="container" id="blog">
        <div class="row blog-header wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
            <div class="col-sm-12">
                <!-- Headline Goes Here -->
                <h4><a href="https://bsinfra.in"> Home </a> / Blogs</h4>
                <h3>Blogs</h3>
            </div>
        </div>
    </div>
</header>

<section class="contact-sec lg-py-4 sm-py-4">
    <div class="container">
        <div class="bread_block" id="">
            <h2 class="text-center"><?php echo $page_data->title ?></h2>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php 
                $blog = get_blog(); 
                foreach($blog as $row1){?>
                <div class="contact-left">
                    <div class="elementor-widget-container margin-b-50">
                        <h2><?php echo $row1->title ?></h2>
                    </div>
                    <div class="contact-address">
                        <h2><?php echo $row1->excerpt ?></h2>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-md-7 mob-m-t-50">
                
            </div>
        </div>
    </div>
</section>
<section class="map-sec">
    <?php echo get_field_data("contact_label3") ?>
</section>