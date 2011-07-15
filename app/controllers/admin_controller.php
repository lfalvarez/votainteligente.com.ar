<?php
class AdminController extends AppController {

	var $name = 'Admin';
        var $uses = array();
        var $layout = 'admin';
        function admin_index(){
            $this->render('index');
        }
        
        

}
