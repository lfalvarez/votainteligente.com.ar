<?php
class Candidate extends AppModel {
	var $name = 'Candidate';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'imagepath' => array(
			'notempty' => array('rule' => array('notempty')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Weight' => array(
			'className' => 'Weight',
			'foreignKey' => 'candidate_id',
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
	var $hasOne = array('CandidateProfile');
        function compatibility($idCandidate,$categories){
            $candidate = $this->findById($idCandidate);
            $result = array();
            $categoriesFromDatabase = $this->Weight->Question->Category->getAll(
                    array(
                            'id'=>array_keys($categories['Category'])
                        )
                );
            foreach($categories['Category'] as $idCategory=>$category){
                $questionIds = array();
                foreach($category['Question'] as $idQuestion=>$question){
                    $questionIds[]=$idQuestion;
                }
                $weights = $this->Weight->find(
                    'all',
                    array(
                        'conditions'=>array(
                            'candidate_id'=>$idCandidate,
                            'question_id'=>$questionIds
                            )
                        )
                    );
                $categoryResult = $categoriesFromDatabase[$idCategory];
                $categoryResult['Category']['afinity'] = $this->Weight->Question->Category->calculateAfinity($weights,$category);
                $result[$idCategory] = $categoryResult;
            }
            return $result;
        }
        function calculateTotalAfinity($data){
            $totalSum = 0;
            foreach($data as $category){
                $totalSum += $category['Category']['afinity'];
            }
            if ( count($data)<1 ) {
                return 0;
            }
            return $totalSum/count($data);
        }
	function getProfile($candidateId){
	    $this->CandidateProfile->recursive = 1;
	    $profile = $this->CandidateProfile->find('first',array('conditions'=>array('candidate_id'=>$candidateId)));
	    return $profile;
	}
	function slugifyName($name){
	    return strtolower(Inflector::slug($name,'-'));
	}
	function beforeSave($options = array()) {
	    $this->data['Candidate']['slug']=$this->slugifyName($this->data['Candidate']['name']);
	    return true;
	}

}
?>