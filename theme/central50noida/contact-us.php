<?php include_once(get_header()); ?>
<div id="about-box1">
    <img src="<?php echo get_library_to_image($page_data->image,'main'); ?>" class="main-banner">
</div>
<div id="about-box2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5><?php echo $page_data->title ?></h5>
            </div>
            <div class="col-md-12">
                <?php echo $page_data->description ?>
            </div>
        </div>
    </div>
</div>
<section class="contact-sec lg-py-4 sm-py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-left">
                    <div class="elementor-widget-container margin-b-50">
                        <h2><?php echo get_field_data("contact_label1",9) ?></h2>
                    </div>
                    <div class="contact-address">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
						<?php echo get_field_data("contact_address",9) ?>
						<br><br>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<?php echo get_field_data("contact_email",9) ?>
						<br><br>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<?php echo get_field_data("contact_phone",9) ?>
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
    <?php echo get_field_data("contact_map",9) ?>
</section>
<?php include_once(get_footer()); ?>