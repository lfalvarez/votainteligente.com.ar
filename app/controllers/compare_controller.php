<?php
class CompareController extends AppController {

	var $name = 'Compare';
        var $uses = array('Candidate','Category');
	var $layout = 'compare_layout';
        function index($data = null){
	    $candidates = $this->Candidate->find('all');
            $categories = $this->Category->findAllForIndex();
            $this->set('categories',$categories);
	    if (isset($categories[0]['Category']['id'])) {
		$this->set('categoryId',$categories[0]['Category']['id']);
	    }
            $this->set('candidates',$candidates);
	    if (!is_null($data)) {
		$elements = $this->_decodeData($data);
		if (!is_null($elements)){
		    $firstCandidate = $elements['firstCandidate']['Candidate'];
		    $secondCandidate = $elements['secondCandidate']['Candidate'];
		    $this->set('firstCandidate',$firstCandidate);
		    $this->set('secondCandidate',$secondCandidate);
		    $this->set('categoryId',$elements['categoryId']);
		    $this->set('redirectAgain',false);
		    $this->set("title_for_layout",'Comparar candidatos');
		    $this->_compare($firstCandidate['id'],$secondCandidate['id'],$elements['categoryId']);
		}
	    }
	    $this->set("title_for_layout",'Comparar candidatos');
        }
        function _compare($firstCandidateId,$secondCandidateId,$categoryId){
            $questions         = $this->Category->Question->findAllForCompare($categoryId);
            $category          = $this->Category->find('first',array('fields'=>array('id'),'conditions'=>array('id'=>$categoryId)));
            $idsQuestion       = array();
            foreach ($questions as $question) {
                $idsQuestion[] = $question['Question']['id'];
            }
            $weightsOfBothCandidates    = array();
            $this->Category->Question->Weight->getWeightsForQuestionsForACandidate($weightsOfBothCandidates,$idsQuestion,$firstCandidateId);
            $this->Category->Question->Weight->getWeightsForQuestionsForACandidate($weightsOfBothCandidates,$idsQuestion,$secondCandidateId);
            $this->set('idFirstCandidate',$firstCandidateId);
            $this->set('idSecondCandidate',$secondCandidateId);
            $this->set('weights',$weightsOfBothCandidates);
            $this->set('category',$category);
            $this->set('questions',$questions);
	    $this->render('compare');
        }
	function _comparisonDataChecker($data){
	    $dataRight = preg_match('/[a-z\-]+_vs_[a-z\-]+_en_[a-z\-]+/', $data,$matches);
	    if (!$dataRight || count($matches)>1) {
		return false;
	    }
	    return true;
	}
	function _decodeData($data){
	    if(!$this->_comparisonDataChecker($data)){
		return Null;
	    }
	    $elements = explode('_en_', $data,2);
	    $candidates = $elements[0];
	    $categorySlug = $elements[1];
	    $candidates = explode('_vs_',$candidates,2);
	    $firstCandidate = $this->Candidate->findBySlug($candidates[0]);
	    $secondCandidate = $this->Candidate->findBySlug($candidates[1]);
	    $category = $this->Category->findBySlug($categorySlug);
	    if ( empty($firstCandidate) || empty($secondCandidate) || empty($category)) {
		return null;
	    }
	    return array(
		'firstCandidate'=>$firstCandidate,
		'secondCandidate'=>$secondCandidate,
		'categoryId'=>$category['Category']['id']
	    );
	}
	function _encodeData($firstCandidateId,$secondCandidateId,$categoryId){
	    $firstCandidate = $this->Candidate->findById($firstCandidateId);
	    $secondCandidate = $this->Candidate->findById($secondCandidateId);
	    $category = $this->Category->findById($categoryId);
	    $data = $firstCandidate['Candidate']['slug'].'_vs_'.$secondCandidate['Candidate']['slug'].'_en_'.$category['Category']['slug'];
	    $url = Router::url('/compare/'.$data);
	    $this->set('url',$url);
	}
	function getComparisonAddress(){
	    $this->layout = 'script';
	    $firstCandidateId  = $this->data['firstCandidate'];
            $secondCandidateId = $this->data['secondCandidate'];
            $categoryId        = $this->data['category'];
	    $this->_encodeData($firstCandidateId,$secondCandidateId,$categoryId);
	}
}
