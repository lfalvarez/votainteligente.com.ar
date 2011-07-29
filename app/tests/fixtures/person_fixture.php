<?php
/* Person Fixture generated on: 2011-07-07 12:07:58 : 1310055178 */
class PersonFixture extends CakeTestFixture {
	var $name = 'Person';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'idfacebook' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'session_key' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'candidate_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'date' => array('type'=>'datetime', 'type' => 'datetime', 'null' => false, 'default' => NULL),
		'confirmsCandidate' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'idfacebook' => '1_facebook_id',
			'session_key' => 'Lorem ipsum dolor sit amet',
			'candidate_id' => 1,
			'date' => '2011-07-07 12:12:58',
			'confirmsCandidate' => 1
		),
	);
}
?>