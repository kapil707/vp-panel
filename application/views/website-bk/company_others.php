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
		<div class="page_ttl_bread">Company</div>
		<div class="page_menu_bread">
		<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span><?php echo $row->title ?>
		</div>			
	</div>
	<div class="mcontainer margin-b-50">
		<div class="col-md-8" <?php /*if($row->id=="3" || $row->id=="4") { ?>style="width:100%"<?php }*/?>>
			<div class="msection-contant">
				<article id="post-162" class="post-162 page type-page status-publish hentry">
					<div class="entry-header margin-b-30">
						<h1 class="entry-title"><?php echo $row->title ?></h1>
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
		<div class="col-md-4">
			<div class="blog-right">
				<h2>Quick Enquiry Form</h2>
				<div class="blog-right-form">
					<form method="post" action="<?php echo base_url(); ?>home/lead">
						<div class="form-group">
							<label for="name">Your Name *</label>
							<input type="text" class="form-control" placeholder="Name" name="name" id="qSenderName3">
						</div>
						<div class="form-group">
							<label for="email">Email address *</label>
							<input type="text" class="form-control" placeholder="Email" name="email" id="qEmailID3">
						</div>
						<div class="form-group">
							<label for="email">Phone Number *</label>
							<input type="text" class="form-control" placeholder="Contact Number" name="mobile" id="qContact3">
						</div>
						<div class="form-group">
							<label for="email">Message *</label>
							<textarea class="form-control" rows="2" placeholder="Comment" name="message" id="qQueryMessage3"></textarea>
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
	</div>	
</div>
<?php } ?>