<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <span class="fw-bold logo-text">Meri<span class="text-accent">Website</span></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? ' active' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? ' active' : ''; ?>" href="about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="services.php#website-development">Website Development</a></li>
            <li><a class="dropdown-item" href="services.php#website-redesign">Website Redesign</a></li>
            <li><a class="dropdown-item" href="services.php#wordpress">WordPress Development</a></li>
            <li><a class="dropdown-item" href="services.php#ecommerce">E-Commerce Websites</a></li>
            <li><a class="dropdown-item" href="services.php#seo">SEO Optimization</a></li>
            <li><a class="dropdown-item" href="services.php#support">Technical Support</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="services.php">All Services</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'portfolio.php') ? ' active' : ''; ?>" href="portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'pricing.php') ? ' active' : ''; ?>" href="pricing.php">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php') ? ' active' : ''; ?>" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'faq.php') ? ' active' : ''; ?>" href="faq.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? ' active' : ''; ?>" href="contact.php">Contact</a>
        </li>
        <li class="nav-item ms-2">
          <a class="btn btn-primary rounded-pill px-4 nav-btn" href="quote.php">
            Get a Quote <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>