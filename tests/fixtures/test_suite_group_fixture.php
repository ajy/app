<?php
/* TestSuiteGroup Fixture generated on: 2012-01-05 17:21:52 : 1325764312 */
class TestSuiteGroupFixture extends CakeTestFixture {
	var $name = 'TestSuiteGroup';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'collate' => 'armscii8_bin', 'charset' => 'armscii8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'ascii', 'collate' => 'ascii_bin', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Administrator'
		),
		array(
			'id' => 2,
			'name' => 'Teacher'
		),
		array(
			'id' => 3,
			'name' => 'Student'
		),
	);
}
