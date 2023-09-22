<?php
$map = $this->Main_Model->get_website_data("map");
if($row->id!=""){ ?>
<section class="banner-sec">
	<img src="<?= $url_path ?><?php echo $row->photo; ?>" title="" alt="">
</section>
<section class="banner-sec-mobile">
	<img src="<?= $url_path ?><?php echo $row->photo1; ?>" title="" alt="">
</section>
<!--End of banner  Part-->
<div class="clearfix"></div>
<div class="container-fluid cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Project</div>
		<div class="page_menu_bread">
		<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span><?php echo $row->title ?>
		</div>			
	</div>
	<div class="mcontainer">
		<div class="col-md-12 <?php/*msection wow fadeInTop animated animated*/?>">
			<div class="msection-contant">
				<article id="post-162" class="post-162 page type-page status-publish hentry">
					<div class="entry-header">
						<h2 class="entry-title">
							<?php echo $row->title ?>
						</h2>
					</div>
					<div class="entry-content">
						<?php echo $row->description ?>
					</div>	
				</article>
			</div>
			
			<div class="our-products-new">
				<h2 class="text-center">Our Products</h2>

                <ul class="our-products1">
                	<?php
					$category = $row->id;
					$tbl_product = $this->db->query("select * from tbl_product where status='1' and category='$category'")->result();
					foreach($tbl_product as $row1){	
					?>					
					<li>
						<a href="<?php echo base_url(); ?>product/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>/<?php echo strtolower(str_replace(" ","-",$row1->title)); ?>">
							<img src="<?= $url_path1 ?><?php echo $row1->photo1; ?>" class="attachment-topi size-topi wp-post-image" alt="">
							<p><?php echo $row1->title; ?></p>
			                <div class="detail">
			                <span></span>
							<div class="area" style="border-top: none;"><!-- Size :  --></div> 
							<!--  <div class="sq"></div>-->
			                <div class="vd">View Detail</div>
			                </div>
						</a>			            
	                </li>
					<?php } ?>
				</ul>
			</div>
		</div>
		
		<?php/*
		<div class="rsection wow fadeInRight animated animated">
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
		*/?>
	</div>	
</div>
<?php } ?>