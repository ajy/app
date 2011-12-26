<?=$html->css(array('reset','submitButton','add_edit'));?>

<div class="subjects form">
     <div id="header"><?php __('Add Subject'); ?></div>
<?php echo $this->Form->create('Subject');?>
	<fieldset>
           
	<?php
        
		echo $this->Form->input('name');
		echo $this->Form->input('code');
                $classes=$this->requestAction('/subjects/getClass');
                $teachers=$this->requestAction('/subjects/getTeachers');
                //debug($teachers);
                
	?>
            <label>Teacher 1</label>
		 <select name="data[Subject][teacher1]" id="SubjectTeacher1" >
                   <?foreach($teachers as $teacher):
                        $id=$teacher ['users']['id'];$name=$teacher ['users']['name'];
                     
                     echo<<< OPTIONS
                        <option value = $id > $name </option>
                       
OPTIONS;
                         endforeach;?>  
                    </select>
            <label>Teacher 2</label>
		 <select name="data[Subject][teacher2]" id="SubjectTeacher2" >
                    <?foreach($teachers as $teacher):
                        $id=$teacher ['users']['id'];$name=$teacher ['users']['name'];
                     
                     echo<<< OPTIONS
                        <option value = $id > $name </option>
                       
OPTIONS;
                         endforeach;?>  
                    </select>
            <label> Class</label>
		 <select name="data[Subject][class]" id="SubjectClass" >
                    <?foreach($classes as $class):?>
                        <option><?=$class['subjects']['class']?></option>
                      <?  endforeach;?>  
                    </select>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
     
</div>

 <!--<select name="data[Subject][teacher1]" id="SubjectTeacher1" >
                                            <option>Teacher1</option>
                 