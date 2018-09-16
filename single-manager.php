<?php
/**
 * The Template for displaying manager single posts
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
					 * (where ___ is the post format) and that will be used  instead.
					 */
					get_template_part( 'content', get_post_format() ); ?>
                    <?php
                    $manager = get_the_ID();
                    $block = get_post_meta($manager, 'block_manager', true);
                    $practice = get_post_meta($block, 'practice', true);
                    ?>
                    <div class="entry-content">
                        <table>
							<tr>
								<td></td>
								<td><?php echo wp_get_attachment_image( get_post_meta($manager,'photo_manager',true)) ?></td>
							</tr>
                            <tr>
                                <td><span style="color: #008000;"><b>Руководитель</b></span></td>
                                <td><?php echo get_post_meta($manager,'name_manager',true); ?></td>
                            </tr>
                            <tr>
                                <td><span style="color: #008000;"><b>Кафедра</b></span></td>
                                <td><?php echo get_post_meta($manager,'chair_manager',true); ?></td>
                            </tr>
                            <tr>
                                <td><span style="color: #008000;"><b>Должность</b></span></td>
                                <td><?php echo get_post_meta($manager,'post_manager',true); ?></td>
                            </tr>
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
