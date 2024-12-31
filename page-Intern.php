
    
<?php
// Include the header section
// include('header.php');
?>

<?php
    $site_name = "Intern.pw";
    $tagline = "Your Path to Career Success";
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
            --accent-color: #F59E0B;
            --dark-color: #1F2937;
            --light-bg: #F8FAFC;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
        }

        .hero-section {
            background: linear-gradient(rgba(37, 99, 235, 0.9), rgba(16, 185, 129, 0.9)),
                        url('assets/images/office-bg.jpg') center/cover;
            min-height: 100vh;
            padding-top: 80px;
            color: white;
        }

        .internship-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
            overflow: hidden;
        }

        .internship-card:hover {
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

        .step-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            height: 100%;
            transition: transform 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        .step-card:hover {
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

        .search-filters {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .hero-section {
                text-align: center;
                padding-top: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/intern-logo.png" alt="<?php echo $site_name; ?>" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#internships">Internships</a></li>
                    <li class="nav-item"><a class="nav-link" href="#employers">Employers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#resources">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <a href="#login" class="btn btn-outline-primary me-2">Login</a>
                    <a href="#signup" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Your Path to the Perfect Internship Starts Here</h1>
                    <p class="lead mb-4">Connecting talented individuals with leading companies to kickstart careers.</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="#internships" class="btn btn-light btn-lg">Browse Internships</a>
                        <a href="#employers" class="btn btn-outline-light btn-lg">Post an Internship</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="assets/images/hero-illustration.svg" alt="Internship Opportunities" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">How It Works</h2>
                <div class="gradient-divider"></div>
            </div>
            <div class="row g-4">
                <?php
                $steps = [
                    [
                        'icon' => 'fas fa-user-plus',
                        'title' => 'Create Your Profile',
                        'description' => 'Sign up and showcase your skills, experience, and career aspirations.'
                    ],
                    [
                        'icon' => 'fas fa-search',
                        'title' => 'Browse Opportunities',
                        'description' => 'Search for internships based on your interests, skills, and location.'
                    ],
                    [
                        'icon' => 'fas fa-paper-plane',
                        'title' => 'Apply with Ease',
                        'description' => 'Apply for internships with just a few clicks and track your applications.'
                    ],
                    [
                        'icon' => 'fas fa-handshake',
                        'title' => 'Get Hired',
                        'description' => 'Connect with employers and start your career journey.'
                    ]
                ];

                foreach ($steps as $index => $step): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="step-card text-center">
                            <div class="feature-icon mx-auto">
                                <i class="<?php echo $step['icon']; ?>"></i>
                            </div>
                            <h3 class="h5 mb-3">Step <?php echo $index + 1; ?>: <?php echo $step['title']; ?></h3>
                            <p class="mb-0"><?php echo $step['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Featured Internships Section -->
    <section id="internships" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Featured Internships</h2>
                <div class="gradient-divider"></div>
            </div>
            
            <!-- Search Filters -->
            <div class="search-filters mb-5">
                <form class="row g-3">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Keywords">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Select Industry</option>
                            <option>Technology</option>
                            <option>Marketing</option>
                            <option>Finance</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Select Location</option>
                            <option>Remote</option>
                            <option>On-site</option>
                            <option>Hybrid</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary w-100">Search</button>
                    </div>
                </form>
            </div>

            <!-- Internship Listings -->
            <div class="row g-4">
                <?php
                $internships = [
                    [
                        'company' => 'Tech Solutions Inc.',
                        'position' => 'Software Development Intern',
                        'location' => 'Remote',
                        'type' => 'Full-time',
                        'duration' => '6 months'
                    ],
                    [
                        'company' => 'Digital Marketing Pro',
                        'position' => 'Marketing Intern',
                        'location' => 'New York',
                        'type' => 'Part-time',
                        'duration' => '3 months'
                    ],
                    [
                        'company' => 'Global Finance Corp',
                        'position' => 'Finance Intern',
                        'location' => 'London',
                        'type' => 'Full-time',
                        'duration' => '4 months'
                    ]
                ];

                foreach ($internships as $internship): ?>
                    <div class="col-md-4">
                        <div class="internship-card card h-100">
                            <div class="card-body">
                                <h3 class="h5 mb-3"><?php echo $internship['position']; ?></h3>
                                <p class="company-name mb-3">
                                    <i class="fas fa-building me-2"></i>
                                    <?php echo $internship['company']; ?>
                                </p>
                                <div class="mb-3">
                                    <span class="badge bg-primary me-2"><?php echo $internship['location']; ?></span>
                                    <span class="badge bg-secondary me-2"><?php echo $internship['type']; ?></span>
                                    <span class="badge bg-info"><?php echo $internship['duration']; ?></span>
                                </div>
                                <a href="#apply" class="btn btn-outline-primary w-100">Apply Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-5">
                <a href="#all-internships" class="btn btn-primary btn-lg">View All Internships</a>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section id="success-stories" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Success Stories</h2>
                <div class="gradient-divider"></div>
                <p class="lead">Hear from our successful interns</p>
            </div>
            <div class="row g-4">
                <?php
                $stories = [
                    [
                        'name' => 'Sarah Johnson',
                        'company' => 'Tech Solutions Inc.',
                        'role' => 'Software Engineer',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'The internship opportunity through Intern.pw helped me land my dream job. The experience was invaluable!'
                    ],
                    [
                        'name' => 'Michael Chen',
                        'company' => 'Digital Marketing Pro',
                        'role' => 'Marketing Manager',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'Starting as an intern and growing into a full-time role was an amazing journey. Thank you Intern.pw!'
                    ]
                ];

                foreach ($stories as $story): ?>
                    <div class="col-md-6">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="<?php echo $story['image']; ?>" alt="<?php echo $story['name']; ?>" class="rounded-circle me-3" width="60">
                                <div>
                                    <h4 class="h5 mb-1"><?php echo $story['name']; ?></h4>
                                    <p class="small text-muted mb-0"><?php echo $story['role']; ?> at <?php echo $story['company']; ?></p>
                                </div>
                            </div>
                            <p class="mb-0"><?php echo $story['text']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>About <?php echo $site_name; ?></h5>
                    <p>Connecting talented individuals with leading companies to create meaningful internship experiences.</p>
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
                        <li><a href="#internships" class="text-light">Browse Internships</a></li>
                        <li><a href="#employers" class="text-light">For Employers</a></li>
                        <li><a href="#resources" class="text-light">Resources</a></li>
                        <li><a href="#contact" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Resume Tips</a></li>
                        <li><a href="#" class="text-light">Interview Prep</a></li>
                        <li><a href="#" class="text-light">Career Advice</a></li>
                        <li><a href="#" class="text-light">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Stay Updated</h5>
                    <p>Subscribe to our newsletter for the latest internship opportunities.</p>
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