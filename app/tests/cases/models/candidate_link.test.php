<?php
/* CandidateLink Test cases generated on: 2011-07-25 17:49:39 : 1311630579*/
App::import('Model', 'CandidateLink');

class CandidateLinkTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_link', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer');

	function startTest() {
		$this->CandidateLink =& ClassRegistry::init('CandidateLink');
	}

	function endTest() {
		unset($this->CandidateLink);
		ClassRegistry::flush();
	}

}
