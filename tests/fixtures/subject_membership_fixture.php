<?php
/* SubjectMembership Fixture generated on: 2011-09-01 12:15:37 : 1314859537 */
class SubjectMembershipFixture extends CakeTestFixture {
	var $name = 'SubjectMembership';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 15, 'key' => 'primary'),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'subject_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'form_a_submitted' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'form_b_submitted' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'student_id' => array('column' => array('student_id', 'subject_id'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'student_id' => 1,
			'subject_id' => 1,
			'form_a_submitted' => 1,
			'form_b_submitted' => 1
		),
	);
}
