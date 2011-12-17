<?php
	echo $this->Form->create('User',array('action' => 'changePassword'));
	echo $this->Form->input('id');
	echo $this->Form->input('new password', array('type' => 'password'));
	echo $this->Form->input('confirm password', array('type' => 'password'));
	echo $this->Form->end('Submit');
	debug($this->data["User"]);
?>
