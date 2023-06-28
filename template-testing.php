<?php /* Template Name: Testing Template */ ?>
<?php
get_header();
?>



<?php

$args = array(
'post_type' => 'post',
);
// The Query.
$the_query = new WP_Query( $args );

// The Loop.
if ( $the_query->have_posts() ) {
	?>
<div class="postSlider">
<section class="regular slider">
     <?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// echo '<li>' . esc_html( get_the_title() ) . '</li>';
          $postId = get_the_ID();
          $postFeatureImage = get_the_post_thumbnail_url($postId);
          $postTitle = get_the_title($postId);
          // $postExcerpt = get_the_excerpt($postId);
          $postExcerpt = wp_trim_words( get_the_excerpt($postId), 22, '...' );
          $postLink = get_the_permalink($postId);
          ?>
<div class="single-slide">
      <div class="main-slide">
        <div class="image-div"  style="background-image: url(<?php echo $postFeatureImage; ?>);">
        </div>
        <div class="slide-text">
          <h1><?php echo $postTitle; ?></h1>
          <p><?php echo $postExcerpt; ?></p>
          <a href="<?php echo $postLink; ?>">Read More</a>
        </div>
      </div>
    </div>
          <?php
	}
	// echo '</ul>';
     ?>
  </section>
    </div>
     <?php
} else {
	esc_html_e( 'Sorry, no posts matched your criteria.' );
}
// Restore original Post Data.
wp_reset_postdata();


?>

    

<?php
get_footer();
?>