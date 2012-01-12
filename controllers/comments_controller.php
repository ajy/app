<?php
class CommentsController extends AppController {

	var $name = 'Comments';

	var $uses = array('User','Subject','Comment');

	function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->Comment->find('all'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid comment','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

	function report($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid comment','default', array(
					'class' => 'message error'
				));
			$this->redirect($this->referer());
		}
		if($id){
			$reportedComment = $this->Comment->findById($id);
			if(empty($reportedComment)){
				$this->Session->setFlash('Invalid comment','default', array(
					'class' => 'message error'
				));
				$this->redirect($this->referer());
			}
			$admins = $this->User->find('all',array(//find all admins
				'conditions' => array(
					'group_id' => 1,
				)
			));
			$reporter = $this->Session->read('Auth.User.username');
			$message = $reporter." submitted the following comment #".$reportedComment['Comment']['id']." for review";
			foreach($admins as $admin){
				$this->Comment->create();
				$this->Comment->set(array(
					'Comment.from' => $this->Session->read("Auth.User.id"),
					'Comment.to' => $admin['User']['id'],
					'Comment.subject_id' => '0',
					'Comment.comment' => $message
				));
			}
		}
		//$this->set('comment', $this->Comment->read(null, $id));
	}
	
	function add() {
        	$param=$this->params['pass'];
		if (!empty($this->data)) {
			$this->Comment->create();
                         $param=($this -> Session -> read("params"));
                         $this->data['Comment']['subject_id']=  $param['subject_id'];
                         $this->data['Comment']['teacher']=  $param['teacher'];
                         $this->data['Comment']['student']=  $param['student'];
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash('The comment has been saved','default', array(
					'class' => 'message success'
				));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The comment could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
		}else{
			$user=($this -> Session -> read("Auth.User"));
			$params['subject_id']=$param[0];
			$params['teacher']=$param[1];
			$params['student']=$user['id'];
			$this->Session->write('params',$params);
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid comment','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash('The comment has been saved','default', array(
					'class' => 'message success'
				));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The comment could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comment->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for comment','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Comment->delete($id)) {
			$this->Session->setFlash('Comment deleted','default', array(
					'class' => 'message success'
				));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Comment was not deleted','default', array(
					'class' => 'message error'
				));
		$this->redirect(array('action' => 'index'));
	}
        function comments() {

	}
}
