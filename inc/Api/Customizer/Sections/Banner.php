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
class Banner extends Customizer {

	protected $section_breadcrumb = 'rt_breadcrumb_section';

	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_breadcrumb,
			'title'       => __( 'Banner - Breadcrumb', 'gardenar' ),
			'description' => __( 'Banner Section', 'gardenar' ),
			'priority'    => 23
		] );

		Customize::add_controls( $this->section_breadcrumb, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {

		return apply_filters( 'rt_top_bar_controls', [

			'rt_banner' => [
				'type'    => 'switch',
				'label'   => __( 'Banner Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_banner_style' => [
				'type'      => 'image_select',
				'label'     => __( 'Banner Style', 'gardenar' ),
				'default'   => 1,
				'choices'   => Fns::image_placeholder( 'banner', 1 ),
				'condition' => [ 'rt_banner' ]
			],

			'rt_breadcrumb_alignment' => [
				'type'    => 'select',
				'label'   => __( 'Banner Alignment', 'gardenar' ),
				'default' => 'align-items-center',
				'choices' => [
					'default'               => __( 'Alignment Default', 'gardenar' ),
					'align-items-center'    => __( 'Alignment Center', 'gardenar' ),
					'align-items-end'       => __( 'Alignment right', 'gardenar' ),
				],
				'condition' => [ 'rt_banner' ]
			],

			'rt_banner_image' => [
				'type'         => 'image',
				'label'        => __( 'Banner Background Image', 'gardenar' ),
				'description'  => __( 'Upload Banner Image', 'gardenar' ),
				'button_label' => __( 'Banner', 'gardenar' ),
				'condition'    => [ 'rt_banner' ]
			],

			'rt_banner_color' => [
				'type'         => 'alfa_color',
				'label'        => __( 'Banner Background Color', 'gardenar' ),
				'description'  => __( 'Inter Banner Color', 'gardenar' ),
				'condition'    => [ 'rt_banner' ]
			],

			'rt_banner_image_attr' => [
				'type'      => 'bg_attribute',
				'condition' => [ 'rt_banner' ],
				'default'   => json_encode(
					[
						'position'   => 'center center',
						'attachment' => 'scroll',
						'repeat'     => 'no-repeat',
						'size'       => 'cover',
					]
				)
			],

			'rt_banner_color_opacity' => [
				'type'         => 'number',
				'label'        => __( 'Background Opacity', 'gardenar' ),
				'description'  => __( 'Inter Banner Opacity', 'gardenar' ),
				'condition'    => [ 'rt_banner' ]
			],

			'rt_banner_padding_top' => [
				'type'        => 'number',
				'label'       => __( 'Banner Padding Top (px)', 'gardenar' ),
				'default'     => '',
				'condition'   => [ 'rt_banner' ]
			],

			'rt_banner_padding_bottom' => [
				'type'        => 'number',
				'label'       => __( 'Banner Padding Bottom (px)', 'gardenar' ),
				'default'     => '',
				'condition'   => [ 'rt_banner' ]
			],

			'rt_banner_color_mode' => [
				'type'    => 'select',
				'label'   => __( 'Banner Color Mode', 'gardenar' ),
				'default' => 'banner-dark',
				'choices' => [
					'banner-dark'    => __( 'Dark Color', 'gardenar' ),
					'banner-light'   => __( 'Light Color', 'gardenar' ),
				],
				'condition' => [ 'rt_banner' ]
			],

			'rt_banner1' => [
				'type'      => 'heading',
				'label'     => __( 'Breadcrumb Settings', 'gardenar' ),
				'condition' => [ 'rt_banner' ]
			],

			'rt_breadcrumb_title' => [
				'type'      => 'switch',
				'label'     => __( 'Banner Title', 'gardenar' ),
				'default'   => 1,
				'condition' => [ 'rt_banner' ]
			],

			'rt_breadcrumb' => [
				'type'      => 'switch',
				'label'     => __( 'Banner Breadcrumb', 'gardenar' ),
				'condition' => [ 'rt_banner' ]
			],

			'rt_breadcrumb_border' => [
				'type'      => 'switch',
				'label'     => __( 'Breadcrumb Border', 'gardenar' ),
				'default'   => 0,
				'condition' => [ 'rt_banner' ]
			],

		] );

	}

}
