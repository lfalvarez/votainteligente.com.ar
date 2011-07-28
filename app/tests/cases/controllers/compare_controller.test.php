<?php
App::import('Controller', 'Compare');

class TestCompareController extends CompareController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}
class CompareControllerTestCase extends CakeTestCase {
    var $fixtures = array('app.candidate_profile','app.candidate_link','app.candidate_party',
	                    'app.candidate_political_experience','app.candidate_university_study',
			    'app.candidate_work_experience','app.answer', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.candidate', 'app.weight');
    function startTest() {
	    $this->Compare =& new TestCompareController();
	    $this->Compare->constructClasses();
    }

    function endTest() {
	    unset($this->Compare);
	    ClassRegistry::flush();
    }
    function testProcessData(){
	$data = 'jorge-arrate_vs_sebastian-pinera_en_numeros-reales';
	$result = $this->Compare->_decodeData($data);
	$expected = array(
	    'firstCandidateId'=>1,//Jorge Arrate
	    'secondCandidateId'=>2,//Sebastian Piñera
	    'categoryId'=>2//numeros reales
	);
	$this->assertEqual($expected,$result);
    }
    function testIfDataMalfunctionReturnFalse(){
	$data = 'b_en_c_vs_a';
	$result = $this->Compare->_comparisonDataChecker($data);
	$expected = false;
	$this->assertEqual($expected,$result);
    }
    function testIfDataMalfunctionReturnFalse2(){
	$data = 'Sdas´ññññasdasin';
	$result = $this->Compare->_comparisonDataChecker($data);
	$expected = false;
	$this->assertEqual($expected,$result);
    }
    function testDataWellFormedReturnsTrue(){
	$wellFormedData = 'a_vs_b_en_c';
	$result = $this->Compare->_comparisonDataChecker($wellFormedData);
	$expected = true;
	$this->assertEqual($expected,$result);
    }
    function testIfDataDoesntExistReturnNull(){
	$data = 'non_existent_candidate_vs_sebastian-pinera_en_salud';
	$result = $this->Compare->_decodeData($data);
	$expected = NULL;
	$this->assertEqual($expected,$result);
    }
}
?>
