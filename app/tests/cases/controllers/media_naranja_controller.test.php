<?php
App::import('Controller', 'MediaNaranja');

class TestMediaNaranjaController extends MediaNaranjaController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}
class MediaNaranjaControllerTestCase extends CakeTestCase {
    var $fixtures = array('app.source_of_answer','app.candidate_profile','app.candidate_link','app.candidate_party',
	                    'app.candidate_political_experience','app.candidate_university_study',
			    'app.candidate_work_experience','app.answer', 'app.question', 'app.category', 'app.result_detail', 'app.result', 'app.person', 'app.candidate', 'app.weight');
    var $testDataThatIsCorrect = array(
	'Category'=>array(
	    1=>array(
		'Question' => array(
		    1=>array(
			'Answer'=>1,
			'Percentage'=>0.1

		    ),
		)
	    ),
	    2=>array(
		'Question' => array(
		    3=>array(
			'Answer'=>5,
			'Percentage'=>0.1
		    ),
		    4=>array(
			'Answer'=>7,
			'Percentage'=>0.1
		    )
		)
	    )
	)
    );
    var $testDataThatIsIncorrect = array(
	'Category'=>array(
	    1=>array(
		'Question' => array(
		    1=>array(
			'Answer'=>1,
			'Percentage'=>0.1

		    ),
		)
	    )
	)
    );
    function startTest() {
	    $this->MediaNaranja =& new TestMediaNaranjaController();
	    $this->MediaNaranja->constructClasses();
    }

    function endTest() {
	    unset($this->Compare);
	    ClassRegistry::flush();
    }
    function testChecksFormWasAnsweredCorrectly(){
	$result = $this->MediaNaranja->_answeredCorrectly($this->testDataThatIsCorrect);
	$this->assertTrue($result);
    }
    function testReturnsFalseIfFormWasNotComplete(){
	$result = $this->MediaNaranja->_answeredCorrectly($this->testDataThatIsIncorrect);
	$this->assertFalse($result);
    }
}
?>