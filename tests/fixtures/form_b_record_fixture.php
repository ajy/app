<?php
/* FormBRecord Fixture generated on: 2011-09-01 11:40:04 : 1314857404 */
class FormBRecordFixture extends CakeTestFixture {
	var $name = 'FormBRecord';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'student' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'teacher' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'subject_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'key' => 'unique', 'collate' => 'ascii_bin', 'charset' => 'ascii'),
		'q1' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q2' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q3' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q4' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q5' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q6' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q7' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q8' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q9' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'q10' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'from' => array('column' => array('student', 'teacher', 'subject_code'), 'unique' => 1), 'subject_code' => array('column' => 'subject_code', 'unique' => 1), 'to' => array('column' => 'teacher', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'student' => 1,
			'teacher' => 1,
			'subject_code' => 'Lorem i',
			'q1' => 1,
			'q2' => 1,
			'q3' => 1,
			'q4' => 1,
			'q5' => 1,
			'q6' => 1,
			'q7' => 1,
			'q8' => 1,
			'q9' => 1,
			'q10' => 1
		),
	);
}
