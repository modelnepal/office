<?php
// Include the header section
// get_header();
// ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="adsewa/style.css">

    <style>
        /* Your custom CSS styles go here */
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- Main content area -->
    <div class="content">

        <!-- Header Section -->
        <header class="fixed-top bg-white shadow-sm">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="logo.png" alt="eJanakpur Logo" height="40">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#news">Local News</a></li>
                                    <li><a class="dropdown-item" href="#events">Events</a></li>
                                    <li><a class="dropdown-item" href="#business">Business Directory</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq">FAQs</a>
                            </li>
                        </ul>
                        <a href="#join" class="btn btn-primary">Join Our Community</a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <section id="hero" class="hero-section vh-100 d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">Welcome to eJanakpur</h1>
                        <p class="lead mb-4">Your Gateway to Janakpur's Latest News and Events</p>
                        <p class="mb-5">Stay updated with the latest happenings, events, and community updates in
                            Janakpur.</p>
                        <a href="#explore" class="btn btn-primary btn-lg">Explore Now</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="hero-image.jpg" alt="Janakpur" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="mb-4">About eJanakpur</h2>
                        <p class="lead mb-4">eJanakpur is your go-to online resource for everything related to Janakpur.
                            From local news and events to business listings and community stories, we bring Janakpur
                            closer to you.</p>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5>Our Mission</h5>
                                <p>Our mission is to connect, inform, and empower the people of Janakpur through
                                    up-to-date news, local events, and resources.</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Our Vision</h5>
                                <p>We aim to create a vibrant, informed, and united community in Janakpur by providing
                                    accessible and accurate local information.</p>
                            </div>
                        </div>
                        <a href="#learn-more" class="btn btn-outline-primary">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-5">What We Offer</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-newspaper fa-3x mb-3 text-primary"></i>
                                <h5 class="card-title">Local News</h5>
                                <p class="card-text">Stay up-to-date with the latest news, updates, and happenings from
                                    Janakpur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-calendar-alt fa-3x mb-3 text-primary"></i>
                                <h5 class="card-title">Event Listings</h5>
                                <p class="card-text">Discover local events, festivals, cultural programs, and community
                                    activities in Janakpur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-store fa-3x mb-3 text-primary"></i>
                                <h5 class="card-title">Business Directory</h5>
                                <p class="card-text">Find businesses in Janakpur easily through our comprehensive
                                    directory.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section id="why-us" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Why eJanakpur?</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-check-circle fa-2x mb-3 text-primary"></i>
                            <h5>Comprehensive Coverage</h5>
                            <p>We bring you all the news, events, and updates you need in one place.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-map-marker-alt fa-2x mb-3 text-primary"></i>
                            <h5>Local Focus</h5>
                            <p>Our focus is solely on Janakpur, ensuring you receive the most relevant information.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-users fa-2x mb-3 text-primary"></i>
                            <h5>Community-Oriented</h5>
                            <p>We foster a sense of community by sharing local stories and events.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Content Section -->
        <section id="featured" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-5">Featured Stories & Events</h2>
                <div class="row g-4">
                    <!-- Featured cards can be dynamically populated -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="featured1.jpg" class="card-img-top" alt="Featured Story">
                            <div class="card-body">
                                <h5 class="card-title">Featured Story Title</h5>
                                <p class="card-text">Brief description of the featured story...</p>
                                <a href="#" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more featured cards as needed -->
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section id="newsletter" class="py-5 bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="mb-4">Stay Informed – Subscribe to Our Newsletter</h2>
                        <p class="mb-4">Get the latest updates on news, events, and community stories delivered straight
                            to your inbox.</p>
                        <form class="row g-3 justify-content-center">
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-light">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-4">Contact Us</h2>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info mt-5 mt-lg-0">
                            <h4>Contact Information</h4>
                            <p><i class="fas fa-envelope me-2"></i> info@ejanakpur.com</p>
                            <p><i class="fas fa-phone me-2"></i> +977 1234567890</p>
                            <p><i class="fas fa-map-marker-alt me-2"></i> Janakpur, Nepal</p>
                            <div class="social-links mt-4">
                                <a href="#" class="me-3"><i class="fab fa-facebook fa-2x"></i></a>
                                <a href="#" class="me-3"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="#" class="me-3"><i class="fab fa-instagram fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>About eJanakpur</h5>
                        <p>Your comprehensive source for local news, events, and community updates in Janakpur.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#home" class="text-white">Home</a></li>
                            <li><a href="#about" class="text-white">About Us</a></li>
                            <li><a href="#services" class="text-white">Services</a></li>
                            <li><a href="#contact" class="text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Connect With Us</h5>
                        <div class="social-links">
                            <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="text-center">
                    <p class="mb-0">&copy; 2024 eJanakpur. All rights reserved.</p>
                </div>
            </div>
        </footer>




        

        <?php
        // WordPress loop to display content
        // if (have_posts()):
        //     while (have_posts()):
        //         the_post();
        //         the_title('<h2>', '</h2>');
        //         the_content();
        //     endwhile;
        // else:
        //     echo '<p>No content found</p>';
        // endif;
        ?>
    </div>


    
    <!-- Footer section -->
    <?php 
    // get_footer(); 
    ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>