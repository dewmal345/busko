<?php
App::uses('Drive', 'Model');

/**
 * Drive Test Case
 *
 */
class DriveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.drive',
		'app.driver',
		'app.assistant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Drive = ClassRegistry::init('Drive');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Drive);

		parent::tearDown();
	}

}
