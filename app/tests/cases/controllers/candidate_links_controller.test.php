<?php
/* CandidateLinks Test cases generated on: 2011-07-26 12:47:37 : 1311698857*/
App::import('Controller', 'CandidateLinks');

class TestCandidateLinksController extends CandidateLinksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CandidateLinksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_link', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer', 'app.candidate_party', 'app.candidate_political_experience', 'app.candidate_university_study', 'app.candidate_work_experience');

	function startTest() {
		$this->CandidateLinks =& new TestCandidateLinksController();
		$this->CandidateLinks->constructClasses();
	}

	function endTest() {
		unset($this->CandidateLinks);
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
