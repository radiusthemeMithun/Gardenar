<?php
/**
 * Theme Customizer - Service
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
class Service extends Customizer {

	protected $section_service = 'rt_service_section';


	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_service,
			'title'       => __( 'Service Option', 'gardenar' ),
			'description' => __( 'Service Section', 'gardenar' ),
			'priority'    => 36
		] );

		Customize::add_controls( $this->section_service, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {
		return apply_filters( 'rt_service_controls', [

			'rt_service_archive_heading' => [
				'type'  => 'heading',
				'label' => __( 'Service Archive Option', 'gardenar' ),
			],

			'rt_service_style' => [
				'type'        => 'select',
				'label'       => __( 'Service Layout', 'gardenar' ),
				'description' => __( 'This service 02 layout only icon show', 'gardenar' ),
				'default'     => 'default',
				'choices'     => [
					'default' => __( 'Service 01', 'gardenar' ),
					'2'    => __( 'Service 02', 'gardenar' ),
				]
			],

			'rt_service_item_number' => [
				'type'    => 'number',
				'label'   => __( 'Service Archive Item Limit', 'gardenar' ),
				'default' => '8',
			],

			'rt_service_ar_excerpt' => [
				'type'    => 'switch',
				'label'   => __( 'Excerpt Visibility', 'gardenar' ),
				'default' => 0
			],

			'rt_service_excerpt_limit' => [
				'type'    => 'number',
				'label'   => __( 'Content Limit', 'gardenar' ),
				'default' => '15',
				'condition' => [ 'rt_service_ar_excerpt' ]
			],

			'rt_service_read_more' => [
				'type'    => 'switch',
				'label'   => __( 'Read More Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_service_banner_archive_title' => [
				'type'    => 'text',
				'label'   => __( 'Archive Banner Title', 'gardenar' ),
				'default' => __( 'Our Services', 'gardenar' ),
			],

			'rt_service_slug' => [
				'type'    => 'text',
				'label'   => __( 'Archive Slug', 'gardenar' ),
				'default' => 'service',
			],

			'rt_service_cat_slug' => [
				'type'    => 'text',
				'label'   => __( 'Category Slug', 'gardenar' ),
				'default' => 'service-category',
			],

			'rt_service_single_related_heading' => [
				'type'  => 'heading',
				'label' => __( 'Service Single Related Option', 'gardenar' ),
			],

			'rt_service_related' => [
				'type'    => 'switch',
				'label'   => __( 'Related Visibility', 'gardenar' ),
				'default' => 0
			],

			'rt_service_related_title' => [
				'type'    => 'text',
				'label'   => __( 'Service Related Title', 'gardenar' ),
				'default' => __( 'Related Service', 'gardenar' ),
				'condition' => [ 'rt_service_related' ]
			],

			'rt_service_related_limit' => [
				'type'    => 'number',
				'label'   => __( 'Related Item Limit', 'gardenar' ),
				'default' => 3,
				'condition' => [ 'rt_service_related' ]
			],

			'rt_service_related_query' => [
				'type'        => 'select',
				'label'       => __( 'Query Type', 'gardenar' ),
				'description' => __( 'Service Query Type', 'gardenar' ),
				'default'     => 'cat',
				'choices'     => [
					'cat' => esc_html__( 'Posts in the same Categories', 'gardenar' ),
					'tag' => esc_html__( 'Posts in the same Tags', 'gardenar' ),
					'author' => esc_html__( 'Posts by the same Author', 'gardenar' ),
				],
				'condition' => [ 'rt_service_related' ]
			],

			'rt_service_related_sort' => [
				'type'        => 'select',
				'label'       => __( 'Sort Order', 'gardenar' ),
				'description' => __( 'Display Service Order', 'gardenar' ),
				'default'     => 'recent',
				'choices'     => [
					'recent' => esc_html__( 'Recent Posts', 'gardenar' ),
					'rand' => esc_html__( 'Random Posts', 'gardenar' ),
					'modified' => esc_html__( 'Last Modified Posts', 'gardenar' ),
					'popular' => esc_html__( 'Most Commented posts', 'gardenar' ),
					'views' => esc_html__( 'Most Viewed posts', 'gardenar' ),
				],
				'condition' => [ 'rt_service_related' ]
			],

		] );
	}


}
