<div class="formBResults view">
<h2><?php  __('Form B Result');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['teacher']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q1) / COUNT(q1)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q1) / COUNT(q1)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q2) / COUNT(q2)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q2) / COUNT(q2)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q3) / COUNT(q3)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q3) / COUNT(q3)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q4) / COUNT(q4)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q4) / COUNT(q4)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q5) / COUNT(q5)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q5) / COUNT(q5)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q6) / COUNT(q6)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q6) / COUNT(q6)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q7) / COUNT(q7)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q7) / COUNT(q7)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q8) / COUNT(q8)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q8) / COUNT(q8)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q9) / COUNT(q9)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q9) / COUNT(q9)) * 100']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('(SUM(q10) / COUNT(q10)) * 100'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formBResult['FormBResult']['(SUM(q10) / COUNT(q10)) * 100']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form B Result', true), array('action' => 'edit', $formBResult['FormBResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Form B Result', true), array('action' => 'delete', $formBResult['FormBResult']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $formBResult['FormBResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form B Results', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form B Result', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
