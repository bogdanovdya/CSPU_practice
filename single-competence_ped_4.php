<?php
/**
 * The Template for displaying competence_ped single posts
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

				$competence_eng = get_the_ID();
				$student = get_post_meta($competence_eng, 'student', true);
				$student_id = get_post_meta($student, 'name_student', true);				
				$competence_inf_4 = get_post_meta($student, 'competence_inf_4', true);
				$competence_eng_4 = get_post_meta($student, 'competence_eng_4', true);
				$competence_ped_4 = get_post_meta($student, 'competence_ped_4', true);
				$competence_psy_4 = get_post_meta($student, 'competence_psy_4', true);
				$competence_shgizt_4 = get_post_meta($student, 'competence_shgizt_4', true);
				$selfconcept_post4 = get_post_meta($student, 'selfconcept_post', true);
				$questionary4 = get_post_meta($student, 'questionary', true);
				
				$PK_2_inf = get_post_meta($competence_inf_4, 'PK_2_inf', true);
				$PK_4_inf = get_post_meta($competence_inf_4, 'PK_4_inf', true);
				$OPK_3_inf = get_post_meta($competence_inf_4, 'OPK_3_inf', true);
				
				$PK_2_eng = get_post_meta($competence_eng_4, 'PK_2_eng', true);
				
				$PK_3_ped = get_post_meta($competence_ped_4, 'PK_3_ped', true);
				$PK_7_ped = get_post_meta($competence_ped_4, 'PK_7_ped', true);
				$OPK_5_ped = get_post_meta($competence_ped_4, 'OPK_5_ped', true);
				
				$PK_2_psy = get_post_meta($competence_psy_4, 'PK_2_psy', true);
				$OPK_2_psy = get_post_meta($competence_psy_4, 'OPK_2_psy', true);
				$OPK_3_psy = get_post_meta($competence_psy_4, 'OPK_3_psy', true);
				
				$PK_4_shgizt = (get_post_meta( $competence_shgizt_4, 'PK-4_1_1_zan1' , true) + get_post_meta( $competence_shgizt_4, 'PK-4_1_2_zan1' , true) + get_post_meta( $competence_shgizt_4, 'PK-4_1_1_zan2' , true) + get_post_meta( $competence_shgizt_4, 'PK-4_1_2_zan2' , true))/16;
				$OPK_2_shgizt = (get_post_meta( $competence_shgizt_4, 'OPK-2_2_1_zan1' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_2_zan1' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_1_zan2' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_2_zan2' , true))/16;

				$PK_2_scpost = get_post_meta($selfconcept_post4, 'PK_2_scpost', true);
				$PK_3_scpost = get_post_meta($selfconcept_post4, 'PK_3_scpost', true);
				$PK_4_scpost = get_post_meta($selfconcept_post4, 'PK_4_scpost', true);
				$OPK_2_scpost = get_post_meta($selfconcept_post4, 'OPK_2_scpost', true);
				$selfconcept_post_itog = get_post_meta($selfconcept_post4, 'selfconcept_post_itog', true);

				$PK_4_quest = get_post_meta($questionary4, 'U1', true);
				$PK_2_quest = get_post_meta($questionary4, 'U2', true);
				$PK_3_quest = get_post_meta($questionary4, 'U3', true);
				$OPK_2_quest = (get_post_meta($questionary4, 'U4', true) + get_post_meta($questionary4, 'U5', true))/2;
				
				$PK_4_itog = 0.1*$PK_4_scpost + 0.5*$PK_4_quest + 0.4*(($PK_4_inf + $PK_4_shgizt)/2);
				$PK_2_itog = 0.1*$PK_2_scpost + 0.5*$PK_2_quest + 0.4*(($PK_2_inf + $PK_2_eng + $PK_2_psy)/3);
				$PK_3_itog = 0.1*$PK_3_scpost + 0.5*$PK_3_quest + 0.4*$PK_3_ped;
				$OPK_2_itog = 0.1*$OPK_2_scpost + 0.5*$OPK_2_quest + 0.4*(($OPK_2_psy + $OPK_2_shgizt)/2);
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
                    <h2 align="center">Экспертная оценка сформированности профессиональных компетенций</h2>
					<table>
						<tr>
							<td rowspan="2">Компетенции</td>
							<td rowspan="2">Максимальный балл</td>
							<td colspan="4" align="center">Оценка сформированности компетенций</td>
						</tr>
						<tr>
							<td>Студент</td>
							<td>Учитель</td>
							<td>Групповой руководитель</td>
							<td>Итог</td>
						</tr>
						<tr>
							<td>ПК-4</td>
							<td>1</td>
							<td title="k = 0.1"><?php echo round($PK_4_scpost,2); ?></td>
							<td title="k = 0.5"><?php echo round($PK_4_quest,2); ?></td>
							<td title="k = 0.4"><?php echo round(($PK_4_inf + $PK_4_shgizt)/2,2); ?></td>
							<td><?php echo round($PK_4_itog,2); ?></td>
						</tr>
						<tr>
							<td>ПК-2</td>
							<td>1</td>
							<td title="k = 0.1"><?php echo round($PK_2_scpost,2); ?></td>
							<td title="k = 0.5"><?php echo round($PK_2_quest,2); ?></td>
							<td title="k = 0.4"><?php echo round(($PK_2_inf + $PK_2_eng + $PK_2_psy)/3,2); ?></td>
							<td><?php echo round($PK_2_itog,2); ?></td>
						</tr>
						<tr>
							<td>ПК-3</td>
							<td>1</td>
							<td title="k = 0.1"><?php echo round($PK_3_scpost,2); ?></td>
							<td title="k = 0.5"><?php echo round($PK_3_quest,2); ?></td>
							<td title="k = 0.4"><?php echo round($PK_3_ped,2); ?></td>
							<td><?php echo round($PK_3_itog,2); ?></td>
						</tr>
						<tr>
							<td>ОПК-2</td>
							<td>1</td>
							<td title="k = 0.1"><?php echo round($OPK_2_scpost,2); ?></td>
							<td title="k = 0.5"><?php echo round($OPK_2_quest,2); ?></td>
							<td title="k = 0.4"><?php echo round(($OPK_2_psy + $OPK_2_shgizt)/2,2); ?></td>
							<td><?php echo round($OPK_2_itog,2); ?></td>
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

