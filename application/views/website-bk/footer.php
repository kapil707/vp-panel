<?php
$title 	= $this->Main_Model->get_website_data("title");
$title2 = $this->Main_Model->get_website_data("title2");
$logo   = $this->Main_Model->get_website_data("logo");
$logo2  = $this->Main_Model->get_website_data("logo2");
$logo3  = $this->Main_Model->get_website_data("logo3");
$logo4  = $this->Main_Model->get_website_data("logo4");
$popup	= $this->Main_Model->get_website_data("popup");
$popupstatus	= $this->Main_Model->get_website_data("popupstatus");
$footeraddress = $this->Main_Model->get_website_data("footeraddress");
$topphone = $this->Main_Model->get_website_data("topphone");
$topemail = $this->Main_Model->get_website_data("topemail");
$footeraddress1 = $this->Main_Model->get_website_data("footeraddress1");
$footercopyright = $this->Main_Model->get_website_data("footercopyright");

$facebook = $this->Main_Model->get_website_data("facebook");
$twitter = $this->Main_Model->get_website_data("twitter");
$linkedin = $this->Main_Model->get_website_data("linkedin");
$instagram = $this->Main_Model->get_website_data("instagram");
$youtube = $this->Main_Model->get_website_data("youtube");
$whatsappno = $this->Main_Model->get_website_data("whatsappno");
?>
<footer>
    <!--
	<div class="container-fluid cnt_fluid_wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-6 ftr_left_br">
                <div class="footer-left wow fadeInLeft animated animated">
                    <div class="flex bluesqu">
						<div class="flogo">
							<a href="<?= base_url(); ?>">
							<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo2; ?>" alt="" class="footer_logo"></a>
						</div>
                        <div class="ftext">
							<?php //echo $footeraddress; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 ths_rsp_lnk">
                <div class="row">
                    <div class="footer-link">
                        <div class="footre_menu">
                            <ul>
                                <?php
								$tbl_footer_menu = $this->db->query("select * from tbl_footer_menu where status='1'")->result();
								foreach($tbl_footer_menu as $row){?>
									<li><a href="<?php echo $row->url; ?>"><?php echo $row->title; ?></a></li>
									<?php 
								}?>
                            </ul>
                        </div>
                    </div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 ths_rsp_sc">
                <div class="row">
                    <div class="sosal wow fadeInRight animated" data-wow-delay="0.2s">
                        <h5>Connect with Social Media</h5>
                        <ul>
                            <li><a href="<?= $facebook ?>" class="fab fa-facebook" target="_blank"></a></li>
                            <li><a href="<?= $twitter ?>" class="fab fa-twitter" target="_blank"></a></li>
                            <li><a href="<?= $linkedin ?>" class="fab fa-linkedin" target="_blank"></a></li>
                            <li><a href="<?= $googleplus ?>" class="fab fa-google-plus" target="_blank"></a></li>
                            <li><a href="<?= $youtube ?>" class="fab fa-youtube" target="_blank"></a></li>
                        </ul>
                        <p class="drop-us">Drop us a message</p>
						<?php  $footeremail = $this->Main_Model->get_website_data("footeremail"); ?>
                        <p class="mail">
							<a href="mailto:<?= $footeremail ?>"><?= $footeremail ?></a>
						</p>
						<?php $footerphone = $this->Main_Model->get_website_data("footerphone"); ?>
						<p> Phone : <?= $footerphone ?> </p>
                        <img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo3; ?>" class="footer_logo" />                       
                    </div>
				</div>
            </div>
			<div class="col-sm-12">
				<div class="copyright text-center">
					<?php //echo $footercopyright; ?>
				</div>
			</div>
		</div>			
    </div>
	-->
	<div class="footer-new">
		<div class="container-fluid cnt_fluid_wrapper">
			<div class="row footer-row">
				<div class="col-sm-12 col-md-3">
					<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo2; ?>" alt="" class="footer_logo">
					
					
					<?/*
					<div class="footer-heading-title">
						Westway
					</div>
					<p class="footer-discription">Central Market Noida is a mixed-use development spread over an area of 5700 square metres with two sides open and an exclusive shopping and entertainment area. </p>
					*/?>
					
					<?/*
					<div class="row margin-t-50 footern-logo">
						<div class="col-md-12">	
							<img src="<?php echo base_url() ?>assets/website/assets/img/custom1/logo4.png" alt="" class="footer_logo">
						</div>
						
					</div>
					*/?>
				</div>
				<div class="col-sm-12 col-md-3" style="border-right: 2px solid grey; border-left: 2px solid grey;">
					<div class="footer-heading-title">
						Contact Us
					</div>
					<div class="footer-addr">
						<p><?php echo $footeraddress; ?></p>
						<p><a href="mailto:<?= $footeremail ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?= $footeremail ?></a></p>
						<p><a href="tel:<?= $footerphone ?>"><i class="fa fa-phone" aria-hidden="true"></i><?= $footerphone ?></a></p>
					</div>
				</div>
				<div class="col-sm-12 col-md-3" style="height:210px; border-right: 2px solid grey;">
					<div class="footer-heading-title">
						Useful Links
					</div>
					<ul class="footer-links">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>project/central-market">Central Market</a></li>
						<li><a href="<?php echo base_url(); ?>contact-us">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-3" >
					<div class="footer-heading-title">
						Connect with soical media
					</div>
					<div class="footer-sm-icon">
					  <ul>
                            <li><a href="<?= $facebook ?>" class="fab fa-facebook" target="_blank"></a></li>
                            <li><a href="<?= $twitter ?>" class="fab fa-twitter" target="_blank"></a></li>
                            <li><a href="<?= $linkedin ?>" class="fab fa-linkedin" target="_blank"></a></li>
                            <li><a href="<?= $instagram ?>" class="fab fa-instagram" target="_blank"></a></li>
                            <li><a href="<?= $youtube ?>" class="fab fa-youtube" target="_blank"></a></li>
                        </ul>
					</div>
					<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo3; ?>" alt="" class="footer_logo3">
				</div>
				
			</div>
		</div>
		<div class="footer-copyrightt">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" style="padding:20px;font-size:12px;">
						<?php echo $footercopyright; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Start Script -->

<script src="<?php echo base_url() ?>assets/website/assets/js/customD.js"></script>

<script src="<?php echo base_url() ?>assets/website/assets/js/slide.js"></script>

<script src="<?php echo base_url() ?>assets/website/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>





<script>
    if ($('.image-gallery').length >= 1) {

        $('.image-gallery').each(function() {

            $(this).magnificPopup({

                delegate: 'a',

                type: 'image',

                mainClass: 'mfp-with-zoom mfp-img-mobile',

                preload: [0, 2],

                gallery: {

                    enabled: true

                },

                zoom: {

                    enabled: true,

                }

            });

        });

    }
</script>



<!-- End Script -->

<script type="text/javascript">
    var $gallery = $('.single-item');

    var slideCount = null;



    $(document).ready(function() {

        $gallery.slick({

            speed: 1000,

            fade: true,



            cssEase: 'linear',

            swipe: true,

            swipeToSlide: true,

            autoPlay: true,



            //touchThreshold: 10

        });

    });



    $gallery.on('init', function(event, slick) {

        slideCount = slick.slideCount;

        setSlideCount();

        setCurrentSlideNumber(slick.currentSlide);

    });



    $gallery.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

        setCurrentSlideNumber(nextSlide);

    });



    function setSlideCount() {

        var $el = $('.slide-count-wrap').find('.total');

        $el.text(slideCount);

    }



    function setCurrentSlideNumber(currentSlide) {

        var $el = $('.slide-count-wrap').find('.current');

        $el.text(currentSlide + 1);

    }
</script>
</body>
</html>
<!--
<a href="https://api.whatsapp.com/send?phone=<?php echo $whatsappno ?>" class="my-float" target="_blank">
<i class="fab fa-whatsapp my-float1"></i> Whatsapp
</a>
-->
<div id="whatsapp-widget" class="ww-right ww-medium ww-yes">  <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappno ?>" class="ww-text">Chat with us<div class="ww-arrow"></div></a>  <div class="ww-icon">  <div>    <a class="ww-icon-link" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappno ?>"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">        <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>      </svg>    </a>    </div>    </div>  </div>
<style>
   .my-float{
	position:fixed;
	width:180px;
	height:50px;
	bottom:25px;
	right:30px;
	background-color:#25d366;
	color:#FFF;
	border-radius:30px;
	text-align:center;
  font-size:20px;
	
  z-index:100;
}
.my-float:hover{
	text-decoration: none;
	color:#FFF;
}

.my-float1{
	margin-top:16px;
}
</style>
	<a href="" data-toggle="modal" data-target="#main_modal1" class="main_modal_open1"></a>
	<a href="" data-toggle="modal" data-target="#main_modal2" class="main_modal_open2"></a>
	<div id="main_modal" class="modal fade" role="dialog">
		<div class="modal-dialog" style="border:none;">
			<div class="modal-content" style="border:none;">
				<div class="modal-body">
					<div class="modal-header" style="background:none; border:none;">
						<button type="button" class="close close-btn" data-dismiss="modal">&times;</button>
					</div>
					<div id="head">
						<div class="head-had text-center" style="margin-top: -25px;">
							<img style="width: 50%;margin-left: 30px;" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo4; ?>" alt="<?= $title; ?>">
							<h2>DROP AN ENQUIRY</h2>
						</div>
						<form class="detailsbox" action="<?= base_url(); ?>home/lead" method="post" enctype="multipart/form-data">
							<p class="formMessages" style="color:#fff;margin:0px;"></p>
							<div class="form-group">
								<input type="text" name="name" class="form-control input-lg" placeholder="Please Enter Name" required>
							</div>
							<div class="form-group">
								<input type="text" name="mobile" class="form-control input-lg" placeholder="Please Enter Mobile" required pattern="[7-9]{1}[0-9]{9-12}" title="Phone number 10 digit with 0-9">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control input-lg" placeholder="Please Enter Email">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" placeholder="Please Enter Messege"required></textarea>
							</div>
							<div class="form-group">
								<center>                                        
									<input type="submit" name="submit" class="btn btn-warning btn-primary btn-block thm-btnn-clr" value="Submit"> </button>
								</center>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="main_modal1" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg" style="border:none;">
			<div class="modal-content" style="border:none;">
				<div class="modal-body">
					<div class="modal-header" style="background:none; border:none;">
						<button type="button" class="close close-btn" data-dismiss="modal">&times;</button>
					</div>
					<div id="head">
						<img style="width: 100%;" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $popup; ?>" alt="<?= $title; ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="main_modal2" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg" style="border:none;">
			<div class="modal-content" style="border:none;">
				<div class="modal-body">
					<div class="modal-header" style="background:none; border:none;">
						<button type="button" class="close close-btn" data-dismiss="modal">&times;</button>
					</div>
					<div id="head">
						<center>
							<img style="width: 30%;" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo4; ?>" alt="<?= $title; ?>">
							<h1>Thanks, we will contact you soon</h1>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--
<a title="Enquiry Now" class="quick-contact-form-link" href="javascript:open_right_form();"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Enquiry</a>

<div class="right_form" style="display:none;">
	<a href="javascript:close_right_form();" class="icon-close" title="Close">x</a>
	<div class="head-had">
		<h2 style="font-size:22px;margin-top:-1px;color: #283664;">GET IN TOUCH</p>
	</div>
                                            
	<p class="formMessages" style="color:#fff;margin:0px;"></p>
	<form class="detailsbox" action="<?= base_url(); ?>home/lead" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input type="text" id="name1" name="name" class="form-control input-lg" placeholder="Please Enter Name" required>
		</div>
		<div class="form-group">
			<input type="text" id="contact1" name="mobile" class="form-control input-lg" placeholder="Please Enter Mobile" required pattern="[7-9]{1}[0-9]{9-12}" title="Phone number 10 digit with 0-9">
		</div>
		<div class="form-group">
			<input type="email" id="email1" name="email" class="form-control input-lg" placeholder="Please Enter Email">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="message" placeholder="Please Enter Messege"required></textarea>
		</div>
		<div class="form-group">
			<center>                                        
				<input type="submit" name="submit" class="btn btn-warning btn-block" value="Submit" onClick="return submit_enquiry_form_header1();"> </button>
			</center>				
		</div>
		<div class="form-group" style="font-size:12px;text-align:justify">
			<input type="checkbox" checked>
			I Authorize Faifox Itinfra And Its Representatives To Call, SMS, Email Or WhatsApp Me About Its Products And Offers. This Consent Overrides Any Registration For DNC/NDNC.
		</div>
		<div class="form-group">
			<a href="javascript:void(0);" class="number" style="color: #283664;font-size:22px;font-weight:bold"><?php echo $topphone ?></a>
		</div>
	</form>      
</div> 
-->
<script>
function open_right_form()
{
	$(".right_form").show("130")
}
function close_right_form()
{
	$(".right_form").hide("130")
}
</script>

<style>
.quick-contact-form-link
{
	background: #283664;
    padding: 7px 12px;
    box-shadow: 0 0 5px #000;
    position: fixed;
    top: 180px;
    right: -50px;
    z-index: 9;
    opacity: .9;
    width: auto;
    transform: rotate(90deg);
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 15px;
    font-weight: 500;
    bottom: auto;
    color: white !important;
}

.icon-close {
    position: absolute;
    z-index: 5;
    top: -10px;
    right: 10px!important;
    width: 42px;
    height: 42px;
    background: #282828;
    border: #666 1px solid;
    color: #fff!important;
    font-weight: 300;
    font-size: 18x;
    border-radius: 50%;
    opacity: 1;
    text-align: center;
    line-height: 40px;
    padding-left: 1px;
    cursor: pointer;
}

.right_form {
	background:white;
	position: fixed;
	right: 0px;
	top: 115px;
	z-index: 98;
	padding:10px;
	width:300px;
	box-shadow: 0 0 10px;
}
.logo_size
{
	width:130px
}
@media screen and (max-width: 768px){
	.f_l_c
	{
		float:left;
	}
	.logo_size
	{
		width:100px !important;
	}
	.logo_phone
	{
		margin-top:15px;
	}
}
</style>
<!---banner-slider----->

    <script>
        const slides = document.querySelectorAll('.slider-container .slide'); // get all the slides
        const eraser = document.querySelector('.eraser'); // the eraser
        const prev = document.getElementById('previous'); // previous button
        const next = document.getElementById('next'); // next button
        const intervalTime = 6000; // time until nextSlide triggers in miliseconds
        const eraserActiveTime = 500; // time to wait until the .eraser goes all the way
        let sliderInterval; // variable used to save the setInterval and clear it when needed


        const nextSlide = () => {
            // Step 1. Add the .active class to the eraser - this will trigger the eraser to move to the left.
            eraser.classList.add('active');
            // Step 2. Set a timeout that will allow the eraser to move all the way to the left. This is where we'll use the eraserActiveTime - it has to be the same as the CSS value we mentioned above.
            setTimeout(() => {
                // Step 3. Get the active .slide and toggle the .active class on it (in this case, remove it).
                const active = document.querySelector('.slide.active');
                active.classList.toggle('active');
                // Step 4. Check to see if the .slide has a next element sibling available. If it has, add the .active class to it.
                if (active.nextElementSibling) {
                    active.nextElementSibling.classList.toggle('active');
                } else {
                    // Step 5. If it's the last element in the list, add the .active class to the first slide (the one with index 0).
                    slides[0].classList.toggle('active');
                }
                // Step 6.Remove the .active class from the eraser - this will trigger the eraser to move back to the right. It also waits 200 ms before doing this (just to give enough time for the next .slide to move in place).
                setTimeout(() => {
                    eraser.classList.remove('active');
                }, 180);
            }, eraserActiveTime);
        }

        //Button functionality
        const prevSlide = () => {
            eraser.classList.add('active');
            setTimeout(() => {
                const active = document.querySelector('.slide.active');
                active.classList.toggle('active');
                // The *changed* part from the nextSlide code
                if (active.previousElementSibling) {
                    active.previousElementSibling.classList.toggle('active');
                } else {
                    slides[slides.length - 1].classList.toggle('active');
                }
                // End of the changed part
                setTimeout(() => {
                    eraser.classList.remove('active');
                }, 180);
            }, eraserActiveTime);
        }

        next.addEventListener('click', () => {
            nextSlide();
            clearInterval(sliderInterval);
            sliderInterval = setInterval(nextSlide, intervalTime);
        });

        prev.addEventListener('click', () => {
            prevSlide();
            clearInterval(sliderInterval);
            sliderInterval = setInterval(nextSlide, intervalTime);
        });

        sliderInterval = setInterval(nextSlide, intervalTime);

        // Initial slide
        setTimeout(nextSlide, 500);
    </script>
	
<div class="contact_btnss">
<div class="get-in-touch-form-btn filled-btn mobile_book d-none">Book Now</div>
<div class=" filled-btn d-none">
    <a href="tel:+91 - 7838683368" class="text-white">  Call us</a></div>
<div class="get-in-touch-form-btn filled-btn">Get in Touch</div>
</div>
<div class="close-form" style="display:none"></div>
<div class="floating-form">
    <form id="get_in_touch_form" action="<?= base_url(); ?>home/lead" method="post">
    <div class="contact-form">
        <div class="form-group">
            <label>Full Name *</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label>Email *</label>
            <input type="text" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control ismobile" name="mobile" maxlength="10">
        </div>
        <div class="form-group"> 
            <label>Message</label>
            <textarea class="form-control" rows="3" name="message"></textarea>
        </div>
        <input class="filled-btn" type="submit" value="SUBMIT" name="submit">
    </div>
</form>
</div>

<script>
    $('.get-in-touch-form-btn, .close-form').click(function(){
        // var getFormWidth = $('.floating-form').outerWidth()
        $('.floating-form').toggleClass('open')
        $('.get-in-touch-form-btn').toggleClass('open')
        $('.close-form').toggle()
        // $('.floating-form').animate({width:'toggle',});
        // if($('.floating-form').hasClass('open')){
        //     $('.get-in-touch-form-btn').css('right','calc(320px - 50px)')
        // }
        // else{
        //     $('.get-in-touch-form-btn').css('right','-50px')
        // }
    })
    
    //review
 
    
$("form#book_now_enquiry").submit(function(e) {
        var form = $(this);
        var base_url = "";
        e.preventDefault();
        if(form){
            $.ajax({
                url : base_url+'AjaxController/BookNow',
                method :"POST",
                data: form.serialize(),
                success :function(data){
                    
                    var obj = JSON.parse(data);
                    if(data == 1){
                      
                      $("#book_now_enquiry")[0].reset();
                      toastr.success("Enquiry Send Successfully");   
                    }else{
                      
               var setv = '';
              if (obj.email) {
              setv = obj.email;
              }
              if (obj.name) {
              setv = obj.name;
              }
             
            if (obj.number) {
              setv = obj.number;
              }

            if (obj.msg) {
              setv = obj.msg;
             }
            if (obj.project_name) {
              setv = obj.project_name;
             }
              if (obj.configuration) {
              setv = obj.configuration;
             }
             
             toastr.error(setv);
                       
                   }
                }
            });
        }

    });
    
    
  


</script>