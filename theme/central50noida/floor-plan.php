<?php include_once(get_header()); ?>
<div id="about-box1">
    <img src="<?php echo get_library_to_image($page_data->image,'main'); ?>" class="main-banner">
</div>

<div id="about-box2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5><?php echo $page_data->title ?></h5>
            </div>
            <div class="col-md-12">
                <?php echo $page_data->description ?>
            </div>
			<?php 
			$manage_gallery_floor_plan = get_gallery("gallery_floor_plan");
			foreach($manage_gallery_floor_plan as $row) { ?>
			<div class="col-sm-6" style="margin-bottom:20px;">
				<a class="example-image-link" href="<?php echo $img = get_library_to_image($row->image,'main'); ?>" data-lightbox="example-set" data-title="">
					<img src="<?php echo $img ?>" width="100%">
				</a>
			</div>
			<?php } ?>
		</div>
    </div>
</div>
<link rel="stylesheet" href="<?php echo get_theme_path(); ?>lightbox/dist/css/lightbox.min.css">
<script src="<?php echo get_theme_path(); ?>lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
<?php include_once(get_footer()); ?>