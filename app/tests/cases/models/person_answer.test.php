<?php
/* PersonAnswer Test cases generated on: 2011-07-13 13:06:02 : 1310576762*/
App::import('Model', 'PersonAnswer');

class PersonAnswerTestCase extends CakeTestCase {
	var $fixtures = array('app.person_answer', 'app.result', 'app.person', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.answer');

	function startTest() {
		$this->PersonAnswer =& ClassRegistry::init('PersonAnswer');
	}

	function endTest() {
		unset($this->PersonAnswer);
		ClassRegistry::flush();
	}

}
