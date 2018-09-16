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

				$competence_inf = get_the_ID();
				$student = get_post_meta($competence_inf, 'student', true);
				$itog_mark_x1 = get_post_meta( $competence_inf, 'PK-2_1_1_zan1', true ) + get_post_meta( $competence_inf, 'PK-2_1_2_zan1', true ) + get_post_meta( $competence_inf, 'PK-2_1_3_zan1', true ) + get_post_meta( $competence_inf, 'PK-4_2_1_zan1', true ) + get_post_meta( $competence_inf, 'PK-4_2_2_zan1', true ) + get_post_meta( $competence_inf, 'PK-10_3_1_zan1', true ) + get_post_meta( $competence_inf, 'PK-10_3_2_zan1', true );
				$itog_mark_x2 = get_post_meta( $competence_inf, 'PK-2_1_1_zan2', true ) + get_post_meta( $competence_inf, 'PK-2_1_2_zan2', true ) + get_post_meta( $competence_inf, 'PK-2_1_3_zan2', true ) + get_post_meta( $competence_inf, 'PK-4_2_1_zan2', true ) + get_post_meta( $competence_inf, 'PK-4_2_2_zan2', true ) + get_post_meta( $competence_inf, 'PK-10_3_1_zan2', true ) + get_post_meta( $competence_inf, 'PK-10_3_2_zan2', true );
				$itog_mark_x3 = get_post_meta( $competence_inf, 'PK-2_1_1_zan3', true ) + get_post_meta( $competence_inf, 'PK-2_1_2_zan3', true ) + get_post_meta( $competence_inf, 'PK-2_1_3_zan3', true ) + get_post_meta( $competence_inf, 'PK-4_2_1_zan3', true ) + get_post_meta( $competence_inf, 'PK-4_2_2_zan3', true ) + get_post_meta( $competence_inf, 'PK-10_3_1_zan3', true ) + get_post_meta( $competence_inf, 'PK-10_3_2_zan3', true );
				$itog_mark_x4 = get_post_meta( $competence_inf, 'PK-4_4_1', true ) + get_post_meta( $competence_inf, 'PK-4_4_2', true );
				update_post_meta($competence_inf, 'itog_mark_x1', $itog_mark_x1);
				update_post_meta($competence_inf, 'itog_mark_x2', $itog_mark_x2);
				update_post_meta($competence_inf, 'itog_mark_x3', $itog_mark_x3);
				update_post_meta($competence_inf, 'itog_mark_x4', $itog_mark_x4);
				$itog_mark_k1 = ((($itog_mark_x1 + $itog_mark_x2 + $itog_mark_x3)/26 + $itog_mark_x4/6)/4);
				update_post_meta($competence_inf, 'itog_mark_k1', $itog_mark_k1);


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
						<tr>
							<th>Компетенции/показатели (ЗУВ)</th>
							<th>Занятие 1</th>
							<th>Занятие 2</th>
							<th>Занятие 3</th>
						</tr>
						</thead>
						<tr><td colspan = "4"><b>Урочная деятельность</b></td></tr>
						<tr>
							<td colspan="4"><b>ПК-2. Способность использовать современные методы и технологии обучения и диагностики</b></td>
						</tr>
						<tr>
							<td>1.1 Уметь развивать познавательную самостоятельность на основе проблемного обучения; эвристических подходов</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_1_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_1_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_1_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.2 Уметь осуществлять контроль и оценку учебных достижений учащихся</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_2_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_2_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_2_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.3 Владеть приемами обучения на основе применения заданий, содержащих различные противоречия, с целью логического и эвристического развития учащихся</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_3_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_3_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-2_1_3_zan3', true ); ?></td>
						</tr>
						<tr>
							<td colspan="4"><b>ПК-4. Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов</b></td>
						</tr>
						<tr>
							<td>2.1 Уметь применять приемы, методы, обеспечивающие достижение личностных, метапредметных и предметных результатов обучения</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-4_2_1_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-4_2_1_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-4_2_1_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>2.2 Владеть приемами организации деятельности обучающихся на уроке</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-4_2_2_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-4_2_2_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-4_2_2_zan3', true ); ?></td>
						</tr>
						<tr>
							<td colspan="4"><b>ПК-10. Способность проектировать траектории своего профессионального роста и личностного развития</b></td>
						</tr>
						<tr>
							<td>3.1. Уметь осуществлять самоанализ учебного занятия с точки зрения его эффективности</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-10_3_1_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-10_3_1_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-10_3_1_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>3.2. Владеть способностью видеть пути повышения своего профессионализма при проведении учебных занятий, в том числе на основе развития ИКТ-компетентности</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-10_3_2_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-10_3_2_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-10_3_2_zan3', true ); ?></td>
						</tr>
						<tr>
							<td><b>Итоговый балл (теоретически возможный)</b></td>
							<td><?php echo get_post_meta( $competence_inf, 'itog_mark_x1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'itog_mark_x2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_inf, 'itog_mark_x3', true ); ?></td>
						</tr>
						<tr>
							<td colspan = "4"><b>Внеурочная деятельность</b></td>
						</tr>
						<tr>
							<td colspan="4"><b>ПК-4. Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов</b></td>
						</tr>
						<tr>
							<td colspan="3">4.1 Уметь планировать и применять приемы, методы, обеспечивающие достижения личностных, метапредметных и предметных результатов обучения, в процессе внеклассной работы</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-4_4_1', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3">4.2 Владеть приемами организационно управленческой деятельности учителя обеспечения качества учебно-воспитательного процесса</td>
							<td><?php echo get_post_meta( $competence_inf, 'PK-4_4_2', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3"><b>Итоговый балл (теоретически возможный)</b></td>
							<td><?php echo get_post_meta( $competence_inf, 'itog_mark_x4', true ); ?></td>
						</tr>
                        <tr>
							<td colspan="3"><b>Коэффициент полноты сформированности компетенций</b></td>
							<td><?php echo  round(get_post_meta( $competence_inf, 'itog_mark_k1', true ),2); ?></td>
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

