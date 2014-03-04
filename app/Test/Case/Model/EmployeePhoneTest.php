<?php
App::uses('EmployeePhone', 'Model');

/**
 * EmployeePhone Test Case
 *
 */
class EmployeePhoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employee_phone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmployeePhone = ClassRegistry::init('EmployeePhone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmployeePhone);

		parent::tearDown();
	}

}
