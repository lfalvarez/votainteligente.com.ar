<?php
class Question extends AppModel {
	var $name = 'Question';
	var $displayField = 'question';
	var $validate = array(
		'question' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'category_id'=>array(
		    'notempty' => array('rule' => array('notempty')),
		    ),
		'order'=>array(
		    'numeric' => array('rule' => array('numeric')),
		    )
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
			'dependent' => true,
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
	    return $this->findAllWithConditions($category_id);
	}
	function findAllWithConditions($category_id,$conditionsForQuestions = array()){
		$this->Behaviors->attach('Containable');
		$conditionsForQuestions['Question.public'] = 1;
		$conditionsForQuestions['Question.category_id'] = $category_id;
		$questions = $this->find('all',array(
		    'conditions'=>$conditionsForQuestions,
		    'contain'=>array(
			'Answer'
			)
                    )
                );
		return $questions;
	}
        function findAllForCompare($idCategory){
            $this->Behaviors->attach('Containable');
            $this->contain('Answer');
            $questions = $this->find('all',array('conditions'=>array(
		'category_id'=>$idCategory,
		'public'=>1)));
            return $questions;
        }
	function saveAllQuestionAnswersAndWeights($data) {
	    $savedCorrectly = $this->save($data);
	    if (!$savedCorrectly) {
		return false;
	    }
	    unset($data['Question']);
	    $this->Behaviors->attach('RelatedModelCleaner');
	    $data['Answers'] = $this->removeEmptyDataFromArray($data['Answers']);
	    $this->Weight->deleteAll(array('Weight.question_id'=>$this->id));
	    $areTheAnswersConsistent = $this->checkCandidatesConsistencyInThisAnswer($data['Answers']);
	    if (!$areTheAnswersConsistent) {
		$this->delete($this->id);
		return false;
	    }
	    if (isset ($data['Answers'])) {
		$data = $this->assignQuestionToAnswerAndWeights($data, $this->id);
		foreach ($data['Answers'] as $answer) {
		    $savedCorrectly = $this->Answer->saveAll($answer);
		    if (!$savedCorrectly) {
			break;
		    }
		}
		if (!$savedCorrectly) {
		    $this->delete($this->id);
		    return false;
		}
	    }
	    return true;
	}
	function assignQuestionToAnswerAndWeights($answersAndWeights,$idQuestion){
	    foreach ($answersAndWeights['Answers'] as $counterAnswer=>$answer) {
		$answersAndWeights['Answers'][$counterAnswer]['Answer']['question_id'] = $idQuestion;
		if (!isset($answersAndWeights['Answers'][$counterAnswer]['Weight'])){
		    continue;
		}
		foreach ($answersAndWeights['Answers'][$counterAnswer]['Weight'] as $counterWeight=>$weight) {
		    $answersAndWeights['Answers'][$counterAnswer]['Weight'][$counterWeight]['question_id'] = $idQuestion;
		    $answersAndWeights['Answers'][$counterAnswer]['Weight'][$counterWeight]['weighting'] = 1;
		}
	    }
	    return $answersAndWeights;
	}
	function checkCandidatesConsistencyInThisAnswer($answers){
	    $candidatesAnsweringThisQuestion = array();
	    foreach($answers as $answer){
		if (isset($answer['Weight'])) {
		    foreach($answer['Weight'] as $weight) {
			$idCandidate = $weight['candidate_id'];
			if (in_array($idCandidate, $candidatesAnsweringThisQuestion)) {
			    return false;
			}
			$candidatesAnsweringThisQuestion[] = $idCandidate;
		    }
		}
	    }
	    return true;
	}

}
?>