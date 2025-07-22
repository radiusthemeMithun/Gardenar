<?php
/**
 * Theme Customizer - Header
 *
 * @package gardenar
 */

namespace RT\Gardenar\Api\Customizer\Sections;

use RT\Gardenar\Api\Customizer;
use RT\Gardenar\Helpers\Fns;
use RTFramework\Customize;

/**
 * Customizer class
 */
class Footer extends Customizer {
	protected $section_footer = 'rt_footer_section';

	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_footer,
			'title'       => __( 'Footer', 'gardenar' ),
			'description' => __( 'Footer Section', 'gardenar' ),
			'priority'    => 38
		] );

		Customize::add_controls( $this->section_footer, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {

		return apply_filters( 'rt_footer_controls', [

			'rt_footer_display' => [
				'type'        => 'switch',
				'label'       => __( 'Footer Display', 'gardenar' ),
				'description' => __( 'Show footer display', 'gardenar' ),
				'default' => 1,
			],

			'rt_footer_style' => [
				'type'    => 'image_select',
				'label'   => __( 'Choose Layout', 'gardenar' ),
				'default' => '1',
				'choices' => Fns::image_placeholder( 'footer', 1 )
			],

			'rt_footer_width' => [
				'type'    => 'select',
				'label'   => __( 'Footer Width', 'gardenar' ),
				'default' => '',
				'choices' => [
					''       => __( 'Box Width', 'gardenar' ),
					'-fluid' => __( 'Full Width', 'gardenar' ),
				]
			],

			'rt_footer_max_width' => [
				'type'        => 'number',
				'label'       => __( 'Footer Max Width (PX)', 'gardenar' ),
				'description' => __( 'Enter a number greater than 992.', 'gardenar' ),
				'condition'   => [ 'rt_footer_width', '==', '-fluid' ]
			],

			'rt_sticky_footer' => [
				'type'        => 'switch',
				'label'       => __( 'Sticky Footer', 'gardenar' ),
				'description' => __( 'Show footer at the top when scrolling down', 'gardenar' ),
			],

			'rt_social_footer' => [
				'type'        => 'switch',
				'label'       => __( 'Social Icon', 'gardenar' ),
				'description' => __( 'Show footer at the social icon, This options available for only Footer layout.', 'gardenar' ),
			],
			'rt_shape_footer' => [
				'type'        => 'switch',
				'label'       => __( 'Shape', 'gardenar' ),
				'description' => __( 'Show footer at the shape display', 'gardenar' ),
			],

			'rt_footer_left_image' => [
				'type'         => 'image',
				'label'        => __( 'Footer Left Image', 'gardenar' ),
				'description'  => __( 'Upload footer image for your site.', 'gardenar' ),
				'button_label' => __( 'Footer image', 'gardenar' ),
			],
			'rt_footer_right_image' => [
				'type'         => 'image',
				'label'        => __( 'Footer Right Image', 'gardenar' ),
				'description'  => __( 'Upload footer image for your site.', 'gardenar' ),
				'button_label' => __( 'Footer image', 'gardenar' ),
			],

			'rt_footer_copyright' => [
				'type'        => 'tinymce',
				'label'       => __( 'Footer Copyright Text', 'gardenar' ),
				'default'     => __( 'Copyright© [y] Gardenar by RadiusTheme', 'gardenar' ),
				'description' => __( 'Add [y] flag anywhere for dynamic year.', 'gardenar' ),
			],

		] );

	}

}
