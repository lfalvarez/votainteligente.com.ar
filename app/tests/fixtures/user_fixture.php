<?php
/* User Fixture generated on: 2011-07-07 13:07:53 : 1310058173 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'password' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'last_login' => array('type'=>'datetime', 'type' => 'datetime', 'null' => true, 'default' => '0000-00-00 00:00:00'),
		'created' => array('type'=>'datetime', 'type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'last_login' => '2011-07-07 13:02:53',
			'created' => '2011-07-07 13:02:53',
			'modified' => '2011-07-07 13:02:53'
		),
	);
}
?>