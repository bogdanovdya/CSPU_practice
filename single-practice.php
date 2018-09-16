<?php
/**
 * The Template for displaying practice single posts
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
                    $practice = get_the_ID();
                    ?>
                    <div class="entry-content">
                        <table>
                            <tr>
                                <td>Наименование:</td>
                                <td><?php echo get_post_meta($practice,'name',true); ?></td>
                            </tr>
                            <tr>
                                <td>Курс:</td>
                                <td><?php echo get_post_meta($practice,'course',true); ?></td>
                            </tr>
                            <tr>
                                <td>Учебный год:</td>
                                <td><?php echo get_post_meta($practice,'date_of_practice',true); ?></td>
                            </tr>
                            <tr>
                                <td>Сроки проведения:</td>
                                <td><?php echo get_post_meta($practice,'elapsed_time',true); ?></td>
                            </tr>
                            <tr>
                                <td>Количество Z:</td>
                                <td><?php echo get_post_meta($practice,'number_z',true); ?></td>
                            </tr>
                            <tr>
                                <td>Факультетский руководитель</td>
                                <td><?php echo get_post_meta($practice,'manager_practice',true); ?></td>
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
