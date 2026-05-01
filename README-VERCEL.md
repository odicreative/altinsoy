# Altinsoy Grup - Vercel Dağıtımı

## 📋 Kurulum

### Vercel'e Yükleme

1. **Vercel CLI'yi kurun:**
```bash
npm i -g vercel
```

2. **Proje dizinine gidin:**
```bash
cd altinsoy1
```

3. **Vercel'e giriş yapın:**
```bash
vercel login
```

4. **Projeyi yükleyin:**
```bash
vercel
```

5. **Production için:**
```bash
vercel --prod
```

## 🏗️ Proje Yapısı

```
altinsoy1/
├── api/
│   └── index.php          # Vercel router
├── assets/
│   ├── css/
│   │   └── style-new.css  # Yeni stil dosyası
│   ├── js/
│   │   └── app-new.js     # Yeni JavaScript
│   ├── images/            # Görseller
│   └── icons/             # İkonlar
├── includes/
│   ├── header-new.php     # Yeni header
│   └── footer-new.php     # Yeni footer
├── config.php             # Site ayarları
├── vercel.json           # Vercel yapılandırması
├── package.json          # Node.js bağımlılıkları
├── .vercelignore         # Vercel'e yüklenmeyenler
├── index-new.php         # Ana sayfa
├── hakkimizda-new.php    # Hakkımızda
├── hizmetler-new.php     # Hizmetler
└── iletisim-new.php      # İletişim
```

## ⚙️ Yapılandırma

### vercel.json
- PHP dosyalarını Vercel Functions olarak çalıştırır
- Tüm istekleri `api/index.php` yönlendirir
- PHP runtime ayarları

### API Router (api/index.php)
- URL yönlendirmesi yapar
- Sayfa routing'i yönetir
- Dinamik SITE_URL belirler

## 🚀 Özellikler

- ✅ **PHP desteği** (Vercel Functions ile)
- ✅ **Responsive tasarım**
- ✅ **SEO friendly URL'ler**
- ✅ **Modern UI/UX**
- ✅ **Hızlı yükleme**
- ✅ **Mobil uyumlu**

## 📱 Sayfalar

- `/` - Ana Sayfa
- `/hakkimizda` - Hakkımızda
- `/hizmetler` - Hizmetlerimiz
- `/iletisim` - İletişim
- `/yonetim-kurulu` - Yönetim Kurulu
- `/basin-odasi` - Basın Odası

## 🔧 Geliştirme

### Local Development
```bash
vercel dev
```

### Environment Variables
Vercel dashboard'da environment variables ekleyebilirsiniz:
- `VERCEL_ENV`: production/development

## 📝 Notlar

- Vercel PHP'yi doğrudan desteklemez, bu yapılandırma Node.js üzerinden çalışır
- Tüm PHP dosyaları `api/` dizininde olmalı
- Static dosyalar (CSS, JS, images) ana dizinde kalır
- `.htaccess` dosyası Vercel'de çalışmaz, routing `vercel.json` ile yapılır

## 🐞 Hata Ayıklama

Eğer sayfa açılmazsa:
1. Vercel dashboard'da Function loglarını kontrol edin
2. `api/index.php` dosyasının varlığından emin olun
3. Path routing'in doğru çalıştığını kontrol edin
