<?php
/**
 * The main template file
 */

get_header(); ?>
<?php
global $wpdb;
$query = "SELECT ID FROM {$wpdb->prefix}posts WHERE post_name LIKE 'testBG' AND post_type LIKE 'attachment'";
$thumb_id = $wpdb->get_var($query);
  if( !is_null($thumb_id) ) {
    $attachment = wp_get_attachment_image_src($thumb_id, 'full');
    $img_url = $attachment[0];
  }
?>

<div class="bg-image-full" style="background-image: url('<?php echo $img_url?>');">


</div>

<?php get_footer(); ?>
