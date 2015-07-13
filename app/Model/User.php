<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property Category $Category
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name_';


    public $validate = array(

        'name_' => array(
            'Por favor digite su nombre.'=>array(
                'rule'=>'notBlank',
                'message' => 'Por favor digite su nombre.'
            )
        ),
        'username' => array(
            'El nombre de usuario debe estar compuesto entre 5 y 8 caracteres.' => array(
                'rule' => array('between',5,8),
                'message' => 'El nombre de usuario debe estar compuesto entre 5 y 8 caracteres.'
            ),
            'Ya existe este nombre de usuario, por favor intente de nuevo' => array(
                'rule' => 'isUnique',
                'message' => 'Ya existe este nombre de usuario, por favor intente de nuevo'
            )
        )
    );


    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
