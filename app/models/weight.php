<?php
class Weight extends AppModel {
	var $name = 'Weight';
	var $displayField = 'weighting';
	var $validate = array(
		'weighting' => array(
			'range' => array('rule' => array('range')),
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
		),
		'Candidate' => array(
			'className' => 'Candidate',
			'foreignKey' => 'candidate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'answer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'SourceOfAnswer' => array(
			'className' => 'SourceOfAnswer',
			'foreignKey' => 'weight_id',
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
	function findAllWithName($conditions = null, $fields = array(), $order = null, $recursive = null) {
	    $results = $this->find('all',array(
		'conditions'=>$conditions,
		'fields'=>$fields,
		'order'=>$order,
		'recursive'=>$recursive));
	    $finalResult = array();
	    foreach ($results as $key => $val) {
		$candidateName = $this->Candidate->field('name',array('id'=>$val['Weight']['candidate_id']));
		$question = $this->Question->field('question',array('id'=>$val['Weight']['question_id']));
		$answer = $this->Answer->field('answer',array('id'=>$val['Weight']['answer_id']));
		$nameOfThisWeight = $question.'|'.$candidateName.'|'.$answer;
		$val['Weight']['name'] = $nameOfThisWeight;
		$finalResult[$key]=$val;
	    }
	    return $finalResult;
	}
	function getWeightsForQuestionsForACandidate(&$weights,$idsQuestion,$idCandidate){
            $fieldsForWeights = array('question_id','answer_id','MAX(weighting) as weighting');
            $conditionsForGettingWeights = array('question_id'=>$idsQuestion);
            $conditionsForGettingWeights['candidate_id'] = $idCandidate;
            $candidatesAswers  = $this->find('all',array(
                'conditions' => $conditionsForGettingWeights,
                'fields'     => $fieldsForWeights,
                'group'      => array('question_id')
            ));

            foreach ($candidatesAswers as $weight) {
                $idQuestion = $weight['Weight']['question_id'];
                $idAnswer   = $weight['Weight']['answer_id'];
                $weights[$idQuestion][$idAnswer][] = $idCandidate;
            }

        }
}
?>
