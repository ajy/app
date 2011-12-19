<?php
	echo $this->Session->flash('auth');
	echo $this->Form->create('User',array('action'=>'resetPassword/'.$token));
	echo $this->Form->inputs(array(
		'legend' => __('enter your new password', true),
		'new password',
		'confirm password'
	));
	echo $this->Form->end('Submit');
?>
