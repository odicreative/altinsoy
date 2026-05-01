<?php
require_once __DIR__ . '/config.php';

$page = 'management';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/slider1.jpg';

require_once __DIR__ . '/includes/header.php';
?>

<section class="management-section fade-in">
    <div class="management-container">
        <div class="management-header">
            <h1>Yönetim Kurulu</h1>
            <p>ALTINSOY GRUP yönetim kadromuz</p>
        </div>

        <div class="management-content">
            <div class="management-intro">
                <p>
                    ALTINSOY GRUP, 1994 yılından bu yana Aksaray ve çevresinde hizmet veren köklü bir aile şirketidir. 
                    Kurucularımız Yılmaz ve Ömer Altınsoy'un vizyonu ile başlayan bu yolculukta, 
                    günümüzde de aynı değerler ve misyon ile faaliyetlerimize devam ediyoruz.
                </p>
            </div>

            <div class="management-grid">
                <div class="management-card">
                    <div class="member-photo">
                        <img src="<?php echo SITE_URL; ?>/assets/images/genel_baskan.jpg" alt="Yılmaz Altınsoy" loading="lazy">
                    </div>
                    <div class="member-info">
                        <h3>Yılmaz Altınsoy</h3>
                        <h4>Kurucu & Yönetim Kurulu Başkanı</h4>
                        <p>
                            <?php 
                                $yilmaz_altinsoy_detay = "
                                    01.12.1969 tarihinde Aksaray'da doğdu.
                                    İlk, orta, lise ve üniversite eğitimini Aksaray'da tamamladı.
                                    1991 yılında Bursa Polis Okulu'ndan mezun oldu ve 1991-1994 yılları arasında Amasya Emniyet Müdürlüğü'nde görev yaptı.
                                    1994 yılında Aksaray Köy Hizmetleri İl Müdürlüğü'ne yatay geçiş yaparak Makine İkmal şube Müdürlüğü bünyesinde Atölye Mühendisliği, İkmal Mühendisliği ve İşletme Mühendisliği görevlerinde bulundu.
                                    2008 yılında Aksaray Valiliği tarafından Destek Hizmetleri Müdürü olarak atandı.
                                    2012 yılında Aksaray İl Özel İdaresi'nde Genel Sekreter Yardımcısı olarak görevlendirildi.
                                    Günümüzde Aksaray'da çeşitli ticari ve sosyal faaliyetlerde aktif olarak yer almaktadır.
                                ";
                                echo $yilmaz_altinsoy_detay;
                            ?>
                        </p>
                        <div class="member-achievements">
                            <h5>Başarılar:</h5>
                            <ul>
                                <?php 
                                    $yilmaz_altinsoy_basarilar = array(
                                        "Aksaray Köy Hizmetleri İl Müdürlüğü (1994-2008)",
                                        "Aksaray Valiliği Destek Hizmetleri Müdürü (2008-2012)",
                                        "Aksaray İl Özel İdaresi Genel Sekreter Yardımcısı (2012-2024)",
                                        "30+ Yıl Kamu Deneyimi",
                                        "Çeşitli Sektörde Yatırım"
                                    );
                                    foreach ($yilmaz_altinsoy_basarilar as $basari) {
                                        echo "<li>$basari</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="management-card">
                    <div class="member-photo">
                        <img src="<?php echo SITE_URL; ?>/assets/images/yardimci.jpg" alt="Ömer Altınsoy" loading="lazy">
                    </div>
                    <div class="member-info">
                        <h3>Ömer Altınsoy</h3>
                        <h4>Yönetim Kurulu Üyesi</h4>
                        <?php 
                            $omer_altinsoy_detay = "
                                20.05.1997 tarihinde Aksaray'da doğdu.
                                İlk, orta, lise eğitimini Aksaray'da tamamladı.
                                Üniversite eğitimini 2019 yılında Nuh Naci Yazgan Üniversitesi Güzel Sanatlar ve Tasarım Fakültesi Mimarlık bölümünden Mimar olarak mezun oldu.
                                Altınsoy şirketler Grubunun İnşaat, Eğitim ve Petrol sektöründen sorumluluklarına devam etmektedir.
                                Günümüzde Aksaray'da çeşitli ticari ve sosyal faaliyetlerde aktif olarak yer almaktadır.
                            ";
                            echo "<p>$omer_altinsoy_detay</p>";
                        ?>
                        <div class="member-achievements">
                            <h5>Başarılar:</h5>
                            <ul>
                                <?php 
                                    $omer_altinsoy_basarilar = array(
                                        "Nuh Naci Yazgan Üniversitesi Mimarlık Mezunu (2019)",
                                        "İnşaat, Eğitim ve Petrol Sektörü Yöneticisi",
                                        "Çeşitli Proje Geliştirme",
                                        "Tasarım ve Planlama Uzmanlığı"
                                    );
                                    foreach ($omer_altinsoy_basarilar as $basari) {
                                        echo "<li>$basari</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="management-vision">
                <h2>Yönetim Felsefemiz</h2>
                <div class="vision-grid">
                    <div class="vision-item">
                        <div class="vision-icon">🛡️</div>
                        <h3>Güvenilirlik</h3>
                        <p>30 yıllık tecrübemizle müşterilerimize ve paydaşlarımıza karşı hep güvenilir olmaya çalıştık.</p>
                    </div>
                    <div class="vision-item">
                        <div class="vision-icon">💡</div>
                        <h3>Yenilikçilik</h3>
                        <p>Sektörlerdeki yenilikleri takip ederek modern çözümler sunuyor ve geleceğe yön veriyoruz.</p>
                    </div>
                    <div class="vision-item">
                        <div class="vision-icon">⭐</div>
                        <h3>Kalite</h3>
                        <p>Tüm hizmetlerimizde en yüksek kalite standartlarını benimseyerek mükemmellik hedefliyoruz.</p>
                    </div>
                    <div class="vision-item">
                        <div class="vision-icon">🌍</div>
                        <h3>Sorumluluk</h3>
                        <p>Topluma ve çevreye karşı sorumluluk bilinciyle hareket ederek sürdürülebilir değer yaratıyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="management-stats">
                <h2>Yönetim Başarılarımız</h2>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">30+</div>
                        <div class="stat-label">Yıl Yönetim Tecrübesi</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Farklı Sektör</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">300+</div>
                        <div class="stat-label">Çalışan</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Mutlu Müşteri</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.management-section {
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
}

.management-container {
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.management-header {
    background: linear-gradient(135deg, #1B3B1A, #2d5a2c);
    color: white;
    text-align: center;
    padding: 60px 40px;
}

.management-header h1 {
    font-size: 48px;
    margin-bottom: 20px;
    font-weight: bold;
}

.management-header p {
    font-size: 20px;
    opacity: 0.9;
}

.management-content {
    padding: 60px 40px;
}

.management-intro {
    text-align: center;
    margin-bottom: 60px;
}

.management-intro p {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
    max-width: 800px;
    margin: 0 auto;
}

.management-grid {
    display: grid;
    gap: 40px;
    margin-bottom: 60px;
}

.management-card {
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: 40px;
    background: #f8f9fa;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.management-card:hover {
    transform: translateY(-5px);
}

.member-photo {
    background: #1B3B1A;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.member-photo img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid white;
}

.member-info {
    padding: 40px;
}

.member-info h3 {
    font-size: 28px;
    color: #1B3B1A;
    margin-bottom: 10px;
    font-weight: bold;
}

.member-info h4 {
    font-size: 18px;
    color: #666;
    margin-bottom: 20px;
    font-weight: normal;
}

.member-info p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 25px;
}

.member-achievements h5 {
    font-size: 16px;
    color: #1B3B1A;
    margin-bottom: 10px;
    font-weight: bold;
}

.member-achievements ul {
    list-style: none;
    padding: 0;
}

.member-achievements li {
    padding: 5px 0;
    font-size: 14px;
    color: #666;
    position: relative;
    padding-left: 20px;
}

.member-achievements li::before {
    content: "\2713";
    position: absolute;
    left: 0;
    color: #1B3B1A;
    font-weight: bold;
}

.management-vision {
    margin-bottom: 60px;
}

.management-vision h2 {
    font-size: 36px;
    color: #1B3B1A;
    margin-bottom: 40px;
    text-align: center;
}

.vision-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.vision-item {
    text-align: center;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 12px;
    transition: transform 0.3s ease;
}

.vision-item:hover {
    transform: translateY(-5px);
}

.vision-icon {
    font-size: 48px;
    margin-bottom: 20px;
    color: #1B3B1A;
}

.vision-item h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 15px;
}

.vision-item p {
    font-size: 14px;
    line-height: 1.5;
    color: #666;
}

.management-stats h2 {
    font-size: 36px;
    color: #1B3B1A;
    margin-bottom: 40px;
    text-align: center;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
}

.stat-item {
    text-align: center;
    padding: 30px;
    background: linear-gradient(135deg, #1B3B1A, #2d5a2c);
    color: white;
    border-radius: 12px;
}

.stat-number {
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 10px;
}

.stat-label {
    font-size: 16px;
    opacity: 0.9;
}

@media (max-width: 768px) {
    .management-header {
        padding: 40px 20px;
    }
    
    .management-header h1 {
        font-size: 36px;
    }
    
    .management-content {
        padding: 40px 20px;
    }
    
    .management-card {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .member-photo {
        height: 200px;
    }
    
    .member-info {
        padding: 30px;
    }
    
    .vision-grid, .stats-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>