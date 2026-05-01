<?php
require_once __DIR__ . '/config.php';

$page = 'press';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/slider1.jpg';

require_once __DIR__ . '/includes/header.php';
?>

<!-- BASIN ODASI SAYFASI -->
<section class="press-section fade-in">
    <div class="press-container">
        <div class="press-header">
            <h1>Basın Odası</h1>
            <p>ALTINSOY GRUP haber ve duyuruları</p>
        </div>

        <div class="press-content">
            <div class="press-intro">
                <p>
                    ALTINSOY GRUP olarak 30 yıllık tecrübemiz boyunca gerçekleştirdiğimiz projeler, 
                    aldığımız ödüller ve yaptığımız açıklamalar ile basın kamuoyunu bilgilendiriyoruz. 
                    Medya kuruluşlarının ve haber kaynaklarımız için resmi duyurularımız bu sayfada yer almaktadır.
                </p>
            </div>

            <div class="press-categories">
                <div class="category-tabs">
                    <button class="tab-btn active" onclick="showCategory('all')">Tümü</button>
                    <button class="tab-btn" onclick="showCategory('haber')">Haberler</button>
                    <button class="tab-btn" onclick="showCategory('duyuru')">Duyurular</button>
                    <button class="tab-btn" onclick="showCategory('odul')">Ödüller</button>
                </div>
            </div>

            <div class="press-grid" id="pressGrid">
                <!-- Haber 1 -->
                <article class="press-item" data-category="haber">
                    <div class="press-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/okul.jpg" alt="Nesibe Aydın Yıldızlar Okulu Açılışı" loading="lazy">
                    </div>
                    <div class="press-content">
                        <div class="press-meta">
                            <span class="date">28 Şubat 2022</span>
                            <span class="category">Haber</span>
                        </div>
                        <h3>Nesibe Aydın Yıldızlar Okulu Açıldı</h3>
                        <p>
                            ALTINSOY GRUP eğitim yatırımlarımıza yeni bir halka daha ekledi. 
                            28 Şubat 2022 tarihinde Nesibe Aydın Yıldızlar Okulu'nun açılış töreni gerçekleştirildi.
                        </p>
                        <a href="#" class="read-more">Devamýný Oku â</a>
                    </div>
                </article>

                <!-- Duyuru 1 -->
                <article class="press-item" data-category="duyuru">
                    <div class="press-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/hastane.jpg" alt="Özel Aksaray Hastanesi Yeni Yatırım" loading="lazy">
                    </div>
                    <div class="press-content">
                        <div class="press-meta">
                            <span class="date">15 Ocak 2021</span>
                            <span class="category">Duyuru</span>
                        </div>
                        <h3>Özel Aksaray Hastanesi'ne Yeni Yatırım</h3>
                        <p>
                            Sağlık sektöründeki hizmet kalitemizi artırmak için Özel Aksaray Hastanesi'ne 
                            yeni tıbbi cihazlar ve teknolojik altyapı yatırımı gerçekleştirdik.
                        </p>
                        <a href="#" class="read-more">Devamýný Oku â</a>
                    </div>
                </article>

                <!-- Ödül 1 -->
                <article class="press-item" data-category="odul">
                    <div class="press-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/school.jpg" alt="İnşaat Sektörü Ödülü" loading="lazy">
                    </div>
                    <div class="press-content">
                        <div class="press-meta">
                            <span class="date">10 Aralýk 2020</span>
                            <span class="category">Ödül</span>
                        </div>
                        <h3>Yılın İnşaat Projesi Ödülü</h3>
                        <p>
                            Aksaray Akademi projesimiz ile "Yılın İnşaat Projesi" ödülünü kazandık. 
                            Modern mimarisi ve çevre dostu tasarımıyla takdir topladık.
                        </p>
                        <a href="#" class="read-more">Devamýný Oku â</a>
                    </div>
                </article>

                <!-- Haber 2 -->
                <article class="press-item" data-category="haber">
                    <div class="press-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/shell.jpg" alt="Shell Petrol İstasyonu Yenilendi" loading="lazy">
                    </div>
                    <div class="press-content">
                        <div class="press-meta">
                            <span class="date">5 Haziran 2020</span>
                            <span class="category">Haber</span>
                        </div>
                        <h3>Shell Petrol İstasyonu Modernize Edildi</h3>
                        <p>
                            E-90 Karayolu üzerinde bulunan Shell Petrol İstasyonumuz kapsamlı yenileme 
                            çalışmalarının ardından modern hizmet anlayışıyla yeniden hizmete açıldı.
                        </p>
                        <a href="#" class="read-more">Devamýný Oku â</a>
                    </div>
                </article>

                <!-- Duyuru 2 -->
                <article class="press-item" data-category="duyuru">
                    <div class="press-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/kuyumcu.jpg" alt="Altinsoy Kuyumculuk Yeni Mağaza" loading="lazy">
                    </div>
                    <div class="press-content">
                        <div class="press-meta">
                            <span class="date">20 Mart 2019</span>
                            <span class="category">Duyuru</span>
                        </div>
                        <h3>Altinsoy Kuyumculuk Yeni Mağaza Açtı</h3>
                        <p>
                            Kuyumculuk sektöründeki faaliyetlerimize yeni mağazamız ile devam ediyoruz. 
                            Özel tasarım takılarımız ve kaliteli hizmet anlayışımız ile müşterilerimize hizmet sunuyoruz.
                        </p>
                        <a href="#" class="read-more">Devamýný Oku â</a>
                    </div>
                </article>

                <!-- Haber 3 -->
                <article class="press-item" data-category="haber">
                    <div class="press-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/hakkimizda.png" alt="30. Yıl Kutlamaları" loading="lazy">
                    </div>
                    <div class="press-content">
                        <div class="press-meta">
                            <span class="date">1 Ocak 2024</span>
                            <span class="category">Haber</span>
                        </div>
                        <h3>30. Yılımız Kutladık</h3>
                        <p>
                            1994 yılından bu yana süregiden ticari hayatımızın 30. yılını büyük bir coşkuyla kutladık. 
                            Çalışanlarımız ve iş ortaklarımız ile birlikte bu özel günü andık.
                        </p>
                        <a href="#" class="read-more">Devamýný Oku â</a>
                    </div>
                </article>
            </div>

            <div class="press-contact">
                <div class="contact-info">
                    <h2>Basın İlişkileri</h2>
                    <p>
                        Medya kuruluşları ve gazeteciler için basın açıklamalarımız, haberlerimiz ve 
                        diğer duyurularımız hakkında bilgi almak için bizimle iletişime geçebilirsiniz.
                    </p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <h3>ð Adres</h3>
                            <p>Aksaray, Türkiye<br>Merkez, 68</p>
                        </div>
                        <div class="contact-item">
                            <h3>ð Telefon</h3>
                            <p><a href="tel:03822132323">0382 213 23 23</a></p>
                        </div>
                        <div class="contact-item">
                            <h3>ð E-posta</h3>
                            <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.press-section {
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
}

.press-container {
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.press-header {
    background: linear-gradient(135deg, #1B3B1A, #2d5a2c);
    color: white;
    text-align: center;
    padding: 60px 40px;
}

.press-header h1 {
    font-size: 48px;
    margin-bottom: 20px;
    font-weight: bold;
}

.press-header p {
    font-size: 20px;
    opacity: 0.9;
}

.press-content {
    padding: 60px 40px;
}

.press-intro {
    text-align: center;
    margin-bottom: 60px;
}

.press-intro p {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
    max-width: 800px;
    margin: 0 auto;
}

.press-categories {
    margin-bottom: 40px;
}

.category-tabs {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.tab-btn {
    padding: 12px 24px;
    background: #f8f9fa;
    border: 2px solid transparent;
    border-radius: 25px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    color: #666;
    transition: all 0.3s ease;
}

.tab-btn:hover {
    background: #e9ecef;
}

.tab-btn.active {
    background: #1B3B1A;
    color: white;
    border-color: #1B3B1A;
}

.press-grid {
    display: grid;
    gap: 30px;
    margin-bottom: 60px;
}

.press-item {
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 30px;
    background: #f8f9fa;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.press-item:hover {
    transform: translateY(-5px);
}

.press-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.press-content {
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.press-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.date {
    font-size: 14px;
    color: #666;
}

.category {
    background: #1B3B1A;
    color: white;
    padding: 4px 12px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: bold;
}

.press-content h3 {
    font-size: 22px;
    color: #333;
    margin-bottom: 15px;
    font-weight: bold;
}

.press-content p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
    margin-bottom: 20px;
}

.read-more {
    color: #1B3B1A;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    align-self: flex-start;
    transition: color 0.3s ease;
}

.read-more:hover {
    color: #2d5a2c;
}

.press-contact {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
}

.press-contact h2 {
    font-size: 32px;
    color: #1B3B1A;
    margin-bottom: 20px;
}

.press-contact p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
    margin-bottom: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.contact-details {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.contact-item {
    text-align: center;
}

.contact-item h3 {
    font-size: 18px;
    color: #1B3B1A;
    margin-bottom: 10px;
}

.contact-item p {
    font-size: 14px;
    color: #666;
    margin: 0;
}

.contact-item a {
    color: #1B3B1A;
    text-decoration: none;
    font-weight: bold;
}

.contact-item a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .press-header {
        padding: 40px 20px;
    }
    
    .press-header h1 {
        font-size: 36px;
    }
    
    .press-content {
        padding: 40px 20px;
    }
    
    .category-tabs {
        gap: 10px;
    }
    
    .tab-btn {
        padding: 10px 20px;
        font-size: 14px;
    }
    
    .press-item {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .press-image {
        height: 200px;
    }
    
    .press-content {
        padding: 25px;
    }
    
    .contact-details {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}

.hidden {
    display: none !important;
}
</style>

<script>
function showCategory(category) {
    const items = document.querySelectorAll('.press-item');
    const buttons = document.querySelectorAll('.tab-btn');
    
    // Butonlarý güncelle
    buttons.forEach(btn => {
        btn.classList.remove('active');
        if (btn.textContent.toLowerCase().includes(category) || 
            (category === 'all' && btn.textContent === 'Tümü')) {
            btn.classList.add('active');
        }
    });
    
    // Ýtemleri göster/gizle
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.classList.remove('hidden');
        } else {
            item.classList.add('hidden');
        }
    });
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
