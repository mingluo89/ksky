<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KSKY — Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
                <div class="d-flex align-items-center gap-4">
                    <img src="https://admin.ksky.vn/img/logo.png" alt="" width="80">
                    <h3 class="fw-bold">KSKY</h3>
                </div>
            </a>
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
                        <span class="badge bg-light text-dark mb-3"><i class="bi bi-tools me-2"></i>Website đang xây dựng</span>
                        <h1 class="display-5 fw-bold mb-2">COMING SOON</h1>
                        <p class="lead mb-4">Hãy quay lại trong thời gian ngắn nữa.</p>
                        <!-- <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="#cong-trinh" class="btn btn-light"><i class="bi bi-grid-3x3-gap me-2"></i>Công trình</a>
                            <a href="#du-an" class="btn btn-outline-light"><i class="bi bi-kanban me-2"></i>Dự án</a>
                            <a href="#lien-he" class="btn btn-outline-light"><i class="bi bi-telephone me-2"></i>Liên hệ</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer class="py-4 text-white-50">
        <div class="container">
            <h5 class="text-white fw-bold text-lg mb-3">CÔNG TY TNHH KSKY</h5>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="material-symbols-outlined text-white" style="font-size: 16px;">domain</span>
                <p class="mb-0 text-white">Mã số thuế: 0318422194</p>
            </div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="material-symbols-outlined text-white" style="font-size: 16px;">phone</span>
                <a href="tel:0981776666" class="text-white text-decoration-none">0981776666</a>
            </div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="material-symbols-outlined text-white" style="font-size: 16px;">email</span>
                <a href="mailto:admin@ksky.vn" class="text-white text-decoration-none">admin@ksky.vn</a>
            </div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="material-symbols-outlined text-white" style="font-size: 16px;">place</span>
                <p class="mb-0 text-white">316 Lê Văn Sỹ, Phường 1, Quận Tân Bình, Thành phố Hồ Chí Minh, Việt Nam</p>
            </div>
            <p class="mt-3">© 2025 KSKY. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>