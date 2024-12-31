<?php
// Include the header section
include('adsewa/header.php');
?>

<style>
    .hero-section {
        text-align: center;
        padding: 50px;
        background-color: #f5f5f5;
    }
    .hero-title {
        font-size: 36px;
        margin-bottom: 20px;
    }
    .hero-subtitle {
        font-size: 18px;
        color: #777;
    }
    .services-section, .blog-section, .contact-section {
        padding: 50px 20px;
    }
    .services-list, .blog-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .service-item, .blog-item {
        flex: 1 1 calc(33.33% - 20px);
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-align: center;
    }
    .contact-form {
        margin-top: 20px;
    }
    .contact-form input, .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .contact-form button {
        padding: 10px 20px;
        background-color: #0073aa;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .contact-form button:hover {
        background-color: #005177;
    }
</style>

<div class="hero-section">
    <h1 class="hero-title">Welcome to Our Website</h1>
    <p class="hero-subtitle">We provide exceptional services to help you achieve your goals.</p>
</div>

<div class="services-section">
    <h2>Our Services</h2>
    <div class="services-list">
        <div class="service-item">
            <h3>Service 1</h3>
            <p>Description of service 1.</p>
        </div>
        <div class="service-item">
            <h3>Service 2</h3>
            <p>Description of service 2.</p>
        </div>
        <div class="service-item">
            <h3>Service 3</h3>
            <p>Description of service 3.</p>
        </div>
    </div>
</div>

<div class="blog-section">
    <h2>Latest Blog Posts</h2>
    <div class="blog-list">
        <?php
        $blog_query = new WP_Query([
            'posts_per_page' => 3,
        ]);

        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
        ?>
                <div class="blog-item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No blog posts found.</p>';
        endif;
        ?>
    </div>
</div>

<div class="contact-section">
    <h2>Contact Us</h2>
    <form class="contact-form" method="post">
        <input type="text" name="cf_name" placeholder="Your Name" required>
        <input type="email" name="cf_email" placeholder="Your Email" required>
        <textarea name="cf_message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit" name="cf_submit">Send Message</button>
    </form>

    <?php
    if (isset($_POST['cf_submit'])) {
        $name = sanitize_text_field($_POST['cf_name']);
        $email = sanitize_email($_POST['cf_email']);
        $message = sanitize_textarea_field($_POST['cf_message']);

        $to = get_option('admin_email');
        $subject = 'New Contact Form Submission';
        $headers = ["From: $name <$email>", "Reply-To: $email"];

        if (wp_mail($to, $subject, $message, $headers)) {
            echo '<p>Thank you for your message. We will get back to you shortly.</p>';
        } else {
            echo '<p>There was an error sending your message. Please try again later.</p>';
        }
    }
    ?>
</div>

<?php
// Include the footer section
include('footer.php');
?>
