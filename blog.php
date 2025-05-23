<?php include 'include/header.php'; ?>
<?php include 'include/assets.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Blog | Latest News & Insights</title>
    <meta name="description" content="Read the latest articles, tips, and insights on web development, design, SEO, and digital marketing from our expert team.">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .blog-hero {
            background: linear-gradient(90deg, #1e40af 0%, #60a5fa 100%);
            color: #fff;
            padding: 120px 0 40px 0;
            text-align: center;
            position: relative;
        }
        .blog-hero h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .blog-hero p {
            font-size: 1.2rem;
            opacity: 0.95;
        }
        .blog-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 16px 0 16px;
        }
        .blog-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 32px;
            justify-content: center;
        }
        .blog-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(30,64,175,0.08);
            overflow: hidden;
            width: 340px;
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            flex-direction: column;
        }
        .blog-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(30,64,175,0.16);
        }
        .blog-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .blog-card-content {
            padding: 22px 20px 18px 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .blog-card-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1e293b;
        }
        .blog-card-meta {
            font-size: 0.95rem;
            color: #64748b;
            margin-bottom: 12px;
        }
        .blog-card-desc {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 18px;
            flex: 1;
        }
        .blog-card a {
            color: #2563eb;
            font-weight: 500;
            text-decoration: none;
            border: 1px solid #2563eb;
            border-radius: 8px;
            padding: 7px 18px;
            transition: background 0.2s, color 0.2s;
            align-self: flex-start;
        }
        .blog-card a:hover {
            background: #2563eb;
            color: #fff;
        }
        .blog-categories {
            display: flex;
            gap: 16px;
            margin: 32px 0 40px 0;
            justify-content: center;
            flex-wrap: wrap;
        }
        .blog-category {
            background: #f1f5f9;
            color: #2563eb;
            border-radius: 20px;
            padding: 7px 22px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .blog-category.active, .blog-category:hover {
            background: #2563eb;
            color: #fff;
        }
        @media (max-width: 900px) {
            .blog-cards {
                flex-direction: column;
                align-items: center;
            }
            .blog-card {
                width: 100%;
                max-width: 400px;
            }
        }
    </style>
</head>
<body>
    <section class="blog-hero">
        <h1>Our Blog</h1>
        <p>Latest news, tips, and insights on web development, design, SEO, and digital marketing.</p>
    </section>
    <section class="blog-section">
        <div class="blog-categories">
            <div class="blog-category active">All</div>
            <div class="blog-category">Web Development</div>
            <div class="blog-category">Design</div>
            <div class="blog-category">SEO</div>
            <div class="blog-category">Marketing</div>
            <div class="blog-category">Tips</div>
        </div>
        <div class="blog-cards">
            <!-- Blog Card 1 -->
            <div class="blog-card">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=600&q=80" alt="Web Development Trends">
                <div class="blog-card-content">
                    <div class="blog-card-title">Top Web Development Trends in 2024</div>
                    <div class="blog-card-meta">By Admin | April 2024 | Web Development</div>
                    <div class="blog-card-desc">Discover the latest technologies and frameworks shaping the future of web development. Stay ahead with these must-know trends.</div>
                    <a href="#">Read More</a>
                </div>
            </div>
            <!-- Blog Card 2 -->
            <div class="blog-card">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="UI/UX Design Tips">
                <div class="blog-card-content">
                    <div class="blog-card-title">UI/UX Design Tips for Modern Websites</div>
                    <div class="blog-card-meta">By Admin | March 2024 | Design</div>
                    <div class="blog-card-desc">Learn how to create visually stunning and user-friendly websites with these essential UI/UX design strategies.</div>
                    <a href="#">Read More</a>
                </div>
            </div>
            <!-- Blog Card 3 -->
            <div class="blog-card">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="SEO Optimization">
                <div class="blog-card-content">
                    <div class="blog-card-title">SEO Optimization: Boost Your Website Ranking</div>
                    <div class="blog-card-meta">By Admin | February 2024 | SEO</div>
                    <div class="blog-card-desc">Explore proven SEO techniques to improve your website's visibility and attract more organic traffic in 2024.</div>
                    <a href="#">Read More</a>
                </div>
            </div>
            <!-- Blog Card 4 -->
            <div class="blog-card">
                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Digital Marketing">
                <div class="blog-card-content">
                    <div class="blog-card-title">Digital Marketing Strategies for Small Businesses</div>
                    <div class="blog-card-meta">By Admin | January 2024 | Marketing</div>
                    <div class="blog-card-desc">Unlock the power of digital marketing with actionable strategies tailored for small businesses and startups.</div>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div style="text-align:center; margin: 40px 0 0 0;">
            <a href="#" style="display:inline-block; background:#2563eb; color:#fff; padding:12px 32px; border-radius:30px; font-size:1.1rem; font-weight:600; text-decoration:none; box-shadow:0 4px 16px rgba(30,64,175,0.10); transition:background 0.2s;">View All Posts</a>
        </div>
    </section>
    <section style="background:#f1f5f9; padding:48px 0 40px 0; margin-top:60px;">
        <div style="max-width:700px; margin:0 auto; text-align:center;">
            <h2 style="font-size:2rem; font-weight:700; color:#1e293b; margin-bottom:18px;">Want to contribute or have a topic in mind?</h2>
            <p style="font-size:1.1rem; color:#334155; margin-bottom:24px;">Contact us to share your ideas or submit a guest post. We love collaborating with creative minds!</p>
            <a href="contact.php" style="display:inline-block; background:#2563eb; color:#fff; padding:12px 32px; border-radius:30px; font-size:1.1rem; font-weight:600; text-decoration:none; box-shadow:0 4px 16px rgba(30,64,175,0.10); transition:background 0.2s;">Contact Us</a>
        </div>
    </section>
    <?php include 'include/footer.php'; ?>
</body>
</html>