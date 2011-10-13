<?php
/* Comment Fixture generated on: 2011-09-01 11:35:30 : 1314857130 */
class CommentFixture extends CakeTestFixture {
	var $name = 'Comment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3, 'key' => 'primary'),
		'from' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'to' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'subject_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'collate' => 'armscii8_bin', 'charset' => 'armscii8'),
		'comment' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'armscii8_bin', 'charset' => 'armscii8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'from' => 1,
			'to' => 1,
			'subject_code' => 'Lorem i',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
