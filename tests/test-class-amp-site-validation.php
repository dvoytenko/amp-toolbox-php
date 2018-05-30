<?php
/**
 * Tests for AMP_Site_Validation class.
 *
 * @package AMP
 */

/**
 * Tests for AMP_Site_Validation class.
 *
 * @since 1.0
 */
class Test_AMP_Site_Validation extends \WP_UnitTestCase {

	/**
	 * The name of the tested class.
	 *
	 * @var string
	 */
	const TESTED_CLASS = 'AMP_Site_Validation';

	/**
	 * The name of the tag to test.
	 *
	 * @var string
	 */
	const TAG_NAME = 'img';

	/**
	 * An instance of DOMElement to test.
	 *
	 * @var DOMElement
	 */
	public $node;

	/**
	 * Setup.
	 *
	 * @inheritdoc
	 * @global $wp_registered_widgets
	 */
	public function setUp() {
		parent::setUp();
		$dom_document = new DOMDocument( '1.0', 'utf-8' );
		$this->node   = $dom_document->createElement( self::TAG_NAME );
		AMP_Validation_Manager::reset_validation_results();
	}

	/**
	 * Test get_post_permalinks.
	 *
	 * @covers AMP_Site_Validation::get_post_permalinks()
	 */
	public function test_get_post_permalinks() {
		$posts                       = array();
		$permalinks                  = array();
		$number_posts_each_post_type = 20;
		$post_types                  = get_post_types( array( 'public' => true ), 'names' );

		/**
		 * The tested method does not get attachment permalinks.
		 * It only searches for posts with the status 'publish.'
		 * Attachments have a default status of 'inherit,' to depend on the status of their parent post.
		 */
		unset( $post_types['attachment'] );
		foreach ( $post_types as $post_type ) {
			for ( $i = 0; $i < $number_posts_each_post_type; $i++ ) {
				$post         = $this->factory()->post->create_and_get( array(
					'post_type'   => $post_type,
					'post_status' => 'publish',
				) );
				$posts[]      = $post;
				$permalinks[] = amp_get_permalink( $post->ID );
			}
		}
		$number_of_posts = count( $post_types ) * $number_posts_each_post_type;
		$this->assertEquals( $permalinks, AMP_Site_Validation::get_post_permalinks( $number_of_posts ) );
	}
}
