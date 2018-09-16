<?php
/**Template Name: Текущий контроль страница (5 курс)*/

//* Get da header.
get_header();

//* Fire the post.
the_post();

?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
                <?php the_content(); ?>

            <div class="entry-content">
                <div class="entry-title"><?php the_title(); ?></div>
				  <br>
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
                ?>
			  <br>
                <table class="tablesorter">
                    <thead>
                    <tr>
                        <th>ФИО</th>
                        <th>Курс</th>
                        <th>Группа</th>
                        <th>Профиль</th>
                        <th>Инф</th>
                        <th>Англ/Экон</th>
                        <th>Пед</th>
                        <th>Псих</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'students5',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $students       = get_the_ID();
						$info = get_userdata(get_post_meta( $students, 'name_student', true ));
						$title = $info->last_name . " " . $info->first_name;
                        $group_student = get_post_meta($students, 'group_student', true);
                        $competence_inf = get_post_meta($students, 'competence_inf_5', true);
                        $competence_eng = get_post_meta($students, 'competence_eng_5', true);
                        $competence_econ = get_post_meta($students, 'competence_econ_5', true);
                        $competence_ped = get_post_meta($students, 'competence_ped_5', true);
                        $competence_psy = get_post_meta($students, 'competence_psy_5', true);                        
                        $new_competence_inf = array(
                            'post_title'    => $title,
                            'post_type' => 'competence_inf_5',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_eng = array(
                            'post_title'    => $title,
                            'post_type' => 'competence_eng_5',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_econ = array(
                            'post_title'    => $title,
                            'post_type' => 'competence_econ_5',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_ped = array(
                            'post_title'    => $title,
                            'post_type' => 'competence_ped_5',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_psy = array(
                            'post_title'    => $title,
                            'post_type' => 'competence_psy_5',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
						
						if(empty($competence_inf)){$link_post = wp_insert_post($new_competence_inf);update_post_meta($students, 'competence_inf_5', $link_post); update_post_meta($link_post, 'student', $students);}
                        if(empty($competence_eng)){$link_new_eng = wp_insert_post($new_competence_eng);update_post_meta($students, 'competence_eng_5', $link_new_eng); update_post_meta($link_new_eng, 'student', $students);}
						if(empty($competence_econ)){$link_new_econ = wp_insert_post($new_competence_econ);update_post_meta($students, 'competence_econ_5', $link_new_econ); update_post_meta($link_new_econ, 'student', $students);}
						if(empty($competence_ped)){$link_new_ped = wp_insert_post($new_competence_ped);update_post_meta($students, 'competence_ped_5', $link_new_ped); update_post_meta($link_new_ped, 'student', $students);}
						if(empty($competence_psy)){$link_new_psy = wp_insert_post($new_competence_psy);update_post_meta($students, 'competence_psy_5', $link_new_psy); update_post_meta($link_new_psy, 'student', $students);}
						?>

						
						<?php
						$student_id = get_post_meta( $students, 'name_student', true );
						if(((in_array('student', $user_role) or in_array('student_5', $user_role)) and ($corrent_id == $student_id)) or (in_array('administrator', $user_role) or in_array('manager', $user_role) or in_array('univer_manager', $user_role) or in_array('_', $user_role)))
							{
								?>
										<tr>
											<td><a href="<?php the_permalink(); ?>"><?php echo $title ?></a></td>
											<td> <?php echo get_post_meta( $group_student, 'group_course', true ); ?></td>
											<td><?php echo get_post_meta( $group_student, 'group_number', true ); ?></td>
											<td> <?php echo get_post_meta( $group_student, 'group_direction', true ); ?></td>
											<td><a href="<?php the_permalink($competence_inf);?>">
													<?php echo round(get_post_meta( $competence_inf, 'K1', true ),2); ?></a> </td>
											 <?php if (get_post_meta( $group_student, 'group_direction', true ) == "Информатика. Английский язык")
											{ ?>
												<td><a href="<?php the_permalink($competence_inf_5); ?>">
														<?php echo round(get_post_meta( $competence_inf, 'K2', true ),2); ?></a> </td>
											<?php }
											 else { ?>
												 <td><a href="<?php the_permalink($competence_inf); ?>">
														 <?php echo round(get_post_meta( $competence_inf, 'K2', true ),2); ?></a> </td>
											 <?php } ?>
											<td><a href="<?php the_permalink($competence_inf); ?>">
													<?php echo round(get_post_meta( $competence_inf, 'K3', true ),2); ?></a> </td>
											<td><a href="<?php the_permalink($competence_inf);?>">
													<?php echo round(get_post_meta( $competence_inf, 'K4', true ),2); ?></a> </td>                            
										</tr>
									
								<?php
							}
                        
                    }; ?>
                    </tbody>
                    </table>
            </div>
                        <?php


                    the_posts_pagination( array(
                        'mid_size'  => 5,
                        'prev_text' => 'Назад',
                        'next_text' => 'Вперед',
                    ) );
                }
                ?>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();

