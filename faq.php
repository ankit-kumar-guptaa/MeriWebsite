<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - MeriWebsite</title>
    <?php include "include/assets.php"?>
    
    <!-- ExchangeRate API -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    </head>
    <body>

<?php include('include/header.php'); ?>

<!-- Hero Section -->
<section class="faq-hero bg-gradient-primary text-white " style="
    margin-top: 92px;
">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 fw-bold mb-4">Frequently Asked Questions</h1>
                <p class="lead mb-4">Find answers to common questions about our services</p>
                <div class="search-box mx-auto" style="max-width: 500px;">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Search questions...">
                        <button class="btn btn-light" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="faq-accordion">
                    <!-- Question 1 -->
                    <div class="faq-card mb-4 rounded-4 shadow-sm overflow-hidden">
                        <div class="faq-question bg-light p-4 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseOne">
                            <h3 class="h5 mb-0">How long does it take to build a website?</h3>
                            <i class="fas fa-chevron-down transition-all"></i>
                        </div>
                        <div class="collapse" id="collapseOne">
                            <div class="faq-answer p-4 bg-white">
                                <p>The timeline depends on the complexity of your project. A basic website typically takes 2-4 weeks, while e-commerce sites may require 6-8 weeks. We'll provide a detailed timeline after discussing your requirements.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="faq-card mb-4 rounded-4 shadow-sm overflow-hidden">
                        <div class="faq-question bg-light p-4 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseTwo">
                            <h3 class="h5 mb-0">What's included in your website development package?</h3>
                            <i class="fas fa-chevron-down transition-all"></i>
                        </div>
                        <div class="collapse" id="collapseTwo">
                            <div class="faq-answer p-4 bg-white">
                                <p>Our standard package includes responsive design, 5-10 pages, contact form, basic SEO setup, and 1 month of free support. Additional features like e-commerce, custom animations, or advanced SEO are available as add-ons.</p>
                                <ul class="mt-3">
                                    <li>Mobile-friendly design</li>
                                    <li>Basic SEO optimization</li>
                                    <li>Contact form integration</li>
                                    <li>1 month free support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 3 -->
                    <div class="faq-card mb-4 rounded-4 shadow-sm overflow-hidden">
                        <div class="faq-question bg-light p-4 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseThree">
                            <h3 class="h5 mb-0">Do you provide website hosting?</h3>
                            <i class="fas fa-chevron-down transition-all"></i>
                        </div>
                        <div class="collapse" id="collapseThree">
                            <div class="faq-answer p-4 bg-white">
                                <p>Yes, we offer reliable hosting solutions starting at ₹499/month. We can also help you migrate your existing website to our servers or recommend other hosting providers if you prefer.</p>
                                <div class="mt-3">
                                    <span class="badge bg-primary me-2">99.9% Uptime</span>
                                    <span class="badge bg-primary me-2">24/7 Support</span>
                                    <span class="badge bg-primary">Free SSL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 4 -->
                    <div class="faq-card mb-4 rounded-4 shadow-sm overflow-hidden">
                        <div class="faq-question bg-light p-4 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseFour">
                            <h3 class="h5 mb-0">Can you redesign my existing website?</h3>
                            <i class="fas fa-chevron-down transition-all"></i>
                        </div>
                        <div class="collapse" id="collapseFour">
                            <div class="faq-answer p-4 bg-white">
                                <p>Absolutely! We specialize in website redesigns that improve both aesthetics and functionality while maintaining your brand identity. We'll analyze your current site and suggest improvements before starting the redesign process.</p>
                                <div class="mt-3">
                                    <img src="assets/images/redesign-process.png" alt="Redesign Process" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 5 -->
                    <div class="faq-card mb-4 rounded-4 shadow-sm overflow-hidden">
                        <div class="faq-question bg-light p-4 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseFive">
                            <h3 class="h5 mb-0">What payment methods do you accept?</h3>
                            <i class="fas fa-chevron-down transition-all"></i>
                        </div>
                        <div class="collapse" id="collapseFive">
                            <div class="faq-answer p-4 bg-white">
                                <p>We accept all major payment methods including UPI, bank transfers, credit/debit cards, and PayPal. For large projects, we typically require a 30% deposit with the balance due upon completion.</p>
                                <div class="payment-methods mt-3">
                                    <img src="assets/images/payment-methods.png" alt="Payment Methods" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact CTA -->
                <div class="contact-cta text-center mt-5 p-5 bg-light rounded-4 shadow-sm">
                    <h3 class="h4 mb-4">Still have questions?</h3>
                    <p class="mb-4">Can't find what you're looking for? Our team is ready to help you with any questions.</p>
                    <a href="contact.php" class="btn btn-primary btn-lg px-4 py-2 rounded-pill">
                        <i class="fas fa-envelope me-2"></i> Contact Our Team
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>

<!-- Add this to your style.css -->
<style>
.faq-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
.faq-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.1);
}
.faq-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.faq-question {
    cursor: pointer;
}
.faq-question:hover {
    background-color: #f8f9fa;
}
.faq-question i {
    transition: transform 0.3s ease;
}
.faq-question[aria-expanded="true"] i {
    transform: rotate(180deg);
}
</style>