<?php
class CandidatePoliticalExperiencesController extends AppController {

	var $name = 'CandidatePoliticalExperiences';
	var $layout = 'admin';
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->CandidatePoliticalExperience->recursive = 0;
	}
	function admin_index() {
		$this->CandidatePoliticalExperience->recursive = 0;
		$this->set('candidatePoliticalExperiences', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidate political experience', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidatePoliticalExperience', $this->CandidatePoliticalExperience->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CandidatePoliticalExperience->create();
			if ($this->CandidatePoliticalExperience->save($this->data)) {
				$this->Session->setFlash(__('The candidate political experience has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate political experience could not be saved. Please, try again.', true));
			}
		}
		$candidateProfiles = $this->CandidatePoliticalExperience->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidate political experience', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CandidatePoliticalExperience->save($this->data)) {
				$this->Session->setFlash(__('The candidate political experience has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate political experience could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CandidatePoliticalExperience->read(null, $id);
		}
		$candidateProfiles = $this->CandidatePoliticalExperience->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate political experience', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CandidatePoliticalExperience->delete($id)) {
			$this->Session->setFlash(__('Candidate political experience deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidate political experience was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
