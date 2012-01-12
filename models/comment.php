<?php
class Comment extends AppModel {
	var $name = 'Comment';
	
	var $validate = array(
		'from' => array(
			'isUser' => array(
				'rule' => array('numeric'),
				'message' => 'the Comment is not from a valid user',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'to' => array(
			'isUser' => array(
				'rule' => array('numeric'),
				'message' => 'the Comment is not to a valid user',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subject_code' => array(
			'isUser' => array(
				'rule' => array('numeric'),
				'message' => 'the Comment is not about a valid subject',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'comment' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must give a comment',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Sender' => array(
			'className' => 'User',
			'foreignKey' => 'from',			
		),
		'Receiver' => array(
			'className' => 'User',
			'foreignKey' => 'to'
		),
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_code'			
		)
	);
}
