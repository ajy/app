<?=$html->css(array('Form','submitButton'));?>
<?php
echo<<<STYLE
<style>
.users form{
position:absolute;
left:20%;
}
</style>
STYLE;
?>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
                if(($this -> Session -> read("Auth.User.group_id"))==1){
                	echo $this->Form->input('username');
                	echo $this->Form->input('name');
                }
		echo $this->Form->input('password', array('label' => 'old password'));
		echo$this->Form->input('new password');
		echo $this->Form->input('confirm password', array('type' => 'password'));
                if(($this -> Session -> read("Auth.User.group_id"))==1){
                	echo $this->Form->input('group_id');
                	echo $this->Form->input('class');
                }
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>


