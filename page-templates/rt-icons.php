<?php
/**
 * Template Name: RT Icons
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package gardenar
 */

get_header(); ?>
	<div class="container">
		<div class="row pt-50 pb-50 d-flex gap-15">
			<?php
			echo gardenar_get_svg( 'search' );
			echo gardenar_get_svg( 'facebook' );
			echo gardenar_get_svg( 'twitter' );
			echo gardenar_get_svg( 'linkedin' );
			echo gardenar_get_svg( 'instagram' );
			echo gardenar_get_svg( 'pinterest' );
			echo gardenar_get_svg( 'tiktok' );
			echo gardenar_get_svg( 'youtube' );
			echo gardenar_get_svg( 'snapchat' );
			echo gardenar_get_svg( 'whatsapp' );
			echo gardenar_get_svg( 'reddit' );
			?>
		</div>
	</div>
<?php
get_footer();
