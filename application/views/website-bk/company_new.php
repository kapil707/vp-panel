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
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner; ?>" title="" alt="">
</section>
<div class="clearfix"></div>
<div class="">
	<div>
		<section class="site-content-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="single-portfolio-menu">
							<li><a href="#overview">Overview</a>
							</li>
							<li><a href="#amenities">Amenities</a></li>
							<li><a href="#price-list">Price List</a></li>
							<li><a href="#location">Location</a></li>
							
							<!-- <li><a href="#enquiry">Enquiry</a></li> -->
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
						<div class="row">
							<div class="col-md-4">
								<img class="img-fluid" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $company_hiring_banner ?>">
							</div>
							<div class="col-md-8">
								<div class="site-content-text">
									<p><?php echo $company_text ?></p>
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
								$tbl_amenities = $this->db->query("select * from tbl_amenities where status='1'")->result();
								if(!empty($tbl_amenities)){ 
								foreach($tbl_amenities as $row){ ?>
									<div class="col-md-3">
										<div class="amenities-icon">
											<img src="<?php echo base_url() ?>uploads/manage_amenities/photo/main/<?php echo $row->photo; ?>" class="mx-auto d-block">
											<p><?php echo $row->mytext; ?></p>
										</div>
									</div>
								<?php } } ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="price-sec" id="price-list">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="elementor-widget-container">
							<h2>Price List</h2>
							<div class="table-responsive">
								<table class="table table-bordered">
									 <tbody>
										<tr>
											<th>Type / Area</th>
											<th>Description</th>
											<th>B.S.P</th>
											<th>Total Price*</th>
										</tr>
										<?php 
										$tbl_company_pricelist = $this->db->query("select * from tbl_company_pricelist where status='1'")->result();
										if(!empty($tbl_company_pricelist)){ 
										foreach($tbl_company_pricelist as $row){ ?>
										<tr>
											<td><strong><?php echo $row->area; ?></strong></td>
											<td><?php echo $row->description; ?></td>
											<td><?php echo $row->bsp; ?></td>
											<td><?php echo $row->total_price; ?></td>
										</tr>
										<?php } } ?>
									 
										
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="over-years-sec location-sec" id="location">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="elementor-widget-container">
							<h2>Location</h2>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="location-img docs-pictures">
									<img data-original="images/location-big.jpg" class="img-fluid" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $company_location_photo; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="location-colm">
									<?php echo $company_location_text; ?>
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