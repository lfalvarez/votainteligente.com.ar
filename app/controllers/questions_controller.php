<?php
class QuestionsController extends AppController {

	var $name = 'Questions';
        var $layout = 'admin';
        var $helpers = array('Admin');
	function admin_index() {
		$this->paginate = array(
		    'order'=>'category_id'
		);
		$this->Question->recursive = 0;
		$questions = $this->paginate();
		$categoryIds = array();
		foreach ($questions as $question) {
		    if (!in_array($question['Question']['category_id'],$categoryIds)) {
			$categoryIds[] = $question['Question']['category_id'];
		    }
		}
		$categories = $this->Question->Category->find('list',array('conditions'=>array('id'=>$categoryIds)));

		$orderedQuestions = array();
		foreach ($categories as $idCategory=>$category) {
		    $orderedQuestions[$idCategory] = array(
			'name'=>$category,
			'questions'=>array()
		    );
		}
		foreach ($questions as $question) {
		    $orderedQuestions[$question['Question']['category_id']]['questions'][] = $question;
		}
		$this->set('orderedQuestions',$orderedQuestions);
		$this->set('questions', $questions);
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->Question->recursive = 0;
		$this->set('question', $this->Question->read(null, $id));
	}

	function admin_add($idCategory = null) {
		if (!empty($this->data)) {
			$this->Question->create();
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Question->Category->find('list');
		$this->set('selectedCategoryId',$idCategory);
		$this->set(compact('categories'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Question->read(null, $id);
		}
		$categories = $this->Question->Category->find('list');
		$this->set(compact('categories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Question->delete($id)) {
			$this->Session->setFlash(__('Question deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Question was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
