<?php get_header(); ?>
<?php get_header(); ?>
    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="index.html"> Home </a> / Blog</h4>
                    <h3>Latest News</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->
    <!-- End: Header Section
==================================================-->



    <!-- Start : Blog Page Content 
==================================================-->
    <div class="blog_container blog_page_one">
        <div class="container">
            <div class="row">
                <!-- Blog Area -->
                <div class="col-sm-8 col-xs-12 blog-area">
                    <div class="row">
						<?php 
						$wpnew = array(
						'post'=>'latest-news',
						'post_status' => 'publish',
						'posts_per_page' => -1,);
						$wpq = new WP_Query($wpnew);
						while($wpq->have_posts()){ 
							$row = $wpq->the_post();
						?>
                        <div class="col-sm-12">
                            <div class="blog-warp-1 blog_warp_lay_1">
                                <div class="blog_imgg">
                                    <?php
									$imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'small');
									?>
									<img src="<?php echo $imagepath[0]; ?>" alt="" />
                                </div>
                                <div class="blog_content_warp">
                                    <a href="#" class="blog_datee">
									<i class="fa fa-calendar"></i>
									<?php echo the_date(); ?></a>
                                    <a href="#" class="subtext"><i class="fa fa-tag"></i>  Marketing </a>
                                    <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> <?php echo $row->comment_count; ?></a>
                                    <h5><a href="<?php echo the_permalink() ?>"><?php echo the_title(); ?></a></h5>
                                    <p><?php echo the_excerpt(); ?></p>
                                    <a href="<?php echo the_permalink() ?>" class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>
						<?php } ?>

                        <div class="col-sm-12">
							<?php wp_pagenavi(); ?>
							
                        </div>
                    </div>

                </div>
                <!--/ Blog Area -->
				<?php get_sidebar(); ?>
            </div>
        </div>
        <!-- Container /- -->
    </div>
    <!--  End : Blog Page Content
==================================================-->
<?php get_footer(); ?>