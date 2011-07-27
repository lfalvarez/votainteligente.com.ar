<?php
/* CandidateWorkExperience Test cases generated on: 2011-07-25 17:53:45 : 1311630825*/
App::import('Model', 'CandidateWorkExperience');

class CandidateWorkExperienceTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_work_experience', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer');

	function startTest() {
		$this->CandidateWorkExperience =& ClassRegistry::init('CandidateWorkExperience');
	}

	function endTest() {
		unset($this->CandidateWorkExperience);
		ClassRegistry::flush();
	}

}
