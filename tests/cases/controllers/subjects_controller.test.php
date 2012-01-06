<?php
/* Subjects Test cases generated on: 2012-01-05 17:09:17 : 1325763557*/
App::import('Controller', 'Subjects');

class TestSubjectsController extends SubjectsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubjectsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subject', 'app.user', 'app.group', 'app.subject_membership', 'app.comment', 'app.form_a_record');

	function startTest() {
		$this->Subjects =& new TestSubjectsController();
		$this->Subjects->constructClasses();
	}

	function endTest() {
		unset($this->Subjects);
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

	function testSubject() {

	}

	function testGetClass() {

	}

	function testGetTeacher() {

	}

}
