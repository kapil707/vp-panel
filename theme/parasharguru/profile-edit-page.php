<?php include_once(get_header("mobile")); ?>
<?php
session_start();
// Set a session variable
$id = $_SESSION['profile_user'];
			
$row = get_table_row("tbl_o_my_users where id='$id'");

$result1 = get_table("tbl_o_interest");
?>
	
<form method="POST" class="detailsbox" id="contact-form" enctype="multipart/form-data" action="<?php echo base_url(); ?>post-data">
	<input type="hidden" name="action_type" value="profile_page_form_submit">
	<div class="row">
		<div class="col-sm-12 form-group">
			<label>First Name:</label>
			<input type="text" name="first_name" class="form-control input-lg" placeholder="First Name" required="" value="<?php echo $row->first_name ?>">
		</div>
		<div class="col-sm-12 form-group">
			<label>Last Name:</label>
			<input type="text" name="last_name" class="form-control input-lg" placeholder="Last Name" required="" value="<?php echo $row->last_name ?>">
		</div>
		<div class="col-sm-12 form-group">
			<label>Email:</label>
			<input type="text" name="email" class="form-control input-lg" placeholder="Enter Email" value="<?php echo $row->email ?>">
		</div>
		
		<div class="col-sm-12 form-group">
			<label>Phone Number</label>	
			<input type="text" name="" class="form-control input-lg" placeholder="Enter Phone Number" required="" value="<?php echo $row->mobile ?>" readonly>
		</div>
		<?php
		if($_GET["interest"]){
			$interest = $_GET["interest"];
		}else{
			$interest = $row->interest;
		}
		?>
		<div class="col-sm-12 form-group">
			<label>Interested in</label>	
			<select name="interest" id="interest" class="form-control input-lg" onchange="onchnage_dropdown()">
			<option value="0" <?php if($interest=="0") {echo "selected"; } ?>>Please Select</option>
			<?php foreach($result1 as $row1) { ?>
				<option value="<?php echo $id = ($row1->id); ?>" <?php if($interest==$id) {echo "selected"; } ?>><?php echo $row1->name ?></option>
			<?php 
			} ?>
			</select>
		</div>
		
		<?php 
		
		$result2 = get_table("tbl_o_interest where id='$interest'");
		foreach($result2 as $row2) {
		
		$result3 = get_table("tbl_o_interest_type where interest_id='$row2->id'");
		?>
		<div class="col-sm-12 form-group">
			<label><?php echo $row2->name ?></label>	
			<select name="interest_type" id="interest_type" class="form-control input-lg">
				<option value="0" <?php if($row->solving=="0") {echo "selected"; } ?>>Please Select</option>

				<?php foreach($result3 as $row3) { ?>
				<option value="<?php echo $id = ($row3->id); ?>" <?php if($row->interest_type==$id) {echo "selected"; } ?>><?php echo $row3->name ?></option>

				<?php  } ?>
			</select>
		</div>
		<?php } ?>
		
		<div class="col-sm-12 form-group">
			<label>Address:</label>
			<textarea cols="4" rows="3" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Your message" name="address"><?php echo $row->address ?></textarea>
		</div>
		
		<div class="col-sm-12 form-group">
			<label>Date Of Birth:</label>
			<input type="date" name="dob" class="form-control input-lg" placeholder="Date Of Birth" required="" value="<?php echo $row->dob ?>">
		</div>
		
		<div class="col-sm-12 form-group">
			<label>Time:</label>
			<input type="time" name="time" class="form-control input-lg" placeholder="Time" required="" value="<?php echo $row->time ?>">
		</div>
		
		<div class="col-sm-12 form-group">
			<label>Place:</label>
			<input type="text" name="place" class="form-control input-lg" placeholder="Place" required="" value="<?php echo $row->place ?>">
		</div>

		<div class="col-sm-12 form-group">
			<button type="submit" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="Submit1">Edit<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg></button>
		</div>	
	</div>
</form>	
			

<script>
function onchnage_dropdown(){
	val = $("#interest option:selected").val();
	window.location.href = "https://parashar.guru/profile_edit_page/?interest="+val;
}
</script>
<?php get_footer("mobile"); ?>