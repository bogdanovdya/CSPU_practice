<?php
/**Template Name: Индивидуальный план работы студента 5 курс*/

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
					    <th>Студент</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'individual_plan',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $individual_plan = get_the_ID();?>
                        <tr><td><a href="<?php the_permalink($individual_plan) ?>"><?php echo get_the_title($individual_plan) ?></a></td></tr>
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

