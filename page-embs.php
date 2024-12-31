
    
<?php
// Include the header section
// include('header.php');
?>



<?php
    $site_name = "EMBS.club";
    $tagline = "Engineering & Biomedical Sciences Community";
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
            --primary-color: #2563EB;
            --secondary-color: #10B981;
            --accent-color: #6366F1;
            --dark-color: #1F2937;
            --light-bg: #F8FAFC;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
        }

        .hero-section {
            background: linear-gradient(rgba(37, 99, 235, 0.9), rgba(99, 102, 241, 0.9)),
                        url('assets/images/biomedical-bg.jpg') center/cover;
            min-height: 100vh;
            padding-top: 80px;
            color: white;
        }

        .event-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--light-bg);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
        }

        .resource-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            height: 100%;
            transition: transform 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin: 1rem 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .gradient-divider {
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            width: 60px;
            margin: 2rem auto;
        }

        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9) !important;
        }

        .membership-tier {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            height: 100%;
            transition: transform 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        .membership-tier.featured {
            border: 2px solid var(--primary-color);
            transform: scale(1.05);
        }

        .membership-tier:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/embs-logo.png" alt="<?php echo $site_name; ?>" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#membership">Membership</a></li>
                    <li class="nav-item"><a class="nav-link" href="#events">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#resources">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <a href="#login" class="btn btn-outline-primary me-2">Login</a>
                    <a href="#join" class="btn btn-primary">Join EMBS</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Empowering Innovation in Engineering and Biomedical Sciences</h1>
                    <p class="lead mb-4">Join a global community of engineers, scientists, and innovators driving advancements in biomedical technologies and healthcare solutions.</p>
                    <div class="d-flex gap-3">
                        <a href="#join" class="btn btn-light btn-lg">Join Now</a>
                        <a href="#about" class="btn btn-outline-light btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/hero-illustration.svg" alt="Biomedical Engineering" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Benefits Section -->
    <section id="membership" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Membership Benefits</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Join our community and unlock exclusive benefits</p>
            </div>
            <div class="row g-4">
                <?php
                $benefits = [
                    [
                        'icon' => 'fas fa-globe-americas',
                        'title' => 'Global Network',
                        'description' => 'Connect with professionals, researchers, and students worldwide.'
                    ],
                    [
                        'icon' => 'fas fa-graduation-cap',
                        'title' => 'Learning Resources',
                        'description' => 'Access exclusive webinars, research papers, and educational content.'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Collaboration',
                        'description' => 'Work on projects with experts and innovators in the field.'
                    ],
                    [
                        'icon' => 'fas fa-briefcase',
                        'title' => 'Career Growth',
                        'description' => 'Access job opportunities and mentorship programs.'
                    ]
                ];

                foreach ($benefits as $benefit): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center">
                            <div class="benefit-icon">
                                <i class="<?php echo $benefit['icon']; ?>"></i>
                            </div>
                            <h3 class="h5 mb-3"><?php echo $benefit['title']; ?></h3>
                            <p class="mb-0"><?php echo $benefit['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Upcoming Events</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Join our upcoming conferences, webinars, and workshops</p>
            </div>
            <div class="row g-4">
                <?php
                $events = [
                    [
                        'image' => 'https://via.placeholder.com/400x200',
                        'date' => 'Mar 15, 2024',
                        'title' => 'Biomedical Engineering Conference 2024',
                        'description' => 'Join industry leaders and researchers for the latest in biomedical engineering.',
                        'type' => 'Conference'
                    ],
                    [
                        'image' => 'https://via.placeholder.com/400x200',
                        'date' => 'Apr 5, 2024',
                        'title' => 'AI in Healthcare Workshop',
                        'description' => 'Learn how AI is transforming healthcare and medical diagnostics.',
                        'type' => 'Workshop'
                    ],
                    [
                        'image' => 'https://via.placeholder.com/400x200',
                        'date' => 'Apr 20, 2024',
                        'title' => 'Future of Medical Devices',
                        'description' => 'Explore upcoming trends and innovations in medical device technology.',
                        'type' => 'Webinar'
                    ]
                ];

                foreach ($events as $event): ?>
                    <div class="col-md-4">
                        <div class="event-card card h-100">
                            <img src="<?php echo $event['image']; ?>" class="card-img-top" alt="<?php echo $event['title']; ?>">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-primary"><?php echo $event['type']; ?></span>
                                    <small class="text-muted"><?php echo $event['date']; ?></small>
                                </div>
                                <h3 class="h5 card-title"><?php echo $event['title']; ?></h3>
                                <p class="card-text"><?php echo $event['description']; ?></p>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-5">
                <a href="#all-events" class="btn btn-primary btn-lg">View All Events</a>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section id="resources" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Member Resources</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Access exclusive content and materials</p>
            </div>
            <div class="row g-4">
                <?php
                $resources = [
                    [
                        'icon' => 'fas fa-file-alt',
                        'title' => 'Research Papers',
                        'description' => 'Access the latest research in biomedical engineering and related fields.',
                        'count' => '1000+ Papers'
                    ],
                    [
                        'icon' => 'fas fa-video',
                        'title' => 'Webinar Library',
                        'description' => 'Watch on-demand webinars and past event recordings.',
                        'count' => '500+ Hours'
                    ],
                    [
                        'icon' => 'fas fa-book',
                        'title' => 'Technical Articles',
                        'description' => 'Read expert articles on cutting-edge technologies.',
                        'count' => '2000+ Articles'
                    ]
                ];

                foreach ($resources as $resource): ?>
                    <div class="col-md-4">
                        <div class="resource-card">
                            <div class="d-flex align-items-center mb-4">
                                <i class="<?php echo $resource['icon']; ?> fa-2x text-primary me-3"></i>
                                <h3 class="h5 mb-0"><?php echo $resource['title']; ?></h3>
                            </div>
                            <p class="mb-3"><?php echo $resource['description']; ?></p>
                            <small class="text-muted"><?php echo $resource['count']; ?></small>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Join a Global Community of Innovators?</h2>
            <p class="lead mb-4">Be part of EMBS.club and start making an impact in the biomedical engineering world today.</p>
            <a href="#join" class="btn btn-light btn-lg me-3">Join EMBS Today</a>
            <a href="#learn-more" class="btn btn-outline-light btn-lg">Learn More</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>About <?php echo $site_name; ?></h5>
                    <p>Empowering innovation in biomedical engineering through community, education, and collaboration.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-light">Home</a></li>
                        <li><a href="#membership" class="text-light">Membership</a></li>
                        <li><a href="#events" class="text-light">Events</a></li>
                        <li><a href="#resources" class="text-light">Resources</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Research Papers</a></li>
                        <li><a href="#" class="text-light">Webinars</a></li>
                        <li><a href="#" class="text-light">Technical Articles</a></li>
                        <li><a href="#" class="text-light">Career Center</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Stay Updated</h5>
                    <p>Subscribe to our newsletter for the latest in biomedical engineering.</p>
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