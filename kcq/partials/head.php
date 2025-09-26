<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $meta_brand_name; ?></title>
    <meta content="KSKY" name="author" value="<?= $meta_author; ?>">
    <meta content="KSKY" name="description" value="<?= $meta_description; ?>">
    <meta content="KSKY" name="keywords" value="<?= $meta_keywords; ?>">
    <link rel="icon" href="<?= $baseUrl; ?>/images/brand/logo.ico" type="image/gif" sizes="16x16">
    <link rel="icon" type="image/svg" sizes="96x96" href="<?= $baseUrl; ?>/images/brand/icon.png">
    <link rel="manifest" href="<?= $baseUrl; ?>/manifest.json?v=1">

    <!-- PWA Color scheme -->
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#FFFFFF" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#FFFFFF" media="(prefers-color-scheme: dark)">

    <!-- PWA Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="<?= $meta_brand_name; ?>">
    <link rel="apple-touch-icon" href="<?= $baseUrl; ?>/images/brand/apple-touch-icon-180x180.png?v=10">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $baseUrl; ?>/images/brand/apple-touch-icon-120x120.png?v=10">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $baseUrl; ?>/images/brand/apple-touch-icon-152x152.png?v=10">
    <link rel="apple-touch-icon" sizes="167x167" href="<?= $baseUrl; ?>/images/brand/apple-touch-icon-167x167.png?v=10">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $baseUrl; ?>/images/brand/apple-touch-icon-180x180.png?v=10">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= $meta_og_title; ?>">
    <meta property="og:description" content="<?= $meta_og_description; ?>">
    <meta property="og:image" content="<?= $meta_og_image; ?>">
    <meta property="og:url" content="<?= $meta_og_url; ?>">
    <meta property="og:type" content="website">

    <!-- Bootstrap 5.3.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Google Font & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Icofont -->
    <link rel="stylesheet" href="<?= $baseUrl; ?>/lib/css/icofont.min.css">

    <!-- Font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="<?= $baseUrl; ?>/lib/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="<?= $baseUrl; ?>/lib/css/swiper.css" rel="stylesheet" type="text/css">
    <link href="<?= $baseUrl; ?>/lib/css/style.css?v=4" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link id="colors" href="<?= $baseUrl; ?>/lib/css/style.css?v=1" rel="stylesheet" type="text/css">
</head>