<?php
/* Comments Test cases generated on: 2012-01-05 17:09:27 : 1325763567*/
App::import('Controller', 'Comments');

class TestCommentsController extends CommentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CommentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.comment', 'app.user', 'app.group', 'app.subject_membership', 'app.subject', 'app.form_a_record');

	function startTest() {
		$this->Comments =& new TestCommentsController();
		$this->Comments->constructClasses();
	}

	function endTest() {
		unset($this->Comments);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testComment() {

	}

}
