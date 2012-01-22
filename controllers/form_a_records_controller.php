<?php
class FormARecordsController extends AppController {

	var $name = 'FormARecords';
        
        static  $param;
        
        var $uses = array('FormARecord', 'FormBResult');
        
	function result($sub_num=null) {
		$this->set('sub_num',$sub_num);
		$group_id=$this->Session->read("Auth.User.group_id");
		if($group_id==1){
			if($sub_num==0) $rows=$this->FormARecord->calcAllOverallFormAResults();
			else $rows=$this->FormARecord->calcAllFormAResults($sub_num);
			$this->set('rows',$rows);
			$this->render('all_result');
		} elseif($group_id==2) {
			if($sub_num==0) $rows=$this->FormARecord->calcOverallFormAResults($this->Session->read("Auth.User.id"));
			else $rows=$this->FormARecord->calcFormAResults($this->Session->read("Auth.User.id"),$sub_num);
			$this->set('form_a_results',$rows);
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
			$this->data['FormARecord']['submission_number']= $param['sub_num'];
			if ($this->FormARecord->save($this->data)) {
				$this->Session->setFlash(__('The form a record has been saved', true));
				$this->redirect(array('controller' => 'Subjects', 'action' => 'subjects'));
			} else {
				$this->Session->setFlash(__('The form a record could not be saved. Please, try again.', true));
			}
		}else{
                	$params['subject_id']=$param[0];
                	$params['teacher']=$param[1];
                	$params['student']=$this->Session->read("Auth.User.id");;
                	$temp=$this->FormARecord->find('first',array(
                		'fields' => 'ifnull(max(submission_number),0) as sub_num',//set sub_num to 0 if it is null(not present)
                		'conditions' => array(
                			'subject_id' => $params['subject_id'],
                			'teacher' => $params['teacher'],
                			'student' => $params['student']
                		)
                	));
                	$params['sub_num']=$temp[0]['sub_num']+1;//set sub_num to next submission_number value
                	$this->Session->write('params',$params);
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
	
	function deleteAll(){
		$this->SubjectMembership->query('Truncate form_a_records');//removes all data and resets id to start from 1
		$this->redirect($this->referer());
	}
}
