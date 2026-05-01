<?php
require_once __DIR__ . '/config.php';

$page = 'about';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/hakkimizda.png';

require_once __DIR__ . '/includes/header.php';
?>

<!-- HAKKIMIZDA DETAY SAYFASI -->
<section class="about-detail-section fade-in">
    <div class="about-container">
        <div class="about-header">
            <h1>Hakkýmýzda</h1>
            <p>1994 yýlýndan bu yana Aksaray'a deðer katan güçlü aile þirketi</p>
        </div>

        <div class="about-content">
            <div class="about-timeline">
                <h2>Tarihimiz</h2>
                
                <div class="timeline-item">
                    <div class="year">1994</div>
                    <div class="description">
                        <h3>Baþlangýç</h3>
                        <p>Mahir, Yýlmaz ve Zeki Altýnsoy tarafýndan Vestel Aksaray Satýþ Bayiliði ile ticari hayata adým attýk.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="year">1997</div>
                    <div class="description">
                        <h3>Ýnþaat Sektörü</h3>
                        <p>Ýnþaat malzemeleri ardýyesi kurarak inþaat sektörüne giriþ yaptýk.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="year">2004</div>
                    <div class="description">
                        <h3>Eðitim Yatýrýmý</h3>
                        <p>Aksaray'ýn ilk cam binasý olan Aksaray Akademi'yi hayata geçirdik.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="year">2008</div>
                    <div class="description">
                        <h3>Saðlýk Sektörü</h3>
                        <p>Özel Aksaray Hastanesi ortaklýðýna dahil olarak saðlýk sektörüne adým attýk.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="year">2011</div>
                    <div class="description">
                        <h3>Eðitimde Devam</h3>
                        <p>Birey Dershanesi ile eðitim yatýrýmlarýmýz devam etti.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="year">2022</div>
                    <div class="description">
                        <h3>Nesibe Aydýn Yýldýzlar Okulu</h3>
                        <p>28 Þubat 2022'de Nesibe Aydýn Yýldýzlar Okulu olarak eðitim faaliyetlerimize devam ediyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="about-values">
                <h2>Deðerlerimiz</h2>
                
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">ð</div>
                        <h3>Güvenilirlik</h3>
                        <p>1994'den beri süregelen güvenilir hizmet anlayýþýmýz ile müþterilerimizin takdirini kazandýk.</p>
                    </div>

                    <div class="value-card">
                        <div class="value-icon">â</div>
                        <h3>Yenilikçilik</h3>
                        <p>Sektörlerdeki yenilikleri takip ederek modern çözümler sunuyoruz.</p>
                    </div>

                    <div class="value-card">
                        <div class="value-icon">â</div>
                        <h3>Kalite</h3>
                        <p>Tüm hizmetlerimizde en yüksek kalite standartlarýný benimsiyoruz.</p>
                    </div>

                    <div class="value-card">
                        <div class="value-icon">â</div>
                        <h3>Sorumluluk</h3>
                        <p>Aksaray ve çevresine karþý sosyal sorumluluk bilinciyle hareket ediyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="about-stats">
                <h2>Büyüklüðümüz</h2>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">300+</div>
                        <div class="stat-label">Çalýþan</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Sektör</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">30+</div>
                        <div class="stat-label">Yýl Deneyim</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Mutlu Müþteri</div>
                    </div>
                </div>
            </div>

            <div class="about-vision">
                <h2>Vizyonumuz</h2>
                <p>
                    ALTINSOY GRUP olarak vizyonumuz; faaliyet gösterdiðimiz tüm sektörlerde lider konumda olmak, 
                    yenilikçi çözümlerle sektöre yön vermek ve topluma deðer katan projelere imza atmaktýr. 
                    Aksaray'ýn ve bölgemizin kalkýnmasýna katký saðlarken, çalýþanlarýmýz için ideal bir 
                    çalýþma ortamý yaratmak ve müþterilerimizin beklentilerini aþmak temel hedeflerimiz arasýndadýr.
                </p>
            </div>

            <div class="about-mission">
                <h2>Misyonumuz</h2>
                <p>
                    Misyonumuz; saðlýk, eðitim, enerji, inþaat ve ticaret alanlarýnda kaliteli, güvenilir ve 
                    sürdürülebilir hizmetler sunarak toplumun yaþam kalitesini yükseltmektir. Yenilikçi yaklaþýmýmýz 
                    ve güçlü altyapýmýz ile geleceðe yön veriyor, sektörlerimizde örnek oluyoruz.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
.about-detail-section {
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
}

.about-container {
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.about-header {
    background: linear-gradient(135deg, #1B3B1A, #2d5a2c);
    color: white;
    text-align: center;
    padding: 60px 40px;
}

.about-header h1 {
    font-size: 48px;
    margin-bottom: 20px;
    font-weight: bold;
}

.about-header p {
    font-size: 20px;
    opacity: 0.9;
}

.about-content {
    padding: 60px 40px;
}

.about-timeline, .about-values, .about-stats, .about-vision, .about-mission {
    margin-bottom: 60px;
}

.about-timeline h2, .about-values h2, .about-stats h2, .about-vision h2, .about-mission h2 {
    font-size: 36px;
    color: #1B3B1A;
    margin-bottom: 30px;
    text-align: center;
}

.timeline-item {
    display: flex;
    gap: 30px;
    margin-bottom: 40px;
    align-items: flex-start;
}

.year {
    background: #1B3B1A;
    color: white;
    padding: 15px 20px;
    border-radius: 10px;
    font-size: 24px;
    font-weight: bold;
    min-width: 120px;
    text-align: center;
}

.description h3 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.description p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.value-card {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    transition: transform 0.3s ease;
}

.value-card:hover {
    transform: translateY(-5px);
}

.value-icon {
    font-size: 48px;
    margin-bottom: 20px;
    color: #1B3B1A;
}

.value-card h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 15px;
}

.value-card p {
    font-size: 14px;
    line-height: 1.5;
    color: #666;
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
    font-size: 18px;
    opacity: 0.9;
}

.about-vision, .about-mission {
    text-align: center;
}

.about-vision p, .about-mission p {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
    max-width: 800px;
    margin: 0 auto;
}

@media (max-width: 768px) {
    .about-header {
        padding: 40px 20px;
    }
    
    .about-header h1 {
        font-size: 36px;
    }
    
    .about-content {
        padding: 40px 20px;
    }
    
    .timeline-item {
        flex-direction: column;
        gap: 20px;
    }
    
    .year {
        min-width: auto;
        width: fit-content;
    }
    
    .values-grid, .stats-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
