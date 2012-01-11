<div class="subjectMemberships form">
<?php echo $this->Form->create('SubjectMembership');?>
	<fieldset>
 		<legend><?php __('Edit Subject Membership'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('subject_id');
		echo $this->Form->input('form_a_submitted');		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SubjectMembership.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SubjectMembership.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subject Memberships', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
