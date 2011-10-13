<?php echo $this->Html->script('jquery.form.js',array('inline'=>false));?>
<div class="formARecords form">
<?php echo $this->Form->create('FormARecord', array('id' => 'Form','action'=>'add'));?>
	<fieldset>
		<legend><?php __('Add Form A Record'); ?></legend>
	<?php
		echo $this->Form->input('student', array('value'=> $session->read('Auth.User.username'),'type'=>'hidden'));
		echo $this->Form->input('teacher', array('value'=>'','type'=>'hidden'));
		echo $this->Form->input('subject_code', array('value'=>'','type'=>'hidden'));
                $options=array('5'=>'5','4'=>'4','3'=>'3','2'=>'2','1'=>'1');$attributes=array('legend'=>false);
		echo 'The course was well organized ';
		echo $this->Form->radio('Q1',$options,$attributes);
		echo '<br />The teacher stressed important concepts in the lecture';
		echo $this->Form->radio('Q2',$options,$attributes);
		echo '<br />The teacher communicated ideas and concepts effectively';
		echo $this->Form->radio('Q3',$options,$attributes);
		echo'<br />Syllabus covered was above 95%(5),90%(4),85%(3),80%(2),75%(1)';
		echo $this->Form->radio('Q4',$options,$attributes);
		echo '<br />The teacher provided motivation in the subject';
		echo $this->Form->radio('Q5',$options,$attributes);
		echo'<br />The teacher was considerate and helpful';
		echo $this->Form->radio('Q6',$options,$attributes);
		echo '<br />The teacher was available to the student outside the class';
		echo $this->Form->radio('Q7',$options,$attributes);
		echo '<br />Tests, Assignments and course material aided subject understanding';
		echo $this->Form->radio('Q8',$options,$attributes);
		echo '<br />Overall ranking of the effort of this teacher in the class';
		echo $this->Form->radio('Q9',$options,$attributes);
		echo '<br />Overall ranking of teacher\'s performance as an effective teacher';
		echo $this->Form->radio('Q10',$options,$attributes);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

