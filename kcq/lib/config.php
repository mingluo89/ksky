<?php
// Base URL
$baseUrl = "/kcq/";

// Database
$host     = 'localhost:3306';
$username = 'comkimba66eb_admin';
$password = 'QZ9}[_A^nG&b';
$db_name  = 'ksky_master';

// Company
$meta_brand_name = "KCQ Tech";
$meta_company_name = "CÔNG TY TNHH MỘT THÀNH VIÊN KCQ";
$meta_company_phone = "0935 302 982";
$meta_company_email = "nkhoa@kcq-tech.vn";
$meta_company_web = "kcq-tech.vn";
$meta_company_address = "41/16 Phan Đình Phùng P.Tân Thành, Q. Tân Phú, TP.HCM";

// Navside Menu
$nav_side_menu = [
    [
        'id' => '1',
        'name' => 'Resources',
        'submenu' => [
            ['id' => '1', 'name' => 'Địa điểm', 'link' => 'center',  'icon' => 'apartment'],
            ['id' => '2', 'name' => 'Khoá học', 'link' => 'course',  'icon' => 'book'],
            ['id' => '3', 'name' => 'Lớp học',  'link' => 'class',   'icon' => 'interactive_space'],
            ['id' => '4', 'name' => 'Buổi học', 'link' => 'session', 'icon' => 'event'],
        ],
    ],
    [
        'id' => '2',
        'name' => 'Operations',
        'submenu' => [
            ['id' => '5', 'name' => 'Ghi danh',     'link' => 'enroll',   'icon' => 'note_alt'],
            ['id' => '6', 'name' => 'Nhắc học phí', 'link' => 'remind',   'icon' => 'notifications_active'],
            ['id' => '7', 'name' => 'Học viên',     'link' => 'student',  'icon' => 'school'],
            ['id' => '8', 'name' => 'Giáo viên',    'link' => 'teacher',  'icon' => 'local_library'],
        ],
    ],
    [
        'id' => '3',
        'name' => 'Finance',
        'submenu' => [
            ['id' => '9',  'name' => 'Phiếu thu',   'link' => 'receipt',         'icon' => 'receipt'],
            ['id' => '10', 'name' => 'Phiếu chi', 'link' => 'payment',     'icon' => 'payments'],
            ['id' => '11', 'name' => 'TK Tiền',     'link' => 'money-account',          'icon' => 'account_balance_wallet'],
        ],
    ],
    [
        'id' => '4',
        'name' => 'HR',
        'submenu' => [
            ['id' => '12', 'name' => 'Nhân viên', 'link' => 'employee',     'icon' => 'badge'],
            ['id' => '13', 'name' => 'Lương',     'link' => 'cnb',          'icon' => 'credit_card_clock'],
            ['id' => '14', 'name' => 'Acc Admin', 'link' => 'adminaccount', 'icon' => 'admin_panel_settings'],
        ],
    ],
];
