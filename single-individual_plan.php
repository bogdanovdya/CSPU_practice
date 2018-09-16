<?php
/**
 * The Template for displaying individual_plan single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>

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

				$individual_plan = get_the_ID();
				$student = get_post_meta($individual_plan, 'student', true);
				$student_id = get_post_meta($student, 'name_student', true);
				?>
				<div class="entry-content">
				<?php
				$current_user = wp_get_current_user();
				$corrent_id = $current_user->ID;
				$user_info = get_userdata($corrent_id);
				$user_role = $user_info->roles;
				if(empty($user_role) or in_array('need-confirm', $user_role))
				{
					echo 'У Вас нет прав для просмотра этой страницы. Пожалуйста, авторизуйтесь или дождитесь подтверждения регистрации.';
					?>
					</div>
					</div><!-- #content -->
					</div><!-- #primary -->
					<?php
					get_sidebar( 'content' );
					get_sidebar();
					get_footer();
					exit;
				}
				if(in_array('student', $user_role) or in_array('student_5', $user_role))
				{
					if($corrent_id != $student_id)
					{
						echo 'У Вас нет прав для просмотра результатов других студентов.';
						?>
						</div>
						</div><!-- #content -->
						</div><!-- #primary -->
						<?php
						get_sidebar( 'content' );
						get_sidebar();
						get_footer();
						exit;
					}
				}
				?>
					<table>
						<thead>
							<tr>
								<th colspan="3"><a href="<?php the_permalink($student) ?>"><?php $info = get_userdata(get_post_meta( $student, 'name_student', true )); echo($info->last_name . " " . $info->first_name);  ?></a></th>
							</tr>
							<tr>
								<td width="100"><b>Дата</b></td>
								<td><b>Содеражние</b></td>
								<td width="50"><b>Отметка о выполнении</b></td>
							</tr>
						</thead>
					<?php
					if( have_rows('day_plan') ):
						?>
							<?php while( have_rows('day_plan') ): the_row(); ?>
							<tr>
								<td><?php the_sub_field('date'); ?></td>
								<td><?php the_sub_field('content'); ?></td>
								<td><?php the_sub_field('check'); ?></td>
							</tr>
							<?php endwhile; ?>
					<?php endif; ?>
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
