<?php
/**Template Name: Распределения страница*/

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
                            <th>Студенты</th>
                            <th>Место прохождения практики</th>
                            <th>Руководители практики от университета</th>
                            <th>Руководители практики от базы практики</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'distribution',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );

                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $distribution      = get_the_ID();

                        if( have_rows('distribution') ):
                            ?>
                            <?php while( have_rows('distribution') ): the_row();
                            $student = get_sub_field('student');
                            $manager_uner = get_sub_field('manager_uner');
                            $school = get_the_title(get_sub_field('school'));
                            ?>
                            <tr>
                                <td><?php
                                    foreach ($student as $value) { ?>
                                        <a href="<?php the_permalink($value) ?>"><?php echo get_the_title($value) ?></a>
                                        <br>
                                    <?php } ?></td>
                                <td><a href="<?php the_permalink(get_sub_field('school')) ?>"><?php echo $school; ?></a></td>
                                <td><?php
                                    foreach ($manager_uner as $value) { ?>
                                        <a href="<?php the_permalink($value) ?>"><?php echo get_the_title($value) ?></a>
                                        <br>
                                    <?php } ?></td>
                                <td><?php the_sub_field('manger_base'); ?></td>
                            </tr>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    <?php }; ?>
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

