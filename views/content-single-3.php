<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gardenar
 */

$meta_list = gardenar_option( 'rt_single_meta', '', true );
$meta      = gardenar_option( 'rt_blog_above_meta_visibility' );
$meta      = gardenar_option( 'rt_single_above_meta_style' );
if ( gardenar_option( 'rt_single_above_meta_visibility' ) ) {
	$category_index = array_search( 'category', $meta_list );
	unset( $meta_list[ $category_index ] );
}
?>
<article data-post-id="<?php the_ID(); ?>" <?php post_class( gardenar_post_class() ); ?>>
	<div class="single-inner-wrapper">
		<div class="entry-wrapper">
			<div class="entry-content">
				<?php gardenar_entry_content() ?>
			</div>
			<?php gardenar_post_single_video(); ?>
			<?php gardenar_entry_footer(); ?>
			<?php gardenar_entry_profile(); ?>
		</div>
	</div>
</article>
