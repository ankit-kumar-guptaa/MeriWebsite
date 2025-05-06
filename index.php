<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>MeriWebsite - Professional Website Development & Redesign Services</title>
    <meta name="description" content="MeriWebsite offers custom website development, redesign, WordPress, e-commerce solutions with SEO optimization. Transform your online presence with our expert web services.">
    <meta name="keywords" content="website development, website redesign, custom web design, WordPress development, e-commerce website, SEO optimization, web services, IT agency">
    <meta name="author" content="MeriWebsite">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://meriwebsite.com/">
    <meta property="og:title" content="MeriWebsite - Professional Website Development & Redesign Services">
    <meta property="og:description" content="Transform your online presence with our expert web development, redesign, and SEO optimization services.">
    <meta property="og:image" content="https://meriwebsite.com/images/og-image.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://meriwebsite.com/">
    <meta property="twitter:title" content="MeriWebsite - Professional Website Development & Redesign Services">
    <meta property="twitter:description" content="Transform your online presence with our expert web development, redesign, and SEO optimization services.">
    <meta property="twitter:image" content="https://meriwebsite.com/images/twitter-image.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://meriwebsite.com/">
    
  <?php include "include/assets.php"?>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "MeriWebsite",
      "url": "https://meriwebsite.com",
      "logo": "https://meriwebsite.com/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-9876543210",
        "contactType": "customer service",
        "availableLanguage": ["English", "Hindi"]
      },
      "sameAs": [
        "https://www.facebook.com/meriwebsite",
        "https://www.twitter.com/meriwebsite",
        "https://www.linkedin.com/company/meriwebsite",
        "https://www.instagram.com/meriwebsite"
      ]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://meriwebsite.com",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://meriwebsite.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
</head>
<body>

<?php include 'include/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content fade-up">
                <h1>Transform Your <span class="text-primary">Digital Presence</span> With Custom Websites</h1>
                <p>We create modern, responsive, and SEO-optimized websites tailored to your business needs. Whether you need a new website or want to redesign an existing one, we've got you covered.</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="quote.php" class="btn btn-primary btn-lg rounded-pill px-4 fade-up delay-1">Get a Free Quote</a>
                    <a href="portfolio.php" class="btn btn-outline-light btn-lg rounded-pill px-4 fade-up delay-2">View Our Work</a>
                </div>
            </div>
            <div class="col-lg-6 text-center fade-up delay-3">
                <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Web Development Illustration" class="img-fluid hero-image">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Services</h2>
            <p>We offer a wide range of web development services to help your business grow online</p>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4 fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Website Development</h3>
                    <p>Custom-built websites that are responsive, fast-loading, and designed to convert visitors into customers.</p>
                    <a href="services.php#website-development" class="btn btn-sm btn-outline-primary mt-3 rounded-pill">Learn More</a>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 fade-up delay-1">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Website Redesign</h3>
                    <p>Transform your outdated website into a modern, user-friendly platform that reflects your brand identity.</p>
                    <a href="services.php#website-redesign" class="btn btn-sm btn-outline-primary mt-3 rounded-pill">Learn More</a>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 fade-up delay-2">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <h3>WordPress Development</h3>
                    <p>Custom WordPress websites with powerful features, easy content management, and responsive design.</p>
                    <a href="services.php#wordpress" class="btn btn-sm btn-outline-primary mt-3 rounded-pill">Learn More</a>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-Commerce Websites</h3>
                    <p>Secure, feature-rich online stores that provide seamless shopping experiences and boost sales.</p>
                    <a href="services.php#ecommerce" class="btn btn-sm btn-outline-primary mt-3 rounded-pill">Learn More</a>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 fade-up delay-1">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO Optimization</h3>
                    <p>Improve your website's visibility in search engines and drive more organic traffic to your business.</p>
                    <a href="services.php#seo" class="btn btn-sm btn-outline-primary mt-3 rounded-pill">Learn More</a>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 fade-up delay-2">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Technical Support</h3>
                    <p>Ongoing maintenance, updates, and technical support to keep your website running smoothly.</p>
                    <a href="services.php#support" class="btn btn-sm btn-outline-primary mt-3 rounded-pill">Learn More</a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="services.php" class="btn btn-primary rounded-pill px-4">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Why Choose MeriWebsite" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Why Choose Us</h2>
                    <p>We deliver exceptional web solutions that drive results</p>
                </div>
                
                <div class="d-flex mb-4">
                    <div class="me-4 text-primary">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <div>
                        <h4>Expert Team</h4>
                        <p>Our team of experienced developers, designers, and SEO specialists work together to create websites that stand out.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-4">
                    <div class="me-4 text-primary">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <div>
                        <h4>Custom Solutions</h4>
                        <p>We create tailored websites that align with your business goals, brand identity, and target audience.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-4">
                    <div class="me-4 text-primary">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <div>
                        <h4>SEO-Focused Approach</h4>
                        <p>All our websites are built with search engine optimization in mind to improve your online visibility.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-4">
                    <div class="me-4 text-primary">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <div>
                        <h4>Responsive Design</h4>
                        <p>Our websites look and function perfectly on all devices, from desktops to smartphones.</p>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="me-4 text-primary">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <div>
                        <h4>Ongoing Support</h4>
                        <p>We provide continuous technical support and maintenance to ensure your website performs optimally.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 mb-4 mb-md-0">
                <div class="counter-box">
                    <h2 class="counter">500+</h2>
                    <p class="mb-0">Projects Completed</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0">
                <div class="counter-box">
                    <h2 class="counter">300+</h2>
                    <p class="mb-0">Happy Clients</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="counter-box">
                    <h2 class="counter">10+</h2>
                    <p class="mb-0">Years Experience</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="counter-box">
                    <h2 class="counter">50+</h2>
                    <p class="mb-0">Team Members</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Recent Work</h2>
            <p>Check out some of our latest website projects</p>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-commerce Website" class="img-fluid">
                    <div class="portfolio-overlay">
                        <h4>E-commerce Website</h4>
                        <p>Online Store Development</p>
                        <a href="portfolio.php" class="btn btn-sm btn-light rounded-pill">View Details</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Corporate Website" class="img-fluid">
                    <div class="portfolio-overlay">
                        <h4>Corporate Website</h4>
                        <p>Business Website Development</p>
                        <a href="portfolio.php" class="btn btn-sm btn-light rounded-pill">View Details</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Educational Platform" class="img-fluid">
                    <div class="portfolio-overlay">
                        <h4>Educational Platform</h4>
                        <p>Learning Management System</p>
                        <a href="portfolio.php" class="btn btn-sm btn-light rounded-pill">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="portfolio.php" class="btn btn-primary rounded-pill px-4">View All Projects</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2>Client Testimonials</h2>
            <p>What our clients say about our services</p>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"MeriWebsite transformed our online presence completely. Their team delivered a stunning website that perfectly represents our brand and has significantly increased our customer engagement."</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Client" class="img-fluid rounded-circle">
                        <div>
                            <h5>Rajesh Kumar</h5>
                            <p class="mb-0">CEO, TechSolutions</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Working with MeriWebsite was a pleasure from start to finish. They understood our requirements perfectly and delivered a website that exceeded our expectations. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Client" class="img-fluid rounded-circle">
                        <div>
                            <h5>Priya Sharma</h5>
                            <p class="mb-0">Marketing Director, StyleHub</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"The e-commerce website developed by MeriWebsite has helped us increase our online sales by 200%. Their attention to detail and technical expertise is truly impressive."</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Client" class="img-fluid rounded-circle">
                        <div>
                            <h5>Amit Patel</h5>
                            <p class="mb-0">Owner, FashionMart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white">Ready to Transform Your Online Presence?</h2>
                <p class="text-white mb-4">Get in touch with us today to discuss your website requirements and receive a free quote.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="quote.php" class="btn btn-light btn-lg rounded-pill px-4">Get a Free Quote</a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>Latest Articles</h2>
            <p>Stay updated with our latest insights and tips</p>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Blog Post" class="img-fluid">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar-alt"></i> June 15, 2023</span>
                            <span><i class="far fa-user"></i> Admin</span>
                        </div>
                        <h4>10 Essential Features Every Business Website Should Have</h4>
                        <p>Discover the key elements that make a business website effective and engaging for visitors...</p>
                        <a href="blog.php" class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Blog Post" class="img-fluid">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar-alt"></i> June 10, 2023</span>
                            <span><i class="far fa-user"></i> Admin</span>
                        </div>
                        <h4>How to Improve Your Website's SEO Rankings in 2023</h4>
                        <p>Learn the latest SEO strategies to boost your website's visibility in search engine results...</p>
                        <a href="blog.php" class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="blog-card">
                    <img src="https://images.unsplash.com/photo-1504639725590-34d0984388bd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Blog Post" class="img-fluid">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar-alt"></i> June 5, 2023</span>
                            <span><i class="far fa-user"></i> Admin</span>
                        </div>
                        <h4>The Importance of Mobile-Friendly Websites for Business Growth</h4>
                        <p>Understand why having a responsive website is crucial for reaching more customers...</p>
                        <a href="blog.php" class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="blog.php" class="btn btn-primary rounded-pill px-4">View All Articles</a>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <h2>Subscribe to Our Newsletter</h2>
                    <p>Stay updated with our latest news, articles, and special offers</p>
                </div>
                
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email address" required>
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Clients Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Clients</h2>
            <p>Trusted by businesses across various industries</p>
        </div>
        
        <div class="row align-items-center">
            <div class="col-md-2 col-6 text-center mb-4 mb-md-0">
                <img src="https://images.unsplash.com/photo-1567095761054-7a02e69e5c43?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Client Logo" class="img-fluid client-logo">
            </div>
            <div class="col-md-2 col-6 text-center mb-4 mb-md-0">
                <img src="https://images.unsplash.com/photo-1567095761054-7a02e69e5c43?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Client Logo" class="img-fluid client-logo">
            </div>
            <div class="col-md-2 col-6 text-center mb-4 mb-md-0">
                <img src="https://images.unsplash.com/photo-1567095761054-7a02e69e5c43?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Client Logo" class="img-fluid client-logo">
            </div>
            <div class="col-md-2 col-6 text-center mb-4 mb-md-0">
                <img src="https://images.unsplash.com/photo-1567095761054-7a02e69e5c43?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Client Logo" class="img-fluid client-logo">
            </div>
            <div class="col-md-2 col-6 text-center mb-4 mb-md-0">
                <img src="https://images.unsplash.com/photo-1567095761054-7a02e69e5c43?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Client Logo" class="img-fluid client-logo">
            </div>
            <div class="col-md-2 col-6 text-center">
                <img src="https://images.unsplash.com/photo-1567095761054-7a02e69e5c43?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Client Logo" class="img-fluid client-logo">
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Button -->
<a href="https://wa.me/919876543210" class="whatsapp-btn" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<?php include 'include/footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="js/script.js"></script>

</body>
</html>