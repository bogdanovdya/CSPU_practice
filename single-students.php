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
				$current_user = wp_get_current_user();
                $corrent_id = $current_user->ID;
                $user_info = get_userdata($corrent_id);
                $user_role = $user_info->roles;
				
				
				
				$students = get_the_ID();
				$group_student = get_post_meta($students, 'group_student', true);
				$competence_inf = get_post_meta($students, 'competence_inf', true);
				$competence_eng = get_post_meta($students, 'competence_eng', true);
				$competence_econ = get_post_meta($students, 'competence_econ', true);
				$competence_edu = get_post_meta($students, 'competence_edu', true);
				$competence_psy = get_post_meta($students, 'competence_psy', true);
				$competence_ozd = get_post_meta($students, 'competence_ozd', true);
				$sconcept_prepractice = get_post_meta($students, 'sconcept_prepractice', true);
				$new_competence_inf = array(
					'post_title'    => get_post_meta( $students, 'name_student', true),
					'post_type' => 'competence_inf',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_eng = array(
					'post_title'    => get_post_meta( $students, 'name_student', true),
					'post_type' => 'competence_eng',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_econ = array(
					'post_title'    => get_post_meta( $students, 'name_student', true),
					'post_type' => 'competence_econ',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_edu = array(
					'post_title'    => get_post_meta( $students, 'name_student', true),
					'post_type' => 'competence_edu',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_psy = array(
					'post_title'    => get_post_meta( $students, 'name_student', true),
					'post_type' => 'competence_psy',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_ozd = array(
					'post_title'    => get_post_meta( $students, 'name_student', true),
					'post_type' => 'competence_ozd',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_sconcept_prepractice = array(
					'post_title'    => get_post_meta( $students, 'name_student', true),
					'post_type' => 'sconcept_prepractice',
					'post_content'  => ' ',
					'post_status'   => 'pending',
					'post_category' => array( 8,39 )
				);
				?>
				<div class="entry-content">
                    <table border="0">
						<tr>
							<td><span style="color: #008000;"><b>Студент</b></span></td>
							<td><?php echo get_post_meta( $students, 'name_student', true ); ?></td>
						</tr>
						<tr>
							<td><span style="color: #008000;"><b>Курс</b></span></td>
							<td><?php echo get_post_meta( $group_student, 'group_course', true ); ?></td>
						</tr>
						<tr>
							<td><span style="color: #008000;"><b>Группа</b></span></td>
							<td><?php echo get_post_meta( $group_student, 'group_number', true ); ?></td>
						</tr>
						<tr>
							<td><span style="color: #008000;"><b>Профильная направленность</b></span></td>
							<td><?php echo get_post_meta( $group_student, 'group_direction', true ); ?></td>
						</tr>
						<?php if(empty($user_role)== false){ ?>
						<tr>
							<td><span style="color: #008000;"><b>Практика по информатике</b></span></td>
							<td><a href="<?php if(empty($competence_inf)){$link_new_inf = wp_insert_post($new_competence_inf);update_post_meta($students, 'competence_inf', $link_new_inf); update_post_meta($link_new_inf, 'student', $students); the_permalink($link_new_inf);}else{the_permalink($competence_inf);}?>">
									<?php echo round(get_post_meta( $competence_inf, 'itog_mark_k1', true ),2); ?></a> </td>
						</tr>
						<?php if (get_post_meta( $group_student, 'group_direction', true ) == "Информатика. Английский язык")
						{ ?>
							<tr>
								<td><span style="color: #008000;"><b>Практика по английскому</b></span></td>
								<td><a href="<?php if(empty($competence_eng)){$link_new_eng = wp_insert_post($new_competence_eng);update_post_meta($students, 'competence_eng', $link_new_eng); update_post_meta($link_new_eng, 'student', $students); the_permalink($link_new_eng);}else{the_permalink($competence_eng);}?>">
										<?php echo round(get_post_meta( $competence_eng, 'itog_mark_k2', true ),2); ?></a> </td>
							</tr>
						<?php }
						else { ?>
							<tr>
								<td><span style="color: #008000;"><b>Практика по экономике</b></span></td>
								<td><a href="<?php if(empty($competence_econ)){$link_new_econ = wp_insert_post($new_competence_econ);update_post_meta($students, 'competence_econ', $link_new_econ); update_post_meta($link_new_econ, 'student', $students); the_permalink($link_new_econ);}else{the_permalink($competence_econ);}?>">
										<?php echo round(get_post_meta( $competence_econ, 'itog_mark_k2', true ),2); ?></a> </td>
							</tr>
						<?php } ?>
						<tr>
							<td><span style="color: #008000;"><b>Воспитательная деятельность</b></span></td>
							<td><a href="<?php if(empty($competence_edu)){$link_new_edu = wp_insert_post($new_competence_edu,true);update_post_meta($students, 'competence_edu', $link_new_edu); update_post_meta($link_new_edu, 'student', $students); the_permalink($link_new_edu);}else{the_permalink($competence_edu);}?>">
									<?php echo round(get_post_meta( $competence_edu, 'itog_mark_k3', true ),2); ?></a></td>
						</tr>
						<tr>
							<td><span style="color: #008000;"><b>Психологическая деятельность</b></span></td>
							<td><a href="<?php if(empty($competence_psy)){$link_new_psy = wp_insert_post($new_competence_psy,true);update_post_meta($students, 'competence_psy', $link_new_psy); update_post_meta($link_new_psy, 'student', $students); the_permalink($link_new_psy);}else{the_permalink($competence_psy);}?>">
									<?php echo round(get_post_meta( $competence_psy, 'itog_mark_k4', true ),2); ?></a></td>
						</tr>
						<tr>
							<td><span style="color: #008000;"><b>Оздоровительная деятельность</b></span></td>
							<td><a href="<?php if(empty($competence_ozd)){$link_new_ozd = wp_insert_post($new_competence_ozd,true);update_post_meta($students, 'competence_ozd', $link_new_ozd); update_post_meta($link_new_ozd, 'student', $students); the_permalink($link_new_ozd);}else{the_permalink($competence_ozd);}?>">
									<?php echo round(get_post_meta( $competence_ozd, 'itog_mark_k5', true ),2); ?></a></td>
						</tr>
						<tr>
							<td><span style="color: #008000;"><b>Самооценка студентом его готовности к практике</b></span></td>
							<td><a href="<?php if(empty($sconcept_prepractice)){$link_new_sconcept_prepractice = wp_insert_post($new_sconcept_prepractice,true);update_post_meta($students, 'sconcept_prepractice', $link_new_sconcept_prepractice); update_post_meta($link_new_sconcept_prepractice, 'sconcept_prepractice_student', $students); the_permalink($link_new_sconcept_prepractice);}else{the_permalink($sconcept_prepractice);}?>">
									<?php echo round(get_post_meta( $sconcept_prepractice, 'sconcept_prepractice_itog', true ),2); ?></a></td>
						</tr>
						<?php }?>
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

