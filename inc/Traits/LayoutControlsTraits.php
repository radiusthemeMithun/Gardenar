<?php
/**
 * LayoutControls
 */

namespace RT\Gardenar\Traits;

// Do not allow directly accessing this file.
use RT\Gardenar\Helpers\Fns;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'This script cannot be accessed directly.' );
}

trait LayoutControlsTraits {
	public function get_layout_controls( $prefix = '' ) {

		$_left_text  = __( 'Left Sidebar', 'gardenar' );
		$_right_text = __( 'Right Sidebar', 'gardenar' );
		$left_text   = $_left_text;
		$right_text  = $_right_text;
		$image_left  = 'sidebar-left.png';
		$image_right = 'sidebar-right.png';

		if ( is_rtl() ) {
			$left_text   = $_right_text;
			$right_text  = $_left_text;
			$image_left  = 'sidebar-right.png';
			$image_right = 'sidebar-left.png';
		}

		return apply_filters( "gardenar_{$prefix}_layout_controls", [

			$prefix . '_layout' => [
				'type'    => 'image_select',
				'label'   => __( 'Choose Layout', 'gardenar' ),
				'default' => 'right-sidebar',
				'choices' => [
					'left-sidebar'  => [
						'image' => gardenar_get_img( $image_left ),
						'name'  => $left_text,
					],
					'full-width'    => [
						'image' => gardenar_get_img( 'sidebar-full.png' ),
						'name'  => __( 'Full Width', 'gardenar' ),
					],
					'right-sidebar' => [
						'image' => gardenar_get_img( $image_right ),
						'name'  => $right_text,
					],
				]
			],

			$prefix . '_sidebar' => [
				'type'    => 'select',
				'label'   => __( 'Choose a Sidebar', 'gardenar' ),
				'default' => 'default',
				'choices' => Fns::sidebar_lists()
			],

			$prefix . '_page_bg_image' => [
				'type'         => 'image',
				'label'        => __( 'Page Background Image', 'gardenar' ),
				'description'  => __( 'Upload Background Image', 'gardenar' ),
				'button_label' => __( 'Background Image', 'gardenar' ),
			],

			$prefix . '_page_bg_color' => [
				'type'         => 'color',
				'label'        => __( 'Page Background Color', 'gardenar' ),
				'description'  => __( 'Inter Background Color', 'gardenar' ),
			],

			$prefix . '_header_heading' => [
				'type'  => 'heading',
				'label' => __( 'Header Settings', 'gardenar' ),
			],

			$prefix . '_header_style' => [
				'type'    => 'select',
				'default' => 'default',
				'label'   => __( 'Header Layout', 'gardenar' ),
				'choices' => [
					'default' => __( '--Default--', 'gardenar' ),
					'1'       => __( 'Layout 1', 'gardenar' ),
					'2'       => __( 'Layout 2', 'gardenar' ),
				],
			],

			$prefix . '_top_bar' => [
				'type'    => 'select',
				'label'   => __( 'Top Bar', 'gardenar' ),
				'default' => 'default',
				'choices' => [
					'default' => __( '--Default--', 'gardenar' ),
					'on'      => __( 'On', 'gardenar' ),
					'off'     => __( 'Off', 'gardenar' ),
				]
			],

			$prefix . '_banner_heading' => [
				'type'  => 'heading',
				'label' => __( 'Banner Settings', 'gardenar' ),
			],

			$prefix . '_banner' => [
				'type'    => 'select',
				'default' => 'default',
				'label'   => __( 'Banner Visibility', 'gardenar' ),
				'choices' => [
					'default' => __( '--Default--', 'gardenar' ),
					'on'      => __( 'On', 'gardenar' ),
					'off'     => __( 'Off', 'gardenar' ),
				],
			],

			$prefix . '_breadcrumb_title' => [
				'type'    => 'select',
				'default' => 'default',
				'label'   => __( 'Banner Title', 'gardenar' ),
				'choices' => [
					'default' => __( '--Default--', 'gardenar' ),
					'on'      => __( 'On', 'gardenar' ),
					'off'     => __( 'Off', 'gardenar' ),
				],
			],

			$prefix . '_breadcrumb' => [
				'type'    => 'select',
				'default' => 'default',
				'label'   => __( 'Banner Breadcrumb', 'gardenar' ),
				'choices' => [
					'default' => __( '--Default--', 'gardenar' ),
					'on'      => __( 'On', 'gardenar' ),
					'off'     => __( 'Off', 'gardenar' ),
				],
			],

			$prefix . '_banner_image' => [
				'type'         => 'image',
				'label'        => __( 'Banner Image', 'gardenar' ),
				'description'  => __( 'Upload Banner Image', 'gardenar' ),
				'button_label' => __( 'Banner Image', 'gardenar' ),
			],

			$prefix . '_banner_color' => [
				'type'         => 'color',
				'label'        => __( 'Banner Background Color', 'gardenar' ),
				'description'  => __( 'Inter Background Color', 'gardenar' ),
			],

			$prefix . '_footer_heading' => [
				'type'  => 'heading',
				'label' => __( 'Footer Settings', 'gardenar' ),
			],

			$prefix . '_footer_style'  => [
				'type'    => 'select',
				'default' => 'default',
				'label'   => __( 'Footer Layout', 'gardenar' ),
				'choices' => [
					'default' => __( '--Default--', 'gardenar' ),
					'1'       => __( 'Layout 1', 'gardenar' ),
					'2'       => __( 'Layout 2', 'gardenar' ),
				],
			],

		] );


	}


}
