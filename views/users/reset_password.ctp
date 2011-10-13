<?php
	echo $this->Session->flash('auth');
	echo $this->Form->create('User',array('action'=>'resetPassword'));
	echo $this->Form->inputs(array(
		'legend' => __('enter your registered email', true),
		'email'
	));
	echo $this->Form->end('Submit');
?>

