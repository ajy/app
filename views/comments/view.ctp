<div class="comments view">
<h2><?php  __('Comment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $comment['Comment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('From'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $comment['Comment']['from']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('To'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $comment['Comment']['to']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $comment['Comment']['subject_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $comment['Comment']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php 
 if(($this -> Session -> read("Auth.User.group_id"))==1){ ?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment', true), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Comment', true), array('action' => 'delete', $comment['Comment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
<?php } ?>