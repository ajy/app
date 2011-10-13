<?php
/* Group Test cases generated on: 2011-09-01 12:10:08 : 1314859208*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user', 'app.subject', 'app.form_a_record', 'app.form_b_record', 'app.subject_membership', 'app.comment', 'app.form_b_result');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
