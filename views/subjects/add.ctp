<?=$html->css(array('reset','button','add_edit'));?>
<script>
$(document).ready(function(){

$('#SubjectTeacher1').attr('selectedIndex', '-1');
$('#SubjectTeacher2').attr('selectedIndex', '-1');
});

function close() {
window.location = "http://localhost/newfbf/pages/admin";
}

// in html: <button onclick="goMoz();">Mozilla</button>

</script>

<div class="subjects form">
     <div id="header"><?php __('Add Subject'); ?></div>
<?php echo $this->Form->create('Subject');?>

           
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
                     <option value=""></option>
                    <?foreach($teachers as $teacher):
                        $id=$teacher ['users']['id'];$name=$teacher ['users']['name'];
                     
                     echo<<< OPTIONS
                        <option value = $id > $name </option>
                       
OPTIONS;
                         endforeach;
                  
                         ?>  
           </select>
	<? echo $this->Form->input('class');?>
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Add" />
</div>
</footer>
<? 
//debug($this->data);
$form->end();?>
  
                     
 </div>

       <!--       
        <label> Class</label>
		 <select name="data[Subject][class]" id="SubjectClass" >
                    <?foreach($classes as $class):?>
                        <option><?=$class['subjects']['class']?></option>
                      <?  endforeach;?>  
                    </select>-->
                