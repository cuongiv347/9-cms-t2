<?php
/**
 * The header section of Shree.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shree
 */
    global $shree_theme_options;
	$shree_theme_options = shree_get_theme_options();
	$shree_header_disable = $shree_theme_options['shree-header-disable'];

?>
<?php
	/**
	 * Hook - shree_doctype.
	 *
	 * @hooked shree_doctype_action - 10
	 */
	do_action( 'shree_doctype' );
?>

<head>

<?php
	/**
	 * Hook - shree_head.
	 *
	 * @hooked shree_head_action - 10
	 */
	do_action( 'shree_head' );


	wp_head(); ?>

</head>

<body <?php body_class('at-sticky-sidebar');?>>
	<div class="site_layout">

<?php

	/**
	 * Hook - shree_header_start_wrapper_action.
	 *
	 * @hooked shree_header_start_wrapper - 10
	 */
	do_action( 'shree_header_start_wrapper_action' );


	/**
	 * Hook - shree_skip_link.
	 *
	 * @hooked shree_skip_link_action - 10
	 */
	do_action( 'shree_skip_link_action' );


	/**
	 * Hook - shree_header_section.
	 *
	 * @hooked shree_header_section_action - 10
	 */
	if($shree_header_disable == 1 ){ 
	 do_action( 'shree_header_section_action' );
	}


	/**
	 * Hook - shree_header_lower_section.
	 *
	 * @hooked shree_header_lower_section_action - 10
	 */
	do_action( 'shree_header_lower_section_action' );

	/**
	 * Hook - shree_header_slider_action.
	 *
	 * @hooked shree_header_slider_section_action - 10
	 */
	do_action('shree_header_slider_section_action');

	/**
	 * Hook - shree_header_featured.
	 *
	 * @hooked shree_header_featured_action - 10
	 */
	do_action('shree_header_featured_action');

	/**
	 * Hook - shree_header_end_wrapper.
	 *
	 * @hooked shree_header_end_wrapper_action - 10
	 */
	do_action( 'shree_header_end_wrapper_action' );

?>

		