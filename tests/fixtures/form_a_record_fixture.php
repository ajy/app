<?php
/* FormARecord Fixture generated on: 2011-09-01 11:38:37 : 1314857317 */
class FormARecordFixture extends CakeTestFixture {
	var $name = 'FormARecord';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'student' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'teacher' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'subject_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'collate' => 'ascii_bin', 'charset' => 'ascii'),
		'q1' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q2' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q3' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q4' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q5' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q6' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q7' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q8' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q9' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'q10' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'from' => array('column' => array('student', 'teacher', 'subject_code'), 'unique' => 1), 'to' => array('column' => 'teacher', 'unique' => 0)),
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
