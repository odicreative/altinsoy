<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="<?php echo SITE_URL; ?>/">
                    <img src="<?php echo SITE_URL; ?>/assets/icons/logo-white.png" alt="ALTINSOY GRUP Logo" class="footer-logo" loading="lazy">
                </a>
                <p class="footer-description">
                    30 yýllýk tecrübe ile Aksaray'a deðer katan köklü bir kuruluþuz.
                </p>
            </div>
            
            <div class="footer-links">
                <h4>Hýzlý Linkler</h4>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/">Anasayfa</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/hakkimizda">Hakkýmýzda</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/yonetim-kurulu">Yönetim Kurulu</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/basin-odasi">Basýn Odasý</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/hizmetler">Hizmetler</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/iletisim">Ýletiþim</a></li>
                </ul>
            </div>
            
            <div class="footer-social">
                <h4>Sosyal Medya</h4>
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
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Altinsoy Grup. Tüm haklarý saklýdýr.</p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script src="<?php echo SITE_URL; ?>/assets/js/app-new.js"></script>

<?php if ($page === 'contact'): ?>
<script>
    // Ýletiþim formu için özel script
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.contact-form form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Form verilerini topla
                const formData = new FormData(form);
                const data = Object.fromEntries(formData);
                
                // Basit validasyon
                if (!data.name || !data.email || !data.message) {
                    alert('Lütfen tüm alanlarý doldurun.');
                    return;
                }
                
                // Vercel'de form gönderme
                fetch('<?php echo SITE_URL; ?>/api/contact.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        alert('Mesajýnýz gönderildi! En kýsa sürede size dönüþ yapacaðýz.');
                        form.reset();
                    } else {
                        alert('Mesaj gönderilemedi. Lütfen tekrar deneyin.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Bir hata oluþtu. Lütfen tekrar deneyin.');
                });
            });
        }
    });
</script>
<?php endif; ?>

</body>
</html>
