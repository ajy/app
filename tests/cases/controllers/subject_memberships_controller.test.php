<?php
/* SubjectMemberships Test cases generated on: 2011-08-22 18:51:38 : 1314019298*/
App::import('Controller', 'SubjectMemberships');

class TestSubjectMembershipsController extends SubjectMembershipsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubjectMembershipsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subject_membership', 'app.user', 'app.group', 'app.subject', 'app.form_a_record', 'app.form_b_record', 'app.comment', 'app.form_b_result');

	function startTest() {
		$this->SubjectMemberships =& new TestSubjectMembershipsController();
		$this->SubjectMemberships->constructClasses();
	}

	function endTest() {
		unset($this->SubjectMemberships);
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

}
