<?php
class CandidateProfilesController extends AppController {

	var $name = 'CandidateProfiles';
	var $layout = 'admin';
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->CandidateProfile->recursive = 0;
	}
	function admin_index() {
		$this->set('candidateProfiles', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidate profile', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidateProfile', $this->CandidateProfile->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CandidateProfile->create();
			if ($this->CandidateProfile->save($this->data)) {
				$this->Session->setFlash(__('The candidate profile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate profile could not be saved. Please, try again.', true));
			}
		}
		$candidates = $this->CandidateProfile->Candidate->find('list');
		$this->set(compact('candidates'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidate profile', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CandidateProfile->save($this->data)) {
				$this->Session->setFlash(__('The candidate profile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate profile could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CandidateProfile->read(null, $id);
		}
		$candidates = $this->CandidateProfile->Candidate->find('list');
		$this->set(compact('candidates'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate profile', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CandidateProfile->delete($id)) {
			$this->Session->setFlash(__('Candidate profile deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidate profile was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
