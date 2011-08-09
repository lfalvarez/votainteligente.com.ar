<?php
class CandidatesController extends AppController {

	var $name = 'Candidates';
        var $layout = 'admin';

	function admin_index() {
		$this->Candidate->recursive = 0;
		$this->set('candidates', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidate', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidate', $this->Candidate->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Candidate->create();
			if ($this->Candidate->saveAllData($this->data)) {
				$this->Session->setFlash(__('The candidate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate could not be saved. Please, try again.', true));
			}
		}
		Configure::load('medianaranja');
		$possibleTypes = Configure::read('PoliticalExperience.types');
		$this->set('politicalExperienceTypes',$possibleTypes);
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidate', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Candidate->saveAllData($this->data)) {
				$this->Session->setFlash(__('The candidate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Candidate->read(null, $id);
			$idProfile = $this->Candidate->CandidateProfile->field('id',array('candidate_id' => $id));
			$this->Candidate->CandidateProfile->Behaviors->attach('Containable');
			$this->Candidate->CandidateProfile->contain(array('CandidateLink','CandidateParty','CandidatePoliticalExperience','CandidateUniversityStudy','CandidateWorkExperience'));
			$profile = $this->Candidate->CandidateProfile->read(null,$idProfile);
			Configure::load('medianaranja');
			$possibleTypes = Configure::read('PoliticalExperience.types');
			$this->set('politicalExperienceTypes',$possibleTypes);
			$this->data = array_merge($this->data,$profile);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Candidate->delete($id)) {
			$this->Session->setFlash(__('Candidate deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidate was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
