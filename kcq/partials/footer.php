<!-- footer begin -->
<footer class="section-dark">
    <div class="container relative z-2" style="background-size: cover; background-repeat: no-repeat;">
        <div class="row gx-5" style="background-size: cover; background-repeat: no-repeat;">
            <div class="col-lg-4 col-sm-6" style="background-size: cover; background-repeat: no-repeat;">
                <img src="<?= $baseUrl; ?>/images/brand/logo-white.png" class="logo-footer" alt="<?= $meta_brand_name; ?>">
                <div class="spacer-20" style="background-size: cover; background-repeat: no-repeat;"></div>
                <p><?= $meta_description; ?></p>

                <div class="social-icons mb-sm-30" style="background-size: cover; background-repeat: no-repeat;">
                    <a href="/"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="/"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="/"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="/"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-5 col-sm-12 order-lg-1 order-sm-2" style="background-size: cover; background-repeat: no-repeat;">
                <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="col-lg-7 col-sm-6" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="widget" style="background-size: cover; background-repeat: no-repeat;">
                            <a href="<?= $baseUrl; ?>/san-pham/">
                                <h5>Sản phẩm</h5>
                            </a>
                            <ul>
                                <?php foreach ($cat1 as $cat): ?>
                                    <li><a href="<?= $baseUrl; ?>/san-pham/?name=<?= $cat['slug']; ?>"><?= $cat['name']; ?></a></li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-sm-6" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="widget" style="background-size: cover; background-repeat: no-repeat;">
                            <h5>KSKY</h5>
                            <ul>
                                <li><a href="<?= $baseUrl; ?>/">Trang chủ</a></li>
                                <li><a href="<?= $baseUrl; ?>/du-an">Dự án</a></li>
                                <li><a href="<?= $baseUrl; ?>/dich-vu">Dịch vụ</a></li>
                                <li><a href="<?= $baseUrl; ?>/blog">Blog</a></li>
                                <li><a href="<?= $baseUrl; ?>/cong-ty">Công ty</a></li>
                                <li><a href="<?= $baseUrl; ?>/lien-he">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 order-lg-2 order-sm-1" style="background-size: cover; background-repeat: no-repeat;">
                <div class="widget" style="background-size: cover; background-repeat: no-repeat;">
                    <h5>Liên hệ</h5>

                    <div class="fw-bold text-white d-flex align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                        <i class="icofont-location-pin me-2 id-color"></i><span>Văn phòng</span>
                    </div>
                    <p class="mb-2"><?= $meta_company_address; ?></p>

                    <div class="fw-bold text-white d-flex align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                        <i class="icofont-phone me-2 id-color"></i><span>Điện thoại</span>
                    </div>
                    <p class="mb-2"><?= $meta_company_phone; ?></p>

                    <div class="fw-bold text-white d-flex align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                        <i class="icofont-envelope me-2 id-color"></i><span>Email</span>
                    </div>
                    <p class="mb-2"><?= $meta_company_email; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter" style="background-size: cover; background-repeat: no-repeat;">
        <div class="container" style="background-size: cover; background-repeat: no-repeat;">
            <div class="row" style="background-size: cover; background-repeat: no-repeat;">
                <div class="col-md-12" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="de-flex" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="de-flex-col" style="background-size: cover; background-repeat: no-repeat;">
                            © 2025 - <?= $meta_brand_name; ?>
                        </div>
                        <ul class="menu-simple">
                            <li><a href="<?= $baseUrl; ?>/dieu-khoan">Điều khoản</a></li>
                            <li><a href="<?= $baseUrl; ?>/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="abs w-50 end-0 bottom-0 op-3" style="background-size: cover; background-repeat: no-repeat;">
        <img src="<?= $baseUrl; ?>/lib/c1.webp" class="w-100 rtl-hide wow fadeInRight" data-wow-duration="2s" alt="" style="visibility: hidden; animation-duration: 2s; animation-name: none;">
        <img src="<?= $baseUrl; ?>/lib/c1-flip.webp" class="w-100 rtl-show wow fadeInLeft animated" data-wow-duration="2s" alt="" style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
    </div>
</footer>
<!-- footer end -->