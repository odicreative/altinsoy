<?php
// Vercel için config dosyası
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Site URL'i dinamik olarak belirle
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
define('SITE_URL', $protocol . '://' . $host);

// Site bilgileri
define('SITE_NAME', 'Altinsoy Grup');
define('SITE_EMAIL', 'info@altinsoygrup.com');

// Sayfa başlıkları
$page_titles = [
    'home' => 'Altinsoy Grup - 30 Yıllık Tecrübe ile Aksaray\'a Değer Katıyoruz',
    'about' => 'Altinsoy Grup - Hakkımızda | 1994\'ten Beri Güven ve Tecrübe',
    'management' => 'Altinsoy Grup - Yönetim Kurulu | Liderlik ve Vizyon',
    'press' => 'Altinsoy Grup - Basın Odası | Haberler ve Duyurular',
    'services' => 'Altinsoy Grup - Hizmetlerimiz | Eğitim, Sağlık, Enerji, İnşaat',
    'contact' => 'Altinsoy Grup - İletişim | Bizimle Görüşün'
];

// Sayfa açıklamaları
$page_descriptions = [
    'home' => 'Altinsoy Grup olarak 30 yıllık tecrübemizle Aksaray\'a değer katmaya devam ediyoruz. Eğitim, sağlık, enerji ve inşaat sektörlerinde lideriz.',
    'about' => '1994 yılından bu yana Aksaray\'a hizmet veren köklü bir aile şirketiyiz. 30 yıllık tecrübemizle bölgeye değer katıyoruz.',
    'management' => 'Altinsoy Grup yönetim kurulu üyeleri ve liderlik vizyonumuz. Yılmaz Altınsoy ve Ömer Altınsoy ile tanışın.',
    'press' => 'Altinsoy Grup hakkındaki haberler, duyurular ve basın bültenleri. Medya ilişkileri ve güncel gelişmeler.',
    'services' => 'Altinsoy Grup hizmetleri: Eğitim (Nesibe Aydın Okulları), Sağlık (Özel Aksaray Hastanesi), Enerji (Shell Petrol İstasyonu), İnşaat ve Kuyumculuk.',
    'contact' => 'Altinsoy Grup ile iletişime geçin. Adres, telefon, e-posta bilgilerimiz ve iletişim formu.'
];

// Güvenlik fonksiyonları
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// CSRF token fonksiyonları
function generate_csrf_token() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
    return $token;
}

function verify_csrf_token($token) {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Email gönderme fonksiyonu (Vercel için)
function send_email($to, $subject, $message, $from = '') {
    // Vercel'de email göndermek için external service kullanılabilir
    // Şimdilik sadece loglama yapıyoruz
    error_log("Email gönderme denemesi: To: $to, Subject: $subject");
    return true;
}

// Hata yönetimi
function handle_error($errno, $errstr, $errfile, $errline) {
    error_log("Error: [$errno] $errstr in $errfile on line $errline");
    return false;
}

// Hata yakalama
set_error_handler('handle_error');

// Session başlat
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
