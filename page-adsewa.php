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
    <style>
        /* Your custom CSS styles go here */
    </style>
</head>
<body <?php body_class(); ?>>

    <!-- Main content area -->
    <div class="content">



    
   







        <?php
        // WordPress loop to display content
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_title('<h2>', '</h2>');
                the_content();
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>

    <!-- Footer section -->
    <?php get_footer(); ?>

</body>
</html>
