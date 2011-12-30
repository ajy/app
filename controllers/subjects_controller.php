<?php
class SubjectsController extends AppController {

	var $name = 'Subjects';
        
	function index() {
		$this->Subject->recursive = 0;
                $sql = "SELECT s1.`id` , s2.`id` , s1.`name` ,s1.`code`,s1.`class`,s2.`class` , s1.`teacher1` , s1.`teacher2` , s2.`teacher1` , s2.`teacher2` \n"
    . "FROM `subjects` s1, `subjects` s2\n"
    . "WHERE s1.`code` = s2.`code` \n"
    . "AND s1.id != s2.id\n"
    . "GROUP BY s1.name\n"
    . " LIMIT 0, 30 ";
                $subjects= $this->Subject->query($sql);
                  for($i=0;$i<count($subjects);$i++){
                 $t1=$subjects[$i]['s1']["teacher1"];
                 $teacher1[$i]['a']=$this->Subject->query("SELECT name from users where id= $t1");
                 $t1=$subjects[$i]['s2']["teacher1"];
                  $teacher1[$i]['b']=$this->Subject->query("SELECT name from users where id= $t1");
                  $t2=$subjects[$i]['s1']["teacher2"];
                 $teacher2[$i]['a']=($t2==NULL)?NULL:$this->Subject->query("SELECT name from users where id= $t2");
                  $t2=$subjects[$i]['s2']["teacher2"];
                 $teacher2[$i]['b']=($t2==NULL)?NULL:$this->Subject->query("SELECT name from users where id= $t2");
                 
                  }
                $this->set('subjects',$subjects);
                 $this->set('teacher1',$teacher1);
              $this->set('teacher2',$teacher2);
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
             $user=($this->Session->read("Auth.User"));
             $q='"';
             $class= $q.$user ['class'].$q;
             $id=$user['id'];
             $subjects=$this->Subject->query("SELECT * FROM subjects WHERE class = $class  AND id NOT IN ( SELECT subject_id FROM subject_memberships WHERE student_id = $id AND form_a_submitted = 1  );");
             $teacher1 = null;
             $teacher2 = null;
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
        
        function getClass(){
            return $this->Subject->query("SELECT `class` FROM `subjects` GROUP BY  `class`");
           
        }
         function getTeachers(){
            return $this->Subject->query("SELECT `id`,`name` FROM `users` WHERE `group_id`=2 ");
           
        }
        
}
