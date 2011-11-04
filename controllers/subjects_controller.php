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
             $user=($this -> Session -> read("Auth.User"));
             $q='"';
             $class= $q.$user ['class'].$q;
             $id=$user['id'];
             $subjects=$this->Subject->query("SELECT * FROM subjects WHERE class = $class  AND id NOT IN ( SELECT subject_id FROM subject_memberships WHERE student_id = $id AND form_a_submitted = 1 AND form_a_submitted = 1 );");
             
             //To get the subject names
             
                for($i=0;$i<count($subjects);$i++){
                 $t1=$subjects[$i]["subjects"]["teacher1"];
                 $teacher1[$i]=$this->Subject->query("SELECT name from users where id= $t1");
                 $t2=$subjects[$i]["subjects"]["teacher2"];
                 $teacher2[$i]=($t2==NULL)?NULL:$this->Subject->query("SELECT name from users where id= $t2");
                 
           
             }
              $this->set('subjects',$subjects);
              $this->set('teacher1',$teacher1);
              $this->set('teacher2',$teacher2);
                
        }
        
        
        
}
