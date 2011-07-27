<?php
class AnswersController extends AppController {

	var $name = 'Answers';
        var $layout = 'admin';
        var $helpers = array('Admin');
	function admin_index() {
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answer', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->Answer->recursive = 0;
		$this->set('answer', $this->Answer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Answer->create();
			if ($this->Answer->save($this->data)) {
				$this->Session->setFlash(__('The answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->Answer->Question->find('list');
		$this->set(compact('questions'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Answer->save($this->data)) {
				$this->Session->setFlash(__('The answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Answer->read(null, $id);
		}
		$questions = $this->Answer->Question->find('list');
		$this->set(compact('questions'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Answer->delete($id)) {
			$this->Session->setFlash(__('Answer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_getAnswersForThisQuestion($questionId){
	    $this->layout = 'script';
	    $answers = $this->Answer->find('all',array('conditions'=>array('question_id'=>$questionId)));
	    $this->set('answers',$answers);
	}
}
