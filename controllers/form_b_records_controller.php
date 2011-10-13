<?php
class FormBRecordsController extends AppController {

	var $name = 'FormBRecords';

	function index() {
		$this->FormBRecord->recursive = 0;
		$this->set('formBRecords', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid form b record', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('formBRecord', $this->FormBRecord->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FormBRecord->create();
			if ($this->FormBRecord->save($this->data)) {
				$this->Session->setFlash(__('The form b record has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form b record could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid form b record', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FormBRecord->save($this->data)) {
				$this->Session->setFlash(__('The form b record has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form b record could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FormBRecord->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for form b record', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FormBRecord->delete($id)) {
			$this->Session->setFlash(__('Form b record deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Form b record was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
