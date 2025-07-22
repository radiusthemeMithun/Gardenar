<?php
/**
 * Template part for displaying header offcanvas
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gardenar
 */
use RT\Gardenar\Options\Opt;
use RT\Gardenar\Helpers\Fns;
$logo_h1 = ! is_singular( [ 'post' ] );
$topinfo = ( gardenar_option( 'rt_contact_address' ) || gardenar_option( 'rt_phone' ) || gardenar_option( 'rt_email' ) || gardenar_option( 'rt_email' ) ) ? true : false;
?>


<div class="gardenar-offcanvas-drawer">
	<div class="offcanvas-logo">
		<?php echo gardenar_site_logo( $logo_h1 ); ?>
		<a class="trigger-icon trigger-off-canvas" href="#">×</a>
	</div>
	<?php if( gardenar_option( 'rt_about_label' ) || gardenar_option( 'rt_about_text' ) ) { ?>
	<div class="offcanvas-about offcanvas-address">
		<?php if( gardenar_option( 'rt_about_label' ) ) { ?><label><?php echo gardenar_option( 'rt_about_label' ) ?></label><?php } ?>
		<?php if( gardenar_option( 'rt_about_text' ) ) { ?><p><?php echo gardenar_option( 'rt_about_text' ) ?></p><?php } ?>
	</div>
	<?php } ?>
	<nav class="offcanvas-navigation" role="navigation">
		<?php
		if ( has_nav_menu( 'primary' ) ) :
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'walker'         => new RT\Gardenar\Core\WalkerNav(),
				)
			);
		endif;
		?>
	</nav><!-- .gardenar-navigation -->

	<div class="offcanvas-address">
		<?php if( $topinfo ) { ?>
			<?php if( gardenar_option( 'rt_contact_info_label' ) ) { ?><label><?php echo gardenar_option( 'rt_contact_info_label' ) ?></label><?php } ?>
			<ul class="offcanvas-info">
				<?php if( gardenar_option( 'rt_contact_address' ) ) { ?>
					<li><i class="icon-rt-map"></i><?php gardenar_html( gardenar_option( 'rt_contact_address' ) , false );?> </li>
				<?php } if( gardenar_option( 'rt_phone' ) ) { ?>
					<li><i class="icon-rt-phone-2"></i><a href="tel:<?php echo esc_attr( gardenar_option( 'rt_phone' ) );?>"><?php gardenar_html( gardenar_option( 'rt_phone' ) , false );?></a> </li>
				<?php } if( gardenar_option( 'rt_email' ) ) { ?>
					<li><i class="icon-rt-e-mail"></i><a href="mailto:<?php echo esc_attr( gardenar_option( 'rt_email' ) );?>"><?php gardenar_html( gardenar_option( 'rt_email' ) , false );?></a> </li>
				<?php } if( gardenar_option( 'rt_website' ) ) { ?>
					<li><i class="icon-rt-language"></i><?php gardenar_html( gardenar_option( 'rt_website' ) , false );?></li>
				<?php } ?>
			</ul>
		<?php } ?>

		<?php if( gardenar_option( 'rt_offcanvas_social' ) ) { ?>
			<div class="offcanvas-social-icon">
				<?php gardenar_get_social_html( '#555' ); ?>
			</div>
		<?php } ?>
	</div>

</div><!-- .container -->

<div class="gardenar-body-overlay"></div>
