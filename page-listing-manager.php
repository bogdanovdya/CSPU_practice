<?php
/**Template Name: Руководители страница*/

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
                        <th>Кафедра</th>
                        <th>Должность</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'manager',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $manager       = get_the_ID();
                        $name_manager = get_post_meta( $manager , 'name_manager', true );
                        $chair_manager = get_post_meta( $manager , 'chair_manager', true );
                        $post_manager = get_post_meta( $manager , 'post_manager', true );
                        $block = get_post_meta($manager, 'block_manager', true);
                        $practice = get_post_meta($block, 'practice', true);
                        ?>

                        <tr>
                            <td><a href="<?php the_permalink(); ?>"><?php echo $name_manager ?></a></td>
                            <td> <?php echo $chair_manager ?></td>
                            <td><?php echo $post_manager ?></td>
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
                    <form id="form1" style="display: none;" method="POST" action="<?php bloginfo('template_url'); ?>/new_manager.php">
                        <hr>
                        <input type="text" size = "50" value ="ФИО" name="name_manager"/>
                        <br>
                        <input type="text" size = "50" value ="Кафедра" name="chair_manager"/>
                        <br>
                        <input type="text" size = "50" value ="Должность" name="post_manager"/>
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

