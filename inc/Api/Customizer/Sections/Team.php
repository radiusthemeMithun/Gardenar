<?php
/**
 * Theme Customizer - Team
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
class Team extends Customizer {

	protected $section_team = 'rt_team_section';


	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_team,
			'title'       => __( 'Team Option', 'gardenar' ),
			'description' => __( 'Team Section', 'gardenar' ),
			'priority'    => 35
		] );

		Customize::add_controls( $this->section_team, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {
		return apply_filters( 'rt_team_controls', [

			'rt_team_archive_heading' => [
				'type'  => 'heading',
				'label' => __( 'Team Archive Option', 'gardenar' ),
			],

			'rt_team_style' => [
				'type'        => 'select',
				'label'       => __( 'Team Layout', 'gardenar' ),
				'description' => __( 'This option works only for team layout', 'gardenar' ),
				'default'     => 'default',
				'choices'     => [
					'default' => __( 'Team 01', 'gardenar' ),
					'2'    => __( 'Team 02', 'gardenar' ),
				]
			],

			'rt_team_item_number' => [
				'type'    => 'number',
				'label'   => __( 'Team Archive Item Limit', 'gardenar' ),
				'default' => '8',
			],

			'rt_team_ar_designation' => [
				'type'    => 'switch',
				'label'   => __( 'Designation Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_team_ar_social' => [
				'type'    => 'switch',
				'label'   => __( 'Social Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_team_ar_excerpt' => [
				'type'    => 'switch',
				'label'   => __( 'Excerpt Visibility', 'gardenar' ),
				'default' => 0
			],

			'rt_team_excerpt_limit' => [
				'type'    => 'number',
				'label'   => __( 'Content Limit', 'gardenar' ),
				'default' => '12',
				'condition' => [ 'rt_team_ar_excerpt' ]
			],

			'rt_team_banner_archive_title' => [
				'type'    => 'text',
				'label'   => __( 'Archive Banner Title', 'gardenar' ),
				'default' => __( 'Our Teams', 'gardenar' ),
			],

			'rt_team_slug' => [
				'type'    => 'text',
				'label'   => __( 'Archive Slug', 'gardenar' ),
				'default' => __( 'team', 'gardenar' ),
			],

			'rt_team_cat_slug' => [
				'type'    => 'text',
				'label'   => __( 'Category Slug', 'gardenar' ),
				'default' => 'team-category',
			],

			'rt_team_single_heading' => [
				'type'  => 'heading',
				'label' => __( 'Team Single Option', 'gardenar' ),
			],

			'rt_team_single_author' => [
				'type'        => 'select',
				'label'       => __( 'Team Author Layout', 'gardenar' ),
				'default'     => 'team-thumb-square',
				'choices'     => [
					'team-thumb-square'    => __( 'Thumb Square', 'gardenar' ),
					'team-thumb-round'    => __( 'Thumb Round', 'gardenar' ),
				]
			],

			'rt_team_single_author_order' => [
				'type'        => 'select',
				'label'       => __( 'Team Author Order', 'gardenar' ),
				'default'     => 'thumb-left',
				'choices'     => [
					'thumb-left'    => __( 'Thumb Left', 'gardenar' ),
					'thumb-right'    => __( 'Thumb Right', 'gardenar' ),
				]
			],

			'rt_team_single_info' => [
				'type'    => 'switch',
				'label'   => __( 'Info Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_team_single_social' => [
				'type'    => 'switch',
				'label'   => __( 'Social Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_team_single_skill' => [
				'type'    => 'switch',
				'label'   => __( 'Skill Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_team_single_contact' => [
				'type'    => 'switch',
				'label'   => __( 'Contact Visibility', 'gardenar' ),
				'default' => 0
			],

			'rt_team_contact_title' => [
				'type'    => 'text',
				'label'   => __( 'Team Contact Title', 'gardenar' ),
				'default' => __( 'Team Contact', 'gardenar' ),
				'condition' => [ 'rt_team_single_contact' ]
			],

			'rt_team_single_related_heading' => [
				'type'  => 'heading',
				'label' => __( 'Team Single Related Option', 'gardenar' ),
			],

			'rt_team_related' => [
				'type'    => 'switch',
				'label'   => __( 'Related Visibility', 'gardenar' ),
				'default' => 0
			],

			'rt_team_related_title' => [
				'type'    => 'text',
				'label'   => __( 'Team Related Title', 'gardenar' ),
				'default' => __( 'Related Team', 'gardenar' ),
				'condition' => [ 'rt_team_related' ]
			],

			'rt_team_related_limit' => [
				'type'    => 'number',
				'label'   => __( 'Related Item Limit', 'gardenar' ),
				'default' => 4,
				'condition' => [ 'rt_team_related' ]
			],

			'rt_team_related_query' => [
				'type'        => 'select',
				'label'       => __( 'Query Type', 'gardenar' ),
				'description' => __( 'Team Query Type', 'gardenar' ),
				'default'     => 'cat',
				'choices'     => [
					'cat' => esc_html__( 'Posts in the same Categories', 'gardenar' ),
					'tag' => esc_html__( 'Posts in the same Tags', 'gardenar' ),
					'author' => esc_html__( 'Posts by the same Author', 'gardenar' ),
				],
				'condition' => [ 'rt_team_related' ]
			],

			'rt_team_related_sort' => [
				'type'        => 'select',
				'label'       => __( 'Sort Order', 'gardenar' ),
				'description' => __( 'Display Team Order', 'gardenar' ),
				'default'     => 'recent',
				'choices'     => [
					'recent' => esc_html__( 'Recent Posts', 'gardenar' ),
					'rand' => esc_html__( 'Random Posts', 'gardenar' ),
					'modified' => esc_html__( 'Last Modified Posts', 'gardenar' ),
					'popular' => esc_html__( 'Most Commented posts', 'gardenar' ),
					'views' => esc_html__( 'Most Viewed posts', 'gardenar' ),
				],
				'condition' => [ 'rt_team_related' ]
			],

		] );
	}


}
