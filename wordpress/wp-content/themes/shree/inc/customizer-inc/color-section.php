<?php 
/*adding sections for color Option*/
    $wp_customize->add_section( 'shree-color-option', array(

        'priority'       => 170,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Color Options', 'shree' ),
        'panel'          => 'shree_panel',
    ) );

    /*Default Color Option */
    $wp_customize->add_setting( 'shree_theme_options[shree-default-color]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['shree-default-color'],
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( 'shree-default-color', array(
        'label'       => __( 'Primary Color', 'shree' ),
        'section'     => 'shree-color-option',
        'settings'    => 'shree_theme_options[shree-default-color]',
        'type'        => 'color',
        'priority'    => 10,
    ) );

    /*Site title and Tagline Color Option */
    $wp_customize->add_setting( 'shree_theme_options[shree-title-tagline-color]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['shree-title-tagline-color'],
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( 'shree-title-tagline-color', array(
        'label'       => __( 'Site Title Color', 'shree' ),
        'section'     => 'shree-color-option',
        'settings'    => 'shree_theme_options[shree-title-tagline-color]',
        'type'        => 'color',
        'priority'    => 10,
    ) );
    /*Site Tagline Color Option */
    $wp_customize->add_setting( 'shree_theme_options[shree-tagline-color]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['shree-tagline-color'],
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( 'shree-tagline-color', array(
        'label'       => __( 'Site Tagline Color', 'shree' ),
        'section'     => 'shree-color-option',
        'settings'    => 'shree_theme_options[shree-tagline-color]',
        'type'        => 'color',
        'priority'    => 10,
    ) );