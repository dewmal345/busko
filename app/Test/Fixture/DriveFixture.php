<?php
/**
 * DriveFixture
 *
 */
class DriveFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'lis_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'driver_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'assistant_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('lis_number', 'date'), 'unique' => 1),
			'driver' => array('column' => 'driver_id', 'unique' => 0),
			'assistant' => array('column' => 'assistant_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'lis_number' => 'Lorem ip',
			'driver_id' => 'Lorem ip',
			'assistant_id' => 'Lorem ip',
			'date' => '2014-03-04'
		),
	);

}
