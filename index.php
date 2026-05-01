<?php
require_once __DIR__ . '/config.php';

$page = 'home';
$title = $page_titles[$page];
$description = $page_descriptions[$page];
$image = SITE_URL . '/assets/images/slider1.jpg';

require_once __DIR__ . '/includes/header.php';
?>

<!-- SLIDER -->
<section class="slider-container">
    <div class="slider">
        <img src="<?php echo SITE_URL; ?>/assets/images/banner.png" class="active" alt="Altınsoy Grup Tanıtım" loading="lazy">
        <img src="<?php echo SITE_URL; ?>/assets/images/shell-banner.jpg" alt="Altınsoy Grup Shell Petrol İstasyonu" loading="lazy">
        <img src="<?php echo SITE_URL; ?>/assets/images/hastane-banner.jpg" alt="Altinsoy Grup Aksaray Özel Hastane" loading="lazy">
        <img src="<?php echo SITE_URL; ?>/assets/images/insaat-banner.jpg" alt="Altınsoy Grup İnşaat" loading="lazy">
    </div>
    </section>

<!-- INFO SECTION -->
<section id="about" class="info-section fade-in">
    <div class="info-text">
        <h2>BİZ KİMİZ</h2>
        <p>
            ALTINSOY GRUP olarak ticari faaliyetlerimize 1994 yılında başladık. Mahir, Yılmaz ve Zeki Altınsoy tarafından Vestel Aksaray Satış Bayiliği ile adım attığımız iş dünyasında, 1997 yılında inşaat malzemeleri ardıyesi kurarak inşaat sektörüne giriş yaptık.

            2004 yılında Aksaray'ın ilk cam binası olarak inşa edilen ve günümüzde Aksaray Akademi olarak bilinen eğitim kurumu binasını hayata geçirdik.

            Eğitim alanındaki yatırımlarımız 2011 yılında Birey Dershanesi ile devam etti. Altınsoy Eğitim Kurumları çatısı altında büyüyen eğitim faaliyetlerimiz, 28 Şubat 2022 itibarıyla Nesibe Aydın Yıldızlar Okulu olarak Aksaray'a değer katmaya devam etmektedir.

            2008 yılında sağlık sektörüne adım atarak Özel Aksaray Hastanesi ortaklığına dahil olduk. Bunun yanı sıra, E-90 Karayolu üzerinde bulunan Shell Petrol İstasyonu işletmemiz aktif olarak hizmet vermektedir.

            Vestel satış mağazamız, Zorlu Holding kiracımız olarak faaliyet göstermeye devam etmektedir.

            Bugün ALTINSOY GRUP olarak farklı sektörlerde faaliyet gösteren yaklaşık 300 çalışananımız ile Aksaray'a değer katan projelere imza atmaya devam ediyoruz.
        </p>
    </div>
    <div class="info-image">
        <img src="<?php echo SITE_URL; ?>/assets/images/hakkimizda.png" alt="Altınsoy Grup Aksaray Hakkımızda Bilgisi" loading="lazy">
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" class="services-section fade-in">
    <h3>YENİLİKÇİ ÇÖZÜMLER</h3>
    <h2>Sağlık, Eğitim, Enerji ve İnşaat</h2>

    <!-- MODAL (Açýlýr Pencere) -->
    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <button class="close-btn" onclick="closeModal()">&times;</button>
            <img id="modalImage" src="" alt="Service Image" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px;">
            <h4 id="modalTitle">Service Title</h4>
            <p id="modalDescription">Service description goes here.</p>
        </div>
    </div>

    <div class="services-container">
        <!-- Kart 1 -->
        <div class="service-card" onclick="openModal(this)" data-url="https://yildizlarokulu.k12.tr/">
            <img src="<?php echo SITE_URL; ?>/assets/images/okul.jpg" alt="Nesibe Aydýn Okullarý" loading="lazy">
            <div class="service-card-content">
                <h4>Nesibe Aydın Okulları &rarr;</h4>
                <p data-full="Aksaray kampüsümüzü ziyaret etmek için tıklayınız....">
                    Aksaray kampüsümüzü ziyaret etmek için tıklayınız....
                </p>
            </div>
        </div>

        <div class="service-card" onclick="openModal(this)" data-url="https://www.shell.com.tr/">
            <img src="<?php echo SITE_URL; ?>/assets/images/shell.jpg" alt="Altınsoy Grup Aksaray Shell Petrol İstasyonu" loading="lazy">
            <div class="service-card-content">
                <h4>Petrol İşletmemiz &rarr;</h4>
                <p data-full="E-90 Karayolu üzerinde bulunan Shell Petrol İstasyonu işletmemiz...">
                    E-90 Karayolu üzerinde bulunan Shell Petrol İstasyonu işletmemiz...
                </p>
            </div>
        </div>

        <div class="service-card" onclick="openModal(this)" data-url="<?php echo SITE_URL; ?>/insaat">
            <img src="<?php echo SITE_URL; ?>/assets/images/school.jpg" alt="Altınsoy Grup Aksaray İnşaat Projeleri" loading="lazy">
            <div class="service-card-content">
                <h4>İnşaat Projemiz &rarr;</h4>
                <p data-full="İnşaat sektöründe şehre katma değer kazandıran projelerimizi görmek için...">
                    İnşaat sektöründe şehre katma değer kazandıran projelerimizi görmek için...
                </p>
            </div>
        </div>
        
        <div class="service-card" onclick="openModal(this)" data-url="https://www.aksarayhastanesi.com/">
            <img src="<?php echo SITE_URL; ?>/assets/images/hastane.jpg" alt="Altinsoy Grup Aksaray Özel Hastanesi" loading="lazy">
            <div class="service-card-content">
                <h4>Özel Aksaray Hastanesi &rarr;</h4>
                <p data-full="Saðlýk sektöründe faaliyette olan Özel Aksaray Hastanesi'ni ziyaret etmek için...">
                    Saðlýk sektöründe faaliyette olan Özel Aksaray Hastanesi'ni ziyaret etmek için...
                </p>
            </div>
        </div>

        <!-- Yeni Kart: Altınsoy Kuyumculuk -->
        <div class="service-card" onclick="openModal(this)" data-url="https://www.instagram.com/altinsoykuyumculuk_/">
            <img src="<?php echo SITE_URL; ?>/assets/images/kuyumcu.jpg" alt="Altınsoy Kuyumculuk" loading="lazy">
            <div class="service-card-content">
                <h4>Altınsoy Kuyumculuk &rarr;</h4>
                <p data-full="Kuyumculuk sektöründeki faaliyetlerimizi görmek için...">
                    Kuyumculuk sektöründeki faaliyetlerimizi görmek için tıklayınız...
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
