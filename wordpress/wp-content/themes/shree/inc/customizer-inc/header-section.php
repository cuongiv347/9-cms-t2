<?php 
/*adding sections for footer options*/
    $wp_customize->add_section( 'shree-header-option', array(
        'priority'       => 150,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Header Option', 'shree' ),
        'panel'          => 'shree_panel',
    ) );

    /*callback functions slider*/
    if ( !function_exists('shree_header_active_callback') ) :
        function shree_header_active_callback(){
        global $shree_theme_options;
        $shree_theme_options = shree_get_theme_options();
        $enable_header = $shree_theme_options['shree-header-disable'];
        if( 1 == $enable_header ){
          return true;
        }
        else{
          return false;
        }
    }
    endif;

    /*Option Section Enable Disable*/
    $wp_customize->add_setting( 'shree_theme_options[shree-header-disable]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['shree-header-disable'],
        'sanitize_callback' => 'shree_sanitize_checkbox'
    ) );
    $wp_customize->add_control( 'shree-header-disable', array(
        'label'       => __( 'Enable Top Header', 'shree' ),
        'description' => __('Enable Header Section to show menu and social', 'shree'),
        'section'     => 'shree-header-option',
        'settings'    => 'shree_theme_options[shree-header-disable]',
        'type'        => 'checkbox',
        'priority'    => 10
    ) );

/*header ad img*/
$wp_customize->add_setting( 'shree_theme_options[shree-header-main-banner-ads]', array(
    'capability'        => 'edit_theme_options',
    'default'           => $defaults['shree-header-main-banner-ads'],
    'sanitize_callback' => 'shree_sanitize_image'
) );

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'shree_theme_options[shree-header-main-banner-ads]',
        array(
            'label'     => __( 'Header Ad Image', 'shree' ),
            'section'   => 'shree-header-option',
            'settings'  => 'shree_theme_options[shree-header-main-banner-ads]',
            'priority'  => 10,
            'description' => __( 'Recommended image size of 728*90', 'shree' )
        )
    )
);  
/*header ad img link*/
$wp_customize->add_setting( 'shree_theme_options[shree-header-main-banner-ads-link]', array(
    'capability'        => 'edit_theme_options',
    'default'           => $defaults['shree-header-main-banner-ads-link'],
    'sanitize_callback' => 'esc_url_raw',
) );