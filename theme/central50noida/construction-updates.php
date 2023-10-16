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
<?php
$row_category = get_table_row("tbl_category where url='$page_url_id'");
$category_id = $row_category->id;
?>
<div id="home-box5" class="home-box-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5><?php echo $row_category->title ?></h5>
            </div>
            <?php 
            $construction_update = get_table("tbl_page where category_id='$category_id'");
            $i = 1;						
            foreach($construction_update as $row) { ?>
                <div class="col-sm-3">
                    <div class="item filter construction_update">
                        <a class="mobile_off" href="<?php echo $img = get_library_to_image($row->image,'main'); ?>" data-lightbox="example-set1" data-title="">
                            <img src="<?= $img; ?>" class="img-fluid mobile_off">
                        </a>
                        <a class="mobile_show" href="<?php echo $img = get_library_to_image($row->mobile_image,'main'); ?>" data-lightbox="example-set2" data-title="">
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