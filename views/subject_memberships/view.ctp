<div class="subjectMemberships view">
<h2><?php  __('Subject Membership');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectMembership['SubjectMembership']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Student'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($subjectMembership['Student']['name'], array('controller' => 'users', 'action' => 'view', $subjectMembership['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($subjectMembership['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $subjectMembership['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Form A Submitted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectMembership['SubjectMembership']['form_a_submitted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Form B Submitted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subjectMembership['SubjectMembership']['form_b_submitted']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject Membership', true), array('action' => 'edit', $subjectMembership['SubjectMembership']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subject Membership', true), array('action' => 'delete', $subjectMembership['SubjectMembership']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectMembership['SubjectMembership']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Memberships', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Membership', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
