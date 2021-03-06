<?php
/* Result Fixture generated on: 2011-07-07 12:07:11 : 1310056691 */
class ResultFixture extends CakeTestFixture {
	var $name = 'Result';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'person_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'candidate_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'result' => array('type'=>'float', 'type' => 'float', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'person_id' => 1,
			'candidate_id' => 1,
			'result' => 1
		),
	);
}
?>