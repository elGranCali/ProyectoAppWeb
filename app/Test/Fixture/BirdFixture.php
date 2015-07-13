<?php
/**
 * BirdFixture
 *
 */
class BirdFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'ecology' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'family_' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'name_' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30),
		'url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'distribution' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
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
			'ecology' => 'Lorem ipsum dolor sit amet',
			'family_' => 'Lorem ipsum dolor ',
			'name_' => 'Lorem ipsum dolor sit amet',
			'url' => 'Lorem ipsum dolor sit amet',
			'distribution' => 'Lorem ipsum dolor sit amet'
		),
	);

}
