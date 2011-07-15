<?php
/* ResultDetail Test cases generated on: 2011-07-07 12:07:13 : 1310056573*/
App::import('Model', 'ResultDetail');

class ResultDetailTestCase extends CakeTestCase {
	var $fixtures = array('app.result_detail', 'app.result', 'app.category', 'app.question', 'app.answer', 'app.weight');

	function startTest() {
		$this->ResultDetail =& ClassRegistry::init('ResultDetail');
	}

	function endTest() {
		unset($this->ResultDetail);
		ClassRegistry::flush();
	}

}
?>