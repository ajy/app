<?=$html->css(array('Form','submitButton'));?>
<div class="subjects form">
<?php echo $this->Form->create('Subject');?>
	<fieldset>
           <legend><?php __('Add Subject'); ?></legend>
	<?php
        
		echo $this->Form->input('name');
		echo $this->Form->input('code');
                $classes=$this->requestAction('/subjects/getClass');?>
           <label> Class</label>
		 <select name="data[Subject][class]" id="SubjectClass" >
                    <?foreach($classes as $class):?>
                        <option><?=$class['subjects']['class']?></option>
                      <?  endforeach;?>  
                    </select>
		<?echo $this->Form->input('teacher1');
		echo $this->Form->input('teacher2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

