<div class="formBRecords form">
<?php echo $this->Form->create('FormBRecord');?>
	<fieldset>
		<legend><?php __('Add Form B Record'); ?></legend>
	<?php
		/*echo $this->Form->input('from');
		echo $this->Form->input('to');
		echo $this->Form->input('subject_code');
                 $options=array('1'=>'yes','0'=>'No');$attributes=array('legend'=>false);
		 echo $this->Form->radio('q1',$options,$attributes);
		echo $this->Form->input('q2');
		echo $this->Form->input('q3');
		echo $this->Form->input('q4');
		echo $this->Form->input('q5');
		echo $this->Form->input('q6');
		echo $this->Form->input('q7');
		echo $this->Form->input('q8');
		echo $this->Form->input('q9');
		echo $this->Form->input('q10');*/
          echo  $this->Form->input('q1',array 
('legend'=>false,'name'=>'q1','type'=>'radio','options'=>array 
('1'=>'Yes','0'=>'No'))); 

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php 
 if(($this -> Session -> read("Auth.User.group_id"))==1){ ?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Form B Records', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php } ?>