<?php
/* Candidates Test cases generated on: 2011-07-13 18:23:33 : 1310595813*/
App::import('Controller', 'Candidates');

class TestCandidatesController extends CandidatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CandidatesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer');

	function startTest() {
		$this->Candidates =& new TestCandidatesController();
		$this->Candidates->constructClasses();
	}

	function endTest() {
		unset($this->Candidates);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
