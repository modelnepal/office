<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package domain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'domain' ); ?></a>

	<header id="masthead" class="site-header">

	<?php
// Site Configuration
$site_name = "Your Site Name";
$tagline = "Your Site Tagline";

// Navigation Items
$nav_items = [
    'tutorials' => [
        'title' => 'Tutorials',
        'sections' => [
            'exam_prep' => [
                'title' => 'Exam Preparation',
                'items' => [
                    ['icon' => 'fas fa-book', 'title' => 'Written Exam', 'link' => '#'],
                    ['icon' => 'fas fa-comments', 'title' => 'Interview Tips', 'link' => '#'],
                    ['icon' => 'fas fa-pencil-alt', 'title' => 'Mock Tests', 'link' => '#']
                ]
            ],
            'study_materials' => [
                'title' => 'Study Materials',
                'items' => [
                    ['icon' => 'fas fa-file-pdf', 'title' => 'PDF Notes', 'link' => '#'],
                    ['icon' => 'fas fa-video', 'title' => 'Video Lectures', 'link' => '#'],
                    ['icon' => 'fas fa-question-circle', 'title' => 'Practice Questions', 'link' => '#']
                ]
            ],
            'resources' => [
                'title' => 'Resources',
                'items' => [
                    ['icon' => 'fas fa-calendar', 'title' => 'Exam Calendar', 'link' => '#'],
                    ['icon' => 'fas fa-newspaper', 'title' => 'Current Affairs', 'link' => '#'],
                    ['icon' => 'fas fa-graduation-cap', 'title' => 'Success Stories', 'link' => '#']
                ]
            ]
        ]
    ],
    'courses' => [
        'title' => 'Courses',
        'sections' => [
            'online_courses' => [
                'title' => 'Online Courses',
                'items' => [
                    ['icon' => 'fas fa-laptop', 'title' => 'Live Classes', 'link' => '#'],
                    ['icon' => 'fas fa-play-circle', 'title' => 'Recorded Sessions', 'link' => '#'],
                    ['icon' => 'fas fa-clock', 'title' => 'Self-Paced', 'link' => '#']
                ]
            ],
            'specializations' => [
                'title' => 'Specializations',
                'items' => [
                    ['icon' => 'fas fa-chart-line', 'title' => 'Management', 'link' => '#'],
                    ['icon' => 'fas fa-cogs', 'title' => 'Technical', 'link' => '#'],
                    ['icon' => 'fas fa-balance-scale', 'title' => 'Legal', 'link' => '#']
                ]
            ],
            'certifications' => [
                'title' => 'Certifications',
                'items' => [
                    ['icon' => 'fas fa-certificate', 'title' => 'Professional Certs', 'link' => '#'],
                    ['icon' => 'fas fa-award', 'title' => 'Skill Badges', 'link' => '#'],
                    ['icon' => 'fas fa-medal', 'title' => 'Achievements', 'link' => '#']
                ]
            ]
        ]
    ],
    'practice' => [
        'title' => 'Practice',
        'sections' => [
            'mock_tests' => [
                'title' => 'Mock Tests',
                'items' => [
                    ['icon' => 'fas fa-tasks', 'title' => 'Subject-wise Tests', 'link' => '#'],
                    ['icon' => 'fas fa-clock', 'title' => 'Timed Tests', 'link' => '#'],
                    ['icon' => 'fas fa-star', 'title' => 'Premium Tests', 'link' => '#']
                ]
            ],
            'quizzes' => [
                'title' => 'Quizzes',
                'items' => [
                    ['icon' => 'fas fa-question', 'title' => 'Daily Quiz', 'link' => '#'],
                    ['icon' => 'fas fa-bolt', 'title' => 'Quick Tests', 'link' => '#'],
                    ['icon' => 'fas fa-brain', 'title' => 'Topic Tests', 'link' => '#']
                ]
            ],
            'analytics' => [
                'title' => 'Analytics',
                'items' => [
                    ['icon' => 'fas fa-chart-bar', 'title' => 'Performance', 'link' => '#'],
                    ['icon' => 'fas fa-bullseye', 'title' => 'Progress Track', 'link' => '#'],
                    ['icon' => 'fas fa-trophy', 'title' => 'Rankings', 'link' => '#']
                ]
            ]
        ]
    ],
    'resources' => [
        'title' => 'Resources',
        'sections' => [
            'study_materials' => [
                'title' => 'Study Materials',
                'items' => [
                    ['icon' => 'fas fa-book-open', 'title' => 'E-Books', 'link' => '#'],
                    ['icon' => 'fas fa-file-alt', 'title' => 'Notes', 'link' => '#'],
                    ['icon' => 'fas fa-download', 'title' => 'Downloads', 'link' => '#']
                ]
            ],
            'current_affairs' => [
                'title' => 'Current Affairs',
                'items' => [
                    ['icon' => 'fas fa-newspaper', 'title' => 'Daily Updates', 'link' => '#'],
                    ['icon' => 'fas fa-globe', 'title' => 'World News', 'link' => '#'],
                    ['icon' => 'fas fa-chart-pie', 'title' => 'Analysis', 'link' => '#']
                ]
            ],
            'tools' => [
                'title' => 'Tools',
                'items' => [
                    ['icon' => 'fas fa-calculator', 'title' => 'Calculators', 'link' => '#'],
                    ['icon' => 'fas fa-table', 'title' => 'Formula Sheets', 'link' => '#'],
                    ['icon' => 'fas fa-tools', 'title' => 'Study Aids', 'link' => '#']
                ]
            ]
        ]
    ],
    'community' => [
        'title' => 'Community',
        'sections' => [
            'discussions' => [
                'title' => 'Discussions',
                'items' => [
                    ['icon' => 'fas fa-comments', 'title' => 'Forums', 'link' => '#'],
                    ['icon' => 'fas fa-users', 'title' => 'Study Groups', 'link' => '#'],
                    ['icon' => 'fas fa-chalkboard-teacher', 'title' => 'Ask Experts', 'link' => '#']
                ]
            ],
            'success_stories' => [
                'title' => 'Success Stories',
                'items' => [
                    ['icon' => 'fas fa-user-graduate', 'title' => 'Testimonials', 'link' => '#'],
                    ['icon' => 'fas fa-lightbulb', 'title' => 'Tips & Tricks', 'link' => '#'],
                    ['icon' => 'fas fa-road', 'title' => 'Journey Stories', 'link' => '#']
                ]
            ],
            'events' => [
                'title' => 'Events',
                'items' => [
                    ['icon' => 'fas fa-calendar-alt', 'title' => 'Webinars', 'link' => '#'],
                    ['icon' => 'fas fa-handshake', 'title' => 'Meetups', 'link' => '#'],
                    ['icon' => 'fas fa-microphone', 'title' => 'Live Sessions', 'link' => '#']
                ]
            ]
        ]
    ]
];

// Sub Navigation Items
$sub_nav_items = [
    ['title' => 'Overview', 'link' => '#overview', 'active' => true],
    ['title' => 'Features', 'link' => '#features'],
    ['title' => 'Courses', 'link' => '#courses'],
    ['title' => 'Practice', 'link' => '#practice'],
    ['title' => 'Resources', 'link' => '#resources'],
    ['title' => 'Community', 'link' => '#community'],
    ['title' => 'Contact', 'link' => '#contact']
];
?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - <?php echo $tagline; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* CSS Variables */
        :root {
            --primary-color: #1A237E;
            --secondary-color: #C62828;
            --accent-color: #FFC107;
            --dark-color: #0D47A1;
            --light-bg: #E3F2FD;
        }

        /* Header & Navigation Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            padding: 8px 16px !important;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .nav-cta {
            background: var(--primary-color);
            color: white !important;
            border-radius: 5px;
            padding: 0.5rem 1.5rem !important;
        }

        .nav-cta:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        /* Mega Menu Styles */
        .mega-menu {
            width: 800px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .dropdown-header {
            color: var(--primary-color);
            font-weight: 600;
            padding: 0.5rem 0;
            margin-bottom: 0.5rem;
            border-bottom: 2px solid var(--light-bg);
        }

        .dropdown-item {
            padding: 0.5rem 1rem;
            color: #333;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: var(--light-bg);
            color: var(--primary-color);
            transform: translateX(5px);
        }

        .dropdown-item i {
            width: 20px;
            color: var(--primary-color);
        }

        /* Sub Navigation Styles */
        .sub-nav {
            background: rgba(255, 255, 255, 0.95);
            position: fixed;
            top: 76px;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transform: translateY(-100%);
            transition: transform 0.3s ease;
        }

        .sub-nav.visible {
            transform: translateY(0);
        }

        .sub-nav .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .sub-nav a {
            color: #333;
            text-decoration: none;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .sub-nav a:hover,
        .sub-nav a.active {
            background: var(--primary-color);
            color: white;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .mega-menu {
                width: 100%;
                margin: 0;
            }

            .navbar-nav {
                padding: 20px 0;
            }

            .nav-link {
                padding: 10px 20px !important;
            }

            .navbar .btn {
                width: 100%;
                margin-top: 10px;
            }
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                margin-top: 15px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }

            .navbar-brand img {
                height: 30px;
            }

            .sub-nav {
                overflow-x: auto;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
                padding: 10px;
            }

            .sub-nav .container {
                justify-content: flex-start;
                padding: 0 10px;
            }

            .sub-nav a {
                padding: 8px 15px;
            }
        }

        @media (max-width: 992px) {
            .navbar-nav .dropdown-menu {
                position: static !important;
                float: none;
                width: 100%;
                margin-top: 0.5rem;
                background-color: #f8f9fa;
                display: none;
            }

            .navbar-nav .dropdown-menu.show {
                display: block;
            }

            .mega-menu {
                width: 100% !important;
                max-height: 70vh;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
            }

            .navbar-collapse {
                max-height: 90vh;
                overflow-y: auto;
            }

            .dropdown-toggle::after {
                float: right;
                margin-top: 10px;
            }

            .nav-item.dropdown {
                position: relative;
            }

            .dropdown-item {
                padding: 0.75rem 1rem;
                border-radius: 5px;
            }

            .dropdown-header {
                padding: 1rem 1rem 0.5rem;
            }

            .mega-menu .row {
                margin: 0;
            }

            .mega-menu .col-md-4 {
                padding: 0;
            }

            .mega-menu .col-md-4:not(:last-child) {
                border-bottom: 1px solid rgba(0,0,0,0.1);
                margin-bottom: 1rem;
                padding-bottom: 1rem;
            }
        }
    </style>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="assets/images/logo.png" alt="<?php echo $site_name; ?>">
                <span class="fw-bold text-primary"><?php echo $site_name; ?></span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <?php foreach ($nav_items as $key => $item): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="<?php echo $key; ?>Dropdown" role="button" data-bs-toggle="dropdown">
                            <?php echo $item['title']; ?>
                        </a>
                        <div class="dropdown-menu mega-menu p-4">
                            <div class="row">
                                <?php foreach ($item['sections'] as $section): ?>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header"><?php echo $section['title']; ?></h6>
                                    <?php foreach ($section['items'] as $subitem): ?>
                                    <a class="dropdown-item" href="<?php echo $subitem['link']; ?>">
                                        <i class="<?php echo $subitem['icon']; ?> me-2"></i><?php echo $subitem['title']; ?>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="#login" class="nav-link me-3">Login</a>
                    <a href="#apply" class="nav-link nav-cta">Apply Now</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sub Navigation -->
    <nav class="sub-nav">
        <div class="container">
            <?php foreach ($sub_nav_items as $item): ?>
            <a href="<?php echo $item['link']; ?>" <?php echo isset($item['active']) && $item['active'] ? 'class="active"' : ''; ?>>
                <?php echo $item['title']; ?>
            </a>
            <?php endforeach; ?>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu handling
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');

            if (navbarToggler) {
                navbarToggler.addEventListener('click', function() {
                    navbarCollapse.classList.toggle('show');
                });
            }

            // Handle dropdown menus for both mobile and desktop
            document.querySelectorAll('.nav-item.dropdown').forEach(item => {
                const dropdownToggle = item.querySelector('.dropdown-toggle');
                const dropdownMenu = item.querySelector('.dropdown-menu');

                // Desktop hover functionality
                if (window.innerWidth > 992) {
                    item.addEventListener('mouseenter', function() {
                        dropdownMenu.classList.add('show');
                    });

                    item.addEventListener('mouseleave', function() {
                        dropdownMenu.classList.remove('show');
                    });
                }

                // Click functionality for both mobile and desktop
                dropdownToggle.addEventListener('click', function(e) {
                    if (window.innerWidth <= 992) { // Mobile view
                        e.preventDefault();
                        e.stopPropagation();

                        // Close other dropdowns
                        document.querySelectorAll('.nav-item.dropdown').forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.querySelector('.dropdown-menu').classList.remove('show');
                                otherItem.querySelector('.dropdown-toggle').classList.remove('active');
                            }
                        });

                        // Toggle current dropdown
                        dropdownMenu.classList.toggle('show');
                        this.classList.toggle('active');
                    } else { // Desktop view
                        e.preventDefault();
                        if (dropdownMenu.classList.contains('show')) {
                            dropdownMenu.classList.remove('show');
                        } else {
                            // Close other dropdowns
                            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                                menu.classList.remove('show');
                            });
                            dropdownMenu.classList.add('show');
                        }
                    }
                });
            });

            // Prevent dropdown items from closing the menu
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.addEventListener('click', function(e) {
                    if (window.innerWidth <= 992) {
                        e.stopPropagation();
                    }
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.navbar')) {
                    navbarCollapse.classList.remove('show');
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.remove('show');
                    });
                    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                        toggle.classList.remove('active');
                    });
                }
            });

            // Handle window resize
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    const isDesktop = window.innerWidth > 992;
                    
                    // Reset all dropdowns
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.remove('show');
                    });
                    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                        toggle.classList.remove('active');
                    });

                    // Reinitialize event listeners based on view
                    document.querySelectorAll('.nav-item.dropdown').forEach(item => {
                        if (isDesktop) {
                            // Add hover functionality for desktop
                            item.addEventListener('mouseenter', function() {
                                this.querySelector('.dropdown-menu').classList.add('show');
                            });
                            item.addEventListener('mouseleave', function() {
                                this.querySelector('.dropdown-menu').classList.remove('show');
                            });
                        } 
                        
                        else {
                            // Remove hover functionality for mobile
                            item.removeEventListener('mouseenter', null);
                            item.removeEventListener('mouseleave', null);
                        }
                    });
                }, 250);
            });
        });
    </script>
	</header><!-- #masthead -->
