<footer id="footer" class="lg-py-12 sm-py-8 bg-dark-900">
        <div class="container-lg text-center text-sm">
            <div class="flex-row lg-flex-columns-3 sm-flex-columns-3 xs-flex-columns-1">
                <div class="flex flex-column align-items-center animated" data-animation="flipInX"
                    data-animation-delay="0">
                    <div>
						<img src="<?php echo $logo = get_library_to_image(get_field_data("image_site_logo"),'main'); ?>" alt="website logo" class="logo-white mxw-20">
					</div>
                </div>
                <div class="flex flex-column align-items-center xs-mt-5 animated" data-animation="flipInX"
                    data-animation-delay="200">
                    <div><a href="#" target="_blank"
                            class="icon-md mx-1 sm-mt-2 text-sm border-1 border-gray-800 text-gray-800 hover-text-facebook hover-border-facebook rounded-full transition-colors duration-300"><i
                                class="bi-facebook"></i></a><a href="#" target="_blank"
                            class="icon-md mx-1 sm-mt-2 text-sm border-1 border-gray-800 text-gray-800 hover-text-twitter hover-border-twitter rounded-full transition-colors duration-300"><i
                                class="bi-twitter"></i></a><a href="#" target="_blank"
                            class="icon-md mx-1 sm-mt-2 text-sm border-1 border-gray-800 text-gray-800 hover-text-linkedin hover-border-linkedin rounded-full transition-colors duration-300"><i
                                class="bi-linkedin"></i></a></div>
							<p class="lg-mt-3 sm-mt-3 text-gray-700"><i class="fa fa-map-marker" aria-hidden="true"></i>
						<?php echo get_field_data("contact_address",9) ?>
						</p>
                </div>
                <div class="flex flex-column align-items-center xs-mt-5 animated" data-animation="flipInX"
                    data-animation-delay="400"><a
                        href="#"
                        target="_blank"
                        class="icon-md text-lg border-1 border-gray-800 text-gray-800 hover-text-white hover-border-white rounded-full transition-colors duration-300"><i
                            class="bi-pin-angle-fill"></i></a>
						<p class="lg-mt-3 sm-mt-3 text-gray-700">
						
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<?php echo get_field_data("contact_email2",9) ?>
						<br>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<?php echo get_field_data("contact_phone",9) ?></p>
                </div>
            </div>
        </div>
		<hr>
		<div class="container-lg text-sm" style="margin-top:50px;">
			<?php echo get_field_data("contact_disclosure",9) ?>
		</div>
		
		
    </footer>
    <script src="<?php echo base_url() ?>assets/website/js/bs.js"></script>
    <script src="<?php echo base_url() ?>assets/website/js/plugins.min.js"></script>
    <script src="<?php echo base_url() ?>assets/website/js/revslider/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url() ?>assets/website/js/revslider/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url() ?>assets/website/js/functions.js"></script>
    <script>
        var revapi1050, tpj = jQuery;
        null == tpj("#home-slider").revolution ? revslider_showDoubleJqueryError("#home-slider") : revapi1050 = tpj(
            "#home-slider").show().revolution({
            sliderType: "standard",
            jsFileLocation: "<?php echo base_url() ?>assets/website/js/revslider/",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9e3,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                arrows: {
                    enable: !0,
                    style: "gyges"
                },
                touch: {
                    touchenabled: "off",
                    swipe_threshold: 75,
                    swipe_min_touches: 50,
                    swipe_direction: "horizontal",
                    drag_block_vertical: !1
                },
                bullets: {
                    enable: !0,
                    hide_onmobile: !0,
                    hide_under: 1024,
                    style: "hesperiden",
                    hide_onleave: !0,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 20,
                    space: 5,
                    tmp: ""
                }
            },
            responsiveLevels: [1400, 1024, 720, 540],
            visibilityLevels: [1320, 992, 640, 480],
            gridwidth: [1320, 992, 640, 480],
            gridheight: [570, 570, 570, 600],
            lazyType: "none",
            shadow: 0,
            spinner: "spinner2",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0px",
            disableProgressBar: "off",
            hideThumbsOnMobile: "off",
            fullWidth: "on",
            fullScreen: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: !1,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: !1
            }
        })
    </script>

<div class="contact_btnss">
<div class="get-in-touch-form-btn filled-btn mobile_book d-none">Book Now</div>
<div class=" filled-btn d-none">
    <a href="tel:+91 - 7838683368" class="text-white">  Call us</a></div>
<div class="get-in-touch-form-btn filled-btn" onclick="call_get_in_touch()">Get in Touch</div>
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
</script>
<div id="whatsapp-widget" class="ww-right ww-medium ww-yes">  <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo get_field_data("contact_whatsapp_no",9) ?>" class="ww-text">Chat with us<div class="ww-arrow"></div></a>  <div class="ww-icon">  <div>    <a class="ww-icon-link" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappno ?>"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">        <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>      </svg>    </a>    </div>    </div>  </div>
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
</body>
</html>