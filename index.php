<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KSKY Tech — Coming Soon</title>
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
            <a class="navbar-brand" href="#">
                <div class="d-flex align-items-center gap-2">
                    <img src="https://admin.ksky.vn/img/logo.png" width="100" alt="KSKY LOGO" class="brand-logo">
                    <p style="font-size:20px; letter-spacing:2px;" class="mb-0 fw-bold">KSKY</p>
                </div>
            </a>
        </div>
    </nav>

    <header class="text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold text-white">Coming Soon</h1>
            <p class="lead">Giải pháp bán lẻ công nghệ hiện đại — Under Construction</p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <div class="counter">
                    <h3>00</h3><span>Ngày</span>
                </div>
                <div class="counter">
                    <h3>00</h3><span>Giờ</span>
                </div>
                <div class="counter">
                    <h3>00</h3><span>Phút</span>
                </div>
                <div class="counter">
                    <h3>00</h3><span>Giây</span>
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
            <form class="glass">
                <div class="mb-3">
                    <label class="form-label">Họ tên</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Lời nhắn</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Gửi</button>
            </form>
        </div>
    </section>

    <footer class="py-4 text-center text-white-50">
        <div class="container">© 2025 Retail Tech. All rights reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>