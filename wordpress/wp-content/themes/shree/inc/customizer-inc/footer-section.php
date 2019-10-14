<?php 
/*adding sections for footer options*/
    $wp_customize->add_section( 'shree-footer-option', array(
        'priority'       => 170,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Footer Option', 'shree' ),
        'panel'          => 'shree_panel',
    ) );
    /*copyright*/

    $wp_customize->add_setting( 'shree_theme_options[shree-footer-copyright]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['shree-footer-copyright'],
        'sanitize_callback' => 'wp_kses_post'
    ) );

    $wp_customize->add_control( 'shree-footer-copyright', array(
        'label'     => __( 'Copyright Text', 'shree' ),
        'section'   => 'shree-footer-option',
        'settings'  => 'shree_theme_options[shree-footer-copyright]',
        'type'      => 'text',
        'priority'  => 10

    ) );

    /*go to top*/

    $wp_customize->add_setting( 'shree_theme_options[shree-footer-totop]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['shree-footer-totop'],
        'sanitize_callback' => 'shree_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'shree-footer-totop', array(
        'label'     => __( 'Go To Top Option', 'shree' ),
        'section'   => 'shree-footer-option',
        'settings'  => 'shree_theme_options[shree-footer-totop]',
        'type'      => 'checkbox',
        'priority'  => 10
    ) );