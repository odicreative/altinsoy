<?php
// Vercel için ana router
header('Content-Type: text/html; charset=UTF-8');

// Path'i al
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Path'i temizle
$path = str_replace('/api', '', $path);
$path = rtrim($path, '/');
$path = $path ?: '/';

// Site URL'i dinamik olarak belirle
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
define('SITE_URL', $protocol . '://' . $host);

// Config dosyasını include et
if (file_exists(__DIR__ . '/../config.php')) {
    require_once __DIR__ . '/../config.php';
} else {
    // Config dosyası yoksa varsayılan ayarlar
    $page_titles = [
        'home' => 'Altinsoy Grup - Ana Sayfa',
        'about' => 'Altinsoy Grup - Hakkımızda',
        'management' => 'Altinsoy Grup - Yönetim Kurulu',
        'press' => 'Altinsoy Grup - Basın Odası',
        'services' => 'Altinsoy Grup - Hizmetlerimiz',
        'contact' => 'Altinsoy Grup - İletişim'
    ];
    
    $page_descriptions = [
        'home' => '30 yıllık tecrübe ile Aksaray\'a değer katmaya devam ediyoruz.',
        'about' => '1994 yılından bu yana Aksaray\'a hizmet veren köklü bir aile şirketiyiz.',
        'management' => 'Yönetim kurulumuz ve liderlik vizyonumuz.',
        'press' => 'Basın bültenleri ve haberlerimiz.',
        'services' => 'Sağlık, eğitim, enerji ve inşaat sektörlerinde hizmetlerimiz.',
        'contact' => 'Bizimle iletişime geçin.'
    ];
}

// Sayfa yönlendirme
switch ($path) {
    case '/':
    case '':
        $page = 'home';
        break;
    case '/hakkimizda':
        $page = 'about';
        break;
    case '/yonetim-kurulu':
        $page = 'management';
        break;
    case '/basin-odasi':
        $page = 'press';
        break;
    case '/hizmetler':
        $page = 'services';
        break;
    case '/iletisim':
        $page = 'contact';
        break;
    default:
        // 404 sayfası
        http_response_code(404);
        echo '<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayfa Bulunamadı - Altinsoy Grup</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        h1 { color: #333; }
        a { color: #1e3a8a; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Sayfa Bulunamadı</h1>
    <p>Aradığınız sayfa mevcut değil.</p>
    <a href="/">Ana Sayfaya Dön</a>
</body>
</html>';
        exit;
}

// Title ve description ayarla
$title = isset($page_titles[$page]) ? $page_titles[$page] : 'Altinsoy Grup';
$description = isset($page_descriptions[$page]) ? $page_descriptions[$page] : 'Altinsoy Grup';
$image = SITE_URL . '/assets/images/slider1.jpg';

// İlgili sayfa dosyasını include et
$page_file = __DIR__ . '/../index-new.php';
if ($page === 'about' && file_exists(__DIR__ . '/../hakkimizda-new.php')) {
    $page_file = __DIR__ . '/../hakkimizda-new.php';
} elseif ($page === 'services' && file_exists(__DIR__ . '/../hizmetler-new.php')) {
    $page_file = __DIR__ . '/../hizmetler-new.php';
} elseif ($page === 'contact' && file_exists(__DIR__ . '/../iletisim-new.php')) {
    $page_file = __DIR__ . '/../iletisim-new.php';
}

if (file_exists($page_file)) {
    include $page_file;
} else {
    // Sayfa dosyası yoksa ana sayfayı yükle
    if (file_exists(__DIR__ . '/../index-new.php')) {
        include __DIR__ . '/../index-new.php';
    } else {
        echo '<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Kurulumda - Altinsoy Grup</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Site Kurulum Aşamasında</h1>
    <p>Sistem yöneticisi tarafından kuruluyor.</p>
</body>
</html>';
    }
}
?>
