<?php
App::import('Vendor', 'parseCSV', array('file' => 'parsecsv.lib.php'));
class UsersController extends AppController {

	var $name = 'Users';
	
	var $components = array('Email');
	
	var $uses = array('User','Subject','SubjectMembership');
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('resetPassword');//doesn't need login for access
                
	}

	function login() {
	if ($this->Session->read('Auth.User')) {
			$group_id=$this->Session->read("Auth.User.group_id");
                        if($group_id==1) {
                            $this->redirect($this->Auth->redirect(array('controller'=> 'pages','action'=>'admin')));
                        }
                        
                        if($group_id==2)
                        {
                         	$this->redirect($this->Auth->redirect(array('controller'=> 'pages','action' => 'teacher')));
			            }
                        if($group_id==3)
                        {

                           	$this->redirect($this->Auth->redirect(array('controller'=> 'pages','action' => 'student')));                           	
                        }
		}
	}

	function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	function feedbackEmail() {
		$message = null;
		$subject = null;
		if(!empty($this->data['User']['feedback'])) {
			$message = $this->data['User']['feedback'];
			$subject = $this->data['User']['subject'];
			$this->Email->from = "robot@feeback.com";
			$this->Email->to= "test@localhost.com";
			$this->Email->subject = 'Feedback from '.$this->Session->read('Auth.User.name').', '.$this->Session->read('Auth.User.username').' on '.$subject;
			$this->Email->delivery = 'debug';
			if($this->Email->send($this->data['User']['feedback']))
				$this->Session->setFlash('your feedback has been sent','default',array(
					'class' => 'message success'
				));
			else
				$this->Session->setFlash('your feedback could not be sent right now,try again later','default', array(
					'class' => 'message error'
				));
			$this->redirect($this->referer());
		}
		$this->set('message', $message);
		$this->set('subject', $subject);
	}
	
	function changePassword($id=null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid user','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data,true,array('id', 'password', 'confirm_password'))) {
				$this->Session->setFlash('The password has been saved','default', array(
					'class' => 'message success'
				));
			} else {
				$this->Session->setFlash('The password could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
			//$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data['User']['id']=$id;//set user id of the user whose password is to be changed to the value passed
			$this->data['User']['password'] = null;
		}
		$this->set('id');
	}
	
	function resetPassword($token=null) {
		if(!empty($this->data['User']['email'])){
			// user submitted initial form 
			$user = $this->User->findByEmail($this->data['User']['email']); 
			if (empty($user)){ 
			       $this->Session->setFlash('Unregistered email','default', array(
					'class' => 'message error'
				)); 
			       return;  
			}else{ 
				$emailtoken = md5($user['User']['password']+$user['User']['id']); 
				$this->set('username', $user['User']['username']);
				$this->set('emailtoken', $emailtoken);
				$this->Email->from = 'fbfbot <fbf.com>';
				$this->Email->to = $user['User']['email'];
				$this->Email->delivery = 'debug';
				$this->Email->subject = 'Password reset for your fbf account';
				$this->Email->sendAs = "text";
				$this->Email->template = "password_reset_message";
				$this->Email->send(); 
				$this->Session->setFlash('A link to set a new password has been sent to your email account.','default', array(
					'class' => 'message success'
				)); 
				$this->redirect('resetPassword');
			} 
		}
		if(!empty($token)){
			//User has sent token 
			$user = $this->User->find('first',array(
				'conditions'=> array(
					"MD5(User.password+User.id)" => $token
				),
				'recursive'=>-1,
			)); 
			if (empty($user)){ 
				$this->Session->setFlash('Invalid token.','default', array(
					'class' => 'message error'
				)); 
				return; 
			}
			//User has filled new password form
			if (!empty($this->data['User']['password'])) { 
				$this->data['User']['id']=$user['User']['id'];//not sent out to the form, so it can't be tampered with
				if($this->User->save($this->data,true,array('id','password','confirm_password'))){//only password for the user must be set
					$this->Session->setFlash('New password set for '.$user['User']['username'],'default', array(
						'class' => 'message success'
					));
					$this->redirect('login');
				}else{
					$this->Session->setFlash('New password could not be set for '.$user['User']['username'],'default', array(
						'class' => 'message error'
					));
					$this->redirect('login');
				}							
			}
			$this->data['User']['id']=$user['User']['id'];//loads the id of the correct user so the form can use it
			$this->data['User']['password']=null;//since the new password needs to be given, no need to show the hash for the old one
			$this->set('token', $token); 
			$this->render('setNewPassword'); 
		}
	} 
	
	
	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->User->find('all'));//return every user
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid user','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			if($this->data['User']['group_id']!=3)$this->data['User']['class']='';//not a student, so no class
			if ($this->User->save($this->data,true,array('username', 'name', 'email','group_id','class'))) {//no id cause its a new user
				$this->Session->setFlash('The user has been saved','default', array(
					'class' => 'message warning'
				));				
				$this->redirect((array('controller'=> 'pages','action'=>'success')));
                     
			} else {
				$this->Session->setFlash(' The user could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));		
               
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid user','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action' => 'index'));
		}              
		if (!empty($this->data)) {
			$this->data['User']['id'] = $id;//makes sure nobody can tamper with it			
			if($this->Session->read('Auth.User.group_id')==1){
				$fieldsThatCanBeEdited=array('id', 'username', 'name', 'email','group_id');
			}else{
				$fieldsThatCanBeEdited=array('id', 'email');
			}
			if ($this->User->save($this->data,true,$fieldsThatCanBeEdited)) {
					$this->Session->setFlash('The user has been saved','default', array(
					'class' => 'message success'
				));

			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.','default', array(
					'class' => 'message error'
				));
                                $this->redirect($this->referer());
			}
			  $this->redirect($this->Auth->redirect(array('controller'=> 'pages','action'=>'success')));
                     
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);			
		}
		$groups = $this->User->Group->find('list');
           	$this->set(compact('groups'));                                
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for user','default', array(
					'class' => 'message error'
				));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash('User deleted','default', array(
					'class' => 'message success'
				));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('User was not deleted','default', array(
					'class' => 'message error'
				));
		$this->redirect(array('action' => 'index'));
	}
	
	function promote(){
		if(!empty($this->data['User']['From'])&&!empty($this->data['User']['To'])){
			$from = $this->data['User']['From'];
			$to = $this->data['User']['To'];
			$this->User->query("update users set class=\'".$to."\' where class=\'".$from."\'");//the slashes and quotes look silly but they make it work and more secure'
			$test=$this->User->find('all',array(
				'conditions'=>array(
					'class' => $from
				)
			));
			if(empty($test))
				$this->Session->setFlash("All students of class ".$from." have been promoted to ".$to,'default', array(
					'class' => 'message success'
				));
			else
				$this->Session->setFlash("Students could not be promoted",'default', array(
					'class' => 'message error'
				));
		}
	}
	function import() {
		if(!empty($this->data['User']['File'])){
			//creating a reader object
			$csv = new parseCSV($this->data['User']['File']['tmp_name']);
			$NumSavedRows = 0;
			$error = false;
			$info = $csv->data;
			echo debug($info);
			return;
			foreach($info as $studentInfo){
				if($this->User->save(array('User' => $studentInfo),true,array('username', 'name', 'email','class'))){// no id cause its a new user
					$NumSavedRows++;
				} else {
					$this->Session->setFlash('Error,  Could only  import '.$NumSavedRows.' records. Please try again.','default', array(
					'class' => 'message error'
				));
					$error = true;
				}
			}
			if(!$error) {
				$this->Session->setFlash('Success. Imported '. $NumSavedRows .' records.','default', array(
					'class' => 'message warning'
				));
                                 $this->redirect($this->Auth->redirect(array('controller'=> 'pages','action'=>'success')));
			}
		}
	}
	
        function redir(){
            $group_id=$this->Session->read("Auth.User.group_id");
              if($group_id==1) {
                            $this->redirect($this->Auth->redirect(array('controller'=> 'pages','action'=>'admin')));
                        }
                        
                        if($group_id==2)
                        {
                         	$this->redirect($this->Auth->redirect(array('controller'=> 'pages','action' => 'teacher')));
			            }
                        if($group_id==3)
                        {

                           	$this->redirect($this->Auth->redirect(array('controller'=> 'pages','action' => 'student')));                           	
                        }
        }

        /* for defining ACLs
	function setDefaultPermissions() {
		$group =& $this->User->Group;
		$originalGroupId = $group->id;
		
		//allow admins to everything
		$group->id = 1;
		$this->Acl->allow($group,'controllers');
				
		//set teachers access
		$group->id = 2;
		$this->Acl->deny($group,'controllers');
		$this->Acl->allow($group, 'controllers/Comments/index');
		$this->Acl->allow($group, 'controllers/Comments/view');
		$this->Acl->allow($group, 'controllers/FormARecords/index');
		$this->Acl->allow($group, 'controllers/FormARecords/view');
		$this->Acl->allow($group, 'controllers/FormBRecords/index');
		$this->Acl->allow($group, 'controllers/FormBRecords/view');
		$this->Acl->allow($group, 'controllers/Subjects/index');
		$this->Acl->allow($group, 'controllers/Subjects/view');
		$this->Acl->allow($group, 'controllers/Users/login');
		$this->Acl->allow($group, 'controllers/Users/logout');
		//set students access
		$group->id = 3;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Comments/add');
		$this->Acl->allow($group, 'controllers/FormARecords/add');
		$this->Acl->allow($group, 'controllers/FormBRecords/add');
		$this->Acl->allow($group, 'controllers/Users/login');
		$this->Acl->allow($group, 'controllers/Users/logout');
								
		echo('all done');
		exit;		
	} 
	*/
}
?>
