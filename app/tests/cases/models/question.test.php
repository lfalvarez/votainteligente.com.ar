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
                                                        'question_id' => 1
                                                ),
                                                array(
                                                        'id' => 2,
                                                        'answer' => 'me gusta!! por que tienen un numero par de ejes',
                                                        'question_id' => 1
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
                                                'question_id' => 2
                                        ),
                                        array(
                                                'id' => 4,
                                                'answer' => 'par',
                                                'question_id' => 2
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
	function testSaveAllQuestionAnswersAndEverything(){
	    $data = array(
		'Question'=>array(
		    'question'=>'estasdeacuerdo',
		    'explanation'=>'estasdeacuerdo',
		    'short_description'=>'estasdeacuerdo',
		    'category_id'=>1,
		    'sour'=>0,
		    'public'=>1,
		    'included_in_media_naranja'=>1,
		    'order'=>1
		),
		'Answers'=>array(
		    0 => array(
			'Answer' =>array(
			    'answer'=>'Si',

			),
			'Weight'=>array(
				0=>array(
				    'candidate_id'=>1
			    )
			)
		    ),
		    1=>array(
			'Answer' =>array(
			    'answer'=>'No',
			    'public'=>1,

			),
			'Weight'=>array(
				0=>array(
				    'candidate_id'=>2
			    )
			)
		    )
		)
	    );
	    $result = $this->Question->saveAllQuestionAnswersAndWeights($data);

	    $this->Question->Behaviors->attach('Containable');
	    $this->Question->contain(array('Answer'=>'Weight'));
	    $question = $this->Question->find('first',array('conditions'=>array('question'=>'estasdeacuerdo')));
	    $this->assertTrue(isset($question['Answer'][0]['Weight'][0]['id']));
	}
    function testDoesntSaveOnError(){
	    $data = array(
		'Question'=>array(
		    'question'=>'estasdeacuerdo',
		    'explanation'=>'estasdeacuerdo',
		    'short_description'=>'estasdeacuerdo',
		    'category_id'=>1,
		    'sour'=>0,
		    'public'=>1,
		    'included_in_media_naranja'=>1,
		    'order'=>1
		),
		'Answers'=>array(
		    0 => array(
			'Answer' =>array(
			    'answer'=>'',//<---THE ERROR! an Answer can not be empty and the key must exist
			    'public'=>1//We keep this element so it doesn't desappear when removin empty arrays
			),
			'Weight'=>array(//The whole Weight is going to be removed from the array because it doesn't
				0=>array(//have any not null leafs
				    'candidate_id'=>null
			    )
			)
		    ),
		    1=>array(
			'Answer' =>array(
			    'answer'=>'No',
			    'public'=>1,

			),
			'Weight'=>array(
				0=>array(
				    'candidate_id'=>2
			    )
			)
		    )
		)
	    );
	    $result = $this->Question->saveAllQuestionAnswersAndWeights($data);
	    $this->Question->Behaviors->attach('Containable');
	    $this->Question->contain(array('Answer'=>'Weight'));
	    $question = $this->Question->find('first',array('conditions'=>array('question'=>'estasdeacuerdo')));
	    $this->assertTrue(empty($question));
	}
	function testIfACandidatesAnswerIsMoreThanOneItShouldThrowAnError() {
	    $data = array(
		'Question'=>array(
		    'question'=>'¿¿¿estasdeacuerdo???',
		    'explanation'=>'estasdeacuerdo',
		    'short_description'=>'estasdeacuerdo',
		    'category_id'=>1,
		    'sour'=>0,
		    'public'=>1,
		    'included_in_media_naranja'=>1,
		    'order'=>1
		),
		'Answers'=>array(
		    0 => array(
			'Answer' =>array(
			    'answer'=>'Si',

			),
			'Weight'=>array(
				0=>array(
				    'candidate_id'=>1//This Candidate's option is 'Si'
			    )
			)
		    ),
		    1=>array(
			'Answer' =>array(
			    'answer'=>'No',

			),
			'Weight'=>array(
				0=>array(
				    'candidate_id'=>1//This Candidate's option is also 'No'
			    )
			)
		    )
		)
	    );
	    //Since to this question a candidate voted 'Si' and 'No' it should return false
	    $result = $this->Question->saveAllQuestionAnswersAndWeights($data);
	    $this->assertFalse($result);
	}
	function testCheckCandidatesConsistencyFalse(){
	    $answers = array(
		0 => array(
		    'Answer' =>array(
			'answer'=>'Si',

		    ),
		    'Weight'=>array(
			    0=>array(
				'candidate_id'=>1//This Candidate's option is 'Si'
			)
		    )
		),
		1=>array(
		    'Answer' =>array(
			'answer'=>'No',

		    ),
		    'Weight'=>array(
			    0=>array(
				'candidate_id'=>1//This Candidate's option is also 'No'
			)
		    )
		)
	    );
	    $result = $this->Question->checkCandidatesConsistencyInThisAnswer($answers);
	    $this->assertFalse($result);
	}
	function testCheckCandidatesConsistencyTrue(){
	    $answers = array(
		0 => array(
		    'Answer' =>array(
			'answer'=>'Si',

		    ),
		    'Weight'=>array(
			    0=>array(
				'candidate_id'=>1//This Candidate's option is 'Si'
			)
		    )
		),
		1=>array(
		    'Answer' =>array(
			'answer'=>'No',

		    ),
		    'Weight'=>array(
			    0=>array(
				'candidate_id'=>2//The candidate saying 'No' is a different one
			)
		    )
		)
	    );
	    $result = $this->Question->checkCandidatesConsistencyInThisAnswer($answers);
	    $this->assertTrue($result);
	}
	function testShowsOnlyPublicQuestionsInComparison() {
	    $questions = $this->Question->findAllForCompare(2);//Category id = 2 contains one non public question
	    $this->assertEqual(2,count($questions));
	}
}
?>