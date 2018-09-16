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
				$competence_inf = get_post_meta($students, 'competence_inf_5', true);
				$competence_eng = get_post_meta($students, 'competence_eng_5', true);
				$competence_econ = get_post_meta($students, 'competence_econ_5', true);
				$competence_ped = get_post_meta($students, 'competence_ped_5', true);
				$competence_psy = get_post_meta($students, 'competence_psy_5', true);
				$questionary = get_post_meta($students, 'questionary', true);
				
				$info = get_userdata(get_post_meta( $students, 'name_student', true ));
				$title = $info->last_name . " " . $info->first_name;
				
				$new_competence_inf = array(
					'post_title'    => $title,
					'post_type' => 'competence_inf_5',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_eng = array(
					'post_title'    => $title,
					'post_type' => 'competence_eng_5',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_econ = array(
					'post_title'    => $title,
					'post_type' => 'competence_econ_5',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_ped = array(
					'post_title'    => $title,
					'post_type' => 'competence_ped_5',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_competence_psy = array(
					'post_title'    => $title,
					'post_type' => 'competence_psy_5',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				$new_questionary = array(
					'post_title'    => $title,
					'post_type' => 'questionary',
					'post_content'  => ' ',
					'post_status'   => 'publish',
					'post_category' => array( 8,39 )
				);
				?>
				<div class="entry-content">
				<?php if(empty($user_role)){
                    get_header('Location:http://fmpractica.cspu.ru/');
                    echo 'У Вас нет прав для просмотра этой страницы. Пожалуйста, войдите на сайт.';
                    exit;}
					?>
                    <table border="0">
						<tr>
							<td><span style="color: #008000;"><b>Студент</b></span></td>
							<td><?php echo $title ?></td>
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
							<td><span style="color: #008000;"><b>Результаты практики</b></span></td>
							<td><a href="<?php if(empty($competence_inf)){$link_new_inf = wp_insert_post($new_competence_inf);update_post_meta($students, 'competence_inf_5', $link_new_inf); update_post_meta($link_new_inf, 'student', $students); the_permalink($link_new_inf);}else{the_permalink($competence_inf);}?>">
									<?php echo Перейти ?></a> </td>
						</tr>
						<?php if (get_post_meta( $group_student, 'group_direction', true ) == "Информатика. Английский язык")
						{
														
						 if(empty($competence_eng)){$link_new_eng = wp_insert_post($new_competence_eng);update_post_meta($students, 'competence_eng_5', $link_new_eng); update_post_meta($link_new_eng, 'student', $students); }
						
						}
						else { 							
								
							if(empty($competence_econ)){$link_new_econ = wp_insert_post($new_competence_econ);update_post_meta($students, 'competence_econ_5', $link_new_econ); update_post_meta($link_new_econ, 'student', $students); }
								
							}
						if(empty($competence_ped)){$link_new_ped = wp_insert_post($new_competence_ped,true);update_post_meta($students, 'competence_ped_5', $link_new_ped); update_post_meta($link_new_ped, 'student', $students); }
						if(empty($competence_psy)){$link_new_psy = wp_insert_post($new_competence_psy,true);update_post_meta($students, 'competence_psy_5', $link_new_psy); update_post_meta($link_new_psy, 'student', $students); }
						if(empty($questionary)){$link_new_questionary = wp_insert_post($new_questionary,true);update_post_meta($students, 'questionary', $link_new_questionary); update_post_meta($link_new_questionary, 'student', $students); }
						}?>
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

