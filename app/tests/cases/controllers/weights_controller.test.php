<?php
/* Weights Test cases generated on: 2011-07-13 18:32:49 : 1310596369*/
App::import('Controller', 'Weights');

class TestWeightsController extends WeightsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class WeightsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_profile','app.candidate_link','app.candidate_party',
	                    'app.candidate_political_experience','app.candidate_university_study',
			    'app.candidate_work_experience','app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.candidate', 'app.answer');

	function startTest() {
		$this->Weights =& new TestWeightsController();
		$this->Weights->constructClasses();
	}

	function endTest() {
		unset($this->Weights);
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
