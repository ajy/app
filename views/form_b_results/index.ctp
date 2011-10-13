<script type="text/javascript">
$(document).ready( function () {
	$('#FormBResult').dataTable( {
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sDom": '<"H"Tfr>t<"F"ip>',
		"oTableTools": {
			"aButtons": [
				"copy", "csv", "xls", "pdf",
				{
					"sExtends":    "collection",
					"sButtonText": "Save",
					"aButtons":    [ "csv", "xls", "pdf" ]
				}
			]
		}
	} );

</script>
<div class="formBResults index">
	<h2><?php __('Form B Results');?></h2>
	<table id="FormBResult" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('teacher');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q1) / COUNT(q1)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q2) / COUNT(q2)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q3) / COUNT(q3)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q4) / COUNT(q4)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q5) / COUNT(q5)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q6) / COUNT(q6)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q7) / COUNT(q7)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q8) / COUNT(q8)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q9) / COUNT(q9)) * 100');?></th>
			<th><?php echo $this->Paginator->sort('(SUM(q10) / COUNT(q10)) * 100');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($formBResults as $formBResult):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $formBResult['FormBResult']['teacher']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q1) / COUNT(q1)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q2) / COUNT(q2)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q3) / COUNT(q3)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q4) / COUNT(q4)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q5) / COUNT(q5)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q6) / COUNT(q6)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q7) / COUNT(q7)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q8) / COUNT(q8)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q9) / COUNT(q9)) * 100']; ?>&nbsp;</td>
		<td><?php echo $formBResult['FormBResult']['(SUM(q10) / COUNT(q10)) * 100']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $formBResult['FormBResult']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $formBResult['FormBResult']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $formBResult['FormBResult']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $formBResult['FormBResult']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Form B Result', true), array('action' => 'add')); ?></li>
	</ul>
</div>