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
/* Make the image fully responsive */
.carousel-inner img {
	height: 70vh !important;
	width: 100%;
	object-fit: cover;
	object-fit:unset;
}
</style>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/website/assets/lightbox/lightbox.js"></script>
<?php
$map = $this->Main_Model->get_website_data("map");
// $banner = $this->Main_Model->get_website_data("construction_banner");
$banner = $this->Main_Model->get_website_data("company_banner");
?>
<section class="banner-sec">
	<img src="<?= $url_path ?><?php echo $row->photo; ?>" title="" alt="">
	<img src="<?= $url_path ?><?= $row->logo; ?>" class="project-logo1" title="" alt="">
</section>
<section class="banner-sec-mobile">
	<img src="<?= $url_path ?><?php echo $row->photo1; ?>" title="" alt="">
	<img src="<?= $url_path ?><?= $row->logo; ?>" class="project-logo1" title="" alt="">
</section>
<!--End of banner  Part-->
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
							<?php /*<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/pricelist">Price List</a></li>*/ ?>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>#location">Location Advantage</a></li>
							<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/construction-update">Construction Update</a></li>
							<?php /*<li><a href="<?php echo base_url(); ?>project/<?php echo $pg_url ?>/walkthrough">Walkthrough</a></li>*/ ?>
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
							<h2> Construction Update</h2>
						</div>
						<div class="row">
							<!--
							<div class="col-md-4">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/website/assets/img/custom1/project_9.jpg">
							</div>
							-->
							
							<div class="col-md-12">
								<div class="site-content-text">
									<?php echo $row->construction_text?>
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
						<div class="our-products-new">
							<ul class="our-products1">
								<h2 class="text-center"><?php echo $id ?></h2>
								<?php
								foreach($result as $row){						
								?>					
								<li>
									<a href="<?php echo base_url() ?>constructionview/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>">
										<img src="<?= $url_path_l ?><?php echo $row->photo; ?>" class="attachment-topi size-topi wp-post-image" alt="" width="100%" height="250px;">
										<p style="height:40px;">
											<?php echo $row->title ?>
										</p>
										<div class="detail">
										<!--  <span><?php echo $row->date ?></span> -->
										<div class="area" style="border-top: none;"><!-- Size :  --></div> 
										<!--  <div class="sq"></div>
										<div class="vd">View Detail</div>-->
										</div>
									</a>			            
								</li>
								<?php } ?>
							</ul>
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