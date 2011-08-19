<?php
/* Candidate Test cases generated on: 2011-07-07 12:07:50 : 1310054690*/
App::import('Model', 'Candidate');

class CandidateTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.candidate_profile','app.candidate_link','app.candidate_party',
	                    'app.candidate_political_experience','app.candidate_university_study',
			    'app.candidate_work_experience',
			    'app.person','app.question', 'app.result', 'app.candidate', 'app.category',
			    'app.result_detail', 'app.answer', 'app.weight');

	function startTest() {
		$this->Candidate =& ClassRegistry::init('Candidate');
	}

	function endTest() {
		unset($this->Candidate);
		ClassRegistry::flush();
	}

        function testCandidateCompatibility(){
            $data = array(
                'Category'=>array(
                    1=>array(
                        'Question'=>array(
                            1=>array(
                                'Answer'=>1,
                                'Percentage'=>0.5
                                ),
			    //it is important to notice that the second question is not answered because it
			    //was never shown in the form, this was because the'included_in_media_naranja'
			    //field in this case is 0 or false
                        )
                    ),
                    2=>array(
                        'Question'=>array(
                            3=>array(
                                'Answer'=>5,
                                'Percentage'=>0.5
                                ),
                            4=>array(
                                'Answer'=>7,
                                'Percentage'=>0.5
                                ),
                        )
                    )
                    )
                );
            $idCandidate = 1;

            $result = $this->Candidate->compatibility($idCandidate,$data);
            $expected = array(
                1=>array(
                    'Category'=>array(
                        'id'=>1,
			'slug'=>'numeros-imaginarios',
                        'name'=>'numeros imaginarios',
                        'sort'=>1,
                        'afinity'=>array(
				'importancesTimesWeights'=>0.5,//(1*0.5)
				'importances'=>0.5,//(0.5)
				'percentage'=>100
			    )
                        )
                    ),
                2=>array(
                    'Category'=>array(
                        'id'=>2,
			'slug'=>'numeros-reales',
                        'name'=>'numeros reales',
                        'sort'=>2,
                        'afinity'=>array(
				'importancesTimesWeights'=>1,//(1*0.5)+(1*0.5)
				'importances'=>1,//(0.5+0.5)
				'percentage'=>100
			    )
                        )
                    )
            );
            $this->assertEqual($result,$expected);
        }

        function testCalculateTotalAfinity(){
            $data = array(
                1=>array(
                    'Category'=>array(
                        'id'=>1,
                        'name'=>'numeros imaginarios',
                        'afinity'=>array(
				'importancesTimesWeights'=>0.5,//(1*0.5)
				'importances'=>0.5,//(0.5)
				'percentage'=>100
			    )
                        )
                    ),
                2=>array(
                    'Category'=>array(
                        'id'=>2,
                        'name'=>'numeros reales',
                        'afinity'=>array(
				'importancesTimesWeights'=>1,//(1*0.5)+(1*0.5)
				'importances'=>1,//(0.5+0.5)
				'percentage'=>100
			    )
                        )
                    )
            );
            $expected = 100;
            $result = $this->Candidate->calculateTotalAfinity($data);
            $this->assertEqual($expected,$result);
        }
	function testSaveCandidateTest(){
	    $profile = $this->Candidate->getProfile(1);
	    $this->assertTrue(isset($profile['CandidatePoliticalExperience'][1]['description']));
	}
	function testRemoveEmptyDataFromArray(){
	    $testArray = array(
		'a'=>'a',
		'shouldNotBeRemoved'=>array(
		    'firstElement'=>'a',
		    'secondElement'=>'b'
		),
		'shouldNeitherBeRemoved'=>array(
		    'notRemoved'=>'Imnotbeingremoved',
		    'butThis'=>array(
			'anElement'=>null
		    )
		),
		'shouldBeRemoved'=>array(
		    'firstElement'=>'',
		    'secondElement'=>null
		),
		'shouldNotBeRemovedEither'=>array(
		    'firstElement'=>null,
		    'secondElement'=>'anything'
		)
	    );
	    $expected = array(
		'a'=>'a',
		'shouldNotBeRemoved'=>array(
		    'firstElement'=>'a',
		    'secondElement'=>'b'
		),
		'shouldNeitherBeRemoved'=>array(
		    'notRemoved'=>'Imnotbeingremoved'
		),
		'shouldNotBeRemovedEither'=>array(
		    'firstElement'=>null,
		    'secondElement'=>'anything'
		)
	    );
	    $this->Candidate->Behaviors->attach('RelatedModelCleaner');
	    $result = $this->Candidate->removeEmptyDataFromArray($testArray);
	    $this->assertEqual($expected,$result);
	}
	function testRemovesEmptyArrays(){
	    $data = array(
		'Answers'=>array(
		    0=>array(
			'Answer'=>array(
			    'answer'=>null
			)
		    )
		)

	    );
	    $this->Candidate->Behaviors->attach('RelatedModelCleaner');
	    $result = $this->Candidate->removeEmptyDataFromArray($data);
	    $this->assertTrue(empty($result));

	}
}
?>