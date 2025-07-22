<?php
/**
 * Theme Customizer Pannels
 *
 * @package gardenar
 */

namespace RT\Gardenar\Api\Customizer;

use RT\Gardenar\Traits\SingletonTraits;
use RTFramework\Customize;

/**
 * Customizer class
 */
class Pannels {
	use SingletonTraits;

	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function __construct() {
		add_action('init', [ $this, 'add_panels'] );
	}

	/**
	 * Add Panels
	 * @return void
	 */
	public function add_panels() {
		Customize::add_panels(
			[
				[
					'id'          => 'rt_header_panel',
					'title'       => esc_html__( 'Header - Topbar - Menu', 'gardenar' ),
					'description' => esc_html__( 'Gardenar Header', 'gardenar' ),
					'priority'    => 22,
				],
				[
					'id'          => 'rt_typography_panel',
					'title'       => esc_html__( 'Typography', 'gardenar' ),
					'description' => esc_html__( 'Gardenar Typography', 'gardenar' ),
					'priority'    => 24,
				],
				[
					'id'          => 'rt_color_panel',
					'title'       => esc_html__( 'Colors', 'gardenar' ),
					'description' => esc_html__( 'Gardenar Color Settings', 'gardenar' ),
					'priority'    => 28,
				],
				[
					'id'          => 'rt_layouts_panel',
					'title'       => esc_html__( 'Layout Settings', 'gardenar' ),
					'description' => esc_html__( 'Gardenar Layout Settings', 'gardenar' ),
					'priority'    => 34,
				],
				[
					'id'          => 'rt_contact_social_panel',
					'title'       => esc_html__( 'Contact & Socials', 'gardenar' ),
					'description' => esc_html__( 'Gardenar Contact & Socials', 'gardenar' ),
					'priority'    => 24,
				],

			]
		);
	}

}
