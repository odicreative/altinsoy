<?php
require_once __DIR__ . '/config.php';

$page = 'construction';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/slider1.jpg';

require_once __DIR__ . '/includes/header.php';
?>

<!-- ÝNÞAAT PROJELERÝ SAYFASI -->
<section class="construction-section fade-in">
    <div class="construction-container">
        <div class="construction-header">
            <h1>Ýnþaat Projelerimiz</h1>
            <p>30 yýllýk tecrübe ile þehre deðer katan eserler</p>
        </div>

        <div class="construction-content">
            <div class="construction-intro">
                <p>
                    1997 yýlýndan bu yana inþaat sektöründe faaliyet gösteren ALTINSOY GRUP, 
                    Aksaray ve çevresine modern, kaliteli ve estetik yapýlar kazandýrmaktadýr. 
                    Aksaray'ýn ilk cam binasý olan Aksaray Akademi'den baþlayarak birçok önemli projeye imza attýk.
                </p>
            </div>

            <div class="projects-grid">
                <!-- Proje 1: Aksaray Akademi -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/school.jpg" alt="Aksaray Akademi" loading="lazy">
                        <div class="project-overlay">
                            <span class="project-year">2004</span>
                            <span class="project-status">Tamamlandý</span>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Aksaray Akademi</h3>
                        <p class="project-type">Eðitim Binasý</p>
                        <p class="project-description">
                            Aksaray'ýn ilk cam binasý olarak inþa edilen Aksaray Akademi, modern mimarisi 
                            ve çevre dostu tasarýmýyla þehrin simgelerinden biri haline geldi. 
                            Günümüzde eðitim faaliyetlerine devam etmektedir.
                        </p>
                        <div class="project-features">
                            <div class="feature">
                                <span class="feature-icon">â</span>
                                <span>12.000 m²</span>
                            </div>
                            <div class="feature">
                                <span class="feature-icon">ð</span>
                                <span>Cam Cephe</span>
                            </div>
                            <div class="feature">
                                <span class="feature-icon">â</span>
                                <span>Modern Mimari</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proje 2: Ticaret Merkezi -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/banner.png" alt="Ticaret Merkezi" loading="lazy">
                        <div class="project-overlay">
                            <span class="project-year">2010</span>
                            <span class="project-status">Tamamlandý</span>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Modern Ticaret Merkezi</h3>
                        <p class="project-type">Ticari Alan</p>
                        <p class="project-description">
                            Aksaray merkezde inþa ettiðimiz modern ticaret merkezi, 
                            50'den fazla maðaza ve ofis alaný ile þehrin ticari hayatýna 
                            önemli katký saðlamaktadýr.
                        </p>
                        <div class="project-features">
                            <div class="feature">
                                <span class="feature-icon">â</span>
                                <span>8.500 m²</span>
                            </div>
                            <div class="feature">
                                <span class="feature-icon">ð</span>
                                <span>50+ Maðaza</span>
                            </div>
                            <div class="feature">
                                <span class="feature-icon">â</span>
                                <span>Otopark</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proje 3: Konut Projesi -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/hakkimizda.png" alt="Modern Konutlar" loading="lazy">
                        <div class="project-overlay">
                            <span class="project-year">2015</span>
                            <span class="project-status">Tamamlandý</span>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Altinsoy Konutlarý</h3>
                        <p class="project-type">Konut</p>
                        <p class="project-description">
                            Modern mimari ve kaliteli malzeme kullanýmý ile inþa ettiðimiz 
                            konut projemiz, 48 daire ile ailelere konforlu ve güvenli yaþam alanlarý sunmaktadýr.
                        </p>
                        <div class="project-features">
                            <div class="feature">
                                <span class="feature-icon">â</span>
                                <span>48 Daire</span>
                            </div>
                            <div class="feature">
                                <span class="feature-icon">ð</span>
                                <span>3+1 Tasarým</span>
                            </div>
                            <div class="feature">
                                <span class="feature-icon">â</span>
                                <span>Sosyal Alanlar</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proje 4: Endüstriyel Tesis -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/insaat-banner.jpg" alt="Endüstriyel Tesis" loading="lazy">
                        <div class="project-overlay">
                            <span class="project-year">2018</span>
                            <span class="project-status">Tamamlandý</span>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Lojistik Merkezi</h3>
                        <p class="project-type">Endüstriyel</p>
                        <p class="project-description">
                            Bölgenin en büyük lojistik merkezlerinden birini inþa ederek, 
                            ticaret ve sanayi sektörlerine modern depolama ve daðýtým hizmetleri sunmaktayýz.
                        </p>
                        <div class="project-features">
                            <div class="feature">
                                <span class="feature-icon">â</span>
                                <span>15.000 m²</span>
                            </div>
                            <div class="feature">
                                <span class="feature-icon">ð</span>
                                <span>Otomasyon</span>
                            </div>
                            <div class="feature">
                                <span class="feature-icon">â</span>
                                <span>Stratejik Konum</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="construction-services">
                <h2>Ýnþaat Hizmetlerimiz</h2>
                <div class="services-grid">
                    <div class="service-item">
                        <div class="service-icon">ð</div>
                        <h3>Mimari Tasarým</h3>
                        <p>Modern ve fonksiyonel mimari çözümler sunuyoruz.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">â</div>
                        <h3>Proje Yönetimi</h3>
                        <p>Profesyonel proje yönetimi ile zamanýnda ve bütçede teslimat.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">â</div>
                        <h3>Kalite Kontrol</h3>
                        <p>Her aþamada kalite standartlarýna uyum ve denetim.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">â</div>
                        <h3>Mühendislik</h3>
                        <p>Teknik mühendislik çözümleri ve danýþmanlýk hizmetleri.</p>
                    </div>
                </div>
            </div>

            <div class="construction-stats">
                <h2>Ýnþaat Baþarýlarýmýz</h2>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Tamamlanan Proje</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50.000+</div>
                        <div class="stat-label">m² Ýnþaat Alaný</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">25</div>
                        <div class="stat-label">Yýl Tecrübe</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Müþteri Memnuniyeti</div>
                    </div>
                </div>
            </div>

            <div class="construction-contact">
                <div class="contact-info">
                    <h2>Yeni Projeler Ýçin</h2>
                    <p>
                        Ýnþaat projeleriniz, mimari tasarlamlarýnýz veya gayrimenkul 
                        yatýrýmlarýnýz için bizimle iletiþime geçebilirsiniz. 
                        25 yýllýk tecrübemizle size en iyi çözümleri sunuyoruz.
                    </p>
                    <div class="contact-actions">
                        <a href="tel:03822132323" class="contact-btn primary">Hemen Ara</a>
                        <a href="<?php echo SITE_URL; ?>/iletisim" class="contact-btn secondary">Ýletiþime Geç</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.construction-section {
    max-width: 1400px;
    margin: 50px auto;
    padding: 0 20px;
}

.construction-container {
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.construction-header {
    background: linear-gradient(135deg, #1B3B1A, #2d5a2c);
    color: white;
    text-align: center;
    padding: 60px 40px;
}

.construction-header h1 {
    font-size: 48px;
    margin-bottom: 20px;
    font-weight: bold;
}

.construction-header p {
    font-size: 20px;
    opacity: 0.9;
}

.construction-content {
    padding: 60px 40px;
}

.construction-intro {
    text-align: center;
    margin-bottom: 60px;
}

.construction-intro p {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
    max-width: 800px;
    margin: 0 auto;
}

.projects-grid {
    display: grid;
    gap: 40px;
    margin-bottom: 60px;
}

.project-card {
    background: #f8f9fa;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.project-card:hover {
    transform: translateY(-5px);
}

.project-image {
    position: relative;
    height: 300px;
    overflow: hidden;
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.project-card:hover .project-image img {
    transform: scale(1.05);
}

.project-overlay {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.project-year {
    background: #1B3B1A;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
}

.project-status {
    background: #28a745;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
}

.project-info {
    padding: 30px;
}

.project-info h3 {
    font-size: 28px;
    color: #1B3B1A;
    margin-bottom: 10px;
    font-weight: bold;
}

.project-type {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
    font-weight: normal;
}

.project-description {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 25px;
}

.project-features {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.feature {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #666;
}

.feature-icon {
    font-size: 16px;
    color: #1B3B1A;
    font-weight: bold;
}

.construction-services {
    margin-bottom: 60px;
}

.construction-services h2 {
    font-size: 36px;
    color: #1B3B1A;
    margin-bottom: 40px;
    text-align: center;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.service-item {
    text-align: center;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 12px;
    transition: transform 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
}

.service-icon {
    font-size: 48px;
    margin-bottom: 20px;
    color: #1B3B1A;
}

.service-item h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 15px;
}

.service-item p {
    font-size: 14px;
    line-height: 1.5;
    color: #666;
}

.construction-stats h2 {
    font-size: 36px;
    color: #1B3B1A;
    margin-bottom: 40px;
    text-align: center;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
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

.construction-contact {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
}

.construction-contact h2 {
    font-size: 32px;
    color: #1B3B1A;
    margin-bottom: 20px;
}

.construction-contact p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
    margin-bottom: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.contact-actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.contact-btn {
    padding: 14px 28px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.contact-btn.primary {
    background: #1B3B1A;
    color: white;
}

.contact-btn.primary:hover {
    background: #2d5a2c;
    transform: scale(1.05);
}

.contact-btn.secondary {
    background: white;
    color: #1B3B1A;
    border: 2px solid #1B3B1A;
}

.contact-btn.secondary:hover {
    background: #1B3B1A;
    color: white;
}

@media (max-width: 768px) {
    .construction-header {
        padding: 40px 20px;
    }
    
    .construction-header h1 {
        font-size: 36px;
    }
    
    .construction-content {
        padding: 40px 20px;
    }
    
    .project-features {
        flex-direction: column;
        gap: 10px;
    }
    
    .services-grid, .stats-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
    
    .contact-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .contact-btn {
        width: 100%;
        max-width: 250px;
    }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
