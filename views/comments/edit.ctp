<div class="comments form">
<?php echo $this->Form->create('Comment');?>
	<fieldset>
		<legend><?php __('Edit Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('from');
		echo $this->Form->input('to');
		echo $this->Form->input('subject_code');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Comment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Comment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('action' => 'index'));?></li>
	</ul>
</div>