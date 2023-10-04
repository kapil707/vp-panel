<?php 
//Template Name:Blog-pg
?>
<?php 
get_header(); 
$row = get_post();
?>
    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="index.html"> Home </a> / Blog</h4>
                    <h3><?php the_title(); ?></h3>
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
    <div class="blog_container single_blog_page">
        <div class="container">
            <div class="row">
                <!-- Blog Area -->
                <div class="col-sm-8 col-xs-12 blog-area">
                    <div class="blog-warp-1 blog_warp_lay_1">
                        <div class="blog_imgg">
							<?php
							$imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
							?>
                            <img src="<?php echo $imagepath[0]; ?>" alt="" />
                        </div>
                        <div class="blog_content_warp">
                            <a href="#" class="blog_datee"><i class="fa fa-calendar"></i>  
							<?php echo get_the_date()?></a>
                            <a href="#" class="subtext"><i class="fa fa-tag"></i>  
							<?php echo get_the_author()?>
							</a>
                            <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 
							<?php echo $row->comment_count; ?>
							</a>
                            <h5><a href="#"> <?php the_title()?></a></h5>
                            <?php the_content()?>
                        </div>
                    </div>
                    <!--/ article -->

                    <!--comments list -->
                    <div class="list-comments">
                        <div class="comments-section-title">
                            <h4>Comments [15]</h4>
                        </div>
                        <!-- .section-title -->
                        <ul class="comments">
                            <li>
                                <div class="comment">
                                    <img src="images/tes1.jpg" alt="" class="comment-avatar">
                                    <div class="blog_com_dt">
                                        <strong class="commenter-title"><a href="#">John Doe</a><span class="comment-date">27 Jan 2015</span></strong>
                                        <p>Lorem ipsum dolor sit amet, in urna molestie tristique. A fermentum sed at facilisis lacinia aliquam fusce wisi porta ligula nibh vel congue diam. Sed ligula erat molestie cras morbi in facilisis eu elit</p>
                                    </div>
                                </div>
                                <!-- .comment -->
                                <ul>
                                    <li>
                                        <div class="comment">
                                            <img src="images/tes2.jpg" alt="" class="comment-avatar">
                                            <div class="blog_com_dt">
                                                <strong class="commenter-title"><a href="#">John Doe</a><span class="comment-date">27 June 2016</span></strong>
                                                <p>Lorem ipsum dolor sit amet, in urna molestie tristique. A fermentum sed at facilisis lacinia aliquam fusce wisi porta ligula nibh vel congue diam. Sed ligula erat molestie cras morbi in facilisis eu elit</p>
                                            </div>
                                        </div>
                                        <!-- .comment -->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!--/ .comments -->
                    </div>
                    <!--/comments list -->

                    <!-- comment box   -->
                    <div class="contact">
                        <div class="contact-form-warper blog-contact">
                            <h4>Leave a comment </h4>
							<?php comment_form(); ?>
							<?php comments_template(); ?>
                        </div>
                    </div>
                    <!--/.comment box-->
                </div>
                <!--/ Blog Area -->
				<?php get_sidebar(); ?>
            </div>
        </div>
        <!-- Container /- -->
    </div>
    <!-- End : Blog Page Content 
==================================================-->
<?php get_footer(); ?>