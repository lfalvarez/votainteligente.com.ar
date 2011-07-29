<?php
/* SourceOfAnswers Test cases generated on: 2011-07-28 17:44:13 : 1311889453*/
App::import('Controller', 'SourceOfAnswers');

class TestSourceOfAnswersController extends SourceOfAnswersController {
	var $autoRender = false;
	
	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SourceOfAnswersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.candidate', 'app.candidate_profile', 'app.candidate_link', 'app.candidate_party', 'app.candidate_political_experience', 'app.candidate_university_study', 'app.candidate_work_experience', 'app.answer');

	function startTest() {
		$this->SourceOfAnswers =& new TestSourceOfAnswersController();
		$this->SourceOfAnswers->constructClasses();
	}

	function endTest() {
		unset($this->SourceOfAnswers);
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
