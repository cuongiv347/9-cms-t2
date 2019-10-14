<?php
/**
 * Dynamic css
 *
 * @since Shree 1.0.0
 *
 * @param null
 * @return null
 *
 */
if (!function_exists('shree_dynamic_css')) :
 function shree_dynamic_css()
    {
   global $shree_theme_options;
        $shree_font_family = esc_attr( $shree_theme_options['shree-font-family-name'] );

        $shree_default_color = esc_attr( $shree_theme_options['shree-default-color'] );        
        $shree_title_color = esc_attr( $shree_theme_options['shree-title-tagline-color'] );
        $shree_tagline_color = esc_attr( $shree_theme_options['shree-tagline-color'] );
       
        $custom_css = '';
        /* Typography Section */

        if (!empty($shree_font_family)) {
            
            $custom_css .= "body { font-family: {$shree_font_family}; }";
        }

        if(!empty($shree_default_color)){

            $custom_css .=".slider-two-btn a, .nav-links .nav-previous a, .nav-links .nav-next a, .pagination .page-numbers.current, .scrolltop, .btn-more, .widget_search form input[type='submit'], .comment-form #submit {background-color: $shree_default_color; }"; 

            $custom_css .=".main-menu .navigation > li:hover > a, .main-menu .navigation > li.current > a, .main-menu .navigation > li.current-menu-item > a, .widget .featured-post-content span i, .archive .archive-heading-wrapper i
            {color: $shree_default_color; }"; 
        }

        if(!empty($shree_title_color)){

            $custom_css .= ".site-title a {color: $shree_title_color;}"; 
        }

        if(!empty($shree_tagline_color)){

            $custom_css .= ".site-description {color: $shree_tagline_color; }"; 
        }

        wp_add_inline_style('shree-style', $custom_css);
    }
endif;
add_action('wp_enqueue_scripts', 'shree_dynamic_css', 99);