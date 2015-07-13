<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name_' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15),
		'degree' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'name_' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor ',
			'password' => 'Lorem ipsum dolor ',
			'telephone' => 'Lorem ipsum d',
			'degree' => 'Lorem ipsum dolor ',
			'category_id' => 1
		),
	);

}
