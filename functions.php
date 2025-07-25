<?php
function amin_theme_scripts() {
    wp_enqueue_style('amin-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'amin_theme_scripts');
?>
