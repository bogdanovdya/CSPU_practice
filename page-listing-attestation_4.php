<?php
/**Template Name: Аттестация студентов-практикантов страница (4 курс)*/

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
                        <th>Аттестация</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'students4',
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
                        $competence_inf = get_post_meta($students, 'competence_inf_4', true);
						/*if(empty(get_the_title($competence_inf))){ echo $competence_inf;}*/
                        $competence_eng = get_post_meta($students, 'competence_eng_4', true);                        
                        $competence_ped = get_post_meta($students, 'competence_ped_4', true);
                        $competence_psy = get_post_meta($students, 'competence_psy_4', true);
                        $competence_shgizt = get_post_meta($students, 'competence_shgizt_4', true);
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
									<td><a href="<?php the_permalink($competence_eng);?>">
											<?php echo round(get_post_meta($competence_eng, 'Kint', true),2); ?></a> </td>
								</tr>
							<?php }; ?>	
                    <?php  }; ?>
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

