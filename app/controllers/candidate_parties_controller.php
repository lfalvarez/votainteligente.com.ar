<?php
class CandidatePartiesController extends AppController {

	var $name = 'CandidateParties';
	var $layout = 'admin';
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->CandidateParty->recursive = 0;
	}
	function admin_index() {
		$this->CandidateParty->recursive = 0;
		$this->set('candidateParties', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidate party', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidateParty', $this->CandidateParty->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CandidateParty->create();
			if ($this->CandidateParty->save($this->data)) {
				$this->Session->setFlash(__('The candidate party has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate party could not be saved. Please, try again.', true));
			}
		}
		$candidateProfiles = $this->CandidateParty->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidate party', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CandidateParty->save($this->data)) {
				$this->Session->setFlash(__('The candidate party has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate party could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CandidateParty->read(null, $id);
		}
		$candidateProfiles = $this->CandidateParty->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate party', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CandidateParty->delete($id)) {
			$this->Session->setFlash(__('Candidate party deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidate party was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
