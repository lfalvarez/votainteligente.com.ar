<?php
class SourceOfAnswer extends AppModel {
	var $name = 'SourceOfAnswer';
	var $displayField = 'sentence';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Weight' => array(
			'className' => 'Weight',
			'foreignKey' => 'weight_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
