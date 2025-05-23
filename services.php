<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Our Services - MeriWebsite | Professional Web Development Solutions</title>
    <meta name="description" content="Explore MeriWebsite's comprehensive web services including custom website development, redesign, WordPress, e-commerce, SEO optimization, and technical support.">
    <meta name="keywords" content="web development services, website redesign, WordPress development, e-commerce website, SEO optimization, technical support, web maintenance">
    <meta name="author" content="MeriWebsite">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://meriwebsite.com/services.php">
    <meta property="og:title" content="Our Services - MeriWebsite | Professional Web Development Solutions">
    <meta property="og:description" content="Explore MeriWebsite's comprehensive web services including custom website development, redesign, WordPress, e-commerce, SEO optimization, and technical support.">
    <meta property="og:image" content="https://meriwebsite.com/images/services-og-image.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://meriwebsite.com/services.php">
    <meta property="twitter:title" content="Our Services - MeriWebsite | Professional Web Development Solutions">
    <meta property="twitter:description" content="Explore MeriWebsite's comprehensive web services including custom website development, redesign, WordPress, e-commerce, SEO optimization, and technical support.">
    <meta property="twitter:image" content="https://meriwebsite.com/images/services-twitter-image.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://meriwebsite.com/services.php">
    
    <?php include "include/assets.php"?>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Website Development",
          "url": "https://meriwebsite.com/services.php#website-development",
          "description": "Custom website development tailored to your business needs"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Website Redesign",
          "url": "https://meriwebsite.com/services.php#website-redesign",
          "description": "Transform your outdated website into a modern, responsive design"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "WordPress Development",
          "url": "https://meriwebsite.com/services.php#wordpress",
          "description": "Custom WordPress websites with powerful features"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "E-Commerce Websites",
          "url": "https://meriwebsite.com/services.php#ecommerce",
          "description": "Online stores with secure payment gateways and inventory management"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "SEO Optimization",
          "url": "https://meriwebsite.com/services.php#seo",
          "description": "Improve your website's visibility in search engines"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Technical Support",
          "url": "https://meriwebsite.com/services.php#support",
          "description": "Ongoing maintenance and support for your website"
        }
      ]
    }
    </script>
    
    <style>
        /* Services Page Specific Styles */
        .services-hero {
            background: linear-gradient(rgba(30, 64, 175, 0.9), rgba(30, 64, 175, 0.8)), 
                        url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            padding: 150px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .services-hero::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -150px;
            right: -150px;
        }
        
        .services-hero::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
        }
        
        .service-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            z-index: 1;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
          
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-primary);
            border-radius: 50%;
            margin-bottom: 25px;
            color: #fff; /* Ensure icon is always white */
            font-size: 32px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(30,64,175,0.10);
        }
        .service-card:hover .service-icon {
            background: var(--gradient-secondary); /* Use your secondary gradient or a blue shade */
            /* color: #fff; Keep icon white on hover */
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 8px 24px rgba(30,64,175,0.18);
        }
      
     
        .service-img {
            height: 200px;
            overflow: hidden;
        }
        
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .service-card:hover .service-img img {
            transform: scale(1.1);
        }
        
        /* .service-content {
            padding: 30px;
            background: white;
        } */
        
        .service-features {
            margin-top: 20px;
        }
        
        .service-features li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
        }
        
        .service-features li::before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
            color: var(--primary-color);
        }
        
        .service-section {
            padding: 100px 0;
            position: relative;
        }
        
        .service-section:nth-child(even) {
            background: #f8fafc;
        }
        
        .service-section .container {
            position: relative;
            z-index: 1;
        }
        
        .service-section::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(30, 64, 175, 0.05);
            border-radius: 50%;
            top: -100px;
            right: -100px;
        }
        
        .process-step {
            display: flex;
            margin-bottom: 30px;
        }
        
        .step-number {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .step-content {
            padding-top: 5px;
        }
        
        .cta-box {
            background: var(--gradient-primary);
            border-radius: 15px;
            padding: 40px;
            color: white;
            text-align: center;
            margin-top: 50px;
            position: relative;
            overflow: hidden;
        }
        
        .cta-box::before {
            content: '';
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -75px;
            right: -75px;
        }
        
        .cta-box::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -50px;
            left: -50px;
        }
        
        .service-nav {
            position: sticky;
            top: 100px;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-nav-link {
            display: block;
            padding: 10px 15px;
            color: var(--dark-color);
            border-radius: 5px;
            transition: all 0.3s ease;
            margin-bottom: 5px;
        }
        
        .service-nav-link:hover,
        .service-nav-link.active {
            background: var(--gradient-primary);
            color: white;
            transform: translateX(5px);
        }
        
        .service-nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        @media (max-width: 991.98px) {
            .service-nav {
                position: relative;
                top: 0;
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>

<?php include 'include/header.php'; ?>

<!-- Hero Section -->
<section class="services-hero text-white text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 fade-up">
                <h1 class="display-4 fw-bold mb-4">Our Services</h1>
                <p class="lead mb-4">We offer a comprehensive range of web development services to help your business establish a powerful online presence.</p>
                <div class="d-inline-flex align-items-center">
                    <div class="px-3 py-1 bg-white text-primary rounded-pill me-3 fade-up delay-1">
                        <i class="fas fa-check-circle me-2"></i> Customized Solutions
                    </div>
                    <div class="px-3 py-1 bg-white text-primary rounded-pill me-3 fade-up delay-2">
                        <i class="fas fa-check-circle me-2"></i> Modern Technologies
                    </div>
                    <div class="px-3 py-1 bg-white text-primary rounded-pill fade-up delay-3">
                        <i class="fas fa-check-circle me-2"></i> Ongoing Support
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Navigation -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="service-nav fade-up">
                    <h5 class="mb-3">Quick Navigation</h5>
                    <a href="#website-development" class="service-nav-link"><i class="fas fa-laptop-code"></i> Website Development</a>
                    <a href="#website-redesign" class="service-nav-link"><i class="fas fa-sync-alt"></i> Website Redesign</a>
                    <a href="#wordpress" class="service-nav-link"><i class="fab fa-wordpress"></i> WordPress Development</a>
                    <a href="#ecommerce" class="service-nav-link"><i class="fas fa-shopping-cart"></i> E-Commerce Websites</a>
                    <a href="#seo" class="service-nav-link"><i class="fas fa-search"></i> SEO Optimization</a>
                    <a href="#support" class="service-nav-link"><i class="fas fa-headset"></i> Technical Support</a>
                    
                    <div class="mt-4 p-4 bg-light rounded-3 text-center">
                        <h6>Need a custom solution?</h6>
                        <p class="small mb-3">Contact us for a personalized service package tailored to your specific requirements.</p>
                        <a href="contact.php" class="btn btn-primary btn-sm rounded-pill px-3">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6 mb-4 fade-up">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Website Development">
                            </div>
                            <div class="service-content">
                                <div class="service-icon mx-auto">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h3>Website Development</h3>
                                <p>Custom websites designed to showcase your brand and engage your audience.</p>
                                <a href="#website-development" class="btn btn-outline-primary rounded-pill px-4 mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 fade-up delay-1">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Website Redesign">
                            </div>
                            <div class="service-content">
                                <div class="service-icon mx-auto">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <h3>Website Redesign</h3>
                                <p>Transform your outdated website into a modern, responsive design.</p>
                                <a href="#website-redesign" class="btn btn-outline-primary rounded-pill px-4 mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 fade-up">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="https://images.unsplash.com/photo-1614332287897-cdc485fa562d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="WordPress Development">
                            </div>
                            <div class="service-content">
                                <div class="service-icon mx-auto">
                                    <i class="fab fa-wordpress"></i>
                                </div>
                                <h3>WordPress Development</h3>
                                <p>Custom WordPress websites with powerful features and easy content management.</p>
                                <a href="#wordpress" class="btn btn-outline-primary rounded-pill px-4 mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 fade-up delay-1">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="E-Commerce Websites">
                            </div>
                            <div class="service-content">
                                <div class="service-icon mx-auto">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <h3>E-Commerce Websites</h3>
                                <p>Online stores with secure payment gateways and inventory management.</p>
                                <a href="#ecommerce" class="btn btn-outline-primary rounded-pill px-4 mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 fade-up">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="SEO Optimization">
                            </div>
                            <div class="service-content">
                                <div class="service-icon mx-auto">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3>SEO Optimization</h3>
                                <p>Improve your website's visibility in search engines and drive organic traffic.</p>
                                <a href="#seo" class="btn btn-outline-primary rounded-pill px-4 mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 fade-up delay-1">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="https://images.unsplash.com/photo-1560264280-88b68371db39?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Technical Support">
                            </div>
                            <div class="service-content">
                                <div class="service-icon mx-auto">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <h3>Technical Support</h3>
                                <p>Ongoing maintenance and support to keep your website running smoothly.</p>
                                <a href="#support" class="btn btn-outline-primary rounded-pill px-4 mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website Development Section -->
<section id="website-development" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 fade-up">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Website Development" class="img-fluid rounded-lg shadow-lg">
            </div>
            <div class="col-lg-6 ps-lg-5 fade-up delay-1">
                <div class="section-title text-start">
                    <h2>Website Development</h2>
                </div>
                <p class="mb-4">We create custom websites that are tailored to your specific business needs. Our development process focuses on creating responsive, user-friendly, and visually appealing websites that effectively communicate your brand message and convert visitors into customers.</p>
                
                <h5 class="mb-3">What We Offer:</h5>
                <ul class="service-features">
                    <li>Custom design and development from scratch</li>
                    <li>Responsive layouts that work on all devices</li>
                    <li>User-friendly navigation and interface</li>
                    <li>Fast loading speeds and optimized performance</li>
                    <li>SEO-friendly structure and coding</li>
                    <li>Integration with third-party tools and APIs</li>
                    <li>Content management systems for easy updates</li>
                    <li>Contact forms and lead generation features</li>
                </ul>
                
                <h5 class="mt-4 mb-3">Our Development Process:</h5>
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h6>Discovery & Planning</h6>
                        <p>We start by understanding your business, goals, target audience, and requirements.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h6>Design & Prototyping</h6>
                        <p>We create wireframes and design mockups for your approval before development begins.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h6>Development</h6>
                        <p>Our developers bring the designs to life with clean, efficient code.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h6>Testing & Launch</h6>
                        <p>We thoroughly test your website before launching it to ensure everything works perfectly.</p>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="quote.php" class="btn btn-primary rounded-pill px-4 me-3">Get a Quote</a>
                    <a href="portfolio.php" class="btn btn-outline-primary rounded-pill px-4">View Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website Redesign Section -->
<section id="website-redesign" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-lg-5 order-lg-1 order-2 fade-up delay-1">
                <div class="section-title text-start">
                    <h2>Website Redesign</h2>
                </div>
                <p class="mb-4">Is your current website outdated, slow, or not generating the results you want? Our website redesign service transforms your existing website into a modern, high-performing digital asset that aligns with your current business goals and meets today's web standards.</p>
                
                <h5 class="mb-3">Why Redesign Your Website:</h5>
                <ul class="service-features">
                    <li>Improve user experience and navigation</li>
                    <li>Make your site mobile-responsive</li>
                    <li>Increase page loading speed</li>
                    <li>Update your brand image and visual appeal</li>
                    <li>Implement modern SEO practices</li>
                    <li>Add new functionality and features</li>
                    <li>Improve conversion rates and lead generation</li>
                    <li>Ensure compatibility with current browsers and devices</li>
                </ul>
                
                <h5 class="mt-4 mb-3">Our Redesign Approach:</h5>
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h6>Website Audit</h6>
                        <p>We analyze your current website to identify strengths, weaknesses, and opportunities for improvement.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h6>Strategy Development</h6>
                        <p>We create a redesign strategy based on your goals, target audience, and current pain points.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h6>New Design & Development</h6>
                        <p>We create fresh designs and implement them with modern code while preserving your valuable content and SEO equity.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h6>Testing & Launch</h6>
                        <p>We thoroughly test the new site and implement a smooth transition from the old to the new website.</p>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="quote.php" class="btn btn-primary rounded-pill px-4 me-3">Get a Quote</a>
                    <a href="portfolio.php" class="btn btn-outline-primary rounded-pill px-4">View Portfolio</a>
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2 order-1 fade-up">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Website Redesign" class="img-fluid rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- WordPress Development Section -->
<section id="wordpress" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 fade-up">
                <img src="https://images.unsplash.com/photo-1614332287897-cdc485fa562d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="WordPress Development" class="img-fluid rounded-lg shadow-lg">
            </div>
            <div class="col-lg-6 ps-lg-5 fade-up delay-1">
                <div class="section-title text-start">
                    <h2>WordPress Development</h2>
                </div>
                <p class="mb-4">WordPress powers over 40% of all websites on the internet, and for good reason. We specialize in creating custom WordPress websites that combine the platform's ease of use with tailored functionality to meet your specific business needs.</p>
                
                <h5 class="mb-3">Our WordPress Services:</h5>
                <ul class="service-features">
                    <li>Custom WordPress theme development</li>
                    <li>Plugin customization and development</li>
                    <li>E-commerce integration with WooCommerce</li>
                    <li>WordPress website optimization for speed</li>
                    <li>Security hardening and protection</li>
                    <li>Membership and subscription sites</li>
                    <li>WordPress migration and upgrades</li>
                    <li>Ongoing maintenance and support</li>
                </ul>
                
                <h5 class="mt-4 mb-3">Why Choose WordPress:</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Easy Content Management</h6>
                                <p class="small mb-0">Update your website without technical knowledge</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-plug"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Extensive Plugin Ecosystem</h6>
                                <p class="small mb-0">Add functionality without custom coding</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Mobile-Responsive Themes</h6>
                                <p class="small mb-0">Look great on all devices out of the box</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-search"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">SEO-Friendly Structure</h6>
                                <p class="small mb-0">Built-in features to help with search rankings</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="quote.php" class="btn btn-primary rounded-pill px-4 me-3">Get a Quote</a>
                    <a href="portfolio.php" class="btn btn-outline-primary rounded-pill px-4">View Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- E-Commerce Section -->
<section id="ecommerce" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-lg-5 order-lg-1 order-2 fade-up delay-1">
                <div class="section-title text-start">
                    <h2>E-Commerce Websites</h2>
                </div>
                <p class="mb-4">Transform your business with a powerful online store that drives sales and enhances customer experience. Our e-commerce solutions are designed to be secure, scalable, and easy to manage, providing everything you need to sell products or services online.</p>
                
                <h5 class="mb-3">E-Commerce Features:</h5>
                <ul class="service-features">
                    <li>Secure payment gateway integration</li>
                    <li>Product catalog and inventory management</li>
                    <li>Customer account management</li>
                    <li>Order processing and tracking</li>
                    <li>Mobile-responsive shopping experience</li>
                    <li>Product search and filtering options</li>
                    <li>Discount and coupon management</li>
                    <li>Analytics and sales reporting</li>
                </ul>
                
                <h5 class="mt-4 mb-3">E-Commerce Platforms We Work With:</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fab fa-shopify"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Shopify</h6>
                                <p class="small mb-0">Fully-hosted solution with easy setup</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fab fa-woocommerce"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">WooCommerce</h6>
                                <p class="small mb-0">WordPress-based flexible solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fab fa-magento"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Magento</h6>
                                <p class="small mb-0">Enterprise-level e-commerce platform</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Custom Solutions</h6>
                                <p class="small mb-0">Built from scratch for unique needs</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="quote.php" class="btn btn-primary rounded-pill px-4 me-3">Get a Quote</a>
                    <a href="portfolio.php" class="btn btn-outline-primary rounded-pill px-4">View Portfolio</a>
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2 order-1 fade-up">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-Commerce Websites" class="img-fluid rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- SEO Optimization Section -->
<section id="seo" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 fade-up">
                <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="SEO Optimization" class="img-fluid rounded-lg shadow-lg">
            </div>
            <div class="col-lg-6 ps-lg-5 fade-up delay-1">
                <div class="section-title text-start">
                    <h2>SEO Optimization</h2>
                </div>
                <p class="mb-4">Improve your website's visibility in search engines and drive organic traffic to your business. Our SEO services are designed to help you rank higher in search results, attract more qualified leads, and increase conversions.</p>
                
                <h5 class="mb-3">Our SEO Services:</h5>
                <ul class="service-features">
                    <li>Comprehensive website SEO audit</li>
                    <li>Keyword research and strategy</li>
                    <li>On-page SEO optimization</li>
                    <li>Technical SEO improvements</li>
                    <li>Content optimization and creation</li>
                    <li>Local SEO for businesses with physical locations</li>
                    <li>Link building and off-page SEO</li>
                    <li>Regular performance reporting and analysis</li>
                </ul>
                
                <h5 class="mt-4 mb-3">Our SEO Process:</h5>
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h6>Analysis & Research</h6>
                        <p>We analyze your website, competitors, and target keywords to develop a strategy.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h6>On-Page Optimization</h6>
                        <p>We optimize your website's content, meta tags, structure, and technical elements.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h6>Off-Page Strategy</h6>
                        <p>We implement link building and other off-page tactics to boost your authority.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h6>Monitoring & Refinement</h6>
                        <p>We continuously monitor performance and refine our strategy for optimal results.</p>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="quote.php" class="btn btn-primary rounded-pill px-4 me-3">Get a Quote</a>
                    <a href="portfolio.php" class="btn btn-outline-primary rounded-pill px-4">View Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Support Section -->
<section id="support" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-lg-5 order-lg-1 order-2 fade-up delay-1">
                <div class="section-title text-start">
                    <h2>Technical Support</h2>
                </div>
                <p class="mb-4">Keep your website running smoothly with our comprehensive technical support and maintenance services. We provide ongoing assistance to ensure your website remains secure, up-to-date, and performing at its best.</p>
                
                <h5 class="mb-3">Support Services We Offer:</h5>
                <ul class="service-features">
                    <li>Regular website updates and maintenance</li>
                    <li>Security monitoring and protection</li>
                    <li>Performance optimization</li>
                    <li>Content updates and management</li>
                    <li>Backup and recovery solutions</li>
                    <li>Bug fixes and troubleshooting</li>
                    <li>Server and hosting management</li>
                    <li>24/7 emergency support (for premium plans)</li>
                </ul>
                
                <h5 class="mt-4 mb-3">Support Plans:</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Basic Maintenance</h6>
                                <p class="small mb-0">Essential updates and monitoring</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Standard Support</h6>
                                <p class="small mb-0">Regular maintenance and content updates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Premium Support</h6>
                                <p class="small mb-0">Priority service with advanced features</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Enterprise Support</h6>
                                <p class="small mb-0">24/7 dedicated support team</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="quote.php" class="btn btn-primary rounded-pill px-4 me-3">Get a Quote</a>
                    <a href="contact.php" class="btn btn-outline-primary rounded-pill px-4">Contact Support</a>
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2 order-1 fade-up">
                <img src="https://images.unsplash.com/photo-1560264280-88b68371db39?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Technical Support" class="img-fluid rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5">
    <div class="container">
        <div class="cta-box fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Ready to Start Your Project?</h2>
                    <p class="lead mb-4">Contact us today for a free consultation and quote. Let's bring your vision to life!</p>
                    <div class="d-flex justify-content-center">
                        <a href="quote.php" class="btn btn-light rounded-pill px-4 me-3">Get a Free Quote</a>
                        <a href="contact.php" class="btn btn-outline-light rounded-pill px-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>

<!-- Page Specific Scripts -->
<script>
    // Smooth scrolling for service navigation
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.service-nav-link');
        
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop - 100,
                        behavior: 'smooth'
                    });
                    
                    // Update active link
                    navLinks.forEach(link => link.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
        
        // Set active nav link on scroll
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY;
            
            document.querySelectorAll('.service-section').forEach(section => {
                const sectionTop = section.offsetTop - 150;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    const currentId = '#' + section.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === currentId) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });
    });
</script>

</body>
</html>
