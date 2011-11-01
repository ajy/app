<div class="subjectMemberships form">
<?php echo $this->Form->create('SubjectMembership');?>
	<fieldset>
 		<legend><?php __('Add Subject Membership'); ?></legend>
	<?php
		echo $this->Form->input('student_id');
		echo $this->Form->input('subject_id');
		echo $this->Form->input('form_a_submitted');
		echo $this->Form->input('form_b_submitted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subject Memberships', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>