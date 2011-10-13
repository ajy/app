<div class="formBRecords form">
<?php echo $this->Form->create('FormBRecord');?>
	<fieldset>
		<legend><?php __('Edit Form B Record'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('from');
		echo $this->Form->input('to');
		echo $this->Form->input('subject_code');
		echo $this->Form->input('q1');
		echo $this->Form->input('q2');
		echo $this->Form->input('q3');
		echo $this->Form->input('q4');
		echo $this->Form->input('q5');
		echo $this->Form->input('q6');
		echo $this->Form->input('q7');
		echo $this->Form->input('q8');
		echo $this->Form->input('q9');
		echo $this->Form->input('q10');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('FormBRecord.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('FormBRecord.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Form B Records', true), array('action' => 'index'));?></li>
	</ul>
</div>