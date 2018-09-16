<?php
/**Template Name: Новости страница*/
/**
 * The template for displaying news pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?> 
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						//comments_template();
					}
				endwhile;?>
			<div class="entry-content">
			<?php
			$current_user = wp_get_current_user();
			$corrent_id = $current_user->ID;
			$user_info = get_userdata($corrent_id);
			$user_role = $user_info->roles;
			if (in_array('administrator', $user_role) or in_array('univer_manager', $user_role) or in_array('_', $user_role))
			{
				echo "[wpuf_form id=\"4925\"]";
			}
			?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
