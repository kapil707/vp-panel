<?php include_once(get_header()); ?>
<div id="slider">
    <?php echo do_slider() ;?>
</div>
<style>
#myCarousel_ {
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
<div id="home-box1">
    <div class="container-fluid">
        <div class="row">
            <?php 
            $get_blog = get_blog("home_sec"); 
            foreach($get_blog as $row) { ?>
                <div class="col-md-3 text-center">
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

<div id="home-box2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                    <?php 
                    $get_blog = get_blog("home_sec2");
                    $i = 1;						
                    foreach($get_blog as $row) { ?>
                        <li class="nav-item">
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
<div id="home-box3">
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
                <div class="col-sm-4 text-center sml_border0">
                    <div>
                        <span class="sml_border">
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

<div id="home-box4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>WHY DO YOU CHOOSE Central 50?</h5>
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

<div id="home-box5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5><?php echo get_field_data("home_page_label03","1"); ?></h5>
                <?php echo get_field_data("home_page_label04","1"); ?>
            </div>
            <?php 
            $get_gallery = get_gallery();
            $i = 1;
            foreach($get_gallery as $row) { ?>
                <div class="col-sm-3 item">
                    <img src="<?= get_library_to_image($row->image,'main'); ?>" src="<?= get_library_to_image($row->image,'main'); ?>" class="img-fluid">
                </div>               
            <?php 
            } ?>
        </div>
    </div>
</div>
<div class="video-container">
    <video autoplay muted loop>
        <source src="<?php base_url(); ?>uploads/manage_library/videoplayback.mp4" type="video/mp4" />
    </video>
    <div class="caption">
      <h2>Your caption here</h2>
    </div>
</div>
    <section id="testimonials-1512324" class="has-parallax lg-py-7 sm-py-7 bg-semi-45 bg-semi-dark-800" data-bg="<?php echo base_url() ?>assets/website/images/video.jpg">
        <div data-video-id="AMXhl4t1_yg" data-startat="0" data-endat="295" id="youtubeVideo" class="youtube-video zi-0 pointer-events-none"></div>
        <div class="container-sm lg-px-5 relative text-center zi-5"><svg width="100%" class="h-auto"
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
            </svg></div>
    </section>
    <div class="flex justify-content-center relative">
        <div class="absolute w-full left-0 top-0 h-auto flex justify-content-center">
            <div
                class="icon-lg text-lg rounded-full border-1 -translate-y-perc-50 border-gray-400 bg-white text-gray-700 zi-10">
                <i class="bi-bag-plus"></i></div>
        </div>
    </div>
<?php include_once(get_footer()); ?>
