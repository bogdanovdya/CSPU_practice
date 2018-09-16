<?php
/**Template Name: Базы практики страница*/

//* Get da header.
get_header();

//* Fire the post.

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
                        <th>Номер договора</th>
                        <th>Название</th>
                        <th>Адрес</th>
                        <th>Начало действия договора</th>
                        <th>Окончание действия договора</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'base_practice',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $base_practice      = get_the_ID();
                        $deal_base_practice = get_post_meta( $base_practice , 'deal_base_practice', true );
                        $name_base_practice = get_post_meta( $base_practice , 'name_base_practice', true );
                        $address_base_practice = get_post_meta( $base_practice , 'address_base_practice', true );
                        $date_base_practice = get_post_meta( $base_practice , 'date_base_practice', true );
                        $date2_base_practice = get_post_meta($base_practice, 'date2_base_practice', true);
                        ?>

                        <tr>
                            <td><?php echo $deal_base_practice ?></td>
                            <td><a href="<?php the_permalink(); ?>"><?php echo $name_base_practice ?></a></td>
                            <td><?php echo $address_base_practice ?></td>
                            <td> <?php echo $date_base_practice ?></td>
                            <td> <?php echo $date2_base_practice ?></td>
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

