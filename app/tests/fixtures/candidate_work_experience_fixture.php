<?php
/* CandidateWorkExperience Fixture generated on: 2011-07-25 17:53:45 : 1311630825 */
class CandidateWorkExperienceFixture extends CakeTestFixture {
	var $name = 'CandidateWorkExperience';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'candidate_profile_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'year' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'position' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'company' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'candidate_profile_id' => 1,
			'year' => 1,
			'position' => 'Lorem ipsum dolor sit amet',
			'company' => 'Lorem ipsum dolor sit amet'
		),
	);
}
