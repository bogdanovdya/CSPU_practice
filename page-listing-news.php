<?php
/**Template Name: Новости страница*/

//* Get da header.
get_header();

//* Fire the post.
the_post();

?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
                <?php the_content(); ?>

            <div class="entry-content">
               
            <?php
                $args     = array(
                    'post_type'      => 'news',
                    'posts_per_page' => 5,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() ) {
                        $wp_query->the_post();
                        $news       = get_the_ID();?>
                        <h2><a href="<?php the_permalink($news) ?>"> <?php the_title() ?></a></h2>
                        <p><?php the_content() ?></p>
                        <?php
                    };
                        ?>
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

