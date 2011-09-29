<?php
class ProfilesController extends AppController {

	var $name = 'Profiles';
	var $uses = array('Candidate');
	var $layout = 'profile_layout';
	function beforeFilter() {
	    $this->_getAllCandidates();
	}
	function index(){
		$this->layout = 'default';
	}
	function view($slug){
	    $candidate = $this->Candidate->findBySlug($slug);
	    $this->set("title_for_layout",'Perfil de '.$candidate['Candidate']['name']);
	    $this->set("facebookShareImage",Router::url($candidate['Candidate']['imagepath'],true));
	    if(empty($candidate)){
		$this->render('error');
	    }
	    $candidateId = $candidate['Candidate']['id'];
	    $candidateProfile = $this->Candidate->getProfile($candidateId);
	    $this->set('profile',$candidateProfile);
	    $this->_getCandidatesAnswer($candidateId);
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