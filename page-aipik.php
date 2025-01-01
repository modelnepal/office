
    
<?php
// Include the header section
include('header.php');
?>




<?php
    $site_name = "Aipik.io";
    $site_url = "http://localhost/aipik";
?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - AI Solutions for Your Business</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --text-color: #1f2937;
            --light-bg: #f3f4f6;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
        }

        .hero-section {
            background: linear-gradient(135deg, #f6f8ff 0%, #f0f4ff 100%);
            min-height: 100vh;
            padding-top: 80px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .testimonial-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .pricing-card {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .contact-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo $site_name; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#solutions">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#technology">Technology</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-2" href="#signup">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Revolutionizing Your Business with AI Solutions</h1>
                    <p class="lead mb-4">Harness the power of AI to optimize processes, drive efficiency, and innovate like never before.</p>
                    <a href="#solutions" class="btn btn-primary btn-lg">Start Your AI Journey</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="AI Innovation" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">About Aipik.io</h2>
                    <p class="lead mb-4">Aipik.io is an AI-powered platform that delivers smart solutions to transform your business operations, enhance productivity, and create data-driven decisions.</p>
                    <p class="mb-4">Our mission is to make artificial intelligence accessible to businesses of all sizes, helping them solve complex challenges with simple, scalable solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">AI Solutions for Your Business</h2>
            <div class="row g-4">
                <?php
                $solutions = [
                    [
                        'icon' => 'fas fa-robot',
                        'title' => 'Automation',
                        'description' => 'Automate repetitive tasks to save time and reduce human error.'
                    ],
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Analytics',
                        'description' => 'Leverage AI to analyze vast amounts of data and extract actionable insights.'
                    ],
                    [
                        'icon' => 'fas fa-brain',
                        'title' => 'Predictive Models',
                        'description' => 'Use machine learning to forecast trends and outcomes with accuracy.'
                    ]
                ];

                foreach ($solutions as $solution): ?>
                    <div class="col-md-4">
                        <div class="card h-100 text-center p-4">
                            <div class="card-body">
                                <i class="<?php echo $solution['icon']; ?> fa-3x mb-3 text-primary"></i>
                                <h3 class="card-title h4"><?php echo $solution['title']; ?></h3>
                                <p class="card-text"><?php echo $solution['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose Aipik.io?</h2>
            <div class="row g-4">
                <?php
                $benefits = [
                    [
                        'icon' => 'fas fa-microchip',
                        'title' => 'Cutting-Edge Technology',
                        'description' => 'Stay ahead of the competition with the latest AI advancements.'
                    ],
                    [
                        'icon' => 'fas fa-cogs',
                        'title' => 'Customizable Solutions',
                        'description' => 'Tailor AI services to meet your unique business needs.'
                    ],
                    [
                        'icon' => 'fas fa-plug',
                        'title' => 'Seamless Integration',
                        'description' => 'Easily integrate AI with your existing systems and workflows.'
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Data Security',
                        'description' => 'We prioritize your data security with encryption and privacy protocols.'
                    ],
                    [
                        'icon' => 'fas fa-expand-arrows-alt',
                        'title' => 'Scalability',
                        'description' => 'Scale solutions as your business grows without disruption.'
                    ],
                    [
                        'icon' => 'fas fa-headset',
                        'title' => 'Expert Support',
                        'description' => 'Access 24/7 customer support and AI expertise whenever you need it.'
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
    <section id="testimonials" class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">What Our Clients Say</h2>
            <div class="row">
                <?php
                $testimonials = [
                    [
                        'name' => 'John Smith',
                        'position' => 'CEO, Tech Solutions Inc',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'Aipik.io\'s AI-driven analytics helped us make data-backed decisions and drive efficiency in our operations.'
                    ],
                    [
                        'name' => 'Sarah Johnson',
                        'position' => 'CTO, Innovation Labs',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'Their AI automation tools saved us countless hours and reduced human errors significantly.'
                    ],
                    [
                        'name' => 'Michael Chen',
                        'position' => 'Director, Global Systems',
                        'image' => 'https://via.placeholder.com/100',
                        'text' => 'The customization options and scalability of Aipik.io\'s solutions are unmatched in the industry.'
                    ]
                ];

                foreach ($testimonials as $testimonial): ?>
                    <div class="col-lg-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>" class="rounded-circle me-3" width="60">
                                <div>
                                    <h4 class="h5 mb-1"><?php echo $testimonial['name']; ?></h4>
                                    <p class="small text-muted mb-0"><?php echo $testimonial['position']; ?></p>
                                </div>
                            </div>
                            <p class="mb-0"><?php echo $testimonial['text']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section id="case-studies" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">AI in Action</h2>
            <div class="row g-4">
                <?php
                $caseStudies = [
                    [
                        'title' => 'Manufacturing Excellence Through AI',
                        'company' => 'Global Manufacturing Co.',
                        'image' => 'https://via.placeholder.com/400x300',
                        'description' => 'How AI automation improved production efficiency by 45%',
                        'results' => ['45% efficiency increase', '30% cost reduction', '60% fewer errors']
                    ],
                    [
                        'title' => 'AI-Powered Customer Service',
                        'company' => 'TechServe Solutions',
                        'image' => 'https://via.placeholder.com/400x300',
                        'description' => 'Implementing AI chatbots for 24/7 customer support',
                        'results' => ['90% faster response time', '40% cost savings', '95% customer satisfaction']
                    ],
                    [
                        'title' => 'Predictive Maintenance Success',
                        'company' => 'Industrial Systems Inc',
                        'image' => 'https://via.placeholder.com/400x300',
                        'description' => 'Using AI to predict and prevent equipment failures',
                        'results' => ['70% fewer breakdowns', '50% maintenance savings', '25% longer equipment life']
                    ]
                ];

                foreach ($caseStudies as $case): ?>
                    <div class="col-lg-4">
                        <div class="card h-100">
                            <img src="<?php echo $case['image']; ?>" class="card-img-top" alt="<?php echo $case['title']; ?>">
                            <div class="card-body">
                                <h3 class="h5 card-title"><?php echo $case['title']; ?></h3>
                                <p class="small text-muted"><?php echo $case['company']; ?></p>
                                <p class="card-text"><?php echo $case['description']; ?></p>
                                <ul class="list-unstyled">
                                    <?php foreach ($case['results'] as $result): ?>
                                        <li><i class="fas fa-check-circle text-success me-2"></i><?php echo $result; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <a href="#" class="btn btn-outline-primary mt-3">Read Full Case Study</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="section-padding bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="mb-4">Stay Updated with AI Trends</h2>
                    <p class="mb-4">Subscribe to our newsletter for the latest insights in AI technology and innovation.</p>
                    <form class="newsletter-form">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email address" required>
                            <button class="btn btn-light" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section id="technology" class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Powered by the Latest AI Technology</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Technology Stack" class="img-fluid mb-4">
                </div>
                <div class="col-lg-6">
                    <h3>Our Technology Stack</h3>
                    <p>We leverage advanced machine learning, deep learning, and data analytics models to deliver cutting-edge solutions for businesses across industries.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <span class="badge bg-primary p-2">Python</span>
                        <span class="badge bg-primary p-2">TensorFlow</span>
                        <span class="badge bg-primary p-2">Keras</span>
                        <span class="badge bg-primary p-2">AWS</span>
                        <span class="badge bg-primary p-2">Google Cloud AI</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">Flexible Pricing Plans</h2>
            <div class="row">
                <?php
                $plans = [
                    [
                        'name' => 'Basic',
                        'price' => '49',
                        'features' => ['AI Automation', 'Basic Analytics', 'Email Support']
                    ],
                    [
                        'name' => 'Pro',
                        'price' => '99',
                        'features' => ['Advanced AI Features', 'Full Analytics Suite', '24/7 Support']
                    ],
                    [
                        'name' => 'Enterprise',
                        'price' => 'Custom',
                        'features' => ['Custom Solutions', 'Dedicated Support', 'Full API Access']
                    ]
                ];

                foreach ($plans as $plan): ?>
                    <div class="col-lg-4">
                        <div class="pricing-card">
                            <h3><?php echo $plan['name']; ?></h3>
                            <div class="price-tag my-4">
                                <span class="display-4">$<?php echo $plan['price']; ?></span>
                                <?php if ($plan['price'] !== 'Custom'): ?>
                                    <span>/month</span>
                                <?php endif; ?>
                            </div>
                            <ul class="list-unstyled">
                                <?php foreach ($plan['features'] as $feature): ?>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#contact" class="btn btn-primary mt-4">Get Started</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Contact Us</h2>
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

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<?php
// Include the header section
include('footer.php');
?>