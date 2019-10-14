<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shree
 */
  	/**
	 * Hook - shree_container_closing_action.
	 *
	 * @hooked shree_container_closing_action - 10
	 */
	do_action( 'shree_container_closing_action' );


  	/**
	 * Hook - shree_site_footer_start_action.
	 *
	 * @hooked shree_site_footer_start_action - 10
	 */
	do_action( 'shree_site_footer_start_action' );


	/**
	 * Hook - shree_site_footer_widget_action.
	 *
	 * @hooked shree_site_footer_widget_action - 10
	 */
	do_action( 'shree_site_footer_widget_action' );

	/**
	 * Hook - shree_footer_site_info_action.
	 *
	 * @hooked shree_footer_site_info_action - 10
	 */
	do_action( 'shree_footer_site_info_action' );

	/**
	 * Hook - shree_footer_closing_action.
	 *
	 * @hooked shree_footer_closing - 10
	 */
	do_action( 'shree_footer_closing_action' );


    wp_footer(); ?>
</div>

</body>
</html>
