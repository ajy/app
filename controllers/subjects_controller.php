<?php
class SubjectsController extends AppController {

	var $name = 'Subjects';

	function index() {
		$this->Subject->recursive = 0;
		$this->set('subjects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subject', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subject', $this->Subject->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subject->create();
			if ($this->Subject->save($this->data)) {
				$this->Session->setFlash(__('The subject has been saved', true));
				$this->redirect(array('controller'=> 'pages','action' => 'admin'));
			} else {
				$this->Session->setFlash(__('The subject could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subject', true));
			$this->redirect(array('controller'=> 'pages','action' => 'admin'));
		}
		if (!empty($this->data)) {
			if ($this->Subject->save($this->data)) {
				$this->Session->setFlash(__('The subject has been saved', true));
				$this->redirect(array('controller'=> 'pages','action' => 'admin'));
			} else {
				$this->Session->setFlash(__('The subject could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subject->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subject', true));
			$this->redirect(array('controller'=> 'pages','action' => 'admin'));
		}
		if ($this->Subject->delete($id)) {
			$this->Session->setFlash(__('Subject deleted', true));
			$this->redirect(array('controller'=> 'pages','action' => 'admin'));
		}
		$this->Session->setFlash(__('Subject was not deleted', true));
		$this->redirect(array('controller'=> 'pages','action' => 'admin'));
	}
	
	function subjects() {
             $user = $this->Session->read("Auth.User");
             $subjects = $this->Subject->find('all', array(
             	'conditions' => array('Subject.class' => $user ['class']),
             	'not' => $this->SubjectMembership->find('list', array(
             			'conditions'=> array(
             				'student_id' => $user[id],
             				'form_a_submitted' => '1',
             				'form_b_submitted' => '1'
             			),
             		))
             ));
             $this->set('subjects',$subjects);
        }
        
}
