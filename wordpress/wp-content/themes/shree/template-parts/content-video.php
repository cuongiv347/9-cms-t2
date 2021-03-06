<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shree
 */
 global $shree_theme_options;
 $shree_read_more = esc_html( $shree_theme_options['shree-read-more-text'] );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('boxed'); ?>>
	<div class="post-wrapper">
		<?php
		    $content = apply_filters( 'the_content', get_the_content() );
		    $video = false;

		    # Only get video from the content if a playlist isn't present.
		    if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		        $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
		    }
		?>
		<!--post thumbnal options-->
		<div class="post-thumb">
           <?php 
                if ( ! empty( $video ) ) {
                    foreach ( $video as $video_html ) {
                        echo '<div class="shree-video-section">';
                        echo $video_html;
                        echo '</div>';
                    }
                }
            ?>
		</div><!-- .post-thumb-->
		
		<div class="post-content-wrapper">
			<div class="post-header">
				<span class="post-category">
			    	<?php
	                   $categories = get_the_category();
	                   if ( ! empty( $categories ) ) {
	                      echo '<a class="tag tag-blue" href="'.esc_url( get_category_link( $categories[0]->term_id ) ).'" title="Post Category">'.esc_html( $categories[0]->name ).'</a>';
	                  }                                 
	                ?>
			    </span>
				<div class="post-title">
					<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif; ?>
				</div><!-- .entry-header -->
			
			
			    <time>
			    	<?php
						if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php shree_posted_on(); ?>
							</div><!-- .entry-meta -->
						<?php
					endif; ?>
			    </time>
			    <div class="post-comment">
					<span><i class="fa fa-commenting-o"></i> <?php echo get_comments_number(); ?> <a href="<?php comments_link(); ?>"><?php echo esc_html('') ?></a> </span>
				</div>
			    <span class="post-tag">
					<?php $posttags = get_the_tags();

					if( !empty( $posttags ))
					{
					?>
							<i class="fa fa-tag"></i>
							
							<?php
								$count = 0;
								if ( $posttags ) 
								{
								  foreach( $posttags as $p_tag )
								   {
										$count++;
										if ( 1 == $count )
										  {
										    echo '<a class="tags-sigle" href="'.esc_url( get_tag_link( $p_tag) ).'" title="Post Tags">'.esc_html( $p_tag->name ).'</a>';

									      }
								    }
			                    } ?>
						
				<?php } ?>
			    </span>
			</div>

			<div class="post-content">
					<?php the_excerpt(); ?>
			</div><!-- .entry-content -->

			<div class="post-footer">
				<a href="<?php the_permalink(); ?>" class="btn btn-more">
					<?php echo $shree_read_more; ?> 
				</a>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
