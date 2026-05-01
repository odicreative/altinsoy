// Hamburger menü toggle
function toggleMenu() {
    let menu = document.querySelector(".nav-container");
    if (menu.classList.contains("active")) {
        menu.classList.remove("active");
    } else {
        menu.classList.add("active");
    }
}

// Modal fonksiyonlari
function openModal(element) {
    // Kart içindeki bilgileri al
    let imageSrc = element.querySelector("img").src;
    let title = element.querySelector("h4").innerText;
    let fullText = element.querySelector("p").getAttribute("data-full");
    let targetPage = element.getAttribute("data-url");

    // Modal içeriðini güncelle
    document.getElementById("modalImage").src = imageSrc;
    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalDescription").innerText = fullText;

    // Modal içindeki eski a etiketini temizle
    let modalContent = document.querySelector(".modal-content");
    let oldLink = document.getElementById("dynamicModalLink");
    if (oldLink) {
        oldLink.remove();
    }

    // Eðer URL varsa yeni bir <a> etiketi oluþtur
    if (targetPage) {
        let newLink = document.createElement("a");
        newLink.id = "dynamicModalLink";
        newLink.href = targetPage;
        newLink.innerText = "Daha Fazla Bilgi";
        newLink.target = "_blank";
        newLink.classList.add("modal-button");

        // Modal içeriðine butonu ekle
        modalContent.appendChild(newLink);
    }

    // Modalý aç
    document.getElementById("serviceModal").style.display = "flex";
}

// Modalý kapatma fonksiyonu
function closeModal() {
    document.getElementById("serviceModal").style.display = "none";
}

// Modal dýþýna týklayýnca kapanmasýný saðla
window.onclick = function (event) {
    let modal = document.getElementById("serviceModal");
    if (event.target === modal) {
        closeModal();
    }
};

// Slider fonksiyonlari
let currentSlide = 0;
const slides = document.querySelectorAll(".slider img");

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove("active");
        if (i === index) {
            slide.classList.add("active");
        }
    });
}


// Otomatik slider
function startSlider() {
    setInterval(function() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }, 5000); // Her 5 saniyede bir geçiþ
}

// Yumuþak kaydýrma
document.addEventListener("DOMContentLoaded", function () {
    // Yumuþak Kaydýrma
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 60,
                    behavior: "smooth"
                });
            }
        });
    });

    // Kaydýrma animasyonu
    const sections = document.querySelectorAll(".fade-in");

    function revealSections() {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const triggerBottom = window.innerHeight * 0.85;

            if (sectionTop < triggerBottom) {
                section.classList.add("visible");
            }
        });
    }

    // Scroll event'ine baðlýyoruz
    window.addEventListener("scroll", revealSections);
    // Sayfa açýldýðýnda çaðýrýyoruz ki ilk görünüm de çalýþsýn
    revealSections();

    // Slider baþlat
    if (slides.length > 0) {
        showSlide(0);
        startSlider();
    }

    // Modalý baþlangýçta gizle
    let modal = document.getElementById("serviceModal");
    if (modal) {
        modal.style.display = "none";
    }
});

// Form validasyonu (iletiþim sayfasý için)
function validateForm(formData) {
    const errors = [];
    
    if (!formData.name || formData.name.trim().length < 2) {
        errors.push("Ad alaný en az 2 karakter olmalýdýr.");
    }
    
    if (!formData.email || !isValidEmail(formData.email)) {
        errors.push("Geçerli bir e-posta adresi giriniz.");
    }
    
    if (!formData.message || formData.message.trim().length < 10) {
        errors.push("Mesaj en az 10 karakter olmalýdýr.");
    }
    
    return errors;
}

// E-posta validasyonu
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// AJAX form gönderimi (ileride kullanmak için)
function sendFormData(formData) {
    // Burada AJAX ile form verilerini sunucuya gönderebiliriz
    console.log("Form verileri gönderiliyor:", formData);
    
    // Örnek AJAX çaðrýsý
    /*
    fetch('/api/contact', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Baþarýlý:', data);
        showSuccessMessage('Mesajýnýz gönderildi!');
    })
    .catch(error => {
        console.error('Hata:', error);
        showErrorMessage('Mesaj gönderilemedi. Lütfen tekrar deneyin.');
    });
    */
}

// Baþarý mesajý göster
function showSuccessMessage(message) {
    alert(message); // Basit uyarý, ileride daha geliþmiþ bir component kullanýlabilir
}

// Hata mesajý göster
function showErrorMessage(message) {
    alert(message); // Basit uyarý, ileride daha geliþmiþ bir component kullanýlabilir
}

// Lazy loading için Intersection Observer (ileride kullanmak için)
function setupLazyLoading() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Lazy loading'i baþlat
document.addEventListener("DOMContentLoaded", setupLazyLoading);
