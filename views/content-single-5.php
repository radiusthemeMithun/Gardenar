<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gardenar
 */

?>
<article data-post-id="<?php the_ID(); ?>" <?php post_class( gardenar_post_class() ); ?>>
	<div class="single-inner-wrapper">
		<?php gardenar_single_entry_header(); ?>
		<?php gardenar_post_single_thumbnail(); ?>
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
