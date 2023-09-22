<section id="home" class="fullwidth bg-stone-800">
    <div id="home-slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <img src="<?php echo get_library_to_image($page_data->image,'main'); ?>" width="100%">
    </div>
</section>
<section id="about" class="lg-py-4 sm-py-4">
    <div class="container cursor-default">
        <div class="flex-row lg-flex-columns-12 md-flex-columns-2 sm-flex-columns-2 xs-flex-columns-1">
            <h2 class="text-center"><?php echo $page_data->title ?></h2>
            <?php echo $page_data->description ?>
        </div>
    </div>
</section>
<section class="contact-sec lg-py-4 sm-py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-left">
                    <div class="elementor-widget-container margin-b-50">
                        <h2><?php echo get_field_data("contact_label1") ?></h2>
                    </div>
                    <div class="contact-address">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
						<?php echo get_field_data("contact_address") ?>
						<br><br>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<?php echo get_field_data("contact_email") ?>
						<br><br>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<?php echo get_field_data("contact_phone") ?>
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
    <?php echo get_field_data("contact_map") ?>
</section>