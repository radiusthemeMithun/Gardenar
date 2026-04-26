<?php
/**
 * Template Name: RT Icons
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package gardenar
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
	<div class="container">
		<div class="row pt-50 pb-50 d-flex gap-15">
			<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'search' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'facebook' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'twitter' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'linkedin' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'instagram' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'pinterest' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'tiktok' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'youtube' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'snapchat' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'whatsapp' );
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo gardenar_get_svg( 'reddit' );
			?>
		</div>
	</div>
<?php
get_footer();
