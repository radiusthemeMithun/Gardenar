<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gardenar
 */

use RT\Gardenar\Options\Opt;

?>
<article data-post-id="<?php the_ID(); ?>" <?php post_class( gardenar_post_class() ); ?>>
	<div class="single-inner-wrapper">
		<?php if ( ! in_array( Opt::$single_style, [ '2', '3', '4', '5' ] ) ) : ?>
			<?php gardenar_post_single_thumbnail(); ?>
		<?php endif; ?>
		<div class="entry-wrapper">
			<?php gardenar_single_entry_header(); ?>
				<div class="entry-content">
					<?php gardenar_entry_content() ?>
				</div>
			<?php gardenar_post_single_video(); ?>
			<?php gardenar_entry_footer(); ?>
			<?php gardenar_entry_profile(); ?>
		</div>
	</div>
</article>
