<?php 
$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : ''; 
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';
?>

<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<header id="header" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">
    <div class='container px-0'>
        <div class="row">

            <div class="site-branding col-3">

                <?php if ( has_custom_logo() && ! $show_title ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>

                <?php if ( $blog_info ) : ?>
                    <?php if ( is_front_page() && ! is_paged() ) : ?>
                        <h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></h1>
                    <?php elseif ( is_front_page() || is_home() ) : ?>
                        <h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
                    <?php else : ?>
                        <p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ( $description && get_theme_mod( 'display_title_and_tagline', true ) === true ) : ?>
                    <p class="site-description">
                        <?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
                    </p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav id="site-navigation" class="primary-navigation col-6" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
                <div class="menu-button-container">
                    <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
                        <span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'twentytwentyone' ); ?>
                            <?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
                        </span>
                        <span class="dropdown-icon close"><?php esc_html_e( 'Close', 'twentytwentyone' ); ?>
                            <?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
                        </span>
                    </button><!-- #primary-mobile-menu -->
                </div><!-- .menu-button-container -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'menu_class'      => 'menu-wrapper',
                        'container_class' => 'primary-menu-container',
                        'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
            <div class="login col-3">
                <div class="login-container">
                    <div class="mr-4"><a href="#">Log in</a></div>
                    <button class="button-primary">Sign Up</button>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</header>
<div class="header-bottom">
    <div class="container">
        <div class="row">
                <div class="col-6 d-flex align-items-center"><h1 class="display-2"><?php echo wp_title(' '); ?></h1></div>
                <div class="col-6"><?php echo get_search_form(); ?></div>
        </div>
    </div>
</div>
	

	