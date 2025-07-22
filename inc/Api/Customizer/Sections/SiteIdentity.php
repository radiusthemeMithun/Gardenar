<?php
/**
 * Theme Customizer - Header
 *
 * @package gardenar
 */

namespace RT\Gardenar\Api\Customizer\Sections;

use RT\Gardenar\Api\Customizer;
use RTFramework\Customize;

/**
 * Customizer class
 */
class SiteIdentity extends Customizer {

	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_controls( 'title_tagline', $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {

		return apply_filters( 'rt_title_tagline_controls', [

			'rt_logo' => [
				'type'         => 'image',
				'label'        => __( 'Main Logo', 'gardenar' ),
				'description'  => __( 'Upload main logo for your site.', 'gardenar' ),
				'button_label' => __( 'Logo', 'gardenar' ),
			],

			'rt_logo_light' => [
				'type'         => 'image',
				'label'        => __( 'Light Logo', 'gardenar' ),
				'description'  => __( 'Upload light logo for transparent header. It should a white logo', 'gardenar' ),
				'button_label' => __( 'Light Logo', 'gardenar' ),
			],

			'rt_logo_mobile' => [
				'type'         => 'image',
				'label'        => __( 'Mobile Logo', 'gardenar' ),
				'description'  => __( 'Upload, if you need a different logo for mobile device..', 'gardenar' ),
				'button_label' => __( 'Mobile Logo', 'gardenar' ),
			],

			'rt_logo_width_height' => [
				'type'      => 'text',
				'label'     => __( 'Main Logo Dimension', 'gardenar' ),
				'description'     => __( 'Enter the width and height value separate by comma (,). Eg. 120px,45px', 'gardenar' ),
				'transport' => '',
			],

			'rt_mobile_logo_width_height' => [
				'type'      => 'text',
				'label'     => __( 'Mobile Logo Dimension', 'gardenar' ),
				'description'     => __( 'Enter the width and height value separate by comma (,). Eg. 120px,45px', 'gardenar' ),
				'transport' => '',
			],

		] );

	}

}
