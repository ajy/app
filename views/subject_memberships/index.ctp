<?= $html->css(array('reset', 'style','jquery.fancybox-1.3.4')); ?>
<?= $html->css(array('demo_table')); ?>
<?= $javascript->link(array('jquery-1.5.1.min','jquery.dataTables','jquery.fancybox-1.3.4.pack')); ?>
<?= $javascript->link(array('config','add_edit'));?>
<script>
	$(document).ready(function(){
		$('.example').dataTable();
	});
</script>
<?php echo "The number of submissions done is ".$form_a_submitted.'/'.$total;?>
<div class="subjectMemberships index">
	<h2><?php __('Subject Memberships');?></h2>
	<table cellpadding="0" cellspacing="0" class="display example" >
	<thead>
	<tr>
			<th>student_id</th>
			<th>subject_id</th>
			<th>form_a_submitted</th>
			<th>form_b_submitted</th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$i = 0;
	foreach ($subjectMemberships as $subjectMembership):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subjectMembership['Student']['name'];?>
		</td>
		<td>
			<?php echo $subjectMembership['Subject']['name']; ?>
		</td>
		<td><?php echo $subjectMembership['SubjectMembership']['form_a_submitted']; ?>&nbsp;</td>
		<td><?php echo $subjectMembership['SubjectMembership']['form_b_submitted']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjectMembership['SubjectMembership']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subjectMembership['SubjectMembership']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectMembership['SubjectMembership']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<!--<p>
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
	</div> -->
</div>

