
    
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

        .carousel-item {
            height: 100vh;
            min-height: 300px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .feature-slider {
            padding: 50px 0;
        }

        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }

        .feature-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .cta-section {
            background: linear-gradient(rgba(76, 175, 80, 0.9), rgba(46, 125, 50, 0.9)),
                        url('assets/images/farm-bg.jpg') center/cover;
            padding: 100px 0;
            color: white;
            text-align: center;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>

    <!-- Carousel -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <?php
            $carousel_items = [
                [
                    'image' => 'https://source.unsplash.com/1600x900/?farming',
                    'title' => 'Smart Farming Solutions',
                    'description' => 'Transform your farming with technology'
                ],
                [
                    'image' => 'https://source.unsplash.com/1600x900/?agriculture',
                    'title' => 'Track Your Crops',
                    'description' => 'Monitor growth and health in real-time'
                ],
                [
                    'image' => 'https://source.unsplash.com/1600x900/?farm',
                    'title' => 'Market Insights',
                    'description' => 'Get the best prices for your produce'
                ]
            ];

            foreach ($carousel_items as $index => $item): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $item['image']; ?>" class="d-block w-100" alt="<?php echo $item['title']; ?>">
                    <div class="carousel-caption">
                        <h2><?php echo $item['title']; ?></h2>
                        <p><?php echo $item['description']; ?></p>
                        <a href="#download" class="btn btn-success btn-lg">Get Started</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Features Slider -->
    <section class="feature-slider">
        <div class="container">
            <h2 class="text-center mb-5">Key Features</h2>
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
                                <h3><?php echo $feature['title']; ?></h3>
                                <p><?php echo $feature['description']; ?></p>
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
        <div class="container">
            <h2 class="mb-4">Ready to Transform Your Farming?</h2>
            <p class="lead mb-4">Join thousands of farmers who are already using Khet to improve their yields and profits</p>
            <a href="#download" class="btn btn-light btn-lg">Download Now</a>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <h2 class="text-center mb-4">Get in Touch</h2>
                        <form action="process.php" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" name="subject" required>
                                    <option value="">Select Subject</option>
                                    <option>General Inquiry</option>
                                    <option>Technical Support</option>
                                    <option>Feedback</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>About <?php echo $site_name; ?></h5>
                    <p>Empowering farmers with smart technology for better farming practices and improved yields.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#features" class="text-light">Features</a></li>
                        <li><a href="#download" class="text-light">Download App</a></li>
                        <li><a href="#blog" class="text-light">Blog</a></li>
                        <li><a href="#contact" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Download App</h5>
                    <div class="app-buttons">
                        <a href="#" class="btn btn-light mb-2 me-2">
                            <i class="fab fa-apple me-2"></i>App Store
                        </a>
                        <a href="#" class="btn btn-light mb-2">
                            <i class="fab fa-google-play me-2"></i>Google Play
                        </a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-light me-3">Privacy Policy</a>
                    <a href="#" class="text-light me-3">Terms of Service</a>
                    <a href="#" class="text-light">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
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
        });
    </script>
</body>
</html> 



<?php
// Include the header section
// include('footer.php');
?>