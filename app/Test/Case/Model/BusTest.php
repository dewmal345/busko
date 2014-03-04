<?php
App::uses('Bus', 'Model');

/**
 * Bus Test Case
 *
 */
class BusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bus',
		'app.branch',
		'app.employee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bus = ClassRegistry::init('Bus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bus);

		parent::tearDown();
	}

}
