<?php
App::uses('AppModel', 'Model');
/**
 * Content Model
 *
 * @property Log $Log
 */
class Content extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Log' => array(
			'className' => 'Log',
			'foreignKey' => 'log_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
