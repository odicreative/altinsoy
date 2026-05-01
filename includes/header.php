<?php
require_once __DIR__ . '/../config.php';

// Dinamik SEO degiskenleri
$page = isset($page) ? $page : 'home';
$title = isset($title) ? $title : (isset($page_titles[$page]) ? $page_titles[$page] : 'Altinsoy Grup');
$description = isset($description) ? $description : (isset($page_descriptions[$page]) ? $page_descriptions[$page] : 'Altinsoy Grup');
$image = isset($image) ? $image : SITE_URL . '/assets/images/slider1.jpg';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo escape($title); ?></title>
    <meta name="description" content="<?php echo escape($description); ?>">
    <meta name="keywords" content="Altinsoy Grup, Aksaray, sağlık sektörü, eğitim, enerji, inşaat, petrol istasyonu, özel hastane">
    <meta name="author" content="Altinsoy Grup">
    <meta name="robots" content="index, follow">
    
    <meta property="og:title" content="<?php echo escape($title); ?>">
    <meta property="og:description" content="<?php echo escape($description); ?>">
    <meta property="og:image" content="<?php echo escape($image); ?>">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo escape($title); ?>">
    <meta name="twitter:description" content="<?php echo escape($description); ?>">
    <meta name="twitter:image" content="<?php echo escape($image); ?>">
    
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
    
    <style>
        :root {
            --brand-color: #1B3B1A;
            --brand-hover: #2d5a2c;
            --text-color: #333333;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px); /* Glassmorphism - Arka planı hafif bulanık yapar */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-wrapper a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-img {
            height: 45px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .logo-img:hover {
            transform: scale(1.05);
        }

        .main-nav {
            display: flex;
            align-items: center;
        }

        .nav-list {
            display: flex;
            gap: 32px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-list a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            font-size: 16px;
            position: relative;
            padding: 5px 0;
            transition: color 0.3s ease;
        }

        .nav-list a:hover, 
        .nav-list a.active {
            color: var(--brand-color);
        }

        /* Menü linklerinin altındaki şık çizgi animasyonu */
        .nav-list a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--brand-color);
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .nav-list a:hover::after, 
        .nav-list a.active::after {
            width: 100%;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .btn-contact {
            background-color: var(--brand-color);
            color: #ffffff;
            padding: 10px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(27, 59, 26, 0.2);
        }

        .btn-contact:hover {
            background-color: var(--brand-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(27, 59, 26, 0.3);
            color: #ffffff;
        }

        .hamburger-menu {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--brand-color);
            padding: 5px;
            transition: transform 0.3s ease;
        }

        /* Mobil Görünüm */
        @media (max-width: 992px) {
            .hamburger-menu {
                display: block;
            }

            .main-nav {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: #ffffff;
                box-shadow: 0 10px 15px rgba(0,0,0,0.05);
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0); /* Kapalı menü efekti */
                transition: clip-path 0.4s ease-in-out;
            }

            .main-nav.show {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); /* Açık menü efekti */
            }

            .nav-list {
                flex-direction: column;
                padding: 20px;
                gap: 15px;
                text-align: center;
            }

            .nav-list a {
                display: inline-block;
                padding: 10px;
                font-size: 18px;
            }

            .header-actions .btn-contact {
                display: none; /* İletişim butonunu mobilde gizledik, menü sade kalsın diye */
            }
        }
    </style>
</head>
<body>

    <header class="site-header">
        <div class="header-container">
            <div class="logo-wrapper">
                <a href="<?php echo SITE_URL; ?>/">
                    <img src="<?php echo SITE_URL; ?>/assets/icons/logo.png" alt="ALTINSOY GRUP Logo" class="logo-img" loading="lazy">
                </a>
            </div>

            <nav class="main-nav" id="main-nav">
                <ul class="nav-list">
                    <li><a href="<?php echo SITE_URL; ?>/" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">Anasayfa</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/#about" class="<?php echo ($page == 'about') ? 'active' : ''; ?>">Hakkımızda</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/yonetim-kurulu" class="<?php echo ($page == 'management') ? 'active' : ''; ?>">Yönetim Kurulu</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/basin-odasi" class="<?php echo ($page == 'press') ? 'active' : ''; ?>">Basın Odası</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/#services" class="<?php echo ($page == 'services') ? 'active' : ''; ?>">Hizmetlerimiz</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <a href="<?php echo SITE_URL; ?>/iletisim" class="btn-contact">İletişim</a>
                <button class="hamburger-menu" id="mobile-menu-btn" aria-label="Menüyü Aç">
                    <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('main-nav').classList.toggle('show');
        });
    </script>