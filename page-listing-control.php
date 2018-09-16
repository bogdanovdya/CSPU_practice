<?php
/**Template Name: Текущий контроль страница*/

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
                    if(empty($user_role)){
                    get_header('Location:http://fmpractica.cspu.ru/');
                    echo 'У Вас нет прав для просмотра этой страницы. Пожалуйста, войдите на сайт.';
                    exit;}
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
                        <th>Восп</th>
                        <th>Псих</th>
                        <th>Оздоров</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'students',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $students       = get_the_ID();
                        $group_student = get_post_meta($students, 'group_student', true);
                        $competence_inf = get_post_meta($students, 'competence_inf', true);
                        $competence_eng = get_post_meta($students, 'competence_eng', true);
                        $competence_econ = get_post_meta($students, 'competence_econ', true);
                        $competence_edu = get_post_meta($students, 'competence_edu', true);
                        $competence_psy = get_post_meta($students, 'competence_psy', true);
                        $competence_ozd = get_post_meta($students, 'competence_ozd', true);
                        $new_competence_inf = array(
                            'post_title'    => get_post_meta( $students, 'name_student', true),
                            'post_type' => 'competence_inf',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_eng = array(
                            'post_title'    => get_post_meta( $students, 'name_student', true),
                            'post_type' => 'competence_eng',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_econ = array(
                            'post_title'    => get_post_meta( $students, 'name_student', true),
                            'post_type' => 'competence_econ',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_edu = array(
                            'post_title'    => get_post_meta( $students, 'name_student', true),
                            'post_type' => 'competence_edu',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_psy = array(
                            'post_title'    => get_post_meta( $students, 'name_student', true),
                            'post_type' => 'competence_psy',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        $new_competence_ozd = array(
                            'post_title'    => get_post_meta( $students, 'name_student', true),
                            'post_type' => 'competence_ozd',
                            'post_content'  => ' ',
                            'post_status'   => 'publish',
                            'post_category' => array( 8,39 )
                        );
                        ?>

                        <tr>
                            <td><a href="<?php the_permalink(); ?>"><?php echo get_post_meta( $students, 'name_student', true ); ?></a></td>
                            <td> <?php echo get_post_meta( $group_student, 'group_course', true ); ?></td>
                            <td><?php echo get_post_meta( $group_student, 'group_number', true ); ?></td>
                            <td> <?php echo get_post_meta( $group_student, 'group_direction', true ); ?></td>
                            <td><a href="<?php if(empty($competence_inf)){$link_post = wp_insert_post($new_competence_inf);update_post_meta($students, 'competence_inf', $link_post); update_post_meta($link_post, 'student', $students); the_permalink($link_post);}else{the_permalink($competence_inf);}?>">
                                    <?php echo round(get_post_meta( $competence_inf, 'itog_mark_k1', true ),2); ?></a> </td>
                             <?php if (get_post_meta( $group_student, 'group_direction', true ) == "Информатика. Английский язык")
                            { ?>
                                <td><a href="<?php if(empty($competence_eng)){$link_new_eng = wp_insert_post($new_competence_eng);update_post_meta($students, 'competence_eng', $link_new_eng); update_post_meta($link_new_eng, 'student', $students); the_permalink($link_new_eng);}else{the_permalink($competence_eng);}?>">
                                        <?php echo round(get_post_meta( $competence_eng, 'itog_mark_k2', true ),2); ?></a> </td>
                            <?php }
                             else { ?>
                                 <td><a href="<?php if(empty($competence_econ)){$link_new_econ = wp_insert_post($new_competence_econ);update_post_meta($students, 'competence_econ', $link_new_econ); update_post_meta($link_new_econ, 'student', $students); the_permalink($link_new_econ);}else{the_permalink($competence_econ);}?>">
                                         <?php echo round(get_post_meta( $competence_econ, 'itog_mark_k2', true ),2); ?></a> </td>
                             <?php } ?>
                            <td><a href="<?php if(empty($competence_edu)){$link_new_edu = wp_insert_post($new_competence_edu);update_post_meta($students, 'competence_edu', $link_new_edu); update_post_meta($link_new_edu, 'student', $students); the_permalink($link_new_edu);}else{the_permalink($competence_edu);}?>">
                                    <?php echo round(get_post_meta( $competence_edu, 'itog_mark_k3', true ),2); ?></a> </td>
                            <td><a href="<?php if(empty($competence_psy)){$link_new_psy = wp_insert_post($new_competence_psy);update_post_meta($students, 'competence_psy', $link_new_psy); update_post_meta($link_new_psy, 'student', $students); the_permalink($link_new_psy);}else{the_permalink($competence_psy);}?>">
                                    <?php echo round(get_post_meta( $competence_psy, 'itog_mark_k4', true ),2); ?></a> </td>
                            <td><a href="<?php if(empty($competence_ozd)){$link_new_ozd = wp_insert_post($new_competence_ozd);update_post_meta($students, 'competence_ozd', $link_new_ozd); update_post_meta($link_new_ozd, 'student', $students); the_permalink($link_new_ozd);}else{the_permalink($competence_ozd);}?>">
                                    <?php echo round(get_post_meta( $competence_ozd, 'itog_mark_k5', true ),2); ?></a> </td>
                        </tr>
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

