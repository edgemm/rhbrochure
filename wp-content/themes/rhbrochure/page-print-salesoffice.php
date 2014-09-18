<?php
/* Template Name: Page - Print (Sales Office) */

get_header( 'print-salesoffice' );

$images = explode( ",", $_GET['i'] );

$args = array(
	'post_type'		=> 'post',
	'post__in'		=> $images,
	'orderby'		=> 'meta_value',
	'meta_key'		=> 'rhb_slide_order',
	'order' 		=> 'ASC',
	'posts_per_page'	=> -1
);

$the_query = new WP_Query( $args );

if ($the_query->have_posts()) :
	while ( $the_query->have_posts() ) :
	
		$the_query->the_post();
?>	
<div class="print-content">
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'slides', array( 'class' => 'print-img' ) );
}
?>
</div> <!-- end .slide -->
<?php
endwhile;
endif;
?>

<?php get_footer(); ?>
