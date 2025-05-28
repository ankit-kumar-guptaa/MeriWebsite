<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>About Us - MeriWebsite | Web Development Experts</title>
    <meta name="description" content="Learn about MeriWebsite's journey, our expert team, mission, values, and why clients trust us for their web development needs.">
    <meta name="keywords" content="about MeriWebsite, web development team, website design company, IT professionals, web experts">
    <meta name="author" content="MeriWebsite">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://meriwebsite.com/about.php">
    <meta property="og:title" content="About Us - MeriWebsite | Web Development Experts">
    <meta property="og:description" content="Learn about MeriWebsite's journey, our expert team, mission, values, and why clients trust us for their web development needs.">
    <meta property="og:image" content="https://meriwebsite.com/images/about-og-image.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://meriwebsite.com/about.php">
    <meta property="twitter:title" content="About Us - MeriWebsite | Web Development Experts">
    <meta property="twitter:description" content="Learn about MeriWebsite's journey, our expert team, mission, values, and why clients trust us for their web development needs.">
    <meta property="twitter:image" content="https://meriwebsite.com/images/about-twitter-image.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://meriwebsite.com/about.php">
    
    <?php include "include/assets.php"?>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "MeriWebsite",
      "url": "https://meriwebsite.com",
      "logo": "https://meriwebsite.com/images/logo.png",
      "foundingDate": "2018",
      "founders": [
        {
          "@type": "Person",
          "name": "Rahul Sharma"
        },
        {
          "@type": "Person",
          "name": "Priya Patel"
        }
      ],
      "description": "MeriWebsite is a leading web development company specializing in custom website development, redesign, WordPress, and e-commerce solutions.",
      "numberOfEmployees": "25",
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
    
    <style>
        /* About Page Specific Styles */
        .about-hero {
            background: linear-gradient(rgba(30, 64, 175, 0.9), rgba(30, 64, 175, 0.8)), 
                        url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            background-attachment: fixed;
            padding: 150px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .about-hero::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -150px;
            right: -150px;
        }
        
        .about-hero::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
        }
        
        .about-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        
        .about-card .card-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-primary);
            border-radius: 50%;
            margin-bottom: 20px;
            color: white;
            font-size: 28px;
        }
        
        .timeline {
            position: relative;
            padding-left: 30px;
            margin-left: 10px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient-primary);
            border-radius: 10px;
        }
        
        .timeline-item {
            position: relative;
            padding-bottom: 40px;
        }
        
        .timeline-item:last-child {
            padding-bottom: 0;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -34px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--primary-color);
            border: 4px solid white;
            box-shadow: 0 0 0 4px rgba(30, 64, 175, 0.3);
        }
        
        .team-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        
        .team-img {
            position: relative;
            overflow: hidden;
        }
        
        .team-img img {
            transition: all 0.5s ease;
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        
        .team-card:hover .team-img img {
            transform: scale(1.1);
        }
        
        .team-social {
            position: absolute;
            bottom: -60px;
            left: 0;
            width: 100%;
            padding: 15px;
            background: rgba(30, 64, 175, 0.9);
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
        }
        
        .team-card:hover .team-social {
            bottom: 0;
        }
        
        .team-social a {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: white;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
            transition: all 0.3s ease;
        }
        
        .team-social a:hover {
            background: var(--secondary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        .team-info {
            padding: 20px;
            text-align: center;
        }
        
        .counter-box {
            text-align: center;
            padding: 30px 20px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .counter-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        
        .counter-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .counter-number {
            font-size: 40px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 5px;
        }
        
        .counter-text {
            font-size: 16px;
            color: #666;
        }
        
        .testimonial-section {
            background: linear-gradient(135deg, #f6f9ff 0%, #f1f4f9 100%);
            padding: 100px 0;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
            margin: 20px 15px;
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-card::before {
            content: '\201C';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 80px;
            color: rgba(30, 64, 175, 0.1);
            font-family: Georgia, serif;
            line-height: 1;
        }
        
        .client-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        
        .client-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }
        
        .client-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .client-details h5 {
            margin-bottom: 5px;
            color: var(--dark-color);
        }
        
        .client-details p {
            color: #666;
            font-size: 14px;
        }
        
        .cta-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            top: -150px;
            right: -150px;
        }
        
        .cta-section::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
        }
    </style>
</head>
<body>

<?php include 'include/header.php'; ?>

<!-- Hero Section -->
<section class="about-hero text-white text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 fade-up">
                <h1 class="display-4 fw-bold mb-4">About Us</h1>
                <p class="lead mb-4">We're a team of passionate web developers and designers dedicated to creating exceptional digital experiences that help businesses grow.</p>
                <div class="d-inline-flex align-items-center">
                    <div class="px-3 py-1 bg-white text-primary rounded-pill me-3 fade-up delay-1">
                        <i class="fas fa-check-circle me-2"></i> 5+ Years Experience
                    </div>
                    <div class="px-3 py-1 bg-white text-primary rounded-pill me-3 fade-up delay-2">
                        <i class="fas fa-check-circle me-2"></i> 200+ Projects Completed
                    </div>
                    <div class="px-3 py-1 bg-white text-primary rounded-pill fade-up delay-3">
                        <i class="fas fa-check-circle me-2"></i> 150+ Happy Clients
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Company Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 fade-up">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Our Team Working" class="img-fluid rounded-lg shadow-lg">
            </div>
            <div class="col-lg-6 ps-lg-5 fade-up delay-1">
                <div class="section-title text-start">
                    <h2>Our Story</h2>
                </div>
                <p class="mb-4">Founded in 2018, MeriWebsite started with a simple mission: to help businesses establish a powerful online presence through custom, high-quality websites. What began as a small team of two passionate developers has now grown into a full-service web development agency with a team of 25+ talented professionals.</p>
                <p class="mb-4">We combine technical expertise with creative design to deliver websites that not only look great but also perform exceptionally well. Our client-centered approach ensures that every project we undertake is tailored to meet the specific needs and goals of the business we're working with.</p>
                <div class="timeline mt-5">
                    <div class="timeline-item">
                        <h5>2018</h5>
                        <p>MeriWebsite was founded by Rahul Sharma and Priya Patel with a focus on custom website development.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2019</h5>
                        <p>Expanded services to include WordPress development and e-commerce solutions.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2020</h5>
                        <p>Grew to a team of 10 and moved to a larger office space in Noida.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2021</h5>
                        <p>Added SEO and digital marketing services to our offerings.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2023</h5>
                        <p>Celebrating 5 years with a team of 25+ professionals and 150+ satisfied clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Mission & Vision</h2>
            <p>Guiding principles that drive our work and shape our future</p>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 fade-up">
                <div class="about-card bg-white p-4">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To empower businesses with innovative web solutions that drive growth, enhance user experience, and deliver measurable results. We strive to make quality web development accessible to businesses of all sizes.</p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Create websites that convert visitors into customers</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Deliver projects on time and within budget</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Provide exceptional customer service</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Stay updated with the latest web technologies</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4 fade-up delay-1">
                <div class="about-card bg-white p-4">
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be recognized as the leading web development agency in India, known for creating innovative, user-friendly, and high-performing websites that help businesses thrive in the digital landscape.</p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Expand our services globally</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Pioneer new web development technologies</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Build long-term relationships with clients</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Contribute to the web development community</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Core Values</h2>
            <p>The principles that guide our work and relationships</p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4 fade-up">
                <div class="about-card bg-white p-4 text-center">
                    <div class="card-icon mx-auto">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We strive for excellence in everything we do, from code quality to client communication. We're not satisfied with just good enough – we aim to exceed expectations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 fade-up delay-1">
                <div class="about-card bg-white p-4 text-center">
                    <div class="card-icon mx-auto">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We embrace new technologies and creative approaches to solve problems. We're constantly learning and evolving to stay ahead in the fast-paced digital world.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 fade-up delay-2">
                <div class="about-card bg-white p-4 text-center">
                    <div class="card-icon mx-auto">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We operate with honesty, transparency, and ethical practices. We build trust through clear communication and delivering on our promises.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 fade-up">
                <div class="about-card bg-white p-4 text-center">
                    <div class="card-icon mx-auto">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>We believe in the power of teamwork and partnership. We work closely with our clients and each other to achieve the best possible outcomes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 fade-up delay-1">
                <div class="about-card bg-white p-4 text-center">
                    <div class="card-icon mx-auto">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Client Focus</h3>
                    <p>Our clients' success is our success. We listen carefully to understand their needs and goals, and we're committed to helping them achieve their objectives.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 fade-up delay-2">
                <div class="about-card bg-white p-4 text-center">
                    <div class="card-icon mx-auto">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Continuous Growth</h3>
                    <p>We're dedicated to ongoing learning and improvement. We invest in our team's development and constantly refine our processes to deliver better results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<!-- <section class="section-padding bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2>Meet Our Team</h2>
            <p>The talented professionals behind our successful projects</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 fade-up">
                <div class="team-card">
                    <div class="team-img">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Rahul Sharma">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Rahul Sharma</h4>
                        <p class="text-muted">Founder & CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-up delay-1">
                <div class="team-card">
                    <div class="team-img">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Priya Patel">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Priya Patel</h4>
                        <p class="text-muted">Co-Founder & Creative Director</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-up delay-2">
                <div class="team-card">
                    <div class="team-img">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Vikram Singh">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Vikram Singh</h4>
                        <p class="text-muted">Lead Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-up delay-3">
                <div class="team-card">
                    <div class="team-img">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Neha Gupta">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Neha Gupta</h4>
                        <p class="text-muted">UI/UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4 fade-up">
            <p>Our team consists of 25+ talented professionals including developers, designers, project managers, and support specialists.</p>
            <a href="contact.php" class="btn btn-primary rounded-pill px-4 mt-3">Join Our Team <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section> -->

<!-- Counter Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 mb-4 mb-md-0 fade-up">
                <div class="counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="counter-number" data-count="200">0</div>
                    <div class="counter-text">Projects Completed</div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0 fade-up delay-1">
                <div class="counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <div class="counter-number" data-count="150">0</div>
                    <div class="counter-text">Happy Clients</div>
                </div>
            </div>
            <div class="col-md-3 col-6 fade-up delay-2">
                <div class="counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="counter-number" data-count="8">0</div>
                    <div class="counter-text">Awards Won</div>
                </div>
            </div>
            <div class="col-md-3 col-6 fade-up delay-3">
                <div class="counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="counter-number" data-count="15">0</div>
                    <div class="counter-text">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="container">
        <div class="section-title text-center">
            <h2>What Our Clients Say</h2>
            <p>Feedback from businesses we've helped transform</p>
        </div>
        <div class="row">
            <div class="col-md-6 fade-up">
                <div class="testimonial-card">
                    <p>"MeriWebsite completely transformed our online presence. Their team was professional, responsive, and delivered a website that exceeded our expectations. Our conversion rate has increased by 40% since the new site launched."</p>
                    <div class="client-info">
                        <!-- <div class="client-img">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Amit Verma">
                        </div> -->
                        <div class="client-details">
                            <h5>Amit Verma</h5>
                            <p>CEO, TechSolutions India</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fade-up delay-1">
                <div class="testimonial-card">
                    <p>"Working with MeriWebsite was a pleasure from start to finish. They took the time to understand our business and created an e-commerce site that perfectly represents our brand. Sales have increased by 65% in just three months!"</p>
                    <div class="client-info">
                        <!-- <div class="client-img">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Sunita Sharma">
                        </div> -->
                        <div class="client-details">
                            <h5>Sunita Sharma</h5>
                            <p>Founder, ElegantWear</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section text-white text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 fade-up">
                <h2 class="mb-4">Ready to Start Your Project?</h2>
                <p class="lead mb-4">Let's discuss how we can help you achieve your business goals with a custom website solution.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="quote.php" class="btn btn-light btn-lg rounded-pill px-4 fade-up delay-1">Get a Free Quote</a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg rounded-pill px-4 fade-up delay-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>

<script>
    // Counter Animation
    const counterElements = document.querySelectorAll('.counter-number');
    
    const animateCounter = (el) => {
        const target = parseInt(el.getAttribute('data-count'));
        const duration = 2000; // 2 seconds
        const step = Math.ceil(target / (duration / 20)); // Update every 20ms
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current > target) {
                el.textContent = target;
                clearInterval(timer);
            } else {
                el.textContent = current;
            }
        }, 20);
    };
    
    // Intersection Observer to trigger counter animation when in view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counterElements.forEach(counter => {
        observer.observe(counter);
    });
</script>

</body>
</html>