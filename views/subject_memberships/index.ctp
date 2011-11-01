<div class="subjectMemberships index">
	<h2><?php __('Subject Memberships');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('student_id');?></th>
			<th><?php echo $this->Paginator->sort('subject_id');?></th>
			<th><?php echo $this->Paginator->sort('form_a_submitted');?></th>
			<th><?php echo $this->Paginator->sort('form_b_submitted');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subjectMemberships as $subjectMembership):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subjectMembership['SubjectMembership']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subjectMembership['Student']['name'], array('controller' => 'users', 'action' => 'view', $subjectMembership['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subjectMembership['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $subjectMembership['Subject']['id'])); ?>
		</td>
		<td><?php echo $subjectMembership['SubjectMembership']['form_a_submitted']; ?>&nbsp;</td>
		<td><?php echo $subjectMembership['SubjectMembership']['form_b_submitted']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $subjectMembership['SubjectMembership']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjectMembership['SubjectMembership']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subjectMembership['SubjectMembership']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectMembership['SubjectMembership']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subject Membership', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>