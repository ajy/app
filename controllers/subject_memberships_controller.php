<?php
class SubjectMembershipsController extends AppController {

	var $name = 'SubjectMemberships';

	function index() {
		$this->SubjectMembership->recursive = 0;
		$this->set('subjectMemberships', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subject membership', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subjectMembership', $this->SubjectMembership->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubjectMembership->create();
			if ($this->SubjectMembership->save($this->data)) {
				$this->Session->setFlash(__('The subject membership has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subject membership could not be saved. Please, try again.', true));
			}
		}
		$subjects = $this->SubjectMembership->Subject->find('list');
		$students = $this->SubjectMembership->Student->find('list');
		$this->set(compact('subjects', 'students'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subject membership', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubjectMembership->save($this->data)) {
				$this->Session->setFlash(__('The subject membership has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subject membership could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubjectMembership->read(null, $id);
		}
		$subjects = $this->SubjectMembership->Subject->find('list');
		$students = $this->SubjectMembership->Student->find('list');
		$this->set(compact('subjects', 'students'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subject membership', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubjectMembership->delete($id)) {
			$this->Session->setFlash(__('Subject membership deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subject membership was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>