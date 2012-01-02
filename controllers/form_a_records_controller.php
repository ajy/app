<?php
class FormARecordsController extends AppController {

	var $name = 'FormARecords';
        
        static  $param;
        
        var $uses = array('FormARecord', 'FormBResult');
        
	function result() {
		$group_id=$this->Session->read("Auth.User.group_id");
		if($group_id==1) {
			$this->set('rows',$this->FormARecord->calcAllFormAResults());
			$this->render('all_result');
		} elseif($group_id==2) {
			$this->set('form_a_results',$this->FormARecord->calcFormAResults($this->Session->read("Auth.User.id")));
		}
	}
	
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
		$param=$this->params['pass'];
		if (!empty($this->data)) {
			$this->FormARecord->create();
                        $param=($this->Session->read("params"));
                        $this->data['FormARecord']['subject_id']=  $param['subject_id'];
                        $this->data['FormARecord']['teacher']=  $param['teacher'];
                        $this->data['FormARecord']['student']=  $param['student'];
			if ($this->FormARecord->save($this->data)) {
				$this->Session->setFlash(__('The form a record has been saved', true));
				$this->redirect(array('controller' => 'Subjects', 'action' => 'subjects'));
			} else {
				$this->Session->setFlash(__('The form a record could not be saved. Please, try again.', true));
			}
		}else{
                	$user=($this->Session->read("Auth.User"));
                	$params['subject_id']=$param[0];
                	$params['teacher']=$param[1];
                	$params['student']=$user['id'];
                	$this -> Session ->write('params',$params);
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
