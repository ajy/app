<?php
/* Users Test cases generated on: 2012-01-05 17:09:07 : 1325763547*/
App::import('Controller', 'Users');

class TestUsersController extends UsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.group', 'app.subject_membership', 'app.subject', 'app.form_a_record', 'app.comment');

	function startTest() {
		$this->Users =& new TestUsersController();
		$this->Users->constructClasses();
	}

	function endTest() {
		unset($this->Users);
		ClassRegistry::flush();
	}

	function testLogin() {

	}

	function testLogout() {

	}

	function testFeedbackEmail() {

	}

	function testChangePassword() {

	}

	function testResetPassword() {

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

	function testPromote() {

	}

	function testLoadNewStudent() {

	}

}
