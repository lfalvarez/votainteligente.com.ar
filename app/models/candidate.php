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
	var $hasOne = array(
		'CandidateProfile'=>array(
		    'dependent'	=> true
		)
	    );
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
	    $this->CandidateProfile->Behaviors->attach('Containable');
	    $profile = $this->CandidateProfile->find('first',
		    array(
			'conditions'=>array(
			    'candidate_id'=>$candidateId
			    ),
			'contain'=>array('Candidate','CandidateLink','CandidateParty','CandidateUniversityStudy','CandidateWorkExperience')
			)
		    );
	    $idProfile = $profile['CandidateProfile']['id'];
	    $politicalExperiences = $this->CandidateProfile->CandidatePoliticalExperience->find('all',
		    array(
			'conditions'=>array(
			    'candidate_profile_id'=>$idProfile
			),
			'order'=>array('CandidatePoliticalExperience.type','CandidatePoliticalExperience.ending_year DESC')
		    )
		);
	    Configure::load('medianaranja');
	    $possibleTypes = Configure::read('PoliticalExperience.types');
	    $orderedPoliticalExperiences = array();
	    foreach ($politicalExperiences as $experience) {
		$type = $experience['CandidatePoliticalExperience']['type'];
		$typeDescription = $possibleTypes[$type];
		$orderedPoliticalExperiences[$type]['description'] = $typeDescription;
		$orderedPoliticalExperiences[$type]['experiences'][] = $experience['CandidatePoliticalExperience'];
	    }
	    $profile['CandidatePoliticalExperience'] = $orderedPoliticalExperiences;

	    return $profile;
	}
	function beforeSave($options = array()) {
	    $this->data['Candidate']['slug']=$this->slugifyName($this->data['Candidate']['name']);
	    return true;
	}
	function saveAllData($data){
	    $savedCorrectly = $this->save($data);
	    if (!$savedCorrectly) {
		$this->delete($this->id);
		return false;
	    }
	    unset($data['Candidate']);
	    $data['CandidateProfile']['candidate_id']=$this->id;
	    $data = $this->removeEmptyDataFromArray($data);
	    foreach ($data as $key=>$insideData) {
		if (empty($insideData)) {
		    unset($data[$key]);
		}
	    }
	    $savedCorrectly = $this->CandidateProfile->saveAll($data);
	    if (!$savedCorrectly) {
		$this->delete($this->id);
		return false;
	    }
	    return true;
	}
	function removeEmptyDataFromArray($profile){
	    foreach($profile as $key=>$dataInside){
		if (is_array($dataInside)) {
		    if ((!$this->hasArrayInside($dataInside))) {
			if ($this->shouldThisElementBeRemoved($dataInside)) {
			    unset($profile[$key]);
			}
		    } else {
			$profile[$key] = $this->removeEmptyDataFromArray($dataInside);
		    }
		}
	    }
	    return $profile;
	}
	function hasArrayInside($array){
	    if (!is_array($array)) return false;
	    foreach ($array as $key=>$data){
		if (is_array($data)) {
		    return true;
		}
	    }
	    return false;
	}
	function shouldThisElementBeRemoved($element){
	    foreach($element as $key=>$data){
		if ($key != 'id' && ($data==null || $data=='')) {
		    return true;
		}
	    }
	    return false;
	}
}
?>