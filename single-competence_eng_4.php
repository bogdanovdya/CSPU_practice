<?php
/**
 * The Template for displaying competence_eng single posts
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

				$K1 = (($PK_2_inf + $PK_2_eng + $PK_2_psy)/3 + $PK_3_ped + ($PK_4_inf + $PK_4_shgizt)/2 + $PK_7_ped + ($OPK_2_psy + $OPK_2_shgizt)/2 + ($OPK_3_inf + $OPK_3_psy)/2 + $OPK_5_ped)/7;
				
				$exm1 = get_post_meta( $competence_eng_4, 'exm1', true );
				$exm2 = get_post_meta( $competence_eng_4, 'exm2', true );
				$exm3 = get_post_meta( $competence_eng_4, 'exm3', true );
				$exm4 = get_post_meta( $competence_eng_4, 'exm4', true );
				$exm5 = get_post_meta( $competence_eng_4, 'exm5', true );
				$K2 = ($exm1 + $exm2 + $exm3 + $exm4 + $exm5)/5;
				$Kint = 0.64*$K1 + 0.36*$K2;
				update_post_meta($competence_eng_4, 'Kint', $Kint);
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
                    <h2 align="center">Промежуточная аттестация: результаты сформированности профессиональных компетенций</h2>
					<p align="center"><b>Промежуточная аттестация. Этап 1 (результаты текущего контроля)</b><br>
					</p>
					<table>
						<tr>
							<td rowspan="2">№ блока</td>
							<td colspan="7" align="center">Компетенции</td>
							<td rowspan="2">Оценка группового руководителя</td>			
						</tr>
						<tr>
							<td>ПК-2</td>
							<td>ПК-3</td>
							<td>ПК-4</td>
							<td>ПК-7</td>
							<td>ОПК-2</td>
							<td>ОПК-3</td>
							<td>ОПК-5</td>
						</tr>
						<tr>
							<td>1</td>
							<td><?php echo round($PK_2_inf,2); ?></td>
							<td>&nbsp</td>
							<td><?php echo round($PK_4_inf,2); ?></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><?php echo round($OPK_3_inf,2); ?></td>
							<td>&nbsp</td>
							<td><?php echo round(($PK_2_inf + $PK_4_inf + $OPK_3_inf)/3,2); ?></td>
						</tr>
						<tr>
							<td>2</td>
							<td><?php echo round($PK_2_eng,2); ?></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><?php echo round($PK_2_eng,2); ?></td>
						</tr>
						<tr>
							<td>3</td>
							<td>&nbsp</td>
							<td><?php echo round($PK_3_ped,2); ?></td>
							<td>&nbsp</td>
							<td><?php echo round($PK_7_ped,2); ?></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><?php echo round($OPK_5_ped,2); ?></td>
							<td><?php echo round(($PK_3_ped + $PK_7_ped + $OPK_5_ped)/3,2); ?></td>
						</tr>
						<tr>
							<td>4</td>
							<td><?php echo round($PK_2_psy,2); ?></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><?php echo round($OPK_2_psy,2); ?></td>
							<td><?php echo round($OPK_3_psy,2); ?></td>
							<td>&nbsp</td>
							<td><?php echo round(($PK_2_psy + $OPK_2_psy + $OPK_3_psy)/3,2); ?></td>
						</tr>
						<tr>
							<td>5</td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><?php echo round($PK_4_shgizt,2); ?></td>
							<td>&nbsp</td>
							<td><?php echo round($OPK_2_shgizt,2); ?></td>
							<td>&nbsp</td>
							<td>&nbsp</td>
							<td><?php echo round(($PK_4_shgizt + $OPK_2_shgizt)/2,2); ?></td>
						</tr>
						<tr>
							<td>Ср.балл</td>
							<td><?php echo round(($PK_2_inf + $PK_2_eng + $PK_2_psy)/3,2); ?></td>
							<td><?php echo round($PK_3_ped,2); ?></td>
							<td><?php echo round(($PK_4_inf + $PK_4_shgizt)/2,2); ?></td>
							<td><?php echo round($PK_7_ped,2); ?></td>
							<td><?php echo round(($OPK_2_psy + $OPK_2_shgizt)/2,2); ?></td>
							<td><?php echo round(($OPK_3_inf + $OPK_3_psy)/2,2); ?></td>
							<td><?php echo round($OPK_5_ped,2); ?></td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>&nbsp</td>
							<td colspan="7"><b>Коэффициент полноты сформированности компетенций (Этап 1), К<sub>1</sub></b></td>
							<td><b><?php echo round($K1, 2) ?></b></td>
						</tr>
					</table>
					<p align="center"><b>Промежуточная аттестация. Этап 2 (комплексная контрольная работа)</b><br>
					</p>
					<form method="post">
						<table>
							<tr>
								<td>№ блока</td>
								<td>Компетенции</td>
								<td>Максимальный балл</td>
								<td>Оценка за выполнение контрольного задания по блоку</td>			
							</tr>
							<tr>
								<td>1</td>
								<td>ПК-4</td>
								<td>1</td>
								<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo $exm1; ?>" name="exm1"/></td>
							</tr>
							<tr>
								<td>2</td>
								<td>ПК-2</td>
								<td>1</td>
								<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo $exm2; ?>" name="exm2"/></td>
							</tr>
							<tr>
								<td>3</td>
								<td>ПК-7</td>
								<td>1</td>
								<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo $exm3; ?>" name="exm3"/></td>
							</tr>
							<tr>
								<td>4</td>
								<td>ОПК-3</td>
								<td>1</td>
								<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo $exm4; ?>" name="exm4"/></td>
							</tr>
							<tr>
								<td>5</td>
								<td>ОПК-2</td>
								<td>1</td>
								<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo $exm5; ?>" name="exm5"/></td>
							</tr>
							<tr>
								<td colspan="3"><b>Коэффициент полноты сформированности компетенций (Этап 2), К<sub>2</sub></b></td>
								<td><b><?php echo round($K2,2) ?></b></td>
							</tr>
						</table>					
						<input type="submit" name="save" value="Сохранить"/>
					</form>
					<p align="center"><b>Интегральный коэффициент сформированности компетенций</b><br>К<sub>инт</sub> = 0,64 * К<sub>1</sub> + 0,36 * К<sub>2</sub> = <b><?php echo round($Kint,2) ?></b></p>
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
		update_post_meta($competence_eng_4, 'exm1', $_POST["exm1"]);
		update_post_meta($competence_eng_4, 'exm2', $_POST["exm2"]);
		update_post_meta($competence_eng_4, 'exm3', $_POST["exm3"]);
		update_post_meta($competence_eng_4, 'exm4', $_POST["exm4"]);
		update_post_meta($competence_eng_4, 'exm5', $_POST["exm5"]);		

		echo "<script>window.location.href = window.location.href;</script>";
	}
	else
	{
		echo "<script>alert(\"У вас нет прав для редактирования этой записи\");</script>";
	}
}
