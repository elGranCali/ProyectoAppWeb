<?php
App::uses('AppModel', 'Model');
/**
 * Bird Model
 *
 * @property Record $Record
 */
class Bird extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name_';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Record' => array(
			'className' => 'Record',
			'foreignKey' => 'bird_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
