
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/img/blog-img/bg2.jpg);"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/img/blog-img/bg1.jpg);"></div>
        </div>

    </div>
  
   

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">






                        <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>Từ Khóa Được Tìm Kiếm : <?php echo $key; ?></h5>
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

              
                </div>
            </div>

              


            </div>

           




        </div>
    </div>

