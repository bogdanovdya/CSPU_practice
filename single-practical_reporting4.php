<?php
/**
 * The Template for displaying practical reporting 4 single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


// wp_register_style() example

get_header();
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a $develop_zan called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				?>

				<?php

				$report = get_the_ID();
				$student = get_field('student');
				$develop_zan = get_field('develop_zan');
				$selfconcept_lesson = get_field('selfconcept_lesson');
				$develop_vnezan = get_field('develop_vnezan');

				?>
				<div class="entry-content">
					<h1><a href="<?php the_permalink($student)?>"> <?php echo get_the_title($student) ?> </a><h1>
						<hr>
						<h4>Разработка учебного занятия по информатике. Дидактические материалы</h4>

							<?php
							// vars
							$url = $develop_zan['url'];
							$title = $develop_zan['title'];
							$caption = $develop_zan['caption'];


							// icon
							$icon = $develop_zan['icon'];

							if( $develop_zan['type'] == 'image' ) {

								$icon =  $develop_zan['sizes']['thumbnail'];

							} ?>


							<div class="wp-caption">
								<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
									<img src="<?php echo $icon; ?>" />
									<span style="margin:20px;"><?php echo $title; ?></span> </a>
								<span>
											<p class="wp-caption-text"><?php echo $caption; ?></p>
										</span>
							</div>
							<hr>

						<h4>Самоанализ урока информатики</h4>

						<?php
							// vars
							$url = $selfconcept_lesson['url'];
							$title = $selfconcept_lesson['title'];
							$caption = $selfconcept_lesson['caption'];


							// icon
							$icon = $selfconcept_lesson['icon'];

							if( $selfconcept_lesson['type'] == 'image' ) {

								$icon =  $selfconcept_lesson['sizes']['thumbnail'];

							} ?>


							<div class="wp-caption">
								<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
									<img src="<?php echo $icon; ?>" />
									<span style="margin:20px;"><?php echo $title; ?></span> </a>
								<span>
											<p class="wp-caption-text"><?php echo $caption; ?></p>
										</span>
							</div>
						<hr>
						<h4>Разработка внеурочного занятия по информатике</h4>

							<?php
							// vars
							$url = $develop_vnezan['url'];
							$title = $develop_vnezan['title'];
							$caption = $develop_vnezan['caption'];


							// icon
							$icon = $develop_vnezan['icon'];

							if( $develop_vnezan['type'] == 'image' ) {

								$icon =  $develop_vnezan['sizes']['thumbnail'];

							} ?>


							<div class="wp-caption">
								<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
									<img src="<?php echo $icon; ?>" />
									<span style="margin:20px;"><?php echo $title; ?></span> </a>
								<span>
											<p class="wp-caption-text"><?php echo $caption; ?></p>
										</span>
							</div>

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
