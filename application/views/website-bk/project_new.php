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
$banner = $this->Main_Model->get_website_data("company_banner");
$company_hiring_banner = $this->Main_Model->get_website_data("company_hiring_banner");
$company_text = $this->Main_Model->get_website_data("company_text");
$company_location_text = $this->Main_Model->get_website_data("company_location_text");
$company_location_photo = $this->Main_Model->get_website_data("company_location_photo");
$job_description = $this->Main_Model->get_website_data("job_description");

?>
<section class="banner-sec">
	<img src="<?= $url_path ?><?php echo $row->photo; ?>" title="" alt="">
	<img src="<?= $url_path ?><?= $row->logo; ?>" class="project-logo1" title="" alt="">
</section>
<section class="banner-sec-mobile">
	<img src="<?= $url_path ?><?php echo $row->photo1; ?>" title="" alt="">
	<img src="<?= $url_path ?><?= $row->logo; ?>" class="project-logo1" title="" alt="">
</section>

<div class="clearfix"></div>
<div class="">
	<div>
		<section class="site-content-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="single-portfolio-menu">
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>#overview">Overview</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>#amenities">Amenities</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/floorplan">Floor</a></li>
							<?php /*<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/pricelist">Price List</a></li>*/?>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>#location">Location Advantage</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/construction-update">Construction Update</a></li>
							<?php /*<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/walkthrough">Walkthrough</a></li>*/?>
							
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="site-content-contain" id="overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="elementor-widget-container">
							<h2>Overview</h2><?php echo $id;?>
						</div>
						<?php
						$tbl_project_overview = $this->db->query("select * from tbl_project_overview where status='1' and category='$category'")->row();
						
						?>
						<div class="row">
							<div class="col-md-12">
								<div class="docs-pictures">
									<div class="gallery-colm gallery-colm1" style="margin-bottom:0px;">
										<img data-original="<?php echo base_url() ?>uploads/manage_project_overview/photo/main/<?php echo $tbl_project_overview->photo ?>" class="img-fluid" src="<?php echo base_url() ?>uploads/manage_project_overview/photo/main/<?php echo $tbl_project_overview->photo ?>">
									</div>
									<div class="site-content-text new-h1-css">
										<?php echo $tbl_project_overview->title ?>
										<p><?php echo $tbl_project_overview->description ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="over-years-sec" id="amenities">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="elementor-widget-container">
							<h2>Amenities</h2>
						</div>
						<div class="row">
							<?php 
								$tbl_project_amenities = $this->db->query("select * from tbl_project_amenities where status='1' and category='$category'")->result();
								if(!empty($tbl_project_amenities)){ 
								foreach($tbl_project_amenities as $row){ ?>
									<div class="col-md-3">
										<div class="amenities-icon">
											<img src="<?php echo base_url() ?>uploads/manage_project_amenities/photo/main/<?php echo $row->photo; ?>" class="mx-auto d-block">
											<p><?php echo $row->mytext; ?></p>
										</div>
									</div>
								<?php } } ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="site-content-contain location-sec" id="location">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="elementor-widget-container">
							<h2>Location Advantage</h2>
						</div>
						<div class="row">
							<?php
							$tbl_project_location = $this->db->query("select * from tbl_project_location where status='1' and category='$category'")->row();
							
							?>
							<div class="col-md-6">
								<div class="location-img docs-pictures">
									<div class="gallery-colm">
										<img data-original="<?php echo base_url() ?>uploads/manage_project_location/photo/main/<?php echo $tbl_project_location->photo ?>" class="img-fluid" src="<?php echo base_url() ?>uploads/manage_project_location/photo/main/<?php echo $tbl_project_location->photo ?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="location-colm">
									<?php echo $tbl_project_location->mytext; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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