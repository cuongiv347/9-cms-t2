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
		<!--post thumbnal options-->
		<div class="post-thumb">
			<?php
				if ( ! is_single() && get_the_post_thumbnail() ) {
		    		echo '<div class="shree-image-section">' . the_post_thumbnail() . '</div>';
			}
			?>
		</div><!-- .post-thumb-->
		<div class="post-content-wrapper">
			<div class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</div><!-- .entry-header -->

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
