<?php
/**Template Name: Мероприятия страница*/

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
                <table class="tablesorter">
                    <thead>
                    <tr>
                        <th>Студент</th>
                        <th>Дата</th>
                        <th>Формулировка</th>
                        <th>Вид</th>
                        <th>Тип</th>
                        <th>Кабинет</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'events',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $events      = get_the_ID();
                        $student = get_post_meta($events, 'event_student', true);
                        $name_student = get_post_meta( $student , 'name_student', true );
                        $event_date = get_post_meta( $events , 'event_date', true );
                        $event_formulation = get_post_meta( $events , 'event_formulation', true );
                        $event_sort = get_post_meta( $events , 'event_sort', true );
                        $event_type = get_post_meta( $events , 'event_type', true );
                        $event_cabinet = get_post_meta( $events , 'event_cabinet', true );

                        ?>

                        <tr>
                            <td><a href="<?php the_permalink($student); ?>"><?php echo $name_student ?></a></td>
                            <td> <?php echo $event_date ?></td>
                            <td><?php echo $event_formulation ?></td>
                            <td> <?php echo $event_sort ?></td>
                            <td> <?php echo  $event_type ?></td>
                            <td> <?php echo $event_cabinet ?></td>
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

