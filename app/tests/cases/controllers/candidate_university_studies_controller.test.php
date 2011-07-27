<?php
/* CandidateUniversityStudies Test cases generated on: 2011-07-26 12:51:35 : 1311699095*/
App::import('Controller', 'CandidateUniversityStudies');

class TestCandidateUniversityStudiesController extends CandidateUniversityStudiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CandidateUniversityStudiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_university_study', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer', 'app.candidate_link', 'app.candidate_party', 'app.candidate_political_experience', 'app.candidate_work_experience');

	function startTest() {
		$this->CandidateUniversityStudies =& new TestCandidateUniversityStudiesController();
		$this->CandidateUniversityStudies->constructClasses();
	}

	function endTest() {
		unset($this->CandidateUniversityStudies);
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
