<?php
class CandidateWorkExperiencesController extends AppController {

	var $name = 'CandidateWorkExperiences';
	var $layout = 'admin';
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->CandidateWorkExperience->recursive = 0;
	}
	function admin_index() {
		$this->CandidateWorkExperience->recursive = 0;
		$this->set('candidateWorkExperiences', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidate work experience', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidateWorkExperience', $this->CandidateWorkExperience->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CandidateWorkExperience->create();
			if ($this->CandidateWorkExperience->save($this->data)) {
				$this->Session->setFlash(__('The candidate work experience has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate work experience could not be saved. Please, try again.', true));
			}
		}
		$candidateProfiles = $this->CandidateWorkExperience->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidate work experience', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CandidateWorkExperience->save($this->data)) {
				$this->Session->setFlash(__('The candidate work experience has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate work experience could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CandidateWorkExperience->read(null, $id);
		}
		$candidateProfiles = $this->CandidateWorkExperience->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate work experience', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CandidateWorkExperience->delete($id)) {
			$this->Session->setFlash(__('Candidate work experience deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidate work experience was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
