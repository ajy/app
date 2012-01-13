<?php
class SubjectMembership extends AppModel {
	var $name = 'SubjectMembership';
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_id'
		),
		'Student' => array(
			'className' => 'User',
			'foreignKey' => 'student_id'
		)
	);
}
