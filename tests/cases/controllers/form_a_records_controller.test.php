<?php
/* FormARecords Test cases generated on: 2012-01-05 17:09:58 : 1325763598*/
App::import('Controller', 'FormARecords');

class TestFormARecordsController extends FormARecordsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FormARecordsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.form_a_record', 'app.subject', 'app.user', 'app.group', 'app.subject_membership', 'app.comment', 'app.form_b_result');

	function startTest() {
		$this->FormARecords =& new TestFormARecordsController();
		$this->FormARecords->constructClasses();
	}

	function endTest() {
		unset($this->FormARecords);
		ClassRegistry::flush();
	}

	function testResult() {

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
