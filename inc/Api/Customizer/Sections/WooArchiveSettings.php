<?php
namespace RT\Gardenar\Api\Customizer\Sections;

use RT\Gardenar\Api\Customizer;
use RTFramework\Customize;
/**
 * Customizer class
 */
class WooArchiveSettings extends Customizer {
	protected $section_wooarchive_settins = 'gardenar_woo_archive_settings';
	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_wooarchive_settins,
			'title'       => __( 'Woocommerce Settings', 'gardenar' ),
			'description' => __( 'gardenar Woocommerce Archive Settings', 'gardenar' ),
			'priority'    => 1,
			'panel' => 'woocommerce',
		] );

		Customize::add_controls( $this->section_wooarchive_settins, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {
		return apply_filters( 'gardenar_service_controls', [

			'rt_woo_archive_heading' => [
				'type'  => 'heading',
				'label' => __( 'Woocommerce Archive Option', 'gardenar' ),
			],

			'products_cols_width' => [
				'type'    => 'number',
				'label'   => __( 'Products Per Column', 'gardenar' ),
				'description' => __('Use product per col default 4', 'gardenar'),
				'default' => '4',
			],

			'products_per_page' => [
				'type'    => 'number',
				'label'   => __( 'Number of items per page', 'gardenar' ),
				'description' => __( 'Effect only for Shop custom page template', 'gardenar' ),
				'default' => '12',
			],

			'wc_woo_cat' => [
				'type'    => 'switch',
				'label'   => __( 'Category', 'gardenar' ),
				'default' => 1
			],

			'wc_woo_cart' => [
				'type'    => 'switch',
				'label'   => __( 'Cart', 'gardenar' ),
				'default' => 0
			],

			'wc_shop_quickview_icon' => [
				'type'    => 'switch',
				'label'   => __( 'QuickView', 'gardenar' ),
				'default' => 0
			],

			'wc_shop_compare_icon' => [
				'type'    => 'switch',
				'label'   => __( 'Compare', 'gardenar' ),
				'default' => 0
			],

			'wc_shop_wishlist_icon' => [
				'type'    => 'switch',
				'label'   => __( 'Wishlist', 'gardenar' ),
				'default' => 0
			],

			'wc_shop_qcheckout_icon' => [
				'type'    => 'switch',
				'label'   => __( 'Quick Checkout', 'gardenar' ),
				'default' => 0
			],

			'wc_shop_rating' => [
				'type'    => 'switch',
				'label'   => __( 'Rating', 'gardenar' ),
				'default' => 1
			],

			'rt_woo_variation_attr' => [
				'type'    => 'switch',
				'label'   => __( 'Variation Attribute', 'gardenar' ),
				'default' => 0
			],

			'wc_shop_sale_flash' => [
				'type'    => 'switch',
				'label'   => __( 'Sale Flash', 'gardenar' ),
				'default' => 1
			],

			'wc_sale_label' => [
				'type'    => 'select',
				'default' => 'text',
				'label'   => __( 'Sale Product Label', 'gardenar' ),
				'condition' => [ 'wc_shop_sale_flash' ],
				'choices' => [
					'percentage'       => __( 'Percentage', 'gardenar' ),
					'text'       => __( 'Text', 'gardenar' ),
				],
			],

			'rt_shop_banner_single_title' => [
				'type'    => 'text',
				'label'   => __( 'Shop Banner Title', 'gardenar' ),
				'default' => __( 'Shop Page', 'gardenar' ),
			],

		] );
	}
}
