<?php
/* Result Test cases generated on: 2011-07-07 12:07:11 : 1310056691*/
App::import('Model', 'Result');

class ResultTestCase extends CakeTestCase {
	var $fixtures = array('app.result', 'app.person', 'app.candidate', 'app.weight', 'app.result_detail', 'app.category', 'app.question', 'app.answer');

	function startTest() {
		$this->Result =& ClassRegistry::init('Result');
	}

	function endTest() {
		unset($this->Result);
		ClassRegistry::flush();
	}

}
?>