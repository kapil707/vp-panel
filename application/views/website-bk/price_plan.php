<style>
.li_css
{
	padding: 15px;
	display:inline-block;
	width: 100%;
}
.li_css:hover
{
	background:#283664;
}
.li_css:hover a
{
	color:white;
}
</style>
<?php
$map = $this->Main_Model->get_website_data("map");
$banner = $this->Main_Model->get_website_data("floor_plan_banner");
?>
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner; ?>" title="" alt="">
</section>
<!--End of banner  Part-->
<div class="clearfix"></div>
<div class="container-fluid cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Price Plan</div>
		<div class="page_menu_bread">
		<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span>Price Plan
		</div>			
	</div>
	<div class="mcontainer">
		<div class="msection wow fadeInTop animated animated">
			<div class="our-products-new">
				<ul class="our-products1">
					<h2 class="text-center">Price Plan</h2>
                	<?php
					foreach($result as $row){	
					?>					
					<li>
						<a href="<?php echo $url_path ?><?php echo $row->photo; ?>" data-lightbox="roadtrip">
							<img src="<?= $url_path ?><?php echo $row->photo; ?>" class="attachment-topi size-topi wp-post-image" alt="" width="100%" height="300px;">
							<p style="height:70px;">
								<?php echo $row->title ?>
							</p>
			                <div class="detail">
			                <span></span>
							<div class="area" style="border-top: none;"><!-- Size :  --></div> 
							<!--  <div class="sq"></div>
			                <div class="vd">View Detail</div>
			                </div>-->
						</a>			            
	                </li>
					<?php } ?>
				</ul>
			</div>
		</div>
		
		
		<div class="rsection wow fadeInRight animated animated">
			<ul>
				<li class="li_css">
					<a href="<?php echo base_url(); ?>product/<?= $_SESSION["overview"]; ?>">Overview</a>
				</li>
				<li class="li_css">
					<a href="<?php echo base_url(); ?>features">Features</a>
				</li>
				<li class="li_css">
					<a href="<?php echo base_url(); ?>floor_plan/<?= $_SESSION["floor_plan"]; ?>">Floor Plan</a>
				</li>
				<li class="li_css">
					<a href="<?php echo base_url(); ?>site_plan">Site Plan</a>
				</li>
				<li class="li_css">
					<a href="<?php echo base_url(); ?>price_plan/<?= $_SESSION["price_plan"]; ?>">Price Plan</a>
				</li>
			</ul>
			<div class="map">
				<h2>I am Interested in this</h2>
				<div class="section-data-r">
					<form class="detailsbox" action="<?= base_url(); ?>home/lead" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" id="name1" name="name" class="form-control input-lg" placeholder="Please Enter Name" required>
						</div>
						<div class="form-group">
							<input type="text" id="contact1" name="mobile" class="form-control input-lg" placeholder="Please Enter Mobile" required pattern="[7-9]{1}[0-9]{9}" title="Phone number 10 digit with 0-9">
						</div>
						<div class="form-group">
							<input type="email" id="email1" name="email" class="form-control input-lg" placeholder="Please Enter Email">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" placeholder="Please Enter Messege"required></textarea>
						</div>
						<div class="form-group">
							<center>
								<input type="submit" name="submit" class="btn btn-warning btn-block" value="Submit" onClick="return submit_enquiry_form_header1();"> </button>
							</center>
						</div>
					</form>
				</div>
				<div class="map">
					<div class="map-data">
						<!--<p><img src="assets/img/location-map.jpg" alt=""/></p>-->
						<h2>Location</h2>
						<?php echo $map; ?>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>