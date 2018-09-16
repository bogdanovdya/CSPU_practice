<?php
/**
 * The Template for displaying competence_inf single posts
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
					
                ?>
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

				$competence_inf_5 = get_the_ID();
				$student = get_post_meta($competence_inf_5, 'student', true);
				$student_id = get_post_meta($student, 'name_student', true);			
				
				$competence_econ_5 = get_post_meta($student, 'competence_econ_5', true);
				$competence_eng_5 = get_post_meta($student, 'competence_eng_5', true);
				if(empty($competence_econ_5 )){$competence_econ_eng = $competence_eng_5;} else{$competence_econ_eng = $competence_econ_5;}
				$competence_ped_5 = get_post_meta($student, 'competence_ped_5', true);
				$competence_psy_5 = get_post_meta($student, 'competence_psy_5', true);
				
				$inf_mark_x1 = get_post_meta( $competence_inf_5, 'PK-1_1_1_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-1_1_2_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-1_1_3_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_1_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_2_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_3_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_1_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_2_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_3_zan1', true );
				$inf_mark_x2 = get_post_meta( $competence_inf_5, 'PK-1_1_1_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-1_1_2_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-1_1_3_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_1_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_2_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_3_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_1_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_2_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_3_zan2', true );
				$inf_mark_x3 = get_post_meta( $competence_inf_5, 'PK-1_1_1_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-1_1_2_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-1_1_3_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_1_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_2_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_2_3_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_1_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_2_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-4_3_3_zan3', true );
				$inf_mark_x4 = get_post_meta( $competence_inf_5, 'PK-5_4_1', true ) + get_post_meta( $competence_inf_5, 'PK-5_4_2', true ) + get_post_meta( $competence_inf_5, 'PK-5_4_3', true );
				update_post_meta($competence_inf_5, 'inf_mark_x1', $inf_mark_x1);
				update_post_meta($competence_inf_5, 'inf_mark_x2', $inf_mark_x2);
				update_post_meta($competence_inf_5, 'inf_mark_x3', $inf_mark_x3);
				update_post_meta($competence_inf_5, 'inf_mark_x4', $inf_mark_x4);
				$K1 = (($inf_mark_x1 / 30 + $inf_mark_x2 / 30 + $inf_mark_x3 / 30 + $inf_mark_x4 / 6)/4);
				update_post_meta($competence_inf_5, 'K1', $K1);
				
				$econ_eng_mark_x1 = get_post_meta( $competence_econ_eng, 'PK-2_2_4_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_5_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_6_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_7_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_8_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_9_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_10_zan1', true );
				$econ_eng_mark_x2 = get_post_meta( $competence_econ_eng, 'PK-2_2_4_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_5_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_6_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_7_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_8_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_9_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_10_zan2', true );
				$econ_eng_mark_x3 = get_post_meta( $competence_econ_eng, 'PK-2_2_4_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_5_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_6_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_7_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_8_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_9_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_10_zan3', true );
				$econ_eng_mark_x4 = get_post_meta( $competence_econ_eng, 'PK-2_2_11', true ) + get_post_meta( $competence_econ_eng, 'PK-2_2_12', true );
				update_post_meta($competence_econ_eng, 'econ_eng_mark_x1', $econ_eng_mark_x1);
				update_post_meta($competence_econ_eng, 'econ_eng_mark_x2', $econ_eng_mark_x2);
				update_post_meta($competence_econ_eng, 'econ_eng_mark_x3', $econ_eng_mark_x3);
				update_post_meta($competence_econ_eng, 'econ_eng_mark_x4', $econ_eng_mark_x4);
				$K2 = (($econ_eng_mark_x1 / 24 + $econ_eng_mark_x2 / 24 + $econ_eng_mark_x3 / 24 + $econ_eng_mark_x4 / 4)/4);
				update_post_meta($competence_inf_5, 'K2', $K2);
				
				$ped_mark_x1 = get_post_meta( $competence_ped_5, 'PK-5_4_4_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-5_4_5_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-5_4_6_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-3_6_1_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-3_6_2_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-3_6_3_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-4_7_1_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-4_7_2_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-4_7_3_zan1' , true);
				$ped_mark_x2 = get_post_meta( $competence_ped_5, 'PK-5_4_4_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-5_4_5_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-5_4_6_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-3_6_1_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-3_6_2_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-3_6_3_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-4_7_1_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-4_7_2_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-4_7_3_zan2' , true);
				update_post_meta($competence_ped_5, 'ped_mark_x1', $ped_mark_x1);
				update_post_meta($competence_ped_5, 'ped_mark_x2', $ped_mark_x2);
				$K3 = (($ped_mark_x1 / 20 + $ped_mark_x2 / 20 )/2);
				update_post_meta($competence_inf_5, 'K3', $K3);
				
				$psy_mark_x1 = get_post_meta( $competence_psy_5, 'PK-2_2_13_zan1' , true) + get_post_meta( $competence_psy_5, 'PK-2_2_14_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-2_5_1_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-2_5_2_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-3_6_1_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-3_6_2_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-3_6_3_zan1' , true);
				$psy_mark_x2 = get_post_meta( $competence_psy_5, 'PK-2_2_13_zan2' , true) + get_post_meta( $competence_psy_5, 'PK-2_2_14_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-2_5_1_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-2_5_2_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-3_6_1_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-3_6_2_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-3_6_3_zan2' , true);
				update_post_meta($competence_psy_5, 'psy_mark_x1', $psy_mark_x1);
				update_post_meta($competence_psy_5, 'psy_mark_x2', $psy_mark_x2);
				$K4 = (($psy_mark_x1 / 16 + $psy_mark_x2 / 16 )/2);
				update_post_meta($competence_inf_5, 'K4', $K4);
				
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
					 <form method="post">
					 <div class="container">
                    <table class="bab">
                        <tr>
							<th colspan="14"><a href="<?php the_permalink($student) ?>"><?php $info = get_userdata(get_post_meta( $student, 'name_student', true )); echo($info->last_name . " " . $info->first_name); ?></a></th>
						</tr>
						<tr>
							<td rowspan="3">Компетенции / показатели (ЗУВ)</td>
							<td rowspan="3">Макс. балл</td>
							<td colspan="12">Рейтинговые баллы</td>
						</tr>
						<tr>
							<td colspan="4">Информатика</td>
							<td colspan="4">Английский язык / Экономика</td>
							<td colspan="2">Педагогика</td>
							<td colspan="2">Психология</td>		
						</tr>
						<tr>			
							<td>Занятие 1.1</td>
							<td>Занятие 1.2</td>
							<td>Занятие 1.3</td>
							<td>Внеур. 1.4</td>
							<td>Занятие 2.1</td>
							<td>Занятие 2.2</td>
							<td>Занятие 2.3</td>
							<td>Внеур. 2.4</td>
							<td>Уч. занятие 3.1</td>
							<td>Восп. меропр. 3.2</td>
							<td>Уч. занятие 4.1</td>
							<td>Сост. характ. 4.2</td>
						</tr>
						<tr>
							<td colspan="14"><b>ПК-1. Готовность реализовывать образовательные программы по предметам в соответствии с требованиями образовательных стандартов</b></td>
						</tr>
						<tr>
							<td>1.1 Уметь проектировать содержание учебного занятия по информатике в соответствии с требованиями образовательных стандартов</td>
							<td>2</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_1_zan1', true ); ?>" name="PK-1_1_1_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_1_zan2', true ); ?>" name="PK-1_1_1_zan2"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_1_zan3', true ); ?>" name="PK-1_1_1_zan3"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_1', true ); ?>" name="PK-1_1_1"/></td>
							<td></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>1.2 Уметь конструировать познавательную деятельность обучаемых на основе УУД</td>
							<td>2</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_2_zan1', true ); ?>" name="PK-1_1_2_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_2_zan2', true ); ?>" name="PK-1_1_2_zan2"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_2_zan3', true ); ?>" name="PK-1_1_2_zan3"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_2', true ); ?>" name="PK-1_1_2"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>1.3 Владеть способами построения учебного процесса в соответствии с системно-деятельностным подходом</td>
							<td>4</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_3_zan1', true ); ?>" name="PK-1_1_3_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_3_zan2', true ); ?>" name="PK-1_1_3_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-1_1_3_zan3', true ); ?>" name="PK-1_1_3_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td colspan="14"><b>ПК-2. Способность использовать современные методы и технологии обучения и диагностики</b></td>
						</tr>
						<tr>
							<td>2.1 Уметь развивать познавательную самостоятельность на основе проблемного обучения; познавательную активность на основе эвристических подходов</td>
							<td>4</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_1_zan1', true ); ?>" name="PK-2_2_1_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_1_zan2', true ); ?>" name="PK-2_2_1_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_1_zan3', true ); ?>" name="PK-2_2_1_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.2 Уметь осуществлять контроль и оценку учебных достижений</td>
							<td>4</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_2_zan1', true ); ?>" name="PK-2_2_2_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_2_zan2', true ); ?>" name="PK-2_2_2_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_2_zan3', true ); ?>" name="PK-2_2_2_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.3 Владеть технологиями обучения информатике, направленными на активизацию познавательной деятельности учащихся</td>
							<td>6</td>
							<td><input type="number" min="0" max="6" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_3_zan1', true ); ?>" name="PK-2_2_3_zan1"/></td>
							<td><input type="number" min="0" max="6" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_3_zan2', true ); ?>" name="PK-2_2_3_zan2"/></td>
							<td><input type="number" min="0" max="6" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_2_3_zan3', true ); ?>" name="PK-2_2_3_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.4 Уметь ставить цели обучения и в соответствии с ними отбирать языковой и речевой материал на занятия / Уметь ставить цели обучения и в соответствии с ними отбирать материал на занятия</td>
							<td>4</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_4_zan1', true ); ?>" name="PK-2_2_4_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_4_zan2', true ); ?>" name="PK-2_2_4_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_4_zan3', true ); ?>" name="PK-2_2_4_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.5 Грамотно выстраивать структуру урока</td>
							<td>4</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_5_zan1', true ); ?>" name="PK-2_2_5_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_5_zan2', true ); ?>" name="PK-2_2_5_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_5_zan3', true ); ?>" name="PK-2_2_5_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.6 Давать грамотные установки для работы с материалом урока</td>
							<td>4</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_6_zan1', true ); ?>" name="PK-2_2_6_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_6_zan2', true ); ?>" name="PK-2_2_6_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_6_zan3', true ); ?>" name="PK-2_2_6_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.7 Планировать и применять технологии, целесообразные для данного урока</td>
							<td>4</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_7_zan1', true ); ?>" name="PK-2_2_7_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_7_zan2', true ); ?>" name="PK-2_2_7_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_7_zan3', true ); ?>" name="PK-2_2_7_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.8 Оценивать работу учащихся в процессе использования современных методов и технологий</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_8_zan1', true ); ?>" name="PK-2_2_8_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_8_zan2', true ); ?>" name="PK-2_2_8_zan2"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_8_zan3', true ); ?>" name="PK-2_2_8_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.9 Оформлять конспект и технологическую карту урока</td>
							<td>4</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_9_zan1', true ); ?>" name="PK-2_2_9_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_9_zan2', true ); ?>" name="PK-2_2_9_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_9_zan3', true ); ?>" name="PK-2_2_9_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.10 Анализировать собственную деятельность на уроке</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_10_zan1', true ); ?>" name="PK-2_2_10_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_10_zan2', true ); ?>" name="PK-2_2_10_zan2"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_10_zan3', true ); ?>" name="PK-2_2_10_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.11 Уметь планировать и применять приемы, методы, обеспечивающие достижение личностных, метапредметных и предметных результатов обучения, в процессе внеклассной работы</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_11', true ); ?>" name="PK-2_2_11"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.12 Оформлять проект / Оформлять разработку внеклассного мероприятия</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_econ_eng, 'PK-2_2_12', true ); ?>" name="PK-2_2_12"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>2.13 Уметь осуществлять контроль и оценку учебных и личностных достижений обучающихся</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'PK-2_2_13_zan1', true ); ?>" name="PK-2_2_13_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'PK-2_2_13_zan2', true ); ?>" name="PK-2_2_13_zan2"/></td>
						</tr>
						<tr>
							<td>2.14 Владеть средствами использования современных методов и технологий обучения и диагностики</td>
							<td>3</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'PK-2_2_14_zan1', true ); ?>" name="PK-2_2_14_zan1"/></td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'PK-2_2_14_zan2', true ); ?>" name="PK-2_2_14_zan2"/></td>
						</tr>
						<tr>
							<td colspan="14"><b>ПК-4. Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов</b></td>
						</tr>
						<tr>
							<td>3.1 Уметь применять приемы, методы, обеспечивающие развитие УУД с учетом специфики образовательной среды</td>
							<td>2</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_1_zan1', true ); ?>" name="PK-4_3_1_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_1_zan2', true ); ?>" name="PK-4_3_1_zan2"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_1_zan3', true ); ?>" name="PK-4_3_1_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>3.2 Уметь корректировать учебный процесс с целью повышения его качества</td>
							<td>2</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_2_zan1', true ); ?>" name="PK-4_3_2_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_2_zan2', true ); ?>" name="PK-4_3_2_zan2"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_2_zan3', true ); ?>" name="PK-4_3_2_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>3.3 Владеть приемами современных педагогических технологий</td>
							<td>4</td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_3_zan1', true ); ?>" name="PK-4_3_3_zan1"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_3_zan2', true ); ?>" name="PK-4_3_3_zan2"/></td>
							<td><input type="number" min="0" max="4" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_3_3_zan3', true ); ?>" name="PK-4_3_3_zan3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td colspan="14"><b>ПК-5. Способность осуществлять педагогическое сопровождение социализации и профессионального самоопределения обучающихся</b></td>
						</tr>
						<tr>
							<td>4.1 Уметь применять приемы, методы, направленные на профессиональное самоопределение учащихся</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-5_4_1', true ); ?>" name="PK-5_4_1"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>4.2 Уметь создавать условия в образовательном процессе для социализации учащихся (закрепления стремления к успеху, преодоления барьеров и т.п.)</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-5_4_2', true ); ?>" name="PK-5_4_2"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>4.3 Владеть технологиями развития личности на предметном материале</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-5_4_3', true ); ?>" name="PK-5_4_3"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>4.4 Знать основные закономерности социализации личности, индикаторы индивидуальных особенностей траекторий жизни</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-5_4_4_zan1', true ); ?>" name="PK-5_4_4_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-5_4_4_zan2', true ); ?>" name="PK-5_4_4_zan2"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>4.5 Уметь определять индикаторы индивидуальных особенностей траекторий жизни</td>
							<td>3</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-5_4_5_zan1', true ); ?>" name="PK-5_4_5_zan1"/></td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-5_4_5_zan2', true ); ?>" name="PK-5_4_5_zan2"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>4.6 Владеть способностью обеспечить сопровождение профессионального самоопределения обучающихся</td>
							<td>3</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-5_4_6_zan1', true ); ?>" name="PK-5_4_6_zan1"/></td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-5_4_6_zan2', true ); ?>" name="PK-5_4_6_zan2"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td colspan="14"><b>ОПК-2. Способность осуществлять обучение, воспитание и развитие с учетом социальных, возрастных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся</b></td>
						</tr>
						<tr>
							<td>5.1 Уметь определять смысл педагогического сопровождения развития обучающихся на основе индивидуального подхода на уроке</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-2_5_1_zan1', true ); ?>" name="OPK-2_5_1_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-2_5_1_zan2', true ); ?>" name="OPK-2_5_1_zan2"/></td>
						</tr>
						<tr>
							<td>5.2 Владеть методологией развития личности</td>
							<td>3</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-2_5_2_zan1', true ); ?>" name="OPK-2_5_2_zan1"/></td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-2_5_2_zan2', true ); ?>" name="OPK-2_5_2_zan2"/></td>
						</tr>
						<tr>
							<td colspan="14"><b>ОПК-3. Готовность к психолого-педагогическому споровождению учебно-воспитательного процесса</b></td>
						</tr>
						<tr>
							<td>6.1 Знать сущность психолого-педагогического сопровождения и поддержки</td>
							<td>1</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="1" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-3_6_1_zan1', true ); ?>" name="ped_OPK-3_6_1_zan1"/></td>
							<td><input type="number" min="0" max="1" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-3_6_1_zan2', true ); ?>" name="ped_OPK-3_6_1_zan2"/></td>
							<td><input type="number" min="0" max="1" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_6_1_zan1', true ); ?>" name="psy_OPK-3_6_1_zan1"/></td>
							<td><input type="number" min="0" max="1" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_6_1_zan2', true ); ?>" name="psy_OPK-3_6_1_zan2"/></td>
						</tr>
						<tr>
							<td>6.2 Понимание важности и необходимости организации психолого-педагогического сопровождения и поддержки</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-3_6_2_zan1', true ); ?>" name="ped_OPK-3_6_2_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-3_6_2_zan2', true ); ?>" name="ped_OPK-3_6_2_zan2"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_6_2_zan1', true ); ?>" name="psy_OPK-3_6_2_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_6_2_zan2', true ); ?>" name="psy_OPK-3_6_2_zan2"/></td>
						</tr>
						<tr>
							<td>6.3 Владение технологиями психолого-педагогического сопровождения и поддержки</td>
							<td>3</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-3_6_3_zan1', true ); ?>" name="ped_OPK-3_6_3_zan1"/></td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-3_6_3_zan2', true ); ?>" name="ped_OPK-3_6_3_zan2"/></td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_6_3_zan1', true ); ?>" name="psy_OPK-3_6_3_zan1"/></td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_6_3_zan2', true ); ?>" name="psy_OPK-3_6_3_zan2"/></td>
						</tr>
						<tr>
							<td colspan="14"><b>ОПК-4. Готовность к профессиональной деятельности в соответствии с нормативно-правовыми документами сферы образования</b></td>
						</tr>
						<tr>
							<td>7.1 Знать нормативно-правовые документы сферы образования. Знать содержание профессиональной педагогической деятельности в соответствии с нормативно-правовыми документами</td>
							<td>1</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="1" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-4_7_1_zan1', true ); ?>" name="OPK-4_7_1_zan1"/></td>
							<td><input type="number" min="0" max="1" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-4_7_1_zan2', true ); ?>" name="OPK-4_7_1_zan2"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>7.2 Уметь анализировать конкретную педагогическую ситуацию, опираясь на фЗ "Об образовании в РФ" и другие документы. Уметь обосновывать содержание решения конкретной ситуации</td>
							<td>2</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-4_7_2_zan1', true ); ?>" name="OPK-4_7_2_zan1"/></td>
							<td><input type="number" min="0" max="2" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-4_7_2_zan2', true ); ?>" name="OPK-4_7_2_zan2"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>7.3 Владеть методологическими основами нормативно-правовых документов</td>
							<td>3</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-4_7_3_zan1', true ); ?>" name="OPK-4_7_3_zan1"/></td>
							<td><input type="number" min="0" max="3" size = "1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-4_7_3_zan2', true ); ?>" name="OPK-4_7_3_zan2"/></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td colspan="2"><b>Итоговый балл (теоретически возможный)</b></td>
							<td class="bab"><?php echo $inf_mark_x1 ?> / 30</td>
							<td class="bab"><?php echo $inf_mark_x2 ?> / 30</td>
							<td class="bab"><?php echo $inf_mark_x3 ?> / 30</td>
							<td class="bab"><?php echo $inf_mark_x4 ?> / 6</td>
							<td class="bab"><?php echo $econ_eng_mark_x1 ?> / 24</td>
							<td class="bab"><?php echo $econ_eng_mark_x2 ?> / 24</td>
							<td class="bab"><?php echo $econ_eng_mark_x3 ?> / 24</td>
							<td class="bab"><?php echo $econ_eng_mark_x4 ?> / 4</td>
							<td class="bab"><?php echo $ped_mark_x1 ?> / 20</td>
							<td class="bab"><?php echo $ped_mark_x2 ?> / 20</td>
							<td class="bab"><?php echo $psy_mark_x1 ?> / 16</td>
							<td class="bab"><?php echo $psy_mark_x2 ?> / 16</td>
						</tr>
						<tr>
							<td colspan="2"><b>Коэффициент полноты сформированности компетенций по результатам текущего контроля</b></td>
							<td colspan="4" class="bab">K1= <?php echo round($K1,2) ?></td>
							<td colspan="4" class="bab">K2= <?php echo round($K2,2) ?></td>
							<td colspan="2" class="bab">K3= <?php echo round($K3,2) ?></td>
							<td colspan="2" class="bab">K4= <?php echo round($K4,2) ?></td>
						</tr>
                    </table>
					</div>
					<input type="submit" name="save" value="Сохранить"/>
					</form>
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
					
							
if (isset($_POST["save"])) 
{
	if (in_array('administrator', $user_role) or in_array('manager', $user_role) or in_array('univer_manager', $user_role) or in_array('_', $user_role))
	{
		update_post_meta($competence_inf_5, 'PK-1_1_1_zan1', $_POST["PK-1_1_1_zan1"]);
		update_post_meta($competence_inf_5, 'PK-1_1_1_zan2', $_POST["PK-1_1_1_zan2"]);
		update_post_meta($competence_inf_5, 'PK-1_1_1_zan3', $_POST["PK-1_1_1_zan3"]);
		update_post_meta($competence_inf_5, 'PK-1_1_1', $_POST["PK-1_1_1"]);

		update_post_meta($competence_inf_5, 'PK-1_1_2_zan1', $_POST["PK-1_1_2_zan1"]);
		update_post_meta($competence_inf_5, 'PK-1_1_2_zan2', $_POST["PK-1_1_2_zan2"]);
		update_post_meta($competence_inf_5, 'PK-1_1_2_zan3', $_POST["PK-1_1_2_zan3"]);
		update_post_meta($competence_inf_5, 'PK-1_1_2', $_POST["PK-1_1_2"]);

		update_post_meta($competence_inf_5, 'PK-1_1_3_zan1', $_POST["PK-1_1_3_zan1"]);
		update_post_meta($competence_inf_5, 'PK-1_1_3_zan2', $_POST["PK-1_1_3_zan2"]);
		update_post_meta($competence_inf_5, 'PK-1_1_3_zan3', $_POST["PK-1_1_3_zan3"]);

		update_post_meta($competence_inf_5, 'PK-2_2_1_zan1', $_POST["PK-2_2_1_zan1"]);
		update_post_meta($competence_inf_5, 'PK-2_2_1_zan2', $_POST["PK-2_2_1_zan2"]);
		update_post_meta($competence_inf_5, 'PK-2_2_1_zan3', $_POST["PK-2_2_1_zan3"]);

		update_post_meta($competence_inf_5, 'PK-2_2_2_zan1', $_POST["PK-2_2_2_zan1"]);
		update_post_meta($competence_inf_5, 'PK-2_2_2_zan2', $_POST["PK-2_2_2_zan2"]);
		update_post_meta($competence_inf_5, 'PK-2_2_2_zan3', $_POST["PK-2_2_2_zan3"]);

		update_post_meta($competence_inf_5, 'PK-2_2_3_zan1', $_POST["PK-2_2_3_zan1"]);
		update_post_meta($competence_inf_5, 'PK-2_2_3_zan2', $_POST["PK-2_2_3_zan2"]);
		update_post_meta($competence_inf_5, 'PK-2_2_3_zan3', $_POST["PK-2_2_3_zan3"]);

		update_post_meta($competence_econ_eng, 'PK-2_2_4_zan1', $_POST["PK-2_2_4_zan1"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_4_zan2', $_POST["PK-2_2_4_zan2"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_4_zan3', $_POST["PK-2_2_4_zan3"]);

		update_post_meta($competence_econ_eng, 'PK-2_2_5_zan1', $_POST["PK-2_2_5_zan1"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_5_zan2', $_POST["PK-2_2_5_zan2"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_5_zan3', $_POST["PK-2_2_5_zan3"]);

		update_post_meta($competence_econ_eng, 'PK-2_2_6_zan1', $_POST["PK-2_2_6_zan1"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_6_zan2', $_POST["PK-2_2_6_zan2"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_6_zan3', $_POST["PK-2_2_6_zan3"]);

		update_post_meta($competence_econ_eng, 'PK-2_2_7_zan1', $_POST["PK-2_2_7_zan1"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_7_zan2', $_POST["PK-2_2_7_zan2"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_7_zan3', $_POST["PK-2_2_7_zan3"]);

		update_post_meta($competence_econ_eng, 'PK-2_2_8_zan1', $_POST["PK-2_2_8_zan1"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_8_zan2', $_POST["PK-2_2_8_zan2"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_8_zan3', $_POST["PK-2_2_8_zan3"]);

		update_post_meta($competence_econ_eng, 'PK-2_2_9_zan1', $_POST["PK-2_2_9_zan1"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_9_zan2', $_POST["PK-2_2_9_zan2"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_9_zan3', $_POST["PK-2_2_9_zan3"]);

		update_post_meta($competence_econ_eng, 'PK-2_2_10_zan1', $_POST["PK-2_2_10_zan1"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_10_zan2', $_POST["PK-2_2_10_zan2"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_10_zan3', $_POST["PK-2_2_10_zan3"]);

		update_post_meta($competence_econ_eng, 'PK-2_2_11', $_POST["PK-2_2_11"]);
		update_post_meta($competence_econ_eng, 'PK-2_2_12', $_POST["PK-2_2_12"]);

		update_post_meta($competence_psy_5, 'PK-2_2_13_zan1', $_POST["PK-2_2_13_zan1"]);
		update_post_meta($competence_psy_5, 'PK-2_2_13_zan2', $_POST["PK-2_2_13_zan2"]);

		update_post_meta($competence_psy_5, 'PK-2_2_14_zan1', $_POST["PK-2_2_14_zan1"]);
		update_post_meta($competence_psy_5, 'PK-2_2_14_zan2', $_POST["PK-2_2_14_zan2"]);

		update_post_meta($competence_inf_5, 'PK-4_3_1_zan1', $_POST["PK-4_3_1_zan1"]);
		update_post_meta($competence_inf_5, 'PK-4_3_1_zan2', $_POST["PK-4_3_1_zan2"]);
		update_post_meta($competence_inf_5, 'PK-4_3_1_zan3', $_POST["PK-4_3_1_zan3"]);

		update_post_meta($competence_inf_5, 'PK-4_3_2_zan1', $_POST["PK-4_3_2_zan1"]);
		update_post_meta($competence_inf_5, 'PK-4_3_2_zan2', $_POST["PK-4_3_2_zan2"]);
		update_post_meta($competence_inf_5, 'PK-4_3_2_zan3', $_POST["PK-4_3_2_zan3"]);

		update_post_meta($competence_inf_5, 'PK-4_3_3_zan1', $_POST["PK-4_3_3_zan1"]);
		update_post_meta($competence_inf_5, 'PK-4_3_3_zan2', $_POST["PK-4_3_3_zan2"]);
		update_post_meta($competence_inf_5, 'PK-4_3_3_zan3', $_POST["PK-4_3_3_zan3"]);

		update_post_meta($competence_inf_5, 'PK-5_4_1', $_POST["PK-5_4_1"]);
		update_post_meta($competence_inf_5, 'PK-5_4_2', $_POST["PK-5_4_2"]);
		update_post_meta($competence_inf_5, 'PK-5_4_3', $_POST["PK-5_4_3"]);

		update_post_meta($competence_ped_5, 'PK-5_4_4_zan1', $_POST["PK-5_4_4_zan1"]);
		update_post_meta($competence_ped_5, 'PK-5_4_4_zan2', $_POST["PK-5_4_4_zan2"]);

		update_post_meta($competence_ped_5, 'PK-5_4_5_zan1', $_POST["PK-5_4_5_zan1"]);
		update_post_meta($competence_ped_5, 'PK-5_4_5_zan2', $_POST["PK-5_4_5_zan2"]);

		update_post_meta($competence_ped_5, 'PK-5_4_6_zan1', $_POST["PK-5_4_6_zan1"]);
		update_post_meta($competence_ped_5, 'PK-5_4_6_zan2', $_POST["PK-5_4_6_zan2"]);

		update_post_meta($competence_psy_5, 'OPK-2_5_1_zan1', $_POST["OPK-2_5_1_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-2_5_1_zan2', $_POST["OPK-2_5_1_zan2"]);

		update_post_meta($competence_psy_5, 'OPK-2_5_2_zan1', $_POST["OPK-2_5_2_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-2_5_2_zan2', $_POST["OPK-2_5_2_zan2"]);

		update_post_meta($competence_ped_5, 'OPK-3_6_1_zan1', $_POST["ped_OPK-3_6_1_zan1"]);
		update_post_meta($competence_ped_5, 'OPK-3_6_1_zan2', $_POST["ped_OPK-3_6_1_zan2"]);
		update_post_meta($competence_psy_5, 'OPK-3_6_1_zan1', $_POST["psy_OPK-3_6_1_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-3_6_1_zan2', $_POST["psy_OPK-3_6_1_zan2"]);

		update_post_meta($competence_ped_5, 'OPK-3_6_2_zan1', $_POST["ped_OPK-3_6_2_zan1"]);
		update_post_meta($competence_ped_5, 'OPK-3_6_2_zan2', $_POST["ped_OPK-3_6_2_zan2"]);
		update_post_meta($competence_psy_5, 'OPK-3_6_2_zan1', $_POST["psy_OPK-3_6_2_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-3_6_2_zan2', $_POST["psy_OPK-3_6_2_zan2"]);

		update_post_meta($competence_ped_5, 'OPK-3_6_3_zan1', $_POST["ped_OPK-3_6_3_zan1"]);
		update_post_meta($competence_ped_5, 'OPK-3_6_3_zan2', $_POST["ped_OPK-3_6_3_zan2"]);
		update_post_meta($competence_psy_5, 'OPK-3_6_3_zan1', $_POST["psy_OPK-3_6_3_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-3_6_3_zan2', $_POST["psy_OPK-3_6_3_zan2"]);

		update_post_meta($competence_ped_5, 'OPK-4_7_1_zan1', $_POST["OPK-4_7_1_zan1"]);
		update_post_meta($competence_ped_5, 'OPK-4_7_1_zan2', $_POST["OPK-4_7_1_zan2"]);
		update_post_meta($competence_ped_5, 'OPK-4_7_2_zan1', $_POST["OPK-4_7_2_zan1"]);
		update_post_meta($competence_ped_5, 'OPK-4_7_2_zan2', $_POST["OPK-4_7_2_zan2"]);
		update_post_meta($competence_ped_5, 'OPK-4_7_3_zan1', $_POST["OPK-4_7_3_zan1"]);
		update_post_meta($competence_ped_5, 'OPK-4_7_3_zan2', $_POST["OPK-4_7_3_zan2"]);
		
		echo "<script>window.location.href = window.location.href;</script>";
	}
	else
	{
		echo "<script>alert(\"У вас нет прав для редактирования этой записи\");</script>";
	}
} 

