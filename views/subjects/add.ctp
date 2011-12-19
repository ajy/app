<?=$html->css(array('reset','submitButton','add_edit'));?>
<div class="subjects form">
     <div id="header"><?php __('Add Subject'); ?></div>
<?php echo $this->Form->create('Subject');?>
	<fieldset>
           
	<?php
        
		echo $this->Form->input('name',array('default'=>'Sugar'));
		echo $this->Form->input('code');
                $classes=$this->requestAction('/subjects/getClass');
                echo $this->Form->input('teacher1');
		echo $this->Form->input('teacher2');
	?>
             <label> Class</label>
		 <select name="data[Subject][class]" id="SubjectClass" >
                    <?foreach($classes as $class):?>
                        <option><?=$class['subjects']['class']?></option>
                      <?  endforeach;?>  
                    </select>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

