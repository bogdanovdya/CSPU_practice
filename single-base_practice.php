<?php
/**
 * The Template for displaying base_practice single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used  instead.
					 */
					get_template_part( 'content', get_post_format() ); ?>
                    <?php
                    $base_practice = get_the_ID();
                    ?>
                    <div class="entry-content">
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
                        <table>
                            <tr>
                                <td>Номер договора</td>
                                <td><?php echo get_post_meta($base_practice,'deal_base_practice',true); ?></td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td><?php echo get_post_meta($base_practice,'name_base_practice',true); ?></td>
                            </tr>
                            <tr>
                                <td>Адрес</td>
                                <td><?php echo get_post_meta($base_practice,'address_base_practice',true); ?></td>
                            </tr>
                            <tr>
                                <td>Телефон</td>
                                <td><?php echo get_post_meta($base_practice,'phone_base_practice',true); ?></td>
                            </tr>
                            <tr>
                                <td>Сайт</td>
                                <td><a href="<?php echo get_post_meta($base_practice,'site_base_practice',true)?>"><?php echo get_post_meta($base_practice,'site_base_practice',true); ?></a></td>
                            </tr>
                            <tr>
                                <td>Начало действия договора</td>
                                <td><?php echo get_post_meta($base_practice,'date_base_practice',true); ?></td>
                            </tr>
                            <tr>
                                <td>Окончание действия договора</td>
                                <td><?php echo get_post_meta($base_practice,'date2_base_practice',true); ?></td>
                            </tr>
                        </table>
                    </div>
					<?php
				endwhile;

            // Previous/next post navigation.
            twentyfourteen_post_nav();

            ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
