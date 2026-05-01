# ALTINSOY GRUP - PHP Web Sitesi

Mevcut HTML tabanlý kurumsal web sitesinin tamamen PHP tabanlý, modüler ve ölçeklenebilir bir yapýya dönüþtürülmüþ hali.

## Proje Özellikleri

### Ýçerik Yönetim Sistemi
- **Modüler Yapý**: Header, Footer ve içerikler ayrý dosyalarda
- **Dinamik SEO**: Her sayfa için özel title, description ve image
- **Güvenlik**: XSS korumasý, CSRF token, input sanitizasyonu
- **URL Yönlendirme**: SEO uyumlu URL yapýsý (.htaccess)

### Teknik Özellikler
- **PHP 7.4+**: Modern PHP yapýsý
- **Responsive Design**: Mobil uyumlu tasarým
- **Lazy Loading**: Görsel optimizasyonu
- **Browser Cache**: Performans optimizasyonu
- **Security Headers**: Güvenlik önlemleri

## Dosya Yapýsý

```
altinsoy1/
âââ config.php              # Site ayarlarý ve güvenlik fonksiyonlarý
âââ index.php               # Ana sayfa
âââ hakkimizda.php           # Hakkýmýzda sayfasý
âââ hizmetler.php            # Hizmetler sayfasý
âââ iletisim.php             # Ýletiþim formu
âââ yonetim-kurulu.php       # Yönetim kurulu
âââ basin-odasi.php          # Basýn odasý
âââ insaat.php               # Ýnþaat projeleri
âââ .htaccess               # SEO URL ve güvenlik ayarlarý
âââ includes/
    âââ header.php           # Dinamik header
    âââ footer.php           # Dinamik footer
âââ assets/
    âââ css/
    â   âââ style.css        # Tüm CSS kodlarý
    âââ js/
        âââ app.js           # JavaScript kodlarý
    âââ icons/               # Logo ve ikonlar
    âââ images/              # Görseller
```

## Sayfalar

### Ana Sayfa (index.php)
- Slider (otomatik geçiþ)
- Hakkýmýzda bölümü
- Hizmetler kartlarý (modal açýlýr)

### Hakkýmýzda (hakkimizda.php)
- Tarihçe zaman çizelgesi
- Deðerlerimiz
- Vizyon ve misyon
- Ýstatistikler

### Hizmetler (hizmetler.php)
- 6 ana hizmet kategorisi
- Detaylý hizmet açýklamalarý
- Özellik listeleri
- Ýletiþim butonlarý

### Ýletiþim (iletisim.php)
- PHP POST form iþlemi
- CSRF korumasý
- Form validasyonu
- Google Maps entegrasyonu

### Diðer Sayfalar
- **Yönetim Kurulu**: Yönetim kadrosu ve felsefe
- **Basýn Odasý**: Haberler ve duyurular
- **Ýnþaat**: Tamamlanan projeler

## Güvenlik Özellikleri

### Input Sanitizasyonu
```php
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}
```

### CSRF Korumasý
```php
function generate_csrf_token() {
    return $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
```

### XSS Korumasý
```php
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
```

## SEO URL Yapýsý

### .htaccess Kurallarý
```apache
RewriteEngine On
RewriteRule ^hakkimizda$ hakkimizda.php [L]
RewriteRule ^hizmetler$ hizmetler.php [L]
RewriteRule ^iletisim$ iletisim.php [L]
```

### URL'ler
- `/` -> Ana Sayfa
- `/hakkimizda` -> Hakkýmýzda
- `/hizmetler` -> Hizmetler
- `/iletisim` -> Ýletiþim
- `/yonetim-kurulu` -> Yönetim Kurulu
- `/basin-odasi` -> Basýn Odasý
- `/insaat` -> Ýnþaat Projeleri

## Performans Optimizasyonu

### Browser Cache
```apache
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
</IfModule>
```

### Lazy Loading
```html
<img src="..." alt="..." loading="lazy">
```

### Sýkýþtýrma
```apache
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/javascript
</IfModule>
```

## Kurulum

### Gereksinimler
- PHP 7.4 veya üzeri
- Apache Web Sunucusu
- mod_rewrite etkin

### Adýmlar
1. Dosyalarý sunucuya yükle
2. `config.php` dosyasýndaki SITE_URL ayarýný güncelle
3. `.htaccess` dosyasýnýn çalýþtýðýndan emin ol
4. E-posta gönderimi için PHP mail ayarlarýný yap

## Gelecek Geliþmeler

### Veritabaný Entegrasyonu
- Haber yönetimi
- Proje yönetimi
- Ýletiþim form kayýtlarý

### Admin Paneli
- içerik yönetimi
- haber ekleme/düzenleme
- istatistikler

### API Entegrasyonu
- Harita servisleri
- Sosyal medya
- E-posta servisleri

## Lisans

Bu proje ALTINSOY GRUP için özel olarak geliþtirilmiþtir.

## Destek

Teknik destek ve geliþtirme için:
- E-posta: info@altinsoygrup.com
- Telefon: 0382 213 23 23

---

**Not**: Bu proje HTML'den PHP'ye tam dönüþüm saðlamýþ olup, mevcut tasarým korunmuþ ve modern PHP pratikleri ile geliþtirilmiþtir.
