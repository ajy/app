 <?=$html->css(array('reset','add_edit','submitButton'));?> 
<?php
	echo $this->Session->flash('auth');?>
<div id="header">Reset Password</div>
	<?echo $this->Form->create('User',array('action'=>'resetPassword/'.$token));
	echo $this->Form->input('new password', array('type' => 'password'));
	echo $this->Form->input('confirm password', array('type' => 'password'));
	echo $this->Form->end('Submit');
?>
