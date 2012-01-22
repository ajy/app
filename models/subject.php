<?php
class Subject extends AppModel {
	var $name = 'Subject';
	
	var $displayField = 'name';
	
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'code' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Subject code required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'class' => array(
			'valid' => array(
				'rule' => '/^[1-8][AB]/',
				'message' => 'This is not a valid class',
				'allowEmpty' => false, //can be null by default
				//'required' => false,
			),
                        'notempty'=> array(
                                'rule' => array('notempty'),
				'message' => 'Class required',
                        )
		),
		'teacher1' => array(
                        'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
				'allowEmpty' =>false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                        
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Assign a teacher',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
	);
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'SubjectMembership' => array(
			'className' => 'SubjectMembership',
			'foreignKey' => 'subject_id',
			'dependent' => true
		),
		'FormARecord' => array(
			'className' => 'FormARecord',
			'foreignKey' => 'subject_id',
			'dependent' => true
		),
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'subject_id',
			'dependent' => true
		)
	);
	var $belongsTo = array(
		'Teacher1' => array(
			'className' => 'User',
			'foreignKey' => 'teacher1',
			'conditions' => 'Teacher1.group_id = 2', //must be a teacher
		),		
	);

}
