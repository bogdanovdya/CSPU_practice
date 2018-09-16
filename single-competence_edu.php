<?php
/**
 * The Template for displaying competence_edu single posts
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

				$competence_edu = get_the_ID();
				$student = get_post_meta($competence_edu, 'student', true);
				$itog_mark_x1 = get_post_meta( $competence_edu, 'OPK-5_1_1_uch', true ) + get_post_meta( $competence_edu, 'OPK-5_1_2_uch', true ) + get_post_meta( $competence_edu, 'PK-3_2_1_uch', true ) + get_post_meta( $competence_edu, 'PK-3_2_2_uch', true ) + get_post_meta( $competence_edu, 'PK-3_2_3_uch', true ) + get_post_meta( $competence_edu, 'PK-3_2_4_uch', true ) + get_post_meta( $competence_edu, 'PK-7_3_1_uch', true ) + get_post_meta( $competence_edu, 'PK-7_3_2_uch', true );
				$itog_mark_x2 = get_post_meta( $competence_edu, 'OPK-5_1_1_neuch', true ) + get_post_meta( $competence_edu, 'OPK-5_1_2_neuch', true ) + get_post_meta( $competence_edu, 'PK-3_2_1_neuch', true ) + get_post_meta( $competence_edu, 'PK-3_2_2_neuch', true ) + get_post_meta( $competence_edu, 'PK-3_2_3_neuch', true ) + get_post_meta( $competence_edu, 'PK-3_2_4_neuch', true ) + get_post_meta( $competence_edu, 'PK-7_3_1_neuch', true ) + get_post_meta( $competence_edu, 'PK-7_3_2_neuch', true );
				update_post_meta($competence_edu, 'itog_mark_x1', $itog_mark_x1);
				update_post_meta($competence_edu, 'itog_mark_x2', $itog_mark_x2);
				$itog_mark_k3 = ((($itog_mark_x1 + $itog_mark_x2)/20)/2);
				update_post_meta($competence_edu, 'itog_mark_k3', $itog_mark_k3);


				?>
				<div class="entry-content">
                    <table>
						<thead>
                        <tr>
							<th colspan="3"><a href="<?php the_permalink($student) ?>"><?php $info = get_userdata(get_post_meta( $student, 'name_student', true )); echo($info->last_name . " " . $info->first_name);  ?></a> </th>
						</tr>
						<tr>
							<th>Компетенции/показатели (ЗУВ)</th>
							<th>Учебное занятие</th>
							<th>Воспитательное мерояприятие</th>
						</tr>
						</thead>
						<tr>
							<td colspan="3"><b>ОПК-5. Владение основами профессиональной этики и речевой культуры</b></td>
						</tr>
						<tr>
							<td>1.1. Уметь оценивать факты и явления образовательной действительности с точки зрения профессиональной этики речевой культуры</td>
							<td><?php echo get_post_meta( $competence_edu, 'OPK-5_1_1_uch', true ); ?></td>
							<td><?php echo get_post_meta( $competence_edu, 'OPK-5_1_1_neuch', true ); ?></td>
						</tr>
						<tr>
							<td>1.2. Владеть навыками самоконтроля своих действий как непосредственно в процессе образовательной деятельности, так и вне ее</td>
							<td><?php echo get_post_meta( $competence_edu, 'OPK-5_1_2_uch', true ); ?></td>
							<td><?php echo get_post_meta( $competence_edu, 'OPK-5_1_2_neuch', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3"><b>ПК-3 Способность решать задачи воспитания и духовно-нравственного развития обучающихся в учебной и внеучебной деятельности</b></td>
						</tr>
						<tr>
							<td>2.1. Уметь формулировать задачи воспитания и духовно-нравственного развития в учебной и внеучебной деятельности</td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-3_2_1_uch', true ); ?></td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-3_2_1_neuch', true ); ?></td>
						</tr>
						<tr>
							<td>2.2. Уметь планировать содержание программы воспитания и духовно-нравственного развития</td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-3_2_2_uch', true ); ?></td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-3_2_2_neuch', true ); ?></td>
						</tr>
						<tr>
							<td>2.3. Владеть методологией развития личности</td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-3_2_3_uch', true ); ?></td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-3_2_3_neuch', true ); ?></td>
						</tr>
						<tr>
							<td>2.4. Владеть технологиями развития личности</td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-3_2_4_uch', true ); ?></td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-3_2_4_neuch', true ); ?></td>
						</tr>
						<tr>
							<td colspan="3"><b>ПК-7. Способность организовывать сотрудничество обучающихся, поддерживать их активность, инициативность и самостоятельность, развивать творческие способности</b></td>
						</tr>
						<tr>
							<td>3.1. Уметь организовывать сотрудничество обучающихся, поддерживать их активность, инициативность и самостоятельность</td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-7_3_1_uch', true ); ?></td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-7_3_1_neuch', true ); ?></td>
						</tr>
						<tr>
							<td>3.2. Владеть приемами организационно управленческой деятельности учителя</td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-7_3_2_uch', true ); ?></td>
							<td><?php echo get_post_meta( $competence_edu, 'PK-7_3_2_neuch', true ); ?></td>
						</tr>

						<tr>
							<td colspan="2"><b>Итоговый балл (теоретически возможный)</b></td>
							<td><?php echo  round(get_post_meta( $competence_edu, 'itog_mark_k3', true ),2); ?></td>
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

