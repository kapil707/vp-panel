<?php
$map = $this->Main_Model->get_website_data("map");
$banner = $this->Main_Model->get_website_data("contact_us_banner");
$banner1 = $this->Main_Model->get_website_data("contact_us_banner_mobile");
if($tbl_row->id!=""){ ?>
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner; ?>" title="" alt="">
</section>
<section class="banner-sec-mobile">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner1; ?>" title="" alt="">
</section>
<div class="clearfix"></div>
<?php /*
<div class="container-fluid cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Contact Us</div>
		<div class="page_menu_bread">
			<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span><?php echo $tbl_row->title ?>
		</div>
	</div>
	<div class="mcontainer">
		<div class="msection wow fadeInTop animated animated" style="width:100%">
			<div class="msection-contant">
				<article id="post-162" class="post-162 page type-page status-publish hentry">
					<div class="entry-header">
						<h2 class="entry-title">
							<?php echo $tbl_row->title ?>
						</h2>
					</div>
					<div class="frmmap-holder">
						<div class="col-md-5 col-sm-5">
							<?php echo $tbl_row->description ?>
						</div>
						<div class="col-md-7 col-sm-7">
							<?php echo $map; ?>
						</div>
					</div>
				</article>
			</div>
		</div>	
	</div>	
</div>

*/?>
	<section class="contact-sec">
        <div class="container">
			<div class="bread_block" id="bread_height_js">
				<div class="page_ttl_bread"><?php echo $tbl_row->title ?></div>
					<div class="page_menu_bread">
					<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span><?php echo $tbl_row->title ?>
				</div>
			</div>
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-left">
                        <div class="elementor-widget-container margin-b-50">
                            <span>get in touch</span>
                            <h2>Visit one of our agency locations or contact us today</h2>
                        </div>
                        <div class="contact-address">
                            <?php echo $tbl_row->description ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mob-m-t-50">
                    <div class="contact-right">
                        <div class="elementor-widget-container">
                            <span>leave a message</span>
                            <h2>We love to hear from you</h2>
                        </div>
                        <div class="contact-form">
                            <form action="<?= base_url(); ?>home/lead" method="post">
                                <div class="form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="qSenderName4" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address *</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" id="qEmailID4" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Contact Number" name="mobile" id="qContact4">
                                </div>
                                <div class="form-group">
                                    <label for="email">Message</label>
                                    <textarea class="form-control" rows="5" placeholder="Comment" name="message" id="qQueryMessage4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" value="SUBMIT">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-sec">
        <?php echo $map; ?>
    </section>
<?php } ?>