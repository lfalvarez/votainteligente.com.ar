<?php
/* ResultDetail Fixture generated on: 2011-07-07 12:07:13 : 1310056573 */
class ResultDetailFixture extends CakeTestFixture {
	var $name = 'ResultDetail';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'result_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'category_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'result' => array('type'=>'float', 'type' => 'float', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'result_id' => 1,
			'category_id' => 1,
			'result' => 1
		),
	);
}
?>