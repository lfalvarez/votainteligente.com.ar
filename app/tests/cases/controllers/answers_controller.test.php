<?php
/* Answers Test cases generated on: 2011-07-13 18:50:59 : 1310597459*/
App::import('Controller', 'Answers');

class TestAnswersController extends AnswersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AnswersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.candidate_profile','app.candidate_link','app.candidate_party',
	                    'app.candidate_political_experience','app.candidate_university_study',
			    'app.candidate_work_experience','app.answer', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.candidate', 'app.weight');

	function startTest() {
		$this->Answers =& new TestAnswersController();
		$this->Answers->constructClasses();
	}

	function endTest() {
		unset($this->Answers);
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
