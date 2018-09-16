<?php
/**
 * The Template for displaying selfconcept_post single posts
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
				$selfconcept_post = get_the_ID();
				$student = get_post_meta($selfconcept_post, 'student', true);
				$selfconcept_post_itog = get_post_meta( $selfconcept_post, 'OPK-2_1', true ) + get_post_meta( $selfconcept_post, 'OPK-2_2', true ) + get_post_meta( $selfconcept_post, 'OPK-2_3', true ) + get_post_meta( $selfconcept_post, 'OPK-2_4', true ) + get_post_meta( $selfconcept_post, 'PK-2_1', true ) + get_post_meta( $selfconcept_post, 'PK-2_2', true ) + get_post_meta( $selfconcept_post, 'PK-2_3', true ) + get_post_meta( $selfconcept_post, 'PK-2_4', true ) + get_post_meta( $selfconcept_post, 'PK-2_5', true ) + get_post_meta( $selfconcept_post, 'PK-2_6', true ) + get_post_meta( $selfconcept_post, 'PK-2_7', true ) + get_post_meta( $selfconcept_post, 'PK-3_1', true ) + get_post_meta( $selfconcept_post, 'PK-3_2', true ) + get_post_meta( $selfconcept_post, 'PK-3_3', true ) + get_post_meta( $selfconcept_post, 'PK-4_2', true ) + get_post_meta( $selfconcept_post, 'PK-4_2', true ) + get_post_meta( $selfconcept_post, 'PK-4_3', true ) + get_post_meta( $selfconcept_post, 'PK-4_4', true );
				add_post_meta($selfconcept_post, 'selfconcept_post_itog', $selfconcept_post_itog, true);
				?>
				<div class="entry-content">
                    <table>
						<thead>
						<tr>
							<th colspan="2"><a href="<?php the_permalink($student) ?>"><?php echo get_post_meta( $student, 'name_student', true ); ?></a> </th>
						</tr>
						<tr>
							<th>Компетенция/показатели(ЗУВ)</th>
							<th>Баллы</th>
						</tr>
						</thead>
						<tr>
							<td colspan="2"><b>ОПК-2. Способность осуществлять обучение, воспитание и развитие с учетом социальных, возвратных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся</b></td>
						</tr>
						<tr>

							<td>Уметь организовывать развитие познавательных психических процессов обучающихся во время урока на основе индивидуального подхода к личности ученика</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'OPK-2_1', true ); ?></td>
						</tr>
						<tr>
							<td>Владеть методами проблемного, развивающего и интерактивного обучения личности</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'OPK-2_2', true ); ?></td>
						</tr>
						<tr>
							<td>Уметь выбирать технологию, исходя из задач, содержания здоровьесбережения и особенностей подрастающего человека</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'OPK-2_3', true ); ?></td>
						</tr>
						<tr>
							<td>Владеть приемами организации здоровьесберегающей деятельности при использовании различных современных технологий и методик здоровьесбережения</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'OPK-2_4', true ); ?></td>
						</tr>
						<tr>
							<td colspan="2"><b>ПК-2. Способность использовать современные методы и технологии обучения и диагностики</b></td>
						</tr>
						<tr>
							<td>Уметь ставить цели обучения и в соответствии с ними отбирать языковой и речевой материал на зазнятия</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-2_1', true ); ?></td>
						</tr>
						<tr>
							<td>Грамотно выстраивать структуру урока</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-2_2', true ); ?></td>
						</tr>
						<tr>
							<td>Давать грамотные установки для работы с материалами урока</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-2_3', true ); ?></td>
						</tr>
						<tr>
							<td>Планировать и применять технологии, целесообразные для данного урока</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-2_4', true ); ?></td>
						</tr>
						<tr>
							<td>Оценивать работу учащихся в процессе использования современных методов и технологий</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-2_5', true ); ?></td>
						</tr>
						<tr>
							<td>Оформлять конспект и технологическую карту урока</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-2_6', true ); ?></td>
						</tr>
						<tr>
							<td>Анализировать собственную деятельность на уроке</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-2_7', true ); ?></td>
						</tr>
						<tr>
							<td colspan="2"><b>ПК-3. Способность организовывать сотрудничество обучающихся, поддерживать их активность, инициативность и самостоятельность, развивать творческие способности</b></td>
						</tr>
						<tr>
							<td>Уметь формулировать задачи воспитания и духовно нравственного развития в внеучебной деятельности</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-3_1', true ); ?></td>
						</tr>
						<tr>
							<td>Уметь планировать содержание программы воспитания и духовно-нравственного развития</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-3_2', true ); ?></td>
						</tr>
						<tr>
							<td>Владеть методологией и технологией развития личности</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-3_3', true ); ?></td>
						</tr>
						<tr>
							<td colspan="2"><b>ПК-4. Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов </b></td>
						</tr>
						<tr>
							<td>Уметь применять приемы, методы, обеспечивающие личностных, метапредметных и предметных результатов обучения на уроке</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-4_1', true ); ?></td>
						</tr>
						<tr>
							<td>Владеть приемами организации деятельности обучающихся на уроке</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-4_2', true ); ?></td>
						</tr>
						<tr>
							<td>Уметь применять приемы, методы, обеспечивающие личностных, метапредметных и предметных результатов обучения, в процессе внеклассной работы</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-4_3', true ); ?></td>
						</tr>
						<tr>
							<td>Владеть приемами организационно-управленческой деятельности учителя обеспечения учебно-воспитательного процесса</td>
							<td><?php echo get_post_meta( $selfconcept_post, 'PK-4_4', true ); ?></td>
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

