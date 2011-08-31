<?php
class CandidateUniversityStudiesController extends AppController {

	var $name = 'CandidateUniversityStudies';
	var $layout = 'admin';
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->CandidateUniversityStudy->recursive = 0;
	}
	function admin_index() {
		$this->CandidateUniversityStudy->recursive = 0;
		$this->set('candidateUniversityStudies', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidate university study', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidateUniversityStudy', $this->CandidateUniversityStudy->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CandidateUniversityStudy->create();
			if ($this->CandidateUniversityStudy->save($this->data)) {
				$this->Session->setFlash(__('The candidate university study has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate university study could not be saved. Please, try again.', true));
			}
		}
		$candidateProfiles = $this->CandidateUniversityStudy->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidate university study', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CandidateUniversityStudy->save($this->data)) {
				$this->Session->setFlash(__('The candidate university study has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate university study could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CandidateUniversityStudy->read(null, $id);
		}
		$candidateProfiles = $this->CandidateUniversityStudy->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate university study', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CandidateUniversityStudy->delete($id)) {
			$this->Session->setFlash(__('Candidate university study deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidate university study was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_delete_ajax($id = null) {
		$this->layout = 'script';
		$success = null;
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate university study', true));
			$success = false;
		}
		else {
		    if ($this->CandidateUniversityStudy->delete($id)) {
			$this->Session->setFlash(__('Candidate university study deleted', true));
			$success = true;
		    }
		    else {
			$success = false;
			$this->Session->setFlash(__('Candidate university study was not deleted', true));
		    }
		}
		$this->set('success',$success);
		$this->render('/elements/admin_delete_ajax');
	}
}
