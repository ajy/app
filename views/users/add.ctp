<?=$html->css(array('Form','submitButton'));?>
 
            
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		echo $this->Form->input('confirm password', array('type' => 'password'));
		echo $this->Form->input('class');
		echo $this->Form->input('group_id');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
 
