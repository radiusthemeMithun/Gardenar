<?php
/**
 * Template part for displaying header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gardenar
 */

use RT\Gardenar\Options\Opt;

if(! Opt::$has_top_bar ) {
	return;
}
$topinfo = ( gardenar_option( 'rt_contact_address' ) || gardenar_option( 'rt_phone' ) || gardenar_option( 'rt_email' ) || gardenar_option( 'rt_website' ) ) ? true : false;
$_fullwidth = Opt::$header_width == 'full' ? '-fluid' : '';
?>

<div class="gardenar-topbar">
	<div class="topbar-container rt-container<?php echo esc_attr($_fullwidth) ?>">
		<div class="topbar-row d-flex flex-wrap column-gap-30 align-items-center">
			<?php if( $topinfo ) { ?>
			<div class="topbar-left d-flex flex-wrap align-items-center">
				<?php if( gardenar_option( 'rt_topbar_address' ) && gardenar_option( 'rt_contact_address' )  ) { ?>
					<span><i class="icon-rt-map"></i><?php gardenar_html( gardenar_option( 'rt_contact_address' ) , false );?></span>
				<?php } if( gardenar_option( 'rt_topbar_email' ) && gardenar_option( 'rt_email' ) ) { ?>
					<span><i class="icon-rt-e-mail"></i><a href="mailto:<?php echo esc_attr( gardenar_option( 'rt_email' ) );?>"><?php gardenar_html( gardenar_option( 'rt_email' ) , false );?></a></span>
				<?php } if( gardenar_option( 'rt_topbar_website' ) && gardenar_option( 'rt_website' ) ) { ?>
					<span><i class="icon-tag"></i><?php gardenar_html( gardenar_option( 'rt_website' ) , false );?></span>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if( gardenar_option( 'rt_topbar_social' ) ) { ?>
			<div class="topbar-right d-flex align-items-center">
				<?php if( gardenar_option( 'rt_topbar_phone' ) && gardenar_option( 'rt_phone' ) ) { ?>
				<span><i class="icon-rt-phone-2"></i><a href="tel:<?php echo esc_attr( gardenar_option( 'rt_phone' ) );?>"><?php gardenar_html( gardenar_option( 'rt_phone' ) , false );?></a></span>
				<?php } ?>
				<div class="social-icon">
					<?php if( gardenar_option( 'rt_follow_us_label' ) ) { ?><label><?php echo gardenar_option( 'rt_follow_us_label' ) ?></label><?php } ?>
					<?php gardenar_get_social_html( '#555' ); ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
