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
$banner = $this->Main_Model->get_website_data("construction_banner");
?>
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner; ?>" title="" alt="">
</section>
<!--End of banner  Part-->
<div class="clearfix"></div>
<div class="container cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread"><?php echo $id ?></div>
		<div class="page_menu_bread">
		<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span><?php echo $id ?>
		</div>			
	</div>
	
	<div class="mcontainer margin-b-50">
		<div class="col-md-8 <!--msection wow fadeInTop animated animated-->">
			<div class="msection-contant">
				<article id="post-162" class="post-162 page type-page status-publish hentry">
					<!--
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<?php 
							$i = 0;
							foreach($result1 as $row) { ?>
							<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0) { ?>active<?php } ?>"></li>
							<?php 
							$i++;
							} ?>
						</ol>
						<!-- Wrapper for slides --
						<div class="carousel-inner">
							<?php 
							$i = 0;
							foreach($result1 as $row) { ?>
							<div class="item <?php if($i==0) { ?>active<?php } ?>">
								<a href="<?php echo $url_path1 ?><?php echo $row->photo; ?>" data-lightbox="roadtrip">
								<img src="<?php echo $url_path1 ?><?php echo $row->photo; ?>" alt="">
								</a>
							</div>
							<?php 
							$i++;
							} ?>
						</div>
						<!-- Left and right controls --
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
					-->
				</article>
			</div>
			<div class="our-products-new">
				<ul class="our-products1">
					<h2 class="text-center"><?php echo $id ?></h2>
                	<?php
					foreach($result as $row){						
					?>					
					<li>
						<a href="<?php echo base_url() ?>constructionview/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>">
							<img src="<?= $url_path ?><?php echo $row->photo; ?>" class="attachment-topi size-topi wp-post-image" alt="" width="100%" height="250px;">
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
		<div class="col-md-4">
						<div class="blog-right">
							<h2>Quick Enquiry Form</h2>
							<div class="blog-right-form">
								<form>
									<div class="form-group">
										<label for="name">Your Name *</label>
										<input type="text" class="form-control" placeholder="Name" name="Name" id="qSenderName3">
									</div>
									<div class="form-group">
										<label for="email">Email address *</label>
										<input type="text" class="form-control" placeholder="Email" name="email" id="qEmailID3">
									</div>
									<div class="form-group">
										<label for="email">Phone Number *</label>
										<input type="text" class="form-control" placeholder="Contact Number" name=" " id="qContact3">
									</div>
									<div class="form-group">
										<label for="email">Message *</label>
										<textarea class="form-control" rows="2" placeholder="Comment" name=" " id="qQueryMessage3"></textarea>
									</div>
									<button type="submit" class="btn btn-primary" value="SUBMIT" onclick="SendQueryData3();">Submit</button>
								</form>
							</div>
							<div class="recent-blogg wow fadeInRight animated animated">
								<h2>Location</h2>
								<div class="section-data-r box-shadoww">
										<?php echo $map; ?>
								</div>
 
		
		</div>	
						</div>
					</div>
		
		<!--
		<div class="rsection wow fadeInRight animated animated">
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
						<!--<p><img src="assets/img/location-map.jpg" alt=""/></p>--
						<h2>Location</h2>
						<?php echo $map; ?>
					</div>
				</div>
			</div>
		</div>	
		-->
	</div>
</div>