// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Fade-in animation for elements
document.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.fade-up');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    fadeElements.forEach(element => {
        observer.observe(element);
    });
    
    // Counter animation
    const counterElements = document.querySelectorAll('.counter');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const countTo = parseInt(target.innerText);
                let count = 0;
                const speed = 2000 / countTo;
                
                const updateCount = () => {
                    if (count < countTo) {
                        count++;
                        target.innerText = count + '+';
                        setTimeout(updateCount, speed);
                    }
                };
                
                updateCount();
                counterObserver.unobserve(target);
            }
        });
    }, { threshold: 0.5 });
    
    counterElements.forEach(element => {
        counterObserver.observe(element);
    });
});

// Sticky header
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 100) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
});

// Portfolio hover effect enhancement
const portfolioItems = document.querySelectorAll('.portfolio-item');

portfolioItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
        this.querySelector('.portfolio-overlay').style.opacity = '1';
        this.querySelector('img').style.transform = 'scale(1.1)';
    });
    
    item.addEventListener('mouseleave', function() {
        this.querySelector('.portfolio-overlay').style.opacity = '0';
        this.querySelector('img').style.transform = 'scale(1)';
    });
});

// Form validation
const forms = document.querySelectorAll('form');

forms.forEach(form => {
    form.addEventListener('submit', function(e) {
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('is-invalid');
            } else {
                field.classList.remove('is-invalid');
            }
        });
        
        if (!isValid) {
            e.preventDefault();
        }
    });
});

// Newsletter subscription
const newsletterForm = document.querySelector('.newsletter-form');

if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const emailInput = this.querySelector('input[type="email"]');
        const email = emailInput.value.trim();
        
        if (email) {
            // Here you would normally send an AJAX request to your server
            // For demo purposes, we'll just show a success message
            this.innerHTML = '<div class="alert alert-success">Thank you for subscribing to our newsletter!</div>';
        }
    });
}

// WhatsApp button animation
const whatsappBtn = document.querySelector('.whatsapp-btn');

if (whatsappBtn) {
    setInterval(() => {
        whatsappBtn.classList.add('pulse');
        
        setTimeout(() => {
            whatsappBtn.classList.remove('pulse');
        }, 1000);
    }, 3000);
}

// Add this CSS to your style.css
// .pulse {
//     animation: pulse-animation 1s ease;
// }
// 
// @keyframes pulse-animation {
//     0% { transform: scale(1); }
//     50% { transform: scale(1.2); }
//     100% { transform: scale(1); }
// }