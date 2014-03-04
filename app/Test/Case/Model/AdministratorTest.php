<?php
App::uses('Administrator', 'Model');

/**
 * Administrator Test Case
 *
 */
class AdministratorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.administrator'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Administrator = ClassRegistry::init('Administrator');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Administrator);

		parent::tearDown();
	}

}
