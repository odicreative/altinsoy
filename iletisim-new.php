<?php
require_once __DIR__ . '/api/config.php';

$page = 'contact';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/slider1.jpg';

require_once __DIR__ . '/api/includes/header-new.php';
?>

<!-- CONTACT HERO -->
<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Ýletiþim</h1>
        <p class="hero-subtitle">Bizimle iletiþime geçin, projeleriniz için çözümler üretelim</p>
        <div class="hero-cta">
            <a href="#contact-form" class="btn btn-outline btn-large">Mesaj Gönder</a>
            <a href="#contact-info" class="btn btn-primary btn-large">Bilgiler</a>
        </div>
    </div>
</section>

<!-- CONTACT INFO SECTION -->
<section id="contact-info" class="section section-light scroll-reveal">
    <div class="container">
        <h2 class="section-title">Ýletiþim Bilgileri</h2>
        <p class="section-subtitle">Bize ulaþabileceðiniz tüm kanallar</p>
        
        <div class="contact-info-grid">
            <div class="contact-info-card animate-fadeInUp">
                <div class="contact-icon">â</div>
                <h3>Adres</h3>
                <p>
                    Aksaray, Türkiye<br>
                    Merkez, 68<br>
                    68200
                </p>
            </div>
            
            <div class="contact-info-card animate-fadeInUp">
                <div class="contact-icon">â</div>
                <h3>Telefon</h3>
                <p>
                    <a href="tel:03822132323">0382 213 23 23</a><br>
                    <a href="tel:05551234567">0555 123 45 67</a>
                </p>
            </div>
            
            <div class="contact-info-card animate-fadeInUp">
                <div class="contact-icon">â</div>
                <h3>E-posta</h3>
                <p>
                    <a href="mailto:info@altinsoygrup.com">info@altinsoygrup.com</a><br>
                    <a href="mailto:iletisim@altinsoygrup.com">iletisim@altinsoygrup.com</a>
                </p>
            </div>
            
            <div class="contact-info-card animate-fadeInUp">
                <div class="contact-icon">â</div>
                <h3>Çalýþma Saatleri</h3>
                <p>
                    Pazartesi - Cuma: 09:00 - 18:00<br>
                    Cumartesi: 09:00 - 14:00<br>
                    Pazar: Kapalý
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM SECTION -->
<section id="contact-form" class="section section-light scroll-reveal">
    <div class="container">
        <h2 class="section-title">Mesaj Gönderin</h2>
        <p class="section-subtitle">Projeleriniz veya sorularýnýz için bize yazýn</p>
        
        <div class="contact-form-container">
            <div class="contact-form animate-fadeInUp">
                <form action="#" method="POST" class="form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Ad Soyad *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-posta *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">Konu *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Konu Seçin</option>
                                <option value="genel">Genel Bilgi</option>
                                <option value="teklif">Teklif Talebi</option>
                                <option value="proje">Proje Danýþmanlýðý</option>
                                <option value="sikayet">Þikayet ve Öneri</option>
                                <option value="diger">Diðer</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mesaj *</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <span class="checkmark"></span>
                            Kiþisel verilerimin korunmasýna yönelik <a href="#" target="_blank">aydýnlatma metnini</a> okudum ve kabul ediyorum.
                        </label>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-large">Mesaj Gönder</button>
                        <button type="reset" class="btn btn-outline">Formu Temizle</button>
                    </div>
                </form>
            </div>
            
            <div class="contact-info-side animate-fadeInUp">
                <div class="info-box">
                    <h3>Neden Bizi Seçmelisiniz?</h3>
                    <ul>
                        <li>30 yýllýk tecrübe</li>
                        <li>Profesyonel hizmet</li>
                        <li>7/24 destek</li>
                        <li>Müþteri memnuniyeti</li>
                        <li>Özelleþtirilmiþ çözümler</li>
                    </ul>
                </div>
                
                <div class="info-box">
                    <h3>Hýzlý Cevap</h3>
                    <p>
                        Mesajlarýnýz en geç 24 saat içinde cevaplanýr. Acil durumlar için telefon ile ulaþabilirsiniz.
                    </p>
                </div>
                
                <div class="info-box">
                    <h3>Sosyal Medya</h3>
                    <div class="social-icons">
                        <a href="#" target="_blank" class="social-icon">
                            <img src="<?php echo SITE_URL; ?>/assets/icons/instagram.jpg" alt="Instagram" loading="lazy">
                        </a>
                        <a href="#" target="_blank" class="social-icon">
                            <img src="<?php echo SITE_URL; ?>/assets/icons/facebook.png" alt="Facebook" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="section section-light scroll-reveal">
    <div class="container">
        <h2 class="section-title">Konumumuz</h2>
        <p class="section-subtitle">Aksaray merkezde kolay ulaþýlabilir konum</p>
        
        <div class="map-container">
            <div class="map-placeholder">
                <div class="map-content">
                    <h3>Harita</h3>
                    <p>
                        Aksaray Merkez<br>
                        68200 Aksaray, Türkiye
                    </p>
                    <a href="https://maps.google.com/?q=Aksaray+Merkez+68" target="_blank" class="btn btn-primary">
                        Google Harita'da Aç
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta scroll-reveal">
    <div class="container">
        <h2 class="cta-title">Projeleriniz Hakkýnda Konuþalým</h2>
        <p class="cta-description">
            30 yýllýk tecrübemizle projelerinize deðer katmak için hemen iletiþime geçin.
        </p>
        <div class="hero-cta">
            <a href="<?php echo SITE_URL; ?>/hizmetler" class="btn btn-outline btn-large">Hizmetlerimiz</a>
            <a href="#contact-form" class="btn btn-primary btn-large">Mesaj Gönder</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/api/includes/footer-new.php'; ?>
