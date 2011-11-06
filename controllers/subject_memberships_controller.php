<?php
class SubjectMembershipsController extends AppController {

	var $name = 'SubjectMemberships';
	
	var $uses = array('SubjectMembership','User','Subject');

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
	
	function enroll() {
		$classes = $this->User->find('all', array(
			'recursive' => -1,
			'fields' => 'DISTINCT User.class',
			'conditions' => array(
				"not" => array("User.class" => null),
			)
		));
		if(!isset($classes)){
			$this->Session->setFlash(__('No classes were found',true));
		}
		foreach($classes as $class){
			$studentsInSameClass = $this->User->find('all', array(
				'recursive' => -1,
				'conditions' => array("User.class" => $class['User']['class'])
			));
			$subjectsOfThisClass = $this->Subject->find('all', array(
				'recursive' => -1,
				'conditions' => array("Subject.class" => $class['User']['class'])
			));
			$this->SubjectMembership->query('Truncate subject_memberships');
			$i=0;
			foreach($subjectsOfThisClass as $subject)
				foreach($studentsInSameClass as $student){
					$this->SubjectMembership->create();
					$this->SubjectMembership->set(array(
						'id' => $i++,
						'subject_id' => $subject['Subject']['id'],
						'student_id' => $student['User']['id']
					));
					$this->SubjectMembership->save();
				}
		}
	}
}
?>
