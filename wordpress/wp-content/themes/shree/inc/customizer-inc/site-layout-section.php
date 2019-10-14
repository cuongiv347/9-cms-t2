<?php
/*adding sections for category selection for promo section in homepage*/
$wp_customize->add_section( 'shree-site-layout', array(
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'title'          => __( 'Blog Options', 'shree' ),
    'panel'          => 'shree_panel',
) );

/* feature cat selection */
$wp_customize->add_setting( 'shree_theme_options[shree-layout]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['shree-layout'],
    'sanitize_callback' => 'shree_sanitize_select'
) );

$choices = shree_sidebar_layout();
$wp_customize->add_control('shree_theme_options[shree-layout]',
            array(
            'choices'   => $choices,
            'label'		=> __( 'Select Sidebar Layout', 'shree'),
            'section'   => 'shree-site-layout',
            'settings'  => 'shree_theme_options[shree-layout]',
            'type'	  	=> 'select',
            'priority'  => 10
         )
    );

/* Read More Option */
$wp_customize->add_setting( 'shree_theme_options[shree-read-more-text]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['shree-read-more-text'],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control('shree_theme_options[shree-read-more-text]',
            array(
            'label'       => __( 'Read More Text', 'shree'),
            'description' => __('Continue Reading >> default text change section', 'shree'),
            'section'     => 'shree-site-layout',
            'settings'    => 'shree_theme_options[shree-read-more-text]',
            'type'        => 'text',
            'priority'    => 10
         )
    );
/* Sticky Sidebar Option */
$wp_customize->add_setting( 'shree_theme_options[shree-sticky-sidebar-option]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['shree-sticky-sidebar-option'],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control('shree_theme_options[shree-sticky-sidebar-option]',
            array(
            'label'       => __( 'Enable/Disable Sticky Sidebar', 'shree'),
            'description' => __('Checked to enable sticky sidebar', 'shree'),
            'section'     => 'shree-site-layout',
            'settings'    => 'shree_theme_options[shree-sticky-sidebar-option]',
            'type'        => 'checkbox',
            'priority'    => 10
         )
    );

/* Pagination Options */
$choices = shree_pagination_option();
$wp_customize->add_setting( 'shree_theme_options[shree-blog-pagination-type-options]', array(
    'capability'        => 'edit_theme_options',
    'default'           => $defaults['shree-blog-pagination-type-options'],
    'sanitize_callback' => 'shree_sanitize_select'
) );

$wp_customize->add_control('shree_theme_options[shree-blog-pagination-type-options]',
            array(
            'choices'     => $choices,
            'label'       => __( 'Pagination Type', 'shree'),
            'description' => __('Select Pagination Type From Below', 'shree'),
            'section'     => 'shree-site-layout',
            'settings'    => 'shree_theme_options[shree-blog-pagination-type-options]',
            'type'        => 'select',
            'priority'    => 10
         )
    );