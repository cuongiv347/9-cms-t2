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
					<span><i class="fa fa-commenting-o"></i> <?php echo get_comments_number(); ?> <a href="<?php comments_link(); ?>"><?php echo esc_html('Comment') ?></a> </span>
				</div>
			</div>
			<div class="post-thumb">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'full' ); ?>
				</a>
			</div><!-- .post-thumb-->
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
