<?php
/**
 *Recommended way to include parent theme styles.
 *(Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
*/  
/**
 * Loads the child theme textdomain.
 */
function shree_clean_load_language() {
    load_child_theme_textdomain( 'shree-clean' );
}
add_action( 'after_setup_theme', 'shree_clean_load_language' );
/**
 *Enqueue Style
*/
add_action( 'wp_enqueue_scripts', 'shree_clean' );
function shree_clean() {

    $parent_style = 'shree-style';

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/framework/bootstrap/css/bootstrap.css');
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'shree-clean-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('bootstrap', $parent_style),
        wp_get_theme()->get('Version'));
}

/**
 *  Default Theme options
 *
 * @since shree 1.0.0
 *
 * @param null
 * @return array $shree_theme_layout
 *
 */
if ( !function_exists('shree_default_theme_options') ) :
    function shree_default_theme_options() {

        $default_theme_options = array(
            
            'shree-feature-cat'=> 0,
            'shree-promo-cat'  => 0,
            'shree-slider-read-more'=> esc_html__('Continue Reading','shree-clean'), 
            'shree-footer-copyright' => esc_html__('&copy; All Right Reserved','shree-clean'),
            'shree-layout'          => 'right-sidebar',
            'shree-font-family-url'              => esc_url('//fonts.googleapis.com/css?family=Oxygen:400,700&display=swap', 'shree-clean'),
            'shree-font-family-name'             => esc_html__('Oxygen, sans-serif','shree-clean'),           
            'shree-footer-totop'                 => 1,
            'shree-read-more-text'               => esc_html__('Continue Reading','shree-clean'),
            'shree-header-main-banner-ads'       => '',
            'shree-header-main-banner-ads-link'  => '',
            'shree-header-social'                => 0,
            'shree-header-search'                => 0,
            'shree-header-disable'               => 0,
            'shree-sticky-sidebar-option'        => 1,
            'shree-blog-pagination-type-options' => 'numeric',
            'shree-default-color'                => '#000000', 
            'shree-title-tagline-color'          => '#222',
            'shree-tagline-color'                => '#818181', 
        );
        return apply_filters( 'shree_default_theme_options', $default_theme_options );
    }
endif;

/**
 * Remove Parent theme functions via child theme.
 * Parent theme, which will fire on the default priority of 10
*/
function shree_clean_remove_features() {

    // Remove Post Formats Support
    remove_theme_support( 'post-formats' );

}
add_action( 'after_setup_theme', 'shree_clean_remove_features', 11 );


/* ----------------------
* Remove Customizer Settings.
* @since 1.0.0
* @package Shree Clean
----------------------- */
function shree_clean_remove_settings( $wp_customize ) {

    $wp_customize->remove_control('shree_theme_options[shree-header-main-banner-ads]');

}
add_action( 'customize_register', 'shree_clean_remove_settings', 9999);


/* ----------------------
* Header Lower section hook of the theme.
* @since 1.0.0
* @package Shree
----------------------- */
if ( ! function_exists( 'shree_clean_header_lower_section' ) ) :
    /**
     * Header section hook of the theme.
     *
     * @since 1.0.0
     */
    function shree_clean_header_lower_section() {
        
        remove_action('shree_header_lower_section_action', 'shree_header_lower_section', 10);
        ?>

        <div class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="logo">
                            <?php
                            if (has_custom_logo()) { ?>

                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
                                    <?php  the_custom_logo();?>
                                </a>
                            <?php } 
                            else {
                                ?>  
                                <div class="logo-text">
                                    <?php
                                    if ( is_front_page() && is_home() ) : ?>
                                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <?php else : ?>
                                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                        <?php
                                    endif;
                                    $description = get_bloginfo( 'description', 'display' );
                                    if ( $description || is_customize_preview() ) : ?>
                                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                        <?php
                                    endif; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-lower">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only"><?php _e('Toggle navigation', 'shree-clean');?></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <div class="text-center">
                                    <?php 
                                    if ( has_nav_menu('primary'))
                                    {
                                        wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navigation' ) ); 
                                    }
                                    else
                                        { ?>
                                            <ul class="navigation">
                                                <li class="menu-item">
                                                    <a href="<?php echo esc_url(admin_url( 'nav-menus.php' )); ?> "> <?php esc_html_e('Add a menu','shree-clean'); ?></a>
                                                </li>
                                            </ul>
                                        <?php }     
                                        ?>
                                    </div>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    endif;
    add_action( 'shree_header_lower_section_action', 'shree_clean_header_lower_section', 9 );

/*
* Footer Section footer widget section 
* @since 1.0.0
* @package Shree
*/ 
if ( ! function_exists( 'shree_clean_footer_site_info' ) ) :
    /**
     * Footer Section footer widget section
     *
     * @since 1.0.0
     */
    function shree_clean_footer_site_info() { 

        remove_action('shree_footer_site_info_action', 'shree_footer_site_info', 10);

        global $shree_theme_options;
        $shree_copyright = wp_kses_post( $shree_theme_options['shree-footer-copyright'] );
        ?>

        <div class="site-info">
            <span class="copy-right-text">
                <?php echo $shree_copyright; ?>             
            </span>
            <div class="powered-text">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shree-clean' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'shree-clean' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'shree-clean' ), 'Shree Clean', '<a href="https://www.canyonthemes.com" target="_blank">Canyon Themes</a>' ); ?>  
            </div>
            <?php
            if( 1 == $shree_theme_options['shree-footer-totop'] ){
                shree_go_to_top();
            }
            ?>
        </div><!-- .site-info -->
        <?php
    }
endif;
add_action( 'shree_footer_site_info_action', 'shree_clean_footer_site_info', 9 );