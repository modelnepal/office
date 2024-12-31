
    
<?php
// Include the header section
// include('header.php');
?>


<?php
    $site_name = "Examaayo";
    $tagline = "Your Path to Exam Success";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - <?php echo $tagline; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4F46E5;
            --secondary-color: #10B981;
            --accent-color: #F59E0B;
            --dark-color: #1F2937;
            --light-bg: #F8FAFC;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
        }

        .hero-section {
            background: linear-gradient(rgba(79, 70, 229, 0.9), rgba(16, 185, 129, 0.9)),
                        url('assets/images/students-studying.jpg') center/cover;
            min-height: 100vh;
            padding-top: 80px;
            color: white;
        }

        .service-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 12px;
            background: var(--light-bg);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .pricing-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            height: 100%;
            transition: transform 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        .pricing-card.featured {
            border: 2px solid var(--primary-color);
            transform: scale(1.05);
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin: 1rem 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .resource-card {
            background: var(--light-bg);
            border-radius: 15px;
            padding: 2rem;
            height: 100%;
            transition: transform 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-5px);
        }

        .app-badge {
            height: 40px;
            margin: 10px;
        }

        .gradient-divider {
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            width: 60px;
            margin: 2rem auto;
        }

        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9) !important;
        }

        @media (max-width: 768px) {
            .hero-section {
                text-align: center;
                padding-top: 60px;
            }

            .pricing-card.featured {
                transform: none;
            }

            .app-badge {
                height: 35px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/examaayo-logo.png" alt="<?php echo $site_name; ?>" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#resources">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <a href="#login" class="btn btn-outline-primary me-2">Login</a>
                    <a href="#signup" class="btn btn-primary">Start Prep</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Ace Your Exams with Examaayo</h1>
                    <p class="lead mb-4">Comprehensive exam preparation tools, resources, and support to help you succeed.</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="#signup" class="btn btn-light btn-lg">Get Started Now</a>
                        <a href="#services" class="btn btn-outline-light btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="assets/images/hero-illustration.svg" alt="Exam Success" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">About Examaayo</h2>
                <div class="gradient-divider"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="assets/images/about-illustration.svg" alt="About Us" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <p class="lead mb-4">Examaayo is a one-stop solution for all your exam preparation needs, offering personalized study plans, practice tests, expert guidance, and much more.</p>
                    <p class="mb-4">Our mission is to make exam preparation easier, more accessible, and effective, helping students unlock their full potential.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-users fa-2x text-primary me-3"></i>
                                <div>
                                    <h4 class="h5 mb-0">10K+</h4>
                                    <p class="small mb-0">Active Students</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-graduation-cap fa-2x text-primary me-3"></i>
                                <div>
                                    <h4 class="h5 mb-0">95%</h4>
                                    <p class="small mb-0">Success Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#about-page" class="btn btn-primary">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Why Choose Examaayo?</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Experience the difference with our comprehensive exam preparation platform</p>
            </div>
            <div class="row g-4">
                <?php
                $benefits = [
                    [
                        'icon' => 'fas fa-user-graduate',
                        'title' => 'Personalized Study Plans',
                        'description' => 'Get a study plan that fits your goals and timeline.'
                    ],
                    [
                        'icon' => 'fas fa-book-reader',
                        'title' => 'Comprehensive Resources',
                        'description' => 'Access everything you need to prepare: practice tests, study materials, expert advice.'
                    ],
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Track Your Progress',
                        'description' => 'Stay motivated by tracking your progress and understanding areas of improvement.'
                    ],
                    [
                        'icon' => 'fas fa-chalkboard-teacher',
                        'title' => 'Expert Guidance',
                        'description' => 'Learn from experts with years of experience in exam preparation.'
                    ],
                    [
                        'icon' => 'fas fa-clock',
                        'title' => 'Flexible Learning',
                        'description' => 'Study at your own pace, anytime, anywhere.'
                    ]
                ];

                foreach ($benefits as $benefit): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="feature-icon mx-auto">
                                    <i class="<?php echo $benefit['icon']; ?>"></i>
                                </div>
                                <h3 class="h5 mb-3"><?php echo $benefit['title']; ?></h3>
                                <p class="mb-0"><?php echo $benefit['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-5">
                <a href="#signup" class="btn btn-primary btn-lg">Start Your Preparation Today</a>
            </div>
        </div>
    </section>

    <!-- Free Resources Section -->
    <section id="resources" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Free Exam Preparation Resources</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Start your preparation with our free resources</p>
            </div>
            <div class="row g-4">
                <?php
                $resources = [
                    [
                        'icon' => 'fas fa-clipboard-list',
                        'title' => 'Free Mock Tests',
                        'description' => 'Try our free mock tests to assess your current knowledge.',
                        'link' => '#mock-tests'
                    ],
                    [
                        'icon' => 'fas fa-lightbulb',
                        'title' => 'Study Tips Blog',
                        'description' => 'Access our blog for expert study tips and exam strategies.',
                        'link' => '#blog'
                    ],
                    [
                        'icon' => 'fas fa-file-download',
                        'title' => 'Guides & Checklists',
                        'description' => 'Download free exam preparation guides and checklists.',
                        'link' => '#guides'
                    ]
                ];

                foreach ($resources as $resource): ?>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="feature-icon mx-auto">
                                    <i class="<?php echo $resource['icon']; ?>"></i>
                                </div>
                                <h3 class="h5 mb-3"><?php echo $resource['title']; ?></h3>
                                <p class="mb-4"><?php echo $resource['description']; ?></p>
                                <a href="<?php echo $resource['link']; ?>" class="btn btn-outline-primary">Access Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Get in Touch</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Have questions? We're here to help!</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <form action="process.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select" name="subject" required>
                                            <option value="">Select Subject</option>
                                            <option value="general">General Inquiry</option>
                                            <option value="support">Technical Support</option>
                                            <option value="feedback">Feedback</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row g-4 mt-4 text-center">
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center">
                                <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                <h5>Email</h5>
                                <p class="mb-0">support@examaayo.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center">
                                <i class="fas fa-phone fa-2x text-primary mb-2"></i>
                                <h5>Phone</h5>
                                <p class="mb-0">+1 234 567 8900</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center">
                                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                <h5>Address</h5>
                                <p class="mb-0">123 Exam Street, Education City</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Services</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Everything you need to succeed in your exams</p>
            </div>
            <div class="row g-4">
                <?php
                $services = [
                    [
                        'icon' => 'fas fa-book',
                        'title' => 'Exam Preparation',
                        'description' => 'Customized study plans tailored to your exam needs.'
                    ],
                    [
                        'icon' => 'fas fa-clipboard-check',
                        'title' => 'Mock Tests',
                        'description' => 'Access hundreds of practice tests and questions from past exams.'
                    ],
                    [
                        'icon' => 'fas fa-chalkboard-teacher',
                        'title' => 'Expert Mentorship',
                        'description' => 'Get one-on-one mentoring from exam experts to guide your preparation.'
                    ],
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Progress Tracking',
                        'description' => 'Track your preparation with progress reports and personalized feedback.'
                    ]
                ];

                foreach ($services as $service): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-card h-100 p-4">
                            <div class="feature-icon mx-auto">
                                <i class="<?php echo $service['icon']; ?>"></i>
                            </div>
                            <h3 class="h5 text-center mb-3"><?php echo $service['title']; ?></h3>
                            <p class="text-center mb-0"><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Affordable Plans for Every Student</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Choose the plan that fits your needs</p>
            </div>
            <div class="row g-4">
                <?php
                $plans = [
                    [
                        'name' => 'Free',
                        'price' => '0',
                        'features' => [
                            'Limited practice questions',
                            'Basic study materials',
                            'Community access'
                        ],
                        'featured' => false
                    ],
                    [
                        'name' => 'Premium',
                        'price' => '29',
                        'features' => [
                            'Unlimited mock tests',
                            'Personalized study plan',
                            'Expert mentorship',
                            'Progress tracking',
                            'Priority support'
                        ],
                        'featured' => true
                    ],
                    [
                        'name' => 'Group',
                        'price' => '49',
                        'features' => [
                            'All Premium features',
                            'Group study sessions',
                            'Dedicated mentor',
                            'Custom learning path'
                        ],
                        'featured' => false
                    ]
                ];

                foreach ($plans as $plan): ?>
                    <div class="col-md-4">
                        <div class="pricing-card text-center <?php echo $plan['featured'] ? 'featured' : ''; ?>">
                            <h3 class="h4 mb-3"><?php echo $plan['name']; ?></h3>
                            <div class="price-tag mb-4">
                                <span class="display-4">$<?php echo $plan['price']; ?></span>
                                <span class="text-muted">/month</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <?php foreach ($plan['features'] as $feature): ?>
                                    <li class="mb-2">
                                        <i class="fas fa-check text-success me-2"></i>
                                        <?php echo $feature; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#signup" class="btn <?php echo $plan['featured'] ? 'btn-primary' : 'btn-outline-primary'; ?> w-100">
                                Choose Plan
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section id="success-stories" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Student Success Stories</h2>
                <div class="gradient-divider"></div>
                <p class="lead">See what our students have achieved</p>
            </div>
            <div class="row g-4">
                <?php
                $testimonials = [
                    [
                        'name' => 'John Doe',
                        'exam' => 'GMAT',
                        'score' => '750',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'Thanks to Examaayo, I passed my entrance exam with flying colors. The mock tests were incredibly helpful!'
                    ],
                    [
                        'name' => 'Jane Smith',
                        'exam' => 'GRE',
                        'score' => '325',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'The personalized study plan and progress tracking made my preparation smooth and organized.'
                    ]
                ];

                foreach ($testimonials as $testimonial): ?>
                    <div class="col-md-6">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>" class="rounded-circle me-3" width="60">
                                <div>
                                    <h4 class="h5 mb-1"><?php echo $testimonial['name']; ?></h4>
                                    <p class="small text-muted mb-0"><?php echo $testimonial['exam']; ?> Score: <?php echo $testimonial['score']; ?></p>
                                </div>
                            </div>
                            <p class="mb-0"><?php echo $testimonial['text']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- App Download Section -->
    <section id="app" class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Download Examaayo App</h2>
            <p class="lead mb-4">Take your exam preparation with you on the go</p>
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

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>About <?php echo $site_name; ?></h5>
                    <p>Helping students achieve their academic goals through comprehensive exam preparation resources and support.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-light">Home</a></li>
                        <li><a href="#services" class="text-light">Services</a></li>
                        <li><a href="#pricing" class="text-light">Pricing</a></li>
                        <li><a href="#contact" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Study Materials</a></li>
                        <li><a href="#" class="text-light">Mock Tests</a></li>
                        <li><a href="#" class="text-light">Blog</a></li>
                        <li><a href="#" class="text-light">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Stay Updated</h5>
                    <p>Subscribe to our newsletter for exam tips and updates.</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email address">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
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
</body>
</html> 




<?php
// Include the header section
// include('footer.php');
?>