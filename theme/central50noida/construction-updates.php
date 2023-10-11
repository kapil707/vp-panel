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
            <?php 
            $get_blog = get_blog("construction_updates","limit 0,4");
            $i = 1;						
            foreach($get_blog as $row) { ?>
                <div class="col-sm-3">
                    <div class="item filter construction_update">
                        <a class="mobile_off" href="<?php echo base_url(); ?>construction-updates/<?php echo $row->id; ?>">
                            <?php $img = get_library_to_image($row->image,'main'); ?>
                            <img src="<?= $img; ?>" class="img-fluid mobile_off">
                        </a>
                        <a class="mobile_show" href="<?php echo base_url(); ?>construction-updates/<?php echo $row->id; ?>">
                            <?php $img = get_library_to_image($row->mobile_image,'main'); ?>
                            <img src="<?= $img; ?>" class="img-fluid mobile_show">
                        </a>
                        <h4><?php echo $row->title; ?></h4>
                    </div>
                </div>
            <?php 
            } ?>
        </div>
    </div>
</div>
<?php include_once(get_footer()); ?>