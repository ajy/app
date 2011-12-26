 <?=$html->css(array('reset','add_edit','submitButton'));?> 
<style>
    legend{
        visibility: hidden;
    }
</style>
<?php
	echo $this->Session->flash('auth');?>
<div id="header">Send Reset Password mail to</div>
	<?echo $this->Form->create('User',array('action'=>'resetPassword'));
	echo $this->Form->inputs(array(
		
		'email'
	));
	echo $this->Form->end('Submit');
?>

