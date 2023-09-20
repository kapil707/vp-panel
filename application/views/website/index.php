<?php 
$title 	= $this->Main_Model->get_website_data("title");
$home_page_video_title = $this->Main_Model->get_website_data("home_page_video_title"); 
$home_page_video_url = $this->Main_Model->get_website_data("home_page_video_url");

$topphone = $this->Main_Model->get_website_data("topphone");
$facebook = $this->Main_Model->get_website_data("facebook");
$twitter = $this->Main_Model->get_website_data("twitter");
$linkedin = $this->Main_Model->get_website_data("linkedin");
$googleplus = $this->Main_Model->get_website_data("googleplus");
$youtube = $this->Main_Model->get_website_data("youtube");
$whatsappno = $this->Main_Model->get_website_data("whatsappno");
?>
<section id="home" class="fullwidth bg-stone-800">
        <div id="home-slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container">
            <div id="home-slider" class="rev_slider fullwidthbanner" data-version="5.4.1">
                <ul>
					<?php foreach($tbl_slider as $row){ ?>
                    <li class="rs-slide" data-masterspeed="1000" data-transition="random"
                        data-thumb="<?= $url_path.$row->photo; ?>" data-saveperformance="off"data-title="Create Stunning Website"
                        data-description="Home Slider">
						
						<img src="<?= $url_path.$row->photo; ?>" alt="Image Background"
						data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>
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
			<?php
			foreach($tbl_toptext as $row){ ?>
			<a href="#"><?= $row->title;?></a>
			<?php } ?>
			</h1>
        </div>
    </div>
    <section id="about" class="lg-py-12 sm-py-8">
        <div class="container cursor-default">
            <div class="flex-row lg-flex-columns-4 md-flex-columns-2 sm-flex-columns-2 xs-flex-columns-1">
                <div>
                    <div
                        class="group lg-py-4 sm-py-4 px-2 lg-mt-0 sm-mt-5 bg-transparent hover-bg-dark text-center flex align-items-center flex-column transition">
                        <div
                            class="icon-xl bg-transparent relative border-2 border-dark text-base rounded-full group-hover-bg-white d-flex group-hover-border-double group-hover-border-white justify-content-center align-items-center transition">
                            <i class="bi-cloud-hail-fill text-20"></i></div>
                        <h4 class="text-lg font-secondary uppercase text-dark group-hover-text-white transition mt-3">
                            A world of finer taste and élégante</h4>
                        <p class="text-gray-700 text-base group-hover-text-gray-400 mt-2 transition">Affluence is embedded in every inch of Central 50, located at Noida Sector 50. It consists of world-class brands along with
cafes, restaurants, and entertainment zones echoing grandeur. Experience indulgence coursing through your blood here with
the taste of pure extravaganza.</p><a href="#"
                            class="icon-sm border-1 border-gray-600 text-lg text-gray-700 group-hover-text-white rounded-full mt-3 transition hover-bg-colored hover-border-colored transition"><i
                                class="bi-plus"></i></a>
                    </div>
                </div>
                <div>
                    <div
                        class="group lg-py-4 sm-py-4 px-2 lg-mt-0 sm-mt-5 bg-transparent hover-bg-dark text-center flex align-items-center flex-column transition">
                        <div
                            class="icon-xl bg-transparent relative border-2 border-dark text-base rounded-full group-hover-bg-white d-flex group-hover-border-double group-hover-border-white justify-content-center align-items-center transition">
                            <i class="bi-bell-fill text-20"></i></div>
                        <h4 class="text-lg font-secondary uppercase text-dark group-hover-text-white transition mt-3">
                            Unfold an eloquent
Highstreet experience</h4>
                        <p class="text-gray-700 text-base group-hover-text-gray-400 mt-2 transition">Central 50 is crafted with customized design and layouts
to highlight your retail experience with the utmost clarity
and impeccable visibility for your brand. Unraveling an
enhanced experience with composed exploration for
visitors that meet their desire for a simple and sorted
shopping experience.</p><a href="#"
                            class="icon-sm border-1 border-gray-600 text-lg text-gray-700 group-hover-text-white rounded-full mt-3 transition hover-bg-colored hover-border-colored transition"><i
                                class="bi-plus"></i></a>
                    </div>
                </div>
                <div>
                    <div
                        class="group lg-py-4 sm-py-4 px-2 lg-mt-0 sm-mt-5 bg-transparent hover-bg-dark text-center flex align-items-center flex-column transition">
                        <div
                            class="icon-xl bg-transparent relative border-2 border-dark text-base rounded-full group-hover-bg-white d-flex group-hover-border-double group-hover-border-white justify-content-center align-items-center transition">
                            <i class="bi-bookmark-check-fill text-20"></i></div>
                        <h4 class="text-lg font-secondary uppercase text-dark group-hover-text-white transition mt-3">
                           A Palais of
ecstatic hangouts</h4>
                        <p class="text-gray-700 text-base group-hover-text-gray-400 mt-2 transition">Central 50 offers a splendid mix of shops, cafes,
restaurants and amusement centers to hang out with
friends and family that cater to a gratifying experience
for the visitors. Spread in a strategic layout, it harbours a
mixed sense of euphoria and ecstasy evoking peerless
juxtaposition of unhindered joviality</p><a href="#"
                            class="icon-sm border-1 border-gray-600 text-lg text-gray-700 group-hover-text-white rounded-full mt-3 transition hover-bg-colored hover-border-colored transition"><i
                                class="bi-plus"></i></a>
                    </div>
                </div>
                <div>
                    <div
                        class="group lg-py-4 sm-py-4 px-2 lg-mt-0 sm-mt-5 bg-transparent hover-bg-dark text-center flex align-items-center flex-column transition">
                        <div
                            class="icon-xl bg-transparent relative border-2 border-dark text-base rounded-full group-hover-bg-white d-flex group-hover-border-double group-hover-border-white justify-content-center align-items-center transition">
                            <i class="bi-boombox-fill text-20"></i></div>
                        <h4 class="text-lg font-secondary uppercase text-dark group-hover-text-white transition mt-3">
                            The nucleus of
an emerging locale</h4>
                        <p class="text-gray-700 text-base group-hover-text-gray-400 mt-2 transition">Noida Sector 50, is a rapidly forming point of focus due
to its many perks. Highrise residential and alluring
commercial developments have marked it as a
high-catchment area. Proximity to the metro station, and
a well-laid network of roadways connecting to all around
Delhi NCR.</p><a href="#"
                            class="icon-sm border-1 border-gray-600 text-lg text-gray-700 group-hover-text-white rounded-full mt-3 transition hover-bg-colored hover-border-colored transition"><i
                                class="bi-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="lg-py-12 sm-py-8 relative">
        <div class="fai xl-bottom-20 lg-bottom-18 bg-cover zi-1" data-bg="<?php echo base_url() ?>assets/website/images/i1.jpg"></div>
        <div class="container text-center relative zi-20">
            <h1 class="font-secondary uppercase text-gray-800 lg-text-5xl sm-text-3xl font-light">High in-demand zone</h1>
            <p class="mx-auto mxw-50 text-gray-700 lg-mt-4 sm-mt-3">CONTRARY TO POPULAR BELIEF, LOREM IPSUM IS NOT
                SIMPLY RANDOM TEXT. IT HAS ROOTS IN A PIECE OF CLASSICAL LATIN LITERATURE FROM 45 BC, MAKING IT OVER
                2000 YEARS OLD.</p>
            <div class="flex-row xl-mt-8 lg-mt-7 justify-content-center animated-group">
                <div
                    class="xl-column-4 lg-column-4 sm-column-6 xs-column-12 align-items-center align-items-lg-end flex-column cursor-default">
                    <div class="group mxw-37 mx-auto sm-mxw-none mt-5 sm-align-items-center lg-align-items-end lg-text-right sm-text-center flex flex-column animated"
                        data-animation="fadeInLeft" data-animation-delay="650">
                        <div
                            class="icon-xl bg-transparent border-1 border-gray-500 text-gray-800 relative rounded-full">
                            <i class="bi-card-text text-2xl"></i><span
                                class="badge rounded-full text-11 icon-xs bg-dark group-hover-bg-colored transition bold white absolute right-0 top-0 -mt-2 -mr-1">1</span>
                        </div>
                        <h3 class="font-secondary uppercase light text-gray-700 mt-4">02</h3>
                        <p class="mt-2 normal text-gray-600">Minutes drive from
Residential Complexes</p>
                    </div>
                    <div class="group mxw-37 mx-auto sm-mxw-none mt-5 sm-align-items-center lg-align-items-end lg-text-right sm-text-center flex flex-column animated"
                        data-animation="fadeInLeft" data-animation-delay="700">
                        <div
                            class="icon-xl bg-transparent border-1 border-gray-500 text-gray-800 relative rounded-full">
                            <i class="bi-card-text text-2xl"></i><span
                                class="badge rounded-full text-11 icon-xs bg-dark group-hover-bg-colored transition bold white absolute right-0 top-0 -mt-2 -mr-1">3</span>
                        </div>
                        <h3 class="font-secondary uppercase light text-gray-700 mt-4">08</h3>
                        <p class="mt-2 normal text-gray-600">Minutes drive from Noida
Sector 50 Metro</p>
                    </div>
                </div>
                <div class="xl-column-3 lg-column-4 sm-hidden lg-flex sm-hidden">
                    <div id="hotspots" class="hotspots animated" data-animation="flipInX" data-animation-delay="100">
                        <img src="<?php echo base_url() ?>assets/website/images/f-iphone-loader.svg" data-src="<?php echo base_url() ?>assets/website/images/f-iphone.png" alt="hotspot image">
                        <div class="items">
                            <div style="left:21.5%;top:23.2%" class="item animated" data-animation="blurIn"
                                data-animation-delay="1100">
                                <div class="text-4xl text-white bi-1-circle-fill" data-bs-toggle="popover"
                                    data-bs-trigger="hover" data-bs-placement="left" data-bs-html="true"
                                    title="Simple Popover is here!"
                                    data-bs-content="<p class='mt-2 lh-20'>There are many variations of passages of Lorem Ipsum available, but the majority  of text.</p>">
                                </div>
                            </div>
                            <div style="left:66.2%;top:28.1%" class="item animated" data-animation="blurIn"
                                data-animation-delay="1200">
                                <div class="text-4xl text-white bi-2-circle-fill" data-bs-toggle="popover"
                                    data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true"
                                    title="Simple Popover is here!"
                                    data-bs-content="<p class='mt-2 lh-20'>There are many variations of passages of Lorem Ipsum available, but the majority  of text.</p>">
                                </div>
                            </div>
                            <div style="left:27.2%;top:60.5%" class="item animated" data-animation="blurIn"
                                data-animation-delay="1300">
                                <div class="text-4xl text-white bi-3-circle-fill" data-bs-toggle="popover"
                                    data-bs-trigger="hover" data-bs-placement="left" data-bs-html="true"
                                    title="Simple Popover is here!"
                                    data-bs-content="<p class='mt-2 lh-20'>There are many variations of passages of Lorem Ipsum available, but the majority  of text.</p>">
                                </div>
                            </div>
                            <div style="left:68.2%;top:64.5%" class="item animated" data-animation="blurIn"
                                data-animation-delay="1400">
                                <div class="text-4xl text-white bi-4-circle-fill" data-bs-toggle="popover"
                                    data-bs-trigger="hover" data-bs-placement="top" data-bs-html="true"
                                    title="Simple Popover is here!"
                                    data-bs-content="<p class='mt-2 lh-20'>There are many variations of passages of Lorem Ipsum available, but the majority  of text.</p>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="xl-column-4 lg-column-4 sm-column-6 xs-column-12 sm-align-items-center lg-align-items-end flex-column cursor-default">
                    <div class="group mxw-37 mx-auto sm-mxw-none mt-5 sm-align-items-center lg-align-items-start lg-text-left sm-text-center flex flex-column animated"
                        data-animation="fadeInRight" data-animation-delay="700">
                        <div
                            class="icon-xl bg-transparent border-1 border-gray-500 text-gray-800 relative rounded-full">
                            <i class="bi-card-text text-2xl"></i><span
                                class="badge rounded-full text-11 icon-xs bg-dark group-hover-bg-colored transition bold white absolute left-0 top-0 -mt-2 -ml-1">2</span>
                        </div>
                        <h3 class="font-secondary uppercase light text-gray-700 mt-4">12</h3>
                        <p class="mt-2 normal text-gray-600">Minutes drive from
Kailash Hospita</p>
                    </div>
                    <div class="group mxw-37 mx-auto sm-mxw-none mt-5 sm-align-items-center lg-align-items-start lg-text-left sm-text-center flex flex-column animated"
                        data-animation="fadeInRight" data-animation-delay="700">
                        <div
                            class="icon-xl bg-transparent border-1 border-gray-500 text-gray-800 relative rounded-full">
                            <i class="bi-card-text text-2xl"></i><span
                                class="badge rounded-full text-11 icon-xs bg-dark group-hover-bg-colored transition bold white absolute left-0 top-0 -mt-2 -ml-1">4</span>
                        </div>
                        <h3 class="font-secondary uppercase light text-gray-700 mt-4">16</h3>
                        <p class="mt-2 normal text-gray-600">Minutes drive from
Noida Sector 18</p>
                    </div>
                </div>
				
				
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
                        <li role="presentation" class="d-flex"><button type="button" data-bs-target="#tab1a"
                                aria-selected="true" aria-controls="tab1a" role="tab" data-bs-toggle="pill"
                                class="tab-filter show active font-secondary xl-mr-2 lg-mr-1 sm-mr-1 btn-md xl-px-4 lg-px-3 sm-px-2 bg-white active-bg-white hover-bg-gray-100 bg-white uppercase border-l-1 border-t-1 border-r-1 border-b-0 active-border-gray-300 border-white relative transition-colors">Central 50<span
                                    class="opacity-0 get-active active-opacity-100 absolute top-0 h-2 zi-5 w-full bg-colored inline-flex transition"></span><span
                                    class="opacity-0 get-active active-opacity-100 absolute top-perc-100 h-2 zi-5 w-full bg-white inline-flex transition"></span></button>
                        </li>
                        <li role="presentation" class="d-flex"><button type="button" data-bs-target="#tab1b"
                                aria-selected="false" aria-controls="tab1b" role="tab" data-bs-toggle="pill"
                                class="tab-filter font-secondary xl-mr-2 lg-mr-1 sm-mr-1 btn-md xl-px-4 lg-px-3 sm-px-2 bg-white active-bg-white hover-bg-gray-100 bg-white-active uppercase border-l-1 border-t-1 border-r-1 border-b-0 active-border-gray-300 border-white relative transition-colors">Company<span
                                    class="opacity-0 get-active active-opacity-100 absolute top-perc-100 h-2 zi-5 w-full bg-white inline-flex transition"></span><span
                                    class="opacity-0 get-active active-opacity-100 absolute top-0 h-2 zi-5 w-full bg-colored inline-flex transition"></span></button>
                        </li>
                        <li role="presentation" class="d-flex"><button type="button" data-bs-target="#tab1c"
                                aria-selected="false" aria-controls="tab1c" role="tab" data-bs-toggle="pill"
                                class="tab-filter font-secondary xl-mr-2 lg-mr-1 sm-mr-1 btn-md xl-px-4 lg-px-3 sm-px-2 bg-white active-bg-white hover-bg-gray-100 bg-white-active uppercase border-l-1 border-t-1 border-r-1 border-b-0 active-border-gray-300 border-white relative transition-colors">Mission & Vision<span
                                    class="opacity-0 get-active active-opacity-100 absolute top-perc-100 h-2 zi-5 w-full bg-white inline-flex transition"></span><span
                                    class="opacity-0 get-active active-opacity-100 absolute top-0 h-2 zi-5 w-full bg-colored inline-flex transition"></span></button>
                        </li>
                        <li role="presentation" class="d-flex"><button type="button" data-bs-target="#tab1d"
                                aria-selected="false" aria-controls="tab1d" role="tab" data-bs-toggle="pill"
                                class="tab-filter font-secondary xl-mr-2 lg-mr-1 sm-mr-1 btn-md xl-px-4 lg-px-3 sm-px-2 bg-white active-bg-white hover-bg-gray-100 bg-white-active uppercase border-l-1 border-t-1 border-r-1 border-b-0 active-border-gray-300 border-white relative transition-colors">Architect<span
                                    class="opacity-0 get-active active-opacity-100 absolute top-perc-100 h-2 zi-5 w-full bg-white inline-flex transition"></span><span
                                    class="opacity-0 get-active active-opacity-100 absolute top-0 h-2 zi-5 w-full bg-colored inline-flex transition"></span></button>
                        </li>
                    </ul>
                    <div class="tab-content p-4 block-images text-gray-600 text-justify border border-gray-300">
                        <div id="tab1a" role="tabpanel" class="tab-pane fade show active">
                            <div class="tab-container py-2"><img src="<?php echo base_url() ?>assets/website/images/tab-icon-1.png" alt="mini phone png"
                                    class="mr-4 mxw-25 w-auto float-left"> Comming Soon.<div class="clearfix"></div>
                            </div>
                        </div>
                        <div id="tab1b" role="tabpanel" class="tab-pane fade">
                            <div class="tab-container py-2"><img src="<?php echo base_url() ?>assets/website/images/tab-icon-2.png"
                                    alt="mini phone alternative png" class="ml-4 mxw-25 w-auto float-right"> Comming Soon<div class="clearfix"></div>
                            </div>
                        </div>
                        <div id="tab1c" role="tabpanel" class="tab-pane fade">
                            <div class="tab-container py-2">Comming Soon.</div>
                        </div>
                        <div id="tab1d" role="tabpanel" class="tab-pane fade">
                            <div class="tab-container py-2"><img src="<?php echo base_url() ?>assets/website/images/tab-icon-3.png"
                                    alt="mini phone alternative png" class="ml-4 mxw-25 w-auto float-right"> Comming Soon.<div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
 
   
    <section id="team" class="lg-py-12 sm-py-8">
        <div class="container text-center">
            <h1 class="font-secondary uppercase text-dark lg-text-5xl sm-text-3xl font-light">Client Testimonial</h1>
            <p class="mx-auto mxw-50 text-gray-700 lg-mt-4 sm-mt-3">Find out what our clients are saying about what it's like to invest with Central 50 and our services.</p>
        </div>
        <div class="container flex justify-content-center mt-4"><button type="button"
                class="icon-sm mx-1 rounded-full text-dark hover-text-white bg-gray-300 hover-bg-dark-200 transition-colors"
                data-slider-control="#team-slider" data-slider-dir="prev"><i
                    class="bi-chevron-left"></i></button><button type="button"
                class="icon-sm mx-1 rounded-full text-dark hover-text-white bg-gray-300 hover-bg-dark-200 transition-colors"
                data-slider-control="#team-slider" data-slider-dir="next"><i class="bi-chevron-right"></i></button>
        </div>
        <div class="container mt-4">
            <div id="team-slider" class="custom-slider"
                data-slick='{"dots": false, "speed":600, "arrows": false, "fade": false, "draggable":true, "slidesToShow": 4, "slidesToScroll": 1, "responsive":[{"breakpoint": 1300,"settings":{"slidesToShow": 3,"slidesToScroll": 1}},{"breakpoint": 1024,"settings":{"slidesToShow": 2,"slidesToScroll": 1}},{"breakpoint": 768,"settings":{"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                <div
                    class="group px-3 py-4 flex justify-content-center text-center flex-column border-b-5 border-transparent hover-border-colored bg-white hover-bg-dark-400 transition-colors">
                    <div class="w-23 h-23 rounded-full mx-auto border-4 border-gray-200"><img src="<?php echo base_url() ?>assets/website/images/team/1.jpg"
                            alt="team member image" class="w-full rounded-full"></div>
                    <h4
                        class="font-secondary text-lg uppercase text-gray-800 group-hover-text-white transition-colors mt-3">
                        Zane Harris</h4>
                    <p
                        class="font-secondary text-md uppercase text-gray-600 group-hover-text-gray-200 transition-colors mt-0">
                        Photographer</p>
                    <p class="text-base text-gray-600 group-hover-text-gray-400 mt-1 transition-colors">Comming Soon</p>
                    <div class="mt-2"><a href="#"
                            class="icon-sm text-sm hover-bg-facebook text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-facebook"></i></a><a href="#"
                            class="icon-sm mx-1 text-sm hover-bg-twitter text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-twitter"></i></a><a href="#"
                            class="icon-sm text-sm hover-bg-instagram text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-instagram"></i></a></div>
                </div>
                <div
                    class="group px-3 py-4 flex justify-content-center text-center flex-column border-b-5 border-transparent hover-border-colored bg-white hover-bg-dark-400 transition-colors">
                    <div class="w-23 h-23 rounded-full mx-auto border-4 border-gray-200"><img src="<?php echo base_url() ?>assets/website/images/team/2.jpg"
                            alt="team member image" class="w-full rounded-full"></div>
                    <h4
                        class="font-secondary text-lg uppercase text-gray-800 group-hover-text-white transition-colors mt-3">
                        Samina Dominguez</h4>
                    <p
                        class="font-secondary text-md uppercase text-gray-600 group-hover-text-gray-200 transition-colors mt-0">
                        Developer</p>
                    <p class="text-base text-gray-600 group-hover-text-gray-400 mt-1 transition-colors">Comming Soon.</p>
                    <div class="mt-2"><a href="#"
                            class="icon-sm text-sm hover-bg-facebook text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-facebook"></i></a><a href="#"
                            class="icon-sm mx-1 text-sm hover-bg-twitter text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-twitter"></i></a><a href="#"
                            class="icon-sm text-sm hover-bg-instagram text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-instagram"></i></a></div>
                </div>
                <div
                    class="group px-3 py-4 flex justify-content-center text-center flex-column border-b-5 border-transparent hover-border-colored bg-white hover-bg-dark-400 transition-colors">
                    <div class="w-23 h-23 rounded-full mx-auto border-4 border-gray-200"><img src="<?php echo base_url() ?>assets/website/images/team/3.jpg"
                            alt="team member image" class="w-full rounded-full"></div>
                    <h4
                        class="font-secondary text-lg uppercase text-gray-800 group-hover-text-white transition-colors mt-3">
                        Colleen Bradley</h4>
                    <p
                        class="font-secondary text-md uppercase text-gray-600 group-hover-text-gray-200 transition-colors mt-0">
                        Human resources</p>
                    <p class="text-base text-gray-600 group-hover-text-gray-400 mt-1 transition-colors">Comming Soon</p>
                    <div class="mt-2"><a href="#"
                            class="icon-sm text-sm hover-bg-facebook text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-facebook"></i></a><a href="#"
                            class="icon-sm mx-1 text-sm hover-bg-twitter text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-twitter"></i></a><a href="#"
                            class="icon-sm text-sm hover-bg-instagram text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-instagram"></i></a></div>
                </div>
                <div
                    class="group px-3 py-4 flex justify-content-center text-center flex-column border-b-5 border-transparent hover-border-colored bg-white hover-bg-dark-400 transition-colors">
                    <div class="w-23 h-23 rounded-full mx-auto border-4 border-gray-200"><img src="<?php echo base_url() ?>assets/website/images/team/4.jpg"
                            alt="team member image" class="w-full rounded-full"></div>
                    <h4
                        class="font-secondary text-lg uppercase text-gray-800 group-hover-text-white transition-colors mt-3">
                        Saba Haney</h4>
                    <p
                        class="font-secondary text-md uppercase text-gray-600 group-hover-text-gray-200 transition-colors mt-0">
                        Designer</p>
                    <p class="text-base text-gray-600 group-hover-text-gray-400 mt-1 transition-colors">Comming Soon.</p>
                    <div class="mt-2"><a href="#"
                            class="icon-sm text-sm hover-bg-facebook text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-facebook"></i></a><a href="#"
                            class="icon-sm mx-1 text-sm hover-bg-twitter text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-twitter"></i></a><a href="#"
                            class="icon-sm text-sm hover-bg-instagram text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-instagram"></i></a></div>
                </div>
                <div
                    class="group px-3 py-4 flex justify-content-center text-center flex-column border-b-5 border-transparent hover-border-colored bg-white hover-bg-dark-400 transition-colors">
                    <div class="w-23 h-23 rounded-full mx-auto border-4 border-gray-200"><img src="<?php echo base_url() ?>assets/website/images/team/1.jpg"
                            alt="team member image" class="w-full rounded-full"></div>
                    <h4
                        class="font-secondary text-lg uppercase text-gray-800 group-hover-text-white transition-colors mt-3">
                        Zane Harris</h4>
                    <p
                        class="font-secondary text-md uppercase text-gray-600 group-hover-text-gray-200 transition-colors mt-0">
                        Photographer</p>
                    <p class="text-base text-gray-600 group-hover-text-gray-400 mt-1 transition-colors">Comming Soon.</p>
                    <div class="mt-2"><a href="#"
                            class="icon-sm text-sm hover-bg-facebook text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-facebook"></i></a><a href="#"
                            class="icon-sm mx-1 text-sm hover-bg-twitter text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-twitter"></i></a><a href="#"
                            class="icon-sm text-sm hover-bg-instagram text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-instagram"></i></a></div>
                </div>
                <div
                    class="group px-3 py-4 flex justify-content-center text-center flex-column border-b-5 border-transparent hover-border-colored bg-white hover-bg-dark-400 transition-colors">
                    <div class="w-23 h-23 rounded-full mx-auto border-4 border-gray-200"><img src="<?php echo base_url() ?>assets/website/images/team/2.jpg"
                            alt="team member image" class="w-full rounded-full"></div>
                    <h4
                        class="font-secondary text-lg uppercase text-gray-800 group-hover-text-white transition-colors mt-3">
                        Samina Dominguez</h4>
                    <p
                        class="font-secondary text-md uppercase text-gray-600 group-hover-text-gray-200 transition-colors mt-0">
                        Developer</p>
                    <p class="text-base text-gray-600 group-hover-text-gray-400 mt-1 transition-colors">Contrary to
                        popular belief, Lorem Ipsum is a not simply It has roots in a piece of classical Latin
                        literature making.</p>
                    <div class="mt-2"><a href="#"
                            class="icon-sm text-sm hover-bg-facebook text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-facebook"></i></a><a href="#"
                            class="icon-sm mx-1 text-sm hover-bg-twitter text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-twitter"></i></a><a href="#"
                            class="icon-sm text-sm hover-bg-instagram text-gray-800 group-hover-text-white transition-colors"><i
                                class="bi-instagram"></i></a></div>
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
        <div class="parallax" data-bg="<?php echo base_url() ?>assets/website/images/i3.jpg" data-target="#history"
            data-bottom-top="transform:translate3d(0px,-100px,0px);"
            data-top-bottom="transform:translate3d(0px,100px,0px);"></div>
        <div class="container">
            <div class="flex-row align-items-center">
                <div class="lg-column-6"><img src="<?php echo base_url() ?>assets/website/images/mobile/c50m.jpg" data-src="<?php echo base_url() ?>assets/website/images/mobile/c50m.jpg"
                        alt="mobile image template" class="mxw-full animated" data-animation="fadeInLeft"
                        data-animation-delay="100"></div>
                <div class="lg-column-6 sm-mt-5">
                    <h1 class="lg-text-5xl sm-text-2xl font-secondary uppercase font-light text-dark-100">WHY DO YOU
                        CHOOSE<span class="text-colored">Central 50?</span></h1>
                    <div id="one" class="mt-3">
                        <div data-bs-target="#acc-01" aria-controls="acc-01" aria-expanded="true"
                            data-bs-toggle="collapse" role="button"
                            class="acc-bar border-b-1 border-solid border-gray-200 flex align-items-center justify-content-between text-black flex-wrap transition">
                            <div class="py-2 flex align-items-center">
                                <h5 class="font-secondary uppercase text-gray-800 sm-text-base"><i
                                        class="bi-check text-xl relative top-px mr-1"></i>Why?</h5>
                            </div>
                            <div class="ml-auto"><i class="bi-plus text-lg text-gray-800"></i><i
                                    class="bi-dash text-lg text-gray-800"></i></div>
                        </div>
                        <div id="acc-01" class="collapse show active w-full" data-bs-parent="#one">
                            <div class="py-2">
                                <p class="text-md sm-text-base text-gray-800">Comming soon</p>
                            </div>
                        </div>
                        <div data-bs-target="#acc-02" aria-controls="acc-02" aria-expanded="false"
                            data-bs-toggle="collapse" role="button"
                            class="acc-bar border-b-1 border-gray-400 flex align-items-center justify-content-between text-black flex-wrap transition mt-3">
                            <div class="py-2 flex align-items-center">
                                <h5 class="font-secondary uppercase text-gray-800 sm-text-base"><i
                                        class="bi-check text-xl relative top-px mr-1"></i>Why?</h5>
                            </div>
                            <div class="ml-auto"><i class="bi-plus text-lg text-gray-800"></i><i
                                    class="bi-dash text-lg text-gray-800"></i></div>
                        </div>
                        <div id="acc-02" class="collapse w-full" data-bs-parent="#one">
                            <div class="py-2">
                                <p class="text-md sm-text-base text-gray-800">Comming Soon</p>
                            </div>
                        </div>
                        <div data-bs-target="#acc-03" aria-controls="acc-03" aria-expanded="false"
                            data-bs-toggle="collapse" role="button"
                            class="acc-bar border-b-1 border-gray-400 flex align-items-center justify-content-between text-black cursor-pointer flex-wrap transition mt-3">
                            <div class="py-2 flex align-items-center flex align-items-center">
                                <h5 class="font-secondary uppercase text-gray-800 sm-text-base"><i
                                        class="bi-check text-xl relative top-px mr-1"></i>Why?</h5>
                            </div>
                            <div class="ml-auto"><i class="bi-plus text-lg text-gray-800"></i><i
                                    class="bi-dash text-lg text-gray-800"></i></div>
                        </div>
                        <div id="acc-03" class="collapse w-full" data-bs-parent="#one">
                            <div class="py-2">
                                <p class="text-md sm-text-base text-gray-800">Comming Soon</p>
                            </div>
                        </div>
                        <div data-bs-target="#acc-04" aria-controls="acc-04" aria-expanded="false"
                            data-bs-toggle="collapse" role="button"
                            class="acc-bar border-b-1 border-gray-400 flex align-items-center justify-content-between text-black cursor-pointer flex-wrap transition mt-3">
                            <div class="py-2 flex align-items-center flex align-items-center">
                                <h5 class="font-secondary uppercase text-gray-800 sm-text-base"><i
                                        class="bi-check text-xl relative top-px mr-1"></i>Why?</h5>
                            </div>
                            <div class="ml-auto"><i class="bi-plus text-lg text-gray-800"></i><i
                                    class="bi-dash text-lg text-gray-800"></i></div>
                        </div>
                        <div id="acc-04" class="collapse w-full" data-bs-parent="#one">
                            <div class="py-2">
                                <p class="text-md sm-text-base text-gray-800">Comming Soon</p>
                            </div>
                        </div>
                    </div>
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
    <section id="portfolio" class="lg-py-12 sm-py-8">
        <div class="container text-center">
            <h1 class="font-secondary uppercase text-dark lg-text-5xl sm-text-3xl font-light">OUR AWESOME WORKS</h1>
            <p class="mx-auto mxw-50 text-gray-700 lg-mt-4 sm-mt-3">CONTRARY TO POPULAR BELIEF, LOREM IPSUM IS NOT
                SIMPLY RANDOM TEXT. IT HAS ROOTS IN A PIECE OF CLASSICAL LATIN LITERATURE FROM 45 BC, MAKING IT OVER
                2000 YEARS OLD.</p>
        </div>
        <div class="container mt-5">
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
            <div id="works" class="isotope grid-layout flex-row lg-flex-columns-3 md-flex-columns-2 sm-flex-columns-1"
                data-default-filter="*">
                <div class="photography item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/1.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/1b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="branding item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/2.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/2b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="photography design item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/3.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/3b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="branding item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/4.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/4b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="web item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/5.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/5b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="branding web item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/6.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/6b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="design item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/7.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/7b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="photography item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/8.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/8b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="web design item lg-mt-4 sm-mt-4">
                    <div class="border-1 border-gray-200 group has-overlay cursor-pointer">
                        <figure class="m-0"><img data-src="<?php echo base_url() ?>assets/website/images/works/9.jpg" src="<?php echo base_url() ?>assets/website/images/works/loader.svg" width="370"
                                height="241" alt="portfolio image template" class="d-block w-full">
                            <figcaption
                                class="hover-overlay bg-blur bg-semi-80 bg-semi-dark-700 transition transition-duration-400 flex align-items-center justify-content-center">
                                <a href="<?php echo base_url() ?>assets/website/images/works/9b.jpg" data-fslightbox="portfolio" data-type="image"
                                    class="icon-md mx-1 text-lg group-hover-fadeInUp animation-duration-300 bg-white hover-bg-colored rounded-full fill-dark hover-fill-white transition-colors"><svg
                                        width="14px" height="15px" viewBox="0 0 14 15" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M10.5145693,5.25765823 C10.5145693,2.35836269 8.15620664,0 5.25728466,0 C2.35836269,0 -2.27373675e-13,2.35836269 -2.27373675e-13,5.25765823 C-2.27373675e-13,8.15695378 2.35798911,10.5145693 5.25691109,10.5145693 C8.15620664,10.5145693 10.5145693,8.15658021 10.5145693,5.25765823 Z M5.25728466,9.19473797 C3.08608176,9.19473797 1.32020493,7.42811399 1.32020493,5.25765823 C1.32020493,3.08645533 3.0868289,1.31983136 5.25728466,1.31983136 C7.42848757,1.31983136 9.19473797,3.08645533 9.19473797,5.25765823 C9.19473797,7.42886114 7.42811399,9.19473797 5.25728466,9.19473797 Z M14,13.0656954 L12.8378162,14.2278792 L8.79837763,10.1891877 L9.96056143,9.02700395 L14,13.0656954 Z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a><a href="#"
                                    class="icon-md mx-1 text-lg group-hover-fadeInDown animation-duration-300 bg-white hover-bg-colored rounded-full text-dark hover-text-white transition-colors"><i
                                        class="bi-link-45deg"></i></a></figcaption>
                        </figure>
                        <div class="p-3 flex align-items-center justify-content-center flex-column text-center">
                            <h5 class="font-secondary uppercase text-gray-600 w-full">Work image</h5>
                            <p class="text-gray-600 text-sm mt-1">Contrary to popular belief, Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
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
    <section id="testimonials-1512324" class="has-parallax lg-py-7 sm-py-7 bg-semi-45 bg-semi-dark-800"
        data-bg="<?php echo base_url() ?>assets/website/images/video.jpg">
        <div data-video-id="V6_85cSOIcE" data-startat="0" data-endat="295" id="youtubeVideo"
            class="youtube-video zi-0 pointer-events-none"></div>
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