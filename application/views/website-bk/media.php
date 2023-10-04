<?php
$map = $this->Main_Model->get_website_data("map");
$banner = $this->Main_Model->get_website_data("media_banner");
?>
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
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner;?>" title="" alt="">
</section>
<!--End of banner  Part-->
<div class="clearfix"></div>
<div class="container-fluid cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Media</div>
			<div class="page_menu_bread">
				<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span>
				<?php echo $tbl_media_category->title; ?>
			</div>			
		</div>
		<div class="mcontainer">
			<div class="msection wow fadeInTop animated animated">
				<div class="our-products-new">
					<ul class="our-products1">
						<h2 class="text-center"><?php echo $id ?></h2>
						<?php
						foreach($result as $row){						
						?>					
						<li>
							<a href="<?php echo base_url() ?>mediaview/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>">
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

			<div class="rsection wow fadeInRight animated animated">
				<h2>Media</h2>
				<ul>
					<?php
					$tbl_media_category = $this->db->query("select * from tbl_media_category where status='1'")->result();
					foreach($tbl_media_category as $row) { ?>
					<li class="li_css"><a href="<?php echo base_url(); ?>media/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>">
					<?php echo $row->title ;?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>	
</div>