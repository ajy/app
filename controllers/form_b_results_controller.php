<?php
class FormBResultsController extends AppController {

	var $name = 'FormBResults';
	
	function index() {
		$this->FormBResult->recursive = 0;
		$this->set('formBResults', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid form b result', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('formBResult', $this->FormBResult->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FormBResult->create();
			if ($this->FormBResult->save($this->data)) {
				$this->Session->setFlash(__('The form b result has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form b result could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid form b result', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FormBResult->save($this->data)) {
				$this->Session->setFlash(__('The form b result has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form b result could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FormBResult->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for form b result', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FormBResult->delete($id)) {
			$this->Session->setFlash(__('Form b result deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Form b result was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}			
}
