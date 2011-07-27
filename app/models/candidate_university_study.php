<?php
class CandidateUniversityStudy extends AppModel {
	var $name = 'CandidateUniversityStudy';
	var $displayField = 'career';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'CandidateProfile' => array(
			'className' => 'CandidateProfile',
			'foreignKey' => 'candidate_profile_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
