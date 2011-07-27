<?php
/* CandidateProfile Test cases generated on: 2011-07-25 17:55:42 : 1311630942*/
App::import('Model', 'CandidateProfile');

class CandidateProfileTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer', 'app.candidate_link', 'app.candidate_party', 'app.candidate_political_experience', 'app.candidate_university_study', 'app.candidate_work_experience');

	function startTest() {
		$this->CandidateProfile =& ClassRegistry::init('CandidateProfile');
	}

	function endTest() {
		unset($this->CandidateProfile);
		ClassRegistry::flush();
	}

}
