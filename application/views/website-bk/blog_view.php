<?php
$map = $this->Main_Model->get_website_data("map");
$banner = $this->Main_Model->get_website_data("blog_banner");
?>
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner;?>" title="" alt="">
</section>
<!--End of banner  Part-->
<div class="clearfix"></div>
<div class="container-fluid cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Blog</div>
		<div class="page_menu_bread">
			<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span>Blog
		</div>			
	</div>
	<div class="mcontainer">
		<div class="blog_msec_left msection wow fadeInTop animated animated blog-left">
			<div class="msection-contant">
				<h2> Blog </h2>
				<div class="blog-inn">
				<?php foreach($tbl_result as $row) { ?>
					<div class="blg_sngl_loop">
						<a class="blg_hd" href="<?= base_url();?>blogview/<?php echo strtolower(str_replace(" ","-",$row->url)); ?>" rel="bookmark"><?php echo $row->title;?></a>
						<p class="posted_blg">Posted by <a href="javascript:;" title="" rel="author"></a> on <?php echo $row->date;?></p>
						<div style="clear:both;"></div>
						<div class="">
						<img src="<?= $url_path ?>/<?= $row->photo ?>" class="" alt="" width="100%"></div>

						<div class="">
						<?php echo $row->description1 ?>
						</div>

					</div>
				<?php } ?>
				</div>
			</div>
		</div>
		<div class="right-side-b blog_msec_right">
			<div class="rsection wow fadeInRight animated animated">
				<h2>Recent Post</h2>
				<div class="section-data-r">
					<?php 
					$tbl_result = $this->db->query("select * from tbl_blog order by id desc limit 10")->result();
					foreach($tbl_result as $row) { ?>
						<div class="rcnt_loop_blg"> 
						<div class="rcnt_sidebar_img"> <a href="<?= base_url();?>blogview/<?php echo strtolower(str_replace(" ","-",$row->url)); ?>"><img src="<?= $url_path ?>/<?= $row->photo ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""></a></div>
						<div class="rcnt_sidebar_cnt"><div class="sidebar-title"><a href="<?= base_url();?>blogview/<?php echo strtolower(str_replace(" ","-",$row->url)); ?>"><?php echo $row->title;?></a></div>
						<div class="sidebar-date">Posted by on <?php echo $row->date;?></div>
						</div>
						</div>
					<?php } ?>
				</div>
			</div>	
		</div>
	</div>
</div>