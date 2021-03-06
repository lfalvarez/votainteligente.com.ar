<?php
class QuestionsController extends AppController {

	var $name = 'Questions';
        var $layout = 'admin';
        var $helpers = array('Admin');
	function admin_index() {
		$this->paginate = array(
		    'order'=>array('Question.category_id','Question.order')
		);
		$this->Question->recursive = 0;
		$questions = $this->paginate();
		$categoryIds = array();
		foreach ($questions as $question) {
		    if (!in_array($question['Question']['category_id'],$categoryIds)) {
			$categoryIds[] = $question['Question']['category_id'];
		    }
		}
		$categories = $this->Question->Category->find('list',array('conditions'=>array('id'=>$categoryIds)));

		$orderedQuestions = array();
		foreach ($categories as $idCategory=>$category) {
		    $orderedQuestions[$idCategory] = array(
			'name'=>$category,
			'questions'=>array()
		    );
		}
		foreach ($questions as $question) {
		    $orderedQuestions[$question['Question']['category_id']]['questions'][] = $question;
		}
		$this->set('orderedQuestions',$orderedQuestions);
		$this->set('questions', $questions);
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->Question->recursive = 0;
		$this->set('question', $this->Question->read(null, $id));
	}

	function admin_add($idCategory = null) {
		if (!empty($this->data)) {
			$this->Question->create();
			if ($this->Question->saveAllQuestionAnswersAndWeights($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Question->Category->find('list');
		$candidates = $this->Question->Weight->Candidate->find('list');
		$this->set('selectedCategoryId',$idCategory);
		$this->set(compact('categories'));
		$this->set(compact('candidates'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Question->saveAllQuestionAnswersAndWeights($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		$candidates = $this->Question->Weight->Candidate->find('list');
		$candidatesIds = $this->Question->Weight->find('list',array('fields'=>array('candidate_id'),'conditions'=>array('question_id'=>$id)));
		if (empty($this->data)) {
			$this->Question->Behaviors->attach('Containable');
			$this->Question->contain(array('Answer'));
			$this->data = $this->Question->read(null, $id);
			foreach ($this->data['Answer'] as $answerCounter => $answer) {
			    $weights = $this->Question->Weight->find('list',array('fields'=>array('candidate_id'),'conditions'=>array('question_id'=>$id,'answer_id'=>$answer['id'])));
			    $weightsForDisplay = array();
			    foreach ($candidates as $idCandidate => $candidate) {
				$checked = false;
				$disabled = false;
				if (in_array($idCandidate,$weights)) {
				    foreach($weights as $weightId => $weight){
					if ($weight == $idCandidate) {
					    $idWeight = $weightId;
					    $checked = true;
					}
				    }
				}
				else {
				    $idWeight = 0;
				    if (in_array($idCandidate,$candidatesIds)) {
					$disabled = true;
				    }
				}
				 $currentWeight = array(
				    'candidate_id'  => $idCandidate,
				    'candidate'	    => $candidate,
				    'checked'	    => $checked,
				    'disabled'	    => $disabled
				);
				if ($idWeight>0) {
				    $currentWeight['id'] = $idWeight;
				}
				$weightsForDisplay[] = $currentWeight;
			    }
			    $this->data['Answer'][$answerCounter]['Weight'] = $weightsForDisplay;
			}
		}

		$categories = $this->Question->Category->find('list');
		$this->set(compact('candidates'));
		$this->set(compact('categories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Question->delete($id)) {
			$this->Session->setFlash(__('Question deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Question was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_moveUp($id) {
	    $this->Question->moveUp($id);
	    $this->redirect(array('controller'=>'questions','action'=>'index'));
	}
	function admin_moveDown($id) {
	    $this->Question->moveDown($id);
	    $this->redirect(array('controller'=>'questions','action'=>'index'));
	}
}
