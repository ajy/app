<?php
class FormBResult extends AppModel {
	var $name = 'FormBResult';
	
	var $displayField = 'teacher';
			
	var $belongsTo = array(
		'Teacher' => array(
			'className' => 'User',
			'foreignKey' => 'teacher'			
		),
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_code'
		)
	);
}
