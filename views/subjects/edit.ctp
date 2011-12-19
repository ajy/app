<?=$html->css(array('reset','submitButton','add_edit'));?>

<div class="subjects form">
  <div id="header"><?php __('Edit Subject'); ?></div>  
<?php echo $this->Form->create('Subject');?>
	<fieldset>
		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('code');
		echo $this->Form->input('class');
		echo $this->Form->input('teacher1');
		echo $this->Form->input('teacher2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
