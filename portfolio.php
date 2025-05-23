<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore MeriWebsite's portfolio of successful web development projects including hospital websites, corporate solutions, NGO websites, and more.">
    <meta name="keywords" content="web development portfolio, website projects, hospital website, corporate website, NGO website, dental website, employee tracker, IT services website">
    <title>Our Portfolio - MeriWebsite | Professional Web Development Projects</title>
    <?php include "include/assets.php"?>
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        /* Portfolio Page Specific Styles */
        .portfolio-hero {
            background: var(--gradient-primary);
            position: relative;
            overflow: hidden;
        }
        
        .portfolio-hero::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -150px;
            right: -150px;
        }
        
        .portfolio-hero::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
        }
        
        .portfolio-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .portfolio-hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .portfolio-stats {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: var(--box-shadow);
            margin-top: -70px;
            position: relative;
            z-index: 10;
        }
        
        .stat-item {
            text-align: center;
            padding: 15px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .stat-label {
            font-size: 1rem;
            color: var(--dark-color);
            font-weight: 500;
        }
        
        .portfolio-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }
        
        .filter-btn {
            background: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 30px;
            font-weight: 500;
            color: var(--dark-color);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background: var(--gradient-primary);
            color: white;
            transform: translateY(-3px);
        }
        
        .portfolio-item {
            margin-bottom: 40px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .portfolio-content {
            background: white;
            padding: 25px;
        }
        
        .portfolio-content h3 {
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .portfolio-content p {
            color: #6c757d;
            margin-bottom: 20px;
        }
        
        .portfolio-tags {
            margin-bottom: 20px;
        }
        
        .portfolio-tag {
            display: inline-block;
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.8rem;
            margin-right: 10px;
            margin-bottom: 10px;
            color: var(--dark-color);
        }
        
        .portfolio-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .portfolio-actions a {
            display: inline-flex;
            align-items: center;
            color: var(--primary-color);
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .portfolio-actions a:hover {
            color: var(--secondary-color);
        }
        
        .portfolio-actions a i {
            margin-left: 5px;
        }
        
        /* Laptop Screen Display - सिंपल वर्जन */
        .laptop-display {
            position: relative;
            margin: 0 auto;
            max-width: 800px;
        }
        
        .laptop-frame {
            width: 100%;
            height: auto;
            position: relative;
            z-index: 2;
        }
        
        .laptop-screen {
            position: absolute;
            top: 6%;
            left: 11.5%;
            width: 76.5%;
            height: 76%;
            overflow: hidden;
            background: #f5f5f5;
            border-radius: 5px;
            z-index: 1;
        }
        
        .screen-content {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }
        
        .screen-content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Testimonials */
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: var(--box-shadow);
            margin-bottom: 30px;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '\201C';
            font-size: 5rem;
            position: absolute;
            top: -15px;
            left: 20px;
            color: rgba(var(--primary-rgb), 0.1);
            font-family: serif;
        }
        
        .testimonial-content {
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .testimonial-author-info h5 {
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .testimonial-author-info p {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        /* CTA Section */
        .portfolio-cta {
            background: var(--gradient-primary);
            border-radius: 15px;
            padding: 60px 40px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .portfolio-cta::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -100px;
            right: -100px;
        }
        
        .portfolio-cta::after {
            content: '';
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -75px;
            left: -75px;
        }
        
        .portfolio-cta h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .portfolio-cta p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        

    </style>
</head>
<body>
<?php include 'include/header.php'; ?>

<!-- Portfolio Hero Section -->
<section class="portfolio-hero text-white py-5">
    <div class="container py-5">
        <div class="row align-items-center py-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h1>Our Portfolio</h1>
                <p>Explore our collection of successful projects that showcase our expertise in creating stunning, functional websites for various industries.</p>
                <a href="contact.php" class="btn btn-light btn-lg rounded-pill px-4">Start Your Project</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/web-development-team-working-on-project-5691620-4759501.png" alt="Portfolio Hero" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Stats Section -->
<section class="container">
    <div class="row">
        <div class="col-12">
            <div class="portfolio-stats" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number" data-count="50">0</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number" data-count="45">0</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number" data-count="10">0</div>
                            <div class="stat-label">Industries Served</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number" data-count="5">0</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Filter & Projects Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <div class="section-title">
                    <h2>Our Featured Projects</h2>
                    <p>Browse through our diverse portfolio of websites we've created for clients across different industries.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="portfolio-filter" data-aos="fade-up">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="healthcare">Healthcare</button>
                    <button class="filter-btn" data-filter="corporate">Corporate</button>
                    <button class="filter-btn" data-filter="ngo">NGO</button>
                    <button class="filter-btn" data-filter="it">IT Services</button>
                </div>
            </div>
        </div>
        
        <!-- सिंपल लैपटॉप डिस्प्ले - स्टैटिक इमेज के साथ -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto" data-aos="fade-up" data-aos-delay="100">
                <div class="laptop-display">
                    <!-- <img src="https://freepngimg.com/thumb/laptop/9-laptop-png-image.png" alt="Laptop Frame" class="laptop-frame"> -->
                    <div class="laptop-screen">
                        <div class="screen-content">
                            <!-- यहां आप अपनी पसंद की इमेज लगा सकते हैं -->
                            <img src="https://colorlib.com/wp/wp-content/uploads/sites/2/free-medical-website-templates.jpg" alt="Project Screenshot" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row portfolio-grid">
            <!-- Healthcare Project -->
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="healthcare" data-aos="fade-up">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="portfolio/hospital.png" alt="Hospital Placement" class="img-fluid">
                    </div>
                    <div class="portfolio-content">
                        <h3>Hospital Placement</h3>
                        <p>A comprehensive platform connecting medical professionals with healthcare facilities for placement opportunities.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Healthcare</span>
                            <span class="portfolio-tag">Recruitment</span>
                            <span class="portfolio-tag">Responsive</span>
                        </div>
                        <div class="portfolio-actions">
                            <a href="javascript:void(0)" class="view-project" data-index="0">View Project <i class="fas fa-arrow-right"></i></a>
                            <a href="https://hospitalplacement.com" target="_blank" class="btn btn-sm btn-outline-primary">Visit Site</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Corporate Project -->
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="corporate" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="portfolio/elite.png" alt="Elite Corporate Solutions" class="img-fluid">
                    </div>
                    <div class="portfolio-content">
                        <h3>Elite Corporate Solutions</h3>
                        <p>A professional business website showcasing corporate services, team expertise, and client success stories.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Corporate</span>
                            <span class="portfolio-tag">Business</span>
                            <span class="portfolio-tag">Modern</span>
                        </div>
                        <div class="portfolio-actions">
                            <a href="javascript:void(0)" class="view-project" data-index="1">View Project <i class="fas fa-arrow-right"></i></a>
                            <a href="https://elitecorporatesolutions.com" target="_blank" class="btn btn-sm btn-outline-primary">Visit Site</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- NGO Project -->
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="ngo" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="portfolio/greencar.png" alt="GreenCar Carpool" class="img-fluid">
                    </div>
                    <div class="portfolio-content">
                        <h3>GreenCar Carpool</h3>
                        <p>An eco-friendly initiative promoting carpooling to reduce carbon footprint and traffic congestion.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">NGO</span>
                            <span class="portfolio-tag">Environment</span>
                            <span class="portfolio-tag">Community</span>
                        </div>
                        <div class="portfolio-actions">
                            <a href="javascript:void(0)" class="view-project" data-index="2">View Project <i class="fas fa-arrow-right"></i></a>
                            <a href="https://greencar.ngo" target="_blank" class="btn btn-sm btn-outline-primary">Visit Site</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Corporate Project -->
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="corporate" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="portfolio/daily-tracker.png" alt="Employee Daily Tracker" class="img-fluid">
                    </div>
                    <div class="portfolio-content">
                        <h3>Elite Employee Daily Tracker</h3>
                        <p>A powerful tool for tracking and managing employee daily work tasks, attendance, and performance.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Corporate</span>
                            <span class="portfolio-tag">HR Tool</span>
                            <span class="portfolio-tag">Dashboard</span>
                        </div>
                        <div class="portfolio-actions">
                            <a href="javascript:void(0)" class="view-project" data-index="3">View Project <i class="fas fa-arrow-right"></i></a>
                            <a href="http://employee-daily-tracker.elitecorporatesolutions.com/" target="_blank" class="btn btn-sm btn-outline-primary">Visit Site</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- IT Services Project -->
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="it" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="portfolio/it.png" alt="IT Sahayata" class="img-fluid">
                    </div>
                    <div class="portfolio-content">
                        <h3>IT Sahayata</h3>
                        <p>A comprehensive IT support and services platform offering solutions for businesses of all sizes.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">IT Services</span>
                            <span class="portfolio-tag">Tech Support</span>
                            <span class="portfolio-tag">Solutions</span>
                        </div>
                        <div class="portfolio-actions">
                            <a href="javascript:void(0)" class="view-project" data-index="4">View Project <i class="fas fa-arrow-right"></i></a>
                            <a href="https://itsahayata.com" target="_blank" class="btn btn-sm btn-outline-primary">Visit Site</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Healthcare Project -->
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="healthcare" data-aos="fade-up" data-aos-delay="300">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="portfolio/smile.png" alt="SmileCo Dentist" class="img-fluid">
                    </div>
                    <div class="portfolio-content">
                        <h3>SmileCo Dentistry</h3>
                        <p>A modern dental clinic website showcasing services, team of experts, and patient testimonials.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Healthcare</span>
                            <span class="portfolio-tag">Dental</span>
                            <span class="portfolio-tag">Medical</span>
                        </div>
                        <div class="portfolio-actions">
                            <a href="javascript:void(0)" class="view-project" data-index="5">View Project <i class="fas fa-arrow-right"></i></a>
                            <a href="https://smilecodentistry.com" target="_blank" class="btn btn-sm btn-outline-primary">Visit Site</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->


<!-- CTA Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto" data-aos="fade-up">
                <div class="portfolio-cta">
                    <h2>Ready to Start Your Project?</h2>
                    <p>Let's create a stunning website that perfectly represents your brand and helps you achieve your business goals.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="contact.php" class="btn btn-light btn-lg rounded-pill px-4">Contact Us</a>
                        <a href="quote.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>

<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

// ... existing code ...

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // AOS एनिमेशन इनिशियलाइज़ करें
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // पोर्टफोलियो फिल्टर फंक्शनैलिटी
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // सभी बटन्स से एक्टिव क्लास हटाएं
                filterBtns.forEach(b => b.classList.remove('active'));
                
                // क्लिक किए गए बटन पर एक्टिव क्लास जोड़ें
                btn.classList.add('active');
                
                // फिल्टर वैल्यू प्राप्त करें
                const filterValue = btn.getAttribute('data-filter');
                
                // पोर्टफोलियो आइटम्स को फिल्टर करें
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
        
        // स्टैट्स काउंटर एनिमेशन
        const stats = document.querySelectorAll('.stat-number');
        
        stats.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-count'));
            const duration = 2000; // 2 सेकंड
            const step = target / (duration / 16); // 60fps
            let current = 0;
            
            const updateStat = () => {
                current += step;
                if (current < target) {
                    stat.textContent = Math.floor(current);
                    requestAnimationFrame(updateStat);
                } else {
                    stat.textContent = target;
                }
            };
            
            // एलिमेंट व्यूपोर्ट में आने पर एनिमेशन शुरू करें
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateStat();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            observer.observe(stat);
        });
    });
</script>


</body>
</html>