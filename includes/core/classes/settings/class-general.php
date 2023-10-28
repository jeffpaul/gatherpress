<?php
/**
 * Settings General class file for GatherPress.
 *
 * This file contains the General class definition, which handles the "General" settings
 * page in GatherPress, providing options for configuring various general settings. It
 * extends the Base class to inherit common settings page functionality.
 *
 * @package GatherPress\Core
 * @since 1.0.0
 */

namespace GatherPress\Core\Settings;

use GatherPress\Core\Traits\Singleton;

/**
 * Class General.
 *
 * This class handles the "General" settings page in GatherPress, providing options
 * for configuring various general settings. It extends the Base class to inherit
 * common settings page functionality.
 *
 * @since 1.0.0
 */
class General extends Base {

	use Singleton;

	/**
	 * Constructor for the General settings page.
	 *
	 * Initializes the General settings page by setting its name, description,
	 * priority, sections, and slug.
	 *
	 * @since 1.0.0
	 */
	protected function __construct() {
		parent::__construct();

		$this->name     = __( 'General', 'gatherpress' );
		$this->priority = PHP_INT_MIN;
		$this->sections = $this->get_section();
		$this->slug     = 'general';
	}

	/**
	 * Get an array of sections and options for the General settings page.
	 *
	 * This method defines the sections and their respective options for the "General" settings page
	 * in GatherPress. It provides structured data that represents the configuration choices available
	 * to users on this page.
	 *
	 * @since 1.0.0
	 *
	 * @return array An array representing the sections and options for the "General" settings page.
	 */
	protected function get_section(): array {
		return array(
			'general' => array(
				'name'        => __( 'General Settings', 'gatherpress' ),
				'description' => __(
					'GatherPress allows you to set event dates to reflect either the post date or event date. Default: event date.',
					'gatherpress'
				),
				'options'     => array(
					'post_or_event_date'  => array(
						'labels' => array(
							'name' => __( 'Publish Date', 'gatherpress' ),
						),
						'field'  => array(
							'label'   => __( 'Show publish date as event date for events', 'gatherpress' ),
							'type'    => 'checkbox',
							'options' => array(
								'default' => '1',
							),
						),
					),
					'max_attending_limit' => array(
						'labels' => array(
							'name' => __( 'Maximum Attending Limit', 'gatherpress' ),
						),
						'field'  => array(
							'label'   => __( 'The default maximum limit of attendees to an event.', 'gatherpress' ),
							'type'    => 'number',
							'size'    => 'small',
							'options' => array(
								'default' => '50',
							),
						),
					),
				),
			),
			'pages'   => array(
				'name'        => __( 'Event Archive Pages', 'gatherpress' ),
				'description' => __( 'GatherPress allows you to set event archives to pages you have created.', 'gatherpress' ),
				'options'     => array(
					'upcoming_events' => array(
						'labels' => array(
							'name' => __( 'Upcoming Events', 'gatherpress' ),
						),
						'field'  => array(
							'type'    => 'autocomplete',
							'options' => array(
								'type'  => 'page',
								'label' => __( 'Select Upcoming Events Archive Page', 'gatherpress' ),
								'limit' => 1,
							),
						),
					),
					'past_events'     => array(
						'labels' => array(
							'name' => __( 'Past Events', 'gatherpress' ),
						),
						'field'  => array(
							'type'    => 'autocomplete',
							'options' => array(
								'type'  => 'page',
								'label' => __( 'Select Past Events Archive Page', 'gatherpress' ),
								'limit' => 1,
							),
						),
					),
				),
			),
		);
	}

}