<?=$html->css(array('reset','submitButton','add_edit'));?>
<div class="users form">
    <div id="header"><?php __('Add User'); ?></div>

<?php echo $this->Form->create('User');?>
	<fieldset>
		
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('name');
		//echo $this->Form->input('password');
                //echo $this->Form->input('confirm password', array('type' => 'password'));
                echo $this->Form->input('class');
		echo $this->Form->input('email');
                echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>