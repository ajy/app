<?php
/* TestSuiteComment Fixture generated on: 2012-01-05 17:21:51 : 1325764311 */
class TestSuiteCommentFixture extends CakeTestFixture {
	var $name = 'TestSuiteComment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3, 'key' => 'primary'),
		'from' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'to' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'subject_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'collate' => 'armscii8_bin', 'charset' => 'armscii8'),
		'comment' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'armscii8_bin', 'charset' => 'armscii8'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 3),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'ascii', 'collate' => 'ascii_bin', 'engine' => 'MyISAM')
	);

	var $records = array(
	);
}
