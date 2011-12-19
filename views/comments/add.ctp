 <?=$html->css(array('add_edit','submitButton'));?> 
<div class="comments form">
    <div id="header"><?php __('Add Comment'); ?></div>
<?php echo $this->Form->create('Comment');?>
	<fieldset>
		
	<?php
                //debug($this -> Session ->read('params'));
		/*echo $this->Form->input('from');
		echo $this->Form->input('to');
		echo $this->Form->input('subject_code');*/
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php 
 if(($this -> Session -> read("Auth.User.group_id"))==1){ ?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php } ?>