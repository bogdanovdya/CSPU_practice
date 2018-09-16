<?php
/** Template Name: Страница пользователей*/

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
				
				<?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $offset = ($paged - 1) * $number;
                    $users = get_users();
                    $total_users = count($users);
                    $query = get_users('&offset='.$offset.'&number='.$number);
                echo '<ul id="users">';
                foreach($query as $q) { ?>

                    <li class="user clearfix">
                        <!-- Аватар пользователя -->
                        <div class="user-avatar">
                            <?php echo get_avatar( $q->ID, 80 ); ?>
                        </div>
                        <!-- Краткая информация о пользователе -->
                        <div class="user-data">
                            <!-- Имя -->
                            <h4 class="user-name">
                                <a href="<?php echo get_author_posts_url($q->ID);?>">
                                    <?php echo get_the_author_meta('display_name', $q->ID);?>
                                </a>
                            </h4>
                            <!-- Биография -->
                            <?php if (get_the_author_meta('description', $q->ID) != '') : ?>
                                <p><?php echo get_the_author_meta('description', $q->ID); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php }
                echo '</ul>'; ?>
				
				</div>
				
				<?php
                    the_posts_pagination( array(
                        'mid_size'  => 5,
                        'prev_text' => 'Назад',
                        'next_text' => 'Вперед',
                    ) );
                ?>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();

