 <?=$html->css(array('reset','add_edit','submitButton'));?> 
<?php
	echo $this->Session->flash('auth');
?>
<div id="header">Reset Password</div>
<?php
	echo $this->Form->create('User',array('action'=>'resetPassword/'.$token));
	echo $this->Form->input('username',array('type'=>'hidden'));//not used, but activates autohashing of password, i hope
	echo $this->Form->input('password', array('type' => 'password'));
	echo $this->Form->input('confirm_password', array('type' => 'password'));
	echo $this->Form->end('Submit');
?>
