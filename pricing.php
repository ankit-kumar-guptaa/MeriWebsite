<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - MeriWebsite</title>
    <?php include "include/assets.php"?>
    
    <!-- ExchangeRate API -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <style>
        /* Pricing Page Styles */
        .pricing-hero {
            background: var(--gradient-primary);
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        
        .country-selector {
            margin: 30px auto;
            max-width: 400px;
        }
        
        .pricing-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            background: white;
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .pricing-header {
            padding: 30px;
            text-align: center;
            background: var(--gradient-primary);
            color: white;
        }
        
        .popular .pricing-header {
            background: var(--gradient-secondary);
        }
        
        .price {
            font-size: 3rem;
            font-weight: 700;
        }
        
        .currency {
            font-size: 1.5rem;
            vertical-align: super;
        }
        
        .pricing-features {
            padding: 30px;
        }
        
        .pricing-features li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        
        .pricing-btn {
            display: block;
            text-align: center;
            padding: 15px;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .popular-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--secondary-color);
            color: white;
            padding: 5px 20px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .payment-methods {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
        }
        
        .payment-method {
            width: 80px;
            height: 50px;
            background: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <!-- Pricing Hero Section -->
    <section class="pricing-hero">
        <div class="container">
            <h1>Flexible Pricing For Every Business</h1>
            <p>Select your country to see prices in your local currency</p>
            
            <div class="country-selector">
                <select id="countrySelect" class="form-select">
                    <option value="USD">United States (USD)</option>
                    <option value="INR">India (INR)</option>
                    <option value="EUR">Europe (EUR)</option>
                    <option value="GBP">UK (GBP)</option>
                    <option value="JPY">Japan (JPY)</option>
                    <option value="AUD">Australia (AUD)</option>
                    <option value="CAD">Canada (CAD)</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Basic Plan -->
                <div class="col-md-4">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Basic</h3>
                            <div class="price"><span class="currency">$</span><span class="amount">49</span><small>.99</small></div>
                            <p>per month</p>
                        </div>
                        <div class="pricing-features">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> 5 Pages Website</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Mobile Responsive</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Basic SEO</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Contact Form</li>
                            </ul>
                        </div>
                        <a href="quote.php" class="pricing-btn">Get Started</a>
                    </div>
                </div>
                
                <!-- Popular Plan -->
                <div class="col-md-4">
                    <div class="pricing-card popular">
                        <span class="popular-badge">MOST POPULAR</span>
                        <div class="pricing-header">
                            <h3>Standard</h3>
                            <div class="price"><span class="currency">$</span><span class="amount">99</span><small>.99</small></div>
                            <p>per month</p>
                        </div>
                        <div class="pricing-features">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> 10 Pages Website</li>
                                <li><i class="fas fa-check text-primary me-2"></i> E-Commerce Ready</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Advanced SEO</li>
                                <li><i class="fas fa-check text-primary me-2"></i> CMS Integration</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Social Media Integration</li>
                            </ul>
                        </div>
                        <a href="quote.php" class="pricing-btn">Get Started</a>
                    </div>
                </div>
                
                <!-- Premium Plan -->
                <div class="col-md-4">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Premium</h3>
                            <div class="price"><span class="currency">$</span><span class="amount">199</span><small>.99</small></div>
                            <p>per month</p>
                        </div>
                        <div class="pricing-features">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> Unlimited Pages</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Custom Web Application</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Premium Support</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Dedicated Account Manager</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Monthly Analytics Report</li>
                            </ul>
                        </div>
                        <a href="quote.php" class="pricing-btn">Get Started</a>
                    </div>
                </div>
            </div>
            
            <!-- Payment Methods -->
            <div class="text-center mt-5">
                <h4>We Accept All Major Payment Methods</h4>
                <div class="payment-methods">
                    <div class="payment-method">
                        <img src="https://cdn-icons-png.flaticon.com/512/196/196566.png" width="50" alt="Visa">
                    </div>
                    <div class="payment-method">
                        <img src="https://cdn-icons-png.flaticon.com/512/196/196578.png" width="50" alt="Mastercard">
                    </div>
                    <div class="payment-method">
                        <img src="https://cdn-icons-png.flaticon.com/512/196/196561.png" width="50" alt="PayPal">
                    </div>
                    <div class="payment-method">
                        <img src="https://cdn-icons-png.flaticon.com/512/825/825454.png" width="50" alt="Stripe">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script>
        // Currency conversion using ExchangeRate-API (free tier)
        const countrySelect = document.getElementById('countrySelect');
        const currencySymbols = {
            'USD': '$',
            'INR': '₹',
            'EUR': '€',
            'GBP': '£',
            'JPY': '¥',
            'AUD': 'A$',
            'CAD': 'C$'
        };
        
        // Base prices in USD
        const basePrices = {
            basic: 49.99,
            standard: 99.99,
            premium: 199.99
        };
        
        countrySelect.addEventListener('change', async function() {
            const currency = this.value;
            const symbol = currencySymbols[currency];
            
            // Update currency symbols
            document.querySelectorAll('.currency').forEach(el => {
                el.textContent = symbol;
            });
            
            // For demo purposes, we'll use fixed conversion rates
            // In a real app, you would call the ExchangeRate-API
            const conversionRates = {
                'USD': 1,
                'INR': 75,
                'EUR': 0.85,
                'GBP': 0.75,
                'JPY': 110,
                'AUD': 1.35,
                'CAD': 1.25
            };
            
            const rate = conversionRates[currency];
            
            // Update prices
            document.querySelectorAll('.amount').forEach((el, index) => {
                const plan = el.closest('.pricing-card').querySelector('h3').textContent.toLowerCase();
                const basePrice = basePrices[plan];
                const convertedPrice = Math.round(basePrice * rate);
                el.textContent = convertedPrice;
            });
        });
    </script>
</body>
</html>