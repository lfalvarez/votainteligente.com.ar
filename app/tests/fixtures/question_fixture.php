<?php
/* Question Fixture generated on: 2011-07-07 12:07:48 : 1310056488 */
class QuestionFixture extends CakeTestFixture {
	var $name = 'Question';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'question' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'category_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'sour' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'public' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'question' => '¿que piensas de los numeros imaginarios dibujados en un plano cartesiano?',
			'category_id' => 1,
			'sour' => 0,
			'public' => 1
		),
		array(
			'id' => 2,
			'question' => '¿un numero imaginario es par o impar??',
			'category_id' => 1,
			'sour' => 0,
			'public' => 1
		),
                array(
			'id' => 3,
			'question' => '¿es PI un numero par o impar?',
			'category_id' => 2,
			'sour' => 0,
			'public' => 1
		),
                array(
			'id' => 4,
			'question' => '¿una serie (que representa un numero real) geometrica es par?',
			'category_id' => 2,
			'sour' => 0,
			'public' => 1
		),
            
	);
}
?>