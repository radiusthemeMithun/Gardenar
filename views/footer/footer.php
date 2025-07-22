<?php
/**
 * Template part for displaying footer
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gardenar
 */

$footer_width = 'container'. gardenar_option('rt_footer_width');
$copyright_center = gardenar_option('rt_social_footer') ? 'justify-content-between' : 'justify-content-center';
?>

<?php if ( is_active_sidebar( 'rt-footer-sidebar' ) ) : ?>
	<div class="footer-widgets-wrapper">
		<?php if( gardenar_option('rt_shape_footer') ) { ?>
			<div class="footer-shape">
				<ul>
					<li><?php echo wp_get_attachment_image( gardenar_option( 'rt_footer_left_image' ), 'full', true ); ?></li>
					<li><?php echo wp_get_attachment_image( gardenar_option( 'rt_footer_right_image' ), 'full', true ); ?></li>
				</ul>
			</div>
		<?php } ?>
		<div class="footer-container <?php echo esc_attr($footer_width) ?>">
			<div class="footer-widgets row">
				<?php dynamic_sidebar( 'rt-footer-sidebar' ); ?>
			</div>
		</div>


	</div><!-- .site-info -->
<?php endif; ?>

<?php if ( ! empty( gardenar_option( 'rt_footer_copyright' ) ) ) : ?>
	<div class="footer-copyright-wrapper text-center">
		<div class="footer-container <?php echo esc_attr( $footer_width ) ?>">
			<div class="d-flex align-items-center <?php echo esc_attr($copyright_center); ?>">
				<div class="copyright-text">
					<?php gardenar_html( str_replace( '[y]', date( 'Y' ), gardenar_option( 'rt_footer_copyright' ) ) ); ?>
				</div>
				<?php if( gardenar_option('rt_social_footer') ) { ?>
				<div class="social-icon d-flex gap-20 align-items-center">
					<div class="social-icon d-flex column-gap-10">
						<?php if( gardenar_option( 'rt_follow_us_label' ) ) { ?><label><?php gardenar_html( gardenar_option( 'rt_follow_us_label' ), 'allow_title' ) ?></label><?php } ?>
						<?php gardenar_get_social_html( '#555' ); ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php endif; ?>
