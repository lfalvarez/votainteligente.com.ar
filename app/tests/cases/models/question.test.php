<?php
/* Question Test cases generated on: 2011-07-07 12:07:48 : 1310056488*/
App::import('Model', 'Question');

class QuestionTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.candidate_profile','app.candidate_link','app.candidate_party',
	                    'app.candidate_political_experience','app.candidate_university_study',
			    'app.candidate_work_experience','app.person','app.question', 'app.result', 'app.candidate', 'app.category', 'app.result_detail', 'app.answer', 'app.weight');

	function startTest() {
		$this->Question =& ClassRegistry::init('Question');
	}

	function endTest() {
		unset($this->Question);
		ClassRegistry::flush();
	}
	function testShowsOnlyPublicQuestions(){
		$this->Question->recursive = -1;
		$result = $this->Question->find('all');
		$expected = 4;
		$this->assertEqual(count($result),$expected);
	}
	function testFindAllQuestionsAndAswers(){
		$this->Question->recursive = 1;
		$result = $this->Question->findAllForIndex(1);
		$expected = array(
			0 => array(
				'Question' => array(
							'id' => 1,
							'question' => '¿que piensas de los numeros imaginarios dibujados en un plano cartesiano?',
							'category_id' => 1,
							'sour' => 0,
							'explanation'=>'blah',
							'short_description'=>'blah',
                                                        'order'=>1,
							'public' => 1,
							'included_in_media_naranja' => 1,
						),
				'Answer' => array(
						array(
                                                        'id' => 1,
                                                        'answer' => 'esta bien eso para verlo de manera grafica pero no se demuestra la imparidad de los numeros imaginarios',
                                                        'question_id' => 1,
                                                        'public' => 1
                                                ),
                                                array(
                                                        'id' => 2,
                                                        'answer' => 'me gusta!! por que tienen un numero par de ejes',
                                                        'question_id' => 1,
                                                        'public' => 1
                                                )
					)
				),
                         1=> array(
                             'Question' => array(
                                'id' => 2,
                                'question' => '¿un numero imaginario es par o impar??',
                                'category_id' => 1,
                                'sour' => 0,
				'explanation'=>'blah',
				'short_description'=>'blah',
                                'order'=>2,
                                'public' => 1,
				'included_in_media_naranja' => 0,
                             ),
                             'Answer'=>array(
                                         array(
                                                'id' => 3,
                                                'answer' => 'impar',
                                                'question_id' => 2,
                                                'public' => 1
                                        ),
                                        array(
                                                'id' => 4,
                                                'answer' => 'par',
                                                'question_id' => 2,
                                                'public' => 1
                                        )
                             )

                        )
		);
		$this->assertEqual($expected,$result);
	}
	function testFindAllWithConditionsForMediaNaranja(){
	    $result = $this->Question->findAllWithConditions(1,array('included_in_media_naranja'=>1));
	    $this->assertEqual(1,count($result));
	}
}
?>