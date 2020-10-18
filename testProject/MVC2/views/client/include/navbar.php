 <!-- Preloader Start -->
     <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php"><img src="<?php echo URL_TENPLATE_CLIENT?>/dist/img/core-img/logo.png" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Trang Chủ <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="index.php?mod=client&c=home&act=getCate&use=volunteer">Hoạt Động Xã Hội</a>
<a class="dropdown-item" href="index.php?mod=client&c=home&act=getCate&use=share">Chia Sẻ Kiến Thức</a>
<a class="dropdown-item" href="index.php?mod=client&c=home&act=getCate&use=travel">Du Lịch</a>
<a class="dropdown-item" href="index.php?mod=client&c=home&act=getCate&use=hobby">Sở Thích</a>

                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?mod=client&c=home&act=allPost">Bài Viết</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://i.topcv.vn/dotrungkien?ref=3425008">Tác Giả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?mod=admin&act=login&c=auth">Đăng Nhập</a>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="index.php?mod=client&c=home&act=search" method="post">
                                    <input type="search" id="search" name="key" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                            <!-- End Search Form  -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
