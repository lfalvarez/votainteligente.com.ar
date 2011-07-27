<?php
/* CandidateParty Test cases generated on: 2011-07-25 17:50:37 : 1311630637*/
App::import('Model', 'CandidateParty');

class CandidatePartyTestCase extends CakeTestCase {
	var $fixtures = array('app.candidate_party', 'app.candidate_profile', 'app.candidate', 'app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.answer');

	function startTest() {
		$this->CandidateParty =& ClassRegistry::init('CandidateParty');
	}

	function endTest() {
		unset($this->CandidateParty);
		ClassRegistry::flush();
	}

}
