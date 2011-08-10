<?php
class WeightsController extends AppController {

	var $name = 'Weights';
        var $layout = 'admin';
	function admin_index() {
		$this->Weight->recursive = 0;
		$this->set('weights', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid weight', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->Weight->recursive = 0;
		$this->set('weight', $this->Weight->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Weight->create();
			if ($this->Weight->save($this->data)) {
				$this->Session->setFlash(__('The weight has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The weight could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->Weight->Question->Category->getQuestionsOrderedByCategoryForComboBox();
		$candidates = $this->Weight->Candidate->find('list');
		$this->set(compact('questions', 'candidates'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid weight', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Weight->save($this->data)) {
				$this->Session->setFlash(__('The weight has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The weight could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Weight->read(null, $id);
		}
		$questions = $this->Weight->Question->Category->getQuestionsOrderedByCategoryForComboBox();
		$candidates = $this->Weight->Candidate->find('list');
		$answers = $this->Weight->Answer->find('list');
		$this->set(compact('questions', 'candidates', 'answers'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for weight', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Weight->delete($id)) {
			$this->Session->setFlash(__('Weight deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Weight was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
