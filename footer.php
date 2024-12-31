<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package domain
 */

?>
<style>
	
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

</style>



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
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
