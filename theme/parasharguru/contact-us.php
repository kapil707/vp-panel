<?php 
//Template Name:Contactus-pg
?>
<?php get_header(); 
?>

    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="<?php echo site_url(); ?>"> Home </a> / Contact Us</h4>
                    <h3>Contact Us</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
==================================================-->


    <!--   Start: Contact Section  
==================================================-->
    <section class="contact-section contact_page">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>contact us</h3>
            </div>
            <!-- End:  heading -->
            <div class="row">
                <!-- Start:  Content  -->
                <div class="inner-contact">
                    <div class="row contact_info">
                        <div class="bottom_contact col-sm-4 col-xs-12"><i class="icon_pin_alt"></i>
                            <p>company name </p>
                            <h4><?php echo get_field('company_name','61'); ?></h4>
                        </div>
                        <div class="bottom_contact col-sm-4 col-xs-12"><i class="icon_phone"></i>
                            <p>Toll Free Number</p>
                            <h4><?php echo get_field('phone_no','61'); ?></h4>
                        </div>
                        <div class="bottom_contact col-sm-4 col-xs-12"><i class="icon_email_alt"></i>
                            <p>Email</p>
                            <h4><?php echo get_field('email_id','61'); ?></h4>
                        </div>
                    </div>
                    <!-- End:contact-info  -->
                    <div class="row">
                        <!--  Contact Form  -->
                        <div class="contact-form">
							<?php echo do_shortcode('[contact-form-7 id="69" title="Contactus"]');?>
                        </div>
                        <!-- End:Contact Form  -->
                    </div>
                </div>
                <!-- End: inner-contact-->
            </div>
            <!-- End: row-->
        </div>
        <!-- End: container-->
    </section>
	
    <!-- End:Contact Section 
==================================================-->
<?php get_footer(); ?>