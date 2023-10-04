<?php
$map = $this->Main_Model->get_website_data("map");
if($row->id!=""){ ?>
<section class="banner-sec">
	<img src="<?= $url_path ?><?php echo $row->photo; ?>" title="" alt="">
</section>
<!--End of banner  Part-->
<div class="clearfix"></div>
<div class="container-fluid cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Company</div>
		<div class="page_menu_bread">
		<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span><?php echo $row->title ?>
		</div>			
	</div>
	<div class="mcontainer">
		<div class="msection wow fadeInTop animated animated" <?php if($row->id=="3" || $row->id=="4") { ?>style="width:100%"<?php }?>>
			<div class="msection-contant">
				<article id="post-162" class="post-162 page type-page status-publish hentry">
					<div class="entry-header">
						<h2 class="entry-title"><?php echo $row->title ?></h2>
					</div>
					<div class="entry-content">
						<?php echo $row->description ?>
					</div>
					<?php 
					if($row->id=="3") {
					$tbl_promoters_profile = $this->db->query("select * from tbl_promoters_profile where status='1'")->result();
					foreach($tbl_promoters_profile as $row) { ?>
					<div class="blg_sngl_loop">
						<h3><?php echo $row->title; ?></h3>
						<p class="posted_blg">Posted by <a href="javascript:;" title="" rel="author"></a> on <?php echo $row->date;?></p>
						<div style="clear:both;"></div>
						<div class="blg_img_left">
							<img src="<?= $url_path2 ?>/<?= $row->photo ?>" class="attachment-full size-full wp-post-image" alt="">
						</div>
						<div class="blg_cont_right">
							<p><?php echo $row->description ?></p>
						</div>
					</div>
					<?php } }?>
				
					<?php 
					if($row->id=="4") {
					$tbl_csr_category = $this->db->query("select * from tbl_csr_category where status='1'")->result();
					foreach($tbl_csr_category as $row1){	
						$tbl_csr1 = $this->db->query("select * from tbl_csr where status='1' and category='$row1->id'")->row();
						if(!empty($tbl_csr1)){?>
						<div class="entry-header">
							<h2 class="entry-title"><?php echo $row->title; ?></h2>
						</div>
						<div class="entry-content">
							<?php echo $row1->description ?>
						</div>
						<?php } ?>
						<div class="blg_sngl_loop">
						<?php
						$tbl_csr = $this->db->query("select * from tbl_csr where status='1' and category='$row->id'")->result();
						foreach($tbl_csr as $row1) { ?>					
							<div class="col-sm-3">
								<h3><?php echo $row1->title;?></h3>
								<p class="posted_blg">Posted by <a href="javascript:;" title="" rel="author"></a> on <?php echo $row1->date;?></p>
								<img src="<?= $url_path3 ?>/<?= $row1->photo ?>" class="attachment-full size-full wp-post-image" alt="">
							</div>
						<?php } ?>
						</div>		
					<?php } } ?>			
				</article>
			</div>
		</div>
		
		
		<div class="rsection wow fadeInRight animated animated" <?php if($row->id=="3" || $row->id=="4") { ?>style="display:none" <?php }?>>
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
<?php } ?>