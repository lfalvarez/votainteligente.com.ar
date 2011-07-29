<?php
/* CandidatePoliticalExperiences Test cases generated on: 2011-07-26 12:50:39 : 1311699039*/
App::import('Controller', 'CandidatePoliticalExperiences');

class TestCandidatePoliticalExperiencesController extends CandidatePoliticalExperiencesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CandidatePoliticalExperiencesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.candidate_political_experience', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer', 'app.candidate_link', 'app.candidate_party', 'app.candidate_university_study', 'app.candidate_work_experience');

	function startTest() {
		$this->CandidatePoliticalExperiences =& new TestCandidatePoliticalExperiencesController();
		$this->CandidatePoliticalExperiences->constructClasses();
	}

	function endTest() {
		unset($this->CandidatePoliticalExperiences);
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
