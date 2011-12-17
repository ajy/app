<?php
App::import('Vendor', 'excel_reader2');
class UsersController extends AppController {

	var $name = 'Users';
	
	var $components = array('Email');
	
	var $uses = array('User','Subject');
	
	function show_excel() {
		$data = new Spreadsheet_Excel_Reader('example.xls', true);
		$this->set('data', $data);
	}
	
	function login() {
	if ($this->Session->read('Auth.User')) {
			//$this->Session->setFlash('You are logged in!');
                      //  $this -> Session -> write("$username", "Auth.User.username");
                        $group_id=( $this -> Session -> read("Auth.User.group_id"));
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
		//$this->Session->setFlash('You are logged out!');
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
				$this->Session->setFlash('your feedback has been sent');
			else
				$this->Session->setFlash('your feedback could not be sent right now,try again later');
			$this->redirect($this->referer());
		}
		$this->set('message', $message);
		$this->set('subject', $subject);
	}
	
	function changePassword() {
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('Password has been changed.');
				$this->redirect('/');
			} else $this->Session->setFlash('Password could not be changed.');
		} else $this->data = $this->User->findById($this->Auth->user('id'));
	}
	
	function resetPassword($token=null) {
		if(!empty($this->data['User']['email'])){
			// user submitted initial form 
			$user = $this->User->findByEmail($this->data['User']['email']); 
			if (empty($user)){ 
			       $this->Session->setFlash('Unknown email.'); 
			       return;  
			}else{ 
				$emailtoken = md5($user['User']['password']); 
				$this->set('emailtoken',$emailtoken);
				$this->Email->from = 'Somebody <somebody@example.com>';
				$this->Email->to = $user['User']['email'];
				$this->Email->delivery = 'debug';
				$this->Email->subject = 'Test';
				$this->Email->template = 'password_reset_message';
				$this->Email->send(); 
				$this->Session->setFlash('A link to set a new password has been sent to your email account.'); 
				$this->redirect('/');
			} 
		}
		if(!empty($token)){
			//User has sent token 
			$user = $this->User->find(array("MD5(User.password)"=>$token)); 
			if (empty($user)){ 
				$this->Session->setFlash('Invalid token.'); 
				return; 
			}
			$this->set('token', $token);
			//User has filled new password form
			if (!empty($this->data['User']['new password'])) { 
				if($this->data['User']['new password'] == $this->data['User']['confirm password']) {
					$user['User']['password'] = $this->Auth->password($this->data['User']['new password']); 
					$this->user->save($user); 
					$this->Session->setFlash('New password set for'.$user['User']['username']); 
					$this->redirect('/');
				}
				$this->Session->setFlash('the password does not match');				
			}
			
			$this->set('token', $token); 
			$this->render('setNewPassword'); 
		}
	} 
	
	
	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			$this->log($this->data);
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
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
