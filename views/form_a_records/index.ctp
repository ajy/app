<div class="formARecords index">
	<h2><?php __('Form A Records');?></h2>
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
	foreach ($formARecords as $formARecord):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $formARecord['FormARecord']['id']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['from']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['to']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['subject_code']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q1']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q2']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q3']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q4']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q5']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q6']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q7']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q8']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q9']; ?>&nbsp;</td>
		<td><?php echo $formARecord['FormARecord']['q10']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $formARecord['FormARecord']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $formARecord['FormARecord']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $formARecord['FormARecord']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $formARecord['FormARecord']['id'])); ?>
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
<?php 
 if(($this -> Session -> read("Auth.User.group_id"))==1){ ?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Form A Record', true), array('action' => 'add')); ?></li>
	</ul>
</div>
<?php } ?>