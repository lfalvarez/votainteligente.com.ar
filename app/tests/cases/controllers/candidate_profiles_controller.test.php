<?php
/* CandidateProfiles Test cases generated on: 2011-07-26 12:50:58 : 1311699058*/
App::import('Controller', 'CandidateProfiles');

class TestCandidateProfilesController extends CandidateProfilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CandidateProfilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer', 'app.candidate_link', 'app.candidate_party', 'app.candidate_political_experience', 'app.candidate_university_study', 'app.candidate_work_experience');

	function startTest() {
		$this->CandidateProfiles =& new TestCandidateProfilesController();
		$this->CandidateProfiles->constructClasses();
	}

	function endTest() {
		unset($this->CandidateProfiles);
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
