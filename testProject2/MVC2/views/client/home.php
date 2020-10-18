
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/img/blog-img/bg2.jpg);"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/img/blog-img/bg1.jpg);"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                        
                             
                       <?php  foreach(array_slice($posts, 0, 4) as $post){ ?>
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p><?php echo $post['posts_id'];  ?></p>
                                </div>
                                <div class="post-title">
                                    <a href="index.php?mod=client&c=home&act=viewdetail&id=<?php echo $post['posts_id'];  ?>"><?php echo $post['posts_name'];  ?></a>
                                </div>
                            </div>
                            
                          <?php }  ?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
   

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Cuộc Sống</li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">Các Dự Án</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Gia Đình</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Học Tập &amp; Làm Việc</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab4" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">Sở Thích</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab5" data-toggle="tab" href="#world-tab-5" role="tab" aria-controls="world-tab-5" aria-selected="false">Du Lịch</a>
                                </li>
                            </ul>

                                  <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">                                   
                                    <?php  foreach(array_slice($posts, 0, 5) as $post){ ?>
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="<?php echo $post['posts_thumbnail'];  ?>">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="index.php?mod=client&c=home&act=viewdetail&id=<?php echo $post['posts_id'];  ?>" class="headline">
                                                <h5><?php echo $post['posts_name'];  ?></h5>
                                            </a>
                                            <p><?php echo $post['posts_description'];  ?></p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date"><?php echo $post['posts_created_at'];  ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                     <?php }  ?>  
                                </div>

                                <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                     <?php  foreach(array_slice($posts, 1, 6) as $post){ ?>
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                    
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="<?php echo $post['posts_thumbnail'];  ?>">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="index.php?mod=client&c=home&act=viewdetail&id=<?php echo $post['posts_id'];  ?>" class="headline">
                                                <h5><?php echo $post['posts_name'];  ?></h5>
                                            </a>
                                            <p><?php echo $post['posts_content'];  ?></p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">DoTrungKien</a> on <a href="#" class="post-date"><?php echo $post['posts_created_at'];  ?></a></p>
                                            </div>
                                        </div>
                                         
                                    </div>
                                     <?php }  ?>  
                                   
                                </div>

                                <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
                                     <?php  foreach(array_slice($posts, 2, 7) as $post){ ?>
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                    
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="<?php echo $post['posts_thumbnail'];  ?>">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="index.php?mod=client&c=home&act=viewdetail&id=<?php echo $post['posts_id'];  ?>" class="headline">
                                                <h5><?php echo $post['posts_name'];  ?></h5>
                                            </a>
                                            <p><?php echo $post['posts_content'];  ?></p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">DoTrungKien</a> on <a href="#" class="post-date"><?php echo $post['posts_created_at'];  ?></a></p>
                                            </div>
                                        </div>
                                         
                                    </div>
                                     <?php }  ?>  
                                    
                                </div>

                                <div class="tab-pane fade" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">
                                     <?php  foreach(array_slice($posts, 3, 8) as $post){ ?>
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                    
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="<?php echo $post['posts_thumbnail'];  ?>">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="index.php?mod=client&c=home&act=viewdetail&id=<?php echo $post['posts_id'];  ?>" class="headline">
                                                <h5><?php echo $post['posts_name'];  ?></h5>
                                            </a>
                                            <p><?php echo $post['posts_content'];  ?></p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">DoTrungKien</a> on <a href="#" class="post-date"><?php echo $post['posts_created_at'];  ?></a></p>
                                            </div>
                                        </div>
                                         
                                    </div>
                                     <?php }  ?>  
                                </div>

                                <div class="tab-pane fade" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
                                   <?php  foreach(array_slice($posts, 3, 8) as $post){ ?>
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                    
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="<?php echo $post['posts_thumbnail'];  ?>">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="index.php?mod=client&c=home&act=viewdetail&id=<?php echo $post['posts_id'];  ?>" class="headline">
                                                <h5><?php echo $post['posts_name'];  ?></h5>
                                            </a>
                                            <p><?php echo $post['posts_content'];  ?></p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">DoTrungKien</a> on <a href="#" class="post-date"><?php echo $post['posts_created_at'];  ?></a></p>
                                            </div>
                                        </div>
                                         
                                    </div>
                                     <?php }  ?>  

                                   




                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
              

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Lập trình và cuộc sống</h5>
                            <div class="widget-content">
                                <p>Đây không chỉ là một trang web mà đó còn là nơi chém gió, kể lể về cuộc sống, chia sẻ kiến thức về lập trình, tâm sự trải lòng và ghi lại những gì mà mình (Đỗ Trung Kiên) đã trải qua trong suốt những năm học tập ở HUST và làm việc </p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Top Stories</h5>
                             <?php  foreach(array_slice($posts, 0, 5) as $post){ ?>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="<?php echo $post['posts_thumbnail'];  ?>" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="index.php?mod=client&c=home&act=viewdetail&id=<?php echo $post['posts_id'];  ?>" class="headline">
                                            <h5 class="mb-0"><?php echo $post['posts_name'];  ?></h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                              <?php }  ?>  

                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                 
                       
                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

