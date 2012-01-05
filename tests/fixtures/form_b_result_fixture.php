<?php
/* FormBResult Fixture generated on: 2012-01-05 17:21:49 : 1325764309 */
class FormBResultFixture extends CakeTestFixture {
	var $name = 'FormBResult';

	var $fields = array(
		'teacher' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'subject_code' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'percentage_q1' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q2' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q3' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q4' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q5' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q6' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q7' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q8' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q9' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'percentage_q10' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '32,4'),
		'indexes' => array(),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'teacher' => 3,
			'subject_code' => 1,
			'percentage_q1' => 100.0000,
			'percentage_q2' => 100.0000,
			'percentage_q3' => 100.0000,
			'percentage_q4' => 100.0000,
			'percentage_q5' => 100.0000,
			'percentage_q6' => 100.0000,
			'percentage_q7' => 100.0000,
			'percentage_q8' => 100.0000,
			'percentage_q9' => 100.0000,
			'percentage_q10' => 100.0000
		),
	);
}
