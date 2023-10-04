<?php 
//Template Name:Profile-Edit-page-pg
?>
<?php get_header("mobile"); ?>
<body>
<?php echo the_content(); ?>
<?php
session_start();
// Set a session variable
$id = $_SESSION['profile_user'];
			
global $wpdb;
$table_name = $wpdb->prefix . 'my_users';

$sql = "SELECT * FROM $table_name WHERE id='$id'";
$row = $wpdb->get_row($sql);

$table_name  = $wpdb->prefix . 'interest';
$table_name2 = $wpdb->prefix . 'interest_type';

$sql1 = "SELECT * FROM $table_name ";
$result1 = $wpdb->get_results($sql1);
?>
	
<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="detailsbox" id="contact-form" enctype="multipart/form-data">
	<input type="hidden" name="action" value="profile_page_form_submit">
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
		
		$sql1 = "SELECT * FROM $table_name where id='$interest'";
		$result1 = $wpdb->get_results($sql1);
		foreach($result1 as $row1) {

		$sql2 = "SELECT * FROM $table_name2 where interest_id='$row1->id'";
		$result2 = $wpdb->get_results($sql2);
		?>
		<div class="col-sm-12 form-group">
			<label><?php echo $row1->name ?></label>	
			<select name="interest_type" id="interest_type" class="form-control input-lg">
				<option value="0" <?php if($row->solving=="0") {echo "selected"; } ?>>Please Select</option>

				<?php foreach($result2 as $row2) { ?>
				<option value="<?php echo $id = ($row2->id); ?>" <?php if($row->interest_type==$id) {echo "selected"; } ?>><?php echo $row2->name ?></option>

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