<?php include_once(get_header()); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="<?php echo $logo = get_library_to_image(get_field_data("image_site_logo"),'main'); ?>" width="40%">
			<div class="">
				<p class="text-white" style="font-size: 35px;">
					<?php echo get_field_data('login_label1','73'); ?>
				</p>
			</div>
			<p class="text-white" style="font-size: 12px;">
				<?php echo get_field_data('login_label2','73'); ?>
			</p>
			<div>
				<p class="text-white">
					<?php echo get_field_data('login_label3','73'); ?>
				</p>
				<div class="text-white flex justify-center items-center gap-4 mx-auto mt-3">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-[#A17603] w-[29px] h-[30px]"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"></path></svg>
					<p class="text-[#A17603] font-normal text-[22px]">
						<?php echo get_field_data('login_label4','73'); ?>
					</p>
				</div>
			</div>
			<p class="font-medium text-[#A17603] text-center">
				<?php echo get_field_data('login_label5','73'); ?>
			</p>
			<div class="p-4">
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

				<button type="submit" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="login_submit">Continue To Dashboard<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg></button></div></form>
			</div>
			<?php $login_image1 = get_field_data('login_image1','43');
			if($login_image1) {?>
			<div class="p-4 mt-5">
				<?php $sizes = ($login_image1["sizes"]) ?>
				<img src="<?php echo ($sizes["medium_large"]) ?>" alt="" width="100%" class="alignnone size-full wp-image-63" />
			</div>
			<?php } ?>
			<p class="text-[#A17603] font-semibold text-center pt-2 px-4 text-[15px] my-3 leading-7">
			Please choose your area of interest:
			</p>
			<div id="accordion">
			<?php
				$i = 1;
				$result = get_table("tbl_o_interest");
				foreach($result as $row) {
				?>
				<div class="card">
					<div class="card-header bg-[#A17603] text-white text-center" id="headingOne<?php echo $row->id; ?>">
						<h5 class="mb-0">
							<button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne<?php echo $row->id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $row->id; ?>" style="font-size:18px;">
								<?php echo $row->name; ?>
							</button>
						</h5>
					</div>

					<?php
					if(!empty($_GET["interest"])){
						$i = 0;
						if($_GET["interest"]==$row->id){
							$i = 1;
						}
					}
					?>

					<div id="collapseOne<?php echo $row->id; ?>" class="collapse <?php if($i==1) { echo "show"; }?>" aria-labelledby="headingOne<?php echo $row->id; ?>" data-parent="#collapseOne<?php echo $row->id; ?>">
						<div class="card-body text-left">
							<?php
							$result2 = get_table("tbl_o_interest_type where interest_id='$row->id'");
							foreach($result2 as $row2){
								?>
								<a href="https://parashar.guru/login/?interest=<?php echo ($row->id) ?>&&interest_type=<?php echo ($row2->id) ?>">
								<?php echo $row2->name; ?>
								</a>
								<?php
								echo "<br>";
							}
							?>
						</div>
					</div>
				</div>
			<?php 
			$i++;
			} ?>
			</div>
			<div class="p-4 mt-5">
			
			</div>
		</div>
		<div class="col-sm-4">

		</div>
	</div>
</div>
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