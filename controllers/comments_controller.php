<?php
class CommentsController extends AppController {

	var $name = 'Comments';

	function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
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

	function add() {
                 $param=$this->params['pass'];
                 
		if (!empty($this->data)) {
			$this->Comment->create();
                         $param=($this -> Session -> read("params"));
                         $this->data['Comment']['subject_id']=  $param['subject'];
                         $this->data['Comment']['to']=  $param['to'];
                         $this->data['Comment']['from']=  $param['from'];
                         if(count($param)>2){
                              $this->data['Comment']['parent_id']=  $param['parent_id'];
                         }
                         $this->data['Comment']['comment']= base64_encode($this->data['Comment']['comment']);
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
                
                else{
                    $user=($this -> Session -> read("Auth.User"));
         $params['subject']=$param[0];
         $params['to']=$param[1];
         $params['from']=$user['id'];
          if(count($param)>2){
         $params['parent_id']=$param[2];
                         }
         $this -> Session ->write('params',$params);}
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
            $this->set('comments', $this->Comment->comments($this -> Session -> read("Auth.User.id")));
	}
}
