<?php
/**
 * @author  RadiusTheme
 * @since   1.0.0
 * @version 1.1.0
 */

namespace RT\Gardenar\Modules;
use RT\Gardenar\Traits\SingletonTraits;

require_once get_template_directory() . '/inc/Lib/class-tgm-plugin-activation.php';
class TgmConfig {

	use SingletonTraits;

	public $base;
	public $path;

	public function __construct() {
		$this->base = 'gardenar';
		$this->path = get_template_directory() . '/plugin-bundle/';

		add_action( 'tgmpa_register', [ $this, 'register_required_plugins' ] );
	}

	public function register_required_plugins() {
		$plugins = [
			// Bundled
			[
				'name'     => 'Gardenar Core',
				'slug'     => 'gardenar-core',
				'source'   => 'gardenar-core.zip',
				'required' => true,
				'version'  => '1.1.2'
			],
			[
				'name'     => 'RT Framework',
				'slug'     => 'rt-framework',
				'source'   => 'rt-framework.zip',
				'required' => true,
				'version'  => '3.0.3'
			],

			// Repository
			[
				'name'     => esc_html__('WooCommerce','gardenar'),
				'slug'     => 'woocommerce',
				'required' => false,
			],
			[
				'name'     => esc_html__('Breadcrumb NavXT','gardenar'),
				'slug'     => 'breadcrumb-navxt',
				'required' => false,
			],
			[
				'name'     => esc_html__('Elementor Page Builder','gardenar'),
				'slug'     => 'elementor',
				'required' => false,
			],
			[
				'name'     => esc_html__('WP Fluent Forms','gardenar'),
				'slug'     => 'fluentform',
				'required' => false,
			],
			[
				'name'     => esc_html__('One Click Demo Import','gardenar'),
				'slug'     => 'one-click-demo-import',
				'required' => false,
			],
			[
				'name'     => esc_html__('ShopBuilder - Elementor WooCommerce Builder Addons','gardenar'),
				'slug'     => 'shopbuilder',
				'required' => false,
			],
		];

		$config = [
			'id'           => $this->base,
			'default_path' => $this->path,
			'menu'         => $this->base . '-install-plugins',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => '',
			'is_automatic' => false,
			'message'      => '',
		];

		tgmpa( $plugins, $config );
	}
}
