<?php
class CompareController extends AppController {

	var $name = 'Compare';
        var $uses = array('Candidate','Category');
        function index(){
            $candidates = $this->Candidate->find('all');
            $categories = $this->Category->findAllForIndex();
            $this->set('categories',$categories);
            $this->set('candidates',$candidates);
        }
        function compare(){
            $idFirstCandidate  = $this->data['firstCandidate'];
            $idSecondCandidate = $this->data['secondCandidate'];
            $idCategory        = $this->data['category'];
            
            $questions         = $this->Category->Question->findAllForCompare($idCategory);            
            $category          = $this->Category->find('first',array('fields'=>array('id'),'conditions'=>array('id'=>$idCategory)));
            
            $idsQuestion       = array();
            foreach ($questions as $question) {
                $idsQuestion[] = $question['Question']['id'];
            }
            
            $weightsOfBothCandidates    = array();
            $this->Category->Question->Weight->getWeightsForQuestionsForACandidate($weightsOfBothCandidates,$idsQuestion,$idFirstCandidate);
            $this->Category->Question->Weight->getWeightsForQuestionsForACandidate($weightsOfBothCandidates,$idsQuestion,$idSecondCandidate);
            
            $this->set('idFirstCandidate',$idFirstCandidate);
            $this->set('idSecondCandidate',$idSecondCandidate);
            $this->set('weights',$weightsOfBothCandidates);
            $this->set('category',$category);
            $this->set('questions',$questions);
        }
}
