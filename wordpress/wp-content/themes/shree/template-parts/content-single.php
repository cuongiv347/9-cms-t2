<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shree
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrapper">
		<!--post thumbnal options-->
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>">
			 <?php the_post_thumbnail( 'full' ); ?>
			</a>
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
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'shree' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shree' ),

						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<div class="post-order">
				<?php
					the_post_navigation( array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'shree' ) . '</span> ' .

							'<span class="screen-reader-text">' . __( 'Next post:', 'shree' ),

						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'shree' ) . '</span> ' .

							'<span class="screen-reader-text">' . __( 'Previous post:', 'shree' ),
					) );
					/**
                     * shree_related_posts hook
                     * 
                     * @since Shree 1.0.0
                     * @hooked shree_related_posts
                     */
	                do_action('shree_related_posts' ,get_the_ID() );
				?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->