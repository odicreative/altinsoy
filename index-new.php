<?php
require_once __DIR__ . '/api/config.php';

$page = 'home';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/slider1.jpg';

require_once __DIR__ . '/api/includes/header-new.php';
?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">ALTINSOY GRUP</h1>
        <p class="hero-subtitle">30 Yýllýk Tecrübe ile Aksaray'a Deðer Katmaya Devam Ediyoruz</p>
        <div class="hero-cta">
            <a href="#services" class="btn btn-outline btn-large">Hizmetlerimizi Görün</a>
            <a href="<?php echo SITE_URL; ?>/iletisim" class="btn btn-primary btn-large">Ýletiþime Geçin</a>
        </div>
    </div>
    <div class="hero-stats">
        <div class="stat-item">
            <div class="stat-number">30+</div>
            <div class="stat-label">Yýl Tecrübe</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">5</div>
            <div class="stat-label">Farklý Sektör</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">300+</div>
            <div class="stat-label">Çalýþan</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">1000+</div>
            <div class="stat-label">Mutlu Müþteri</div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="section section-light scroll-reveal">
    <div class="container">
        <h2 class="section-title">Hakkýmýzda</h2>
        <p class="section-subtitle">1994 yýlýndan bu yana Aksaray'a hizmet veren köklü bir kuruluþuz</p>
        
        <div class="about-container">
            <div class="about-content animate-fadeInUp">
                <h2>30 Yýllýk Güven ve Tecrübe</h2>
                <p>
                    ALTINSOY GRUP olarak ticari faaliyetlerimize 1994 yýlýnda baþladýk. Kurucularýmýz Mahir, Yýlmaz ve Zeki Altýnsoy tarafýndan Vestel Aksaray Satýþ Bayiliði ile adým attýðýmýz iþ dünyasýnda, 1997 yýlýnda inþaat malzemeleri ardýyesi kurarak inþaat sektörüne giriþ yaptýk.
                </p>
                <p>
                    2004 yýlýnda Aksaray'ýn ilk cam binasý olarak inþa edilen ve günümüzde Aksaray Akademi olarak bilinen eðitim kurumu binasýný hayata geçirdik. Eðitim alanýndaki yatýrýmlarýmýz 2011 yýlýnda Birey Dershanesi ile devam etti. 28 Þubat 2022 itibarýyla Nesibe Aydýn Yýldýzlar Okulu olarak Aksaray'a deðer katmaya devam etmektedir.
                </p>
                <p>
                    2008 yýlýnda saðlýk sektörüne adým atarak Özel Aksaray Hastanesi ortaklýðýna dahil olduk. E-90 Karayolu üzerinde bulunan Shell Petrol Ýstasyonu iþletmemiz aktif olarak hizmet vermektedir.
                </p>
                <p>
                    Bugün ALTINSOY GRUP olarak farklý sektörlerde faaliyet gösteren yaklaþýk 300 çalýþanýmýz ile Aksaray'a deðer katan projelere imza atmaya devam ediyoruz.
                </p>
            </div>
            <div class="about-image animate-slideInRight">
                <img src="<?php echo SITE_URL; ?>/assets/images/hakkimizda.png" alt="Altinsoy Grup Hakkýmýzda" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" class="section scroll-reveal">
    <div class="container">
        <h2 class="section-title">Hizmetlerimiz</h2>
        <p class="section-subtitle">Çeþitli sektörlerde liderlik ediyoruz</p>
        
        <div class="services-grid">
            <!-- Eðitim Hizmeti -->
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/okul.jpg" alt="Eðitim Hizmetleri" loading="lazy">
                </div>
                <div class="service-content">
                    <div class="service-icon">ð</div>
                    <h3 class="service-title">Eðitim Hizmetleri</h3>
                    <p class="service-description">
                        Nesibe Aydýn Yýldýzlar Okulu ve Aksaray Akademi ile eðitim sektöründe kaliteli hizmet sunuyoruz.
                    </p>
                    <a href="#" class="service-link">Detaylarý Gör â</a>
                </div>
            </div>

            <!-- Petrol Hizmetleri -->
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/shell.jpg" alt="Petrol Hizmetleri" loading="lazy">
                </div>
                <div class="service-content">
                    <div class="service-icon">â¡</div>
                    <h3 class="service-title">Petrol Hizmetleri</h3>
                    <p class="service-description">
                        E-90 Karayolu üzerinde bulunan Shell Petrol Ýstasyonumuz ile enerji sektöründe hizmet veriyoruz.
                    </p>
                    <a href="#" class="service-link">Detaylarý Gör â</a>
                </div>
            </div>

            <!-- Saðlýk Hizmetleri -->
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/hastane.jpg" alt="Saðlýk Hizmetleri" loading="lazy">
                </div>
                <div class="service-content">
                    <div class="service-icon">+</div>
                    <h3 class="service-title">Saðlýk Hizmetleri</h3>
                    <p class="service-description">
                        Özel Aksaray Hastanesi ortaklýðýmýz ile saðlýk sektöründe modern hizmet sunuyoruz.
                    </p>
                    <a href="#" class="service-link">Detaylarý Gör â</a>
                </div>
            </div>

            <!-- Ýnþaat Hizmetleri -->
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/insaat-banner.jpg" alt="Ýnþaat Hizmetleri" loading="lazy">
                </div>
                <div class="service-content">
                    <div class="service-icon">â</div>
                    <h3 class="service-title">Ýnþaat Hizmetleri</h3>
                    <p class="service-description">
                        Aksaray'ýn ilk cam binasý dahil olmak üzere çeþitli inþaat projeleri gerçekleþtiriyoruz.
                    </p>
                    <a href="#" class="service-link">Detaylarý Gör â</a>
                </div>
            </div>

            <!-- Kuyumculuk Hizmetleri -->
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/kuyumcu.jpg" alt="Kuyumculuk Hizmetleri" loading="lazy">
                </div>
                <div class="service-content">
                    <div class="service-icon">â</div>
                    <h3 class="service-title">Kuyumculuk Hizmetleri</h3>
                    <p class="service-description">
                        Kuyumculuk sektöründeki faaliyetlerimiz ile müþterilerimize özel tasarým takýlarý sunuyoruz.
                    </p>
                    <a href="#" class="service-link">Detaylarý Gör â</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="section section-light scroll-reveal">
    <div class="container">
        <h2 class="section-title">Neden Altýnsoy Grup?</h2>
        <p class="section-subtitle">30 yýllýk tecrübe ve güvenilirlik</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">â</div>
                <h3 class="feature-title">30+ Yýl Tecrübe</h3>
                <p class="feature-description">
                    1994 yýlýndan bu yana edindiðimiz tecrübe ile sektörde lider konumundayýz.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">â</div>
                <h3 class="feature-title">5 Farklý Sektör</h3>
                <p class="feature-description">
                    Eðitim, saðlýk, enerji, inþaat ve kuyumculuk gibi çeþitli alanda faaliyet gösteriyoruz.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">â</div>
                <h3 class="feature-title">300+ Çalýþan</h3>
                <p class="feature-description">
                    Aksaray ve çevresinde 300'den fazla çalýþanýmýz ile istihdam yaratýyoruz.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">â</div>
                <h3 class="feature-title">Müþteri Memnuniyeti</h3>
                <p class="feature-description">
                    Müþterilerimizin memnuniyetini en üst düzeyde tutarak güvenilir hizmet sunuyoruz.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta scroll-reveal">
    <div class="container">
        <h2 class="cta-title">Projeleriniz için Bizimle Ýletiþime Geçin</h2>
        <p class="cta-description">
            30 yýllýk tecrübemizle projelerinize deðer katmak için hemen bizimle iletiþime geçin.
        </p>
        <div class="hero-cta">
            <a href="<?php echo SITE_URL; ?>/iletisim" class="btn btn-outline btn-large">Ýletiþim</a>
            <a href="<?php echo SITE_URL; ?>/hizmetler" class="btn btn-primary btn-large">Hizmetlerimiz</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/api/includes/footer-new.php'; ?>
