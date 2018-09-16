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

				$competence_psy_4 = get_the_ID();
				$student = get_post_meta($competence_psy_4, 'student', true);
				$student_id = get_post_meta($student, 'name_student', true);
				$competence_eng_4 = get_post_meta($student, 'competence_eng_4', true);
				
				$b_1_inf = get_post_meta($competence_psy_4, 'b_1_inf', true);
				$b_1_eng = get_post_meta($competence_psy_4, 'b_1_eng', true);
				$b_1_ped = get_post_meta($competence_psy_4, 'b_1_ped', true);
				$b_1_psy = get_post_meta($competence_psy_4, 'b_1_psy', true);
				$b_1_shgizt = get_post_meta($competence_psy_4, 'b_1_shgizt', true);
				
				$b_2_inf = get_post_meta($competence_psy_4, 'b_2_inf', true);
				$b_2_eng = get_post_meta($competence_psy_4, 'b_2_eng', true);
				$b_2_ped = get_post_meta($competence_psy_4, 'b_2_ped', true);
				$b_2_psy = get_post_meta($competence_psy_4, 'b_2_psy', true);
				$b_2_shgizt = get_post_meta($competence_psy_4, 'b_2_shgizt', true);
				
				$b_3_inf = get_post_meta($competence_psy_4, 'b_3_inf', true);
				$b_3_eng = get_post_meta($competence_psy_4, 'b_3_eng', true);
				$b_3_ped = get_post_meta($competence_psy_4, 'b_3_ped', true);
				$b_3_psy = get_post_meta($competence_psy_4, 'b_3_psy', true);
				$b_3_shgizt = get_post_meta($competence_psy_4, 'b_3_shgizt', true);
				
				$b_4_inf = get_post_meta($competence_psy_4, 'b_4_inf', true);
				$b_4_eng = get_post_meta($competence_psy_4, 'b_4_eng', true);
				$b_4_ped = get_post_meta($competence_psy_4, 'b_4_ped', true);
				$b_4_psy = get_post_meta($competence_psy_4, 'b_4_psy', true);
				$b_4_shgizt = get_post_meta($competence_psy_4, 'b_4_shgizt', true);
				
				$b_5_inf = get_post_meta($competence_psy_4, 'b_5_inf', true);
				$b_5_eng = get_post_meta($competence_psy_4, 'b_5_eng', true);
				$b_5_ped = get_post_meta($competence_psy_4, 'b_5_ped', true);
				$b_5_psy = get_post_meta($competence_psy_4, 'b_5_psy', true);
				$b_5_shgizt = get_post_meta($competence_psy_4, 'b_5_shgizt', true);
				
				$itog_1 = ($b_1_inf + $b_1_eng + $b_1_ped + $b_1_psy + $b_1_shgizt)/5*0.04;
				$itog_2 = ($b_2_inf + $b_2_eng + $b_2_ped + $b_2_psy + $b_2_shgizt)/5*0.04;
				$itog_3 = ($b_3_inf + $b_3_eng + $b_3_ped + $b_3_psy + $b_3_shgizt)/5*0.03;
				$itog_4 = ($b_4_inf + $b_4_eng + $b_4_ped + $b_4_psy + $b_4_shgizt)/5*0.03;
				$itog_5 = ($b_5_inf + $b_5_eng + $b_5_ped + $b_5_psy + $b_5_shgizt)/5*0.02;
				$itog_sum = $itog_1 + $itog_2 + $itog_3 + $itog_4 + $itog_5;
				
				$Kint = get_post_meta($competence_eng_4, 'Kint', true);
				
				$K = $Kint + $itog_sum;
				update_post_meta($competence_psy_4, 'K', $K);
				
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
                    <h2 align="center"><b>Оценка состояния трудовой дисциплины студента-практиканта</h2><br>
					<form method="post">
						<table>
							<tr>
								<td rowspan="2">№ блока</td>
								<td rowspan="2">Показатель</td>
								<td rowspan="2"><b>k</b></td>
								<td colspan="5"><b>Штрафной балл, b <br>(от -1 до 0)</b></td>
								<td rowspan="2"><b>Итого</b></td>
							</tr>
							<tr>
								<td><img src="http://fmpractica.cspu.ru/wordpressyo/wp-content/uploads/images/1.png" width="30" height="30"></td>
								<td><img src="http://fmpractica.cspu.ru/wordpressyo/wp-content/uploads/images/2.png" width="30" height="30"></td>
								<td><img src="http://fmpractica.cspu.ru/wordpressyo/wp-content/uploads/images/3.png" width="30" height="30"></td>
								<td><img src="http://fmpractica.cspu.ru/wordpressyo/wp-content/uploads/images/4.png" width="30" height="30"></td>
								<td><img src="http://fmpractica.cspu.ru/wordpressyo/wp-content/uploads/images/5.png" width="30" height="30"></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Соблюдение установленного режима работы (6-часовой рабочий день)</td>
								<td>0,04</td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_1_inf; ?>" name="b_1_inf"/></td>								
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_1_eng; ?>" name="b_1_eng"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_1_ped; ?>" name="b_1_ped"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_1_psy; ?>" name="b_1_psy"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_1_shgizt; ?>" name="b_1_shgizt"/></td>
								<td><?php echo  round($itog_1,2); ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Посещение занятий учителя (не менее 5) и коллек-студентов (не менее 6)</td>
								<td>0,04</td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_2_inf; ?>" name="b_2_inf"/></td>								
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_2_eng; ?>" name="b_2_eng"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_2_ped; ?>" name="b_2_ped"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_2_psy; ?>" name="b_2_psy"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_2_shgizt; ?>" name="b_2_shgizt"/></td>
								<td><?php echo  round($itog_2,2); ?></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Своевременное представление на проверку конспекта проводимого занятия учителю и групповому руководителю</td>
								<td>0,03</td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_3_inf; ?>" name="b_3_inf"/>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_3_eng; ?>" name="b_3_eng"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_3_ped; ?>" name="b_3_ped"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_3_psy; ?>" name="b_3_psy"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_3_shgizt; ?>" name="b_3_shgizt"/></td>
								<td><?php echo  round($itog_3,2); ?></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Регулярное планирование текущей работы. Своевременное оповещение о планируемых занятиях</td>
								<td>0,03</td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_4_inf; ?>" name="b_4_inf"/>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_4_eng; ?>" name="b_4_eng"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_4_ped; ?>" name="b_4_ped"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_4_psy; ?>" name="b_4_psy"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_4_shgizt; ?>" name="b_4_shgizt"/></td>
								<td><?php echo  round($itog_4,2); ?></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Своевременное представление отчетной документации</td>
								<td>0,02</td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_5_inf; ?>" name="b_5_inf"/>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_5_eng; ?>" name="b_5_eng"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_5_ped; ?>" name="b_5_ped"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_5_psy; ?>" name="b_5_psy"/></td>
								<td><input type="number" min="-1" max="0" step="0.1" size = "1" value ="<?php echo $b_5_shgizt; ?>" name="b_5_shgizt"/></td>
								<td><?php echo round($itog_5,2); ?></td>
							</tr>
							<tr>
								<td>&nbsp</td>
								<td align="right">ИТОГО</td>
								<td>0,16</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><?php echo round($itog_sum,2); ?></td>
							</tr>
						</table>
						<input type="submit" name="save" value="Расчитать"/>
					</form>
					<br>
					<p align="center">Интегральный коэффициент сформированности компетенций С УЧЕТОМ штрафных баллов<br>К<sub>инт</sub> + b<sub>итог</sub> = <b><?php echo round($K,2) ?></b></p>
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
	if (in_array('administrator', $user_role) or in_array('manager', $user_role) or in_array('univer_manager', $user_role) or in_array('_', $user_role) or $corrent_id != $student_id)
	{
		update_post_meta($competence_psy_4, 'b_1_inf', $_POST["b_1_inf"]);
		update_post_meta($competence_psy_4, 'b_1_eng', $_POST["b_1_eng"]);
		update_post_meta($competence_psy_4, 'b_1_ped', $_POST["b_1_ped"]);
		update_post_meta($competence_psy_4, 'b_1_psy', $_POST["b_1_psy"]);
		update_post_meta($competence_psy_4, 'b_1_shgizt', $_POST["b_1_shgizt"]);
		
		update_post_meta($competence_psy_4, 'b_2_inf', $_POST["b_2_inf"]);
		update_post_meta($competence_psy_4, 'b_2_eng', $_POST["b_2_eng"]);
		update_post_meta($competence_psy_4, 'b_2_ped', $_POST["b_2_ped"]);
		update_post_meta($competence_psy_4, 'b_2_psy', $_POST["b_2_psy"]);
		update_post_meta($competence_psy_4, 'b_2_shgizt', $_POST["b_2_shgizt"]);
		
		update_post_meta($competence_psy_4, 'b_3_inf', $_POST["b_3_inf"]);
		update_post_meta($competence_psy_4, 'b_3_eng', $_POST["b_3_eng"]);
		update_post_meta($competence_psy_4, 'b_3_ped', $_POST["b_3_ped"]);
		update_post_meta($competence_psy_4, 'b_3_psy', $_POST["b_3_psy"]);
		update_post_meta($competence_psy_4, 'b_3_shgizt', $_POST["b_3_shgizt"]);
		
		update_post_meta($competence_psy_4, 'b_4_inf', $_POST["b_4_inf"]);
		update_post_meta($competence_psy_4, 'b_4_eng', $_POST["b_4_eng"]);
		update_post_meta($competence_psy_4, 'b_4_ped', $_POST["b_4_ped"]);
		update_post_meta($competence_psy_4, 'b_4_psy', $_POST["b_4_psy"]);
		update_post_meta($competence_psy_4, 'b_4_shgizt', $_POST["b_4_shgizt"]);
		
		update_post_meta($competence_psy_4, 'b_5_inf', $_POST["b_5_inf"]);
		update_post_meta($competence_psy_4, 'b_5_eng', $_POST["b_5_eng"]);
		update_post_meta($competence_psy_4, 'b_5_ped', $_POST["b_5_ped"]);
		update_post_meta($competence_psy_4, 'b_5_psy', $_POST["b_5_psy"]);
		update_post_meta($competence_psy_4, 'b_5_shgizt', $_POST["b_5_shgizt"]);

		echo "<script>window.location.href = window.location.href;</script>";
	}
	else
	{
		echo "<script>alert(\"У вас нет прав для редактирования этой записи\");</script>";
	}
}