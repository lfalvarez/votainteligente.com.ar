<?php
/* Answer Fixture generated on: 2011-07-07 12:07:44 : 1310054564 */
class AnswerFixture extends CakeTestFixture {
	var $name = 'Answer';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'answer' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'question_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'public' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'answer' => 'esta bien eso para verlo de manera grafica pero no se demuestra la imparidad de los numeros imaginarios',
			'question_id' => 1,
			'public' => 1
		),
                array(
			'id' => 2,
			'answer' => 'me gusta!! por que tienen un numero par de ejes',
			'question_id' => 1,
			'public' => 1
		),
                array(
			'id' => 3,
			'answer' => 'impar',
			'question_id' => 2,
			'public' => 1
		),
                array(
			'id' => 4,
			'answer' => 'par',
			'question_id' => 2,
			'public' => 1
		),
                array(
			'id' => 5,
			'answer' => 'impar',
			'question_id' => 3,
			'public' => 1
		),
                array(
			'id' => 6,
			'answer' => 'par',
			'question_id' => 3,
			'public' => 1
		),
                array(
			'id' => 7,
			'answer' => 'impar',
			'question_id' => 4,
			'public' => 1
		),
                array(
			'id' => 8,
			'answer' => 'par',
			'question_id' => 4,
			'public' => 1
		),
	);
}
?>