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
<div id="slider-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php echo get_field_data("home_page_title","1"); ?>
            </div>
        </div>
    </div>
</div>
<div id="home-box1" class="home-box-main">
    <div class="container-fluid">
        <div class="row">
            <?php 
            $get_blog = get_blog("home_sec"); 
            foreach($get_blog as $row) { ?>
                <div class="col-md-3 text-center wow shake">
                    <img src="<?= get_library_to_image($row->image,'main'); ?>" style="border-radius: 75%;height: 70px;width: 70px;">
                    <h4 class="text-lg font-secondary uppercase text-dark group-hover-text-white transition mt-3">
                        <?php echo $row->title; ?>
                    </h4>
                    <p class="text-gray-700 text-base group-hover-text-gray-400 mt-2 transition">
                        <?php echo remove_p_tag($row->description); ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="heading_home1">
    <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
        <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
        </svg>
    </span>
</div>

<div id="home-box2" class="home-box-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                    <?php 
                    $get_blog = get_blog("home_sec2");
                    $i = 1;						
                    foreach($get_blog as $row) { ?>
                        <li class="nav-item wow heartBeat">
                            <a class="nav-link <?php if($i==1) { ?>active<?php } ?>" id="home-tab_<?php echo $row->id; ?>" data-toggle="tab" href="#home_<?php echo $row->id; ?>" role="tab" aria-controls="home_<?php echo $row->id; ?>"
                            aria-selected="true"><?php echo $row->title; ?></a>
                        </li>
                    <?php 
                    $i++;
                    } ?>
                </ul>
                <div class="tab-content">
                    <?php
                     $i = 1;						
                     foreach($get_blog as $row) { ?>
                        <div class="tab-pane fade <?php if($i==1) { ?>show active<?php } ?>" id="home_<?php echo $row->id; ?>" role="tabpanel" aria-labelledby="home-tab_<?php echo $row->id; ?>">
                            <h5><?php echo $row->title; ?></h5>
                            <?php echo $row->description; ?>
                        </div>
                    <?php 
                    $i++;
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="heading_home1">
    <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
        <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
        </svg>
    </span>
</div>

<div id="home-box3" class="home-box-main">
    <span id="highlights"></span>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center main-ok">
                <h5><?php echo get_field_data("home_page_label01","1"); ?></h5>
                <?php echo get_field_data("home_page_label02","1"); ?>
            </div>
            <?php 
            $get_blog = get_blog("home_sec3");
            foreach($get_blog as $row) { ?>
                <div class="col-sm-4 col-6 text-center sml_border0">
                    <div>
                        <span class="sml_border wow rollIn">
                            <?php echo $row->title; ?>
                        </span>
                    </div>
                    <div class="sml_border2">
                        <?php echo $row->description; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="heading_home1">
    <span class="">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-hot-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6H.5ZM13 12.5a2.01 2.01 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5Z"/>
        <path d="m4.4.8-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 3.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8Zm3 0-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 6.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8Zm3 0-.003.004-.014.019a4.077 4.077 0 0 0-.204.31 2.337 2.337 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.198 3.198 0 0 1-.202.388 5.385 5.385 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 9.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8Z"/>
        </svg>
    </span>
</div>
<div id="home-box4" class="home-box-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>WHY DO YOU CHOOSE <span style="color:red;">Central 50?</span></h5>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo get_library_to_image(get_field_data("why_do_you_choose_image","1"),'main'); ?>" class="img1">
            </div>
            <div class="col-md-8">
                <?php 
                    $get_blog = get_blog("home_sec4");
                    $i = 1;
                    foreach($get_blog as $row) { ?>
                        <div class="card-l">
                        <i class="fa fa-check" aria-hidden="true"></i> <a class="" data-toggle="collapse" href="#collapseOne<?php echo $row->id; ?>">
                            <?php echo $row->title; ?>
                            </a>
                        </div>
                        <div id="collapseOne<?php echo $row->id; ?>" class="collapse <?php if($i==1) { ?> show <?php } ?> card-b" data-parent="#accordion">
                            <?php echo $row->description; ?>
                        </div>
                    <?php 
                    $i++;
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="heading_home1">
    <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
        </svg>
    </span>
</div>

<div id="home-box5" class="home-box-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5><?php echo get_field_data("home_page_label03","1"); ?></h5>
                <?php echo get_field_data("home_page_label04","1"); ?>
            </div>
            <div class="col-md-12 text-center filter-button-div">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="gallery">Gallery</button>
                <button class="btn btn-default filter-button" data-filter="construction_update">Construction Update</button>
            </div>
            <?php 
            $get_gallery = get_gallery("","limit 0,4");
            $i = 1;
            foreach($get_gallery as $row) { ?>
                <div class="col-sm-3">
                    <div class="item filter gallery">
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

            <?php 
            $get_blog = get_blog("construction_updates","limit 0,4");
            $i = 1;						
            foreach($get_blog as $row) { ?>
                <div class="col-sm-3">
                    <div class="item filter construction_update">
                        <a class="mobile_off" href="<?php echo $img = get_library_to_image($row->image,'main'); ?>" data-lightbox="example-set3" data-title="">
                            <img src="<?= $img; ?>" class="img-fluid mobile_off">
                        </a>
                        <a class="mobile_show" href="<?php echo $img = get_library_to_image($row->mobile_image,'main'); ?>" data-lightbox="example-set4" data-title="">
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

<div class="heading_home1">
    <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play" viewBox="0 0 16 16">
        <path d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1zm2.765 5.576A.5.5 0 0 0 6 7v5a.5.5 0 0 0 .765.424l4-2.5a.5.5 0 0 0 0-.848l-4-2.5z"/>
        <path d="M1.5 14.5A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zm13-1a.5.5 0 0 0 .5-.5V6a.5.5 0 0 0-.5-.5h-13A.5.5 0 0 0 1 6v7a.5.5 0 0 0 .5.5h13z"/>
        </svg>
    </span>
</div>
<div id="home-box6" class="home-box-main">
    <video autoplay muted loop>
        <source src="<?php base_url(); ?>uploads/manage_library/videoplayback.mp4" type="video/mp4" />
    </video>
    <div class="caption">
        <svg width="100%" class="h-auto"
            viewBox="0 0 616 615" version="1.1" preserveAspectRatio="xMidYMid meet">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <line x1="308" y1="0.5" x2="308" y2="614.5" stroke="#979797" stroke-linecap="square"></line>
                <ellipse stroke="#979797" cx="308" cy="307" rx="231.244541" ry="238"></ellipse>
                <line x1="1" y1="307.5" x2="615" y2="307.5" stroke="#979797" stroke-linecap="square"></line><text
                    font-family="RobotoCondensed-Light, Roboto Condensed" font-size="66" font-style="condensed"
                    font-weight="300" fill="#FFFFFF">
                    <tspan x="223.636719" y="292">it’s</tspan>
                </text><text font-family="RobotoCondensed-Light, Roboto Condensed" font-size="66"
                    font-style="condensed" font-weight="300" fill="#FFFFFF">
                    <tspan x="318.5" y="372">time</tspan>
                </text><text opacity="0.699999988" font-family="RobotoCondensed-Light, Roboto Condensed"
                    font-size="36" font-style="condensed" font-weight="300" fill="#FFFFFF">
                    <tspan x="318.5" y="292">wisten</tspan>
                </text><text opacity="0.699999988" font-family="RobotoCondensed-Light, Roboto Condensed"
                    font-size="36" font-style="condensed" font-weight="300" fill="#FFFFFF">
                    <tspan x="222.951172" y="347">video</tspan>
                </text>
            </g>
        </svg>
    </div>
</div>

<?php include_once(get_footer()); ?>
<script>
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');            
        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");

});
</script>