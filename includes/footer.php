<!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <a href="<?php echo SITE_URL; ?>/">
                    <img src="<?php echo SITE_URL; ?>/assets/icons/logo-white.png" alt="ALTINSOY GRUP Logo" style="width: 180px; height: auto;" loading="lazy">
                </a>
            </div>
            
            <ul class="footer-links">
                <li><a href="<?php echo SITE_URL; ?>/">Ana Sayfa</a></li>
                <li><a href="<?php echo SITE_URL; ?>/#about">Hakkımızda</a></li>
                <li><a href="<?php echo SITE_URL; ?>/yonetim-kurulu">Yönetim Kurulu</a></li>
                <li><a href="<?php echo SITE_URL; ?>/basin-odasi">Basın Odası</a></li>
                <li><a href="<?php echo SITE_URL; ?>/#services">Hizmetler</a></li>
                <li><a href="<?php echo SITE_URL; ?>/iletisim">İletişim</a></li>
            </ul>
            <div class="social-icons">
                <a href="#" target="_blank"><img src="<?php echo SITE_URL; ?>/assets/icons/instagram.jpg" alt="Instagram" loading="lazy"></a>
                <a href="#" target="_blank"><img src="<?php echo SITE_URL; ?>/assets/icons/facebook.png" alt="Facebook" loading="lazy"></a>
            </div>
        </div>
        <div class="footer-bottom">&copy; <?php echo date('Y'); ?> Altınsoy Grup Tüm hakları saklıdır. |<a style="color:white;"> ODi Creative</a></div>
    </footer>

    <!-- JavaScript -->
    <script src="<?php echo SITE_URL; ?>/assets/js/app.js"></script>
    
    <?php if ($page === 'contact'): ?>
    <script>
        // İletişim formu için özel script
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
                    
                    // Burada PHP POST iþlemi yapýlacak
                    // þimdilik sadece uyarý
                    alert('Mesajýnýz gönderildi! En kýsa sürede size dönüþ yapacaðýz.');
                    form.reset();
                });
            }
        });
    </script>
    <?php endif; ?>

</body>
</html>
