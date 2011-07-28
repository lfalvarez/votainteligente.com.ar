<?php
/* Candidate Fixture generated on: 2011-07-07 12:07:50 : 1310054690 */
class CandidateFixture extends CakeTestFixture {
	var $name = 'Candidate';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'slug' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'imagepath' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'slug'=>'jorge-arrate',
			'name' => 'Candidato por los numeros impares',
			'imagepath' => 'Lorem ipsum dolor sit amet'
		),
            array(
			'id' => 2,
			'slug'=>'sebastian-pinera',
			'name' => 'Numeros pares',
			'imagepath' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>