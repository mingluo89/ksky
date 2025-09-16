<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retail Tech — Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --rt-primary: #2669fe;
            --rt-secondary: #02ccba;
            --rt-muted: #94a3b8;
        }

        :root {
            --bs-primary: var(--rt-primary);
            --bs-link-color: var(--rt-primary);
            --bs-link-hover-color: var(--rt-secondary);
        }

        body {
            background: linear-gradient(135deg, var(--rt-primary) 0%, var(--rt-secondary) 100%);
            color: #e5e7eb;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(8px);
        }

        .brand-logo {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--rt-primary), var(--rt-secondary));
            display: grid;
            place-items: center;
            color: #fff;
            font-weight: 800;
        }

        .glass {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 2rem;
        }

        .counter {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 1rem;
        }

        .card.rt {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 1rem;
        }

        .card.rt .icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, var(--rt-primary), var(--rt-secondary));
            color: #fff;
        }

        .badge-soft {
            background: rgba(2, 204, 186, 0.2);
            color: #fff;
            border-radius: 999px;
            padding: .3rem .6rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="brand-logo">RT</span> Retail Tech</a>
        </div>
    </nav>

    <header class="hero position-relative text-white">
        <style>
            :root {
                --hero-img: url('PUT_IMAGE_URL_HERE');
            }

            .hero {
                min-height: 70vh;
                display: grid;
                place-items: center;
                background:
                    linear-gradient(180deg, rgba(0, 0, 0, .35), rgba(0, 0, 0, .55)),
                    var(--hero-img);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .hero .glass {
                background: rgba(255, 255, 255, 0.12);
                border: 1px solid rgba(255, 255, 255, 0.25);
            }
        </style>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="glass p-4 p-md-5 text-center rounded-4">
                        <span class="badge bg-light text-dark mb-3"><i class="bi bi-tools me-2"></i>Under Construction</span>
                        <h1 class="display-5 fw-bold mb-2">Giải pháp bán lẻ công nghệ</h1>
                        <p class="lead mb-4">Trang đang xây — hãy quay lại trong thời gian ngắn nữa. (Thay ảnh nền bằng cách chỉnh giá trị <code>--hero-img</code> ở trên)</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="#cong-trinh" class="btn btn-light"><i class="bi bi-grid-3x3-gap me-2"></i>Công trình</a>
                            <a href="#du-an" class="btn btn-outline-light"><i class="bi bi-kanban me-2"></i>Dự án</a>
                            <a href="#lien-he" class="btn btn-outline-light"><i class="bi bi-telephone me-2"></i>Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="cong-trinh" class="py-5">
        <div class="container">
            <h2 class="text-white mb-4">Công trình</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card rt">
                        <div class="icon mb-2"><i class="bi bi-shop"></i></div>
                        <h5 class="text-white">POS Omni</h5>
                        <p>Đồng bộ tồn kho & đơn hàng giữa cửa hàng và online.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rt">
                        <div class="icon mb-2"><i class="bi bi-box-seam"></i></div>
                        <h5 class="text-white">WMS Lite</h5>
                        <p>Quản lý kho thông minh, soạn hàng theo wave.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rt">
                        <div class="icon mb-2"><i class="bi bi-graph-up"></i></div>
                        <h5 class="text-white">BI & Alerts</h5>
                        <p>Dashboard realtime & cảnh báo tự động.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="du-an" class="py-5">
        <div class="container">
            <h2 class="text-white mb-4">Dự án</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card rt">
                        <div class="icon mb-2"><i class="bi bi-rocket"></i></div>
                        <h5 class="text-white">Beta nội bộ</h5>
                        <p>POS & WMS chạy thử Q4/2025.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card rt">
                        <div class="icon mb-2"><i class="bi bi-people"></i></div>
                        <h5 class="text-white">Pilot đối tác</h5>
                        <p>Triển khai cửa hàng mẫu Q1/2026.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lien-he" class="py-5">
        <div class="container">
            <h2 class="text-white mb-4">Liên hệ</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card rt h-100">
                        <div class="icon mb-2"><i class="bi bi-telephone"></i></div>
                        <h5 class="text-white mb-1">Số điện thoại</h5>
                        <p class="mb-0"><a class="link-light text-decoration-none" href="tel:+84000000000">(+84) 000 000 000</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rt h-100">
                        <div class="icon mb-2"><i class="bi bi-envelope"></i></div>
                        <h5 class="text-white mb-1">Email</h5>
                        <p class="mb-0"><a class="link-light text-decoration-none" href="mailto:hello@retailtech.example">hello@retailtech.example</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rt h-100">
                        <div class="icon mb-2"><i class="bi bi-geo-alt"></i></div>
                        <h5 class="text-white mb-1">Địa chỉ</h5>
                        <p class="mb-0">TP. Hồ Chí Minh, Việt Nam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 text-center text-white-50">
        <div class="container">© 2025 Retail Tech. All rights reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>