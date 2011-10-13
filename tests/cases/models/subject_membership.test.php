<?php
/* SubjectMembership Test cases generated on: 2011-09-01 12:15:39 : 1314859539*/
App::import('Model', 'SubjectMembership');

class SubjectMembershipTestCase extends CakeTestCase {
	var $fixtures = array('app.subject_membership', 'app.subject', 'app.user', 'app.group', 'app.comment', 'app.form_b_result', 'app.form_a_record', 'app.form_b_record');

	function startTest() {
		$this->SubjectMembership =& ClassRegistry::init('SubjectMembership');
	}

	function endTest() {
		unset($this->SubjectMembership);
		ClassRegistry::flush();
	}

}
