<?php
class SubjectMembershipsController extends AppController {

	var $name = 'SubjectMemberships';
	
	var $uses = array('SubjectMembership','User','Subject');

	function index() {
		$this->SubjectMembership->recursive = 0;
		$this->set('subjectMemberships', $this->SubjectMembership->find('all'));
		Configure::load('feedback');//load the max_sub_num variable
		$total=$this->SubjectMembership->query("select count(*) as total from subject_memberships");
		$form_a_submitted=$this->SubjectMembership->query("select count(*) as submitted from subject_memberships where form_a_submitted=".Configure::read('max_sub_num'));
		$this->set('total',$total[0][0]['total']);
		$this->set('form_a_submitted',$form_a_submitted[0][0]['submitted']);
		$this->set('max_sub_num',Configure::read('max_sub_num'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid subject membership','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subjectMembership', $this->SubjectMembership->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubjectMembership->create();
			if ($this->SubjectMembership->save($this->data)) {
				$this->Session->setFlash('The subject membership has been saved','default', array(
					'class' => 'message success'
				));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The subject membership could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
		}
		$subjects = $this->SubjectMembership->Subject->find('list');
		$students = $this->SubjectMembership->Student->find('list');
		$this->set(compact('subjects', 'students'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid subject membership','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubjectMembership->save($this->data)) {
				$this->Session->setFlash('The subject membership has been saved','default', array(
					'class' => 'message success'
				));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The subject membership could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
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
			$this->Session->setFlash('Invalid id for subject membership','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubjectMembership->delete($id)) {
			$this->Session->setFlash('Subject membership deleted','default', array(
					'class' => 'message success'
				));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Subject membership was not deleted','default', array(
					'class' => 'message error'
				));
		$this->redirect(array('action' => 'index'));
	}
	
	function deleteAll(){
		$this->SubjectMembership->query('Truncate subject_memberships');//removes all data and resets id to start from 1
		$this->redirect($this->referer());
	}
	
	function enroll() {
		if(!empty($this->data)&&($this->data['SubjectMembership']['ans']=='Y')){
		$classes = $this->User->find('all', array(
			'recursive' => -1,
			'fields' => 'DISTINCT User.class',
			'conditions' => array(
				"not" => array("User.class" => ''),
			)
		));
		
		if(!isset($classes)){
			$this->Session->setFlash('No classes were found','default', array(
					'class' => 'message info'
				));
		}
		$this->set('classes',$classes);
		$this->SubjectMembership->query('Truncate subject_memberships');
		$i=0;
		foreach($classes as $class){
			$studentsInSameClass = $this->User->find('all', array(
				'recursive' => -1,
				'conditions' => array("User.class" => $class['User']['class'])
			));
			$subjectsOfThisClass = $this->Subject->find('all', array(
				'recursive' => -1,
				'conditions' => array("Subject.class" => $class['User']['class'])
			));
			foreach($subjectsOfThisClass as $subject)
				foreach($studentsInSameClass as $student){
					$this->SubjectMembership->create();
					$this->SubjectMembership->set(array(
						'id' => ++$i,
						'subject_id' => $subject['Subject']['id'],
						'student_id' => $student['User']['id']
					));
					$this->SubjectMembership->save();
				}
		}
		$count=$this->SubjectMembership->find('count');
		if($count != 0){
			$this->Session->setFlash($count.' enrollments were created','default', array(
				'class' => 'message success'
			));
			//$this->redirect(array('controller'=>'subject_memberships', 'action'=>'index'));
		}else
			$this->Session->setFlash('No  enrollments could be created','default', array(
				'class' => 'message error'
			));
		}		
	}
}
?>
