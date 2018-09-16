<?php
/**
 * The Template for displaying sconcept_prepract4 single posts
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
				$sconcept_prepractice = get_the_ID();
				$student = get_post_meta($sconcept_prepractice, 'student', true);
				$student_id = get_post_meta($student, 'name_student', true);
				$info = get_userdata($student_id);
				$title = $info->last_name . " " . $info->first_name;
				
				$PK_2_scpre = (get_post_meta( $sconcept_prepractice, 'PK-2_1', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_2', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_3', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_4', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_5', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_6', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_7', true ))/35;
				update_post_meta($sconcept_prepractice, 'PK_2_scpre', $PK_2_scpre);
				$PK_3_scpre = (get_post_meta( $sconcept_prepractice, 'PK-3_1', true ) + get_post_meta( $sconcept_prepractice, 'PK-3_2', true ) + get_post_meta( $sconcept_prepractice, 'PK-3_3', true ))/15;
				update_post_meta($sconcept_prepractice, 'PK_3_scpre', $PK_3_scpre);
				$PK_4_scpre = (get_post_meta( $sconcept_prepractice, 'PK-4_1', true ) + get_post_meta( $sconcept_prepractice, 'PK-4_2', true ) + get_post_meta( $sconcept_prepractice, 'PK-4_3', true ) + get_post_meta( $sconcept_prepractice, 'PK-4_4', true ))/20;
				update_post_meta($sconcept_prepractice, 'PK_4_scpre', $PK_4_scpre);
				$OPK_2_scpre = (get_post_meta( $sconcept_prepractice, 'OPK-2_1', true ) + get_post_meta( $sconcept_prepractice, 'OPK-2_2', true ) + get_post_meta( $sconcept_prepractice, 'OPK-2_3', true ) + get_post_meta( $sconcept_prepractice, 'OPK-2_4', true ))/20;
				update_post_meta($sconcept_prepractice, 'OPK_2_scpre', $OPK_2_scpre);
				
				$sconcept_prepractice_itog = ((get_post_meta( $sconcept_prepractice, 'OPK-2_1', true ) + get_post_meta( $sconcept_prepractice, 'OPK-2_2', true ) + get_post_meta( $sconcept_prepractice, 'OPK-2_3', true ) + get_post_meta( $sconcept_prepractice, 'OPK-2_4', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_1', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_2', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_3', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_4', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_5', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_6', true ) + get_post_meta( $sconcept_prepractice, 'PK-2_7', true ) + get_post_meta( $sconcept_prepractice, 'PK-3_1', true ) + get_post_meta( $sconcept_prepractice, 'PK-3_2', true ) + get_post_meta( $sconcept_prepractice, 'PK-3_3', true ) + get_post_meta( $sconcept_prepractice, 'PK-4_1', true ) + get_post_meta( $sconcept_prepractice, 'PK-4_2', true ) + get_post_meta( $sconcept_prepractice, 'PK-4_3', true ) + get_post_meta( $sconcept_prepractice, 'PK-4_4', true )))/90;
				add_post_meta($sconcept_prepractice, 'sconcept_prepractice_itog', $sconcept_prepractice_itog, true);
				update_post_meta($sconcept_prepractice, 'sconcept_prepractice_itog', $sconcept_prepractice_itog);
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
				<h3 align="center">Самооценка студентом его готовности к выполнению профессиональной деятельности по освоению компетенций на практике</h3>
				<p align="center">Оценка показателей: 0 – показатель не выражен; 5 – показатель ярко выражен.</p>
				<form method="post">
					<table>
							<thead>
							<tr>
								<th colspan="2"><a href="<?php the_permalink($student) ?>"><?php echo $title ?></a></th>
							</tr>
							<tr>
								<th>Компетенция/показатели(ЗУВ)</th>
								<th>Оценка в баллах (от 0 до 5)</th>
							</tr>
							</thead>
							<tr>
								<td colspan="2"><b>ОПК-2. Способность осуществлять обучение, воспитание и развитие с учетом социальных, возвратных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся</b></td>
							</tr>
							<tr>

								<td>Уметь организовывать развитие познавательных психических процессов обучающихся во время урока на основе индивидуального подхода к личности ученика</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'OPK-2_1', true ); ?>" name="OPK-2_1"/></td>
							</tr>
							<tr>
								<td>Владеть методами проблемного, развивающего и интерактивного обучения личности</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'OPK-2_2', true ); ?>" name="OPK-2_2"/></td>
							</tr>
							<tr>
								<td>Уметь выбирать технологию, исходя из задач, содержания здоровьесбережения и особенностей подрастающего человека</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'OPK-2_3', true ); ?>" name="OPK-2_3"/></td>
							</tr>
							<tr>
								<td>Владеть приемами организации здоровьесберегающей деятельности при использовании различных современных технологий и методик здоровьесбережения</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'OPK-2_4', true ); ?>" name="OPK-2_4"/></td>
							</tr>
							<tr>
								<td colspan="2"><b>ПК-2. Способность использовать современные методы и технологии обучения и диагностики</b></td>
							</tr>
							<tr>
								<td>Уметь ставить цели обучения и в соответствии с ними отбирать языковой и речевой материал на зазнятия</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-2_1', true ); ?>" name="PK-2_1"/></td>
							</tr>
							<tr>
								<td>Грамотно выстраивать структуру урока</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-2_2', true ); ?>" name="PK-2_2"/></td>
							</tr>
							<tr>
								<td>Давать грамотные установки для работы с материалами урока</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-2_3', true ); ?>" name="PK-2_3"/></td>
							</tr>
							<tr>
								<td>Планировать и применять технологии, целесообразные для данного урока</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-2_4', true ); ?>" name="PK-2_4"/></td>
							</tr>
							<tr>
								<td>Оценивать работу учащихся в процессе использования современных методов и технологий</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-2_5', true ); ?>" name="PK-2_5"/></td>
							</tr>
							<tr>
								<td>Оформлять конспект и технологическую карту урока</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-2_6', true ); ?>" name="PK-2_6"/></td>
							</tr>
							<tr>
								<td>Анализировать собственную деятельность на уроке</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-2_7', true ); ?>" name="PK-2_7"/></td>
							</tr>
							<tr>
								<td colspan="2"><b>ПК-3. Способность решать задачи воспитания и духовно-нравственного развития обучающихся в учебной и внеучебной деятельности</b></td>
							</tr>
							<tr>
								<td>Уметь формулировать задачи воспитания и духовно-нравственного развития в учебной и внеучебной деятельности</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-3_1', true ); ?>" name="PK-3_1"/></td>
							</tr>
							<tr>
								<td>Уметь планировать содержание программы воспитания и духовно-нравственного развития</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-3_2', true ); ?>" name="PK-3_2"/></td>
							</tr>
							<tr>
								<td>Владеть методологией и технологией развития личности</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-3_3', true ); ?>" name="PK-3_3"/></td>
							</tr>
							<tr>
								<td colspan="2"><b>ПК-4. Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов </b></td>
							</tr>
							<tr>
								<td>Уметь применять приемы, методы, обеспечивающие личностных, метапредметных и предметных результатов обучения на уроке</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-4_1', true ); ?>" name="PK-4_1"/></td>
							</tr>
							<tr>
								<td>Владеть приемами организации деятельности обучающихся на уроке</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-4_2', true ); ?>" name="PK-4_2"/></td>
							</tr>
							<tr>
								<td>Уметь применять приемы, методы, обеспечивающие личностных, метапредметных и предметных результатов обучения, в процессе внеклассной работы</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-4_3', true ); ?>" name="PK-4_3"/></td>
							</tr>
							<tr>
								<td>Владеть приемами организационно-управленческой деятельности учителя обеспечения качества учебно-воспитательного процесса</td>
								<td><input type="number" min="0" max="5" size = "1" value ="<?php echo get_post_meta( $sconcept_prepractice, 'PK-4_4', true ); ?>" name="PK-4_4"/></td>
							</tr>

						</table>

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
	if (in_array('administrator', $user_role) or in_array('manager', $user_role) or in_array('univer_manager', $user_role) or in_array('_', $user_role) or $corrent_id != $student_id)
	{
		update_post_meta($sconcept_prepractice, 'OPK-2_1', $_POST["OPK-2_1"]);
		update_post_meta($sconcept_prepractice, 'OPK-2_2', $_POST["OPK-2_2"]);
		update_post_meta($sconcept_prepractice, 'OPK-2_3', $_POST["OPK-2_3"]);
		update_post_meta($sconcept_prepractice, 'OPK-2_4', $_POST["OPK-2_4"]);

		update_post_meta($sconcept_prepractice, 'PK-2_1', $_POST["PK-2_1"]);
		update_post_meta($sconcept_prepractice, 'PK-2_2', $_POST["PK-2_2"]);
		update_post_meta($sconcept_prepractice, 'PK-2_3', $_POST["PK-2_3"]);
		update_post_meta($sconcept_prepractice, 'PK-2_4', $_POST["PK-2_4"]);
		update_post_meta($sconcept_prepractice, 'PK-2_5', $_POST["PK-2_5"]);
		update_post_meta($sconcept_prepractice, 'PK-2_6', $_POST["PK-2_6"]);
		update_post_meta($sconcept_prepractice, 'PK-2_7', $_POST["PK-2_7"]);

		update_post_meta($sconcept_prepractice, 'PK-3_1', $_POST["PK-3_1"]);
		update_post_meta($sconcept_prepractice, 'PK-3_2', $_POST["PK-3_2"]);
		update_post_meta($sconcept_prepractice, 'PK-3_3', $_POST["PK-3_3"]);

		update_post_meta($sconcept_prepractice, 'PK-4_1', $_POST["PK-4_1"]);
		update_post_meta($sconcept_prepractice, 'PK-4_2', $_POST["PK-4_2"]);
		update_post_meta($sconcept_prepractice, 'PK-4_3', $_POST["PK-4_3"]);
		update_post_meta($sconcept_prepractice, 'PK-4_4', $_POST["PK-4_4"]);

		echo "<script>window.location.href = window.location.href;</script>";
	}
	else
	{
		echo "<script>alert(\"У вас нет прав для редактирования этой записи\");</script>";
	}
}
