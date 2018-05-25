<?php 
// Add scripts and stylesheets
function startwordpress_scripts() {
 wp_enqueue_style( 'bootstrap', get_template_directory_uri() .
'/css/bootstrap.min.css', array(), '3.3.6' );
 wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css'
);
 wp_enqueue_script( 'bootstrap', get_template_directory_uri() .
'/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
// Add Google Fonts
function startwordpress_google_fonts() {
wp_register_style('OpenSans',
'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
wp_enqueue_style( 'OpenSans');
}
add_action('wp_print_styles', 'startwordpress_google_fonts');
// WordPress Titles
add_theme_support( 'title-tag' );
// Custom settings
function custom_settings_add_menu() {
 add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options',
'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );
// Support Featured Images
add_theme_support( 'post-thumbnails' );
function create_post_your_post(){
 register_post_type('your_post',
 array(
 'labels'=>array(
 'name'=>__('Your Post'),
 ),
 'public'=>true,
 'hierarchical'=>true,
 'has_archive'=>true,
 'supports'=>array(
 'title',
'editor',
'excerpt',
'thumbnail',
 ),
 'taxonomies'=>array(
 'post_tag',
'category',
 )
 )
);
 register_taxonomy_for_object_type('category','your_post');
 register_taxonomy_for_object_type('post_tag','your_post');
}
add_action('init','create_post_your_post');
function add_your_fields_meta_box(){
 add_meta_box(
 'your_fields_meta_box',// $id
 'Your Fields',// $title
 'show_your_fields_meta_box',// $callback
 'your_post',// $screen
 'normal',// $context
 'high'// $priority
);
}
add_action('add_meta_boxes','add_your_fields_meta_box');

function save_your_fields_meta( $post_id ) {
// verify nonce
if ( !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
 return $post_id;
}
// check autosave
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
 return $post_id;
}
// check permissions
if ( 'page' === $_POST['post_type'] ) {
 if ( !current_user_can( 'edit_page', $post_id ) ) {
 return $post_id;
 } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
 return $post_id;
 }
}

$old = get_post_meta( $post_id, 'your_fields', true );
$new = $_POST['your_fields'];
if ( $new && $new !== $old ) {
 update_post_meta( $post_id, 'your_fields', $new );
} elseif ( '' === $new && $old ) {
 delete_post_meta( $post_id, 'your_fields', $old );
}
}
add_action( 'save_post', 'save_your_fields_meta' );

?>
<script>
jQuery(document).ready(function ($) {
// Instantiates the variable that holds the media library frame.
var meta_image_frame;
// Runs when the image button is clicked.
$('.image-upload').click(function (e) {
 e.preventDefault();
 var meta_image = $(this).parent().children('.meta-image');
 // If the frame already exists, re-open it.
 if (meta_image_frame) {
 meta_image_frame.open();
 return;
 }
 // Sets up the media library frame
 meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
 title: meta_image.title,
 button: {
 text: meta_image.button
 }
 });
 // Runs when an image is selected.
 meta_image_frame.on('select', function () {
 // Grabs the attachment selection and creates a JSON representation of
the model.
 var media_attachment =
meta_image_frame.state().get('selection').first().toJSON();
 // Sends the attachment URL to our custom image input field.
 meta_image.val(media_attachment.url);
 });
 // Opens the media library frame.
 meta_image_frame.open();
});
});
</script>
