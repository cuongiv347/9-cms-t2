<?php
/**
 * Slider Function
 *
 * @since Shree 1.0.0
 *
 */
if (!function_exists('shree_home_slider')) :
    function shree_home_slider()
    {
        ?>
    <!-- slider-area -->
    <section class="slider-two-area">
        <div class="slider-two-active">
            <?php 
            global $shree_theme_options;
            $category_id = $shree_theme_options['shree-feature-cat'];
            $args = array( 'cat' =>$category_id , 'posts_per_page' => -1 );
            $query = new WP_Query($args);
            if($query->have_posts()):
              while($query->have_posts()):
               $query->the_post();
               if(has_post_thumbnail()){
                       $image_id = get_post_thumbnail_id();
                       $image_url = wp_get_attachment_image_src( $image_id,'',true );
             ?>
            <div class="single-slider d-flex align-items-center slider-two-height" style="background-image: url(<?php echo esc_url($image_url[0]);?>)">
                <div class="container">
                    <div class="slider-two-content text-center">
                        <div class="slider-two-title">
                            <h1 data-animation="fadeInUp" data-delay=".2s" class="lora-font"><?php the_title(); ?></h1>
                        </div>
                        <div class="slider-two-text" data-animation="fadeInUp" data-delay=".4s">
                            <div><?php shree_posted_on();?></div>
                        </div>
                        <div class="slider-two-btn slider-btn" data-animation="fadeInUp" data-delay=".6s">
                            <?php global $shree_theme_options;
                                $shree_slider_read_more = esc_html( $shree_theme_options['shree-slider-read-more'] ) ;
                            ?>
                            <?php if( !empty( $shree_slider_read_more ) ){ ?>
                                 <a href="<?php the_permalink(); ?>" class="btn">         
                                <?php                                  
                                    echo $shree_slider_read_more;
                                ?>
                            <?php  } ?>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="overley"></div>
            </div>
        <?php } endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </section>
<?php   } endif;

/**
 * Goto Top functions
 *
 * @since Shree 1.0.0
 *
 */
if (!function_exists('shree_go_to_top')) :
    function shree_go_to_top()
    {
        ?>
        <a id="toTop" href="#" class="scrolltop" title="<?php esc_attr_e('Go to Top', 'shree'); ?>">
            <i class="fa fa-angle-double-up"></i>
        </a>
    <?php
    } endif;

/**
 * Post Navigation Function
 *
 * @since Shree 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( !function_exists('shree_posts_navigation') ) :
    function shree_posts_navigation() {
        global $shree_theme_options;
        $shree_pagination_option = $shree_theme_options['shree-blog-pagination-type-options'];
        if( 'default' == $shree_pagination_option ){
            the_posts_navigation();
        }
        else{
            echo"<div class='pagination'>";
            global $wp_query;
            $big = 999999999; // need an unlikely integer
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages,
                'prev_text' => __('&laquo; Prev', 'shree'),
                'next_text' => __('Next &raquo;', 'shree'),
            ));
            echo "</div>";
        }
    }
endif;
add_action( 'shree_action_navigation', 'shree_posts_navigation', 10 );

/*
* Remove [...] from default fallback excerpt content
*
*/
function shree_excerpt_more( $more ) {
  if(is_admin())
  {
    return $more;
  }
  return '...';
}
add_filter( 'excerpt_more', 'shree_excerpt_more');


/*
* Widget Enqueue 
*/
if (!function_exists('shree_widgets_backend_enqueue')) : 
function shree_widgets_backend_enqueue($hook){  

  if ( 'widgets.php' != $hook )
   {
            return;
        
   }
    wp_register_script( 'shree-custom-widgets', get_template_directory_uri().'/assets/js/widgets.js', array( 'jquery' ), true );
    wp_enqueue_media();
    wp_enqueue_script( 'shree-custom-widgets' );
}

add_action( 'admin_enqueue_scripts', 'shree_widgets_backend_enqueue' );

endif;

/**
 * Sanitizing the select callback example
 *
 * @since shree 1.0.0
 *
 * @see sanitize_key()https://developer.wordpress.org/reference/functions/sanitize_key/
 * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param $input
 * @param $setting
 * @return sanitized output
 *
 */
if ( !function_exists('shree_sanitize_select') ) :
   
    function shree_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = sanitize_key( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
endif;

/**
 * Sanitize checkbox field
 *
 *  @since Shree 1.0.0
 */
if (!function_exists('shree_sanitize_checkbox')) :
    function shree_sanitize_checkbox($checked)
    {
        // Boolean check.
        return ((isset($checked) && true == $checked) ? true : false);
    }
endif;

/**
 * Sanitizing the image callback example
 *
 * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
 *
 * @since Shree 1.0.0
 *
 * @param string $image Image filename.
 * @param $setting Setting instance.
 * @return string the image filename if the extension is allowed; otherwise, the setting default.
 *
 */
if ( !function_exists('shree_sanitize_image') ) :
    function shree_sanitize_image( $image, $setting ) {
        /*
         * Array of valid image file types.
         *
         * The array includes image mime types that are included in wp_get_mime_types()
         */
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon'
        );
        // Return an array with file extension and mime_type.
        $file = wp_check_filetype( $image, $mimes );
        // If $image has a valid mime_type, return it; otherwise, return the default.
        return ( $file['ext'] ? $image : $setting->default );
    }
endif;