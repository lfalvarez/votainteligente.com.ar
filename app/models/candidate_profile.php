<?php
class CandidateProfile extends AppModel {
	var $name = 'CandidateProfile';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Candidate' => array(
			'className' => 'Candidate',
			'foreignKey' => 'candidate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'CandidateLink' => array(
			'className' => 'CandidateLink',
			'foreignKey' => 'candidate_profile_id',
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
		'CandidateParty' => array(
			'className' => 'CandidateParty',
			'foreignKey' => 'candidate_profile_id',
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
		'CandidatePoliticalExperience' => array(
			'className' => 'CandidatePoliticalExperience',
			'foreignKey' => 'candidate_profile_id',
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
		'CandidateUniversityStudy' => array(
			'className' => 'CandidateUniversityStudy',
			'foreignKey' => 'candidate_profile_id',
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
		'CandidateWorkExperience' => array(
			'className' => 'CandidateWorkExperience',
			'foreignKey' => 'candidate_profile_id',
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
	function beforeSave($options = array()) {
	    $candidateName = $this->Candidate->find('first',array(
		'conditions'=>array(
		    'Candidate.id'=>$this->data['CandidateProfile']['candidate_id']
		    ),
		'fields'=>array('name')
		)
	    );
	    $candidateName = $candidateName['Candidate']['name'];
	    $this->data['CandidateProfile']['name']='Perfil de '.$candidateName;
	    return true;
	}

}
