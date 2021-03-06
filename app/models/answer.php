<?php
class Answer extends AppModel {
	var $name = 'Answer';
	var $displayField = 'answer';
	var $validate = array(
		'answer' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'required'=>true),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Weight' => array(
			'className' => 'Weight',
			'foreignKey' => 'answer_id',
			'dependent' => true,
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
?>