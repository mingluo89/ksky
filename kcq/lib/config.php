<?php
function loadEnv($path)
{
    if (!file_exists($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) continue;
        [$name, $value] = explode('=', $line, 2);
        $_ENV[trim($name)] = trim($value);
    }
}
loadEnv(__DIR__ . '/../.env');

// Base URL
$baseUrl = $_ENV['BASE_URL'] ?? '/';
// Database
$host     = $_ENV['DB_HOST'] ?? 'localhost:3306';
$username = $_ENV['DB_USER'] ?? 'root';
$password = $_ENV['DB_PASS'] ?? '';
$db_name  = $_ENV['DB_NAME'] ?? 'ksky_master';

// Metadata
$meta_brand_name = "KCQ Tech";
$meta_author = "KCQ Tech";
$meta_description = "KCQ TECH chuyên cung cấp thiết bị công nghệ giá tốt nhất thị trường.";
$meta_keywords = "thiết bị công nghệ";

$meta_company_name = "CÔNG TY TNHH MỘT THÀNH VIÊN KCQ";
$meta_company_phone = "0935 302 982";
$meta_company_email = "nkhoa@kcq-tech.vn";
$meta_company_web = "kcq-tech.vn";
$meta_company_address = "41/16 Phan Đình Phùng P.Tân Thành, Q. Tân Phú, TP.HCM";

$meta_og_title = "CÔNG TY TNHH MTV KCQ";
$meta_og_description = "KCQ TECH chuyên cung cấp thiết bị công nghệ giá tốt nhất thị trường.";
$meta_og_url = "https://kcq-tech.vn/";
$meta_og_image = "https://kcq-tech.vn/images/og/logobooking5197-6675.png";

include __DIR__ . "/copy.php";
