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
class General extends Customizer {
	protected $section_general = 'rt_general_section';

	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_general,
			'title'       => __( 'General', 'gardenar' ),
			'description' => __( 'General Section', 'gardenar' ),
			'priority'    => 20
		] );
		Customize::add_controls( $this->section_general, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {

		return apply_filters( 'rt_general_controls', [

			'rt_svg_enable' => [
				'type'  => 'switch',
				'label' => __( 'Enable SVG Upload', 'gardenar' ),
				'default' => 1,
			],

			'rt_preloader' => [
				'type'  => 'switch',
				'label' => __( 'Preloader', 'gardenar' ),
			],

			'rt_preloader_logo' => [
				'type'         => 'image',
				'label'        => __( 'Preloader Logo', 'gardenar' ),
				'description'  => __( 'Upload preloader logo for your site.', 'gardenar' ),
				'button_label' => __( 'Logo', 'gardenar' ),
				'condition' => [ 'rt_preloader' ]
			],

			'preloader_bg_color' => [
				'type'    => 'color',
				'label'   => __( 'Preloader Background Color', 'gardenar' ),
				'condition' => [ 'rt_preloader' ]
			],

			'rt_back_to_top' => [
				'type'  => 'switch',
				'label' => __( 'Back to Top', 'gardenar' ),
			],

			'rt_remove_admin_bar' => [
				'type'        => 'switch',
				'label'       => __( 'Remove Admin Bar', 'gardenar' ),
				'description' => __( 'This option not work for administrator role.', 'gardenar' ),
			],

			'container_width' => [
				'type'    => 'select',
				'label'   => __( 'Container Width', 'gardenar' ),
				'default' => '1296',
				'choices' => [
					'1554' => esc_html__( '1554px', 'gardenar' ),
					'1364' => esc_html__( '1364px', 'gardenar' ),
					'1296' => esc_html__( '1296px', 'gardenar' ),
					'1200' => esc_html__( '1200px', 'gardenar' ),
					'1140' => esc_html__( '1140px', 'gardenar' ),
				]
			],

			'rt_blend' => [
				'type'        => 'switch',
				'label'       => __( 'Image Blend', 'gardenar' ),
				'default' => 0,
				'description' => __( 'This option for use all image blend mode.', 'gardenar' ),
			],

			'rt_google_fonts_enable' => [
				'type'  => 'switch',
				'label' => __( 'Enable Google Fonts', 'gardenar' ),
				'default' => 1,
			],

		] );

	}

}
