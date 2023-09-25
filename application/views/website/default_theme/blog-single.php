<section id="home" class="fullwidth bg-stone-800">
    <div id="home-slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <img src="<?php echo get_library_to_image($page_data->image,'main'); ?>" width="100%">
    </div>
</section>
<section id="about" class="lg-py-4 sm-py-4">
    <div class="container cursor-default">
        <div class="flex-row lg-flex-columns-12 md-flex-columns-2 sm-flex-columns-2 xs-flex-columns-1">
            <h2 class="text-center"><?php echo $page_data->title ?></h2>
            <?php echo $page_data->description ?>
        </div>
    </div>
</section>
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