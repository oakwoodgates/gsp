<?php
/**
 * gsp Projects Tests.
 *
 * @since   1.0.0
 * @package Gsp
 */
class GSP_Projects_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  1.0.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'GSP_Projects') );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  1.0.0
	 */
	function test_class_access() {
		$this->assertInstanceOf( 'GSP_Projects', gsp()->projects );
	}

	/**
	 * Test to make sure the CPT now exists.
	 *
	 * @since  1.0.0
	 */
	function test_cpt_exists() {
		$this->assertTrue( post_type_exists( 'projects' ) );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  1.0.0
	 */
	function test_sample() {
		$this->assertTrue( true );
	}
}
