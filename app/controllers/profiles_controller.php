<?php
class ProfilesController extends AppController {

	var $name = 'Profiles';
	var $uses = array('Candidate');
	
	function index(){
	    $this->_getAllCandidates();
	}
	function view($slug){
	    $candidate = $this->Candidate->findBySlug($slug);
	    if(empty($candidate)){
		$this->render('error');
	    }
	    $candidateId = $candidate['Candidate']['id'];
	    $candidateProfile = $this->Candidate->getProfile($candidateId);
	    $this->set('profile',$candidateProfile);
	    $this->_getCandidatesAnswer($candidateId);
	    $this->_getAllCandidates();
	}
	function _getAllCandidates(){
	    $candidates = $this->Candidate->find('all');
	    $this->set('candidates',$candidates);
	}
	function _getCandidatesAnswer($candidateId){
	    $categories = $this->Candidate->Weight->Question->Category->getAllCategoriesAndQuestionsForCandidate($candidateId);
	    $this->set('categories',$categories);
	}
}
