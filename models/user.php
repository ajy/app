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
				'message' => 'Your custom message here',
				'required' => true,
				//'allowEmpty' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'valid' => array(
				'rule' => array('noClassForTeachersAndAdminOnlyStudents'),
				'message' => 'This type of user cannot have a class',
				'required' => true,
			),
		),
		'class' => array(
			'valid' => array(
				'rule' => '/^[1-8][AB]/',
				'message' => 'This is not a valid class',
				'allowEmpty' => true, //can be empty by default	for teachers and admin
			)
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
	
	function noClassForTeachersAndAdminOnlyStudents($check){
		if((is_null($this->data['User']['class']))&&($this->data['User']['group_id']==3)){
			//the user is a student who has no class
			return false;
		}
		elseif(!(is_null($this->data['User']['class']))&&($this->data['User']['group_id']!=3)){
			//the user has a class but is not a student
			return false;
		}
		return true;
	}

	function beforeValidate(){
            if($this->data['User']['group_id']!=3){
                           $this->data['User']['class']=NULL;
                       }
        }
        function afterSave($created){
		if($created){
			$users = $this->query('SELECT * FROM users User
WHERE User.class IS NOT NULL and User.id NOT IN (SELECT student_id FROM subject_memberships)');
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
