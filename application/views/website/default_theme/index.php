<section id="home" class="fullwidth bg-stone-800">
        <div id="home-slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container">
            <div id="home-slider" class="rev_slider fullwidthbanner" data-version="5.4.1">
                <ul>
					<?php 
					$slider = get_gallery("slider");
					foreach($slider as $row){ ?>
                    <li class="rs-slide" data-masterspeed="1000" data-transition="random" data-thumb="<?= get_library_to_image($row->image,'main'); ?>" data-saveperformance="off"data-title="Create Stunning Website" data-description="Home Slider">
						<img src="<?= get_library_to_image($row->image,'main'); ?>" alt="Image Background" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>
                    </li>
					<?php } ?>
                </ul>
                <div class="tp-bannertimer bg-white shadow-xl opacity-50"></div>
            </div>
        </div>
    </section>
    <div id="page-content" class="bg-dark-100 fullwidth lg-py-3 sm-py-4">
        <div class="container text-center text-white font-secondary uppercase lg-pt-2 lg-pb-3">
            <h1 class="text-4xl sm-text-xl font-light lh-sm">
				<?php echo get_field_data("home_page_title","1"); ?>
			</h1>
        </div>
    </div>
    <section id="about" class="lg-py-12 sm-py-8">
        <div class="container cursor-default">
            <div class="flex-row lg-flex-columns-4 md-flex-columns-2 sm-flex-columns-2 xs-flex-columns-1">
				<?php 
				$get_blog = get_blog("home_sec"); 
				foreach($get_blog as $row) { ?>
                <div>
                    <div class="group lg-py-4 sm-py-4 px-2 lg-mt-0 sm-mt-5 bg-transparent hover-bg-dark text-center flex align-items-center flex-column transition">
						<div class="icon-xl bg-transparent relative border-2 border-dark text-base rounded-full group-hover-bg-white d-flex group-hover-border-double group-hover-border-white justify-content-center align-items-center transition">
							<img src="<?= get_library_to_image($row->image,'main'); ?>" style="border-radius: 75%;height: 70px;width: 70px;">
						</div>
						<h4 class="text-lg font-secondary uppercase text-dark group-hover-text-white transition mt-3">
							<?php echo $row->title; ?>
						</h4>
						<p class="text-gray-700 text-base group-hover-text-gray-400 mt-2 transition">
							<?php echo $row->description; ?>
						</p>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="w-full h-1 bg-gray-300 relative relative flex justify-content-center">
            <div class="absolute w-full left-0 top-0 h-auto flex justify-content-center">
                <div
                    class="icon-lg text-lg rounded-full border-1 -translate-y-perc-50 border-gray-400 bg-white text-gray-700 zi-10">
                    <i class="bi-basket"></i></div>
            </div>
        </div>
    </div>
    <section id="skills" class="lg-py-12 sm-py-8">
        <div class="container">
            <div class="flex-row">
                <div class="lg-column-12 sm-column-12">
                    <ul class="nav justify-content-center inline-flex w-auto" role="tablist">
						<?php 
						$get_blog = get_blog("home_sec2");
						$i = 1;						
						foreach($get_blog as $row) { ?>
							<li role="presentation" class="d-flex">
								<button type="button" data-bs-target="#tab1<?php echo $row->id; ?>" aria-selected="true" aria-controls="tab1<?php echo $row->id; ?>" role="tab" data-bs-toggle="pill" class="tab-filter show <?php if($i==1) { ?>active<?php } ?> font-secondary xl-mr-2 lg-mr-1 sm-mr-1 btn-md xl-px-4 lg-px-3 sm-px-2 bg-white <?php if($i==1) { ?> active-bg-white <?php } ?>hover-bg-gray-100 bg-white uppercase border-l-1 border-t-1 border-r-1 border-b-0 <?php if($i==1) { ?>active-border-gray-300<?php } ?> border-white relative transition-colors">
									<?php echo $row->title; ?>
								<span class="opacity-0 <?php if($i==1) { ?> get-active active-opacity-100 <?php } ?>absolute top-0 h-2 zi-5 w-full bg-colored inline-flex transition"></span>
								</button>
							</li>
						<?php 
						$i++;
						} ?>
                    </ul>
                    <div class="tab-content p-4 block-images text-gray-600 text-justify border border-gray-300">
						<?php 
						$i = 1;
						foreach($get_blog as $row) { ?>
                        <div id="tab1<?php echo $row->id; ?>" role="tabpanel" class="tab-pane fade show <?php if($i==1) { ?>active<?php } ?>">
                            <div class="tab-container py-2">
								<?php if($row->image) { ?>
									<img src="<?= get_library_to_image($row->image,'main'); ?>" alt="<?php echo $row->title; ?>" class="mr-4 mxw-25 w-auto float-left"> 
								<?php } ?>
								<?php echo $row->title; ?>
								<br>
								<?php echo $row->description; ?>
								<div class="clearfix"></div>
                            </div>
                        </div>
                        <?php 
						$i++;
						} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
	<section id="features" class="lg-py-12 sm-py-8 relative">
        <div class="fai xl-bottom-20 lg-bottom-18 bg-cover zi-1" data-bg="<?php echo base_url() ?>assets/website/images/i1.jpg"></div>
        <div class="container text-center relative zi-20">
            <h1 class="font-secondary uppercase text-gray-800 lg-text-5xl sm-text-3xl font-light">
				<?php echo get_field_data("home_page_label01","1"); ?>
			</h1>
            <p class="mx-auto mxw-50 text-gray-700 lg-mt-4 sm-mt-3">
				<?php echo get_field_data("home_page_label02","1"); ?>
			</p>
            
			<div class="row">
				<?php 
				$get_blog = get_blog("home_sec3");
				foreach($get_blog as $row) { ?>
					<div class="col-sm-4" style="margin-top:50px;">
						<?php echo $row->title; ?>
						<br>
						<?php echo $row->description; ?>
					</div>
				<?php } ?>
			</div>
				
				
            </div>
        </div>
    </section>
    
    <div class="flex justify-content-center relative">
        <div class="absolute w-full left-0 top-0 h-auto flex justify-content-center">
            <div
                class="icon-lg text-lg rounded-full border-1 -translate-y-perc-50 border-gray-400 bg-white text-gray-700 zi-10">
                <i class="bi-cup-hot-fill"></i></div>
        </div>
    </div>
	
    <section id="why-us" class="has-parallax lg-py-12 sm-py-8">
        <div class="parallax" data-bg="" data-target="#history"
            data-bottom-top="transform:translate3d(0px,-100px,0px);"
            data-top-bottom="transform:translate3d(0px,100px,0px);"></div>
        <div class="container">
            <div class="flex-row align-items-center">
                <div class="lg-column-6"><img src="<?php echo get_library_to_image(get_field_data("why_do_you_choose_image","1"),'main'); ?>" data-src="<?php echo get_library_to_image(get_field_data("why_do_you_choose_image","1"),'main'); ?>"
                        alt="mobile image template" class="mxw-full animated" data-animation="fadeInLeft"
                        data-animation-delay="100"></div>
                <div class="lg-column-6 sm-mt-5">
                    <h1 class="lg-text-5xl sm-text-2xl font-secondary uppercase font-light text-dark-100">WHY DO YOU CHOOSE<span class="text-colored">Central 50?</span></h1>
                    
					<?php 
					$get_blog = get_blog("home_sec4");
					$i = 1;
					foreach($get_blog as $row) { ?>
					<div id="one_<?php echo $row->id; ?>" class="mt-3">
                        <div data-bs-target="#acc-<?php echo $row->id; ?>" aria-controls="acc-<?php echo $row->id; ?>" aria-expanded="true"
                            data-bs-toggle="collapse" role="button"
                            class="acc-bar border-b-1 border-solid border-gray-200 flex align-items-center justify-content-between text-black flex-wrap transition">
                            <div class="py-2 flex align-items-center">
                                <h5 class="font-secondary uppercase text-gray-800 sm-text-base">
								<i class="bi-check text-xl relative top-px mr-1"></i><?php echo $row->title; ?></h5>
                            </div>
                            <div class="ml-auto">
								<i class="bi-plus text-lg text-gray-800"></i>
								<i class="bi-dash text-lg text-gray-800"></i>
							</div>
                        </div>
                        <div id="acc-<?php echo $row->id; ?>" class="collapse <?php if($i==1) { ?>show active <?php } ?> w-full" data-bs-parent="#one_<?php echo $row->id; ?>">
                            <div class="py-2">
                                <p class="text-md sm-text-base text-gray-800">
								<?php echo $row->description; ?>
								</p>
                            </div>
                        </div>
                    </div>
					<?php 
					$i++;
					} ?>
                </div>
            </div>
        </div>
    </section>
    <div class="flex justify-content-center relative">
        <div class="absolute w-full left-0 top-0 h-auto flex justify-content-center">
            <div
                class="icon-lg text-lg rounded-full border-1 -translate-y-perc-50 border-gray-400 bg-white text-gray-700 zi-10">
                <i class="bi-calendar3"></i></div>
        </div>
    </div>
    <section id="Gallery" class="lg-py-12 sm-py-8">
        <div class="container text-center">
            <h1 class="font-secondary uppercase text-dark lg-text-5xl sm-text-3xl font-light">
				<?php echo get_field_data("home_page_label03","1"); ?>
			</h1>
            <p class="mx-auto mxw-50 text-gray-700 lg-mt-4 sm-mt-3">
				<?php echo get_field_data("home_page_label04","1"); ?>
			</p>
        </div>
        <div class="container mt-5" style="display:none;">
            <div class="flex flex-wrap justify-content-center text-center font-secondary uppercase">
                <div data-filter="*" data-target-layout="#works"
                    class="active btn-sm bg-gray-100 hover-bg-gray-300 active-bg-dark-300 text-dark-200 active-text-white rounded-l-pill sm-rounded-pill transition-colors sm-mt-2 sm-mx-1">
                    Show All</div>
                <div data-filter=".design" data-target-layout="#works"
                    class="btn-sm bg-gray-100 hover-bg-gray-300 active-bg-dark-300 text-dark-200 active-text-white sm-rounded-pill transition-colors sm-mt-2 sm-mx-1">
                    Design</div>
                <div data-filter=".photography" data-target-layout="#works"
                    class="btn-sm bg-gray-100 hover-bg-gray-300 active-bg-dark-300 text-dark-200 active-text-white sm-rounded-pill transition-colors sm-mt-2 sm-mx-1">
                    Photography</div>
                <div data-filter=".branding" data-target-layout="#works"
                    class="btn-sm bg-gray-100 hover-bg-gray-300 active-bg-dark-300 text-dark-200 active-text-white sm-rounded-pill transition-colors sm-mt-2 sm-mx-1">
                    Branding</div>
                <div data-filter=".web" data-target-layout="#works"
                    class="btn-sm bg-gray-100 hover-bg-gray-300 active-bg-dark-300 text-dark-200 active-text-white rounded-r-pill sm-rounded-pill transition-colors sm-mt-2 sm-mx-1">
                    Web</div>
            </div>
        </div>
        <div class="container mt-2">
            <div id="works" class="isotope grid-layout flex-row lg-flex-columns-3 md-flex-columns-2 sm-flex-columns-1" data-default-filter="*">
				<?php 
				$get_gallery = get_gallery();
				$i = 1;
				foreach($get_gallery as $row) { ?>
                <div class="photography item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0">
							<img data-src="<?= get_library_to_image($row->image,'main'); ?>" src="<?= get_library_to_image($row->image,'main'); ?>" width="370" height="241" alt="<?php echo $row->title; ?>" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?= get_library_to_image($row->image,'main'); ?>" data-fslightbox="portfolio" data-type="image" class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors">
									<svg width="14px" height="15px" viewBox="0 0 14 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">	<?php echo $row->title; ?>
							</h5>
                            <p class="text-gray-600 text-sm mt-1">
								<?php echo $row->description; ?>
							</p>
                        </div>
                    </div>
                </div>
				<?php } ?>
			</div>
        </div>
    </section>

   
    <div class="flex justify-content-center relative">
        <div class="absolute w-full left-0 top-0 h-auto flex justify-content-center">
            <div
                class="icon-lg text-lg rounded-full border-1 -translate-y-perc-50 border-gray-400 bg-white text-gray-700 zi-10">
                <i class="bi-collection-play"></i></div>
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