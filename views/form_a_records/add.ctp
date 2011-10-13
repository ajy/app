<div class="formARecords form">
<?php echo "this is the teacher names".$teacher;?>
<?php echo $this->Form->create('FormARecord', array('id' => 'Form'));?>
	<fieldset>
		<legend><?php __('Add Form A Record'); ?></legend>
	<?php
		echo $this->Form->input('student', array('value'=> $session->read('Auth.User.username'),'type'=>'hidden'));
		echo $this->Form->input('teacher', array('value'=>$teacher,'type'=>'hidden'));
		echo $this->Form->input('subject_code', array('value'=>$subject_code,'type'=>'hidden'));
                $options=array('5'=>'5','4'=>'4','3'=>'3','2'=>'2','1'=>'1');$attributes=array('legend'=>'false');
		echo $this->Form->input('The course was well organized',array('type'=>'radio','options'=>$options,'attributes'=>$attributes));
		echo $this->Form->input('The teacher stressed important concepts in the lecture',array('type'=>'radio','options'=>array('5','4','3','2','1')));
		echo $this->Form->input('The teacher communicated ideas and concepts effectively',array('type'=>'radio','options'=>array('5','4','3','2','1')));
		echo $this->Form->input('Syllabus covered was above 95%(5),90%(4),85%(3),80%(2),75%(1)',array('type'=>'radio','options'=>array('5','4','3','2','1')));
		echo $this->Form->input('The teacher provided motivation in the subject',array('type'=>'radio','options'=>array('5','4','3','2','1')));
		echo $this->Form->input('The teacher was considerate and helpful',array('type'=>'radio','options'=>array('5','4','3','2','1')));
		echo $this->Form->input('The teacher was available to the student outside the class',array('type'=>'radio','options'=>array('5','4','3','2','1')));
		echo $this->Form->input('Tests, Assignments and course material aided subject understanding',array('type'=>'radio','options'=>array('5','4','3','2','1')));
		echo $this->Form->input('Overall ranking of the effort of this teacher in the class',array('type'=>'radio','options'=>array('5','4','3','2','1')));
		echo $this->Form->input('Overall ranking of teacher\'s performance as an effective teacher',array('type'=>'radio','options'=>array('5','4','3','2','1')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php 
 if(($this -> Session -> read("Auth.User.group_id"))==1){?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Form A Records', true), array('action' => 'index'));?></li>
	</ul>
</div>
 

<?php } ?>
