<?php
/*adding sections for category section in front page*/
$wp_customize->add_section( 'shree-promo-category', array(
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'title'          => __( 'Promo Section', 'shree' ),
    'description'    => __( 'Select the category below.', 'shree' ),
    'panel' => 'shree_panel'

) );

/* feature cat selection */
$wp_customize->add_setting( 'shree_theme_options[shree-promo-cat]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['shree-promo-cat'],
    'sanitize_callback' => 'absint'
) );

$wp_customize->add_control(
    new Shree_Customize_Category_Dropdown_Control(
        $wp_customize,
        'shree_theme_options[shree-promo-cat]',
        array(
            'label'		=> __( 'Select Category', 'shree' ),
            'section'   => 'shree-promo-category',
            'settings'  => 'shree_theme_options[shree-promo-cat]',
            'type'	  	=> 'category_dropdown',
            'priority'  => 10
        )
    )
);

