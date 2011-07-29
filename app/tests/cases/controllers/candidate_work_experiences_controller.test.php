<?php
/* CandidateWorkExperiences Test cases generated on: 2011-07-26 12:52:34 : 1311699154*/
App::import('Controller', 'CandidateWorkExperiences');

class TestCandidateWorkExperiencesController extends CandidateWorkExperiencesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CandidateWorkExperiencesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.candidate_work_experience', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer', 'app.candidate_link', 'app.candidate_party', 'app.candidate_political_experience', 'app.candidate_university_study');

	function startTest() {
		$this->CandidateWorkExperiences =& new TestCandidateWorkExperiencesController();
		$this->CandidateWorkExperiences->constructClasses();
	}

	function endTest() {
		unset($this->CandidateWorkExperiences);
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
