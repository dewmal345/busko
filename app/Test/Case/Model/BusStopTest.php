<?php
App::uses('BusStop', 'Model');

/**
 * BusStop Test Case
 *
 */
class BusStopTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bus_stop'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusStop = ClassRegistry::init('BusStop');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusStop);

		parent::tearDown();
	}

}
