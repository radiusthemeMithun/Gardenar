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
class Blog extends Customizer {

	protected $section_blog = 'rt_blog_section';


	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_blog,
			'title'       => __( 'Blog Archive', 'gardenar' ),
			'description' => __( 'Blog Section', 'gardenar' ),
			'priority'    => 25
		] );

		Customize::add_controls( $this->section_blog, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {
		return apply_filters( 'rt_blog_controls', [

			'rt_blog_style' => [
				'type'        => 'select',
				'label'       => __( 'Blog Style', 'gardenar' ),
				'description' => __( 'This option works only for blog layout', 'gardenar' ),
				'default'     => 'default',
				'choices'     => [
					'default' => __( 'Default From Theme', 'gardenar' ),
					'grid-2'    => __( 'Grid 2', 'gardenar' ),
					'list'    => __( 'List', 'gardenar' ),
				]
			],

			'rt_blog_column' => [
				'type'        => 'select',
				'label'       => __( 'Grid Column', 'gardenar' ),
				'description' => __( 'This option works only for large device', 'gardenar' ),
				'default'     => 'default',
				'choices'     => [
					'default'   => __( 'Default From Theme', 'gardenar' ),
					'col-lg-12' => __( '1 Column', 'gardenar' ),
					'col-lg-6'  => __( '2 Column', 'gardenar' ),
					'col-lg-4'  => __( '3 Column', 'gardenar' ),
					'col-lg-3'  => __( '4 Column', 'gardenar' ),
				]
			],

			'rt_blog_column_gap' => [
				'type'        => 'select',
				'label'       => __( 'Grid Column Gap', 'gardenar' ),
				'description' => __( 'This option works only for blog grid gap', 'gardenar' ),
				'default'     => 'g-4',
				'choices'     => [
					'g-1'  => __( 'Gap 1', 'gardenar' ),
					'g-2'  => __( 'Gap 2', 'gardenar' ),
					'g-3'  => __( 'Gap 3', 'gardenar' ),
					'g-4'  => __( 'Gap 4', 'gardenar' ),
					'g-5'  => __( 'Gap 5', 'gardenar' ),
				]
			],

			'rt_excerpt_limit' => [
				'type'    => 'number',
				'label'   => __( 'Content Limit', 'gardenar' ),
				'default' => '25',
			],

			'rt_blog_btn_style' => [
				'type'        => 'select',
				'label'       => __( 'Button Style', 'gardenar' ),
				'description' => __( 'This option works only for blog button style', 'gardenar' ),
				'default'     => 'button-3',
				'choices'     => [
					'button-1'  => __( 'Default', 'gardenar' ),
					'button-2'  => __( 'Button 2', 'gardenar' ),
					'button-3'  => __( 'Button 3', 'gardenar' ),
					'button-4'  => __( 'Button 4', 'gardenar' ),
				]
			],

			'rt_blog_btn_radius' => [
				'type'    => 'number',
				'label'   => __( 'Button Radius', 'gardenar' ),
				'default' => 50,
			],

			'rt_blog_pagination_style' => [
				'type'        => 'select',
				'label'       => __( 'Pagination Style', 'gardenar' ),
				'description' => __( 'This option works only for blog pagination style', 'gardenar' ),
				'default'     => 'pagination-area',
				'choices'     => [
					'pagination-area'  => __( 'Default', 'gardenar' ),
					'pagination-area-2'  => __( 'Style 2', 'gardenar' ),
				]
			],

			'rt_meta_heading' => [
				'type'  => 'heading',
				'label' => __( 'Post Meta Settings', 'gardenar' ),
			],

			'rt_blog_meta_style' => [
				'type'    => 'select',
				'label'   => __( 'Meta Style', 'gardenar' ),
				'default' => 'meta-style-default',
				'choices' => Fns::meta_style()
			],

			'rt_single_above_meta_style' => [
				'type'    => 'select',
				'label'   => __( 'Title Above Meta Style', 'gardenar' ),
				'default' => 'meta-style-dash',
				'choices' => Fns::meta_style( [ 'meta-style-dash-bg', 'meta-style-pipe' ] )
			],

			'rt_blog_meta' => [
				'type'        => 'select2',
				'label'       => __( 'Choose Meta', 'gardenar' ),
				'description' => __( 'You can sort meta by drag and drop', 'gardenar' ),
				'placeholder' => __( 'Choose Meta', 'gardenar' ),
				'multiselect' => true,
				'default'     => 'author,date,category',
				'choices'     => Fns::blog_meta_list(),
			],

			'rt_visibility' => [
				'type'  => 'heading',
				'label' => __( 'Visibility Section', 'gardenar' ),
			],

			'rt_meta_visibility' => [
				'type'    => 'switch',
				'label'   => __( 'Meta Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_blog_above_meta_visibility' => [
				'type'  => 'switch',
				'label' => __( 'Title Above Meta Visibility', 'gardenar' ),
			],

			'rt_blog_content_visibility' => [
				'type'    => 'switch',
				'label'   => __( 'Entry Content Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_video_visibility' => [
				'type'    => 'switch',
				'label'   => __( 'Video Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_blog_footer_visibility' => [
				'type'    => 'switch',
				'label'   => __( 'Entry Footer Visibility', 'gardenar' ),
				'default' => 1
			],

			'rt_animation_heading' => [
				'type'  => 'heading',
				'label' => __( 'Animation', 'gardenar' ),
			],

			'rt_animation' => [
				'type'      => 'switch',
				'label'       => __( 'Animation', 'gardenar' ),
				'default'     => 0,
			],

			'rt_animation_effect' => [
				'type'        => 'select',
				'label' => __( 'Entrance Animation', 'gardenar' ),
				'description' => __( 'This option works only for blog animation effect', 'gardenar' ),
				'default'     => 'fadeInUp',
				'choices'     => [
					'bounce' => esc_html__( 'bounce', 'gardenar' ),
					'flash' => esc_html__( 'flash', 'gardenar' ),
					'pulse' => esc_html__( 'pulse', 'gardenar' ),
					'rubberBand' => esc_html__( 'rubberBand', 'gardenar' ),
					'shakeX' => esc_html__( 'shakeX', 'gardenar' ),
					'shakeY' => esc_html__( 'shakeY', 'gardenar' ),
					'headShake' => esc_html__( 'headShake', 'gardenar' ),
					'swing' => esc_html__( 'swing', 'gardenar' ),
					'fadeIn' => esc_html__( 'fadeIn', 'gardenar' ),
					'fadeInUp' => esc_html__( 'fadeInUp', 'gardenar' ),
					'fadeInDown' => esc_html__( 'fadeInDown', 'gardenar' ),
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'gardenar' ),
					'fadeInRight' => esc_html__( 'fadeInRight', 'gardenar' ),
					'bounceIn' => esc_html__( 'bounceIn', 'gardenar' ),
					'bounceInUp' => esc_html__( 'bounceInUp', 'gardenar' ),
					'bounceInDown' => esc_html__( 'bounceInDown', 'gardenar' ),
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'gardenar' ),
					'bounceInRight' => esc_html__( 'bounceInRight', 'gardenar' ),
					'slideInUp' => esc_html__( 'slideInUp', 'gardenar' ),
					'slideInDown' => esc_html__( 'slideInDown', 'gardenar' ),
					'slideInLeft' => esc_html__( 'slideInLeft', 'gardenar' ),
					'slideInRight' => esc_html__( 'slideInRight', 'gardenar' ),
				],
				'condition' => [ 'rt_animation' ],
			],

			'delay' => [
				'type'  => 'text',
				'label' => __( 'Delay', 'gardenar' ),
				'default' => '200',
				'condition' => [ 'rt_animation' ],
			],

			'duration' => [
				'type'  => 'text',
				'label' => __( 'Duration', 'gardenar' ),
				'default' => '1200',
				'condition' => [ 'rt_animation' ],
			],

		] );
	}


}
