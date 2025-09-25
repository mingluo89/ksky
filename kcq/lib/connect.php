<?php
require_once __DIR__ . '/config.php';

$connect = mysqli_connect($host, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");
setlocale(LC_MONETARY, 'vn_VN');
date_default_timezone_set("Asia/Bangkok");
