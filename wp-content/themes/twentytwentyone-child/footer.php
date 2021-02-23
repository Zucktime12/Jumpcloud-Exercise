<footer id="footer" class="site-footer" role="contentinfo">

    <div class="site-info container">
        <div class="left">
        <div class="site-name pt-4">
            <div class="footer-logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.png" alt="footer-logo">
            </div>
        </div><!-- .site-name -->
        <?php if ( has_nav_menu( 'footer' ) ) : ?>
        <nav aria-label="<?php esc_attr_e( 'Secondary menu' ); ?>" class="footer-navigation">
            <ul class="footer-navigation-wrapper">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'items_wrap'     => '%3$s',
                        'container'      => true,
                        'depth'          => 1,
                        'link_before'    => '<span>',
                        'link_after'     => '</span>',
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </ul><!-- .footer-navigation-wrapper -->
        </nav><!-- .footer-navigation -->
        <?php endif; ?>
        </div>
        <div class="copyright text-white">Copyright &copy; <?php echo date('Y'); ?></div>

    </div><!-- .site-info -->

</footer><!-- #colophon -->