<?php
/**
 * The Template for displaying competence_ozd single posts
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

				$competence_ozd = get_the_ID();
				$student = get_post_meta($competence_ozd, 'student', true);
				$itog_mark_x1 = get_post_meta( $competence_ozd, 'OPK-2_1_1_zan', true ) + get_post_meta( $competence_ozd, 'OPK-2_1_2_zan', true ) + get_post_meta( $competence_ozd, 'PK-4_2_1_zan', true ) + get_post_meta( $competence_ozd, 'PK-4_2_2_zan', true );
				$itog_mark_x2 = get_post_meta( $competence_ozd, 'OPK-2_1_1_vosp', true ) + get_post_meta( $competence_ozd, 'OPK-2_1_2_vosp', true ) + get_post_meta( $competence_ozd, 'PK-4_2_1_vosp', true ) + get_post_meta( $competence_ozd, 'PK-4_2_2_vosp', true );
				update_post_meta($competence_ozd, 'itog_mark_x1', $itog_mark_x1);
				update_post_meta($competence_ozd, 'itog_mark_x2', $itog_mark_x2);
				$itog_mark_k5 = ((($itog_mark_x1 + $itog_mark_x2)/4)/2);
				update_post_meta($competence_ozd, 'itog_mark_k5', $itog_mark_k5);


				?>
				<div class="entry-content">
                    <table>
						<thead>
                        <tr>
							<th colspan="3"><a href="<?php the_permalink($student) ?>"><?php echo get_post_meta( $student, 'name_student', true ); ?></a></th>
						</tr>
						<tr>
							<th>Компетенции/показатели (ЗУВ)</th>
							<th>Учебное занятие</th>
							<th>Восп.-озд. меропр.</th>
						</tr>
						</thead>
						<tr>
							<td colspan="3"><b>ОПК–2. Способность осуществлять обучение, воспитание и развитие с учетом социальных, возрастных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся</b></td>
						</tr>
						<tr>
							<td>1.1. Уметь выбирать технологию, исходя из задач, содержания здоровьесбережения и особенностей подрастающего человека</td>
							<td><?php echo get_post_meta( $competence_ozd, 'OPK-2_1_1_zan', true ); ?></td>
							<td><?php echo get_post_meta( $competence_ozd, 'OPK-2_1_1_vosp', true ); ?></td>
						</tr>
						<tr>
							<td>1.2. Владеть приемами организации здоровьесберегающей деятельности при использовании различных современных технологий и методик здоровьесбережения, которые направлены на формирование культуры здоровья/td>
							<td><?php echo get_post_meta( $competence_ozd, 'OPK-2_1_2_zan', true ); ?></td>
							<td><?php echo get_post_meta( $competence_ozd, 'OPK-2_1_2_vosp', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3"><b>ПК-4. Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов</b></td>
						</tr>
						<tr>
							<td>2.1. Уметь использовать факторы образовательной среды для формирования комплексного благополучия обучающихся</td>
							<td><?php echo get_post_meta( $competence_ozd, 'PK-4_2_1_zan', true ); ?></td>
							<td><?php echo get_post_meta( $competence_ozd, 'PK-4_2_1_vosp', true ); ?></td>
						</tr>
						<tr>
							<td>2.2. Владеть способами создания условий в образовательной организации, обеспечивающих сохранение и укрепление здоровья подрастающего человека</td>
							<td><?php echo get_post_meta( $competence_ozd, 'PK-4_2_2_zan', true ); ?></td>
							<td><?php echo get_post_meta( $competence_ozd, 'PK-4_2_2_vosp', true ); ?></td>
						</tr>
						<tr>
							<td colspan="2"><b>Итоговый балл (теоретически возможный)</b></td>
							<td><?php echo  round(get_post_meta( $competence_ozd, 'itog_mark_k5', true ),2); ?></td>
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

