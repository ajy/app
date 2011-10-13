<?php
/* FormARecord Test cases generated on: 2011-09-01 11:38:37 : 1314857317*/
App::import('Model', 'FormARecord');

class FormARecordTestCase extends CakeTestCase {
	var $fixtures = array('app.form_a_record');

	function startTest() {
		$this->FormARecord =& ClassRegistry::init('FormARecord');
	}

	function endTest() {
		unset($this->FormARecord);
		ClassRegistry::flush();
	}

}
