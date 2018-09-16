<?php
/**Template Name: Отчетность по практике 4 курс страница*/

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
				
                <table class="tablesorter">
                    <thead>
                    <tr>
                        <th>Студент</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php
                $args     = array(
                    'post_type'      => 'practical_reporting4',
                    'posts_per_page' => 20,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query( $args );
                $i = 0;
                if ( $wp_query->have_posts() ) {
                    while ( $wp_query->have_posts() )
                    {
                        $wp_query->the_post();
                        $report = get_the_ID();
                        $student = get_field('student');
                        $develop_zan = get_field('develop_zan');
                        $selfconcept_lesson = get_field('selfconcept_lesson');
                        $develop_vnezan = get_field('develop_vnezan');
                        $i++;
                        ?>
                        <tr>
                            <td>
                                <div class="accordion">
                                    <input class="toggle-box" id="<?php echo $i?>" type="checkbox">
                                    <label for="<?php echo $i?>"><?php echo get_the_title($student)?></label>
                                    <div class="box">
                                        <h5>Разработка учебного занятия по информатике. Дидактические материалы</h5>

                                        <?php
                                        // vars
                                        $url = $develop_zan['url'];
                                        $title = $develop_zan['title'];
                                        $caption = $develop_zan['caption'];


                                        // icon
                                        $icon = $develop_zan['icon'];

                                        if( $develop_zan['type'] == 'image' ) {

                                            $icon =  $develop_zan['sizes']['thumbnail'];

                                        } ?>


                                        <div class="wp-caption">
                                            <a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
                                                <img src="<?php echo $icon; ?>" />
                                                <span style="margin:20px;"><?php echo $title; ?></span> </a>
                                            <span>
											<p class="wp-caption-text"><?php echo $caption; ?></p>
										</span>
                                        </div>
                                        <hr>

                                        <h5>Самоанализ урока информатики</h5>

                                        <?php
                                        // vars
                                        $url = $selfconcept_lesson['url'];
                                        $title = $selfconcept_lesson['title'];
                                        $caption = $selfconcept_lesson['caption'];


                                        // icon
                                        $icon = $selfconcept_lesson['icon'];

                                        if( $selfconcept_lesson['type'] == 'image' ) {

                                            $icon =  $selfconcept_lesson['sizes']['thumbnail'];

                                        } ?>


                                        <div class="wp-caption">
                                            <a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
                                                <img src="<?php echo $icon; ?>" />
                                                <span style="margin:20px;"><?php echo $title; ?></span> </a>
                                            <span>
											<p class="wp-caption-text"><?php echo $caption; ?></p>
										</span>
                                        </div>
                                        <hr>
                                        <h5>Разработка внеурочного занятия по информатике</h5>

                                        <?php
                                        // vars
                                        $url = $develop_vnezan['url'];
                                        $title = $develop_vnezan['title'];
                                        $caption = $develop_vnezan['caption'];


                                        // icon
                                        $icon = $develop_vnezan['icon'];

                                        if( $develop_vnezan['type'] == 'image' ) {

                                            $icon =  $develop_vnezan['sizes']['thumbnail'];

                                        } ?>


                                        <div class="wp-caption">
                                            <a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
                                                <img src="<?php echo $icon; ?>" />
                                                <span style="margin:20px;"><?php echo $title; ?></span> </a>
                                            <span>
											<p class="wp-caption-text"><?php echo $caption; ?></p>
										</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
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

