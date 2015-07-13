<?php
App::uses('Bird', 'Model');

/**
 * Bird Test Case
 *
 */
class BirdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bird',
		'app.record'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bird = ClassRegistry::init('Bird');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bird);

		parent::tearDown();
	}

}
