
    
<?php
// Include the header section
include('header.php');
?>



<?php
    $site_name = "Cyberpur";
    $tagline = "Advanced Cybersecurity Solutions";
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
            --dark-color: #1E293B;
            --accent-color: #F59E0B;
            --light-bg: #F8FAFC;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
        }

        .hero-section {
            background: linear-gradient(rgba(30, 41, 59, 0.9), rgba(30, 41, 59, 0.9)),
                        url('assets/images/cyber-bg.jpg') center/cover;
            min-height: 100vh;
            padding-top: 80px;
            color: white;
        }

        .service-card {
            border: none;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            border-radius: 12px;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .stat-card {
            background: var(--light-bg);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            border-bottom: 4px solid var(--primary-color);
        }

        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin: 1rem 0;
        }

        .security-feature {
            background: var(--light-bg);
            border-radius: 12px;
            padding: 2rem;
            height: 100%;
            transition: transform 0.3s ease;
        }

        .security-feature:hover {
            transform: translateY(-5px);
        }

        .gradient-divider {
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            width: 60px;
            margin: 2rem auto;
        }

        .alert-banner {
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Alert Banner -->
    <div class="alert-banner text-center">
        <div class="container">
            🔒 New: Enhanced Protection Against Ransomware - <a href="#" class="text-white text-decoration-underline">Learn More</a>
        </div>
    </div>

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
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#solutions">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <a href="#login" class="btn btn-outline-primary me-2">Login</a>
                    <a href="#signup" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Stay Secure, Stay Protected with Cyberpur</h1>
                    <p class="lead mb-4">Next-gen cybersecurity solutions to safeguard your digital presence from threats.</p>
                    <div class="d-flex gap-3">
                        <a href="#solutions" class="btn btn-primary btn-lg">Explore Solutions</a>
                        <a href="#audit" class="btn btn-outline-light btn-lg">Free Security Audit</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/security-illustration.svg" alt="Cybersecurity" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <?php
                $stats = [
                    [
                        'number' => '500+',
                        'label' => 'Protected Businesses',
                        'icon' => 'fas fa-building'
                    ],
                    [
                        'number' => '99.9%',
                        'label' => 'Uptime Security',
                        'icon' => 'fas fa-shield-alt'
                    ],
                    [
                        'number' => '24/7',
                        'label' => 'Threat Monitoring',
                        'icon' => 'fas fa-clock'
                    ],
                    [
                        'number' => '10K+',
                        'label' => 'Threats Blocked',
                        'icon' => 'fas fa-ban'
                    ]
                ];

                foreach ($stats as $stat): ?>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="<?php echo $stat['icon']; ?> fa-2x text-primary mb-3"></i>
                            <h3 class="h2 fw-bold mb-2"><?php echo $stat['number']; ?></h3>
                            <p class="mb-0 text-muted"><?php echo $stat['label']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Services</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Comprehensive cybersecurity solutions for your digital world</p>
            </div>
            <div class="row g-4">
                <?php
                $services = [
                    [
                        'icon' => 'fas fa-shield-virus',
                        'title' => 'Threat Protection',
                        'description' => 'Advanced security tools to protect against malware, ransomware, and cyber threats.'
                    ],
                    [
                        'icon' => 'fas fa-network-wired',
                        'title' => 'Network Security',
                        'description' => 'Secure your network infrastructure with firewalls and intrusion detection systems.'
                    ],
                    [
                        'icon' => 'fas fa-cloud-upload-alt',
                        'title' => 'Cloud Security',
                        'description' => 'Protect your cloud-based assets with advanced encryption and monitoring.'
                    ],
                    [
                        'icon' => 'fas fa-user-shield',
                        'title' => 'Identity Protection',
                        'description' => 'Safeguard your digital identity and personal information from theft.'
                    ]
                ];

                foreach ($services as $service): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-card h-100 p-4">
                            <div class="service-icon">
                                <i class="<?php echo $service['icon']; ?> fa-lg"></i>
                            </div>
                            <h3 class="h5 mb-3"><?php echo $service['title']; ?></h3>
                            <p class="mb-0"><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Security Features</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Advanced protection for modern threats</p>
            </div>
            <div class="row g-4">
                <?php
                $features = [
                    [
                        'icon' => 'fas fa-robot',
                        'title' => 'AI-Powered Detection',
                        'description' => 'Machine learning algorithms that detect and prevent new threats.'
                    ],
                    [
                        'icon' => 'fas fa-lock',
                        'title' => 'End-to-End Encryption',
                        'description' => 'Military-grade encryption for all your sensitive data.'
                    ],
                    [
                        'icon' => 'fas fa-history',
                        'title' => 'Real-time Backup',
                        'description' => 'Automatic backup systems to protect your data.'
                    ]
                ];

                foreach ($features as $feature): ?>
                    <div class="col-md-4">
                        <div class="security-feature text-center">
                            <i class="<?php echo $feature['icon']; ?> fa-3x text-primary mb-3"></i>
                            <h3 class="h5 mb-3"><?php echo $feature['title']; ?></h3>
                            <p class="mb-0"><?php echo $feature['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Secure Your Digital Assets?</h2>
            <p class="lead mb-4">Join hundreds of businesses that trust Cyberpur for their cybersecurity needs.</p>
            <a href="#contact" class="btn btn-light btn-lg me-3">Get Started</a>
            <a href="#demo" class="btn btn-outline-light btn-lg">Request Demo</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>About <?php echo $site_name; ?></h5>
                    <p>Leading provider of advanced cybersecurity solutions, protecting businesses and individuals in the digital world.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-light">Home</a></li>
                        <li><a href="#services" class="text-light">Services</a></li>
                        <li><a href="#about" class="text-light">About Us</a></li>
                        <li><a href="#contact" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Threat Protection</a></li>
                        <li><a href="#" class="text-light">Network Security</a></li>
                        <li><a href="#" class="text-light">Cloud Security</a></li>
                        <li><a href="#" class="text-light">Identity Protection</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Stay Updated</h5>
                    <p>Subscribe to our newsletter for the latest cybersecurity insights.</p>
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
include('footer.php');
?>