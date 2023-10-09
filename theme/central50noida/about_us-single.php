<?php include_once(get_header()); ?>
<div id="about-box1">
    <img src="<?php echo get_library_to_image($page_data->image,'main'); ?>" width="100%">
</div>

<div id="about-box2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5><?php echo $page_data->title ?></h5>
                <?php echo $page_data->description ?>
            </div>
        </div>
    </div>
</div>
<?php include_once(get_footer()); ?>