<?php
/**
 * Altinsoy Grup - Configuration File
 * Site ayarleri ve güvenlik fonksiyonlari
 */

// Hata raporlama ayarlari (gelistirme icin)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Site ayarlari
define('SITE_URL', 'http://localhost/altinsoy1');
define('SITE_NAME', 'Altinsoy Grup');
define('SITE_EMAIL', 'info@altinsoygrup.com');

// Karakter seti
header('Content-Type: text/html; charset=utf-8');

// Guvenlik fonksiyonlari
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// XSS korumasi
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// CSRF token olustur
function generate_csrf_token() {
    if (!isset($_SESSION)) {
        session_start();
    }
    return $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// CSRF token dogrula
function verify_csrf_token($token) {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Session baslat
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Zaman dilimi ayari
date_default_timezone_set('Europe/Istanbul');

// Veritabani ayarlari (ilerisi icin)
define('DB_HOST', 'localhost');
define('DB_NAME', 'altinsoy_grup');
define('DB_USER', '');
define('DB_PASS', '');

// Sayfa basliklari
$page_titles = [
    'home' => 'Altinsoy Grup - Saðlýk, Eðitim, Enerji ve Ýnþaatta Lider',
    'about' => 'Hakkýmýzda - Altinsoy Grup',
    'services' => 'Hizmetlerimiz - Altinsoy Grup',
    'contact' => 'Ýletiþim - Altinsoy Grup',
    'management' => 'Yönetim Kurulu - Altinsoy Grup',
    'press' => 'Basýn Odasý - Altinsoy Grup',
    'construction' => 'Ýnþaat Projelerimiz - Altinsoy Grup'
];

// Meta aciklamalari
$page_descriptions = [
    'home' => 'Altinsoy Grup olarak saðlýk, eðitim, enerji ve inþaat sektörlerinde kaliteli ve yenilikçi hizmetler sunuyoruz. Güçlü altyapýmýzla geleceðe yön veriyoruz.',
    'about' => 'Altinsoy Grup hakkýmýzda detaylý bilgi. 1994 yýlýndan bu yana Aksaray\'da deðer katan projelerimize göz atýn.',
    'services' => 'Altinsoy Grup hizmetlerimiz: Eðitim, Saðlýk, Enerji, Ýnþaat ve daha fazlasý.',
    'contact' => 'Altinsoy Grup ile iletiþime geçin. Aksaray merkez ofisimizden bize ulaþabilirsiniz.',
    'management' => 'Altinsoy Grup yönetim kurulu üyeleri ve yönetim kadromuz.',
    'press' => 'Altinsoy Grup basýn açýklamalarý ve haberlerimiz.',
    'construction' => 'Altinsoy Grup inþaat projeleri ve gerçekleþtirdiðimiz önemli eserler.'
];
?>
