<?php
/* TestSuiteUser Fixture generated on: 2012-01-05 17:21:53 : 1325764313 */
class TestSuiteUserFixture extends CakeTestFixture {
	var $name = 'TestSuiteUser';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 'length' => 40, 'collate' => 'latin1_swedish_ci', 'comment' => ' default password is 12345', 'charset' => 'latin1'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => '3', 'length' => 2),
		'class' => array('type' => 'string', 'null' => false, 'default' => '\'\'', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'ascii', 'collate' => 'ascii_bin', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'administrator',
			'name' => 'a',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 1,
			'class' => '',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 3,
			'username' => 'teacher1',
			'name' => 'b',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 2,
			'class' => '',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 7,
			'username' => 'teacher2',
			'name' => 'TeacherNo2',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 2,
			'class' => '',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 30,
			'username' => '1PI09IS001',
			'name' => 'aa',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 31,
			'username' => '1PI09IS002',
			'name' => 'bb',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 32,
			'username' => '1PI09IS003',
			'name' => 'cc',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 33,
			'username' => '1PI09IS004',
			'name' => 'dd',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 34,
			'username' => '1PI09IS005',
			'name' => 'ee',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 35,
			'username' => '1PI09IS007',
			'name' => 'gg',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 36,
			'username' => '1PI09IS008',
			'name' => 'hh',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 37,
			'username' => '1PI09IS009',
			'name' => 'ii',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 38,
			'username' => '1PI09IS010',
			'name' => 'jj',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 39,
			'username' => '1PI09IS011',
			'name' => 'kk',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 41,
			'username' => '1PI09IS012',
			'name' => 'll',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 42,
			'username' => '1PI09IS013',
			'name' => 'mm',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 43,
			'username' => '1PI09IS014',
			'name' => 'nn',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 44,
			'username' => '1PI09IS015',
			'name' => 'oo',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 45,
			'username' => '1PI09IS016',
			'name' => 'pp',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 46,
			'username' => '1PI09IS017',
			'name' => 'qq',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 47,
			'username' => '1PI09IS018',
			'name' => 'rr',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 48,
			'username' => '1PI09IS019',
			'name' => 'ss',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 49,
			'username' => '1PI09IS020',
			'name' => 'tt',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 50,
			'username' => '1PI09IS021',
			'name' => 'uu',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 51,
			'username' => '1PI09IS022',
			'name' => 'vv',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 52,
			'username' => '1PI09IS023',
			'name' => 'ww',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 53,
			'username' => '1PI09IS024',
			'name' => 'xx',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 54,
			'username' => '1PI09IS025',
			'name' => 'yy',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
		array(
			'id' => 56,
			'username' => '1PI09IS026',
			'name' => 'zz',
			'password' => 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef',
			'group_id' => 3,
			'class' => '4A',
			'email' => 'ajygvnkr@gmail.com'
		),
	);
}
