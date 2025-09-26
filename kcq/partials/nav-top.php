<!-- nav top begin -->
<header class="bg-dark">
    <div style="background-size: cover; background-repeat: no-repeat;">
        <div class="container" style="background-size: cover; background-repeat: no-repeat;">
            <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="d-flex justify-content-between xs-hide" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="d-flex" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="topbar-widget me-5" style="background-size: cover; background-repeat: no-repeat;"><a href="/"><i class="icofont-location-pin"></i><?= $meta_company_address; ?></a></div>
                            <div class="topbar-widget me-5" style="background-size: cover; background-repeat: no-repeat;"><a href="/"><i class="icofont-phone"></i><?= $meta_company_phone; ?></a></div>
                            <div class="topbar-widget me-5" style="background-size: cover; background-repeat: no-repeat;"><a href="/"><i class="icofont-envelope"></i><?= $meta_company_email; ?></a></div>
                        </div>

                        <div class="d-flex" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="social-icons" style="background-size: cover; background-repeat: no-repeat;">
                                <a href="/"><i class="fa-brands fa-facebook fa-lg"></i></a>
                                <a href="/"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                <a href="/"><i class="fa-brands fa-youtube fa-lg"></i></a>
                                <a href="/"><i class="fa-brands fa-pinterest fa-lg"></i></a>
                                <a href="/"><i class="fa-brands fa-instagram fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-6 col-lg-3" style="background-size: cover; background-repeat: no-repeat;">
                <div class="d-flex align-items-center">
                    <span id="menu-btn"></span>
                    <!-- logo begin -->
                    <div id="logo" style="background-size: cover; background-repeat: no-repeat;">
                        <a href="<?= $baseUrl; ?>/">
                            <img class="logo-main" src="<?= $baseUrl; ?>/images/brand/logo-white.png" alt="">
                            <img class="logo-mobile" src="<?= $baseUrl; ?>/images/brand/logo-white.png" alt="">
                        </a>
                    </div>
                    <!-- logo end -->
                </div>
            </div>
            <div class="col-6 col-lg-6 d-none d-lg-flex" style="background-size: cover; background-repeat: no-repeat;">
                <div class="py-2 w-100">
                    <input type="search" name="" id="" class="form-control mb-0 bg-white">
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="d-flex align-items-center justify-content-end my-2">
                    <a href="<?= $baseUrl; ?>/bao-gia" class="btn-main btn-line fx-slide hover-white" data-hover="Nhận báo giá"><span>Nhận báo giá</span></a>
                </div>
                <!-- <div id="btn-extra">
                    <span></span>
                    <span></span>
                </div> -->
            </div>
            <div class="col-12">
                <!-- main menu begin -->
                <div class="d-flex align-items-center justify-content-center gap-4 py-3">
                    <a class="text-12 text-white" href="<?= $baseUrl; ?>/">Trang chủ</a>

                    <a class="text-12 text-white" href="<?= $baseUrl; ?>/san-pham">Sản phẩm</a>
                    <div class="dropdown">
                        <a class="text-12 text-white dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="<?= $baseUrl; ?>/du-an/">Dự án</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/du-an/?name=du-an-1">Dự án 1</a></li>
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/du-an/?name=du-an-2">Projects Slider</a></li>
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/du-an/?name=du-an-3">Projects Carousel</a></li>
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/du-an/?name=du-an-4">Project Details</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a class="text-12 text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="<?= $baseUrl; ?>/dich-vu">Dịch vụ</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/dich-vu?name=dich-vu-bao-tri-may-phat-dien">Bảo trì máy phát điện</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a class="text-12 text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="<?= $baseUrl; ?>/cong-ty">Công Ty</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/cong-ty">Về chúng tôi</a></li>
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/cong-ty/#doi-ngu">Đội ngũ</a></li>
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/cong-ty/#khach-hang">Khách hàng</a></li>
                            <li><a class="dropdown-item" href="<?= $baseUrl; ?>/cong-ty/#doi-tac">Đối tác</a></li>
                        </ul>
                    </div>
                    <a class="text-12 text-white" href="<?= $baseUrl; ?>/blog">Blog</a>
                    <a class="text-12 text-white" href="<?= $baseUrl; ?>/lien-he">Liên hệ</a>
                </div>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>
</header>
<!-- nav top end -->