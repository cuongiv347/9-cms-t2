<?php 
/*adding sections for Typography Option*/
    $wp_customize->add_section( 'shree-typography-option', array(

        'priority'       => 170,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Typography Option', 'shree' ),
        'panel'          => 'shree_panel',
    ) );

    /*Typography Option For URL*/
    $wp_customize->add_setting( 'shree_theme_options[shree-font-family-url]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['shree-font-family-url'],
        'sanitize_callback' => 'esc_url_raw'
    ) );

    $wp_customize->add_control( 'shree-font-family-url', array(
        'label'       => __( 'Paragraph Font Family URL Text', 'shree' ),
        'section'     => 'shree-typography-option',
        'settings'    => 'shree_theme_options[shree-font-family-url]',
        'type'        => 'url',
        'priority'    => 10,
        'description' => sprintf('%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                __( 'Insert', 'shree' ),
                esc_url('https://www.google.com/fonts'),
                __('Enter Google Font URL' , 'shree'),
                __('to add google Font.' ,'shree')
                ),
    ) );



    /*Font Family Name*/

    $wp_customize->add_setting( 'shree_theme_options[shree-font-family-name]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['shree-font-family-name'],
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'shree-font-family-name', array(
        'label'       => __( 'Paragraph Font Family Name', 'shree' ),
        'section'     => 'shree-typography-option',
        'settings'    => 'shree_theme_options[shree-font-family-name]',
        'type'        => 'text',
        'priority'    => 10,
        'description' => __( 'Insert Google Font Family Name.', 'shree' ),
    ) );