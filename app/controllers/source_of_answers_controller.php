<?php
class SourceOfAnswersController extends AppController {

	var $name = 'SourceOfAnswers';
	var $layout = 'admin';
	function admin_index() {
		$this->SourceOfAnswer->recursive = 0;
		$this->set('sourceOfAnswers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid source of answer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sourceOfAnswer', $this->SourceOfAnswer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SourceOfAnswer->create();
			if ($this->SourceOfAnswer->save($this->data)) {
				$this->Session->setFlash(__('The source of answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The source of answer could not be saved. Please, try again.', true));
			}
		}
		$candidates = $this->SourceOfAnswer->Weight->Candidate->find('list');
		$weights = $this->SourceOfAnswer->Weight->findAllWithName();
		$weightsForInput = array();
		foreach ($weights as $weight){
		    $weightsForInput[$weight['Weight']['id']]=$weight['Weight']['name'];
		}
		$this->set('candidates',$candidates);
		$this->set('weights',$weightsForInput);
	}
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid source of answer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SourceOfAnswer->save($this->data)) {
				$this->Session->setFlash(__('The source of answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The source of answer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SourceOfAnswer->read(null, $id);
		}
		$weights = $this->SourceOfAnswer->Weight->find('list');
		$this->set(compact('weights'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for source of answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SourceOfAnswer->delete($id)) {
			$this->Session->setFlash(__('Source of answer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Source of answer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_getQuestionsForCandidate($idCandidate){
	    $this->layout = 'script';
	    $questions = $this->SourceOfAnswer->Weight->Question->Category->getQuestionsOrderedByCategoryForComboBox();
	    $this->set('questions',$questions);
	}
	function admin_getWeightsForCandidateAndQuestion($idCandidate,$idQuestion){
	    $this->layout = 'script';
	    $questionsAnswersAndWeights = $this->SourceOfAnswer->Weight->find('list',array(
		'fields'=>array('Weight.answer_id','Weight.weighting','Weight.id'),
		'conditions'=>array(
		    'question_id'=>$idQuestion,
		    'candidate_id'=>$idCandidate,
		    'weighting <>'=>0
		)
	    ));
	    $answersId = array();
	    foreach ($questionsAnswersAndWeights as $idWeight => $answerOfThisWeight) {
		$idsInThisWeight = array_keys($answerOfThisWeight);

		foreach ($idsInThisWeight as $id) {
		    $answersId[] = $id;
		}
	    }
	    $answers = $this->SourceOfAnswer->Weight->Answer->find('list',array('conditions'=>array('id'=>$answersId)));
	    Configure::load('medianaranja');
	    $posibleValues = Configure::read('Weights.possibleValues');
	    foreach ($questionsAnswersAndWeights as $idWeight => $answerOfThisWeight) {
		$idsInThisWeight = array_keys($answerOfThisWeight);
		$firstAnswerId = $idsInThisWeight[0];
		$weighting = $answerOfThisWeight[$firstAnswerId];
		if (isset($posibleValues[$weighting])) {
		    $weighting = $posibleValues[$weighting];
		}
		$questionsAnswersAndWeights[$idWeight] = $answers[$firstAnswerId].' - '.$weighting;
	    }
	    $this->set('weights',$questionsAnswersAndWeights);
	}
}
