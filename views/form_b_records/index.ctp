<div class="formBRecords index">
	<h2><?php __('Form B Records');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('from');?></th>
			<th><?php echo $this->Paginator->sort('to');?></th>
			<th><?php echo $this->Paginator->sort('subject_code');?></th>
			<th><?php echo $this->Paginator->sort('q1');?></th>
			<th><?php echo $this->Paginator->sort('q2');?></th>
			<th><?php echo $this->Paginator->sort('q3');?></th>
			<th><?php echo $this->Paginator->sort('q4');?></th>
			<th><?php echo $this->Paginator->sort('q5');?></th>
			<th><?php echo $this->Paginator->sort('q6');?></th>
			<th><?php echo $this->Paginator->sort('q7');?></th>
			<th><?php echo $this->Paginator->sort('q8');?></th>
			<th><?php echo $this->Paginator->sort('q9');?></th>
			<th><?php echo $this->Paginator->sort('q10');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($formBRecords as $formBRecord):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $formBRecord['FormBRecord']['id']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['from']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['to']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['subject_code']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q1']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q2']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q3']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q4']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q5']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q6']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q7']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q8']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q9']; ?>&nbsp;</td>
		<td><?php echo $formBRecord['FormBRecord']['q10']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $formBRecord['FormBRecord']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $formBRecord['FormBRecord']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $formBRecord['FormBRecord']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $formBRecord['FormBRecord']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Form B Record', true), array('action' => 'add')); ?></li>
	</ul>
</div>