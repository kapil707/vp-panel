<!-- Widget Area -->
                <div class="col-sm-4 col-xs-12 widget-area">
					<!-- Widget Search -->
                    <aside class="widget widget-search">
                        <!-- input-group -->
                        <div class="input-group">
                            <input class="form-control" placeholder="Search" type="text">
                            <span class="input-group-btn">
								<button type="button"><i class="fa fa-search"></i></button>
							</span>
                        </div>
                        <!-- /input-group -->
                    </aside>
                    <!-- Widget Search /- -->
					
				     <!-- Recent Post -->
                    <aside class="widget wiget-recent-post">
						<?php dynamic_sidebar( 'sidebar' ); ?>
                    </aside>
                    <!-- About Author 
                    <aside class="widget widget-post-categories">
                        <h3 class="widget-title">Post Categories</h3>
                        <ul class="categories-type">
                            <li>
                                <a href="#" title="Business">Computer</a>
                            </li>
                            <li>
                                <a href="#" title="Wordpress">Laptop</a>
                            </li>
                            <li>
                                <a href="#" title="Theme Forest">Monitor</a>
                            </li>
                            <li>
                                <a href="#" title="Web Developement">Mobile</a>
                            </li>
                            <li>
                                <a href="#" title="Statistics">Phone</a>
                            </li>
                        </ul>
                    </aside>   
 
                    <!-- Widget Instagram
                    <aside class="widget widget-instagram">
                        <h3 class="widget-title">Instagram</h3>
                        <div class="instagram-item">
                            <ul class="instagram-photo-list">
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="images/blog_1.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="images/blog_2.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="images/blog_1.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="images/blog_2.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="images/blog_1.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="images/blog_2.jpg">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget Instagram /- -->
					
                    <!-- Widget Tags -->
                    <aside class="widget widget-tags">
                        <h3 class="widget-title">Top Tags</h3>
						<?php 
						$post_tag = get_terms(['taxonomy'=>'post_tag']); 
						foreach($post_tag as $row){
							?>
							<a href="#" title="<?php echo $row->name ; ?>"><?php echo $row->name ; ?></a>
							<?php
						}
						?>
						
                    </aside>
                    <!-- Widget Tags /- -->
                </div>
                <!-- Widget Area /- -->