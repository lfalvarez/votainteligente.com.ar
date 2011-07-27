<?php
/* CandidatePoliticalExperience Test cases generated on: 2011-07-25 17:47:14 : 1311630434*/
App::import('Model', 'CandidatePoliticalExperience');

class CandidatePoliticalExperienceTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_political_experience', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer');

	function startTest() {
		$this->CandidatePoliticalExperience =& ClassRegistry::init('CandidatePoliticalExperience');
	}

	function endTest() {
		unset($this->CandidatePoliticalExperience);
		ClassRegistry::flush();
	}

}
