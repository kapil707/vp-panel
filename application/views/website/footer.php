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
    <footer id="footer" class="lg-py-12 sm-py-8 bg-dark-900">
        <div class="container-lg text-center text-sm">
            <div class="flex-row lg-flex-columns-3 sm-flex-columns-3 xs-flex-columns-1">
                <div class="flex flex-column align-items-center animated" data-animation="flipInX"
                    data-animation-delay="0">
                    <div><a href="tel:1234567890"
                            class="icon-md mx-1 text-sm border-1 border-gray-800 text-gray-800 hover-text-white hover-border-white rounded-full transition-colors duration-300"><i
                                class="bi-telephone-fill"></i></a></div>
                    <p class="lg-mt-3 sm-mt-3 text-gray-700">Phone : 91 xxxxxxxx</p>
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
                    <p class="lg-mt-3 sm-mt-3 text-gray-700">Mail :<a href="mailto:info@central50.com"
                            class="hover-text-white">info@central50.com</a></p>
                    <p class="lg-mt-1 sm-mt-1 text-gray-700">© Comming Soon by<a href="#"
                            target="_blank" class="hover-text-white">Central 50</a></p>
                </div>
                <div class="flex flex-column align-items-center xs-mt-5 animated" data-animation="flipInX"
                    data-animation-delay="400"><a
                        href="#"
                        target="_blank"
                        class="icon-md text-lg border-1 border-gray-800 text-gray-800 hover-text-white hover-border-white rounded-full transition-colors duration-300"><i
                            class="bi-pin-angle-fill"></i></a>
                    <p class="lg-mt-3 sm-mt-3 text-gray-700">Phone : 91 xxxxxxxx</p>
                </div>
            </div>
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

</body>


</html>