<?php
/**
 * RecordFixture
 *
 */
class RecordFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'bird_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'time_' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'location_' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'event_id' => 1,
			'bird_id' => 1,
			'time_' => '2015-07-10 03:20:22',
			'location_' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet'
		),
	);

}
