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
		'password_plain' => array(			
			'length' => array(
				'rule' => array('between',5,15),
				'message' => 'Password length must be between 4 and 15'
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
		),
		'created' => array(
			'time' => array(
				'rule' => array('time'),
				'message' => 'Time',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'modified' => array(
			'time' => array(
				'rule' => array('time'),
				'message' => 'Time2',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
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
