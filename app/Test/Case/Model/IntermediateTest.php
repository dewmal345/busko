<?php
App::uses('Intermediate', 'Model');

/**
 * Intermediate Test Case
 *
 */
class IntermediateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.intermediate',
		'app.route'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Intermediate = ClassRegistry::init('Intermediate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Intermediate);

		parent::tearDown();
	}

}
