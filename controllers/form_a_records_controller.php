<?php
class FormARecordsController extends AppController {

	var $name = 'FormARecords';

	function index() {
		$this->FormARecord->recursive = 0;
		$this->set('formARecords', $this->paginate());		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid form a record', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('formARecord', $this->FormARecord->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FormARecord->create();
			if ($this->FormARecord->save($this->data)) {
				$this->Session->setFlash(__('The form a record has been saved', true));
				$this->redirect($this->referrer());
			} else {
				$this->Session->setFlash(__('The form a record could not be saved. Please, try again.', true));
			}
		}
	}
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid form a record', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FormARecord->save($this->data)) {
				$this->Session->setFlash(__('The form a record has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form a record could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FormARecord->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for form a record', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FormARecord->delete($id)) {
			$this->Session->setFlash(__('Form a record deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Form a record was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
