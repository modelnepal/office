
    
<?php
// Include the header section
// include('header.php');
?>

<?php
// Site Configuration
$site_name = "Chunaab";
$tagline = "Your Digital Election Platform";

// Navigation Items
$nav_items = [
    [
        'title' => 'Elections',
        'type' => 'dropdown',
        'items' => [
            ['title' => 'Current Elections', 'link' => '#current'],
            ['title' => 'Past Elections', 'link' => '#past'],
            ['title' => 'Election Calendar', 'link' => '#calendar']
        ]
    ],
    [
        'title' => 'Candidates',
        'type' => 'dropdown',
        'items' => [
            ['title' => 'Browse Candidates', 'link' => '#browse'],
            ['title' => 'Compare Candidates', 'link' => '#compare'],
            ['title' => 'Candidate Profiles', 'link' => '#profiles']
        ]
    ],
    [
        'title' => 'Voter Guide', 'link' => '#guide', 'type' => 'link'
    ],
    [
        'title' => 'News & Updates', 'link' => '#news', 'type' => 'link'
    ],
    [
        'title' => 'Help Center', 'link' => '#help', 'type' => 'link'
    ]
];

// Features List
$features = [
    [
        'icon' => 'fas fa-vote-yea',
        'title' => 'Easy Voting Process',
        'description' => 'Simple and secure digital voting system'
    ],
    [
        'icon' => 'fas fa-user-shield',
        'title' => 'Voter Verification',
        'description' => 'Advanced security measures to ensure authentic voting'
    ],
    [
        'icon' => 'fas fa-chart-bar',
        'title' => 'Live Results',
        'description' => 'Real-time election results and analytics'
    ]
];

// Add custom styles specific to Chunaab
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site_name) ?> - <?= htmlspecialchars($tagline) ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #FF6B6B;      /* Energetic Red */
            --secondary-color: #4ECDC4;    /* Teal */
            --accent-color: #45B7D1;       /* Blue */
            --dark-color: #2C3E50;         /* Dark Blue */
            --light-bg: #F7F9FC;           /* Light Background */
            --success-color: #2ECC71;      /* Green */
            --warning-color: #F1C40F;      /* Yellow */
        }

        /* Modern Card Styles */
        .feature-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        /* Hero Section Styles */
        .hero-section {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('assets/images/pattern.svg') repeat;
            opacity: 0.1;
            animation: moveBackground 20s linear infinite;
        }

        @keyframes moveBackground {
            from { background-position: 0 0; }
            to { background-position: 100% 100%; }
        }

        /* Navigation Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
        }

        .nav-link {
            font-weight: 500;
            padding: 8px 16px !important;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: var(--light-bg);
            color: var(--primary-color) !important;
        }

        /* Button Styles */
        .btn-primary {
            background: linear-gradient(45deg, #6B73FF, #000DFF);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 13, 255, 0.2);
        }

        /* Stats Counter */
        .stats-counter {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .stats-counter .number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        /* Timeline Component */
        .election-timeline {
            position: relative;
            padding: 20px 0;
        }

        .timeline-item {
            padding: 20px;
            border-left: 3px solid var(--primary-color);
            margin-left: 20px;
            position: relative;
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.5s ease;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 24px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--primary-color);
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0 60px;
            }

            .stats-counter .number {
                font-size: 2rem;
            }

            .timeline-item {
                margin-left: 10px;
            }
        }

        /* Add more custom styles as needed */

        /* Carousel Enhancements */
        .carousel-item {
            height: 70vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Feature Cards */
        .feature-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .icon-box {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--light-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        /* List Group Enhancements */
        .list-group-item {
            border: none;
            margin-bottom: 8px;
            border-radius: 8px !important;
            transition: all 0.3s ease;
        }

        .list-group-item:hover {
            transform: translateX(5px);
        }

        /* Sticky Footer */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .footer {
            margin-top: auto;
        }

        /* Breadcrumb Styling */
        .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0;
        }

        .breadcrumb-item a {
            color: var(--primary-color);
            text-decoration: none;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .carousel-item {
                height: 50vh;
            }

            .carousel-caption {
                padding: 1rem;
                max-width: 90%;
            }

            .feature-card {
                margin-bottom: 20px;
            }
        }

        /* Gallery Styles */
        .gallery-card {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
        }

        .gallery-card img {
            height: 250px;
            object-fit: cover;
        }

        /* Events Carousel Styles */
        .events-swiper {
            padding: 30px 50px;
        }

        .event-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .event-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .event-content {
            padding: 20px;
        }

        /* Modal Styles */
        .modal-content {
            border: none;
            border-radius: 15px;
        }

        .modal-header {
            border-bottom: none;
            padding: 20px 30px;
        }

        .modal-body {
            padding: 30px;
        }

        .modal-footer {
            border-top: none;
            padding: 20px 30px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .events-swiper {
                padding: 30px 0;
            }

            .event-card img {
                height: 150px;
            }

            .event-content {
                padding: 15px;
            }
        }

        /* Modern Gradient Backgrounds */
        .hero-section {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('assets/images/pattern.svg') repeat;
            opacity: 0.1;
            animation: moveBackground 20s linear infinite;
        }

        @keyframes moveBackground {
            from { background-position: 0 0; }
            to { background-position: 100% 100%; }
        }

        /* Glassmorphism Effects */
        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
        }

        /* Modern Button Styles */
        .btn-primary {
            background: linear-gradient(45deg, #6B73FF, #000DFF);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 13, 255, 0.2);
        }

        /* Animated Cards */
        .gallery-card {
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .gallery-card:hover {
            transform: rotateY(5deg) translateY(-5px);
        }

        .gallery-card img {
            transition: all 0.5s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.05);
        }

        /* Event Card Enhancements */
        .event-card {
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .event-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .event-content {
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.8));
            padding: 30px;
            color: white;
        }

        /* Timeline Animation */
        .timeline-item {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.5s ease;
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Floating Elements */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Modern List Group */
        .list-group-item {
            border-radius: 15px !important;
            margin-bottom: 10px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .list-group-item:hover {
            background: linear-gradient(45deg, #f3f4f6, #ffffff);
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Modal Enhancements */
        .modal-content {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .modal.fade .modal-dialog {
            transform: scale(0.8);
        }

        .modal.show .modal-dialog {
            transform: scale(1);
        }

        /* Footer Gradient */
        .footer {
            background: linear-gradient(to right, #1a1c20, #2d3436);
            color: white;
            padding: 40px 0;
        }

        /* Responsive Improvements */
        @media (max-width: 768px) {
            .btn-primary {
                padding: 10px 20px;
            }

            .event-content {
                padding: 20px;
            }

            .modal-content {
                margin: 10px;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #6B73FF, #000DFF);
            border-radius: 5px;
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: white;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loading::after {
            content: '';
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #6B73FF;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Footer Styles */
        .footer-section {
            background: linear-gradient(to right, #1a1c20, #2d3436);
            position: relative;
        }

        .footer-title {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 40px;
            height: 2px;
            background: var(--primary-color);
        }

        .text-light-gray {
            color: #a0a0a0 !important;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #a0a0a0;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: #fff;
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--primary-color);
            color: #fff;
            transform: translateY(-3px);
        }

        .footer-newsletter .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 0.8rem 1rem;
        }

        .footer-newsletter .form-control::placeholder {
            color: #a0a0a0;
        }

        .app-btn {
            display: inline-flex;
            align-items: center;
            padding: 8px 16px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .app-btn i {
            margin-right: 8px;
            font-size: 1.2rem;
        }

        .app-btn:hover {
            background: var(--primary-color);
            color: #fff;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .footer-section {
                text-align: center;
            }

            .footer-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .social-links {
                justify-content: center;
            }

            .footer-links a:hover {
                transform: none;
            }
        }

        /* Features Slider */
        .features-slider {
            position: relative;
            overflow: hidden;
        }

        .feature-slide {
            opacity: 0;
            transition: opacity 0.5s ease;
            position: absolute;
            width: 100%;
        }

        .feature-slide.active {
            opacity: 1;
            position: relative;
        }

        /* Dynamic List Animations */
        .list-item-enter {
            opacity: 0;
            transform: translateX(-20px);
        }

        .list-item-enter-active {
            opacity: 1;
            transform: translateX(0);
            transition: all 0.3s ease;
        }

        .list-item-exit {
            opacity: 1;
        }

        .list-item-exit-active {
            opacity: 0;
            transform: translateX(20px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
    <!-- Navbar with Offcanvas -->
    <nav class="navbar navbar-expand-lg fixed-top bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="<?= htmlspecialchars($site_name) ?>" height="40">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Desktop Navigation -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <?php foreach ($nav_items as $item): ?>
                        <?php if ($item['type'] === 'dropdown'): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <?= htmlspecialchars($item['title']) ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($item['items'] as $subitem): ?>
                                        <li>
                                            <a class="dropdown-item" href="<?= htmlspecialchars($subitem['link']) ?>">
                                                <?= htmlspecialchars($subitem['title']) ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= htmlspecialchars($item['link']) ?>">
                                    <?= htmlspecialchars($item['title']) ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <div class="d-flex">
                    <a href="#login" class="btn btn-outline-primary me-2">Login</a>
                    <a href="#signup" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title"><?= htmlspecialchars($site_name) ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <?php foreach ($nav_items as $item): ?>
                    <?php if ($item['type'] === 'dropdown'): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <?= htmlspecialchars($item['title']) ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($item['items'] as $subitem): ?>
                                    <li>
                                        <a class="dropdown-item" href="<?= htmlspecialchars($subitem['link']) ?>">
                                            <?= htmlspecialchars($subitem['title']) ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= htmlspecialchars($item['link']) ?>">
                                <?= htmlspecialchars($item['title']) ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <div class="mt-4">
                <a href="#login" class="btn btn-outline-primary w-100 mb-2">Login</a>
                <a href="#signup" class="btn btn-primary w-100">Sign Up</a>
            </div>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb" class="bg-light py-2">
        <div class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Elections</a></li>
                <li class="breadcrumb-item active" aria-current="page">Current Elections</li>
            </ol>
        </div>
    </nav>

    <!-- Enhanced Hero Section with Carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/election1.jpg" class="d-block w-100" alt="Election">
                <div class="carousel-caption">
                    <h1>Current Elections</h1>
                    <p>Stay informed about ongoing elections</p>
                    <a href="#current-elections" class="btn btn-primary btn-lg">View Details</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/candidates.jpg" class="d-block w-100" alt="Candidates">
                <div class="carousel-caption">
                    <h1>Meet the Candidates</h1>
                    <p>Learn about your representatives</p>
                    <a href="#candidates" class="btn btn-primary btn-lg">Browse Candidates</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/results.jpg" class="d-block w-100" alt="Results">
                <div class="carousel-caption">
                    <h1>Live Results</h1>
                    <p>Real-time election updates</p>
                    <a href="#results" class="btn btn-primary btn-lg">View Results</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Grid System with Features -->
    <section class="features-grid py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                $dynamic_features = [
                    [
                        'icon' => 'fas fa-vote-yea',
                        'title' => 'Online Voting',
                        'description' => 'Secure and convenient voting from anywhere',
                        'stats' => '1M+ Votes Cast'
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Secure Platform',
                        'description' => 'End-to-end encryption for all votes',
                        'stats' => '100% Security'
                    ],
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Live Analytics',
                        'description' => 'Real-time election statistics',
                        'stats' => 'Live Updates'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Voter Support',
                        'description' => '24/7 assistance for voters',
                        'stats' => '99% Satisfaction'
                    ]
                ];
                ?>
                <div class="features-slider">
                    <?php foreach ($dynamic_features as $feature): ?>
                        <div class="feature-slide">
                            <div class="feature-card h-100">
                                <div class="card-body">
                                    <div class="icon-box mb-4">
                                        <i class="<?= $feature['icon'] ?> fa-3x text-primary"></i>
                                    </div>
                                    <h4 class="feature-title"><?= $feature['title'] ?></h4>
                                    <p class="feature-description"><?= $feature['description'] ?></p>
                                    <div class="feature-stats"><?= $feature['stats'] ?></div>
                                    <a href="#" class="btn btn-outline-primary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- List Groups with Dynamic Updates -->
    <section class="list-section py-5 bg-light">
        <div class="container">
            <h3 class="mb-4">Important Updates</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="dynamic-list-group">
                        <?php
                        $updates = [
                            [
                                'title' => 'Voter Registration Deadline',
                                'time' => '2 days left',
                                'content' => 'Register now for upcoming elections',
                                'type' => 'warning'
                            ],
                            [
                                'title' => 'New Polling Locations',
                                'time' => 'Updated today',
                                'content' => 'Check your nearest polling station',
                                'type' => 'info'
                            ],
                            [
                                'title' => 'Election Results',
                                'time' => 'Live',
                                'content' => 'View real-time counting updates',
                                'type' => 'success'
                            ]
                        ];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Album/Gallery Section -->
    <section class="album-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Election Gallery</h2>
            <div class="row g-4">
                <?php
                $gallery_items = [
                    [
                        'image' => 'gallery1.jpg',
                        'title' => 'Voting Day',
                        'description' => 'Citizens exercising their right to vote'
                    ],
                    [
                        'image' => 'gallery2.jpg',
                        'title' => 'Campaign Rally',
                        'description' => 'Candidates meeting with voters'
                    ],
                    // Add more gallery items
                ];

                foreach ($gallery_items as $item): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card gallery-card h-100">
                            <img src="assets/images/<?= htmlspecialchars($item['image']) ?>" 
                                 class="card-img-top" 
                                 alt="<?= htmlspecialchars($item['title']) ?>"
                                 data-bs-toggle="modal"
                                 data-bs-target="#galleryModal">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($item['title']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($item['description']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Events Carousel -->
    <section class="events-carousel py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Upcoming Events</h2>
            <div class="swiper events-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $events = [
                        [
                            'image' => 'event1.jpg',
                            'title' => 'Candidate Debate',
                            'date' => '2024-03-15',
                            'location' => 'City Hall'
                        ],
                        // Add more events
                    ];

                    foreach ($events as $event): ?>
                        <div class="swiper-slide">
                            <div class="event-card">
                                <img src="assets/images/<?= htmlspecialchars($event['image']) ?>" 
                                     alt="<?= htmlspecialchars($event['title']) ?>">
                                <div class="event-content">
                                    <h4><?= htmlspecialchars($event['title']) ?></h4>
                                    <p class="date">
                                        <i class="far fa-calendar-alt"></i>
                                        <?= date('F j, Y', strtotime($event['date'])) ?>
                                    </p>
                                    <p class="location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <?= htmlspecialchars($event['location']) ?>
                                    </p>
                                    <button class="btn btn-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#eventModal">
                                        Learn More
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gallery Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" id="modalImage">
                </div>
            </div>
        </div>
    </div>

    <!-- Event Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Event Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- Event details will be loaded dynamically -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register for Event</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Footer Section -->
    <footer class="footer-section bg-dark text-light py-5">
        <div class="container">
            <!-- Main Footer Content -->
            <div class="row g-4 mb-5">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about">
                        <img src="assets/images/logo-light.png" alt="Chunaab" class="footer-logo mb-4" height="40">
                        <p class="text-light-gray mb-4">Your trusted platform for democratic participation. Making elections transparent, accessible, and efficient for everyone.</p>
                        <div class="social-links">
                            <a href="#" class="social-link" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#elections">Elections</a></li>
                        <li><a href="#candidates">Candidates</a></li>
                        <li><a href="#results">Results</a></li>
                        <li><a href="#faqs">FAQs</a></li>
                    </ul>
                </div>

                <!-- Voter Resources -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Voter Resources</h5>
                    <ul class="footer-links">
                        <li><a href="#register">Voter Registration</a></li>
                        <li><a href="#guide">Voting Guide</a></li>
                        <li><a href="#locations">Polling Locations</a></li>
                        <li><a href="#calendar">Election Calendar</a></li>
                        <li><a href="#support">Support Center</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Stay Updated</h5>
                    <p class="text-light-gray mb-4">Subscribe to our newsletter for election updates and important announcements.</p>
                    <form class="footer-newsletter">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your email address" required>
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                    <div class="download-apps mt-4">
                        <h6 class="mb-3">Get Our App</h6>
                        <div class="app-buttons">
                            <a href="#" class="app-btn me-2">
                                <i class="fab fa-google-play"></i> Google Play
                            </a>
                            <a href="#" class="app-btn">
                                <i class="fab fa-apple"></i> App Store
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="row py-4 border-top border-secondary">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#terms" class="text-light-gray text-decoration-none">Terms of Service</a>
                        <a href="#privacy" class="text-light-gray text-decoration-none">Privacy Policy</a>
                        <a href="#cookies" class="text-light-gray text-decoration-none">Cookie Policy</a>
                        <a href="#accessibility" class="text-light-gray text-decoration-none">Accessibility</a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-light-gray">© <?= date('Y') ?> <?= htmlspecialchars($site_name) ?>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Add your custom JavaScript here
    </script>

    <!-- Add Masonry JS -->
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>

    <!-- Add this script -->
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        // Carousel autoplay
        var myCarousel = document.querySelector('#heroCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 5000,
            wrap: true
        })
    </script>

    <!-- Add this script -->
    <script>
        // Initialize Swiper
        var eventsSwiper = new Swiper('.events-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
            autoplay: {
                delay: 5000,
            },
        });

        // Gallery Modal
        document.querySelectorAll('.gallery-card img').forEach(img => {
            img.addEventListener('click', function() {
                document.getElementById('modalImage').src = this.src;
            });
        });
    </script>

    <!-- Add this script -->
    <script>
        // Loading Animation
        window.addEventListener('load', function() {
            document.querySelector('.loading').style.display = 'none';
        });

        // Animate Timeline Items
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.timeline-item').forEach(item => {
            observer.observe(item);
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- Add this script -->
    <script>
        // Features Slider
        function initFeaturesSlider() {
            const slides = document.querySelectorAll('.feature-slide');
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach(slide => slide.classList.remove('active'));
                slides[index].classList.add('active');
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            // Initial display
            showSlide(0);

            // Auto-rotate slides
            setInterval(nextSlide, 5000);
        }

        // Dynamic List Updates
        function updateListGroup() {
            const listGroup = document.querySelector('.dynamic-list-group');
            const updates = <?= json_encode($updates) ?>;
            let currentIndex = 0;

            function createListItem(update) {
                return `
                    <div class="list-group-item list-group-item-${update.type} list-item-enter">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">${update.title}</h5>
                            <small>${update.time}</small>
                        </div>
                        <p class="mb-1">${update.content}</p>
                    </div>
                `;
            }

            function updateList() {
                const newItem = updates[currentIndex];
                const element = document.createElement('div');
                element.innerHTML = createListItem(newItem);
                
                // Remove old items with animation
                const oldItems = listGroup.querySelectorAll('.list-group-item');
                oldItems.forEach(item => {
                    item.classList.add('list-item-exit-active');
                    setTimeout(() => item.remove(), 300);
                });

                // Add new item with animation
                setTimeout(() => {
                    listGroup.appendChild(element.firstChild);
                    setTimeout(() => {
                        element.firstChild.classList.remove('list-item-enter');
                    }, 50);
                }, 300);

                currentIndex = (currentIndex + 1) % updates.length;
            }

            // Initial update
            updateList();

            // Auto-update every 5 seconds
            setInterval(updateList, 5000);
        }

        // Initialize everything
        document.addEventListener('DOMContentLoaded', function() {
            initFeaturesSlider();
            updateListGroup();
        });
    </script>
</body>
</html> 
<?php
// Include the header section
// include('footer.php');
?>