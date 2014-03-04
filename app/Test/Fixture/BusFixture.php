<?php
/**
 * BusFixture
 *
 */
class BusFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'lis_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'capacity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
		'model' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'route' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'conditions' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'branch_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'lis_number', 'unique' => 1),
			'lis_number' => array('column' => 'lis_number', 'unique' => 1),
			'route' => array('column' => 'route', 'unique' => 0),
			'branch_id' => array('column' => 'branch_id', 'unique' => 0)
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
			'capacity' => 1,
			'model' => 'Lorem ip',
			'route' => 'Lorem ip',
			'conditions' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'branch_id' => 'Lorem ip'
		),
	);

}
