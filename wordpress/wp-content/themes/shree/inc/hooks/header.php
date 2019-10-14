<?php
/*
* Header Hook Section 
* @since 1.0.0
*/
/* ------------------------------
* Doctype hook of the theme
* @since 1.0.0
* @package Shree
------------------------------ */
if ( ! function_exists( 'shree_doctype_action' ) ) :
    /**
     * Doctype declaration of the theme.
     *
     * @since 1.0.0
     */
    function shree_doctype_action() {
    	?>
    	<!DOCTYPE html>
    	<html <?php language_attributes(); ?> class="boxed">
    	<?php
    }
endif;
add_action( 'shree_doctype', 'shree_doctype_action', 10 );

/* --------------------------
* Header hook of the theme.
* @since 1.0.0
* @package Shree
-------------------------- */
if ( ! function_exists( 'shree_head_action' ) ) :
    /**
     * Header hook of the theme.
     *
     * @since 1.0.0
     */
    function shree_head_action() {
    	?>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="profile" href="https://gmpg.org/xfn/11">
    	<?php
    }
endif;
add_action( 'shree_head', 'shree_head_action', 10 );

/* -----------------------
* Header skip link hook of the theme.
* @since 1.0.0
* @package Shree
----------------------- */
if ( ! function_exists( 'shree_skip_link_head' ) ) :
    /**
     * Header skip link hook of the theme.
     *
     * @since 1.0.0
     */
    function shree_skip_link_head() {
    	?>
    	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shree' ); ?></a>
    	<?php
    }
endif;
add_action( 'shree_skip_link_action', 'shree_skip_link_head', 10 );

/* -------------------------
* Header section start wrapper theme.
* @since 1.0.0
* @package Shree
------------------------- */
if ( ! function_exists( 'shree_header_start_wrapper' ) ) :
    /**
     * Header section start wrapper theme.
     *
     * @since 1.0.0
     */
    function shree_header_start_wrapper() {
    	?>
    	<div id="page">
    		<?php
    	}
    endif;
    add_action( 'shree_header_start_wrapper_action', 'shree_header_start_wrapper', 10 );


/* -------------------------
* Header section hook of the theme.
* @since 1.0.0
* @package Shree
------------------------- */
if ( ! function_exists( 'shree_header_section' ) ) :
    /**
     * Header section hook of the theme.
     *
     * @since 1.0.0
     */
    function shree_header_section() {
    	?>

    	<header role="header">
    		<div class="top-header">
    			<div class="container">
    				<div class="row">
    					<div class="co-sm-8 col-md-8">
    						<div class="header-info">
    							<?php 
    							if ( has_nav_menu('top'))
    							{
    								wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'navigation' ) ); 
    							}
    							else
    								{ ?>
    									<ul class="navigation">
    										<li class="menu-item">
    											<a href="<?php echo esc_url(admin_url( 'nav-menus.php' )); ?> "> <?php esc_html_e('Add a menu','shree'); ?></a>
    										</li>
    									</ul>
    								<?php }		
    								?>
    							</div>
    						</div>

    						<div class="col-sm-4">
    							<div class="social-links">
    								<?php 
    									wp_nav_menu( array( 'theme_location' => 'social', 'menu_class
    										' => 'nav navbar-social' ) ); 
    								?>

    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</header>
    		<?php
    	}
    endif;
    add_action( 'shree_header_section_action', 'shree_header_section', 10 );


/* ----------------------
* Header Lower section hook of the theme.
* @since 1.0.0
* @package Shree
----------------------- */
if ( ! function_exists( 'shree_header_lower_section' ) ) :
    /**
     * Header section hook of the theme.
     *
     * @since 1.0.0
     */
    function shree_header_lower_section() {
    	?>

    	<div class="logo-area">
    		<div class="container">
    			<div class="row">
    				<div class="col-xl-3 col-md-3">
    					<div class="logo">
    						<?php
    						if (has_custom_logo()) { ?>

    							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
    								<?php  the_custom_logo();?>
    							</a>
    						<?php } 
    						else {
    							?>  
    							<div class="togo-text">
    								<?php
    								if ( is_front_page() && is_home() ) : ?>
    									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    								<?php else : ?>
    									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    									<?php
    								endif;
    								$description = get_bloginfo( 'description', 'display' );
    								if ( $description || is_customize_preview() ) : ?>
    									<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
    									<?php
    								endif; ?>
    							</div>
    						<?php } ?>
    					</div>
    				</div>
    				<div class="col-xl-9 col-md-9 text-right">
    					<div class="advertise-area">
    						<div class="advertise-img">
    							<?php 
    							global $shree_theme_options;
    							$shree_header_ads = $shree_theme_options['shree-header-main-banner-ads'];
    							$shree_header_ads_link =  $shree_theme_options['shree-header-main-banner-ads-link'];
                                ?>
                                <?php if(!empty( $shree_header_ads )) { ?>
    							<a href="<?php echo esc_url($shree_header_ads_link);?>" target="_blank"><img src="<?php echo esc_url($shree_header_ads); ?>" class="img-fluid" alt="advertise"></a>
                            <?php } ?>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="header-lower">
    		<div class="container">
    			<div class="row">
    				<div class="col-xl-10 col-lg-10">
    					<!-- Main Menu -->
    					<nav class="main-menu">
    						<div class="navbar-header">
    							<!-- Toggle Button -->    	
    							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    								<span class="sr-only"><?php _e('Toggle navigation', 'shree');?></span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    							</button>
    						</div>
    						<div class="navbar-collapse collapse clearfix">
    							<div class="navbar-left">
    								<?php 
    								if ( has_nav_menu('primary'))
    								{
    									wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navigation' ) ); 
    								}
    								else
    									{ ?>
    										<ul class="navigation">
    											<li class="menu-item">
    												<a href="<?php echo esc_url(admin_url( 'nav-menus.php' )); ?> "> <?php esc_html_e('Add a menu','shree'); ?></a>
    											</li>
    										</ul>
    									<?php }		
    									?>
    								</div>
    							</div><!-- /.navbar-collapse -->
    						</nav>
    					</div>
    					<div class="col-xl-2 col-lg-2 text-right">
    						<div class="menu-icon">
    							<a href="#" class="sm-margin" data-toggle="modal" data-target="#search-modal"><i class="fa fa-search" aria-hidden="true"></i></a>
    							<a href="#" class="menu-tigger"><i class="fa fa-bars" aria-hidden="true"></i></a>
    						</div>
    						<!-- Modal Search -->
    						<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
    							<div class="modal-dialog" role="document">
    								<div class="modal-content">
    										<div id="search-form">
    											<div class="top-search-wrapper">
    												<?php 
    												get_search_form();
    												?>
    											</div>
    										</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="offcanvas-menu">
    					<span class="menu-close">
    						<i class="fa fa-times"></i>
    					</span>
    					<?php 
    					if( is_active_sidebar( 'off-canvas' ) ){
    						dynamic_sidebar( 'off-canvas' ); 
    					}
    					?>
    				</div>
    				<div class="offcanvas-overly"></div>
    			</div>
    		</div>
    		<?php
    	}
    endif;
    add_action( 'shree_header_lower_section_action', 'shree_header_lower_section', 10 );

/* -----------------------
* Featured section hook
* @since 1.0.0
* @package Shree
----------------------- */
if ( ! function_exists( 'shree_header_featured' ) ) :
    /**
     * Featured section hook
     *
     * @since 1.0.0
     */
    function shree_header_featured() { 
    	global $shree_theme_options;
    		$category_id = $shree_theme_options['shree-promo-cat'];
    	if( $category_id > 0 && is_home() && is_front_page() ){ 
    		?>
    		<!-- All-post -->
    		<section class="fetures-top pb-30">
    			<div class="container">
    				<div class="row"> 
    					<?php 
    					global $shree_theme_options;
    					$shree_theme_options  = shree_get_theme_options();
    					$category_id          = $shree_theme_options['shree-promo-cat'];
    					$args = array( 'cat' => $category_id , 'posts_per_page' => 3,'order'=> 'DESC' );
    					$query = new WP_Query($args);
    					if($query->have_posts()):
    						while($query->have_posts()):
    							$query->the_post();
    							?>
    							<div class="col-sm-6 col-md-4">
    								<div class="fretures-top-wrap">
    									<div class="post-thumb thumb-img-width">
    										<?php
    										if(has_post_thumbnail())
    										{
    											$image_id  = get_post_thumbnail_id();
    											$image_url = wp_get_attachment_image_src($image_id,'shree-promo-post',true);

    											?>
    											<figure>
    												<?php the_post_thumbnail('thumbnail'); ?>
    											</figure>
    										<?php   } ?>
    									</div>
    									<div class="post-content fetures-top-content">
    										<h6 class=""><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h6>
    										<span><?php echo esc_html(get_the_date());?></span>
    									</div>
    								</div>
    							</div>
    						<?php   endwhile; endif; wp_reset_postdata(); ?>
    					</div>
    				</div>
    			</section>
    		<?php } 
    	}
    endif;
    add_action( 'shree_header_featured_action', 'shree_header_featured', 10 );

/* -----------------------
* Header Lower section hook of the theme.
* @since 1.0.0
* @package Shree
----------------------- */
if ( ! function_exists( 'shree_header_slider_action' ) ) :
    /**
     * Header section hook of the theme.
     *
     * @since 1.0.0
     */
    function shree_header_slider_action() {
    	global $shree_theme_options;
    	$shree_theme_options  = shree_get_theme_options();
    	$shree_category_cat   = $shree_theme_options['shree-feature-cat'];
    	if( $shree_category_cat > 0 ){ ?>
    		<section  class="clearfix">
				<div id="main-slider">
					<?php if(is_home() || is_front_page () ) {
						shree_home_slider();
					}
					?>
				</div>
    		</section>
    		<?php
    	}
    }
endif;
add_action( 'shree_header_slider_section_action', 'shree_header_slider_action', 10 );

/* ----------------------
* Header end wrapper section hook of the theme.
* @since 1.0.0
* @package Shree
---------------------- */
if ( ! function_exists( 'shree_header_end_wrapper' ) ) :
    /**
     * Header end wrapper section hook of the theme.
     *
     * @since 1.0.0
     */
    function shree_header_end_wrapper() { ?>
    	<div id="content" class="site-content">
    		<?php if( !is_page_template('elementor_header_footer') ){ ?>
    			<div class="container">
    				<div class="row">

    					<?php
    				}
    			}
    		endif;
    		add_action( 'shree_header_end_wrapper_action', 'shree_header_end_wrapper', 10 );
