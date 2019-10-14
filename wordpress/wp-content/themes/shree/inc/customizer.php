<?php
/**
 * shree Theme Customizer.
 *
 * @package shree
 */
/**
 * Sidebar layout options
 *
 * @since shree 1.0.0
 *
 * @param null
 * @return array $shree_sidebar_layout
 *
 */
if ( !function_exists('shree_sidebar_layout') ) :
   
    function shree_sidebar_layout() {
        $shree_sidebar_layout =  array(
            'right-sidebar' => __( 'Right Sidebar', 'shree'),
            'left-sidebar'  => __( 'Left Sidebar' , 'shree'),
            'no-sidebar'    => __( 'No Sidebar', 'shree')
        );
        return apply_filters( 'shree_sidebar_layout', $shree_sidebar_layout );
    }
endif;

/**
 * Pagination options
 *
 * @since shree 1.0.0
 *
 * @param null
 * @return array $shree_pagination_option
 *
 */
if ( !function_exists('shree_pagination_option') ) :
   
    function shree_pagination_option() {
      
        $shree_pagination_option =  array(
            'default'  => __( 'Default Pagination', 'shree'),
            'numeric'  => __( 'Numeric Pagination' , 'shree')
        );
      
        return apply_filters( 'shree_pagination_option', $shree_pagination_option );
    }
endif;

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
            'shree-slider-read-more'=> esc_html__('Read More','shree'), 
            'shree-footer-copyright' => esc_html__('&copy; All Right Reserved','shree'),
            'shree-layout'          => 'right-sidebar',
            'shree-font-family-url'              => esc_url('//fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500', 'shree'),
            'shree-font-family-name'             => esc_html__('Montserrat, sans-serif','shree'),           
            'shree-footer-totop'                 => 1,
            'shree-read-more-text'               => esc_html__('Continue Reading','shree'),
            'shree-header-main-banner-ads'       => '',
            'shree-header-main-banner-ads-link'  => '',
            'shree-header-social'                => 0,
            'shree-header-search'                => 0,
            'shree-header-disable'               => 0,
            'shree-sticky-sidebar-option'        => 1,
            'shree-blog-pagination-type-options' => 'default',
            'shree-default-color'                => '#e81414', 
            'shree-title-tagline-color'          => '#222',
            'shree-tagline-color'                => '#818181', 
);
        return apply_filters( 'shree_default_theme_options', $default_theme_options );
    }
endif;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function shree_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'refresh';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'refresh';
    $wp_customize->get_setting( 'custom_logo' )->transport      = 'refresh';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /*defaults options*/
    $defaults = shree_get_theme_options();

    $wp_customize->add_panel( 'shree_panel', array(
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'title' => __( 'Shree Theme Settings', 'shree' ),
    ) );

    /**
     * Load customizer custom-controls
     */
    require get_template_directory() . '/inc/customizer-inc/custom-controls.php';
    
    /**
     * Load customizer Design Layout section
     */
    require get_template_directory() . '/inc/customizer-inc/site-layout-section.php';

    /**
     * Load customizer Slider
     */
    require get_template_directory() . '/inc/customizer-inc/feature-section.php';

    /**
     * Load customizer Slider
     */
    require get_template_directory() . '/inc/customizer-inc/promo-section.php';

    /**
     * Load customizer Typography
     */
    require get_template_directory() . '/inc/customizer-inc/typography-section.php';
    /**
     * Load customizer Color
     */
    require get_template_directory() . '/inc/customizer-inc/color-section.php';
    /**
     * Load customizer custom-controls
     */
    require get_template_directory() . '/inc/customizer-inc/footer-section.php';
	
	   /**
     * Load customizer custom-controls
     */
    require get_template_directory() . '/inc/customizer-inc/header-section.php';

}
add_action( 'customize_register', 'shree_customize_register' );

/**
 * Load dynamic css file
*/
require get_template_directory() . '/inc/dynamic-css.php';


/**
 *  Get theme options
 *
 * @since shree 1.0.0
 *
 * @param null
 * @return array shree_theme_options
 *
 */
if ( !function_exists('shree_get_theme_options') ) :
    function shree_get_theme_options() {

        $shree_default_theme_options = shree_default_theme_options();
        

     $shree_get_theme_options     = get_theme_mod( 'shree_theme_options');
        
        if( is_array( $shree_get_theme_options ))
        {
            return array_merge( $shree_default_theme_options, $shree_get_theme_options );
        }

        else
        {
            
            return $shree_default_theme_options;
        }

    }
endif;

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function shree_customize_preview_js() {
	
    wp_enqueue_script( 'shree-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151216', true );
}
add_action( 'customize_preview_init', 'shree_customize_preview_js' );
