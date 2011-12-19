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
				//'allowEmpty' => false,
				//'required' => false,
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
		'confirm password' => array(			
			'length' => array(
				'rule' => array('between',5,15),
				'message' => 'Password length must be between 4 and 15'
			),
			'is not equal' => array(
				'rule' => array('validatePassword'),
				'message' => "Your passwords don't match"
			),
					
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Enter a valid emailid',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
	
	function validatePassword($check){
		//only run if there are two password field (like NOT on the contact or signin pages..)
		if(isset($this->data['User']['confirmpassword'])){
			if($this->data['User']['password'] != $this->Auth->password($this->data['User']['confirmpassword']))
			{
				//they didnt confirm password
				return false;
			}
		}
		return true;
	}
	
	function afterSave($created){
		if($created){
			$users = $this->query('SELECT * FROM users User
WHERE User.class IS NOT NULL and User.id NOT IN (SELECT student_id FROM subject_memberships)');
			foreach($users as $user){
				echo debug($user);
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
