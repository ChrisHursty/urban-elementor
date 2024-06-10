<?php

/**
 * The footer for our theme
 *
 * @package Urban Elementor WP
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<section class="cta">
    <?php get_template_part('template-parts/call-to-action'); ?>
</section>
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-4 align-center footer-logo">
                <?php
                $footer_logo = get_theme_mod('footer_logo');
                if ($footer_logo) {
                    echo '<img src="' . esc_url($footer_logo) . '" alt="' . get_bloginfo('name') . ' Footer Logo">';
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-8 align-center footer-text">
                <?php
                $footer_text = get_theme_mod('footer_text');
                if ($footer_text) {
                    echo '<div class="footer-text">' . ($footer_text) . '</div>';
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-8 align-center footer-socials">
            </div>

        </div>
        <div class="row">
            <div class="col align-center">
                <?php
                $copyright_text = get_theme_mod('footer_copyright_text');
                if ($copyright_text) {
                    echo '<div class="copyright-text">' . $copyright_text . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>