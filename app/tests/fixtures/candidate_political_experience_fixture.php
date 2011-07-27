<?php
/* CandidatePoliticalExperience Fixture generated on: 2011-07-25 17:47:14 : 1311630434 */
class CandidatePoliticalExperienceFixture extends CakeTestFixture {
	var $name = 'CandidatePoliticalExperience';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'candidate_profile_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'starting_year' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'ending_year' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'position' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'candidate_profile_id' => 1,
			'starting_year' => 1,
			'ending_year' => 1,
			'position' => 'Lorem ipsum dolor sit amet',
			'type' => 1
		),
	);
}
