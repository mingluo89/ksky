<!-- nav top begin -->
<header class="bg-dark">
    <div id="topbar" style="background-size: cover; background-repeat: no-repeat;">
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
            <div class="clearfix" style="background-size: cover; background-repeat: no-repeat;"></div>
        </div>
    </div>

    <div class="container" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-md-12" style="background-size: cover; background-repeat: no-repeat;">
                <div class="de-flex sm-pt0" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="de-flex-col" style="background-size: cover; background-repeat: no-repeat;">
                        <div id="btn-extra" class="me-3" style="background-size: cover; background-repeat: no-repeat;">
                            <span></span>
                            <span></span>
                        </div>
                        <!-- logo begin -->
                        <div id="logo" style="background-size: cover; background-repeat: no-repeat;">
                            <a href="<?= $baseUrl; ?>/">
                                <img class="logo-main" src="<?= $baseUrl; ?>/images/brand/logo-white.png" alt="">
                                <img class="logo-mobile" src="<?= $baseUrl; ?>/images/brand/logo-white.png" alt="">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="de-flex-col header-col-mid" style="background-size: cover; background-repeat: no-repeat;">
                        <!-- mainemenu begin -->
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="<?= $baseUrl; ?>/">Trang chủ</a><span></span>
                            <li><a class="menu-item" href="<?= $baseUrl; ?>/san-pham">Sản phẩm</a><span></span>
                            </li>
                            <li class="menu-item-has-children has-child"><a class="menu-item" href="<?= $baseUrl; ?>/du-an/">Dự án</a><span></span>
                                <ul>
                                    <li><a href="<?= $baseUrl; ?>/du-an/?name=du-an-1">Dự án 1</a></li>
                                    <li><a href="<?= $baseUrl; ?>/du-an/?name=du-an-2">Projects Slider</a></li>
                                    <li><a href="<?= $baseUrl; ?>/du-an/?name=du-an-3">Projects Carousel</a></li>
                                    <li><a href="<?= $baseUrl; ?>/du-an/?name=du-an-4">Project Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-child"><a class="menu-item" href="<?= $baseUrl; ?>/dich-vu">Dịch vụ</a><span></span>
                                <ul>
                                    <li><a href="<?= $baseUrl; ?>/dich-vu?name=dich-vu-bao-tri-may-phat-dien">Bảo trì máy phát điện</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-child"><a class="menu-item" href="<?= $baseUrl; ?>/cong-ty">Công Ty</a><span></span>
                                <ul>
                                    <li><a href="<?= $baseUrl; ?>/cong-ty">Về chúng tôi</a></li>
                                    <li><a href="<?= $baseUrl; ?>/cong-ty/#doi-ngu">Đội ngũ</a></li>
                                    <li><a href="<?= $baseUrl; ?>/cong-ty/#khach-hang">Khách hàng</a></li>
                                    <li><a href="<?= $baseUrl; ?>/cong-ty/#doi-tac">Đối tác</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="<?= $baseUrl; ?>/blog">Blog</a></li>
                            <li><a class="menu-item" href="<?= $baseUrl; ?>/lien-he">Liên hệ</a></li>
                        </ul>
                        <!-- mainmenu end -->
                    </div>
                    <div class="de-flex-col" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="menu_side_area" style="background-size: cover; background-repeat: no-repeat;">
                            <a href="<?= $baseUrl; ?>/bao-gia" class="btn-main btn-line fx-slide hover-white" data-hover="Nhận báo giá"><span>Nhận báo giá</span></a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- nav top end -->