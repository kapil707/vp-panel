<?php include_once(get_header()); ?>
<body>
<?php
$id = $_SESSION["temp_user_id"];
if(empty($id)){
	redirect(base_url());
}
$row = get_table_row("tbl_o_my_users WHERE id='$id'");
$no = $row->mobile;
?>
<div class="container login-main-css">
	<div class="row">
		<div class="col-md-4 login-css2">
			<?php if (!empty($this->session->flashdata('message_toast_show'))){ ?>
			<?php if ($this->session->flashdata('message_toast_show')==1){ ?>
				<div class="alert alert-success">
			<?php } ?>
			<?php if ($this->session->flashdata('message_toast_show')==2){ ?>
				<div class="alert alert-danger">
			<?php } ?>
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>
					<?php echo $this->session->flashdata('message_title'); ?>
					</strong><?php echo $this->session->flashdata('message_value'); ?>
				</div>
			<?php } ?>
			<form class="" method="POST" style="margin-top:50px;" action="<?php echo base_url(); ?>post-data">
				<input type="hidden" name="action_type" value="enter_password_form_submit">
				<div class="mt-2">
					<p class="text-white">Hello <?php echo $row->first_name; ?></p>
					<p class="text-white">Enter Password</p>
					<input id="password" name="password" type="password" placeholder="Please Enter Login" maxlength="100" required="" class="border-[#A17603] w-full rounded-[11px] border-[1px] px-4 py-3 placeholder-[#A17603] focus:ring-2 focus:ring-inset focus:ring-[#A17603] text-[#A17603] " value="">
				</div>
				
				<div class="mt-2 text-white" style="font-size: 12px;text-align: right;">
					<a href="<?= base_url(); ?>forget-password">forget password?</a>
				</div>
				<button type="submit" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="login_submit">
					Login
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>
				</button>
			</form>
		</div>
		<div class="col-md-8 login-slider">
            <div class="owl-carousel">
				<div class="item">
					<img src="<?php echo get_theme_path(); ?>images/login_page/astrology.png" width="100%">
					<h2>Astrology</h2>
				</div>
				<div class="item">
					<img src="<?php echo get_theme_path(); ?>images/login_page/handwriting.png" width="100%">
					<h2>Handwriting</h2>
				</div>
				<div class="item">
					<img src="<?php echo get_theme_path(); ?>images/login_page/motivator.png" width="100%">
					<h2>Motivator</h2>
				</div>
				<div class="item">
					<img src="<?php echo get_theme_path(); ?>images/login_page/numerology.png" width="100%">
					<h2>Numerology</h2>
				</div>
				<div class="item">
					<img src="<?php echo get_theme_path(); ?>images/login_page/palmistrt.png" width="100%">
					<h2>Palmistrt</h2>
				</div>
				<div class="item">
					<img src="<?php echo get_theme_path(); ?>images/login_page/spiritual_guru.png" width="100%">
					<h2>Spiritual Guru</h2>
				</div>
				<div class="item">
					<img src="<?php echo get_theme_path(); ?>images/login_page/vastu.png" width="100%">
					<h2>Vastu</h2>
				</div>
				<!-- Add more slides as needed -->
			</div>
		</div>
	</div>
</div>
<?php include_once(get_footer()); ?>
<script>
function PhoneInputCountrySelect(){
	val = $(".PhoneInputCountrySelect option:selected").val();
	ios = $(".PhoneInputCountrySelect option:selected").attr("ios");
	phonecode = $(".PhoneInputCountrySelect option:selected").attr("phonecode");
	name = $(".PhoneInputCountrySelect option:selected").attr("cname");
	
	
	$(".PhoneInputCountryIconImg").attr("src","https://purecatamphetamine.github.io/country-flag-icons/3x2/"+val+".svg");
	$(".PhoneInputCountryIconImg").attr("alt",name);
	$(".PhoneInputInput").val("+"+phonecode);
}
</script>
<!-- Owl Carousel JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 3, // Number of items to show
            loop: true,
            margin: 10,
            nav: true, // Show navigation arrows
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                }
            }
        });
    });
</script>



