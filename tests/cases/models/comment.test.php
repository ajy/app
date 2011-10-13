<?php
/* Comment Test cases generated on: 2011-09-01 11:35:33 : 1314857133*/
App::import('Model', 'Comment');

class CommentTestCase extends CakeTestCase {
	var $fixtures = array('app.comment', 'app.user', 'app.group', 'app.subject', 'app.form_a_record', 'app.form_b_record', 'app.subject_membership', 'app.form_b_result');

	function startTest() {
		$this->Comment =& ClassRegistry::init('Comment');
	}

	function endTest() {
		unset($this->Comment);
		ClassRegistry::flush();
	}

}
