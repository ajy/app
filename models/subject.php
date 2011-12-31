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
				'allowEmpty' => true, //can be null by default
				//'required' => false,
			)
		),
		'teacher1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'teacher2' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
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
		)
	);
	var $belongsTo = array(
		'Teacher1' => array(
			'className' => 'User',
			'foreignKey' => 'teacher1',
			'conditions' => 'Teacher1.group_id = 2', //must be a teacher
		),
		'Teacher2' => array(
			'className' => 'User',
			'foreignKey' => 'teacher2',
			'conditions' => 'Teacher2.group_id = 2', //must be a teacher
		),
	);

}/*
own column 'User.group_id' in 'on clause' [CORE/cake/libs/model/datasources/dbo_source.php, line 684]
Query: SELECT COUNT(*) AS `count` FROM `subjects` AS `Subject` LEFT JOIN `users` AS `Teacher1` ON (`User`.`group_id` = 2 AND `Subject`.`teacher1` = `Teacher1`.`id`) LEFT JOIN `users` AS `Teacher2` ON (`User`.`group_id` = 2 AND `Subject`.`teacher2` = `Teacher2`.`id`)  WHERE 1 = 1    
Query: SELECT `Subject`.`id`, `Subject`.`name`, `Subject`.`code`, `Subject`.`class`, `Subject`.`teacher1`, `Subject`.`teacher2`, `Teacher1`.`id`, `Teacher1`.`username`, `Teacher1`.`name`, `Teacher1`.`password`, `Teacher1`.`group_id`, `Teacher1`.`class`, `Teacher1`.`email`, `Teacher2`.`id`, `Teacher2`.`username`, `Teacher2`.`name`, `Teacher2`.`password`, `Teacher2`.`group_id`, `Teacher2`.`class`, `Teacher2`.`email` FROM `subjects` AS `Subject` LEFT JOIN `users` AS `Teacher1` ON (`User`.`group_id` = 2 AND `Subject`.`teacher1` = `Teacher1`.`id`) LEFT JOIN `users` AS `Teacher2` ON (`User`.`group_id` = 2 AND `Subject`.`teacher2` = `Teacher2`.`id`)  WHERE 1 = 1    LIMIT 20 
*/
