<style>
.open_pg1,.open_pg2,.open_pg3
{
	background: #283664;
    color: white;
    padding: 10px;
    font-size: 20px;
	margin-top:10px;
}
.open_div_pg1,.open_div_pg2,.open_div_pg3
{
	border-style: solid;
    border-color: #283664;
    border-width: 1px;
    padding: 40px;
}
.all_down,.all_up
{
	width:20px;
	float: right;
    margin-top: 7px;
    margin-right: 15px;
}
h4
{
	color: orange;
    padding: 0px;
}
.a_css
{
	background: #283664;
    padding: 15px;
    border-radius: 10px;
    color: white;
}
.a_css:hover
{
    color: red;
}
</style>
<?php
$map = $this->Main_Model->get_website_data("map");
$banner = $this->Main_Model->get_website_data("career_banner");
$career_hiring_banner = $this->Main_Model->get_website_data("career_hiring_banner");
$job_description = $this->Main_Model->get_website_data("job_description");
?>
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner; ?>" title="" alt="">
</section>
<div class="clearfix"></div>
<div class="container-fluid cnt_fluid_wrapper">
	<div class="mcontainer">
		<div class="msection wow fadeInTop animated animated" style="width:100%">
			<div class="msection-contant">
				<article id="post-162" class="post-162 page type-page status-publish hentry">
					<?php 
					foreach($tbl_result as $tbl_row) { ?>
						<div class="frmmap-holder">
						<h2 class="text-center" style="margin-top:50px;margin-bottom:15px;font-size: 40px;"><?php echo $tbl_row->title ?></h2>
						<?php echo $tbl_row->description ?>
						<?php
						if($tbl_row->id=="2"){
							foreach($tbl_result2 as $row) {
								?>
								<div class="col-sm-4 col-6" style="height: 180px;overflow: hidden;">
								<img src="<?php echo $url_path2; ?>/<?= $row->photo; ?>" title="" alt="" width="15%">
								<br>
								<h3 style="padding:0px;"><?php echo $row->title ?></h3>
								<p style="padding:0px;"><?php echo $row->description ?></p>
								</div>
								<?php
							} 
						}?>
						<?php
						if($tbl_row->id=="3"){
							foreach($tbl_result3 as $row) {
								?>
								<div class="col-sm-3 col-6" style="margin-top: 18px;">
								<a href="<?php echo $url_path3 ?><?php echo $row->photo; ?>" data-lightbox="roadtrip">
								<img src="<?php echo $url_path3; ?>/<?= $row->photo; ?>" title="" alt="" width="100%" style="margin-bottom:10px;">
								</a>
								</div>
								<?php
							} 
						} 
						?>						
						</div>
						<?php
					} ?>
					<div class="row contactbg1">
						<div class="col-lg-12 col-md-12 align-items-stretch">
							<div class="contactbg2">
								<h2>Drop Your Application Here!</h2>
								<form action="<?= base_url(); ?>career/lead" method="post" enctype="multipart/form-data">
									<div class="control-group form-group">
										<div class="controls">
											<label>Name:</label>
											<input type="text" name="name" id="name" class="form-control" required>
											<p class="help-block"></p>
										</div>
									</div>
									<div class="control-group form-group">
										<div class="controls">
											<label>Email Id:</label>
											<input type="text" name="email" id="email" class="form-control">
										</div>
									</div>
									<div class="control-group form-group">
										<div class="controls">
											<label>Contact Number:</label>
											<input type="text" name="mobile" id="mobile" class="form-control" required>
										</div>
									</div>
									<div class="control-group form-group">
										<div class="controls">
											<label>Current CTC:</label>
											<input type="text" name="ctc" id="name" class="form-control">
										</div>
									</div>
									<div class="control-group form-group">
										<div class="controls">
											<label>Current position:</label>
											<input type="text" name="position" id="position" class="form-control">
										</div>
									</div>
									<div class="control-group form-group">
										<div class="controls">
											<label>Upload Resume:</label>
											<input type="file" name="resume" id="resume" required>
										</div>
									</div>
									<div id="success"></div>
									<!-- For success/fail messages -->              
								   <input type="submit" name="submit" value="Submit" class="btn btn-warning thm-btnn-clr">
								</form>
							</div>
						</div>
						<?php /*
						<div class="col-lg-6 col-md-6 align-items-stretch">
							<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $career_hiring_banner; ?>" alt="hiring" class="img-fluid">
						</div>
						*/?>
					</div>
					
					<?php foreach($tbl_job_description as $row){ ?>
					<div class="open_pg<?= $row->id; ?>" onclick="open_pg(<?= $row->id; ?>)">
						Designation Name: <?php echo $row->title; ?>
						<img src="<?= base_url();?>uploads/images/down.png" class="all_down down_btn<?= $row->id; ?>" style="display:none">
						<img src="<?= base_url();?>uploads/images/up.png" class="all_up up_btn<?= $row->id; ?>">
					</div>
						
					<div class="open_div_pg open_div_pg<?= $row->id; ?>">
						<?php echo $row->description; ?>
						<br><br><br><br>
						<a href="#" target="_blank" class="btn btn-warning"><strong>
						Apply Now</strong></a>
					</div>
					<?php } ?>
				</article>
			</div>
		</div>
	</div>
</div>

<script>
function open_pg(id)
{
	$(".open_div_pg").hide()
	$(".open_div_pg"+id).show()
	
	$(".all_down").show()
	$(".all_up").hide()
	$(".down_btn"+id).hide()
	$(".up_btn"+id).show()
}
<?php if($_SESSION["leadthanks"]=="1") { 
	$_SESSION["leadthanks"] = ""; ?>
	setTimeout('main_modal_open2();',2000);
<?php } ?>
</script>