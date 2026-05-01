<?php
require_once __DIR__ . '/../config.php';

// Dinamik SEO değişkenleri
$page = isset($page) ? $page : 'home';
$title = isset($title) ? $title : (isset($page_titles[$page]) ? $page_titles[$page] : 'Altinsoy Grup');
$description = isset($description) ? $description : (isset($page_descriptions[$page]) ? $page_descriptions[$page] : 'Altinsoy Grup');
$image = SITE_URL . '/assets/images/slider1.jpg';

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo escape($title); ?></title>
    <meta name="description" content="<?php echo escape($description); ?>">
    <meta name="keywords" content="Altinsoy Grup, Aksaray, saðlýk sektörü, eðitim, enerji, inþaat, petrol istasyonu, özel hastane">
    <meta name="author" content="Altinsoy Grup">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph (Facebook için) -->
    <meta property="og:title" content="<?php echo escape($title); ?>">
    <meta property="og:description" content="<?php echo escape($description); ?>">
    <meta property="og:image" content="<?php echo escape($image); ?>">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo escape($title); ?>">
    <meta name="twitter:description" content="<?php echo escape($description); ?>">
    <meta name="twitter:image" content="<?php echo escape($image); ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo SITE_URL; ?>/assets/icons/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style-new.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo-container">
                    <a href="<?php echo SITE_URL; ?>/">
                        <img src="<?php echo SITE_URL; ?>/assets/icons/logo.png" alt="ALTINSOY GRUP Logo" class="logo-img" loading="lazy">
                    </a>
                </div>
                <button class="menu-toggle" onclick="toggleMenu()">â</button>
                <div class="nav-container">
                    <nav class="nav-links">
                        <a href="<?php echo SITE_URL; ?>/" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">Anasayfa</a>
                        <a href="<?php echo SITE_URL; ?>/hakkimizda" class="<?php echo ($page == 'about') ? 'active' : ''; ?>">Hakkýmýzda</a>
                        <a href="<?php echo SITE_URL; ?>/yonetim-kurulu" class="<?php echo ($page == 'management') ? 'active' : ''; ?>">Yönetim Kurulu</a>
                        <a href="<?php echo SITE_URL; ?>/basin-odasi" class="<?php echo ($page == 'press') ? 'active' : ''; ?>">Basýn Odasý</a>              
                        <a href="<?php echo SITE_URL; ?>/hizmetler" class="<?php echo ($page == 'services') ? 'active' : ''; ?>">Hizmetlerimiz</a>
                    </nav>
                    <button class="btn btn-primary contact-btn" onclick="window.location.href='<?php echo SITE_URL; ?>/iletisim'">Ýletiþim</button>
                </div>
            </div>
        </div>
    </header>
