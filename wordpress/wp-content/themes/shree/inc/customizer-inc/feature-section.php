<?php 
/*adding sections for category section in front page*/
$wp_customize->add_section( 'shree-feature-category', array(
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'title'          => __( 'Slider Section', 'shree' ),
    'description'    => __( 'Select the required category for the slider Recommended image for slider is 1920*700', 'shree' ),
    'panel'=>'shree_panel'

) );

/* feature cat selection */
$wp_customize->add_setting( 'shree_theme_options[shree-feature-cat]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['shree-feature-cat'],
    'sanitize_callback' => 'absint'
) );

$wp_customize->add_control(
    new Shree_Customize_Category_Dropdown_Control(
        $wp_customize,
        'shree_theme_options[shree-feature-cat]',
        array(
            'label'		=> __( 'Select Category', 'shree' ),
            'section'   => 'shree-feature-category',
            'settings'  => 'shree_theme_options[shree-feature-cat]',
            'type'	  	=> 'category_dropdown',
            'priority'  => 10
        )
    )
);


/* Slider Read More Text */
$wp_customize->add_setting( 'shree_theme_options[shree-slider-read-more]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['shree-slider-read-more'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control('shree_theme_options[shree-slider-read-more]', array(
            'label'		=> __( 'Read More Text', 'shree' ),
            'section'   => 'shree-feature-category',
            'settings'  => 'shree_theme_options[shree-slider-read-more]',
            'type'	  	=> 'text',
            'priority'  => 10
    )
);