<?php 
/**
 * Related Post
 *
 * @since Shree 1.0.0
 *
 * @param null
 * @return void
 *
 */
if (!function_exists('shree_related_post_below')) :

    /**
     * Related Post 
     *
     * @since 1.0.0
     */

    function shree_related_post_below($post_id)
    {
        global $shree_theme_options;
     
       $shree_theme_options  = shree_get_theme_options();
       
         $categories         = get_the_category($post_id);
       
        if ($categories)
        {
            $category_ids = array();
           
            foreach ($categories as $category)
            {
                $category_ids[]  = $category->term_id;
                $category_name[] = $category->slug;
            }

            $shree_plus_cat_post_args = array(
                'category__in'        => $category_ids,
                'post__not_in'        => array($post_id),
                'post_type'           => 'post',
                'posts_per_page'      => 2,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true
            );
            $shree_plus_featured_query = new WP_Query($shree_plus_cat_post_args);
            ?>
            <div class="post-related">
                <h4><?php esc_html_e('Related Posts', 'shree') ?></h4>
                <div class="row">
                    <?php
                    while ($shree_plus_featured_query->have_posts()) :
                        $shree_plus_featured_query->the_post(); ?>
                         <div class="col-sm-6 id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
                                <div class="related-wrapper <?php if ( !has_post_thumbnail () ) { echo "no-feature-image"; } ?>">
                                    <a href="<?php the_permalink(); ?>">
                                    <div class="related-wrapper-content">
                                        <h2 class="pro_post_title"><?php the_title(); ?></h2>
                                        <div class="post-date">
                                            <?php echo get_the_date(); ?>
                                        </div>
                                    </div>    
                                   <!--post thumbnal options-->
                                    <?php if ( has_post_thumbnail () ) 
                                    { ?>
                                    <figure>
                                        <?php the_post_thumbnail( 'full' ); ?>
                                    </figure><!-- .post-thumb-->
                                    <?php } ?>
                                </a>
                                </div>
                        </div><!-- #post-## -->
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <?php
        }
    }
endif; 
add_action('shree_related_posts', 'shree_related_post_below', 10, 1);