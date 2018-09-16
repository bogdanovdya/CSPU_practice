<?php
/**Template Name: Студенты 4 курс страница*/

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
                <table class="tablesorter">
                    <thead>
                    <tr>
                        <th>ФИО</th>
                        <th>Курс</th>
                        <th>Группа</th>
                        <th>Профиль</th>
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
                        $group_student = get_post_meta($students, 'group_student', true);
                        $kurs_student = get_post_meta( $group_student, 'group_course', true );
                        $gp_student = get_post_meta( $group_student, 'group_number', true );
						$profil_student = get_post_meta( $group_student, 'group_direction', true );
						$info = get_userdata(get_post_meta( $students, 'name_student', true ));
						$title = $info->last_name . " " . $info->first_name;

                        ?>

                        <tr>
                            <td><a href="<?php the_permalink(); ?>"><?php echo $title ?></a></td>
                            <td><?php echo $kurs_student ?></td>
                            <td> <?php echo $gp_student ?></td>							
                            <td> <?php echo $profil_student ?></td>
                        </tr>
                    <?php  }; ?>
                    </tbody>
                    </table>
                    <script>
                        function disp(form) {
                            if (form.style.display == "none") {
                                form.style.display = "block";
                            }
                            else {form.style.display = "none";}
                        }
                    </script>
                        <form id="form1" style="display: none;" method="POST" action="<?php bloginfo('template_url'); ?>/new_student.php">
                            <hr>
                            <select name="student" size="1">
                                <?php
                                $students_args = array('role' => 'student');
                                $students_mas = get_users($students_args);
                                foreach ($students_mas as $student_mas)
                                {
                                    $st_name = $student_mas->last_name . " " . $student_mas->first_name;
                                    ?><option value="<?php echo $student_mas->ID ?>"><?php echo $st_name; ?></option> <?php
                                }
                                ?>
                            </select>
                            <select name="group" size="1">
                                <?php
                                $group_args = array('post_type' => 'group');
                                $groups = get_posts($group_args);
                                foreach ($groups as $group)
                                {
                                    $g_c = $group->ID;
                                    if (get_post_meta( $g_c, 'group_course', true ) == 4) {
                                        ?>
                                        <option
                                        value="<?php echo $group->ID ?>"><?php echo get_the_title($group) ?></option> <?php
                                    }

                                }
                                ?>
                            </select>
                            <br>
                            <br>
                            <input type="submit" name="save" value="Сохранить"/>
                            <br>
                            <br>
                            <hr>
                        </form>
                        <input type="button" value="Добавить нового" onclick="disp(document.getElementById('form1'))" />
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

/*if (isset($_POST["save"]))
{

    $new_title = $_POST["student"];
    $new_student = array(
        'post_title'    => $new_title,
        'post_type' => 'students4',
        'post_content'  => ' ',
        'post_status'   => 'publish',
        'post_category' => array( 8,39 ),
        'post_author' => $_POST["student"]
    );

    wp_insert_post($new_student);
    update_post_meta($new_student, 'name_student', $_POST["student"]);
    update_post_meta($new_student, 'group_student', $_POST["group"]);
    //echo "lol";
    //echo "<script>window.location.href =" . get_permalink($new_student) . ";</script>";
    //echo "<script>alert(" . $new_title . $_POST["student"] . $_POST["group"] . ");</script>";
    //echo "<script>alert(\"У вас нет прав для редактирования этой записи\");</script>";
    //echo "<script>location.reload();</script>";

}*/