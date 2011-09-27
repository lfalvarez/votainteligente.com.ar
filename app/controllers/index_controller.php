<?php
class IndexController extends AppController {
    var $name = 'Index';
    var $uses = array('Candidate');
    var $layout = 'default';

    function index(){
	$candidates = $this->Candidate->find('all');
	$this->set('candidates',$candidates);
    }
}
?>
