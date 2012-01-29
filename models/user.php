<?php
class User extends AppModel {
	var $name = 'User';
	
	var $displayField = 'name';
	
	var $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'enter a username',
				'required' => true
			),
			'isUnique'=> array(
				'rule' => array('isUnique'),
				'message' => 'This username is already taken',
				'required' => true
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Give a name',
				'required' => true,
				//'allowEmpty' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),                               
				'message' => 'Enter a password',
				'required' => true
			)
		),
		//not hashed version
		'confirm_password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter a password',				
			),			
			'length' => array(


				'rule' => array('between',5,15),

				
				'message' => 'Password too short',
				'allowEmpty' => false,

			),
			'is not equal' => array(
				'rule' => array('validatePassword'),
				'message' => "Your passwords don't match",
				'allowEmpty' => false,
			),
					
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'give a group',
				'required' => true,
				//'allowEmpty' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),			
		),
		'class' => array(
			'valid' => array(
				'rule' => array('noValidClassForTeachersAndAdminOnlyStudents'),
				'message' => 'This type of user cannot have this class',
				'required' => false,
                                'nonEmpty'=>false
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Enter a valid email id',
				'required' => true,
				//'allowEmpty' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
	
	function validatePassword($check){
		//only run if there are two password field (like NOT on the contact or signin pages..)
		if(isset($this->data['User']['confirm_password'])){
			$check['password'] = Security::hash(Configure::read('Security.salt').$this->data['User']['confirm_password']);
			if($this->data['User']['password'] != $check['password'])
			{
				//they didnt confirm password correctly
				return false;
			}
		}
		return true;
	}
	
	function noValidClassForTeachersAndAdminOnlyStudents($check){
		if($this->data['User']['group_id']==3){
			//the user is a student
			$class=$this->data['User']['class'];
			if(preg_match("/[1-8][AB]/",$class)!=1)return false;//who has an incorrect class
			//always delimit pattern using backslash as above
		}
		elseif($this->data['User']['class']!=''){
			//the user has a class but is not a student
			return false;
		}
		return true;
	}

	function afterSave($created){
		if($created){//adds all students who aren't present in the subject_memberships table with the subjects of their class
			$users = $this->query('SELECT * FROM users User
WHERE User.class <> "" and User.id NOT IN (SELECT student_id FROM subject_memberships)');
			foreach($users as $user){
				$this->bindModel(
					array('hasMany' => array(
						'Subject' => array(
							'className' => 'Subject'
						)
					))
				);
				$hisClasses = $this->Subject->find('all', array(
					'conditions' => array(
						'class' => $user['User']['class']
					),
					'recursive' => -1
				));
				foreach($hisClasses as $class){
					$this->SubjectMembership->create();
					$this->SubjectMembership->set(array(
						'student_id' => $user['User']['id'],
						'subject_id' => $class['Subject']['id']
					));
					$this->SubjectMembership->save();
				}
			}
			return $users;
		}
	}
	
        //stuff added for acl
        
        var $actsAs = array('Acl' => array('requester'));
        
        function parentNode() {
        	if (!$this->id && empty($this->data)) {
        		return null;
        	}
        	$data = $this->data;
        	if (empty($this->data)) {
        		$data = $this->read();
        	}
        	if (!$data['User']['group_id']) {
        		return null;
        	} else {
        		return array('Group' => array('id' => $data['User']['group_id']));
        	}
        }

        //The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id'
		)
	);

	var $hasMany = array(
		'SubjectMembership' => array(
			'className' => 'SubjectMembership',
			'foreignKey' => 'student_id',
			'dependent' => true
		),
		'CommentSent' => array(
			'className' => 'Comment',
			'foreignKey' => 'from',
			'dependent' => true
		),
		'CommentReceived' => array(
			'className' => 'Comment',
			'foreignKey' => 'to',
			'dependent' => true
		)
	);
}	

