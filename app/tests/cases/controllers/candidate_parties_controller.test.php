<?php
/* CandidateParties Test cases generated on: 2011-07-26 12:47:51 : 1311698871*/
App::import('Controller', 'CandidateParties');

class TestCandidatePartiesController extends CandidatePartiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CandidatePartiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.candidate_party', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer', 'app.candidate_link', 'app.candidate_political_experience', 'app.candidate_university_study', 'app.candidate_work_experience');

	function startTest() {
		$this->CandidateParties =& new TestCandidatePartiesController();
		$this->CandidateParties->constructClasses();
	}

	function endTest() {
		unset($this->CandidateParties);
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
