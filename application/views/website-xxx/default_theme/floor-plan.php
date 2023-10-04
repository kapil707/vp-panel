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
<section id="about" class="lg-py-2 sm-py-2">	
    <div class="container cursor-default">
		<div class="flex-row lg-flex-columns-12 md-flex-columns-2 sm-flex-columns-2 xs-flex-columns-1">
			<div class="row">
				<?php 
				$manage_gallery_floor_plan = get_gallery("gallery_floor_plan");
				foreach($manage_gallery_floor_plan as $row) { ?>
				<div class="col-sm-6" style="margin-bottom:20px;">
					<img src="<?php echo get_library_to_image($row->image,'main'); ?>" width="100%">
				</div>
				<?php } ?>
			</div>
		</div>
    </div>
</section>
