<?php
/**
 * The Template for displaying students single posts
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
				$distribution = get_the_ID();
				?>
				<div class="entry-content">
                    <table  class="tablesorter">
						<thead>
							<tr>
								<th>Студенты</th>
								<th>Место прохождения практики</th>
								<th>Руководители практики от университета</th>
								<th>Руководители практики от базы практики</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if( have_rows('distribution') ):
							?>
							<?php while( have_rows('distribution') ): the_row();
							$student = get_sub_field('student');
							$manager_uner = get_sub_field('manager_uner');
							$school = get_the_title(get_sub_field('school'));
							?>
							<tr>
								<td><?php
										foreach ($student as $value) { ?>
											<a href="<?php the_permalink($value) ?>"><?php echo get_the_title($value) ?></a>
											<br>
										<?php } ?></td>
								<td><a href="<?php the_permalink(get_sub_field('school')) ?>"><?php echo $school; ?></a></td>
								<td><?php
									foreach ($manager_uner as $value) { ?>
										<a href="<?php the_permalink($value) ?>"><?php echo get_the_title($value) ?></a>
										<br>
									<?php } ?></td>
								<td><?php the_sub_field('manger_base'); ?></td>
							</tr>
						<?php endwhile; ?>
						<?php endif; ?>
						</tbody>
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

