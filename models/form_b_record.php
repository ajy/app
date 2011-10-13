<?php
class FormBRecord extends AppModel {
	var $name = 'FormBRecord';
	
	var $validate = array(
		'student' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'The student field is blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'teacher' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'The teacher field is blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subject_code' => array(
			'isSubject' => array(
				'rule' => array('numeric'),
				'message' => 'the record is not for a registered subject',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q1' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q2' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q3' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q4' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q5' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q6' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q7' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q8' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q9' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q10' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_code'
		)
	);
}
