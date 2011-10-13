<?=$html->css(array('Form','submitButton'));?>
<div class="subjects form">
<?php echo $this->Form->create('Subject');?>
	<fieldset>
		<legend><?php __('Add Subject'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('code');
		echo $this->Form->input('class');
		echo $this->Form->input('teacher1');
		echo $this->Form->input('teacher2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
