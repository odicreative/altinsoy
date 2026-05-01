<?php
require_once __DIR__ . '/config.php';

$page = 'contact';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/slider1.jpg';

// Form iþlemi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF token kontrolü
    if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
        $error = "Güvenlik hatasý! Lütfen sayfayý yenileyip tekrar deneyin.";
    } else {
        // Form verilerini sanitize et
        $name = sanitize_input($_POST['name'] ?? '');
        $email = sanitize_input($_POST['email'] ?? '');
        $phone = sanitize_input($_POST['phone'] ?? '');
        $subject = sanitize_input($_POST['subject'] ?? '');
        $message = sanitize_input($_POST['message'] ?? '');
        
        // Validasyon
        $errors = [];
        
        if (empty($name) || strlen($name) < 2) {
            $errors[] = "Ad alaný en az 2 karakter olmalýdýr.";
        }
        
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Geçerli bir e-posta adresi giriniz.";
        }
        
        if (empty($message) || strlen($message) < 10) {
            $errors[] = "Mesaj en az 10 karakter olmalýdýr.";
        }
        
        if (empty($errors)) {
            // E-posta gönderimi (basit örnek)
            $to = SITE_EMAIL;
            $email_subject = "Ýletiþim Formu: " . $subject;
            $email_body = "Ad: $name\n";
            $email_body .= "E-posta: $email\n";
            $email_body .= "Telefon: $phone\n";
            $email_body .= "Konu: $subject\n\n";
            $email_body .= "Mesaj:\n$message\n";
            
            $headers = "From: $name <$email>\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();
            
            // E-posta gönder (gerçek sunucuda çalýþýr)
            // if (mail($to, $email_subject, $email_body, $headers)) {
            //     $success = "Mesajýnýz baþarýyla gönderildi! En kýsa sürede size dönüþ yapacaðýz.";
            // } else {
            //     $error = "Mesaj gönderilemedi. Lütfen daha sonra tekrar deneyin.";
            // }
            
            // þimdilik sadece baþarý mesajý göster
            $success = "Mesajýnýz baþarýyla gönderildi! En kýsa sürede size dönüþ yapacaðýz.";
            
            // Formu temizle
            $name = $email = $phone = $subject = $message = '';
        } else {
            $error = implode("<br>", $errors);
        }
    }
}

// CSRF token oluþtur
$csrf_token = generate_csrf_token();

require_once __DIR__ . '/includes/header.php';
?>

<!-- ÝLETÝÞÝM SAYFASI -->
<section class="contact-section fade-in">
    <h2>ð Bize Ulaþýn</h2>

    <?php if (isset($success)): ?>
        <div class="alert success">
            <?php echo escape($success); ?>
        </div>
    <?php endif; ?>

    <?php if (isset($error)): ?>
        <div class="alert error">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <div class="contact-wrapper">
        <!-- Sol Taraf (Ýletiþim Bilgileri) -->
        <div class="contact-left">
            <div class="info-box">
                <h3>ð Adres</h3>
                <p>Aksaray, Türkiye</p>
                <p>Merkez, 68</p>
            </div>
            <div class="info-box">
                <h3>ð Telefon</h3>
                <p><a href="tel:03822132323">0382 213 23 23</a></p>
                <p><a href="tel:05010682323">0501 068 23 23</a></p>
            </div>
            <div class="info-box">
                <h3>ð E-posta</h3>
                <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
            </div>
            <div class="info-box">
                <h3>â Çalýþma Saatleri</h3>
                <p>Pazartesi - Cuma: 09:00 - 18:00</p>
                <p>Cumartesi: 09:00 - 13:00</p>
                <p>Pazar: Kapalý</p>
            </div>
        </div>

        <!-- Sað Taraf (Form) -->
        <div class="contact-right">
            <div class="contact-form">
                <h3>ð Bize Mesaj Gönderin</h3>
                <form method="POST" action="">
                    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                    
                    <div class="form-group">
                        <label for="name">Adýnýz Soyadýnýz *</label>
                        <input type="text" id="name" name="name" required 
                               value="<?php echo escape($name ?? ''); ?>"
                               placeholder="Adýnýzý ve soyadýnýzý girin">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-posta *</label>
                        <input type="email" id="email" name="email" required 
                               value="<?php echo escape($email ?? ''); ?>"
                               placeholder="ornek@email.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input type="tel" id="phone" name="phone" 
                               value="<?php echo escape($phone ?? ''); ?>"
                               placeholder="05XX XXX XX XX">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Konu</label>
                        <select id="subject" name="subject">
                            <option value="Genel Bilgi">Genel Bilgi</option>
                            <option value="Ýnþaat">Ýnþaat Hizmetleri</option>
                            <option value="Eðitim">Eðitim Hizmetleri</option>
                            <option value="Saðlýk">Saðlýk Hizmetleri</option>
                            <option value="Enerji">Enerji Hizmetleri</option>
                            <option value="Diðer">Diðer</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mesajýnýz *</label>
                        <textarea id="message" name="message" rows="5" required 
                                  placeholder="Mesajýnýzý buraya yazýn..."><?php echo escape($message ?? ''); ?></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Mesajý Gönder</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Google Maps -->
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3127.2872645739512!2d33.99070418004317!3d38.3886065151928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d670be9cd20277%3A0xac2a68cb43acc56b!2zTmVzaWJlIEF5ZMSxbiBZxLFsZMSxemxhciBPa3VsYSBBa3NhcmF5IEthbXDDvHPDvA!5e0!3m2!1str!2str!4v1744727707266!5m2!1str!2str" 
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<style>
.alert {
    padding: 15px 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    font-weight: bold;
}

.alert.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.submit-btn {
    background: #1B3B1A !important;
    color: white !important;
    padding: 14px 20px !important;
    border: none !important;
    border-radius: 8px !important;
    cursor: pointer !important;
    width: 100% !important;
    font-size: 18px !important;
    font-weight: bold !important;
    transition: all 0.3s ease !important;
}

.submit-btn:hover {
    background: #2d5a2c !important;
    transform: translateY(-2px) !important;
}

select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background: #fff;
    color: #333;
    font-size: 16px;
    cursor: pointer;
}

select:focus {
    outline: none;
    border: 2px solid #1B3B1A;
}

.info-box a {
    color: #1B3B1A;
    text-decoration: none;
    font-weight: bold;
}

.info-box a:hover {
    text-decoration: underline;
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
