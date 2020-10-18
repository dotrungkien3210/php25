
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
               <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="<?php echo URL_TENPLATE_CLIENT?>/dist/img/blog-img/b4.jpg" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="#">Học Thuật</a></div>
                                <!-- Headline -->
                                <a href="#" class="headline">
                                    <h5>Đây Là Nơi Giới Thiệu Những Project Mình Làm</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Đỗ Trung Kiên</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="<?php echo URL_TENPLATE_CLIENT?>/dist/img/blog-img/b5.jpg" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="#">Hoạt Động</a></div>
                                <!-- Headline -->
                                <a href="#" class="headline">
                                    <h5>Giới Thiệu Những Gì Mình Đã Tham Gia Cả Dự Án Và Hoạt Động Tình Nguyện</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Đỗ Trung Kiên</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="<?php echo URL_TENPLATE_CLIENT?>/dist/img/blog-img/b6.jpg" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="#">Ăn Chơi</a></div>
                                <!-- Headline -->
                                <a href="#" class="headline">
                                    <h5>Đơn Thuần Là Những Địa Điểm Ăn Uống Du Lịch</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Đỗ Trung Kiên</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






                        <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>Các Bài Viết Mới Nhất</h5>
                        </div>

                         <?php  foreach(array_slice($posts, 0, 4) as $post){ ?>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="<?php echo URL?>imageUpload/postImg/<?php echo $post['posts_thumbnail'];  ?>" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="index.php?mod=client&c=home&act=viewdetail&id=<?php echo $post['posts_id'];  ?>" class="headline">
                                    <h5><?php echo $post['posts_name'];  ?></h5>
                                </a>
                                <p><?php echo $post['posts_description'];  ?></p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Đỗ Trung Kiên</a> on <a href="#" class="post-date"><?php echo $post['posts_created_at'];  ?></a></p>
                                </div>
                            </div>
                        </div>
                          <?php }  ?>  
                      

                     

                
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
                            <h5 class="title">Đáng Xem</h5>
                             <?php  foreach(array_slice($posts, 0, 5) as $post){ ?>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="<?php echo URL?>imageUpload/postImg/<?php echo $post['posts_thumbnail'];  ?>" alt="">
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
                            <h5 class="title">Tìm Kiếm Tôi</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
<a href="https://www.facebook.com/profile.php?id=100009523719908"><i class="fa fa-facebook"></i></a>
<a href="https://www.youtube.com/channel/UCkPbX0wotyytQKBoHhRJlyQ?view_as=subscriber"><i class="fa fa-twitter"></i></a>
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



            <div id="stable" class="container">
    <div>
        <h2>stable and ready</h2>
        <p>aaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
        <div>
        <a href="#">download free</a>
        </div>
    </div>
    <ul>
        <li>
            <a href="#">made with love</a>
            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
        </li>
        <li>
            <a href="#">made with love</a>
            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
        </li>
        <li>
            <a href="#">made with love</a>
            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
        </li>
        <li>
            <a href="#">made with love</a>
            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
        </li>
    </ul>
</div>




        </div>
    </div>

