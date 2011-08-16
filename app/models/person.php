<?php
class Person extends AppModel {
	var $name = 'Person';
	var $displayField = 'idfacebook';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'Result' => array(
			'className' => 'Result',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $belongsTo = array(
		'Candidate' => array(
			'className' => 'Candidate',
			'foreignKey' => 'candidate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        function saveUser($data){
            $this->create($data);
            $this->set('date',date('Y-m-d H:i:s') );
            $this->save();
        }
        function saveResult($winner,$answers,$userData){
            $userData['candidate_id']=$winner['Candidate']['id'];
            $this->saveUser($userData);
            $this->Result->create();
            $this->Result->set('person_id',$this->id);
            $this->Result->set('candidate_id',$winner['Candidate']['id']);
            $this->Result->set('result',$winner['Candidate']['total']);
            $this->Result->save();
            $resultDetails = array();
            foreach($winner['afinity'] as $category){
                $resultDetails[]=array(
                    'ResultDetail'=>array(
                        'result_id'=>$this->Result->id,
                        'category_id'=>$category['Category']['id'],
                        'result'=>$category['Category']['afinity']['percentage']
                    )
                );
            }
            $this->Result->ResultDetail->saveAll($resultDetails);
            $this->saveAnswers($answers,1);
            return $this->id;
        }
        function saveAnswers($data,$result_id){
            $answers = array();
            foreach($data['Category'] as $category){
                foreach($category['Question'] as $question){
                    if(isset($question['Answer'])&&$question['Answer']!=0){
                        $answers[]=array(
                            'PersonAnswer'=>array(
                                'result_id'=>$result_id,
                                'answer_id'=>$question['Answer'],
                                'importance'=>$question['Percentage'],
                            )
                        );
                    }
                }
            }
            $personAnswer =& ClassRegistry::init('PersonAnswer');
            $personAnswer->saveAll($answers);

        }

}
?>