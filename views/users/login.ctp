
<?php
	echo $this->Html->css("LoginBoxstyle");
	echo $this->Form->create('User', array('action' => 'login','class' => 'login'));
	echo $this->Form->inputs(array(
		'legend' => false,
		'fieldset' => false,
		'username',
		'password'
	));
	echo '<span><a href='.$this->Html->url(array("controller" => "users",    "action" => "resetPassword")).'>Forgot your password?</a></span>';
	echo $this->Form->submit("Log in",array('id' => 'Login'));
	echo $this->Form->end();
?>
