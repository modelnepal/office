
    
<?php
// Include the header section
// include('header.php');
?>


<?php
    $site_name = "Khet";
    $tagline = "Smart Farming Solutions";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - <?php echo $tagline; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #2E7D32;
            --accent-color: #FFC107;
            --dark-color: #1B5E20;
            --light-bg: #F1F8E9;
        }

        /* Header Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand img {
            height: 40px;
            transition: all 0.3s ease;
        }

        .nav-link {
            color: var(--dark-color) !important;
            font-weight: 500;
            padding: 8px 16px !important;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .nav-link.active {
            color: var(--primary-color) !important;
            background: var(--light-bg);
            border-radius: 20px;
        }

        /* Feature Slider Styles */
        .feature-slider {
            padding: 80px 0;
            background: var(--light-bg);
        }

        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--light-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 32px;
            color: var(--primary-color);
        }

        /* CTA Section Styles */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 100px 0;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('assets/images/pattern.png') repeat;
            opacity: 0.1;
        }

        /* Contact Form Styles */
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-control {
            padding: 12px;
            border-radius: 10px;
            border: 2px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: none;
        }

        /* Footer Styles */
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 80px 0 20px;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                margin-top: 15px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }

            .nav-link {
                padding: 12px 20px !important;
            }

            .feature-card {
                margin: 10px 0;
            }
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .feature-slider {
                padding: 60px 0;
            }

            .cta-section {
                padding: 80px 0;
            }
        }

        @media (max-width: 992px) {
            .navbar-nav {
                padding: 20px 0;
            }

            .nav-link {
                padding: 10px 20px !important;
            }

            .navbar .btn {
                width: 100%;
                margin-top: 10px;
            }

            .feature-card {
                margin: 10px;
            }

            .footer {
                padding: 60px 0 20px;
            }
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                margin-top: 15px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }

            .feature-slider {
                padding: 40px 0;
            }

            .feature-card {
                margin: 10px 0;
            }

            .cta-section {
                padding: 60px 0;
            }

            .cta-section h2 {
                font-size: 2rem;
            }

            .contact-form {
                padding: 30px 20px;
            }

            .footer [class*="col-"] {
                margin-bottom: 30px;
            }

            .social-links {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                height: 30px;
            }

            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }

            .display-4 {
                font-size: 2rem;
            }

            .display-5 {
                font-size: 1.8rem;
            }

            .lead {
                font-size: 1rem;
            }

            .btn-lg {
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
            }

            .contact-form {
                padding: 20px 15px;
            }

            .footer {
                text-align: center;
            }

            .footer-links {
                margin-bottom: 20px;
            }

            .app-download-buttons {
                flex-direction: column;
            }

            .app-download-buttons .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        /* Additional Responsive Utilities */
        .text-sm-center {
            text-align: center !important;
        }

        .mb-sm-4 {
            margin-bottom: 1.5rem !important;
        }

        .px-sm-3 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* Carousel Styles */
        .carousel {
            margin-top: 76px; /* Adjust based on your navbar height */
        }

        .carousel-item {
            height: calc(100vh - 76px);
            min-height: 400px;
            background: #000;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
            opacity: 0.7;
        }

        .carousel-caption {
            bottom: 50%;
            transform: translateY(50%);
            background: rgba(0, 0, 0, 0.4);
            padding: 2rem;
            border-radius: 15px;
            max-width: 800px;
            margin: 0 auto;
        }

        .carousel-link {
            text-decoration: none;
            color: white;
        }

        .carousel-indicators {
            margin-bottom: 3rem;
        }

        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 5px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            opacity: 0.7;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
        }

        /* Responsive Carousel Styles */
        @media (max-width: 768px) {
            .carousel-item {
                height: 70vh;
            }

            .carousel-caption {
                padding: 1rem;
                bottom: 50%;
            }

            .carousel-caption h2 {
                font-size: 2rem;
            }

            .carousel-caption p {
                font-size: 1rem;
                margin-bottom: 1rem;
            }

            .carousel-caption .btn {
                padding: 0.5rem 1.5rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .carousel-item {
                height: 60vh;
            }

            .carousel-caption h2 {
                font-size: 1.5rem;
            }

            .carousel-caption p {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="<?php echo $site_name; ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#download" class="btn btn-success rounded-pill px-4">Download App</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Carousel Section -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            $carousel_items = [
                [
                    'image' => 'https://source.unsplash.com/1600x900/?farming,technology',
                    'title' => 'Smart Farming Solutions',
                    'description' => 'Transform your agriculture with technology',
                    'link' => '#features'
                ],
                [
                    'image' => 'https://source.unsplash.com/1600x900/?agriculture,digital',
                    'title' => 'Real-time Crop Monitoring',
                    'description' => 'Track your crops growth and health instantly',
                    'link' => '#monitoring'
                ],
                [
                    'image' => 'https://source.unsplash.com/1600x900/?farm,modern',
                    'title' => 'Market Price Updates',
                    'description' => 'Get latest market prices for better decisions',
                    'link' => '#prices'
                ]
            ];

            foreach ($carousel_items as $index => $item): ?>
                <button type="button" 
                        data-bs-target="#mainCarousel" 
                        data-bs-slide-to="<?php echo $index; ?>" 
                        <?php echo $index === 0 ? 'class="active"' : ''; ?>
                        aria-label="Slide <?php echo $index + 1; ?>">
                </button>
            <?php endforeach; ?>
        </div>

        <div class="carousel-inner">
            <?php foreach ($carousel_items as $index => $item): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <a href="<?php echo $item['link']; ?>" class="carousel-link">
                        <img src="<?php echo $item['image']; ?>" class="d-block w-100" alt="<?php echo $item['title']; ?>">
                        <div class="carousel-caption">
                            <h2 class="display-4 fw-bold mb-3"><?php echo $item['title']; ?></h2>
                            <p class="lead mb-4"><?php echo $item['description']; ?></p>
                            <button class="btn btn-success btn-lg rounded-pill px-4 py-2">
                                Learn More
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Features Section with Slider -->
    <section id="features" class="feature-slider">
        <div class="container px-sm-3">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Amazing Features</h2>
                <p class="lead text-muted">Discover what makes our app special</p>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    $features = [
                        [
                            'icon' => 'fas fa-seedling',
                            'title' => 'Crop Management',
                            'description' => 'Track and manage your crops efficiently'
                        ],
                        [
                            'icon' => 'fas fa-cloud-sun',
                            'title' => 'Weather Forecasting',
                            'description' => 'Get accurate weather predictions'
                        ],
                        [
                            'icon' => 'fas fa-chart-line',
                            'title' => 'Market Prices',
                            'description' => 'Stay updated with market trends'
                        ],
                        [
                            'icon' => 'fas fa-bug',
                            'title' => 'Pest Alerts',
                            'description' => 'Early warning system for pest control'
                        ]
                    ];

                    foreach ($features as $feature): ?>
                        <div class="swiper-slide">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="<?php echo $feature['icon']; ?>"></i>
                                </div>
                                <h3 class="h5 mb-3"><?php echo $feature['title']; ?></h3>
                                <p class="text-muted mb-0"><?php echo $feature['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container px-sm-3">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 text-center">
                    <h2 class="display-4 fw-bold mb-4">Ready to Transform Your Farming?</h2>
                    <p class="lead mb-4">Join thousands of farmers who are already using our app</p>
                    <a href="#download" class="btn btn-light btn-lg rounded-pill px-md-5 py-md-3 px-4 py-2">
                        Get Started Now
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="py-5">
        <div class="container px-sm-3">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="contact-form">
                        <div class="text-center mb-5">
                            <h2 class="h1 fw-bold">Get in Touch</h2>
                            <p class="text-muted">Have questions? We'd love to hear from you.</p>
                        </div>
                        <form action="process.php" method="POST">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-12">
                                    <select class="form-select">
                                        <option selected>Select Subject</option>
                                        <option>General Inquiry</option>
                                        <option>Technical Support</option>
                                        <option>Feedback</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container px-sm-3">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 text-center text-md-start">
                    <img src="assets/images/logo-white.png" alt="<?php echo $site_name; ?>" height="40" class="mb-4">
                    <p class="text-light opacity-75">Empowering farmers with smart technology for better farming practices and improved yields.</p>
                    <div class="social-links mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="text-white mb-4">Resources</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-white mb-4">Download App</h5>
                    <div class="d-flex flex-column gap-3">
                        <a href="#" class="btn btn-light">
                            <i class="fab fa-apple me-2"></i>Download on App Store
                        </a>
                        <a href="#" class="btn btn-light">
                            <i class="fab fa-google-play me-2"></i>Get it on Google Play
                        </a>
                    </div>
                </div>
            </div>
            <hr class="mt-5 mb-4 border-light opacity-10">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0 text-light opacity-75">&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-light opacity-75 me-3">Privacy Policy</a>
                    <a href="#" class="text-light opacity-75">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 40
                }
            }
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });

        // Initialize carousel with auto-scrolling
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = new bootstrap.Carousel(document.getElementById('mainCarousel'), {
                interval: 5000, // Change slide every 5 seconds
                wrap: true,    // Continuous loop
                keyboard: true, // Keyboard control
                pause: 'hover' // Pause on hover
            });
        });
    </script>
</body>
</html> 

<?php
// Include the header section
// include('footer.php');
?>