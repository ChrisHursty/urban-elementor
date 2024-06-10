<?php

/**
 * Single Post Template
 *
 * @package Urban Elementor WP
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header(); ?>

<?php
// Initialize variables
$post_id            = get_the_ID();
$default_image_url  = get_template_directory_uri() . '/dist/images/default-hero-img.jpg'; // Default image URL
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); // Attempt to get the featured image URL
$category_terms     = get_the_terms($post_id, 'category'); // Get categories

// Use default image if no featured image is set
if (!$featured_image_url) {
    $featured_image_url = $default_image_url;
}

// Output the section only if we have an image URL (which will always be true at this point)
echo '<section class="container-fw hero-title-area" style="background-image: url(' . esc_url($featured_image_url) . ');">';
echo '<div class="container"><div class="row"><div class="align-center text-center">';
echo '<h1>' . get_the_title() . '</h1></div>';
echo '</div></div></section>';

?>
<section class="container content-bg">
    <div class="row">
        <div class="col-md-8 content">
            <div class="content-area">
                <?php the_content(); ?>
            </div>
        </div>

        <!-- Sidebar Area -->
        <div class="col-md-4 sidebar">
            <?php if (is_active_sidebar('sidebar-1')) : ?>
                <?php dynamic_sidebar('sidebar-1'); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
