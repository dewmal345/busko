<?php
App::uses('Repair', 'Model');

/**
 * Repair Test Case
 *
 */
class RepairTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.repair'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Repair = ClassRegistry::init('Repair');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Repair);

		parent::tearDown();
	}

}
