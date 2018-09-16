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

				$competence_inf_5 = get_the_ID();
				$student = get_post_meta($competence_inf_5, 'student', true);
				$student_id = get_post_meta($student, 'name_student', true);

				$competence_eng_5 = get_post_meta($student, 'competence_eng_4', true);				
				$competence_ped_5 = get_post_meta($student, 'competence_ped_4', true);
				$competence_psy_5 = get_post_meta($student, 'competence_psy_4', true);
				$competence_shgizt_4 = get_post_meta($student, 'competence_shgizt_4', true);
				$competence_econ_eng = $competence_eng_5;
				
				$inf_mark_x1 = get_post_meta( $competence_inf_5, 'PK-2_1_1_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_2_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_3_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_4_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_5_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_1_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_2_zan1', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_1_zan1', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_2_zan1', true );
				$inf_mark_x2 = get_post_meta( $competence_inf_5, 'PK-2_1_1_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_2_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_3_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_4_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_5_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_1_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_2_zan2', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_1_zan2', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_2_zan2', true );
				$inf_mark_x3 = get_post_meta( $competence_inf_5, 'PK-2_1_1_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_2_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_3_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_4_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_5_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_1_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_2_zan3', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_1_zan3', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_2_zan3', true );
				$inf_mark_x4 = get_post_meta( $competence_inf_5, 'PK-4_1_1', true ) + get_post_meta( $competence_inf_5, 'PK-4_1_2', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_1', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_2', true );
				update_post_meta($competence_inf_5, 'inf_mark_x1', $inf_mark_x1);
				update_post_meta($competence_inf_5, 'inf_mark_x2', $inf_mark_x2);
				update_post_meta($competence_inf_5, 'inf_mark_x3', $inf_mark_x3);
				update_post_meta($competence_inf_5, 'inf_mark_x4', $inf_mark_x4);
				/**/
				$PK_2_inf = (get_post_meta( $competence_inf_5, 'PK-2_1_1_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_2_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_3_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_4_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_5_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_1_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_2_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_3_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_4_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_5_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_1_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_2_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_3_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_4_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-2_1_5_zan3', true ))/60;
				update_post_meta($competence_inf_5, 'PK_2_inf', $PK_2_inf);
				$PK_4_inf = (get_post_meta( $competence_inf_5, 'PK-4_2_1_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_2_zan1', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_1_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_2_zan2', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_1_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-4_2_2_zan3', true ) + get_post_meta( $competence_inf_5, 'PK-4_1_1', true ) + get_post_meta( $competence_inf_5, 'PK-4_1_2', true ))/32;
				update_post_meta($competence_inf_5, 'PK_4_inf', $PK_4_inf);
				$OPK_3_inf = (get_post_meta( $competence_inf_5, 'OPK-3_2_1', true ) + get_post_meta( $competence_inf_5, 'OPK-3_2_2', true ))/8;
				update_post_meta($competence_inf_5, 'OPK_3_inf', $OPK_3_inf);
				/**/
				$K1 = (($inf_mark_x1 / 36 + $inf_mark_x2 / 36 + $inf_mark_x3 / 36 + $inf_mark_x4 / 16)/4);
				update_post_meta($competence_inf_5, 'K1', $K1);
				
				$econ_eng_mark_x1 = get_post_meta( $competence_econ_eng, 'PK-2_1_4_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_5_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_6_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_7_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_8_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_9_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_10_zan1', true );
				$econ_eng_mark_x2 = get_post_meta( $competence_econ_eng, 'PK-2_1_4_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_5_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_6_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_7_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_8_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_9_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_10_zan2', true );
				$econ_eng_mark_x3 = get_post_meta( $competence_econ_eng, 'PK-2_1_4_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_5_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_6_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_7_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_8_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_9_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_10_zan3', true );
				$econ_eng_mark_x4 = get_post_meta( $competence_econ_eng, 'PK-2_1_11', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_12', true );
				update_post_meta($competence_econ_eng, 'econ_eng_mark_x1', $econ_eng_mark_x1);
				update_post_meta($competence_econ_eng, 'econ_eng_mark_x2', $econ_eng_mark_x2);
				update_post_meta($competence_econ_eng, 'econ_eng_mark_x3', $econ_eng_mark_x3);
				update_post_meta($competence_econ_eng, 'econ_eng_mark_x4', $econ_eng_mark_x4);
				/**/
				$PK_2_eng = (get_post_meta( $competence_econ_eng, 'PK-2_1_4_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_5_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_6_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_7_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_8_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_9_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_10_zan1', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_4_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_5_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_6_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_7_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_8_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_9_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_10_zan2', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_4_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_5_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_6_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_7_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_8_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_9_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_10_zan3', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_11', true ) + get_post_meta( $competence_econ_eng, 'PK-2_1_12', true ))/92;
				update_post_meta($competence_econ_eng, 'PK_2_eng', $PK_2_eng);
				/**/
				$K2 = (($econ_eng_mark_x1 / 28 + $econ_eng_mark_x2 / 28 + $econ_eng_mark_x3 / 28 + $econ_eng_mark_x4 / 8)/4);
				update_post_meta($competence_inf_5, 'K2', $K2);
				
				$ped_mark_x1 = get_post_meta( $competence_ped_5, 'PK-3_1_1_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-3_1_2_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-3_1_3_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-7_2_1_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-7_2_2_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-5_3_1_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-5_3_2_zan1' , true);
				$ped_mark_x2 = get_post_meta( $competence_ped_5, 'PK-3_1_1_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-3_1_2_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-3_1_3_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-7_2_1_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-7_2_2_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-5_3_1_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-5_3_2_zan2' , true);
				update_post_meta($competence_ped_5, 'ped_mark_x1', $ped_mark_x1);
				update_post_meta($competence_ped_5, 'ped_mark_x2', $ped_mark_x2);
				/**/
				$PK_3_ped = (get_post_meta( $competence_ped_5, 'PK-3_1_1_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-3_1_2_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-3_1_3_zan1' , true) +  get_post_meta( $competence_ped_5, 'PK-3_1_1_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-3_1_2_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-3_1_3_zan2' , true))/24;
				update_post_meta($competence_ped_5, 'PK_3_ped', $PK_3_ped);
				$PK_7_ped = (get_post_meta( $competence_ped_5, 'PK-7_2_1_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-7_2_2_zan1' , true) + get_post_meta( $competence_ped_5, 'PK-7_2_1_zan2' , true) + get_post_meta( $competence_ped_5, 'PK-7_2_2_zan2' , true))/16;
				update_post_meta($competence_ped_5, 'PK_7_ped', $PK_7_ped);
				$OPK_5_ped = (get_post_meta( $competence_ped_5, 'OPK-5_3_1_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-5_3_2_zan1' , true) + get_post_meta( $competence_ped_5, 'OPK-5_3_1_zan2' , true) + get_post_meta( $competence_ped_5, 'OPK-5_3_2_zan2' , true))/16;
				update_post_meta($competence_ped_5, 'OPK_5_ped', $OPK_5_ped);
				/**/
				$K3 = (($ped_mark_x1 / 28 + $ped_mark_x2 / 28 )/2);
				update_post_meta($competence_inf_5, 'K3', $K3);
				
				$psy_mark_x1 = get_post_meta( $competence_psy_5, 'PK-2_1_1_zan1' , true) + get_post_meta( $competence_psy_5, 'PK-2_1_2_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-2_2_1_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-2_2_2_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-3_3_1_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-3_3_2_zan1' , true);
				$psy_mark_x2 = get_post_meta( $competence_psy_5, 'PK-2_1_1_zan2' , true) + get_post_meta( $competence_psy_5, 'PK-2_1_2_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-2_2_1_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-2_2_2_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-3_3_1_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-3_3_2_zan2' , true);
				update_post_meta($competence_psy_5, 'psy_mark_x1', $psy_mark_x1);
				update_post_meta($competence_psy_5, 'psy_mark_x2', $psy_mark_x2);
				/**/
				$PK_2_psy = (get_post_meta( $competence_psy_5, 'PK-2_1_1_zan1' , true) + get_post_meta( $competence_psy_5, 'PK-2_1_2_zan1' , true) + get_post_meta( $competence_psy_5, 'PK-2_1_1_zan2' , true) + get_post_meta( $competence_psy_5, 'PK-2_1_2_zan2' , true))/16;
				update_post_meta($competence_psy_5, 'PK_2_psy', $PK_2_psy);
				$OPK_2_psy = (get_post_meta( $competence_psy_5, 'OPK-2_2_1_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-2_2_2_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-2_2_1_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-2_2_2_zan2' , true))/16;
				update_post_meta($competence_psy_5, 'OPK_2_psy', $OPK_2_psy);
				$OPK_3_psy = (get_post_meta( $competence_psy_5, 'OPK-3_3_1_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-3_3_2_zan1' , true) + get_post_meta( $competence_psy_5, 'OPK-3_3_1_zan2' , true) + get_post_meta( $competence_psy_5, 'OPK-3_3_2_zan2' , true))/16;
				update_post_meta($competence_psy_5, 'OPK_3_psy', $OPK_3_psy);
				/**/
				$K4 = (($psy_mark_x1 / 24 + $psy_mark_x2 / 24 )/2);
				update_post_meta($competence_inf_5, 'K4', $K4);
				
				$shgizt_mark_x1 = get_post_meta( $competence_shgizt_4, 'PK-4_1_1_zan1' , true) + get_post_meta( $competence_shgizt_4, 'PK-4_1_2_zan1' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_1_zan1' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_2_zan1' , true);
				$shgizt_mark_x2 = get_post_meta( $competence_shgizt_4, 'PK-4_1_1_zan2' , true) + get_post_meta( $competence_shgizt_4, 'PK-4_1_2_zan2' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_1_zan2' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_2_zan2' , true);
				update_post_meta($competence_shgizt_4, 'shgizt_mark_x1', $shgizt_mark_x1);
				update_post_meta($competence_shgizt_4, 'shgizt_mark_x2', $shgizt_mark_x2);
				/**/
				$PK_4_shgizt = (get_post_meta( $competence_shgizt_4, 'PK-4_1_1_zan1' , true) + get_post_meta( $competence_shgizt_4, 'PK-4_1_2_zan1' , true) + get_post_meta( $competence_shgizt_4, 'PK-4_1_1_zan2' , true) + get_post_meta( $competence_shgizt_4, 'PK-4_1_2_zan2' , true))/16;
				update_post_meta($competence_shgizt_4, '$PK_4_shgizt', $PK_4_shgizt);
				$OPK_2_shgizt = (get_post_meta( $competence_shgizt_4, 'OPK-2_2_1_zan1' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_2_zan1' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_1_zan2' , true) + get_post_meta( $competence_shgizt_4, 'OPK-2_2_2_zan2' , true))/16;
				update_post_meta($competence_shgizt_4, '$OPK_2_shgizt', $OPK_2_shgizt);
				/**/
				$K5 = (($shgizt_mark_x1 / 16 + $shgizt_mark_x2 / 16 )/2);
				update_post_meta($competence_inf_5, 'K5', $K5);
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
					<div class="container">
						<table>
							<tr>
								<th colspan="14"><a href="<?php the_permalink($student) ?>"><?php $info = get_userdata(get_post_meta( $student, 'name_student', true )); echo($info->last_name . " " . $info->first_name); ?></a></th>
							</tr>
							<tr>			
								<td rowspan="3" width="100">Компетенции / показатели (ЗУВ)</td>
								<td rowspan="3">Макс. балл</td>
								<td colspan="14">Рейтинговые баллы</td>
							</tr>
							<tr>
								<td colspan="4">Информатика</td>
								<td colspan="4">Английский язык</td>
								<td colspan="2">Педагогика</td>
								<td colspan="2">Психология</td>
								<td colspan="2">ШГиЗТ</td>				
							</tr>
							<tr>			
								<td>Зан.<br>1.1</td>
								<td>Зан.<br>1.2</td>
								<td>Зан.<br>1.3</td>
								<td>Внеур.<br>1.4</td>
								<td>Зан.<br>2.1</td>
								<td>Зан.<br>2.2</td>
								<td>Зан.<br>2.3</td>
								<td>Внеур.<br>2.4</td>
								<td>Зан.<br>3.1</td>
								<td>Восп.Зан.<br>3.2</td>
								<td>Зан.<br>4.1</td>
								<td>Сост.характ.<br>4.2</td>
								<td>Зан.<br>5.1</td>
								<td>Восп.-озд. меропр</td>
							</tr>
							<tr>		
								<td colspan="16"><b>ПК-2. Способность использовать современные методы и технологии обучения и диагностики</b></td>
							</tr>
							<tr>			
								<td>Уметь развивать познавательную активность, используя  на уроке проблемное обучение и/ или эвристический подход</td>
								<td>4</td>								
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_1_zan1', true ); ?>" name="PK-2_1_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_1_zan2', true ); ?>" name="PK-2_1_1_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_1_zan3', true ); ?>" name="PK-2_1_1_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь применять средства наглядности, в том числе электронные образовательные ресурсы, в целях повышения эффективности урока</td>
								<td>4</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_2_zan1', true ); ?>" name="PK-2_1_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_2_zan2', true ); ?>" name="PK-2_1_2_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_2_zan3', true ); ?>" name="PK-2_1_2_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь планировать и реализовывать различные формы и методы контроля</td>
								<td>4</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_3_zan1', true ); ?>" name="PK-2_1_3_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_3_zan2', true ); ?>" name="PK-2_1_3_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_3_zan3', true ); ?>" name="PK-2_1_3_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь оценивать результаты практической деятельности обучающихся и выявлять пробелы в освоении материала</td>
								<td>4</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_4_zan1', true ); ?>" name="PK-2_1_4_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_4_zan2', true ); ?>" name="PK-2_1_4_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_4_zan3', true ); ?>" name="PK-2_1_4_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь создавать на уроке условия для учащихся, которые позволяют им  самостоятельно добывать знания, осознавать содержание своей деятельности</td>
								<td>4</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_5_zan1', true ); ?>" name="PK-2_1_5_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_5_zan2', true ); ?>" name="PK-2_1_5_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-2_1_5_zan3', true ); ?>" name="PK-2_1_5_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь ставить цели обучения и в соответствии с ними отбирать языковой и речевой материал на занятия</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_4_zan1', true ); ?>" name="PK-2_1_4_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_4_zan2', true ); ?>" name="PK-2_1_4_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_4_zan3', true ); ?>" name="PK-2_1_4_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Грамотно выстраивать структуру урока</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_5_zan1', true ); ?>" name="PK-2_1_5_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_5_zan2', true ); ?>" name="PK-2_1_5_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_5_zan3', true ); ?>" name="PK-2_1_5_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Давать грамотные установки для работы с материалом урока</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_6_zan1', true ); ?>" name="PK-2_1_6_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_6_zan2', true ); ?>" name="PK-2_1_6_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_6_zan3', true ); ?>" name="PK-2_1_6_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Планировать и применять технологии, целесообразные для данного урока</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_7_zan1', true ); ?>" name="PK-2_1_7_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_7_zan2', true ); ?>" name="PK-2_1_7_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_7_zan3', true ); ?>" name="PK-2_1_7_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Оценивать работу учащихся в процессе использования современных методов и технологий</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_8_zan1', true ); ?>" name="PK-2_1_8_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_8_zan2', true ); ?>" name="PK-2_1_8_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_8_zan3', true ); ?>" name="PK-2_1_8_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Оформлять конспект и технологическую карту урока</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_9_zan1', true ); ?>" name="PK-2_1_9_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_9_zan2', true ); ?>" name="PK-2_1_9_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_9_zan3', true ); ?>" name="PK-2_1_9_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Анализировать собственную деятельность на уроке</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_10_zan1', true ); ?>" name="PK-2_1_10_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_10_zan2', true ); ?>" name="PK-2_1_10_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_10_zan3', true ); ?>" name="PK-2_1_10_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь планировать и применять приемы, методы, обеспечивающие достижение личностных, метапредметных и предметных результатов обучения, в процессе внеклассной работы</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_11', true ); ?>" name="PK-2_1_11"/></td>
								<td>&nbsp</td>							
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Оформлять проект / <i>разработку мероприятия</i></td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_eng_5, 'PK-2_1_12', true ); ?>" name="PK-2_1_12"/></td>
								<td>&nbsp</td>							
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь осуществлять контроль и оценку учебных и личностных достижений обучающихся</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'PK-2_1_1_zan1', true ); ?>" name="PK-2_1_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'PK-2_1_1_zan2', true ); ?>" name="PK-2_1_1_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Владеть средствами использования современных методов и технологий обучения и диагностики</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'PK-2_1_2_zan1', true ); ?>" name="PK-2_1_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'PK-2_1_2_zan2', true ); ?>" name="PK-2_1_2_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td colspan="16"><b>ПК-3. Способность решать задачи воспитания и духовно-нравственного развития обучающихся в учебной и внеучебной деятельности</b></td>
							</tr>
							<tr>
								<td>Уметь формулировать задачи воспитания и духовно-нравственного развития в учебной и внеучебной деятельности</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-3_1_1_zan1', true ); ?>" name="PK-3_1_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-3_1_1_zan2', true ); ?>" name="PK-3_1_1_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>			
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь планировать воспитательный процесс</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-3_1_2_zan1', true ); ?>" name="PK-3_1_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-3_1_2_zan2', true ); ?>" name="PK-3_1_2_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>			
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Владеть приемами анализа и контроля воспитательного процесса</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-3_1_3_zan1', true ); ?>" name="PK-3_1_3_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-3_1_3_zan2', true ); ?>" name="PK-3_1_3_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>			
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td colspan="16"><b>ПК-4. Способность использовать возможности образовательной среды для достижения личностных, метапредметных и предметных результатов обучения и обеспечения качества учебно-воспитательного процесса средствами преподаваемых предметов</b></td>
							</tr>
							<tr>
								<td>Уметь планировать формирование личностных, метапредметных и предметных результатов обучения на уроке</td>
								<td>4</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_2_1_zan1', true ); ?>" name="PK-4_2_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_2_1_zan2', true ); ?>" name="PK-4_2_1_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_2_1_zan3', true ); ?>" name="PK-4_2_1_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь использовать приемы активизации познавательной деятельности обучающихся, дифференциации деятельности обучающихся</td>
								<td>4</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_2_2_zan1', true ); ?>" name="PK-4_2_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_2_2_zan2', true ); ?>" name="PK-4_2_2_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_2_2_zan3', true ); ?>" name="PK-4_2_2_zan3"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь планировать формирование личностных, метапредметных и предметных результатов обучения во внеурочной деятельности</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_1_1', true ); ?>" name="PK-4_1_1"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь организовывать мероприятие с учетом возрастных и индивидуальных особенностей обучающихся; целесообразно использовать ИКТ</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'PK-4_1_2', true ); ?>" name="PK-4_1_2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь использовать факторы образовательной среды для формирования комплексного благополучия обучающихся</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_shgizt_4, 'PK-4_1_1_zan1', true ); ?>" name="PK-4_1_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_shgizt_4, 'PK-4_1_1_zan2', true ); ?>" name="PK-4_1_1_zan2"/></td>
							</tr>
							<tr>
								<td>Владеть способами создания условий в образовательной организации, обеспечивающих сохранение и укрепление здоровья подрастающего человека</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_shgizt_4, 'PK-4_1_2_zan1', true ); ?>" name="PK-4_1_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_shgizt_4, 'PK-4_1_2_zan2', true ); ?>" name="PK-4_1_2_zan2"/></td>
							</tr>
							<tr>
								<td colspan="16"><b>ПК-7. Способность организовывать сотрудничество обучающихся, поддерживать их активность, инициативность и самостоятельность, развивать творческие способности</b></td>
							</tr>
							<tr>
								<td>Уметь осуществлять организацию сотрудничества и реализацию мероприятий, направленных на проявление и развитие активности и инициативности обучающихся</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-7_2_1_zan1', true ); ?>" name="PK-7_2_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-7_2_1_zan2', true ); ?>" name="PK-7_2_1_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>							
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Владеть методами, позволяющими осуществлять организацию самостоятельной работы, а также оценку потенциала обучающихся</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-7_2_2_zan1', true ); ?>" name="PK-7_2_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'PK-7_2_2_zan2', true ); ?>" name="PK-7_2_2_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td colspan="16"><b>ОПК-2. Способность осуществлять обучение, воспитание и развитие с учетом социальных, возрастных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся</b></td>
							</tr>
							<tr>
								<td>Уметь организовывать образовательный и воспитательный процессы, учитывая  возрастные, социальные и психофизические особенности обучающихся</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-2_2_1_zan1', true ); ?>" name="OPK-2_2_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-2_2_1_zan2', true ); ?>" name="OPK-2_2_1_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Владеть способами осуществления обучения, воспитания и развития детей с учетом социальных, возрастных, психофизических и индивидуальных особенностей, в том числе особых образовательных потребностей обучающихся</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-2_2_2_zan1', true ); ?>" name="OPK-2_2_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-2_2_2_zan2', true ); ?>" name="OPK-2_2_2_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Уметь  выбирать технологию, исходя из задач, содержания здоровьесбережения и особенностей подрастающего человека</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_shgizt_4, 'OPK-2_2_1_zan1', true ); ?>" name="OPK-2_2_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_shgizt_4, 'OPK-2_2_1_zan2', true ); ?>" name="OPK-2_2_1_zan2"/></td>
							</tr>
							<tr>
								<td>Владеть приемами организации здоровьесберегающей деятельности при использовании различных современных технологий и методик здоровьесбережения, которые направлены на формирование культуры здоровья</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_shgizt_4, 'OPK-2_2_2_zan1', true ); ?>" name="OPK-2_2_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_shgizt_4, 'OPK-2_2_2_zan2', true ); ?>" name="OPK-2_2_2_zan2"/></td>
							</tr>
							<tr>
								<td colspan="16"><b>ОПК-3. Готовность к психолого-педагогическому споровождению учебно-воспитательного процесса</b></td>
							</tr>
							<tr>
								<td>Уметь применять приемы психолого-педагогического сопровождения учебно-воспитательного процесса</td>
								<td>4</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'OPK-3_2_1_zan1', true ); ?>" name="OPK-3_2_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'OPK-3_2_1_zan2', true ); ?>" name="OPK-3_2_1_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'OPK-3_2_1_zan3', true ); ?>" name="OPK-3_2_1_zan3"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'OPK-3_2_1', true ); ?>" name="OPK-3_2_1"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_3_1_zan1', true ); ?>" name="OPK-3_3_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_3_1_zan2', true ); ?>" name="OPK-3_3_1_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Владеть приемами психолого-педагогического сопровождения учебно-воспитательного процесса</td>
								<td>4</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'OPK-3_2_2_zan1', true ); ?>" name="OPK-3_2_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'OPK-3_2_2_zan2', true ); ?>" name="OPK-3_2_2_zan2"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'OPK-3_2_2_zan3', true ); ?>" name="OPK-3_2_2_zan3"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_inf_5, 'OPK-3_2_2', true ); ?>" name="OPK-3_2_2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_3_2_zan1', true ); ?>" name="OPK-3_3_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_psy_5, 'OPK-3_3_2_zan2', true ); ?>" name="OPK-3_3_2_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>		
							<tr>
								<td colspan="16"><b>ОПК-5. Владение основами профессиональной этики и речевой культуры</b></td>
							</tr>
							<tr>
								<td>Уметь соблюдать профессиональную педагогическую этику и речевую культуру в рамках общения с субъектами образовательного процесса</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-5_3_1_zan1', true ); ?>" name="OPK-5_3_1_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-5_3_1_zan2', true ); ?>" name="OPK-5_3_1_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>								
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td>Владеть навыками самоконтроля своих действий как непосредственно в процессе образовательной деятельности, так и вне ее</td>
								<td>4</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-5_3_2_zan1', true ); ?>" name="OPK-5_3_2_zan1"/></td>
								<td><input type="number" min="0" max="4" size = "1" step="1" value ="<?php echo get_post_meta( $competence_ped_5, 'OPK-5_3_2_zan2', true ); ?>" name="OPK-5_3_2_zan2"/></td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>								
							</tr>		
							<tr>
								<td><b>Коэффициент полноты сформированности компетенций по результатам текущего контроля</b></td>
								<td>&nbsp</td>
								<td colspan="4">K1=<?php echo round($K1,2); ?></td>
								<td colspan="4">K2=<?php echo round($K2,2); ?></td>
								<td colspan="2">K3=<?php echo round($K3,2); ?></td>
								<td colspan="2">K4=<?php echo round($K4,2); ?></td>
								<td colspan="2">K5=<?php echo round($K5,2); ?></td>
							</tr>
						</table>
					</div>
					<br>
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
	if (in_array('administrator', $user_role) or in_array('manager', $user_role) or in_array('univer_manager', $user_role) or in_array('_', $user_role))
	{
		update_post_meta($competence_inf_5, 'PK-2_1_1_zan1', $_POST["PK-2_1_1_zan1"]);
		update_post_meta($competence_inf_5, 'PK-2_1_1_zan2', $_POST["PK-2_1_1_zan2"]);
		update_post_meta($competence_inf_5, 'PK-2_1_1_zan3', $_POST["PK-2_1_1_zan3"]);

		update_post_meta($competence_inf_5, 'PK-2_1_2_zan1', $_POST["PK-2_1_2_zan1"]);
		update_post_meta($competence_inf_5, 'PK-2_1_2_zan2', $_POST["PK-2_1_2_zan2"]);
		update_post_meta($competence_inf_5, 'PK-2_1_2_zan3', $_POST["PK-2_1_2_zan3"]);

		update_post_meta($competence_inf_5, 'PK-2_1_3_zan1', $_POST["PK-2_1_3_zan1"]);
		update_post_meta($competence_inf_5, 'PK-2_1_3_zan2', $_POST["PK-2_1_3_zan2"]);
		update_post_meta($competence_inf_5, 'PK-2_1_3_zan3', $_POST["PK-2_1_3_zan3"]);

		update_post_meta($competence_inf_5, 'PK-2_1_4_zan1', $_POST["PK-2_1_4_zan1"]);
		update_post_meta($competence_inf_5, 'PK-2_1_4_zan2', $_POST["PK-2_1_4_zan2"]);
		update_post_meta($competence_inf_5, 'PK-2_1_4_zan3', $_POST["PK-2_1_4_zan3"]);

		update_post_meta($competence_inf_5, 'PK-2_1_5_zan1', $_POST["PK-2_1_5_zan1"]);
		update_post_meta($competence_inf_5, 'PK-2_1_5_zan2', $_POST["PK-2_1_5_zan2"]);
		update_post_meta($competence_inf_5, 'PK-2_1_5_zan3', $_POST["PK-2_1_5_zan3"]);

		update_post_meta($competence_eng_5, 'PK-2_1_4_zan1', $_POST["PK-2_1_4_zan1"]);
		update_post_meta($competence_eng_5, 'PK-2_1_4_zan2', $_POST["PK-2_1_4_zan2"]);
		update_post_meta($competence_eng_5, 'PK-2_1_4_zan3', $_POST["PK-2_1_4_zan3"]);

		update_post_meta($competence_eng_5, 'PK-2_1_5_zan1', $_POST["PK-2_1_5_zan1"]);
		update_post_meta($competence_eng_5, 'PK-2_1_5_zan2', $_POST["PK-2_1_5_zan2"]);
		update_post_meta($competence_eng_5, 'PK-2_1_5_zan3', $_POST["PK-2_1_5_zan3"]);

		update_post_meta($competence_eng_5, 'PK-2_1_6_zan1', $_POST["PK-2_1_6_zan1"]);
		update_post_meta($competence_eng_5, 'PK-2_1_6_zan2', $_POST["PK-2_1_6_zan2"]);
		update_post_meta($competence_eng_5, 'PK-2_1_6_zan3', $_POST["PK-2_1_6_zan3"]);

		update_post_meta($competence_eng_5, 'PK-2_1_7_zan1', $_POST["PK-2_1_7_zan1"]);
		update_post_meta($competence_eng_5, 'PK-2_1_7_zan2', $_POST["PK-2_1_7_zan2"]);
		update_post_meta($competence_eng_5, 'PK-2_1_7_zan3', $_POST["PK-2_1_7_zan3"]);

		update_post_meta($competence_eng_5, 'PK-2_1_8_zan1', $_POST["PK-2_1_8_zan1"]);
		update_post_meta($competence_eng_5, 'PK-2_1_8_zan2', $_POST["PK-2_1_8_zan2"]);
		update_post_meta($competence_eng_5, 'PK-2_1_8_zan3', $_POST["PK-2_1_8_zan3"]);

		update_post_meta($competence_eng_5, 'PK-2_1_9_zan1', $_POST["PK-2_1_9_zan1"]);
		update_post_meta($competence_eng_5, 'PK-2_1_9_zan2', $_POST["PK-2_1_9_zan2"]);
		update_post_meta($competence_eng_5, 'PK-2_1_9_zan3', $_POST["PK-2_1_9_zan3"]);

		update_post_meta($competence_eng_5, 'PK-2_1_10_zan1', $_POST["PK-2_1_10_zan1"]);
		update_post_meta($competence_eng_5, 'PK-2_1_10_zan2', $_POST["PK-2_1_10_zan2"]);
		update_post_meta($competence_eng_5, 'PK-2_1_10_zan3', $_POST["PK-2_1_10_zan3"]);

		update_post_meta($competence_eng_5, 'PK-2_1_11', $_POST["PK-2_1_11"]);
		update_post_meta($competence_eng_5, 'PK-2_1_12', $_POST["PK-2_1_12"]);

		update_post_meta($competence_psy_5, 'PK-2_1_1_zan1', $_POST["PK-2_1_1_zan1"]);
		update_post_meta($competence_psy_5, 'PK-2_1_1_zan2', $_POST["PK-2_1_1_zan2"]);

		update_post_meta($competence_psy_5, 'PK-2_1_2_zan1', $_POST["PK-2_1_2_zan1"]);
		update_post_meta($competence_psy_5, 'PK-2_1_2_zan2', $_POST["PK-2_1_2_zan2"]);
		
		update_post_meta($competence_ped_5, 'PK-3_1_1_zan1', $_POST["PK-3_1_1_zan1"]);
		update_post_meta($competence_ped_5, 'PK-3_1_1_zan2', $_POST["PK-3_1_1_zan2"]);
		
		update_post_meta($competence_ped_5, 'PK-3_1_2_zan1', $_POST["PK-3_1_2_zan1"]);
		update_post_meta($competence_ped_5, 'PK-3_1_2_zan2', $_POST["PK-3_1_2_zan2"]);
		
		update_post_meta($competence_ped_5, 'PK-3_1_3_zan1', $_POST["PK-3_1_3_zan1"]);
		update_post_meta($competence_ped_5, 'PK-3_1_3_zan2', $_POST["PK-3_1_3_zan2"]);

		update_post_meta($competence_inf_5, 'PK-4_2_1_zan1', $_POST["PK-4_2_1_zan1"]);
		update_post_meta($competence_inf_5, 'PK-4_2_1_zan2', $_POST["PK-4_2_1_zan2"]);
		update_post_meta($competence_inf_5, 'PK-4_2_1_zan3', $_POST["PK-4_2_1_zan3"]);

		update_post_meta($competence_inf_5, 'PK-4_2_2_zan1', $_POST["PK-4_2_2_zan1"]);
		update_post_meta($competence_inf_5, 'PK-4_2_2_zan2', $_POST["PK-4_2_2_zan2"]);
		update_post_meta($competence_inf_5, 'PK-4_2_2_zan3', $_POST["PK-4_2_2_zan3"]);

		update_post_meta($competence_inf_5, 'PK-4_2_3_zan1', $_POST["PK-4_2_3_zan1"]);
		update_post_meta($competence_inf_5, 'PK-4_2_3_zan2', $_POST["PK-4_2_3_zan2"]);
		update_post_meta($competence_inf_5, 'PK-4_2_3_zan3', $_POST["PK-4_2_3_zan3"]);
		
		update_post_meta($competence_inf_5, 'PK-4_1_1', $_POST["PK-4_1_1"]);
		update_post_meta($competence_inf_5, 'PK-4_1_2', $_POST["PK-4_1_2"]);
		
		update_post_meta($competence_shgizt_4, 'PK-4_1_1_zan1', $_POST["PK-4_1_1_zan1"]);
		update_post_meta($competence_shgizt_4, 'PK-4_1_1_zan2', $_POST["PK-4_1_1_zan2"]);
		
		update_post_meta($competence_shgizt_4, 'PK-4_1_2_zan1', $_POST["PK-4_1_2_zan1"]);
		update_post_meta($competence_shgizt_4, 'PK-4_1_2_zan2', $_POST["PK-4_1_2_zan2"]);
		
		update_post_meta($competence_ped_5, 'PK-7_2_1_zan1', $_POST["PK-7_2_1_zan1"]);
		update_post_meta($competence_ped_5, 'PK-7_2_1_zan2', $_POST["PK-7_2_1_zan2"]);
		
		update_post_meta($competence_ped_5, 'PK-7_2_2_zan1', $_POST["PK-7_2_2_zan1"]);
		update_post_meta($competence_ped_5, 'PK-7_2_2_zan2', $_POST["PK-7_2_2_zan2"]);
		
		update_post_meta($competence_psy_5, 'OPK-2_2_1_zan1', $_POST["OPK-2_2_1_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-2_2_1_zan2', $_POST["OPK-2_2_1_zan2"]);
		
		update_post_meta($competence_psy_5, 'OPK-2_2_2_zan1', $_POST["OPK-2_2_2_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-2_2_2_zan2', $_POST["OPK-2_2_2_zan2"]);
		
		update_post_meta($competence_shgizt_4, 'OPK-2_2_1_zan1', $_POST["OPK-2_2_1_zan1"]);
		update_post_meta($competence_shgizt_4, 'OPK-2_2_1_zan2', $_POST["OPK-2_2_1_zan2"]);
		
		update_post_meta($competence_shgizt_4, 'OPK-2_2_2_zan1', $_POST["OPK-2_2_2_zan1"]);
		update_post_meta($competence_shgizt_4, 'OPK-2_2_2_zan2', $_POST["OPK-2_2_2_zan2"]);
		
		update_post_meta($competence_inf_5, 'OPK-3_2_1_zan1', $_POST["OPK-3_2_1_zan1"]);
		update_post_meta($competence_inf_5, 'OPK-3_2_1_zan2', $_POST["OPK-3_2_1_zan2"]);
		update_post_meta($competence_inf_5, 'OPK-3_2_1_zan3', $_POST["OPK-3_2_1_zan3"]);
		update_post_meta($competence_inf_5, 'OPK-3_2_1', $_POST["OPK-3_2_1"]);
		
		update_post_meta($competence_inf_5, 'OPK-3_2_2_zan1', $_POST["OPK-3_2_2_zan1"]);
		update_post_meta($competence_inf_5, 'OPK-3_2_2_zan2', $_POST["OPK-3_2_2_zan2"]);
		update_post_meta($competence_inf_5, 'OPK-3_2_2_zan3', $_POST["OPK-3_2_2_zan3"]);
		update_post_meta($competence_inf_5, 'OPK-3_2_2', $_POST["OPK-3_2_2"]);//

		update_post_meta($competence_psy_5, 'OPK-3_3_1_zan1', $_POST["OPK-3_3_1_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-3_3_1_zan2', $_POST["OPK-3_3_1_zan2"]);
		
		update_post_meta($competence_psy_5, 'OPK-3_3_2_zan1', $_POST["OPK-3_3_2_zan1"]);
		update_post_meta($competence_psy_5, 'OPK-3_3_2_zan2', $_POST["OPK-3_3_2_zan2"]);

		update_post_meta($competence_ped_5, 'OPK-5_3_1_zan1', $_POST["OPK-5_3_1_zan1"]);
		update_post_meta($competence_ped_5, 'OPK-5_3_1_zan2', $_POST["OPK-5_3_1_zan2"]);
		
		update_post_meta($competence_ped_5, 'OPK-5_3_2_zan1', $_POST["OPK-5_3_2_zan1"]);
		update_post_meta($competence_ped_5, 'OPK-5_3_2_zan2', $_POST["OPK-5_3_2_zan2"]);
		
		echo "<script>window.location.href = window.location.href;</script>";
	}
	else
	{
		echo "<script>alert(\"У вас нет прав для редактирования этой записи\");</script>";
	}
}