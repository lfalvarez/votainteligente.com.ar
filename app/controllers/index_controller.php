<?php
class IndexController extends AppController {

	var $name = 'Index';
	var $uses = array();
	var $components = array('Cookie');
	function index(){
		$this->connectToFacebookOrLogin();
       
		$this->layout = 'voto';
		$this->loadModel('Category');
		$categories = $this->Category->findAllForIndex();
		$this->set('categories', $categories);
                $this->render('index');
	}
	function vota(){
                $facebookUserId = $this->connectToFacebookOrLogin();
                $hasBeenAswered = !empty($this->data) && $this->referer()=='/';
                if(!$hasBeenAswered){
                    $this->redirect('/');
                    return;
                }
                $categories = $this->data;
                
                
                $this->helpers[]= 'Number';
                $this->helpers[]= 'Percentage';
		$this->layout = 'resultado';
                
                $this->loadModel('Candidate');
                $candidates = $this->Candidate->find('all');
                $afinity = array();
                foreach($candidates as $candidate){
                    $idCandidate = $candidate['Candidate']['id'];
                    $afinityWithThisCandidate = $this->Candidate->compatibility($idCandidate,$categories);
                    $candidate['afinity'] = $afinityWithThisCandidate;
                    $candidate['Candidate']['total'] = $this->Candidate->calculateTotalAfinity($afinityWithThisCandidate);
                    $afinity[] =$candidate;
                }
                $this->loadModel('Person');
                usort($afinity,array("IndexController","_orderCandidates"));
                $winner = $afinity[0];
                unset($afinity[0]);
                $this->set('winner',$winner);
                $this->set('others',$afinity);
                $idPerson = $this->Person->saveResult($winner,$this->data,array('idfacebook'=>$facebookUserId));
                $this->set('person_id',$idPerson);
		$this->render('resultado');
		
	}
        function _orderCandidates($candidateA,$candidateB){
            return $candidateB['Candidate']['total'] - $candidateA['Candidate']['total'];
        }
        function confirm(){
            $this->loadModel('Person');
            $this->Person->save($this->data);
        }

}
