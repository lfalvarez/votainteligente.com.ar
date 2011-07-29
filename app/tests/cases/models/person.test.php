<?php
/* Person Test cases generated on: 2011-07-07 12:07:58 : 1310055178*/
App::import('Model', 'Person');

class PersonTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.candidate_profile','app.candidate_link','app.candidate_party',
	                    'app.candidate_political_experience','app.candidate_university_study',
			    'app.candidate_work_experience','app.person_answer','app.person','app.question', 'app.result', 'app.candidate', 'app.category', 'app.result_detail', 'app.answer', 'app.weight');
        var $answers = array(
                'Category'=>array(
                    1=>array(
                        'Question'=>array(
                            2=>array(
                                'Answer'=>2,
                                'Percentage'=>0.5
                            ),
                            3=>array(
                                'Percentage'=>0.5
                            )
                        )
                    )
                )
            );

	function startTest() {
		$this->Person =& ClassRegistry::init('Person');
	}

	function endTest() {
		unset($this->Person);
		ClassRegistry::flush();
	}

        function testSaveAnswers(){
            $this->Person->saveAnswers($this->answers,1);
            $this->PersonAnswer =& ClassRegistry::init('PersonAnswer');
            $thisPersonsAnswer = $this->PersonAnswer->find('all',array('conditions'=>array('result_id'=>1,'answer_id'=>2)));
            $this->assertEqual(1,count($thisPersonsAnswer));
        }
        function testSaveResult(){
            $data = array(
                    'Candidate'=>array(
                        'id'=>1,
                        'name'=>'numeros pares',
                        'imagepath'=>'',
                        'total'=>6.25
                    ),
                    'afinity'=>array(
                        1=>array(
                            'Category'=>array(
                                'id'=>1,
                                'name'=>'numeros imaginarios',
                                'afinity'=>50
                            )
                        )
                    )
            );
            $this->Person->saveResult($data,$this->answers,array());
            $result = $this->Person->Result->ResultDetail->find('all',array('conditions'=>array('result_id'=>2)));
            $this->assertEqual(1,count($result));
        }

}
?>