<?php
/* Define these, So that WP functions work inside this file */
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wordpressyo/wp-blog-header.php');
?>
<?php
if (isset($_POST["save"]))
{
    $new_manager = array(
        'post_title'    => $_POST["name_manager"],
        'post_type' => 'manager',
        'post_content'  => ' ',
        'post_status'   => 'publish',
        'post_category' => array( 8,39 ),
    );

    $post_id = wp_insert_post($new_manager);

    update_post_meta($post_id, 'name_manager', $_POST["name_manager"]);
    update_post_meta($post_id, 'chair_manager', $_POST["chair_manager"]);
    update_post_meta($post_id, 'post_manager', $_POST["post_manager"]);

    // This will redirect you to the newly created post
    $post = get_post($post_id);
    wp_redirect($post->guid);
}
?>