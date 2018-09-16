<?php
/**Template Name: Практика страница*/

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
                <table>
                    <tr>
                        <td>Наименование</td>
                        <td>Курс</td>
                        <td>Учебный год</td>
                        <td>Сроки проведения</td>
                        <td>Количество Z</td>
                        <td>Факультетский руководитель</td>
                    </tr>
            <?php
                $args     = array(
                    'post_type'      => 'practice',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $practice       = get_the_ID();
                        $name = get_post_meta( $practice , 'name', true );
                        $course = get_post_meta( $practice , 'course', true );
                        $date_of_practice = get_post_meta( $practice , 'date_of_practice', true );
                        $elapsed_time = get_post_meta( $practice , 'elapsed_time', true );
                        $number_z = get_post_meta( $practice , 'number_z', true );
                        $manager_practice = get_post_meta( $practice , 'manager_practice', true );
                        ?>

                        <tr>
                            <td><a href="<?php the_permalink(); ?>"><?php echo $name ?></a></td>
                            <td> <?php echo $course ?></td>
                            <td><?php echo $date_of_practice ?></td>
                            <td> <?php echo $elapsed_time ?></td>
                            <td> <?php echo  $number_z ?></td>
                            <td> <?php echo $manager_practice ?></td>
                        </tr>
                    <?php  }; ?>
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

