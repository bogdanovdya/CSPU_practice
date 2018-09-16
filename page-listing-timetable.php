<?php
/**Template Name: Расписания учебных и внеклассных занятий 5 курс страница*/

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
					    <th>Список</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'timetable',
                    'posts_per_page' => 100,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $timetable = get_the_ID(); ?>
                        <tr><td><a href="<?php the_permalink($timetable) ?>"><?php echo get_the_title($timetable) ?></a></td></tr>
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
                            <form id="form1" style="display: none;" method="POST" action="<?php bloginfo('template_url'); ?>/new_timetable.php">
                                <hr>
                                <select name="student" size="1">
                                    <?php
                                    $students_args = array('post_type' => 'students5', 'posts_per_page' => 100);
                                    $students_mas = new WP_Query( $students_args );
                                    while ( $students_mas->have_posts() )
                                    {
                                        $students_mas->the_post();
                                        $student_mas = get_the_ID();
                                        ?><option value="<?php echo $student_mas ?>"><?php echo get_the_title($student_mas) ?></option> <?php
                                    }
                                    ?>
                                </select>
                                <br>
                                <br>
                                <input type="submit" name="save" value="Добавить"/>
                                <br>
                                <br>
                                <hr>
                            </form>
                        <input type="button" value="Добавить новго" onclick="disp(document.getElementById('form1'))" />
				
				<?php
                    the_posts_pagination( array(
                        'mid_size'  => 5,
                        'prev_text' => 'Назад',
                        'next_text' => 'Вперед',
                    ) );
                }
                ?>
            </div>
                       
        </div><!-- #content -->
    </div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();

