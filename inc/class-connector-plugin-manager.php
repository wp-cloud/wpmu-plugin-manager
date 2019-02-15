<?php
namespace WPCloud\Plugin_Manager;

class Connector_Plugin_Manager extends \WP_Stream\Connector {
	/**
	 * Connector slug
	 *
	 * @var string
	 */
	public $name = 'wpmu-plugin-manager';

	public $version = '1';

	/**
	 * Actions registered for this connector
	 *
	 * These are actions that My Plugin has created, we are defining them here to
	 * tell Stream to run a callback each time this action is fired so we can
	 * log information about what happened.
	 *
	 * @var array
	 */
	public $actions = array(
		'my_plugin_update_foo',
		'my_plugin_update_bar',
	);

	/**
	 * The minimum version required for My Plugin
	 *
	 * @const string
	 */
	const PLUGIN_MIN_VERSION = '1.0.0';

	/**
	 * Display an admin notice if plugin dependencies are not satisfied
	 *
	 * If My Plugin does not have the minimum required version number specified
	 * in the constant above, then Stream will display an admin notice for us.
	 *
	 * @return bool
	 */
	public function is_dependency_satisfied() {
		$version_compare = version_compare(  Connector_Plugin_Manager::$version, self::PLUGIN_MIN_VERSION, '>=' );
		if ( class_exists( ' Connector_Plugin_Manager' ) && $version_compare ) {
			return true;
		}

		return false;
	}

	/**
	 * Return translated connector label
	 *
	 * @return string
	 */
	public function get_label() {
		return __( 'WPMU Plugin Manager', 'wpmu-plugin-manager' );
	}

	/**
	 * Return translated context labels
	 *
	 * @return array
	 */
	public function get_context_labels() {
		return array(
			'foo'    => __( 'Foo', 'wpmu-plugin-manager' ),
			'bar' => __( 'Bar', 'wpmu-plugin-manager' ),
		);
	}

	/**
	 * Return translated action labels
	 *
	 * @return array
	 */
	public function get_action_labels() {
		return array(
			'created' => __( 'Created', 'wpmu-plugin-manager' ),
			'updated' => __( 'Updated', 'wpmu-plugin-manager' ),
		);
	}

	/**
	 * Add action links to Stream drop row in admin list screen
	 *
	 * This method is optional.
	 *
	 * @param array  $links  Previous links registered
	 * @param Record $record Stream record
	 *
	 * @return array Action links
	 */
	public function action_links( $links, $record ) {
		// Check if the Foo or Bar exists
		if ( $record->object_id && get_post_status( $record->object_id ) ) {
			$post_type_name = $this->get_post_type_name( get_post_type( $record->object_id ) );
			$action_link_text = sprintf(
				esc_html_x( 'Edit %s', 'Post type singular name', 'stream' ),
				$post_type_name
			);
			$links[ $action_link_text ] = get_edit_post_link( $record->object_id );
		}

		return $links;
	}

	/**
	 * Track create and update actions on Foos
	 *
	 * @param array $foo
	 * @param bool  $is_new
	 *
	 * @return void
	 */
	public function callback_my_plugin_update_foo( $foo, $is_new ) {
		$action = __( 'updated', 'wpmu-plugin-manager' );
		if ( $is_new ) {
			$action = __( 'created', 'wpmu-plugin-manager' );
		}
		$this->log(
		// Summary message
			sprintf(
				__( '"%1$s" foo %2$s', 'wpmu-plugin-manager' ),
				$foo['title'],
				$action
			),
			// This array is compacted and saved as Stream meta
			array(
				'action' => $action,
				'id'     => $foo['id'],
				'title'  => $foo['title'],
			),
			$foo['id'], // Object ID
			'foo', // Context
			$action
		);
	}

	/**
	 * Track create and update actions on Bars
	 *
	 * @param array $bar
	 * @param bool  $is_new
	 *
	 * @return void
	 */
	public function callback_my_plugin_update_bar( $bar, $is_new ) {
		$action = __( 'updated', 'wpmu-plugin-manager' );
		if ( $is_new ) {
			$action = __( 'created', 'wpmu-plugin-manager' );
		}
		$this->log(
		// Summary message
			sprintf(
				__( '"%1$s" bar %2$s', 'wpmu-plugin-manager' ),
				$bar['title'],
				$action
			),
			// This array is compacted and saved as Stream meta
			array(
				'action' => $action,
				'id'     => $bar['id'],
				'title'  => $bar['title'],
			),
			$bar['id'], // Object ID
			'bar', // Context
			$action // Action
		);
	}
}
