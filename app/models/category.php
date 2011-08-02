<?php
class Category extends AppModel {
	var $name = 'Category';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		)
	);
        var $order = "Category.order ASC";
	var $actAs = array('Containable');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ResultDetail' => array(
			'className' => 'ResultDetail',
			'foreignKey' => 'category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	function findAllForIndex(){
		return $this->findAllWithConditions();
	}
	function findAllForMediaNaranja(){
	    return $this->findAllWithConditions(array('included_in_media_naranja '=>1));
	}
	function findAllWithConditions($conditionsForQuestions = array()){
	    $this->recursive = -1;
	    $categories = $this->find('all');
	    $categoriesResult = array();
	    foreach ($categories as $category){
		    $questionsInThisCategory = $this->Question->findAllWithConditions($category['Category']['id'],$conditionsForQuestions);
		    $areThereQuestions = count($questionsInThisCategory)>0;
		    if($areThereQuestions){
			    $category['Questions']=$questionsInThisCategory;
			    $categoriesResult[]=$category;
		    }
	    }
	    return $categoriesResult;
	}
        function calculateAfinity($weightsForThisCandidate,$answersAndPercentages){
            $totalAfinity = 0;
            $importancesTimesWeights = 0;
            $importances = 0;
            foreach($answersAndPercentages['Question'] as $idQuestion=>$answer){
                if(!isset($answer['Answer'])){
                    $answer['Answer']=0;
                }
                $importance = $answer['Percentage'];

                $weight = 0;
                foreach($weightsForThisCandidate as $weightForThisCandidate){
                    $isThisTheRightWeight = ($weightForThisCandidate['Weight']['question_id']==$idQuestion)&&($weightForThisCandidate['Weight']['answer_id']==$answer['Answer']);
                    if($isThisTheRightWeight){
                        $weight = $weightForThisCandidate['Weight']['weighting'];
                        break;
                    }
                }
                $importancesTimesWeights += $importance*$weight;
                $importances += $importance;
            }
            $totalAfinity = ($importancesTimesWeights/$importances)*100;
            return $totalAfinity;
        }
        function getAll($conditions=array()){
            $categoriesFromDatabase = $this->find(
                    'all',
                    array(
                        'conditions'=>$conditions
                    )
                );
            $result = array();
            foreach($categoriesFromDatabase as $category){
                $idCategory = $category['Category']['id'];
                $result[$idCategory]=$category;
            }
            return $result;
        }
	function getAllCategoriesAndQuestionsForCandidate($candidateId){
	    $this->Behaviors->attach('Containable');
	    $contain = array(
		'Question'=>array(
		    'Answer'=>array(
			'Weight'=>array(
			    'SourceOfAnswer',
			    'conditions'=>array(
				'Weight.candidate_id ='=>$candidateId
				),
			    )
			)
		    )
		);
	    $categories = $this->find('all',array('contain'=>$contain));
	    foreach ($categories as $key => $category){
		if (empty($category['Question'])) {
		    unset($categories[$key]);
		}
	    }
	    return $categories;
	}
	function beforeSave($options = array()) {
	    $this->data['Category']['slug']=$this->slugifyName($this->data['Category']['name']);
	    return true;
	}
}
?>