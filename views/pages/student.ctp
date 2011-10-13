        <?php echo $this->Html->css('student'); ?>
        <h2><?php print_r('Student'); ?></h2>
        <?php $user=($this -> Session -> read("Auth.User"));?>
	<?php echo $this->element('feedbackMail'); ?>
        <h4><?php echo $html->link($user['username'],array('controller'=>'users','action'=>'view',$user['id']));?></h4>
        <div id="tabs" >
        	<ul>
        		<li><a href='#tabs-1'>Feedback</a></li>
        		<li><a href='#tabs-2'>Comments</a></li>            
        	</ul>
        	<div id="tabs-1">
        		<h3>Your subjects are-</h3>
        		<div id="accordion">
        		<?php foreach($session->read('MySubjects') as $MySubject): ?>
        			<h5><a href="#"><?php echo $MySubject['SubjectLearnt']['code'].': '.$MySubject['SubjectLearnt']['name']?></a></h5>
        		<div>
        			<?php echo $this->Form->button(
				$MySubject['SubjectLearnt']['teacher1'],
        			array(
        				'class'=>'modalInput',
        				'rel'=>'#form',
        				'subjectcode' => $MySubject['SubjectLearnt']['code'],
        				'teacher'=>$MySubject['SubjectLearnt']['teacher1'],
        				'href'=>$this->Html->url(array(
        					'controller' => 'form_a_records',
        					'action' => 'add',
        					'subjectcode' => $MySubject['SubjectLearnt']['code'],
        					'teacher'=>$MySubject['SubjectLearnt']['teacher1']
        					
        				))
        			)); ?>
        			<?php if($MySubject['SubjectLearnt']['teacher2'] != null)
        			echo $this->Form->button(
				$MySubject['SubjectLearnt']['teacher2'],
        			array(
        				'class'=>'modalInput',
        				'rel'=>'#form',
        				'onclick'=>'javascript: setFormVariables(thisObj)',
        				'href'=>$this->Html->url(array(
        					'controller' => 'form_a_records',
        					'action' => 'add',
        					'subjectcode' => $MySubject['SubjectLearnt']['code'],
        					'teacher'=>$MySubject['SubjectLearnt']['teacher2']
        				))
        			));
        			?>
        		</ul>
        		</div>
        		<?php endforeach;?>
        		</div>
        	</div>
        	<div id="tabs-2">
	        	dpfojgodij
        	</div>
        </div>
        <div class="test"></div>
        <div class="modal" id="form">
        	<?php 
        		$url=array('add');
        		echo $this->element('FormAAdd');
        	?>
        </div>
        <script type="text/javascript">
        <!--
	$(document).ready(function() {
		
		$("#accordion").accordion({
			event: 'mouseover'
		});
	
		$( "#tabs" ).tabs({
			event: 'mouseover'
		});
		/*$('#Form').ajaxForm(function() {
			beforeSubmit: function validate(formData, jqForm, options) { 
				var teacherValue = $('input[name=data[FormARecord][teacher]]').fieldValue(); 
				var subjectCodeValue = $('input[name=data[FormARecord][subject_code]').fieldValue();
				 
    if (!teacherValue[0] || !subjectCodeValue[0]) { 
        alert('was not set'); 
        return false; 
    } 
    alert('Both fields contain values.'); 
}
                	alert("Thank you for your comment!");
                });*/
	});
	$(function() {
		// if the function argument is given to overlay,
		// it is assumed to be the onBeforeLoad event listener
		$("button.modalInput").overlay({
			closeOnClick: false			
		});
		$("button.modalInput").click(function() {
			$("#FormARecordTeacher").val($(this).attr('teacher'));
			$("div.class").text($(this).attr('teacher'));
        		$("#FormARecordSubjectCode").val($(this).attr('subject_code'));
		});
		$("#Form").submit(function(e) {
			// close the overlay
			triggers.eq(1).overlay().close();
			
			// get user input
			var input = $("input", this).val();
			
			// do something with the answer
			triggers.eq(1).html(input);			
		});
	});
	//-->
	</script>
