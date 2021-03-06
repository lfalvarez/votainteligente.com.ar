<?php
/* Category Test cases generated on: 2011-07-07 12:07:48 : 1310055048*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.source_of_answer','app.candidate_profile','app.candidate_link','app.candidate_party',
	                    'app.candidate_political_experience','app.candidate_university_study',
			    'app.candidate_work_experience','app.person','app.question', 'app.result', 'app.candidate', 'app.category', 'app.result_detail', 'app.answer', 'app.weight');
        var $weightsForOneCandidate = array(
                0=>array(
                    'Weight'=>array(
                        'id' => 1,
                        'question_id' => 1,
                        'candidate_id' => 1,
                        'answer_id' => 1,
                        'weighting' => 1,
                    )
                ),
                1=>array(
                    'Weight'=>array(
                        'id' => 2,
                        'question_id' => 2,
                        'candidate_id' => 1,
                        'answer_id' => 3,
                        'weighting' => 1,
                    )
                ),
                2=>array(
                    'Weight'=>array(
                        'id' => 3,
                        'question_id' => 2,
                        'candidate_id' => 1,
                        'answer_id' => 4,
                        'weighting' => 0.5,
                    )
                ),
                3=>array(
                    'Weight'=>array(
                        'id' => 4,
                        'question_id' => 1,
                        'candidate_id' => 1,
                        'answer_id' => 2,
                        'weighting' => 0.5,
                    )
                ),
                4=>array(
                    'Weight'=>array(
                        'id' => 5,
                        'question_id' => 2,
                        'candidate_id' => 1,
                        'answer_id' => 5,
                        'weighting' => 0,
                    )
                ),
                5=>array(
                    'Weight'=>array(
                        'id' => 6,
                        'question_id' => 1,
                        'candidate_id' => 1,
                        'answer_id' => 6,
                        'weighting' => 0,
                    )
                )
            );
	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}
        function testCalculateAfinityWithACandidateWithAHundredPercent(){
            $answersAndPercentages = array(
                'Question'=>array(
                        1=>array(
                            'Answer'=>1,
                            'Percentage'=>1
                        ),
                        2=>array(
                            'Answer'=>3,
                            'Percentage'=>1
                        )
                    )
            );
            $result = $this->Category->calculateAfinity($this->weightsForOneCandidate,$answersAndPercentages);
            $expected = array(
		'importancesTimesWeights'=>2,
		'importances'=>2,
		'percentage'=>100
	    );
            $this->assertEqual($result,$expected);
        }
        function testCalculateAfinityWithACandidateWithASeventyFivePercent(){

            $answersAndPercentages = array(
                'Question'=>array(
                        1=>array(
                            'Answer'=>1,
                            'Percentage'=>0.5
                        ),
                        2=>array(
                            'Answer'=>4,
                            'Percentage'=>0.5
                        )
                    )
            );
            $result = $this->Category->calculateAfinity($this->weightsForOneCandidate,$answersAndPercentages);
            $expected = array(
		'importancesTimesWeights'=>0.75,
		'importances'=>1,
		'percentage'=>75
	    );
            $this->assertEqual($result,$expected);
        }
        function testCalculateAfinityWithACandidateWithAZeroPercent(){

            $answersAndPercentages = array(
                'Question'=>array(
                        1=>array(
                            'Answer'=>5,
                            'Percentage'=>0.5
                        ),
                        2=>array(
                            'Answer'=>6,
                            'Percentage'=>0.5
                        )
                    )
            );
            $result = $this->Category->calculateAfinity($this->weightsForOneCandidate,$answersAndPercentages);
            $expected = array(
		'importancesTimesWeights'=>0,//Us vs the candidates importances vs candidate
		'importances'=>1,//sum of the users percentages
		'percentage'=>0
	    );
            $this->assertEqual($result,$expected);
        }
        function testGetAll(){
            $result = $this->Category->getAll();
            $expected = array(
                1=>array(
                    'Category'=>array(
                        'id'=>1,
			'slug'=>'numeros-imaginarios',
                        'name'=>'numeros imaginarios',
                        'sort'=>1,
                        )
                    ),
                2=>array(
                    'Category'=>array(
                        'id'=>2,
			'slug'=>'numeros-reales',
                        'name'=>'numeros reales',
                        'sort'=>2,
                        )
                    )
            );
            $this->assertEqual($result,$expected);
        }
	function testOnSaveSlugifyTheName(){
	    $data = array(
		'Category'=>array(
		    'name'=>'name of the new category with ñá',
		    'sort'=>4
		    ));
	    $this->Category->save($data);
	    $category = $this->Category->findBySlug('name-of-the-new-category-with-na');
	    $this->assertEqual(count($category),1);
	}
	function testShowsOnlyPublicQuestionsInMediaNaranja(){
	    $categoriesAndQuestions = $this->Category->findAllForMediaNaranja();
	    $nonPublicQuestions = 0;
	    foreach($categoriesAndQuestions as $category) {
		foreach($category['Questions'] as $question) {
		    $isThisQuestionNonPublic = !$question['Question']['public'];
		    if ($isThisQuestionNonPublic) {
			$nonPublicQuestions++;
		    }
		}
	    }
	    $this->assertEqual(0,$nonPublicQuestions);
	}
	function testShowsOnlyPublicQuestionsInProfile(){
	    $categoriesAndQuestions = $this->Category->getAllCategoriesAndQuestionsForCandidate(1);
	    $nonPublicQuestions = 0;
	    foreach($categoriesAndQuestions as $category) {
		foreach($category['Question'] as $question) {
		    $isThisQuestionNonPublic = !$question['public'];
		    if ($isThisQuestionNonPublic) {
			$nonPublicQuestions++;
		    }
		}
	    }
	    $this->assertEqual(0,$nonPublicQuestions);
	}

}
?>