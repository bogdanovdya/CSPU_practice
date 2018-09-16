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

				$questionary = get_the_ID();
				$student = get_post_meta($questionary, 'student', true);
				$U1 = ((get_post_meta( $questionary, 'PK-4_1', true) + get_post_meta( $questionary, 'PK-4_2', true))/2);
				update_post_meta($questionary, 'U1', $U1);
				$U2 = ((get_post_meta( $questionary, 'PK-2_1', true) + get_post_meta( $questionary, 'PK-2_2', true) + get_post_meta( $questionary, 'PK-2_3', true) + get_post_meta( $questionary, 'PK-2_4', true) + get_post_meta( $questionary, 'PK-2_5', true) + get_post_meta( $questionary, 'PK-2_6', true) + get_post_meta( $questionary, 'PK-2_7', true))/35);
				update_post_meta($questionary, 'U2', $U2);
				$U3 = ((get_post_meta( $questionary, 'PK-3_1', true) + get_post_meta( $questionary, 'PK-3_2', true) + get_post_meta( $questionary, 'PK-3_3', true) + get_post_meta( $questionary, 'PK-3_4', true))/4);
				update_post_meta($questionary, 'U3', $U3);
				$U4 = ((get_post_meta( $questionary, 'OPK-2_1', true) + get_post_meta( $questionary, 'OPK-2_2', true))/2);
				update_post_meta($questionary, 'U4', $U4);
				$U5 = ((get_post_meta( $questionary, 'OPK-2_1_1', true) + get_post_meta( $questionary, 'OPK-2_2_1', true))/2);
				update_post_meta($questionary, 'U5', $U5);
				
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
						<table>
							<thead>
							<tr>
								<th colspan="4"><a href="<?php the_permalink($student) ?>"><?php $info = get_userdata(get_post_meta( $student, 'name_student', true )); echo($info->last_name . " " . $info->first_name);  ?></a> </th>
							</tr>
							</thead>
						</table>
						<body>
							<h2 align="center">Опрос работодателей о подготовке студента-практиканта в качестве учителя, классного руководителя</h2>
							<h3 align="center">1. Оценка предметно-методической деятельности студента-практиканта учителем информатики</h3>
							<p align="center"><b>Оценка сформированности компетенции ПК-4</b><br>
							Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов</b>
							</p>
							<p>
							<i>0 б. – показатель не выражен; 0,5 б. – показатель слабо выражен; 1 б. – показатель ярко выражен.</i>
							</p>
							<table>
								<tr>
									<td colspan="3"> Учитель информатики:&nbsp <input type="text" size = "20" value ="<?php echo get_post_meta( $questionary, 'teacher_inf', true); ?>" name="teacher_inf"/></td>
								</tr>
								<tr>
									<td>Показатель</td>
									<td>Содержание деятельности студента</td>
									<td width="70">Балл <b>(от 0 до 1)</b></td>			
								</tr>
								<tr>
									<td>Уметь применять приемы, методы, обеспечивающие достижение личностных, метапредметных и предметных результатов обучения</td>
									<td><i>- планирует формирование личностных, метапредметных и предметных результатов обучения;
										   - реализует связь с жизнью, с потребностями и интересами обучающегося;
										   - использует диалоговые и дискуссионные методы.</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-4_1', true); ?>" name="PK-4_1"/></td>
								</tr>
								<tr>
									<td>Владеть приемами организации деятельности обучающихся</td>
									<td><i>- использует на уроке приемы активизации познавательной деятельности обучающихся;
										   - реализует индивидуальный и дифференцированный подходы к организации деятельности обучающихся.</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-4_2', true); ?>" name="PK-4_2"/></td>
								</tr>
							</table>
							<h3 align="center">2. Оценка предметно-методической деятельности студента-практиканта учителем английского языка</h3>
							<p align="center">
							<b>Оценка сформированности компетенции ПК-2</b><br>
							Способность использовать современные методы и технологии обучения и диагностики
							</p>
							<table>
								<tr>
									<td colspan="2"> Учитель английского языка:&nbsp <input type="text" size = "20" value ="<?php echo get_post_meta( $questionary, 'teacher_eng', true); ?>" name="teacher_eng"/></td>
								</tr>
								<tr>
									<td>Содержание деятельности студента</td>
									<td>Оценка учителем в баллах (1-5)</td>
								</tr>
								<tr>
									<td>Уметь ставить цели обучения и в соответствии с ними отбирать языковой и речевой материал на занятия /
										<i>Уметь ставить цели обучения и в соответствии с ними отбирать материал на занятия</i>
									</td>
									<td>X1 = <input type="number" min="1" max="5" step="1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-2_1', true); ?>" name="PK-2_1"/></td>
								</tr>
								<tr>
									<td>Грамотно выстраивать структуру урока</td>
									<td>X2 = <input type="number" min="1" max="5" step="1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-2_2', true); ?>" name="PK-2_2"/></td>
								</tr>
								<tr>
									<td>Давать грамотные установки для работы с материалом урока</td>
									<td>X3 = <input type="number" min="1" max="5" step="1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-2_3', true); ?>" name="PK-2_3"/></td>
								</tr>
								<tr>
									<td>Планировать и применять технологии, целесообразные для данного урока</td>
									<td>X4 = <input type="number" min="1" max="5" step="1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-2_4', true); ?>" name="PK-2_4"/></td>
								</tr>
								<tr>
									<td>Оценивать работу учащихся в процессе использования современных методов и технологий</td>
									<td>X5 = <input type="number" min="1" max="5" step="1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-2_5', true); ?>" name="PK-2_5"/></td>
								</tr>
								<tr>
									<td>Оформлять конспект и технологическую карту урока</td>
									<td>X6 = <input type="number" min="1" max="5" step="1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-2_6', true); ?>" name="PK-2_6"/></td>
								</tr>
								<tr>
									<td>Анализировать собственную деятельность на уроке</td>
									<td>X7 = <input type="number" min="1" max="5" step="1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-2_7', true); ?>" name="PK-2_7"/></td>
								</tr>
							</table>
							<h3 align="center">3. Оценка воспитательной деятельности студента-практиканта классным руководителем</h3>
							<p align="center"><b>Оценка сформированности компетенции ПК-3</b><br>
							Способность решать задачи воспитания и духовно-нравственного развития обучающихся в учебной и внеучебной деятельности
							</p>
							<p>
							<i>0 б. – показатель не выражен; 0,5 б. – показатель слабо выражен; 1 б. – показатель ярко выражен.</i>
							</p>
							<table>
								<tr>
									<td colspan="3"> Учитель:&nbsp <input type="text" size = "20" value ="<?php echo get_post_meta( $questionary, 'teacher', true); ?>" name="teacher"/> </td>
								</tr>
								<tr>
									<td>Показатель</td>
									<td>Содержание деятельности студента</td>
									<td width="70"><b>Балл (от 0 до 1)</b></td>
								</tr>
								<tr>
									<td>Уметь формулировать задачи воспитания и духовно-нравственного развития в учебной и внеучебной деятельности</td>
									<td><i>- формулирует задачи воспитания и духовно-нравственного развития обучающихся;
										   - организует мероприятия в соответствии с поставленными задачами.</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-3_1', true); ?>" name="PK-3_1"/></td>
								</tr>
								<tr>
									<td>Уметь планировать содержание программы воспитания и духовно-нравственного развития</td>
									<td><i>- анализирует воспитательную программу;
										   - разрабатывает мероприятие в соответствии с целями воспитательной программы.</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-3_2', true); ?>" name="PK-3_2"/></td>
								</tr>
								<tr>
									<td>Владеть методологией развития личности</td>
									<td><i>- осуществляет наблюдение основных проявлений личностных особенностей ученика во время учебной и внеучебной деятельности;
										   - предлагает способы развития личности учащегося.</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-3_3', true); ?>" name="PK-3_3"/></td>
								</tr>
								<tr>
									<td>Владеть технологиями развития личности</td>
									<td><i>- применяет разнообразные приемы организации деятельности обучающихся, направленные на развитие их личности.</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'PK-3_4', true); ?>" name="PK-3_4"/></td>
								</tr>
							</table>
							<h3 align="center">4. Оценка психологической деятельности студента-практиканта учителем / классным руководителем</h3>
							<p align="center">
							<b>Оценка сформированности компетенции ОПК-2</b><br>
							Способность осуществлять обучение, воспитание и развитие с учетом социальных, возрастных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся
							</p>
							<p>
							<i>0 б. – показатель не выражен; 0,5 б. – показатель слабо выражен; 1 б. – показатель ярко выражен.</i>
							</p>
							<table>
								<tr>
									<td colspan="3"> Учитель:&nbsp <?php echo get_post_meta( $questionary, 'teacher', true); ?></td>
								</tr>
								<tr>
									<td>Показатель</td>
									<td>Содержание деятельности студента</td>
									<td width="70">Балл <b>(от 0 до 1)</b></td>
								</tr>
								<tr>
									<td>Уметь организовывать развитие познавательных психических процессов обучающихся во время урока на основе индивидуального подхода к личности ученика</td>
									<td><i>- осуществляет учет общепсихологических закономерностей усвоения, возрастных и индивидуальных особенностей учащихся на уроке</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'OPK-2_1', true); ?>" name="OPK-2_1"/></td>
								</tr>
								<tr>
									<td>Владеть методами проблемного, развивающего и интерактивного обучения личности</td>
									<td><i>- использует приемы активизации мыслительной деятельности учащихся, приемы, вызывающие познавательный интерес к изучаемому;<br>
										   - создает благоприятные условия для формирования интеллекта, для психического и личностного развития</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'OPK-2_2', true); ?>" name="OPK-2_2"/></td>
								</tr>		
							</table>
							<br><br>
							<h3 align="center">Оценка деятельности студента-практиканта по школьной гигиене и здоровьесберегающим технологиям учителем информатики / классным руководителем</h3>
							<p align="center">
							<b>Оценка сформированности компетенции ОПК-2</b><br>
							Способность осуществлять обучение, воспитание и развитие с учетом социальных, возрастных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся
							</p>
							<p>
							<i>0 б. – показатель не выражен; 0,5 б. – показатель слабо выражен; 1 б. – показатель ярко выражен.</i>
							</p>
							<table>
								<tr>
									<td colspan="3"> Учитель:&nbsp <?php echo get_post_meta( $questionary, 'teacher', true); ?></td>
								</tr>
								<tr>
									<td>Показатель</td>
									<td>Содержание деятельности студента</td>
									<td width="70">Балл <b>(от 0 до 1)</b></td>
								</tr>
								<tr>
									<td>Уметь выбирать технологию, исходя из задач, содержания здоровьесбережения и особенностей подрастающего человека</td>
									<td><i>- выбирает технологию, исходя из задач, содержания здоровьесбережения и особенностей подрастающего человека</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'OPK-2_1_1', true); ?>" name="OPK-2_1_1"/></td>
								</tr>
								<tr>
									<td>Владеть приемами организации здоровьесберегающей деятельности при использовании различных современных технологий и методик здоровьесбережения</td>
									<td><i>- использует современные приемы организации здоровьесберегающей деятельности</i></td>
									<td><input type="number" min="0" max="1" step="0.1" size = "1" value ="<?php echo get_post_meta( $questionary, 'OPK-2_2_1', true); ?>" name="OPK-2_2_1"/></td>
								</tr>		
							</table>
							<br><br>
							<p align="center"><font size="4"><b>Сводная таблица оценки деятельности студента-практиканта 
								руководителями от базы практики</font></b>
							</p>
							<p>
							Оценка профессиональной деятельности студента-практиканта руководителями от базы практики осуществляется в соответствии с показателями сформированности компетенций, выделенными для различных видов деятельности:<br>
							- блок 1: предметно-методическая деятельность по информатике;<br>
							- блок 2: предметно-методическая деятельность по учебному предмету «Английский язык»<br>
							- блок 3: воспитательная деятельность;<br>
							- блок 4: психологическая  деятельность;<br>
							- блок 5: деятельность школьной гигиене и здоровьесберегающим технологиям.<br><br>
							Результаты оценивания уровня сформированности профессиональных компетенций у студента-практиканта, выполненного выше учителями информатики, английского языка, классным руководителем, представлены в таблице.

							</p>
							<table>
								<tr>
									<td>№ блока</td>
									<td>Компетенции</td>
									<td>Оценка учителя, балл</td>
								</tr>
								<tr>
									<td>1</td>
									<td>ПК-4. Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов</td>
									<td>U1 = <?php echo round($U1, 2); ?></td>
								</tr>
								<tr>
									<td>2</td>
									<td>ПК-2. Способность использовать современные методы и технологии обучения и диагностики</td>
									<td>U2 = <?php echo round($U2, 2); ?></td>
								</tr>
								<tr>
									<td>3</td>
									<td>ПК-3. Способность решать задачи воспитания и духовно-нравственного развития обучающихся в учебной и внеучебной деятельности</td>
									<td>U3 = <?php echo round($U3, 2); ?></td>
								</tr>
								<tr>
									<td rowspan="2">4</td>
									<td rowspan="2">ОПК-2. Способность осуществлять обучение, воспитание и развитие с учетом социальных, возрастных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся.</td>
									<td>U4 = <?php echo round($U4, 2); ?></td>
								</tr>
								<tr>
									<td>U5 = <?php echo round($U5, 2); ?></td>
								</tr>
							</table>
						<input type="submit" name="save" value="Сохранить"/>
						</form>
					</body>
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
		update_post_meta($questionary, 'teacher_inf', $_POST["teacher_inf"]);
		update_post_meta($questionary, 'PK-4_1', $_POST["PK-4_1"]);
		update_post_meta($questionary, 'PK-4_2', $_POST["PK-4_2"]);
				
		update_post_meta($questionary, 'teacher_eng', $_POST["teacher_eng"]);
		update_post_meta($questionary, 'PK-2_1', $_POST["PK-2_1"]);
		update_post_meta($questionary, 'PK-2_2', $_POST["PK-2_2"]);
		update_post_meta($questionary, 'PK-2_3', $_POST["PK-2_3"]);
		update_post_meta($questionary, 'PK-2_4', $_POST["PK-2_4"]);
		update_post_meta($questionary, 'PK-2_5', $_POST["PK-2_5"]);
		update_post_meta($questionary, 'PK-2_6', $_POST["PK-2_6"]);
		update_post_meta($questionary, 'PK-2_7', $_POST["PK-2_7"]);
		
		update_post_meta($questionary, 'teacher', $_POST["teacher"]);
		update_post_meta($questionary, 'PK-3_1', $_POST["PK-3_1"]);
		update_post_meta($questionary, 'PK-3_2', $_POST["PK-3_2"]);
		update_post_meta($questionary, 'PK-3_3', $_POST["PK-3_3"]);
		update_post_meta($questionary, 'PK-3_4', $_POST["PK-3_4"]);
		
		update_post_meta($questionary, 'OPK-2_1', $_POST["OPK-2_1"]);
		update_post_meta($questionary, 'OPK-2_2', $_POST["OPK-2_2"]);
		
		update_post_meta($questionary, 'OPK-2_1_1', $_POST["OPK-2_1_1"]);
		update_post_meta($questionary, 'OPK-2_2_1', $_POST["OPK-2_2_1"]);
		
		echo "<script>window.location.href = window.location.href;</script>";
	}
	else
	{
		echo "<script>alert(\"У вас нет прав для редактирования этой записи\");</script>";
	}
}