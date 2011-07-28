<?php
/* Category Fixture generated on: 2011-07-07 12:07:48 : 1310055048 */
class CategoryFixture extends CakeTestFixture {
	var $name = 'Category';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'slug' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
                'order' => array('type'=>'integer', 'type' => 'integer', 'default' => NULL)
	);

	var $records = array(
		array(
			'id' => 1,
			'slug'=>'numeros-imaginarios',
			'name' => 'numeros imaginarios',
                        'order' => 1
		),
            array(
			'id' => 2,
			'slug'=>'numeros-reales',
			'name' => 'numeros reales',
                        'order' => 2
		),
	);
}
?>