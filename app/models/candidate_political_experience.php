<?php
class CandidatePoliticalExperience extends AppModel {
	var $name = 'CandidatePoliticalExperience';
	var $displayField = 'position';
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
