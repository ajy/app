<?php
class FormBResultsController extends AppController {

	var $name = 'FormBResults';
	
	function index() {
		$this->FormBResult->recursive = 0;
		$this->set('formBResults', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid form b result','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('formBResult', $this->FormBResult->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FormBResult->create();
			if ($this->FormBResult->save($this->data)) {
				$this->Session->setFlash('The form b result has been saved','default', array(
					'class' => 'message success'
				));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The form b result could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid form b result','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FormBResult->save($this->data)) {
				$this->Session->setFlash('The form b result has been saved','default', array(
					'class' => 'message success'
				));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The form b result could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FormBResult->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for form b result','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FormBResult->delete($id)) {
			$this->Session->setFlash('Form b result deleted','default', array(
					'class' => 'message success'
				));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Form b result was not deleted','default', array(
					'class' => 'message error'
				));
		$this->redirect(array('action' => 'index'));
	}
	
	function result() {
		$group_id=$this->Session->read("Auth.User.group_id");
		if($group_id==1) {
			$this->set('rows',$this->FormBRecord->find('all'));
			$this->render('all_result');
		} elseif($group_id==2) {
			$form_b_results=$this->FormBResult->find('all', array(
				'conditions' => array(
					'teacher' => $this->Session->read("Auth.User.id"),
				),
			));
			$this->set('form_b_results',$form_b_results);
		}
	}			
}
