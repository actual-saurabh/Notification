<?php
/**
 * WordPress theme changed trigger.
 *
 * @package notification.
 */

namespace BracketSpace\Notification\Defaults\Trigger\Theme;

use BracketSpace\Notification\Defaults\MergeTag;
/**
 * Changed theme trigger class.
 */
class Changed extends ThemeTrigger {
	/**
	 * Constructor.
	 */
	public function __construct() {
		parent::__construct( 'wordpress/theme/changed', __( 'Theme changed', 'notification' ) );
		$this->add_action( 'switch_theme', 10, 3 );
		$this->set_group( __( 'Theme', 'notification' ) );
		$this->set_description( __( 'Fires when theme is changed', 'notification' ) );
	}
	/**
	 * Trigger action.
	 *
	 * @param  string $new_name Name of the new theme.
	 * @param  object $new_theme Instance of the new theme.
	 * @param  object $old_theme Instance of the old theme.
	 * @return mixed void or false if no notifications should be sent.
	 */
	public function action( $new_name, $new_theme, $old_theme ) {
		$this->theme_changed_date_time = strtotime( 'now' );
		$this->theme_new              = $new_theme;
		$this->theme_old              = $old_theme;
	}
	/**
	 * Registers attached merge tags.
	 *
	 * @return void.
	 */
	public function merge_tags() {
		parent::merge_tags();


		$this->add_merge_tag(
			new MergeTag\Theme\ThemeAuthor(
				array(
					'name' => 'Old theme author name',
					'description' => 'Twenty fifteen',
					'type' => 'old'
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\Theme\ThemeAuthorURI(
				array(
					'name' => 'Old theme author URL',
					'type' => 'old'
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\Theme\ThemeDescription(
				array(
					'name' => 'Old theme description',
					'type' => 'old'
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\Theme\ThemeName(
				array(
					'name' => 'Old theme name',
					'type' => 'old'
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\Theme\ThemeURI(
				array(
					'name' => 'Old theme ',
					'type' => 'old'
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\Theme\ThemeVersion(
				array(
					'name' => 'Old theme version',
					'type' => 'old'
				)
			)
		);

	}
}