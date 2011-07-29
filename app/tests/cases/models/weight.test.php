<?php
/* Weight Test cases generated on: 2011-07-28 17:47:22 : 1311889642*/
App::import('Model', 'Weight');

class WeightTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.weight', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.candidate', 'app.candidate_profile', 'app.candidate_link', 'app.candidate_party', 'app.candidate_political_experience', 'app.candidate_university_study', 'app.candidate_work_experience', 'app.answer');

	function startTest() {
		$this->Weight =& ClassRegistry::init('Weight');
	}

	function endTest() {
		unset($this->Weight);
		ClassRegistry::flush();
	}

	function testGetNameOfTheWeight() {
	    $weight = $this->Weight->findAllWithName();
	    $expected = '¿que piensas de los numeros imaginarios dibujados en un plano cartesiano?|Candidato por los numeros impares|esta bien eso para verlo de manera grafica pero no se demuestra la imparidad de los numeros imaginarios';
	    $this->assertEqual($expected,$weight[0]['Weight']['name']);
	}

}
