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
		if (isset($val['Weight']['answer_id'])) {
		    $answer = $this->Answer->field('answer',array('id'=>$val['Weight']['answer_id']));
		    $name = $answer;
		    if (isset($val['Weight']['weighting'])) {
			$weighting = $val['Weight']['weighting'];
			Configure::load('medianaranja');
			$posibleValues = Configure::read('Weights.possibleValues');
			if (isset($posibleValues[$weighting])) {
			    $weighting = $posibleValues[$weighting];
			}
			$name .= ' - '.$weighting;
		    }
		    $val['Weight']['name'] = $name;
		    $finalResult[$key]=$val;
		}
		else {
		    $finalResult[$key]=$val;
		}
	    }
	    return $finalResult;
	}
	function possibleValueAsText($weighting){
	    Configure::load('medianaranja');
	    $posibleValues = Configure::read('Weights.possibleValues');
	    if (isset($posibleValues[$weighting])) {
		$weighting = $posibleValues[$weighting];
	    }
	    return $weighting;
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
	function listWeightsWithName($idCandidate,$idQuestion){
	    $list = $this->find('list',array('fields'=>array('answer_id'),'conditions'=>array(
		'candidate_id'=>$idCandidate,
		'question_id'=>$idQuestion
		)));
	    foreach ($list as $idWeight=>$idAnswer) {
		$weighting = $this->field('weighting',array('id'=>$idWeight));
		$weighting = $this->possibleValueAsText($weighting);
		$answer = $this->Answer->field('answer',array('id'=>$idAnswer));
		$list[$idWeight]=$answer.' - '.$weighting;
	    }
	    return $list;
	}
}
?>
