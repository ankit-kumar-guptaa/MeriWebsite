<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact MeriWebsite for professional web development services. Get in touch for quotes, support, and consultations.">
    <meta name="keywords" content="web development, contact, website design, support, consultation">
    <meta name="author" content="MeriWebsite">
    <meta property="og:title" content="Contact Us - MeriWebsite">
    <meta property="og:description" content="Get in touch with our team for professional web development services.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.meriwebsite.com/contact.php">
    
    <title>Contact Us - MeriWebsite</title>
    <?php include "include/assets.php"?>
    
    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "MeriWebsite",
      "image": "https://www.meriwebsite.com/images/logo.png",
      "telephone": "+91 9876543210",
      "email": "info@meriwebsite.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "916, Astralis Tower, Supernova",
        "addressLocality": "Sector 94, Noida",
        "addressRegion": "UP",
        "postalCode": "201301",
        "addressCountry": "IN"
      },
      "openingHours": "Mo,Tu,We,Th,Fr 09:00-18:00"
    }
    </script>
    
    <style>
    /* Contact Page Specific Styles */
    .contact-hero {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        position: relative;
        overflow: hidden;
        margin-top: 76px;
    }
    
    .contact-hero::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        top: -150px;
        right: -150px;
    }
    
    .contact-hero::after {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        bottom: -100px;
        left: -100px;
    }
    
    .contact-form-wrapper {
        position: relative;
        z-index: 1;
        margin-top: -80px;
    }
    
    .contact-form {
        background: white;
        border-radius: 20px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    
    .contact-form:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }
    
    .contact-info-card {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color: white;
        border-radius: 20px;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    
    .contact-info-card::before {
        content: '';
        position: absolute;
        width: 150px;
        height: 150px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        top: -75px;
        right: -75px;
    }
    
    .contact-info-card::after {
        content: '';
        position: absolute;
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        bottom: -50px;
        left: -50px;
    }
    
    .contact-info-item {
        position: relative;
        z-index: 1;
        padding: 15px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .contact-info-item:last-child {
        border-bottom: none;
    }
    
    .contact-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        transition: all 0.3s ease;
    }
    
    .contact-info-item:hover .contact-icon {
        background: white;
        color: var(--primary-color);
    }
    
    .map-container {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
    }
    
    .form-control, .form-select {
        padding: 12px 20px;
        border-radius: 10px;
        border: 1px solid #e0e0e0;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        box-shadow: none;
        border-color: var(--primary-color);
    }
    
    .form-label {
        font-weight: 600;
        color: #555;
    }
    
    .btn-submit {
        padding: 12px 30px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .social-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        transition: all 0.3s ease;
    }
    
    .social-icon:hover {
        background: white;
        color: var(--primary-color);
        transform: translateY(-3px);
    }
    
    .contact-divider {
        height: 5px;
        width: 50px;
        background: var(--primary-color);
        margin: 20px 0;
        border-radius: 5px;
    }
    
    .faq-section {
        background-color: #f8f9fa;
        border-radius: 20px;
    }
    
    .faq-item {
        border-bottom: 1px solid #e0e0e0;
        padding: 20px 0;
    }
    
    .faq-item:last-child {
        border-bottom: none;
    }
    
    .faq-question {
        font-weight: 600;
        color: var(--primary-color);
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .faq-answer {
        padding-top: 15px;
        display: none;
    }
    
    .faq-question.active + .faq-answer {
        display: block;
    }
    
    .faq-icon {
        transition: transform 0.3s ease;
    }
    
    .faq-question.active .faq-icon {
        transform: rotate(180deg);
    }
    
    @media (max-width: 991.98px) {
        .contact-form-wrapper {
            margin-top: 30px;
        }
        
        .contact-info-card {
            margin-top: 30px;
        }
    }
    </style>
</head>
<body>

<?php include('include/header.php'); ?>

<!-- Contact Hero Section -->
<section class="contact-hero py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp"style="
    color: white;
">Get In Touch</h1>
                <p class="lead mb-0 animate__animated animate__fadeInUp animate__delay-1s">We'd love to hear from you! Let us know how we can help with your web development needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5">
    <div class="container contact-form-wrapper">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="contact-form p-5">
                    <h2 class="h3 fw-bold mb-2">Send Us a Message</h2>
                    <div class="contact-divider"></div>
                    <p class="text-muted mb-4">Fill out the form below and our team will get back to you within 24 hours.</p>
                    
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="john@example.com" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="+91 98765 43210">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" required>
                                    <option value="" selected disabled>Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="quote">Request a Quote</option>
                                    <option value="support">Technical Support</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="How can we help you?" required></textarea>
                        </div>
                        
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="privacy" required>
                            <label class="form-check-label" for="privacy">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a></label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-submit">
                            <i class="fas fa-paper-plane me-2"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="contact-info-card p-4 p-lg-5">
                    <h2 class="h3 fw-bold mb-2">Contact Info</h2>
                    <div class="contact-divider bg-white"></div>
                    
                    <div class="contact-info-item d-flex align-items-center">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="h6 mb-1">Our Office</h3>
                            <p class="mb-0">916, Astralis Tower, Supernova<br>Sector 94, Noida, India</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item d-flex align-items-center">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3 class="h6 mb-1">Phone</h3>
                            <p class="mb-0">+91 9876543210</p>
                            <p class="mb-0 small">Mon-Fri, 9am-6pm</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item d-flex align-items-center">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="h6 mb-1">Email</h3>
                            <p class="mb-0">info@meriwebsite.com</p>
                            <p class="mb-0">support@meriwebsite.com</p>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h3 class="h6 mb-3">Follow Us</h3>
                        <div class="d-flex">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="h3 fw-bold text-center mb-4">Find Us On Map</h2>
                <div class="contact-divider mx-auto"></div>
                <p class="text-center text-muted mb-5">Visit our office in Noida, India</p>
                
                <div class="map-container">
                    <div class="ratio ratio-21x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.6759114309876!2d77.32696491505993!3d28.551124982445525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5f25ac323ab%3A0x9840607c7a93c0e4!2sAstralis%2C%20Sector%2094%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1625000000000!5m2!1sen!2sin" 
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 faq-section">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="h3 fw-bold mb-2">Frequently Asked Questions</h2>
                <div class="contact-divider mx-auto"></div>
                <p class="text-muted mb-5">Find quick answers to common questions</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How quickly can you build my website?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our turnaround time depends on the complexity of your project. A basic website typically takes 2-4 weeks, while more complex sites may require 6-8 weeks. We'll provide a detailed timeline after discussing your requirements.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you provide website maintenance services?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer comprehensive website maintenance packages to keep your site secure, updated, and performing optimally. Our maintenance services include regular updates, security monitoring, backups, and technical support.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do I get started with your services?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Getting started is easy! Simply fill out the contact form on this page or call us directly. We'll schedule an initial consultation to discuss your project requirements, goals, and timeline. After that, we'll provide you with a detailed proposal and quote.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>

<!-- FAQ Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
});

// Form Submission
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Here you would normally add AJAX to submit the form
    alert('Thank you for your message! We will get back to you soon.');
    this.reset();
});
</script>

</body>
</html>