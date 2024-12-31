
    
<?php
// Include the header section
include('header.php');
?>




<?php
    $site_name = "Cyberlab.club";
    $tagline = "Your Gateway to Digital Excellence";
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
            --dark-color: #1F2937;
            --light-bg: #F3F4F6;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
        }

        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('assets/images/tech-bg.jpg') center/cover;
            min-height: 100vh;
            padding-top: 80px;
            color: white;
        }

        .course-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .course-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
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
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#resources">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="#community">Community</a></li>
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
    <section id="home" class="hero-section d-flex align-items-center text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Unleash Your Digital Potential with Cyberlab</h1>
                    <p class="lead mb-4">Dive into the world of technology and innovation with courses, resources, and a community that will take your digital skills to the next level.</p>
                    <a href="#courses" class="btn btn-primary btn-lg me-3">Explore Courses</a>
                    <a href="#signup" class="btn btn-outline-light btn-lg">Join Free</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Courses Section -->
    <section id="courses" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Explore Our Featured Tech Courses</h2>
            <div class="row g-4">
                <?php
                $courses = [
                    [
                        'title' => 'Web Development',
                        'icon' => 'fas fa-code',
                        'description' => 'Master front-end and back-end technologies, including HTML, CSS, JavaScript, and server-side programming.',
                        'level' => 'Beginner to Advanced',
                        'duration' => '12 weeks'
                    ],
                    [
                        'title' => 'Cybersecurity',
                        'icon' => 'fas fa-shield-alt',
                        'description' => 'Learn essential skills to protect digital systems and data from cyber threats.',
                        'level' => 'Intermediate',
                        'duration' => '8 weeks'
                    ],
                    [
                        'title' => 'Data Science & AI',
                        'icon' => 'fas fa-brain',
                        'description' => 'Unlock the power of data through machine learning, deep learning, and analytics.',
                        'level' => 'Advanced',
                        'duration' => '16 weeks'
                    ]
                ];

                foreach ($courses as $course): ?>
                    <div class="col-md-4">
                        <div class="course-card card h-100">
                            <div class="card-body">
                                <div class="feature-icon">
                                    <i class="<?php echo $course['icon']; ?> fa-lg"></i>
                                </div>
                                <h3 class="h5 mb-3"><?php echo $course['title']; ?></h3>
                                <p class="card-text"><?php echo $course['description']; ?></p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="badge bg-primary"><?php echo $course['level']; ?></span>
                                    <span class="text-muted"><?php echo $course['duration']; ?></span>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="#" class="btn btn-outline-primary w-100">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-5">
                <a href="#all-courses" class="btn btn-primary btn-lg">View All Courses</a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Why Learn with Cyberlab?</h2>
            <div class="row g-4">
                <?php
                $benefits = [
                    [
                        'icon' => 'fas fa-chalkboard-teacher',
                        'title' => 'Expert-Led Courses',
                        'description' => 'Learn from industry professionals who share their knowledge through clear and engaging lessons.'
                    ],
                    [
                        'icon' => 'fas fa-laptop-code',
                        'title' => 'Hands-On Projects',
                        'description' => 'Apply your skills with real-world projects and challenges to build your portfolio.'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Community Collaboration',
                        'description' => 'Engage with like-minded learners and experts through forums, group projects, and live sessions.'
                    ],
                    [
                        'icon' => 'fas fa-sync-alt',
                        'title' => 'Up-to-Date Content',
                        'description' => 'Stay ahead with up-to-date courses and resources covering the latest trends in technology.'
                    ]
                ];

                foreach ($benefits as $benefit): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center">
                            <div class="feature-icon mx-auto">
                                <i class="<?php echo $benefit['icon']; ?> fa-lg"></i>
                            </div>
                            <h3 class="h5 mb-3"><?php echo $benefit['title']; ?></h3>
                            <p class="mb-0"><?php echo $benefit['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section id="success-stories" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Students Say</h2>
            <div class="row">
                <?php
                $testimonials = [
                    [
                        'name' => 'John Doe',
                        'role' => 'Web Developer',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'Cyberlab\'s hands-on approach made learning coding so much easier. The projects were challenging and fun!'
                    ],
                    [
                        'name' => 'Jane Smith',
                        'role' => 'Cybersecurity Analyst',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'The cybersecurity course helped me land my first job in tech. I\'m confident in my skills now!'
                    ]
                ];

                foreach ($testimonials as $testimonial): ?>
                    <div class="col-md-6">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>" class="rounded-circle me-3" width="60">
                                <div>
                                    <h4 class="h5 mb-1"><?php echo $testimonial['name']; ?></h4>
                                    <p class="small text-muted mb-0"><?php echo $testimonial['role']; ?></p>
                                </div>
                            </div>
                            <p class="mb-0"><?php echo $testimonial['text']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="cta" class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="mb-4">Ready to Transform Your Digital Skills?</h2>
            <p class="lead mb-4">Join Cyberlab.club and gain access to the best tech courses, a collaborative community, and all the tools you need to advance in the digital world.</p>
            <a href="#signup" class="btn btn-light btn-lg me-3">Start Free Trial</a>
            <a href="#courses" class="btn btn-outline-light btn-lg">View Courses</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-5">Contact Cyberlab</h2>
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <form action="process.php" method="POST">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" name="inquiry_type" required>
                                        <option value="">Select Inquiry Type</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="support">Technical Support</option>
                                        <option value="courses">Course Information</option>
                                    </select>
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
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>About <?php echo $site_name; ?></h5>
                    <p>Empowering individuals to master digital skills through expert-led courses and a supportive community.</p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#courses" class="text-light">Courses</a></li>
                        <li><a href="#community" class="text-light">Community</a></li>
                        <li><a href="#resources" class="text-light">Resources</a></li>
                        <li><a href="#contact" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Newsletter</h5>
                    <p>Stay updated with new courses & tech tips</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email address">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
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
include('footer.php');
?>