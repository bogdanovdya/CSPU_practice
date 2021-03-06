<?php
/**
 * The Template for displaying competence_econ single posts
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

				$competence_econ = get_the_ID();
				$student = get_post_meta($competence_econ, 'student', true);
				$itog_mark_x1 = get_post_meta( $competence_econ, 'PK-2_1_1_zan1', true ) + get_post_meta( $competence_econ, 'PK-2_1_2_zan1', true ) + get_post_meta( $competence_econ, 'PK-2_1_3_zan1', true ) + get_post_meta( $competence_econ, 'PK-2_1_4_zan1', true ) + get_post_meta( $competence_econ, 'PK-2_1_5_zan1', true ) + get_post_meta( $competence_econ, 'PK-2_1_6_zan1', true ) + get_post_meta( $competence_econ, 'PK-2_1_7_zan1', true );
				$itog_mark_x2 = get_post_meta( $competence_econ, 'PK-2_1_1_zan2', true ) + get_post_meta( $competence_econ, 'PK-2_1_2_zan2', true ) + get_post_meta( $competence_econ, 'PK-2_1_3_zan2', true ) + get_post_meta( $competence_econ, 'PK-2_1_4_zan2', true ) + get_post_meta( $competence_econ, 'PK-2_1_5_zan2', true ) + get_post_meta( $competence_econ, 'PK-2_1_6_zan2', true ) + get_post_meta( $competence_econ, 'PK-2_1_7_zan2', true );
				$itog_mark_x3 = get_post_meta( $competence_econ, 'PK-2_1_1_zan3', true ) + get_post_meta( $competence_econ, 'PK-2_1_2_zan3', true ) + get_post_meta( $competence_econ, 'PK-2_1_3_zan3', true ) + get_post_meta( $competence_econ, 'PK-2_1_4_zan3', true ) + get_post_meta( $competence_econ, 'PK-2_1_5_zan3', true ) + get_post_meta( $competence_econ, 'PK-2_1_6_zan3', true ) + get_post_meta( $competence_econ, 'PK-2_1_7_zan3', true );
				$itog_mark_x4 = get_post_meta( $competence_econ, 'PK-2_1_1', true ) + get_post_meta( $competence_econ, 'PK-2_1_2', true );
				update_post_meta($competence_econ, 'itog_mark_x1', $itog_mark_x1);
				update_post_meta($competence_econ, 'itog_mark_x2', $itog_mark_x2);
				update_post_meta($competence_econ, 'itog_mark_x3', $itog_mark_x3);
				update_post_meta($competence_econ, 'itog_mark_x4', $itog_mark_x4);
				$itog_mark_k2 = ((($itog_mark_x1 + $itog_mark_x2 + $itog_mark_x3)/24 + $itog_mark_x4/4)/4);
				update_post_meta($competence_econ, 'itog_mark_k2', $itog_mark_k2);


				?>
				<div class="entry-content">
                    <table>
						<thead>
                        <tr>
							<th colspan="4"><a href="<?php the_permalink($student) ?>"><?php echo get_post_meta( $student, 'name_student', true ); ?></a> </th>
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
							<td>1.1. Уметь ставить цели обучения и в соответсвии с ними отбирать материал на знания</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_1_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_1_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_1_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.2. Грамотно выстраивать структуру занятия</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_2_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_2_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_2_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.3. Давить грамотные установки для работы с материалом занятия</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_3_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_3_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_3_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.4. Планировать и пряменять технологии целесообразные для данного урока</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_4_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_4_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_4_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.5. Оценивать работу студентов в процессе использования совеременных методов технологий</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_5_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_5_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_5_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.6. Оформлять план-конспект занятия</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_6_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_6_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_6_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.7. Анализировать собственную дейтельность на занятии</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_7_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_7_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_7_zan3', true ); ?></td>
						</tr>
						<tr>
							<td><b>Итоговый балл (теоретически возможный)</b></td>
							<td><?php echo get_post_meta( $competence_econ, 'itog_mark_x1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'itog_mark_x2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'itog_mark_x3', true ); ?></td>
						</tr>
						<tr>
							<td colspan = "4"><b>Внеурочная деятельность</b></td>
						</tr>
						<tr>
							<td colspan="4"><b>ПК-2. Способность использовать современные методы и технологии обучения и диагностики</b></td>
						</tr>
						<tr>
							<td colspan="3">1.1. Уметь планировать и применять приемы, методы, обеспечивающие достижение личностных, метапредметных и предметных результатов обучения,, в процессе внеаудиторной реботы</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_1', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3">1.2. Оформлять разработку внеурочного мероприятия</td>
							<td><?php echo get_post_meta( $competence_econ, 'PK-2_1_2', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3"><b>Итоговый балл (теоретически возможный)</b></td>
							<td><?php echo get_post_meta( $competence_econ, 'itog_mark_x4', true ); ?></td>
						</tr>
                        <tr>
							<td colspan="3"><b>Коэффициент полноты сформированности компетенций</b></td>
							<td><?php echo  round(get_post_meta( $competence_econ, 'itog_mark_k2', true ),2); ?></td>
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

