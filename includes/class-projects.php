<?php
/**
 * gsp Projects.
 *
 * @since   1.0.0
 * @package Gsp
 */

require_once dirname( __FILE__ ) . '/../vendor/cpt-core/CPT_Core.php';

/**
 * gsp Projects post type class.
 *
 * @since 1.0.0
 *
 * @see   https://github.com/WebDevStudios/CPT_Core
 */
class GSP_Projects extends CPT_Core {
	/**
	 * Parent plugin class.
	 *
	 * @var Gsp
	 * @since  1.0.0
	 */
	protected $plugin = null;

	/**
	 * Constructor.
	 *
	 * Register Custom Post Types.
	 *
	 * See documentation in CPT_Core, and in wp-includes/post.php.
	 *
	 * @since  1.0.0
	 *
	 * @param  Gsp $plugin Main plugin object.
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();

		// Register this cpt.
		// First parameter should be an array with Singular, Plural, and Registered name.
		parent::__construct(
			array(
				esc_html__( 'Project', 'gsp' ),
				esc_html__( 'Projects', 'gsp' ),
				'projects',
			),
			array(
				'supports' => array(
					'title',
				//	'editor',
				//	'excerpt',
					'thumbnail',
				),
				'menu_icon' => 'dashicons-admin-post', // https://developer.wordpress.org/resource/dashicons/
				'public'    => true,
			)
		);
	}

	/**
	 * Initiate our hooks.
	 *
	 * @since  1.0.0
	 */
	public function hooks() {
	}

	/**
	 * Registers admin columns to display. Hooked in via CPT_Core.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $columns Array of registered column names/labels.
	 * @return array          Modified array.
	 */
	public function columns( $columns ) {
		$new_column = array();
		return array_merge( $new_column, $columns );
	}

	/**
	 * Handles admin column display. Hooked in via CPT_Core.
	 *
	 * @since  1.0.0
	 *
	 * @param array   $column   Column currently being rendered.
	 * @param integer $post_id  ID of post to display column for.
	 */
	public function columns_display( $column, $post_id ) {
		switch ( $column ) {
		}
	}
}
