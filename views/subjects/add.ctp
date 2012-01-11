<?=$html->css(array('reset','button','add_edit'));?>
<?=$html->script("livevalidation");?>
<script>
$(document).ready(function(){

$('#SubjectTeacher1').attr('selectedIndex', '-1');
$('#SubjectTeacher2').attr('selectedIndex', '-1');
});


function close(){
    parent.$.fancybox.close( );
   

}



</script>
<style>
#flashMessage {
  width:100%;
  color:#c43c35;
}
.error-message{
display:inline;
color:#c43c35;
padding-left:30px;
}
footer{
padding-bottom:80px;
}
</style>
<div class="subjects form">
     <div id="header"><?php __('Add Subject'); ?></div>
<?php
	/*echo $this->Session->flash('auth');*/
        echo $this->Session->flash()
?>
<?php echo $this->Form->create('Subject');?>

           
	<?php
        
		echo $this->Form->input('name');
		echo $this->Form->input('code');
		echo $this->Form->input('class');
                $classes=$this->requestAction('/subjects/getClass');
                $teachers=$this->requestAction('/subjects/getTeachers');
                //debug($teachers);
                
	?>
            <label>Teacher</label>
		 <select name="data[Subject][teacher1]" id="SubjectTeacher1" >
                   <?foreach($teachers as $teacher):
                        $id=$teacher ['users']['id'];$name=$teacher ['users']['name'];
                     
                     echo<<< OPTIONS
                        <option value = $id > $name </option>
                       
OPTIONS;
                         endforeach;?>  
                    </select>
            <!--<label>Teacher 2</label>
		 <select name="data[Subject][teacher2]" id="SubjectTeacher2" >
                     <option value=""></option>
                    <?foreach($teachers as $teacher):
                        $id=$teacher ['users']['id'];$name=$teacher ['users']['name'];
                     
                     echo<<< OPTIONS
                        <option value = $id > $name </option>
                       
OPTIONS;
                         endforeach;
                  
                         ?>  
           </select>-->
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="window.close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Add" />
</div>
</footer>
<? 

$form->end();?>
  
                     
 </div>
<script>
//validation code placed after the form makes it work
var subjectName = new LiveValidation("SubjectName",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
subjectName.add(Validate.Presence);
var code = new LiveValidation("SubjectCode",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
code.add(Validate.Presence);
var theClass = new LiveValidation("SubjectClass",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});//class is a keyword in js
theClass.add(Validate.Format, {pattern: /[1-8][AB]/i, failureMessage: "Not a valid class"});
var teacher = new LiveValidation("SubjectTeacher",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
teacher.add(Validate.Presence);
</script>
