<?php
/* Define these, So that WP functions work inside this file */
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wordpressyo/wp-blog-header.php');
?>
<?php
if (isset($_POST["save"]))
{
    $student_id = $_POST["student"];
	$student = get_post($student_id);
    $new_title = get_the_title($student);
    $post_type = get_post_type($student);
    if($post_type == 'students4')
    {
        $type = 'timetable4';
    }
    if($post_type == 'students5')
    {
        $type = 'timetable';
    }
    $new_timetable = array(
        'post_title'    => $new_title,
        'post_type' => $type,
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_category' => array( 8,39 )
    );

    $post_id = wp_insert_post($new_timetable);

    update_post_meta($post_id, 'student', $student_id);
	wp_insert_post( $post_id );
    // This will redirect you to the newly created post
    $post = get_post($post_id);
    wp_redirect($post->guid);
}
?>