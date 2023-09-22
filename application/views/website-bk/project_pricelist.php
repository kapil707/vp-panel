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
$career_hiring_banner = $this->Main_Model->get_website_data("career_hiring_banner");
$job_description = $this->Main_Model->get_website_data("job_description");
?>
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_project/photo/main/<?= $row->logo; ?>" class="project-logo1" title="" alt="">
	<img src="<?php echo base_url() ?>uploads/manage_project/photo/main/<?= $row->photo; ?>" title="" alt="">
</section>
<div class="clearfix"></div>
<div class="">
	<div>
		<?php/*
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
							<li><a href="#gallery">Gallery</a></li>
							<li><a href="#construction-update">Construction Update</a></li>
							<!-- <li><a href="#enquiry">Enquiry</a></li> -->
							<!--
						</ul>
					</div>
				</div>
			</div>
		</section>
		*/?>
		<section class="site-content-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="single-portfolio-menu">
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>#overview">Overview</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>#amenities">Amenities</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/index2">Floor</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/pricelist">Price List</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>#location">Location Advantage</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/construction-update">Construction Update</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/walkthrough">Walkthrough</a></li>
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
							<h2>Price List</h2>
						</div>
						<div class="row">
							<!--
							<div class="col-md-4">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/website/assets/img/custom1/project_9.jpg">
							</div>
							-->
							<div class="col-md-12">
								<div class="site-content-text">
									<?php echo $row->price_list_text?>
								</div>
							</div>
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
										$tbl_company_pricelist = $this->db->query("select * from tbl_project_pricelist where status='1'  and category='$category'")->result();
										if(!empty($tbl_company_pricelist)){ 
										foreach($tbl_company_pricelist as $row){ ?>
										<tr>
											<td><strong><?php echo $row->area; ?></strong></td>
											
											
											<td>
											<?php if($row->isclick==1) { ?>
											<a href="" data-toggle="modal" data-target="#main_modal">
											<?php } ?>
											<?php echo $row->description; ?>
											<?php if($row->isclick==1) { ?>
											</a>
											<?php } ?>
											</td>
											<td>
											<?php if($row->isclick==1) { ?>
											<a href="" data-toggle="modal" data-target="#main_modal">
											<?php } ?>
											<?php echo $row->bsp; ?>
											<?php if($row->isclick==1) { ?>
											</a>
											<?php } ?>
											</td>
											<td>
											<?php if($row->isclick==1) { ?>
											<a href="" data-toggle="modal" data-target="#main_modal">
											<?php } ?>
											<?php echo $row->total_price; ?>
											<?php if($row->isclick==1) { ?>
											</a>
											<?php } ?>
											</td>
											
											
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
		<section class="map-sec">
			<?php echo $map; ?>
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