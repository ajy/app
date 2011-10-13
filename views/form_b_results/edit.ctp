<div class="formBResults form">
<?php echo $this->Form->create('FormBResult');?>
	<fieldset>
		<legend><?php __('Edit Form B Result'); ?></legend>
	<?php
		echo $this->Form->input('teacher');
		echo $this->Form->input('(SUM(q1) / COUNT(q1)) * 100');
		echo $this->Form->input('(SUM(q2) / COUNT(q2)) * 100');
		echo $this->Form->input('(SUM(q3) / COUNT(q3)) * 100');
		echo $this->Form->input('(SUM(q4) / COUNT(q4)) * 100');
		echo $this->Form->input('(SUM(q5) / COUNT(q5)) * 100');
		echo $this->Form->input('(SUM(q6) / COUNT(q6)) * 100');
		echo $this->Form->input('(SUM(q7) / COUNT(q7)) * 100');
		echo $this->Form->input('(SUM(q8) / COUNT(q8)) * 100');
		echo $this->Form->input('(SUM(q9) / COUNT(q9)) * 100');
		echo $this->Form->input('(SUM(q10) / COUNT(q10)) * 100');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('FormBResult.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('FormBResult.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Form B Results', true), array('action' => 'index'));?></li>
	</ul>
</div>