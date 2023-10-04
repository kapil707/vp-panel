<?php 
//Template Name:Profile-page-pg
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html lang="zxx">
<!--[if gt IE 8]> <!-->
<!--
<![endif]-->

<head>
    <!-- TITLE OF SITE -->
    <title><?php echo bloginfo('name'); ?><?php echo wp_title(); ?> | <?php echo bloginfo('description'); ?></title>

      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      <link href="<?php echo get_template_directory_uri();?>/css/login_style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

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

?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-sm-12">
				<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="detailsbox" id="contact-form" enctype="multipart/form-data">
					<input type="hidden" name="action" value="profile_page_form_submit">
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>First Name:</label>
							<input type="text" name="first_name" class="form-control input-lg" placeholder="First Name" required="" value="<?php echo $row->first_name ?>">
						</div>
						<div class="col-sm-6 form-group">
							<label>Last Name:</label>
							<input type="text" name="last_name" class="form-control input-lg" placeholder="Last Name" required="" value="<?php echo $row->last_name ?>">
						</div>
						<div class="col-sm-6 form-group">
							<label>Email:</label>
							<input type="text" name="email" class="form-control input-lg" placeholder="Enter Email" value="<?php echo $row->email ?>">
						</div>
						
						<div class="col-sm-6 form-group">
							<label>Phone Number</label>	
							<input type="text" name="" class="form-control input-lg" placeholder="Enter Phone Number" required="" value="<?php echo $row->mobile ?>" readonly>
						</div>
						
						<div class="col-sm-4 form-group">
							<label>Interested in</label>	
							<select name="interested" id="interested" class="form-control input-lg">
							  <option value="0" <?php if($row->interested=="0") {echo "selected"; } ?>>Please Select</option>
							  <option value="learning" <?php if($row->interested=="learning") {echo "selected"; } ?>>Learning</option>
							  <option value="astrology" <?php if($row->interested=="astrology") {echo "selected"; } ?>>Astrology</option>
							  <option value="numerology" <?php if($row->interested=="numerology") {echo "selected"; } ?>>Numerology</option>
							  <option value="palmistry" <?php if($row->interested=="palmistry") {echo "selected"; } ?>>Palmistry</option>
							</select>
						</div>
						
						<div class="col-sm-4 form-group">
							<label>Problem solving regarding</label>	
							<select name="solving" id="solving" class="form-control input-lg">
							  <option value="0" <?php if($row->solving=="0") {echo "selected"; } ?>>Please Select</option>
							  <option value="health" <?php if($row->solving=="health") {echo "selected"; } ?>>Health</option>
							  <option value="family" <?php if($row->solving=="family") {echo "selected"; } ?>>Family</option>
							  <option value="education" <?php if($row->solving=="education") {echo "selected"; } ?>>Education</option>
							  <option value="career" <?php if($row->solving=="career") {echo "selected"; } ?>>Career</option>
							  <option value="marriage" <?php if($row->solving=="marriage") {echo "selected"; } ?>>Marriage</option>
							  <option value="other" <?php if($row->solving=="other") {echo "selected"; } ?>>Other</option>
							</select>
						</div>
						
						<div class="col-sm-4 form-group">
							<label>Self Improvement</label>	
							<select name="improvement" id="improvement" class="form-control input-lg">
							  <option value="0" <?php if($row->improvement=="0") {echo "selected"; } ?>>Please Select</option>
							  <option value="meditation" <?php if($row->improvement=="meditation") {echo "selected"; } ?>>Meditation</option>
							  <option value="healing_mantras" <?php if($row->improvement=="healing_mantras") {echo "selected"; } ?>>Healing Mantras</option>
							  <option value="confidence_building" <?php if($row->improvement=="confidence_building") {echo "selected"; } ?>>Confidence Building</option>
							  <option value="positive_mindset" <?php if($row->improvement=="positive_mindset") {echo "selected"; } ?>>Positive Mindset</option>
							</select>
						</div>
						
						<div class="col-sm-12 form-group">
							<label>Address:</label>
							<textarea cols="4" rows="3" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Your message" name="address"><?php echo $row->address ?></textarea>
						</div>
						
						<div class="col-sm-4 form-group">
							<label>Date Of Birth:</label>
							<input type="date" name="dob" class="form-control input-lg" placeholder="Date Of Birth" required="" value="<?php echo $row->dob ?>">
						</div>
						
						<div class="col-sm-4 form-group">
							<label>Time:</label>
							<input type="time" name="time" class="form-control input-lg" placeholder="Time" required="" value="<?php echo $row->time ?>">
						</div>
						
						<div class="col-sm-4 form-group">
							<label>Place:</label>
							<input type="text" name="place" class="form-control input-lg" placeholder="Place" required="" value="<?php echo $row->place ?>">
						</div>

						<div class="form-group text-center">
							<input type="submit" name="Submit1" class="submit-button_11" value="Apply Now"> 
						</div>	
					</div>
				</form>	
			</div>
		</div>
	</div>




