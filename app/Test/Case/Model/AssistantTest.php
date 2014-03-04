<?php
App::uses('Assistant', 'Model');

/**
 * Assistant Test Case
 *
 */
class AssistantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assistant',
		'app.drive'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Assistant = ClassRegistry::init('Assistant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assistant);

		parent::tearDown();
	}

}
