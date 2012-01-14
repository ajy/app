<?php

class SubjectsController extends AppController {

	var $name = 'Subjects';
        
	function index() {
		$this->Subject->recursive = 0;

                $teacher1 = null;
                
                $sql = "SELECT * FROM `subjects` WHERE 1";

		//$sql = "SELECT s1.id , s2.id , s1.name, s1.code,s1.class,s2.class, s1.teacher1, s1.teacher2, s2.teacher1, s2.teacher2 FROM subjects s1, subjects s2 WHERE s1.code = s2.code AND s1.id != s2.id GROUP BY s1.name LIMIT 0, 30";

                $subjects= $this->Subject->query($sql);
		/*$sql = "SELECT `id`,`name` FROM `users` WHERE `group_id`=2 LIMIT 0, 30 ";
                $teacher= $this->Subject->query($sql);*/
                 for($i=0;$i<count($subjects);$i++){
                 $t1=$subjects[$i]['subjects']["teacher1"];
                 $teacher1[$i]=$this->Subject->query("SELECT name from users where id= $t1");
                 /*$t1=$subjects[$i]['s2']["teacher1"];
                 $teacher1[$i]['b']=$this->Subject->query("SELECT name from users where id= $t1");*/
                 /*$t2=$subjects[$i]['subjects']["teacher2"];
                  $teacher2[$i]=($t2==NULL)?NULL:$this->Subject->query("SELECT name from users where id= $t2");removed cause there is no teacher2 anymore*/
                 /*$t2=$subjects[$i]['s2']["teacher2"];
                 $teacher2[$i]['b']=($t2==NULL)?NULL:$this->Subject->query("SELECT name from users where id= $t2");*/
               
                  }
                $this->set('subjects',$subjects);
                $this->set('teacher1',$teacher1);
                //$this->set('teacher2',$teacher2);removed cause there is no teacher2
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid subject','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subject', $this->Subject->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subject->create();
			if ($this->Subject->save($this->data)) {
				$this->Session->setFlash('The subject has been saved','default', array(
					'class' => 'message success'
				));
				$this->redirect(array('controller'=> 'pages','action' => 'success'));
			} else {
				$this->Session->setFlash('The subject could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid subject','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('controller'=> 'pages','action' => 'admin'));
		}
		if (!empty($this->data)) {
                       
			if ($this->Subject->save($this->data)) {
				$this->Session->setFlash('The subject has been saved','default', array(
					'class' => 'message warning'
				));
				$this->redirect(array('controller'=> 'pages','action' => 'success'));
			} else {
				$this->Session->setFlash('The subject could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subject->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for subject','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('controller'=> 'pages','action' => 'admin'));
		}
		if ($this->Subject->delete($id)) {
			$this->Session->setFlash('Subject deleted','default', array(
					'class' => 'message warning'
				));
			$this->redirect(array('controller'=> 'pages','action' => 'admin'));
		}
		$this->Session->setFlash('Subject was not deleted','default', array(
					'class' => 'message error'
				));
		$this->redirect(array('controller'=> 'pages','action' => 'admin'));
	}
         function subjects() {
             $user=$this->Session->read("Auth.User");
             Configure::load('feedback');//load the max_sub_num variable
             //$subjects=$this->Subject->query("SELECT * FROM subjects WHERE class = '".$user['class']."'  AND id NOT IN ( SELECT subject_id FROM subject_memberships WHERE student_id = ".$user['id']." AND form_a_submitted = ".Configure::read('max_sub_num').")");//To get the subject names correctly
             $teacher1 = null;//set to stop errors

             $teacher2 = null;
             $subjects=$this->Subject->query("SELECT * FROM subjects where id IN ( SELECT subject_id FROM subject_memberships WHERE student_id =".$user['id'].")");
             $submitted=$this->Subject->query("SELECT form_a_submitted FROM subject_memberships WHERE student_id =".$user['id']);
             

             //$teacher2 = null;no more teacher2

             //to get teacher names
             if(empty($subjects)){
             	$this->Session->setFlash("You don't need to submit any feedback right now", 'default',array('class'=>'message info'));
             }
//             if(empty($allSubjects)){
//             	$this->Session->setFlash("don't need to submit any feedback right now", 'default',array('class'=>'message info'));
//             }
             for($i=0;$i<count($subjects);$i++){
             $t1=$subjects[$i]["subjects"]["teacher1"];
             $teacher1[$i]=$this->Subject->query("SELECT name from users where id= $t1");
             /*$t2=$subjects[$i]["subjects"]["teacher2"];
             $teacher2[$i]=($t2==NULL)?NULL:$this->Subject->query("SELECT name from users where id= $t2");no more teacher2*/
             }
             $this->set('submitted',$submitted);
            // $this->set('allSubjects',$allSubjects);
             $this->set('subjects',$subjects);
             $this->set('teacher1',$teacher1);

            // $this->set('teacher2',$teacher2);

             //$this->set('teacher2',$teacher2);no more teacher2
                

        }
        
        function getClass(){
            return $this->Subject->query("SELECT class FROM subjects GROUP BY  class");
           
        }
         function getTeachers(){
            return $this->Subject->query("SELECT id,name FROM users WHERE group_id=2 ");
            
           
        }
        function getSubjects(){
          return  $this->Subject->find('list');
            
        }
        
}
 
