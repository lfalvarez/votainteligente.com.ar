<?php
/* Answer Test cases generated on: 2011-07-07 12:07:44 : 1310054564*/
App::import('Model', 'Answer');

class AnswerTestCase extends CakeTestCase {
	var $fixtures = array('app.answer', 'app.question', 'app.weight');

	function startTest() {
		$this->Answer =& ClassRegistry::init('Answer');
	}

	function endTest() {
		unset($this->Answer);
		ClassRegistry::flush();
	}

}
?>