<?php
class CategoriesController extends AppController {

	var $name = 'Categories';
        var $layout = 'admin';
	var $helpers = array('Admin');
	var $components = array('RequestHandler');

	function admin_index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('category', $this->Category->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('The category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_add_ajax(){
	    $this->helpers[] = 'Javascript';
	    $this->helpers[] = 'Ajax';
	    if (!empty($this->data)) {
		$this->Category->create();
		if ($this->Category->save($this->data)) {
			$this->Session->setFlash(__('The category has been saved', true));
			$categories = $this->Category->find('list');
			$this->set('idSelectedCategory',$this->Category->id);
			$this->set('categories',$categories);
			$this->render('ajax_success');
		} else {
			$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
		}
	    }
	    if (!$this->params['isAjax']) {
		$this->redirect(array('action' => 'index'));
	    }
	    $maxOrder = $this->Category->field('MAX(Category.sort) as sort');
	    $this->set('maxOrder',$maxOrder+1);
	    $this->layout = 'script';
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('The category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
			$this->loadModel('Question');
			$this->set('questions', $this->paginate('Question',array('category_id'=>$id)));
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for category', true));
			$this->redirect(array('action'=>'index','controller'=>'questions'));
		}
		if ($this->Category->delete($id)) {
			$this->Session->setFlash(__('Category deleted', true));
			$this->redirect(array('action'=>'index','controller'=>'questions'));
		}
		$this->Session->setFlash(__('Category was not deleted', true));
		$this->redirect(array('action' => 'index','controller'=>'questions'));
	}
	function admin_editName($id){
	    $this->layout = 'script';
	    $newName = $this->data['name'];
	    $this->Category->read(null,$id);
	    $this->Category->set('name',$newName);
	    $this->Category->save();
	    $category = $this->Category->read('name',$id);
	    $this->set('newName',$category['Category']['name']);

	}
	function admin_moveUp($id){
	    $this->Category->moveUp($id);
	    $this->redirect(array('controller'=>'questions','action'=>'index','prefix'=>'admin'));
	}
	function admin_moveDown($id){
	    $this->Category->moveDown($id);
	    $this->redirect(array('controller'=>'questions','action'=>'index','prefix'=>'admin'));
	}
}
