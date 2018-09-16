<?php
/**
 * The Template for displaying events single posts
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
                    $events = get_the_ID();
                    $student = get_post_meta($events,'event_student',true);
                    ?>
                    <div class="entry-content">
                        <table>
                            <tr>
                                <td>Студент</td>
                                <td><a href="<?php the_permalink($student) ?>"><?php echo get_post_meta($student,'name_student',true); ?></a></td>
                            </tr>
                            <tr>
                                <td>Дата</td>
                                <td><?php echo get_post_meta($events,'event_date',true); ?></td>
                            </tr>
                            <tr>
                                <td>Формулировка</td>
                                <td><?php echo get_post_meta($events,'event_formulation',true); ?></td>
                            </tr>
                            <tr>
                                <td>Вид</td>
                                <td><?php echo get_post_meta($events,'event_sort',true); ?></td>
                            </tr>
                            <tr>
                                <td>Тип</td>
                                <td><?php echo get_post_meta($events,'event_type',true); ?></td>
                            </tr>
                            <tr>
                                <td>Кабинет</td>
                                <td><?php echo get_post_meta($events,'event_cabinet',true); ?></td>
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
