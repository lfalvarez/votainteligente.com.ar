<?php
class Question extends AppModel {
	var $name = 'Question';
	var $displayField = 'question';
	var $validate = array(
		'question' => array(
			'notempty' => array('rule' => array('notempty')),
		),
	);
        var $order = "Question.order ASC";
	var $actAs = array('Containable');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'question_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Weight' => array(
			'className' => 'Weight',
			'foreignKey' => 'question_id',
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
	function findAllForIndex($category_id){
		$this->Behaviors->attach('Containable');
		$this->contain('Answer.public = 1');
		$questions = $this->find('all',array('conditions'=>array(
                        'Question.category_id'=>$category_id,
                        'Question.public'=>1
                        )
                    )
                );
		return $questions;
	}
        function findAllForCompare($idCategory){
            $this->Behaviors->attach('Containable');
            $this->contain('Answer');
            $questions = $this->find('all',array('conditions'=>array('category_id'=>$idCategory)));
            return $questions;
             
        }

}
?>