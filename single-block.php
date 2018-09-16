<?php
/**
 * The Template for displaying block single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				?>

				<?php
				$block = get_the_ID();
				$practice = get_post_meta( $block, 'practice', true );
				?>
				<div class="entry-content">
                    <table>
						<tr>
							<td>Наименование</td>
							<td><?php echo get_post_meta( $block, 'name_block', true ); ?></td>
						</tr>
						<tr>
							<td>Практика</td>
							<td><a href="<?php the_permalink($practice)?>"><?php echo get_post_meta( $practice, 'name', true ); ?></a> </td>
                    </table>
				</div>

				<?php
			endwhile;
			// Previous/next post navigation.
			twentyfourteen_post_nav();
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();

