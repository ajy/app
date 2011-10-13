<?php
/* Subject Test cases generated on: 2011-09-01 12:18:03 : 1314859683*/
App::import('Model', 'Subject');

class SubjectTestCase extends CakeTestCase {
	var $fixtures = array('app.subject', 'app.user', 'app.group', 'app.comment', 'app.form_b_result', 'app.form_a_record', 'app.form_b_record', 'app.subject_membership');

	function startTest() {
		$this->Subject =& ClassRegistry::init('Subject');
	}

	function endTest() {
		unset($this->Subject);
		ClassRegistry::flush();
	}

}
