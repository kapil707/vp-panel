<section id="home" class="fullwidth bg-stone-800">
    <div id="home-slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <img src="<?php echo get_library_to_image($page_data->image,'main'); ?>" width="100%">
    </div>
</section>
<section id="about" class="lg-py-12 sm-py-8">
    <div class="container cursor-default">
        <div class="flex-row lg-flex-columns-12 md-flex-columns-2 sm-flex-columns-2 xs-flex-columns-1">
            <h2 class="text-center"><?php echo $page_data->title ?></h2>
            <?php echo $page_data->description ?>
        </div>
    </div>
</section>