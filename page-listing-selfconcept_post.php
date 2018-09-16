<?php
/**Template Name: Самооценка результатов педагогической практики студентом*/

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
                <table class="tablesorter">
                    <thead>
                    <tr>
                        <th>ФИО</th>
                        <th>Курс</th>
                        <th>Группа</th>
                        <th>Профиль</th>
                        <th>Самооценка</th>
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
                        $name_student = get_post_meta( $students , 'name_student', true );
                        $kurs_student = get_post_meta( $group_student, 'group_course', true );
                        $gp_student = get_post_meta( $group_student, 'group_number', true );
                        $profil_student = get_post_meta( $group_student, 'group_direction', true );
                        $selfconcept_post = get_post_meta($students, 'selfconcept_post', true);
                        $new_post = array(
                            'post_title'    => get_post_meta( $students, 'name_student', true),
                            'post_type' => 'selfconcept_post',
                            'post_content'  => ' ',
                            'post_status'   => 'pending',
                            'post_category' => array( 8,39 )
                        );
                        ?>

                        <tr>
                            <td><a href="<?php the_permalink(); ?>"><?php echo $name_student ?></a></td>
                            <td><?php echo $kurs_student ?></td>
                            <td> <?php echo $gp_student ?></td>
                            <td> <?php echo $profil_student ?></td>
                            <td><a href="<?php if(empty($selfconcept_post)){$link_post = wp_insert_post($new_post);update_post_meta($students, 'selfconcept_post', $link_post); update_post_meta($link_post, 'student', $students); the_permalink($link_post);}else{the_permalink($selfconcept_post);}?>">
                                    <?php echo round(get_post_meta( $selfconcept_post, 'selfconcept_post_itog', true ),2); ?></a> </td>
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

