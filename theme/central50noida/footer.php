<div class="heading_home1">
    <span class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
        </svg>
    </span>
</div>
<div id="home-footer" class="home-box-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="<?php echo $logo = get_library_to_image(get_field_data("image_site_logo"),'main'); ?>" alt="website logo" class="img-fluid footer-logo">
			</div>
            <div class="col-md-4 text-center py-5">
                <?php 
                $result = get_social_icon();
                foreach($result as $row) { ?>
                    <a href="<?php echo $row->url ?>" target="_blank" class="icon-md">
                    <?php echo $row->description ?></a>
                <?php } ?>
                <br>
                <?php echo get_field_data("contact_address",9) ?>
            </div>
            <div class="col-md-4 text-center py-5">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <?php echo get_field_data("contact_email2",9) ?>
                <br>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <?php echo get_field_data("contact_phone",9) ?>
            </div>
        </div>
    </div>
</div>
<div id="home-footer2" class="home-box-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-justify">
                <?php echo get_field_data("contact_disclosure",9) ?>
            </div>
        </div>
    </div>
</div>		
		
<script src="<?php echo get_theme_path(); ?>js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="contact_btnss">
<div class="get-in-touch-form-btn filled-btn mobile_book d-none">Book Now</div>
<div class="filled-btn d-none">
    <a href="tel:+91 - 7838683368" class="text-white">  Call us</a></div>
<div class="get-in-touch-form-btn filled-btn" onclick="call_get_in_touch()">Get in Touch</div>
</div>
<div class="close-form" style="display:none"></div>
<div class="floating-form">
    <form id="get_in_touch_form" action="<?php echo base_url(); ?>post-data" method="post">
    <input type="hidden" name="action_type" value="load_submit_api">
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
<div id="whatsapp-widget" class="ww-right ww-medium ww-yes">  <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappno = get_field_data("contact_whatsapp_no",9) ?>" class="ww-text">Chat with us<div class="ww-arrow"></div></a>  <div class="ww-icon">  <div>    <a class="ww-icon-link" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappno ?>"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">        <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>      </svg>    </a>    </div>    </div>  </div>
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
<script>
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
    var $window = $(window);
    var windowsize = $window.width();
    if(windowsize>800){
        //alert("okok")
      if (window.scrollY > 50) {
        document.getElementById('header').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('header').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
    }
  });
}); 
</script>

<link rel="stylesheet" href="<?php echo get_theme_path(); ?>lightbox/dist/css/lightbox.min.css">
<script src="<?php echo get_theme_path(); ?>lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

<a href="#" class="message_toast_show_css" data-toggle="modal" data-target="#exampleModal_for_lead">asdfasfasfasfasf</a>


<div class="modal fade" id="exampleModal_for_lead" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <?php echo $this->session->flashdata('message_title'); ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $this->session->flashdata('message_value'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    setTimeout(open_modal(), 1000);
    function open_modal(){
        alert("asdfsaf")
        $(".message_toast_show_css").click()
    }
});
</script>

<script src="<?php echo get_theme_path(); ?>wowjs/wow.min.js"></script>
<script>
new WOW().init();
</script>