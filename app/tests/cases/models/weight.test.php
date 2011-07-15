<?php
/* Weight Test cases generated on: 2011-07-07 12:07:49 : 1310056969*/
App::import('Model', 'Weight');

class WeightTestCase extends CakeTestCase {
	var $fixtures = array('app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.candidate', 'app.answer');

	function startTest() {
		$this->Weight =& ClassRegistry::init('Weight');
	}

	function endTest() {
		unset($this->Weight);
		ClassRegistry::flush();
	}

}
?>