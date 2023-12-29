<?php include_once(get_header()); ?>
<div class="container login-main-css">
	<div class="row">
		<div class="col-md-4 login-css2">
			<form method="POST" action="<?php echo base_url(); ?>post-data">
				<?php 
				$code = "";
				if(!empty($_GET["code"])){
					$code = $_GET["code"];
				}
				
				$interest = "";
				if(!empty($_GET["interest"])){
					$interest = $_GET["interest"];
				}

				$interest_type = "";
				if(!empty($_GET["interest_type"])){
					$interest_type = $_GET["interest_type"];
				}


				?>
				<input type="hidden" name="action_type" value="login_submit">
				<input type="hidden" name="user_code" value="<?php echo $code?>">
                <input type="hidden" name="interest" value="<?php echo $interest ?>">
                <input type="hidden" name="interest_type" value="<?php echo $interest_type ?>">
				<div class="mt-2"><input id="name" name="name" type="name" placeholder="Please Enter Your Name" maxlength="100" required="" class="border-[#A17603] w-full rounded-[11px] border-[1px] px-4 py-3 placeholder-[#A17603] focus:ring-2 focus:ring-inset focus:ring-[#A17603] text-[#A17603] " value=""></div><div><div class="p-2 PhoneInput"><div class="PhoneInputCountry">
	
				<select aria-label="Phone number country" class="PhoneInputCountrySelect" name="dropdown" onchange="PhoneInputCountrySelect()">
					<?php
					$country = get_table("tbl_o_country");
					foreach($country as $row){
						?>
						<option value="<?php echo $row->iso ?>" <?php if($row->phonecode=="91"){ echo "selected"; } ?> cname="<?php echo $row->name ?>" ios="<?php echo $row->iso ?>" phonecode="<?php echo $row->phonecode ?>"><?php echo $row->name ?></option>
					<?php
					} ?>
				</select>
				
				<div aria-hidden="true" class="PhoneInputCountryIcon PhoneInputCountryIcon--border">
					<img class="PhoneInputCountryIconImg" alt="India" src="https://purecatamphetamine.github.io/country-flag-icons/3x2/IN.svg">
				</div>
				<div class="PhoneInputCountrySelectArrow"></div>
				</div>
				
				<input type="tel" autocomplete="tel" placeholder="WhatsApp Number" required="" class="PhoneInputInput" value="+91" name="mobile"></div></div>
				
				<p class=" text-[#A17603] text-right text-[12px] font-normal">* Please Enter Whats App Number Only</p><div>

				<button type="submit" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="login_submit">Continue To Dashboard<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg></button></div>
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