<?php get_header('simple'); ?>

<h1>404 Page</h1>
<?php wp_nav_menu([
    'theme_location' => '404-menu'
]); ?>
<?php get_footer(); ?>