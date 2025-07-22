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
class Contact extends Customizer {
	protected $section_contact = 'rt_contact_section';

	/**
	 * Register controls
	 * @return void
	 */
	public function register() {
		Customize::add_section( [
			'id'          => $this->section_contact,
			'panel'       => 'rt_contact_social_panel',
			'title'       => __( 'Contact Information', 'gardenar' ),
			'description' => __( 'Contact Address Section', 'gardenar' ),
			'priority'    => 1
		] );
		Customize::add_controls( $this->section_contact, $this->get_controls() );
	}

	/**
	 * Get controls
	 * @return array
	 */
	public function get_controls() {

		return apply_filters( 'rt_contact_controls', [

			'rt_phone' => [
				'type'  => 'text',
				'label' => __( 'Phone', 'gardenar' ),
			],

			'rt_email' => [
				'type'  => 'text',
				'label' => __( 'Email', 'gardenar' ),
			],

			'rt_website' => [
				'type'  => 'text',
				'label' => __( 'Website', 'gardenar' ),
			],

			'rt_contact_address' => [
				'type'        => 'textarea',
				'label'       => __( 'Address', 'gardenar' ),
				'description' => __( 'Enter company address here.', 'gardenar' ),
			],

		] );
	}
}
