<?php
/* CandidateParty Fixture generated on: 2011-07-25 17:50:37 : 1311630637 */
class CandidatePartyFixture extends CakeTestFixture {
	var $name = 'CandidateParty';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'candidate_profile_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'starting_year' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'ending_year' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'party' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'candidate_profile_id' => 1,
			'starting_year' => 1,
			'ending_year' => 1,
			'party' => 'Lorem ipsum dolor sit amet'
		),
	);
}
