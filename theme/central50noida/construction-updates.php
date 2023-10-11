<?php include_once(get_header()); ?>
<div id="slider">
    <?php echo do_slider("slider") ;?>
</div>
<style>
#myCarousel_slider {
    width: 100%;
    max-width: 100%;
}
.carousel-inner {
    width: 100%;
    max-width: 100%;
    height: 650px; /* Adjust the height as needed */
}

.carousel-item img {
    width: 100%;
    max-width: 100%;
    height: 650px;
}
@media screen and (max-width:800px) {
    .carousel-inner {
        height: 250px !important;
    }
    .carousel-item img {
        height: 250px !important;
    }
}
</style>
<div id="about-box2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5><?php echo $page_data->title ?></h5>
            </div>
            <div class="col-md-12">
                <?php echo $page_data->description ?>
            </div>
        </div>
    </div>
</div>
<section class="contact-sec lg-py-4 sm-py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
				$get_blog = get_blog();
				foreach($get_blog as $row){?>
				<div class="row" style="margin-bottom:20px;">
					<div class="col-sm-5">
						<img src="<?php echo get_library_to_image($row->image,'main'); ?>" width="100%">
					</div>
					<div class="col-sm-7">
						<?php echo $row->title; ?>
					</div>
				</div>
				<?php } ?>
            </div>
			
            <div class="col-md-6 mob-m-t-50">
                
            </div>
        </div>
    </div>
</section>
<?php include_once(get_footer()); ?>