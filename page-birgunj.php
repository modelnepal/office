
    
<?php
// Include the header section
// include('header.php');
?>



<?php
    $site_name = "Birgunj.app";
    $languages = ['English', 'नेपाली'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - Your Complete City Guide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #FF6B6B;
            --secondary-color: #4ECDC4;
            --text-color: #2C3E50;
            --light-bg: #F7F9FC;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
        }

        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://via.placeholder.com/1920x1080') center/cover;
            min-height: 100vh;
            padding-top: 80px;
            color: white;
        }

        .section-padding {
            padding: 100px 0;
        }

        .app-badge {
            height: 40px;
            margin: 10px;
        }

        .feature-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin: 20px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .pricing-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="<?php echo $site_name; ?>" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-globe"></i> Language
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach($languages as $lang): ?>
                                <li><a class="dropdown-item" href="#"><?php echo $lang; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
                <a href="#download" class="btn btn-primary ms-3">Download App</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Stay Connected to Birgunj with Birgunj.app</h1>
                    <p class="lead mb-4">Access local businesses, events, services, and much more – all in one app.</p>
                    <div class="app-download-buttons">
                        <a href="#" class="me-3">
                            <img src="assets/images/app-store.png" alt="Download on App Store" class="app-badge">
                        </a>
                        <a href="#">
                            <img src="assets/images/google-play.png" alt="Get it on Google Play" class="app-badge">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">Explore the Features of Birgunj.app</h2>
            <div class="row g-4">
                <?php
                $features = [
                    [
                        'icon' => 'fas fa-store',
                        'title' => 'Local Business Listings',
                        'description' => 'Find the best businesses around you—shops, restaurants, and services.'
                    ],
                    [
                        'icon' => 'fas fa-calendar-alt',
                        'title' => 'Event Listings & Updates',
                        'description' => 'Stay informed about local events, festivals, and activities happening around Birgunj.'
                    ],
                    [
                        'icon' => 'fas fa-city',
                        'title' => 'City Services Access',
                        'description' => 'Access information about city services like transportation schedules, utility payments, and emergency contacts.'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Community Engagement',
                        'description' => 'Join the conversation and connect with other residents of Birgunj through forums and local discussions.'
                    ],
                    [
                        'icon' => 'fas fa-bell',
                        'title' => 'Real-Time Updates',
                        'description' => 'Get live updates on news, events, and services to stay informed.'
                    ]
                ];

                foreach ($features as $feature): ?>
                    <div class="col-md-4">
                        <div class="feature-card card h-100">
                            <div class="card-body text-center">
                                <i class="<?php echo $feature['icon']; ?> fa-3x mb-3 text-primary"></i>
                                <h3 class="h5"><?php echo $feature['title']; ?></h3>
                                <p class="card-text"><?php echo $feature['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose" class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose Birgunj.app?</h2>
            <div class="row g-4">
                <?php
                $benefits = [
                    [
                        'icon' => 'fas fa-mobile-alt',
                        'title' => 'All-in-One Platform',
                        'description' => 'Find everything you need in Birgunj, from local businesses to city services, all in one app.'
                    ],
                    [
                        'icon' => 'fas fa-user-friends',
                        'title' => 'Simple and Easy-to-Use',
                        'description' => 'Designed for everyone, whether you\'re tech-savvy or not.'
                    ],
                    [
                        'icon' => 'fas fa-clock',
                        'title' => 'Real-Time Information',
                        'description' => 'Always stay updated with live event updates, business hours, and service changes.'
                    ],
                    [
                        'icon' => 'fas fa-comments',
                        'title' => 'Community-Driven',
                        'description' => 'Engage with locals, join discussions, and contribute to the city\'s growth.'
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Secure & Reliable',
                        'description' => 'Your privacy and data security are our top priority.'
                    ]
                ];

                foreach ($benefits as $benefit): ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="<?php echo $benefit['icon']; ?> fa-3x mb-3 text-primary"></i>
                                <h3 class="h5"><?php echo $benefit['title']; ?></h3>
                                <p class="card-text"><?php echo $benefit['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">What Our Users Are Saying</h2>
            <div class="row">
                <?php
                $testimonials = [
                    [
                        'name' => 'Ram Kumar',
                        'photo' => 'https://via.placeholder.com/100',
                        'text' => 'I use Birgunj.app daily to find the best local restaurants and events. It\'s so convenient!'
                    ],
                    [
                        'name' => 'Sita Sharma',
                        'photo' => 'https://via.placeholder.com/100',
                        'text' => 'This app has made it so much easier to stay connected with my city\'s happenings.'
                    ],
                    [
                        'name' => 'Amit Patel',
                        'photo' => 'https://via.placeholder.com/100',
                        'text' => 'The real-time updates feature is amazing. I never miss any important city events now.'
                    ]
                ];

                foreach ($testimonials as $testimonial): ?>
                    <div class="col-lg-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="<?php echo $testimonial['photo']; ?>" alt="<?php echo $testimonial['name']; ?>" class="rounded-circle me-3" width="60">
                                <h4 class="h5 mb-0"><?php echo $testimonial['name']; ?></h4>
                            </div>
                            <p class="mb-0"><?php echo $testimonial['text']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="section-padding bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Download Birgunj.app Now</h2>
            <p class="lead mb-4">Get everything you need in Birgunj at your fingertips. Download the app today!</p>
            <div class="app-download-buttons">
                <a href="#" class="me-3">
                    <img src="assets/images/app-store.png" alt="Download on App Store" class="app-badge">
                </a>
                <a href="#">
                    <img src="assets/images/google-play.png" alt="Get it on Google Play" class="app-badge">
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Get in Touch</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form action="process.php" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5><?php echo $site_name; ?></h5>
                    <p>Your complete city guide for Birgunj</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-light">Home</a></li>
                        <li><a href="#features" class="text-light">Features</a></li>
                        <li><a href="#download" class="text-light">Download</a></li>
                        <li><a href="#contact" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Download App</h5>
                    <div class="app-download-buttons">
                        <a href="#" class="me-3">
                            <img src="assets/images/app-store.png" alt="Download on App Store" class="app-badge">
                        </a>
                        <a href="#">
                            <img src="assets/images/google-play.png" alt="Get it on Google Play" class="app-badge">
                        </a>
                    </div>
                </div>
            </div>
            <hr class="mt-4">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-light me-3">Privacy Policy</a>
                    <a href="#" class="text-light">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 



<?php
// Include the header section
// include('footer.php');
?>