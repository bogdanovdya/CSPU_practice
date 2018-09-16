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
				$U1 = ((get_post_meta( $questionary, 'PK-1_1', true) + get_post_meta( $questionary, 'PK-1_2', true) + get_post_meta( $questionary, 'PK-1_3', true))/3);
				$U2 = ((get_post_meta( $questionary, 'PK-2_1', true) + get_post_meta( $questionary, 'PK-2_2', true) + get_post_meta( $questionary, 'PK-2_3', true) + get_post_meta( $questionary, 'PK-2_4', true) + get_post_meta( $questionary, 'PK-2_5', true) + get_post_meta( $questionary, 'PK-2_6', true) + get_post_meta( $questionary, 'PK-2_7', true))/35);
				$U3 = ((get_post_meta( $questionary, 'PK-5_1', true) + get_post_meta( $questionary, 'PK-5_2', true) + get_post_meta( $questionary, 'PK-5_3', true))/3);
				$U4 = ((get_post_meta( $questionary, 'OPK-3_1', true) + get_post_meta( $questionary, 'OPK-3_2', true) + get_post_meta( $questionary, 'OPK-3_3', true))/3);
				
				?>
				<div class="entry-content">
                    <?php
					$current_user = wp_get_current_user();
					$roles = $current_user->roles;
					if(in_array("student", $roles))
					{
						echo "студент";
					}
					?>
					<table>
						<thead>
                        <tr>
							<th colspan="4"><a href="<?php the_permalink($student) ?>"><?php $info = get_userdata(get_post_meta( $student, 'name_student', true )); echo($info->last_name . " " . $info->first_name);  ?></a> </th>
						</tr>
						</thead>
					</table>
					<body>
						<h2 align="center">Опрос работодателей о подготовке студента-практиканта в качестве учителя, классного руководителя</h2>
						<p align="center"><b>Оценка сформированности компетенции ПК-1</b><br>
						Готовность реализовывать образовательные программы по предметам в соответствии с требованиями образовательных стандартов
						</p>
						<p><small>
						<i>0 б. – показатель не выражен; 0,5 б. – показатель слабо выражен; 1 б. – показатель ярко выражен.</i>
						</small></p>
						<table>
							<tr>
								<td colspan="3"> Учитель:&nbsp <?php echo get_post_meta( $questionary, 'teacher', true); ?> </td>
							</tr>
							<tr>
								<td>Показатель</td>
								<td>Содержание деятельности студента</td>
								<td width="70">Балл (от 0 до 1)</td>			
							</tr>
							<tr>
								<td>Уметь проектировать содержание учебного занятия по информатике  в соответствии с требованиями образовательных стандартов</td>
								<td>Соотносит содержание темы при проектировании урока с нормативными документами. Планирует результаты освоения темы урока в соответствии со стандартом</td>
								<td>X1 = <?php echo get_post_meta( $questionary, 'PK-1_1', true); ?> </td>
							</tr>
							<tr>
								<td>Уметь конструировать познавательную деятельность обучаемых на основе УУД</td>
								<td>Планирует использование методов активизации познавательной деятельности</td>
								<td>X2 = <?php echo get_post_meta( $questionary, 'PK-1_2', true); ?> </td>
							</tr>
							<tr>
								<td>Владеть способами построения учебного процесса в соответствии с системно-деятельностным подходом</td>
								<td>Использует способы активизации познавательной деятельности на учебном занятии.
									Применяет способы организации самостоятельной работы обучающихся
								</td>
								<td>X3 = <?php echo get_post_meta( $questionary, 'PK-1_3', true); ?> </td>
							</tr>
						</table>
						<p align="center">
						<b>Оценка сформированности компетенции ПК-2</b><br>
						Способность использовать современные методы и технологии обучения и диагностики
						</p>
						<table>
							<tr>
								<td colspan="2"> Учитель:&nbsp <?php echo get_post_meta( $questionary, 'teacher', true); ?> </td>
							</tr>
							<tr>
								<td>Содержание деятельности студента</td>
								<td width="70">Оценка учителем в баллах (1-5)</td>
							</tr>
							<tr>
								<td>Уметь ставить цели обучения и в соответствии с ними отбирать языковой и речевой материал на занятия /
									Уметь ставить цели обучения и в соответствии с ними отбирать материал на занятия
								</td>
								<td>X1 = <?php echo get_post_meta( $questionary, 'PK-2_1', true); ?> </td>
							</tr>
							<tr>
								<td>Грамотно выстраивать структуру урока</td>
								<td>X2 = <?php echo get_post_meta( $questionary, 'PK-2_2', true); ?> </td>
							</tr>
							<tr>
								<td>Давать грамотные установки для работы с материалом урока</td>
								<td>X3 = <?php echo get_post_meta( $questionary, 'PK-2_3', true); ?></td>
							</tr>
							<tr>
								<td>Планировать и применять технологии, целесообразные для данного урока</td>
								<td>X4 = <?php echo get_post_meta( $questionary, 'PK-2_4', true); ?> </td>
							</tr>
							<tr>
								<td>Оценивать работу учащихся в процессе использования современных методов и технологий</td>
								<td>X5 = <?php echo get_post_meta( $questionary, 'PK-2_5', true); ?> </td>
							</tr>
							<tr>
								<td>Оформлять конспект и технологическую карту урока</td>
								<td>X6 = <?php echo get_post_meta( $questionary, 'PK-2_6', true); ?> </td>
							</tr>
							<tr>
								<td>Анализировать собственную деятельность на уроке</td>
								<td>X7 = <?php echo get_post_meta( $questionary, 'PK-2_7', true); ?> </td>
							</tr>
						</table>
						<p align="center"><b>Оценка сформированности компетенции ПК-5</b><br>
						Способность осуществлять педагогическое сопровождение социализации и профессионального самоопределения обучающихся
						</p>
						<p><small>
						<i>0 б. – показатель не выражен; 0,5 б. – показатель слабо выражен; 1 б. – показатель ярко выражен.</i>
						</small></p>
						<table>
							<tr>
								<td colspan="3"> Учитель:&nbsp <?php echo get_post_meta( $questionary, 'teacher', true); ?> </td>
							</tr>
							<tr>
								<td>Показатель</td>
								<td>Содержание деятельности студента</td>
								<td width="70">Балл (от 0 до 1)</td>
							</tr>
							<tr>
								<td>Знать основные закономерности социализации личности, индикаторы  индивидуальных особенностей траекторий жизни</td>
								<td>Обнаруживает знания индикаторов  индивидуальных особенностей траекторий жизни обучающихся</td>
								<td>X1 = <?php echo get_post_meta( $questionary, 'PK-5_1', true); ?> </td>
							</tr>
							<tr>
								<td>Уметь определять индикаторы  индивидуальных особенностей траекторий жизни</td>
								<td>Демонстрирует умения определять индивидуальные особенности траекторий жизни обучающихся</td>
								<td>X2 = <?php echo get_post_meta( $questionary, 'PK-5_2', true); ?> </td>
							</tr>
							<tr>
								<td>Владеть способностью обеспечить сопровождение  профессионального самоопределения обучающихся</td>
								<td>Применяет в ходе проведения занятий различные приемы по организации деятельности профессионального самоопределения обучающихся</td>
								<td>X3 = <?php echo get_post_meta( $questionary, 'PK-5_3', true); ?> </td>
							</tr>
						</table>
						<p align="center">
						<b>Оценка сформированности компетенции ОПК-3</b><br>
						Готовность к психолого-педагогическому сопровождению учебно-воспитательного процесса
						</p>
						<p><small>
						<i>0 б. – показатель не выражен; 0,5 б. – показатель слабо выражен; 1 б. – показатель ярко выражен.</i>
						</small></p>
						<table>
							<tr>
								<td colspan="3"> Учитель:&nbsp <?php echo get_post_meta( $questionary, 'teacher', true); ?> </td>
							</tr>
							<tr>
								<td>Показатель</td>
								<td>Содержание деятельности студента</td>
								<td width="70">Балл (от 0 до 1)</td>
							</tr>
							<tr>
								<td>Знать сущность психолого-педагогического сопровождения и поддержки</td>
								<td>Обнаруживает знания технологий психолого-педагогического сопровождения и поддержки</td>
								<td>X1 = <?php echo get_post_meta( $questionary, 'OPK-3_1', true); ?> </td>
							</tr>
							<tr>
								<td>Понимание важности и необходимости организации психолого-педагогического сопровождения и поддержки</td>
								<td>Осуществляет учет общепсихологических закономерностей усвоения, возрастных и индивидуальных особенностей учащихся на уроке</td>
								<td>X2 = <?php echo get_post_meta( $questionary, 'OPK-3_2', true); ?> </td>
							</tr>
							<tr>
								<td>Владение технологиями психолого-педагогического сопровождения и поддержки</td>
								<td>Использует приемы активизации мыслительной деятельности учащихся, приемы, вызывающие познавательный интерес к изучаемому.
									Создает благоприятные условия для формирования интеллекта, для психического и личностного развития
								</td>
								<td>X3 = <?php echo get_post_meta( $questionary, 'OPK-3_3', true); ?> </td>
							</tr>		
						</table>
						<br><br>
						<p align="center"><font size="4"><b>Сводная таблица оценки деятельности студента-практиканта 
							руководителями от базы практики</font></b>
						</p>
						<p>
						Оценка профессиональной деятельности студента-практиканта руководителями от базы практики осуществляется в соответствии с показателями сформированности компетенций, выделенными для различных видов деятельности:<br>
						<ul>
							<li>блок 1: предметно-методическая деятельность по информатике;</li><br>
							<li>блок 2: предметно-методическая деятельность по учебному предмету «Английский язык» / «Экономика»;</li><br>
							<li>блок 3: воспитательная деятельность;</li><br>
							<li>блок 4: психологическая  деятельность;</li>
						</ul>
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
								<td><b>ПК-1.</b> Готовность реализовывать образовательные программы по предметам в соответствии с требованиями образовательных стандартов</td>
								<td>U1 = <?php echo round($U1, 2) ?> </td>
							</tr>
							<tr>
								<td>2</td>
								<td><b>ПК-2.</b> Способность использовать современные методы и технологии обучения и диагностики</td>
								<td>U2 = <?php echo round($U2, 2); ?> </td>
							</tr>
							<tr>
								<td>3</td>
								<td><b>ПК-5.</b> Способность осуществлять педагогическое сопровождение социализации и профессионального самоопределения обучающихся</td>
								<td>U3 = <?php echo round($U3, 2); ?> </td>
							</tr>
							<tr>
								<td>4</td>
								<td><b>ОПК-3.</b> Готовность к психолого-педагогическому сопровождению  учебно-воспитательного процесса</td>
								<td>U4 = <?php echo round($U4, 2); ?> </td>
							</tr>
						</table>
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

