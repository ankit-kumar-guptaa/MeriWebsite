<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Request a free, no-obligation quote for your web development project. We offer custom website development, redesign, e-commerce solutions, and more at competitive prices.">
    <meta name="keywords" content="quote, free quote, website quote, web development quote, website cost, website pricing, custom website, web design quote, affordable website, professional website">
    <title>Get a Free Quote - MeriWebsite | Professional Web Development Services</title>
    <?php include "include/assets.php"?>
</head>
<body>
<?php include 'include/header.php'; ?>

<!-- Quote Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content">
          <h1>Get a <span>Free Quote</span> for Your Project</h1>
          <p>Fill out the form below and we'll get back to you with a detailed quote tailored to your specific requirements.</p>
          <div class="hero-badges mt-4">
            <span class="badge bg-light text-dark me-2 mb-2"><i class="fas fa-check-circle text-primary me-1"></i> No Obligation</span>
            <span class="badge bg-light text-dark me-2 mb-2"><i class="fas fa-check-circle text-primary me-1"></i> 24-48 Hour Response</span>
            <span class="badge bg-light text-dark me-2 mb-2"><i class="fas fa-check-circle text-primary me-1"></i> Detailed Proposal</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="https://cdni.iconscout.com/illustration/premium/thumb/web-development-2974925-2477356.png" alt="Quote Illustration" class="img-fluid hero-image">
      </div>
    </div>
  </div>
</section>

<!-- Quote Form Section -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="section-title text-center">
          <h2>Request a Quote</h2>
          <p>Tell us about your project and we'll provide you with a free, no-obligation quote.</p>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="quote-form-wrapper">
          <div class="quote-form-steps mb-5">
            <div class="step active">
              <div class="step-number">1</div>
              <div class="step-text">Your Info</div>
            </div>
            <div class="step-line"></div>
            <div class="step">
              <div class="step-number">2</div>
              <div class="step-text">Project Details</div>
            </div>
            <div class="step-line"></div>
            <div class="step">
              <div class="step-number">3</div>
              <div class="step-text">Submit</div>
            </div>
          </div>
          
          <div class="quote-form">
            <form id="quoteForm" action="process-quote.php" method="POST">
              <!-- Step 1: Your Info -->
              <div class="step-content active" id="step1">
                <h4 class="mb-4">Personal Information</h4>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label for="name" class="form-label">Full Name *</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label for="email" class="form-label">Email Address *</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label for="phone" class="form-label">Phone Number *</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label for="company" class="form-label">Company Name</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-building"></i></span>
                      <input type="text" class="form-control" id="company" name="company">
                    </div>
                  </div>
                </div>
                <div class="text-end mt-4">
                  <button type="button" class="btn btn-primary next-step">Next Step <i class="fas fa-arrow-right ms-2"></i></button>
                </div>
              </div>
              
              <!-- Step 2: Project Details -->
              <div class="step-content" id="step2">
                <h4 class="mb-4">Project Details</h4>
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <label for="projectType" class="form-label">Project Type *</label>
                    <select class="form-select" id="projectType" name="projectType" required>
                      <option value="" selected disabled>Select Project Type</option>
                      <option value="Website Development">Website Development</option>
                      <option value="Website Redesign">Website Redesign</option>
                      <option value="E-Commerce Website">E-Commerce Website</option>
                      <option value="WordPress Website">WordPress Website</option>
                      <option value="Landing Page">Landing Page</option>
                      <option value="SEO Optimization">SEO Optimization</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label for="budget" class="form-label">Budget Range *</label>
                    <select class="form-select" id="budget" name="budget" required>
                      <option value="" selected disabled>Select Budget Range</option>
                      <option value="Less than ₹10,000">Less than ₹10,000</option>
                      <option value="₹10,000 - ₹25,000">₹10,000 - ₹25,000</option>
                      <option value="₹25,000 - ₹50,000">₹25,000 - ₹50,000</option>
                      <option value="₹50,000 - ₹1,00,000">₹50,000 - ₹1,00,000</option>
                      <option value="More than ₹1,00,000">More than ₹1,00,000</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label for="timeline" class="form-label">Timeline *</label>
                    <select class="form-select" id="timeline" name="timeline" required>
                      <option value="" selected disabled>Select Timeline</option>
                      <option value="Less than 1 week">Less than 1 week</option>
                      <option value="1-2 weeks">1-2 weeks</option>
                      <option value="2-4 weeks">2-4 weeks</option>
                      <option value="1-2 months">1-2 months</option>
                      <option value="More than 2 months">More than 2 months</option>
                    </select>
                  </div>
                  <div class="col-md-12 mb-4">
                    <label for="projectDetails" class="form-label">Project Details *</label>
                    <textarea class="form-control" id="projectDetails" name="projectDetails" rows="5" required></textarea>
                    <div class="form-text">Please provide as much detail as possible about your project requirements.</div>
                  </div>
                  <div class="col-md-12 mb-4">
                    <label for="reference" class="form-label">Reference Websites (Optional)</label>
                    <textarea class="form-control" id="reference" name="reference" rows="2"></textarea>
                    <div class="form-text">Share links to websites you like or that have features you want to incorporate.</div>
                  </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                  <button type="button" class="btn btn-outline-primary prev-step"><i class="fas fa-arrow-left me-2"></i> Previous</button>
                  <button type="button" class="btn btn-primary next-step">Next Step <i class="fas fa-arrow-right ms-2"></i></button>
                </div>
              </div>
              
              <!-- Step 3: Submit -->
              <div class="step-content" id="step3">
                <h4 class="mb-4">Final Step</h4>
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                      <label class="form-check-label" for="terms">
                        I agree to the <a href="terms.php">Terms & Conditions</a> and <a href="privacy.php">Privacy Policy</a> *
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12 mb-4">
                    <div class="alert alert-info">
                      <h5><i class="fas fa-info-circle me-2"></i> What happens next?</h5>
                      <p class="mb-0">After submitting your quote request, our team will review your requirements and get back to you within 24-48 hours with a detailed proposal tailored to your project needs.</p>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                  <button type="button" class="btn btn-outline-primary prev-step"><i class="fas fa-arrow-left me-2"></i> Previous</button>
                  <button type="submit" class="btn btn-primary btn-lg">Submit Quote Request <i class="fas fa-paper-plane ms-2"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="section-padding bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="section-title text-center">
          <h2>Why Choose Us</h2>
          <p>Here's why clients trust us for their web development projects</p>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-rocket"></i>
          </div>
          <h3>Fast Turnaround</h3>
          <p>We deliver projects on time without compromising on quality. Our streamlined process ensures quick turnaround times.</p>
          <div class="feature-hover">
            <a href="services.php" class="btn btn-sm btn-outline-light">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-code"></i>
          </div>
          <h3>Clean Code</h3>
          <p>Our developers write clean, well-documented code that is easy to maintain and scale as your business grows.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3>Responsive Design</h3>
          <p>All our websites are fully responsive and optimized for all devices, from desktops to smartphones.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-search"></i>
          </div>
          <h3>SEO Friendly</h3>
          <p>We build websites with SEO best practices in mind, helping your site rank higher in search engine results.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-headset"></i>
          </div>
          <h3>Dedicated Support</h3>
          <p>Our team provides ongoing support and maintenance to ensure your website continues to perform at its best.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-rupee-sign"></i>
          </div>
          <h3>Competitive Pricing</h3>
          <p>We offer transparent, competitive pricing with no hidden costs. Get the best value for your investment.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<!-- <section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="section-title text-center">
          <h2>Client Testimonials</h2>
          <p>Don't just take our word for it. Here's what our clients have to say.</p>
        </div>
      </div>
    </div>
    
    <div class="testimonial-slider">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="testimonial-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="testimonial-text">"MeriWebsite delivered our e-commerce site ahead of schedule and exceeded our expectations. Their attention to detail and responsive design has helped us increase our online sales by 40%."</p>
            <div class="testimonial-author">
              <img src="img/testimonial-1.jpg" alt="Client">
              <div>
                <h5>Rajesh Sharma</h5>
                <p>CEO, Fashion Trends</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="testimonial-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="testimonial-text">"Working with MeriWebsite was a pleasure. They understood our requirements perfectly and created a website that truly represents our brand. Their support after launch has been exceptional."</p>
            <div class="testimonial-author">
              <img src="img/testimonial-2.jpg" alt="Client">
              <div>
                <h5>Priya Patel</h5>
                <p>Marketing Director, Wellness Hub</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="testimonial-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="testimonial-text">"The team at MeriWebsite redesigned our outdated website and the results have been amazing. Our site now loads faster, looks modern, and has helped us generate more leads."</p>
            <div class="testimonial-author">
              <img src="img/testimonial-3.jpg" alt="Client">
              <div>
                <h5>Amit Verma</h5>
                <p>Founder, Tech Solutions</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-controls text-center mt-4">
        <button class="btn btn-sm btn-outline-primary me-2 testimonial-prev"><i class="fas fa-arrow-left"></i></button>
        <button class="btn btn-sm btn-outline-primary testimonial-next"><i class="fas fa-arrow-right"></i></button>
      </div>
    </div>
  </div>
</section> -->

<!-- FAQ Section -->
<section class="section-padding bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="section-title text-center">
          <h2>Frequently Asked Questions</h2>
          <p>Find answers to common questions about our quote and development process</p>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="accordion" id="quoteAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                How long does it take to get a quote?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#quoteAccordion">
              <div class="accordion-body">
                We typically respond to quote requests within 24-48 hours. For more complex projects, we may schedule a call to better understand your requirements before providing a detailed quote.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                What information do you need to provide an accurate quote?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#quoteAccordion">
              <div class="accordion-body">
                The more details you provide, the more accurate our quote will be. Important information includes project type, desired features, timeline, reference websites, and any specific requirements. If you have wireframes or mockups, those are extremely helpful.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Do you require a down payment?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#quoteAccordion">
              <div class="accordion-body">
                Yes, we typically require a 50% down payment to begin work, with the remaining balance due upon project completion. For larger projects, we may establish a milestone-based payment schedule.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                What is your typical project timeline?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#quoteAccordion">
              <div class="accordion-body">
                Project timelines vary based on complexity. Simple websites may take 2-3 weeks, while more complex e-commerce sites might take 6-8 weeks. We'll provide a specific timeline estimate in your quote based on your project requirements.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Do you offer website maintenance after launch?
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#quoteAccordion">
              <div class="accordion-body">
                Yes, we offer various maintenance packages to keep your website secure, updated, and performing optimally. These can include regular updates, security monitoring, content updates, and technical support.
              </div>
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
    <div class="row">
      <div class="col-lg-8 mx-auto text-center text-white">
        <h2>Ready to Start Your Project?</h2>
        <p>Fill out our quote form above or contact us directly to discuss your project requirements.</p>
        <a href="contact.php" class="btn btn-light btn-lg">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<!-- Add CSS for the quote page -->
<style>
  .quote-form-wrapper {
    background: white;
    padding: 40px;
    border-radius: 15px;
    box-shadow: var(--box-shadow);
  }
  
  .quote-form-steps {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
  }
  
  .step {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    z-index: 1;
  }
  
  .step-number {
    width: 40px;
    height: 40px;
    background: #f8f9fa;
    border: 2px solid #dee2e6;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    margin-bottom: 8px;
    transition: all 0.3s ease;
  }
  
  .step.active .step-number {
    background: var(--primary-color);
    border-color: var(--primary-color);
    color: white;
  }
  
  .step-text {
    font-size: 0.85rem;
    font-weight: 500;
    color: #6c757d;
    transition: all 0.3s ease;
  }
  
  .step.active .step-text {
    color: var(--primary-color);
    font-weight: 600;
  }
  
  .step-line {
    flex: 1;
    height: 2px;
    background: #dee2e6;
    margin: 0 15px;
    position: relative;
    top: -20px;
    z-index: 0;
  }
  
  .step-content {
    display: none;
  }
  
  .step-content.active {
    display: block;
    animation: fadeIn 0.5s ease;
  }
  
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  .feature-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: var(--box-shadow);
    height: 100%;
    transition: all 0.3s ease;
    text-align: center;
    position: relative;
    overflow: hidden;
    z-index: 1;
  }
  
  .feature-card:hover {
    transform: translateY(-10px);
  }
  
  .feature-card::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 0;
    background: var(--gradient-primary);
    bottom: 0;
    left: 0;
    z-index: -1;
    transition: all 0.5s ease;
    opacity: 0;
  }
  
  .feature-card:hover::before {
    height: 100%;
    opacity: 1;
  }
  
  .feature-card:hover h3,
  .feature-card:hover p {
    color: white;
  }
  
  .feature-icon {
    width: 70px;
    height: 70px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: white;
    font-size: 1.5rem;
    transition: all 0.3s ease;
  }
  
  .feature-card:hover .feature-icon {
    background: white;
    color: var(--primary-color);
  }
  
  .feature-card h3 {
    margin-bottom: 15px;
    transition: all 0.3s ease;
  }
  
  .feature-card p {
    transition: all 0.3s ease;
  }
  
  .feature-hover {
    position: absolute;
    bottom: -50px;
    left: 0;
    width: 100%;
    text-align: center;
    transition: all 0.3s ease;
    opacity: 0;
  }
  
  .feature-card:hover .feature-hover {
    bottom: 20px;
    opacity: 1;
  }
  
  .hero-badges .badge {
    padding: 8px 15px;
    font-weight: 500;
    font-size: 0.85rem;
    border-radius: 30px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  }
  
  .testimonial-slider {
    position: relative;
  }
  
  .testimonial-controls {
    margin-top: 30px;
  }
  
  .testimonial-controls .btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }
  
  .input-group-text {
    background: var(--light-color);
    border-color: #e9ecef;
  }
</style>

<!-- Add JavaScript for the multi-step form -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Multi-step form functionality
  const nextButtons = document.querySelectorAll('.next-step');
  const prevButtons = document.querySelectorAll('.prev-step');
  const steps = document.querySelectorAll('.step');
  const stepContents = document.querySelectorAll('.step-content');
  
  nextButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Find the current active step
      const activeStep = document.querySelector('.step-content.active');
      const activeIndex = Array.from(stepContents).indexOf(activeStep);
      
      // Validate current step (simplified validation)
      const inputs = activeStep.querySelectorAll('input[required], select[required], textarea[required]');
      let isValid = true;
      
      inputs.forEach(input => {
        if (!input.value) {
          isValid = false;
          input.classList.add('is-invalid');
        } else {
          input.classList.remove('is-invalid');
        }
      });
      
      if (!isValid) return;
      
      // Hide current step and show next step
      activeStep.classList.remove('active');
      steps[activeIndex].classList.remove('active');
      
      stepContents[activeIndex + 1].classList.add('active');
      steps[activeIndex + 1].classList.add('active');
    });
  });
  
  prevButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Find the current active step
      const activeStep = document.querySelector('.step-content.active');
      const activeIndex = Array.from(stepContents).indexOf(activeStep);
      
      // Hide current step and show previous step
      activeStep.classList.remove('active');
      steps[activeIndex].classList.remove('active');
      
      stepContents[activeIndex - 1].classList.add('active');
      steps[activeIndex - 1].classList.add('active');
    });
  });
  
  // Simple testimonial slider (for demonstration)
  const testimonialNext = document.querySelector('.testimonial-next');
  const testimonialPrev = document.querySelector('.testimonial-prev');
  const testimonials = document.querySelectorAll('.testimonial-card');
  
  if (testimonialNext && testimonialPrev) {
    let currentIndex = 0;
    
    testimonialNext.addEventListener('click', function() {
      testimonials[currentIndex].classList.add('fade-out');
      
      setTimeout(() => {
        testimonials[currentIndex].classList.remove('fade-out');
        currentIndex = (currentIndex + 1) % testimonials.length;
        highlightTestimonial();
      }, 300);
    });
    
    testimonialPrev.addEventListener('click', function() {
      testimonials[currentIndex].classList.add('fade-out');
      
      setTimeout(() => {
        testimonials[currentIndex].classList.remove('fade-out');
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        highlightTestimonial();
      }, 300);
    });
    
    function highlightTestimonial() {
      testimonials.forEach(testimonial => {
        testimonial.style.opacity = '0.5';
        testimonial.style.transform = 'scale(0.95)';
      });
      
      testimonials[currentIndex].style.opacity = '1';
      testimonials[currentIndex].style.transform = 'scale(1)';
    }
    
    // Initialize
    highlightTestimonial();
  }
});
</script>

<?php include 'include/footer.php'; ?>