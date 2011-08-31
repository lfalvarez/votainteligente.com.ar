<?php
class CandidateLinksController extends AppController {

	var $name = 'CandidateLinks';
	var $layout = 'admin';
	function admin_index() {
		$this->CandidateLink->recursive = 0;
		$this->set('candidateLinks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidate link', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidateLink', $this->CandidateLink->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CandidateLink->create();
			if ($this->CandidateLink->save($this->data)) {
				$this->Session->setFlash(__('The candidate link has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate link could not be saved. Please, try again.', true));
			}
		}
		$candidateProfiles = $this->CandidateLink->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidate link', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CandidateLink->save($this->data)) {
				$this->Session->setFlash(__('The candidate link has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate link could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CandidateLink->read(null, $id);
		}
		$candidateProfiles = $this->CandidateLink->CandidateProfile->find('list');
		$this->set(compact('candidateProfiles'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate link', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CandidateLink->delete($id)) {
			$this->Session->setFlash(__('Candidate link deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidate link was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_delete_ajax($id = null) {
		$this->layout = 'script';
		$success = null;
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidate link', true));
			$success = false;
		}
		else {
		    if ($this->CandidateLink->delete($id)) {
			$this->Session->setFlash(__('Candidate link deleted', true));
			$success = true;
		    }
		    else {
			$success = false;
			$this->Session->setFlash(__('Candidate link was not deleted', true));
		    }
		}
		$this->set('success',$success);
		$this->render('/elements/admin_delete_ajax');
	}
}
