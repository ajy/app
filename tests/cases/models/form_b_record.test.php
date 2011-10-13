<?php
/* FormBRecord Test cases generated on: 2011-09-01 11:40:05 : 1314857405*/
App::import('Model', 'FormBRecord');

class FormBRecordTestCase extends CakeTestCase {
	var $fixtures = array('app.form_b_record', 'app.user', 'app.group', 'app.subject', 'app.form_a_record', 'app.subject_membership', 'app.comment', 'app.form_b_result');

	function startTest() {
		$this->FormBRecord =& ClassRegistry::init('FormBRecord');
	}

	function endTest() {
		unset($this->FormBRecord);
		ClassRegistry::flush();
	}

	function testStudentBeforeSave() {

	}

}
