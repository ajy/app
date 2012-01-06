<?php
/* TestSuiteSubject Fixture generated on: 2012-01-05 17:21:53 : 1325764313 */
class TestSuiteSubjectFixture extends CakeTestFixture {
	var $name = 'TestSuiteSubject';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'collate' => 'ascii_bin', 'charset' => 'ascii'),
		'code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'collate' => 'ascii_bin', 'charset' => 'ascii'),
		'class' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'collate' => 'ascii_bin', 'charset' => 'ascii'),
		'teacher1' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'teacher2' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'ascii', 'collate' => 'ascii_bin', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Test Subject',
			'code' => '09CS333',
			'class' => '4A',
			'teacher1' => 3,
			'teacher2' => NULL
		),
		array(
			'id' => 2,
			'name' => 'Test Subject',
			'code' => '09CS333',
			'class' => '4B',
			'teacher1' => 3,
			'teacher2' => NULL
		),
	);
}
