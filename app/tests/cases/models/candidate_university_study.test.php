<?php
/* CandidateUniversityStudy Test cases generated on: 2011-07-25 17:53:02 : 1311630782*/
App::import('Model', 'CandidateUniversityStudy');

class CandidateUniversityStudyTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_university_study', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer');

	function startTest() {
		$this->CandidateUniversityStudy =& ClassRegistry::init('CandidateUniversityStudy');
	}

	function endTest() {
		unset($this->CandidateUniversityStudy);
		ClassRegistry::flush();
	}

}
