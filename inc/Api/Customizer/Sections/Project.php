<?php
/**
 * Theme Customizer - Project
 *
 * @package gardenar
 */

namespace RT\Gardenar\Api\Customizer\Sections;

use RT\Gardenar\Api\Customizer;
use RTFramework\Customize;

/**
 * Customizer class
 */
class Project extends Customizer {

	protected $section_project = 'rt_project_section';


	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_project,
			'title'       => __( 'Project Option', 'gardenar' ),
			'description' => __( 'Project Section', 'gardenar' ),
			'priority'    => 37
		] );

		Customize::add_controls( $this->section_project, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {
		return apply_filters( 'rt_project_controls', [

			'rt_project_archive_heading' => [
				'type'  => 'heading',
				'label' => __( 'Project Archive Option', 'gardenar' ),
			],

			'rt_project_style' => [
				'type'        => 'select',
				'label'       => __( 'Project Layout', 'gardenar' ),
				'description' => __( 'This option works only for project layout', 'gardenar' ),
				'default'     => 'default',
				'choices'     => [
					'default' => __( 'Project 01', 'gardenar' ),
					'2'    => __( 'Project 02', 'gardenar' ),
					'3'    => __( 'Project 03', 'gardenar' ),
					'4'    => __( 'Project 04', 'gardenar' ),
				]
			],

			'rt_project_item_number' => [
				'type'    => 'number',
				'label'   => __( 'Archive Item Limit', 'gardenar' ),
				'default' => '6',
			],

			'rt_project_filter' => [
				'type'        => 'select',
				'label'       => __( 'Image Filter', 'gardenar' ),
				'default'     => 'default',
				'choices'     => [
					'default' => __( 'Default', 'gardenar' ),
					'grayscale'    => __( 'Grayscale', 'gardenar' ),
				]
			],

			'rt_project_ar_cat' => [
				'type'    => 'switch',
				'label'   => __( 'Category Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_project_ar_button' => [
				'type'    => 'switch',
				'label'   => __( 'Button Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_project_ar_excerpt' => [
				'type'    => 'switch',
				'label'   => __( 'Excerpt Visibility', 'gardenar' ),
				'default' => 0
			],

			'rt_project_excerpt_limit' => [
				'type'    => 'number',
				'label'   => __( 'Content Limit', 'gardenar' ),
				'default' => '12',
				'condition' => [ 'rt_project_ar_excerpt' ]
			],

			'rt_project_banner_archive_title' => [
				'type'    => 'text',
				'label'   => __( 'Archive Banner Title', 'gardenar' ),
				'default' => __( 'Our Projects', 'gardenar' ),
			],

			'rt_project_slug' => [
				'type'    => 'text',
				'label'   => __( 'Archive Slug', 'gardenar' ),
				'default' => 'project',
			],

			'rt_project_cat_slug' => [
				'type'    => 'text',
				'label'   => __( 'Category Slug', 'gardenar' ),
				'default' => 'project-category',
			],

			'rt_project_single_heading' => [
				'type'  => 'heading',
				'label' => __( 'Project Single Option', 'gardenar' ),
			],

			'rt_project_title' => [
				'type'    => 'switch',
				'label'   => __( 'Info Title Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_project_text' => [
				'type'    => 'switch',
				'label'   => __( 'Text Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_project_cat' => [
				'type'    => 'switch',
				'label'   => __( 'Category Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_project_client' => [
				'type'    => 'switch',
				'label'   => __( 'Client Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_project_start' => [
				'type'    => 'switch',
				'label'   => __( 'Start Time Visibility', 'gardenar' ),
				'default' => 1
			],
			'rt_project_location' => [
				'type'    => 'switch',
				'label'   => __( 'Location', 'gardenar' ),
				'default' => 1
			],
			'rt_project_date' => [
				'type'    => 'switch',
				'label'   => __( 'Date', 'gardenar' ),
				'default' => 1
			],

			'rt_project_end' => [
				'type'    => 'switch',
				'label'   => __( 'End Time Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_project_weblink' => [
				'type'    => 'switch',
				'label'   => __( 'Weblink Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_project_rating' => [
				'type'    => 'switch',
				'label'   => __( 'Rating Visibility', 'gardenar' ),
				'default' => 0
			],

			'rt_project_single_related_heading' => [
				'type'  => 'heading',
				'label' => __( 'Project Single Related Option', 'gardenar' ),
			],

			'rt_project_related' => [
				'type'    => 'switch',
				'label'   => __( 'Related Visibility', 'gardenar' ),
				'default' => 0
			],

			'rt_project_related_title' => [
				'type'    => 'text',
				'label'   => __( 'Project Related Title', 'gardenar' ),
				'default' => __( 'Related Projects', 'gardenar' ),
				'condition' => [ 'rt_project_related' ]
			],

			'rt_project_related_limit' => [
				'type'    => 'number',
				'label'   => __( 'Related Item Limit', 'gardenar' ),
				'default' => 3,
				'condition' => [ 'rt_project_related' ]
			],

			'rt_project_related_title_limit' => [
				'type'    => 'number',
				'label'   => __( 'Related Title Limit', 'gardenar' ),
				'default' => 5,
				'condition' => [ 'rt_project_related' ]
			],

			'rt_project_related_query' => [
				'type'        => 'select',
				'label'       => __( 'Query Type', 'gardenar' ),
				'description' => __( 'Project Query Type', 'gardenar' ),
				'default'     => 'cat',
				'choices'     => [
					'cat' => esc_html__( 'Posts in the same Categories', 'gardenar' ),
					'tag' => esc_html__( 'Posts in the same Tags', 'gardenar' ),
					'author' => esc_html__( 'Posts by the same Author', 'gardenar' ),
				],
				'condition' => [ 'rt_project_related' ]
			],

			'rt_project_related_sort' => [
				'type'        => 'select',
				'label'       => __( 'Sort Order', 'gardenar' ),
				'description' => __( 'Display Project Order', 'gardenar' ),
				'default'     => 'recent',
				'choices'     => [
					'recent' => esc_html__( 'Recent Posts', 'gardenar' ),
					'rand' => esc_html__( 'Random Posts', 'gardenar' ),
					'modified' => esc_html__( 'Last Modified Posts', 'gardenar' ),
					'popular' => esc_html__( 'Most Commented posts', 'gardenar' ),
					'views' => esc_html__( 'Most Viewed posts', 'gardenar' ),
				],
				'condition' => [ 'rt_project_related' ]
			],

		] );
	}


}
