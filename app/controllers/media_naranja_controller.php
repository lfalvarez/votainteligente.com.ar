<?php
class MediaNaranjaController extends AppController {

	var $name = 'MediaNaranja';
	var $uses = array();
	var $components = array('Cookie');
	function index(){
		$this->connectToFacebookOrLogin();
		$this->layout = 'voto';
		$this->loadModel('Category');
		$categories = $this->Category->findAllForMediaNaranja();
		$this->set('height',Configure::read('Facebook.MEDIANARANJA.form.height'));
		$this->set('categories', $categories);
                $this->render('index');
	}
	function vota(){
                $facebookUserId = $this->connectToFacebookOrLogin();
                $hasBeenAsweredCorrectly = $this->_answeredCorrectly($this->data);
                if(!$hasBeenAsweredCorrectly){
                    $this->redirect('/media_naranja');
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
                usort($afinity,array("MediaNaranjaController","_orderCandidates"));
                $winner = $afinity[0];
                unset($afinity[0]);
                $this->set('winner',$winner);
                $this->set('others',$afinity);
                $idPerson = $this->Person->saveResult($winner,$this->data,array('idfacebook'=>$facebookUserId));
                $this->set('person_id',$idPerson);
		$this->set('height',Configure::read('Facebook.MEDIANARANJA.result.height'));
		$this->_prepareFacebookWallPublication($winner);
		$this->render('resultado');

	}
	function _answeredCorrectly($data){
	    if (empty($data)) {
		return false;
	    }
	    $this->loadModel('Question');
	    $amountOfQuestionsThatShouldHaveBeenAnswered = $this->Question->find('count',array(
		'conditions' => array(
		    'public'=>1,
		    'included_in_media_naranja'=>1
		    )
		));
	    $amountOfQuestionsActuallyAnswered = 0;
	    foreach ($data['Category'] as $category){
		foreach ($category['Question'] as $question) {
		    if (isset($question['Answer']) && !is_null($question['Answer'])) {
			$amountOfQuestionsActuallyAnswered ++;
		    }
		}
	    }
	    if ($amountOfQuestionsActuallyAnswered == $amountOfQuestionsThatShouldHaveBeenAnswered) {
		return true;
	    }
	    return false;

	}
        function _orderCandidates($candidateA,$candidateB){
            return $candidateB['Candidate']['total'] - $candidateA['Candidate']['total'];
        }
        function confirm(){
	    $this->layout = 'script';
            $this->loadModel('Person');
            $this->Person->save($this->data);
        }
	function _prepareFacebookWallPublication($winner){
	    $title = Configure::read('Facebook.MEDIANARANJA.wall.name');
	    $title = sprintf($title, $winner['Candidate']['name']);
	    $facebookWallPublication = array(
		'title'=>$title,
		'caption'=>Configure::read('Facebook.MEDIANARANJA.wall.caption'),
		'image'=>Router::url($winner['Candidate']['imagepath'],true),
		'image_link'=>Router::url('/profiles/view/'.$winner['Candidate']['slug'],true),//it should link to the candidates profile
		'text'=>Configure::read('Facebook.MEDIANARANJA.wall.action_link.text'),
		'href'=>Configure::read('Facebook.MEDIANARANJA.wall.action_link.href'),
	    );
	    $this->set('facebookWallPublication',$facebookWallPublication);
	}

}
