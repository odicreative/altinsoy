<?php
require_once __DIR__ . '/config.php';

$page = 'services';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/slider1.jpg';

require_once __DIR__ . '/includes/header.php';
?>

<!-- HÝZMETLER DETAY SAYFASI -->
<section class="services-detail-section fade-in">
    <div class="services-container">
        <div class="services-header">
            <h1>Hizmetlerimiz</h1>
            <p>5 farklý sektörde 30 yýllýk tecrübe ile kaliteli hizmet</p>
        </div>

        <div class="services-grid">
            <!-- Eðitim Hizmetleri -->
            <div class="service-detail-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/okul.jpg" alt="Nesibe Aydýn Okullarý" loading="lazy">
                </div>
                <div class="service-content">
                    <h2>Eðitim Hizmetleri</h2>
                    <h3>Nesibe Aydýn Yýldýzlar Okulu</h3>
                    <p>
                        28 Þubat 2022 tarihi itibarýyla Aksaray'da eðitim hizmeti sunan Nesibe Aydýn Yýldýzlar Okulu, 
                        modern eðitim anlayýþýyla geleceðin nesline ulaþmakta. Nitelikli öðretmen kadromuz ve 
                        güncel eðitim metotlarýmýz ile öðrencilerimizin baþarýsý için çalýþýyoruz.
                    </p>
                    <ul class="service-features">
                        <li>Modern eðitim altyapýsý</li>
                        <li>Nitelikli öðretmen kadrosu</li>
                        <li>Bilim ve sanat atölyeleri</li>
                        <li>Spor ve sosyal aktiviteler</li>
                    </ul>
                    <div class="service-actions">
                        <a href="https://yildizlarokulu.k12.tr/" target="_blank" class="service-btn primary">Web Sitesini Ziyaret Et</a>
                        <a href="tel:03822132323" class="service-btn secondary">Ara</a>
                    </div>
                </div>
            </div>

            <!-- Petrol Ýþletmesi -->
            <div class="service-detail-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/shell.jpg" alt="Shell Petrol Ýstasyonu" loading="lazy">
                </div>
                <div class="service-content">
                    <h2>Enerji Hizmetleri</h2>
                    <h3>Shell Petrol Ýstasyonu</h3>
                    <p>
                        E-90 Karayolu üzerinde bulunan modern Shell Petrol Ýstasyonumuz, yüksek kaliteli yakýt 
                        ürünleri ve hizmet anlayýþýyla sürücülerimize hizmet vermektedir. Güvenli, temiz ve 
                        hýzlý yakýt alým deneyimi sunuyoruz.
                    </p>
                    <ul class="service-features">
                        <li>Yüksek kaliteli Shell yakýtlarý</li>
                        <li>Market ve market ürünleri</li>
                        <li>Otopark ve yýkama hizmetleri</li>
                        <li>7/24 hizmet</li>
                    </ul>
                    <div class="service-actions">
                        <a href="https://www.shell.com.tr/" target="_blank" class="service-btn primary">Shell Türkiye</a>
                        <a href="tel:03822132323" class="service-btn secondary">Ara</a>
                    </div>
                </div>
            </div>

            <!-- Saðlýk Hizmetleri -->
            <div class="service-detail-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/hastane.jpg" alt="Özel Aksaray Hastanesi" loading="lazy">
                </div>
                <div class="service-content">
                    <h2>Saðlýk Hizmetleri</h2>
                    <h3>Özel Aksaray Hastanesi</h3>
                    <p>
                        2008 yýlýndan bu yana Aksaray ve çevre illerde modern saðlýk hizmeti sunan Özel Aksaray 
                        Hastanesi, deneyimli hekim kadrosu ve teknolojik altyapýsý ile hastalarýmýza saðlýklý 
                        bir gelecek sunuyor.
                    </p>
                    <ul class="service-features">
                        <li>Modern týbbi cihazlar</li>
                        <li>Deneyimli hekim kadrosu</li>
                        <li>Acil servis hizmeti</li>
                        <li>Kaliteli hasta odalarý</li>
                    </ul>
                    <div class="service-actions">
                        <a href="https://www.aksarayhastanesi.com/" target="_blank" class="service-btn primary">Web Sitesini Ziyaret Et</a>
                        <a href="tel:03822132323" class="service-btn secondary">Ara</a>
                    </div>
                </div>
            </div>

            <!-- Ýnþaat Hizmetleri -->
            <div class="service-detail-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/school.jpg" alt="Ýnþaat Projeleri" loading="lazy">
                </div>
                <div class="service-content">
                    <h2>Ýnþaat Hizmetleri</h2>
                    <h3>Modern Ýnþaat Çözümleri</h3>
                    <p>
                        1997 yýlýndan bu yana inþaat sektöründe faaliyet gösteren firmamýz, Aksaray'ýn ilk 
                        cam binasý olan Aksaray Akademi gibi çeþitli projelere imza atmýþtýr. Kaliteli malzeme 
                        ve modern inþaat teknikleri ile hayata geçirdiðimiz projelerle þehre deðer katýyoruz.
                    </p>
                    <ul class="service-features">
                        <li>Kaliteli malzeme kullanýmý</li>
                        <li>Modern inþaat teknikleri</li>
                        <li>Mimari tasarým hizmeti</li>
                        <li>Proje yönetimi</li>
                    </ul>
                    <div class="service-actions">
                        <a href="<?php echo SITE_URL; ?>/insaat" class="service-btn primary">Projelerimizi Gör</a>
                        <a href="tel:03822132323" class="service-btn secondary">Ara</a>
                    </div>
                </div>
            </div>

            <!-- Kuyumculuk Hizmetleri -->
            <div class="service-detail-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/kuyumcu.jpg" alt="Altinsoy Kuyumculuk" loading="lazy">
                </div>
                <div class="service-content">
                    <h2>Kuyumculuk Hizmetleri</h2>
                    <h3>Altinsoy Kuyumculuk</h3>
                    <p>
                        Yýllarýn tecrübesi ve kaliteli hizmet anlayýþýyla kuyumculuk sektöründe hizmet veren 
                        Altinsoy Kuyumculuk, özel tasarým takýlarý ve kaliteli altýn ürünleriyle müþterilerimize 
                        hizmet sunmaktadýr.
                    </p>
                    <ul class="service-features">
                        <li>Özel tasarým takýlar</li>
                        <li>Kaliteli altýn ürünleri</li>
                        <li>Profesyonel hizmet</li>
                        <li>Güvenilir alýþveriþ</li>
                    </ul>
                    <div class="service-actions">
                        <a href="https://www.instagram.com/altinsoykuyumculuk_/" target="_blank" class="service-btn primary">Instagram'da Takip Et</a>
                        <a href="tel:03822132323" class="service-btn secondary">Ara</a>
                    </div>
                </div>
            </div>

            <!-- Vestel Satýþ -->
            <div class="service-detail-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/vestel.jpg" alt="Vestel Satýþ Maðazasý" loading="lazy">
                </div>
                <div class="service-content">
                    <h2>Teknoloji Hizmetleri</h2>
                    <h3>Vestel Satýþ Bayii</h3>
                    <p>
                        Zorlu Holding kiracýmýz olarak faaliyet gösteren Vestel satýþ maðazamýz, son teknoloji 
                        Vestel ürünlerini müþterilerimize sunuyor. Beyaz eþya, elektronik ve klimalar gibi 
                        geniþ ürün yelpazesi ile hizmetinizdeyiz.
                    </p>
                    <ul class="service-features">
                        <li>GeniÝ ürün yelpazesi</li>
                        <li>Garantili ürünler</li>
                        <li>Uygun fiyat seçenekleri</li>
                        <li>Teknik destek hizmeti</li>
                    </ul>
                    <div class="service-actions">
                        <a href="https://www.vestel.com.tr/" target="_blank" class="service-btn primary">Vestel Türkiye</a>
                        <a href="tel:03822132323" class="service-btn secondary">Ara</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.services-detail-section {
    max-width: 1400px;
    margin: 50px auto;
    padding: 0 20px;
}

.services-container {
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.services-header {
    background: linear-gradient(135deg, #1B3B1A, #2d5a2c);
    color: white;
    text-align: center;
    padding: 60px 40px;
}

.services-header h1 {
    font-size: 48px;
    margin-bottom: 20px;
    font-weight: bold;
}

.services-header p {
    font-size: 20px;
    opacity: 0.9;
}

.services-grid {
    padding: 60px 40px;
    display: grid;
    gap: 40px;
}

.service-detail-card {
    display: grid;
    grid-template-columns: 400px 1fr;
    gap: 40px;
    background: #f8f9fa;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.service-detail-card:hover {
    transform: translateY(-5px);
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.service-content {
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.service-content h2 {
    font-size: 28px;
    color: #1B3B1A;
    margin-bottom: 10px;
    font-weight: bold;
}

.service-content h3 {
    font-size: 22px;
    color: #333;
    margin-bottom: 20px;
}

.service-content p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
    margin-bottom: 25px;
}

.service-features {
    list-style: none;
    padding: 0;
    margin-bottom: 30px;
}

.service-features li {
    padding: 8px 0;
    font-size: 15px;
    color: #555;
    position: relative;
    padding-left: 25px;
}

.service-features li::before {
    content: "â";
    position: absolute;
    left: 0;
    color: #1B3B1A;
    font-weight: bold;
}

.service-actions {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.service-btn {
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 140px;
}

.service-btn.primary {
    background: #1B3B1A;
    color: white;
}

.service-btn.primary:hover {
    background: #2d5a2c;
    transform: scale(1.05);
}

.service-btn.secondary {
    background: white;
    color: #1B3B1A;
    border: 2px solid #1B3B1A;
}

.service-btn.secondary:hover {
    background: #1B3B1A;
    color: white;
}

@media (max-width: 1024px) {
    .service-detail-card {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .service-image {
        height: 250px;
    }
    
    .service-content {
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .services-header {
        padding: 40px 20px;
    }
    
    .services-header h1 {
        font-size: 36px;
    }
    
    .services-grid {
        padding: 40px 20px;
        gap: 30px;
    }
    
    .service-content {
        padding: 25px;
    }
    
    .service-actions {
        flex-direction: column;
    }
    
    .service-btn {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
