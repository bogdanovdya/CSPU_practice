<?php
/* Define these, So that WP functions work inside this file */
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wordpressyo/wp-blog-header.php');
?>
<?php
if (isset($_POST["save"]))
{
    $student = get_user_by('id', $_POST["student"]);
    //$group = get_post($_POST["group"]);
    $new_title = $student->last_name . " " . $student->first_name;
    $role = $student->roles;
    if(in_array('student', $role))
    {
        $type = 'students4';
    }
    if(in_array('student_5', $role))
    {
        $type = 'students5';
    }
    $new_student = array(
        'post_title'    => $new_title,
        'post_type' => $type,
        'post_content'  => ' ',
        'post_status'   => 'publish',
        'post_category' => array( 8,39 ),
        'post_author' => $_POST["student"]
    );

    $post_id = wp_insert_post($new_student);

    update_post_meta($post_id, 'name_student', $_POST["student"]);
    update_post_meta($post_id, 'group_student', $_POST["group"]);

    // This will redirect you to the newly created post
    $post = get_post($post_id);
    wp_redirect($post->guid);
}
?>