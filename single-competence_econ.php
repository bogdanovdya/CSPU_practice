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
				 * include the post format-specific template for the content. if you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				?>

				<?php

				$competence_econ = get_the_id();
				$student = get_post_meta($competence_econ, 'student', true);
				$itog_mark_x1 = get_post_meta( $competence_econ, 'pk-2_1_1_zan1', true ) + get_post_meta( $competence_econ, 'pk-2_1_2_zan1', true ) + get_post_meta( $competence_econ, 'pk-2_1_3_zan1', true ) + get_post_meta( $competence_econ, 'pk-2_1_4_zan1', true ) + get_post_meta( $competence_econ, 'pk-2_1_5_zan1', true ) + get_post_meta( $competence_econ, 'pk-2_1_6_zan1', true ) + get_post_meta( $competence_econ, 'pk-2_1_7_zan1', true );
				$itog_mark_x2 = get_post_meta( $competence_econ, 'pk-2_1_1_zan2', true ) + get_post_meta( $competence_econ, 'pk-2_1_2_zan2', true ) + get_post_meta( $competence_econ, 'pk-2_1_3_zan2', true ) + get_post_meta( $competence_econ, 'pk-2_1_4_zan2', true ) + get_post_meta( $competence_econ, 'pk-2_1_5_zan2', true ) + get_post_meta( $competence_econ, 'pk-2_1_6_zan2', true ) + get_post_meta( $competence_econ, 'pk-2_1_7_zan2', true );
				$itog_mark_x3 = get_post_meta( $competence_econ, 'pk-2_1_1_zan3', true ) + get_post_meta( $competence_econ, 'pk-2_1_2_zan3', true ) + get_post_meta( $competence_econ, 'pk-2_1_3_zan3', true ) + get_post_meta( $competence_econ, 'pk-2_1_4_zan3', true ) + get_post_meta( $competence_econ, 'pk-2_1_5_zan3', true ) + get_post_meta( $competence_econ, 'pk-2_1_6_zan3', true ) + get_post_meta( $competence_econ, 'pk-2_1_7_zan3', true );
				$itog_mark_x4 = get_post_meta( $competence_econ, 'pk-2_1_1', true ) + get_post_meta( $competence_econ, 'pk-2_1_2', true );
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
							<th colspan="4"><a href="<?php the_permalink($student) ?>"><?php $info = get_userdata(get_post_meta( $student, 'name_student', true )); echo($info->last_name . " " . $info->first_name);  ?></a> </th>
						</tr>
						<tr>
							<th>компетенции/показатели (зув)</th>
							<th>занятие 1</th>
							<th>занятие 2</th>
							<th>занятие 3</th>
						</tr>
						</thead>
						<tr><td colspan = "4"><b>урочная деятельность</b></td></tr>
						<tr>
							<td colspan="4"><b>пк-2. способность использовать современные методы и технологии обучения и диагностики</b></td>
						</tr>
						<tr>
							<td>1.1. уметь ставить цели обучения и в соответсвии с ними отбирать материал на знания</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_1_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_1_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_1_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.2. грамотно выстраивать структуру занятия</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_2_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_2_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_2_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.3. давить грамотные установки для работы с материалом занятия</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_3_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_3_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_3_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.4. планировать и пряменять технологии целесообразные для данного урока</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_4_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_4_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_4_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.5. оценивать работу студентов в процессе использования совеременных методов технологий</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_5_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_5_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_5_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.6. оформлять план-конспект занятия</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_6_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_6_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_6_zan3', true ); ?></td>
						</tr>
						<tr>
							<td>1.7. анализировать собственную дейтельность на занятии</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_7_zan1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_7_zan2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_7_zan3', true ); ?></td>
						</tr>
						<tr>
							<td><b>итоговый балл (теоретически возможный)</b></td>
							<td><?php echo get_post_meta( $competence_econ, 'itog_mark_x1', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'itog_mark_x2', true ); ?></td>
							<td><?php echo get_post_meta( $competence_econ, 'itog_mark_x3', true ); ?></td>
						</tr>
						<tr>
							<td colspan = "4"><b>внеурочная деятельность</b></td>
						</tr>
						<tr>
							<td colspan="4"><b>пк-2. способность использовать современные методы и технологии обучения и диагностики</b></td>
						</tr>
						<tr>
							<td colspan="3">1.1. уметь планировать и применять приемы, методы, обеспечивающие достижение личностных, метапредметных и предметных результатов обучения,, в процессе внеаудиторной реботы</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_1', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3">1.2. оформлять разработку внеурочного мероприятия</td>
							<td><?php echo get_post_meta( $competence_econ, 'pk-2_1_2', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3"><b>итоговый балл (теоретически возможный)</b></td>
							<td><?php echo get_post_meta( $competence_econ, 'itog_mark_x4', true ); ?></td>
						</tr>
                        <tr>
							<td colspan="3"><b>коэффициент полноты сформированности компетенций</b></td>
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

