<?php
/**
 * JourneyFixture
 *
 */
class JourneyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'lis_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'round_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary'),
		'route_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_stop' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_time' => array('type' => 'date', 'null' => false, 'default' => null),
		'end_time' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('lis_number', 'round_number', 'date'), 'unique' => 1),
			'round_number' => array('column' => 'round_number', 'unique' => 0),
			'date' => array('column' => 'date', 'unique' => 0),
			'route_id' => array('column' => 'route_id', 'unique' => 0),
			'start_stop' => array('column' => 'start_stop', 'unique' => 0)
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
			'round_number' => 1,
			'date' => '2014-03-04',
			'route_id' => 'Lorem ip',
			'start_stop' => 'Lorem ip',
			'start_time' => '2014-03-04',
			'end_time' => '2014-03-04'
		),
	);

}
