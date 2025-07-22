<?php
/**
 * Theme Customizer - Header
 *
 * @package gardenar
 */

namespace RT\Gardenar\Api\Customizer\Sections;

use RT\Gardenar\Api\Customizer;
use RTFramework\Customize;

/**
 * Customizer class
 */
class Labels extends Customizer {
	protected $section_labels = 'rt_labels_section';

	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_labels,
			'title'       => __( 'Modify Static Text', 'gardenar' ),
			'description' => __( 'You can change all static text of the theme.', 'gardenar' ),
			'priority'    => 999
		] );
		Customize::add_controls( $this->section_labels, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {

		return apply_filters( 'rt_labels_controls', [

			'rt_header_labels' => [
				'type'  => 'heading',
				'label' => __( 'Header Labels', 'gardenar' ),
			],

			'rt_get_menu_label' => [
				'type'        => 'text',
				'label'       => __( 'Menu Text', 'gardenar' ),
				'description' => __( 'Content: Menu Button', 'gardenar' ),
			],

			'rt_get_login_label' => [
				'type'        => 'text',
				'label'       => __( 'Log In', 'gardenar' ),
				'default'     => __( 'Log In', 'gardenar' ),
				'description' => __( 'Content: SignIn Button', 'gardenar' ),
			],

			'rt_get_started_label' => [
				'type'        => 'text',
				'label'       => __( 'Get Started', 'gardenar' ),
				'default'     => __( 'Get Started', 'gardenar' ),
				'description' => __( 'Content: Get Started', 'gardenar' ),
				'condition' => [ 'rt_get_started_button' ],
			],

			'rt_contact_info_label' => [
				'type'        => 'text',
				'label'       => __( 'Contact Info', 'gardenar' ),
				'default'     => __( 'Contact Info', 'gardenar' ),
				'description' => __( 'Content: Contact Info', 'gardenar' ),
			],

			'rt_follow_us_label' => [
				'type'        => 'text',
				'label'       => __( 'Follow Us On', 'gardenar' ),
				'default'     => __( 'Follow Us On', 'gardenar' ),
				'description' => __( 'Content: Follow Us On', 'gardenar' ),
			],

			'rt_about_label' => [
				'type'        => 'text',
				'label'       => __( 'About Us', 'gardenar' ),
				'description' => __( 'Content: About Us', 'gardenar' ),
			],

			'rt_about_text' => [
				'type'        => 'textarea',
				'label'       => __( 'About Text', 'gardenar' ),
				'description' => __( 'Enter about text here.', 'gardenar' ),
			],

			'rt_footer_labels' => [
				'type'  => 'heading',
				'label' => __( 'Footer Labels', 'gardenar' ),
			],

			'rt_ready_label' => [
				'type'        => 'text',
				'label'       => __( 'Are You Ready', 'gardenar' ),
				'default'     => __( 'ARE YOU READY TO GET STARTED?', 'gardenar' ),
				'description' => __( 'Content: Footer Are You Ready', 'gardenar' ),
			],

			'rt_contact_button_text' => [
				'type'        => 'text',
				'label'       => __( 'Contact Us', 'gardenar' ),
				'default'     => __( 'Contact Us', 'gardenar' ),
				'description' => __( 'Content: Footer contact button', 'gardenar' ),
			],

			'rt_blog_labels' => [
				'type'  => 'heading',
				'label' => __( 'Blog Labels', 'gardenar' ),
			],
			'rt_author_prefix' => [
				'type'        => 'text',
				'label'       => __( 'By', 'gardenar' ),
				'default'     => 'by',
				'description' => __( 'Content: Meta Author Prefix', 'gardenar' ),
			],
			'rt_tags'         => [
				'type'        => 'text',
				'label'       => __( 'Tags:', 'gardenar' ),
				'default'     => __( 'Tags:', 'gardenar' ),
				'description' => __( 'Content: Single blog footer tags label', 'gardenar' ),
			],
			'rt_social' => [
				'type'        => 'text',
				'label'       => __( 'Socials:', 'gardenar' ),
				'default'     => __( 'Socials:', 'gardenar' ),
				'description' => __( 'Content: Single blog footer Socials label', 'gardenar' ),
			],
			'rt_blog_read_more' => [
				'type'        => 'text',
				'label'       => __( 'Blog Read More:', 'gardenar' ),
				'default'     => __( 'Continue Reading', 'gardenar' ),
				'description' => __( 'Content: Single blog footer read more text', 'gardenar' ),
			],

		] );
	}


}
