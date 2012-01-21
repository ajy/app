<?php echo $html->css(array('reset','button','add_edit'));?>
<?php echo $html->script("livevalidation");?>
<script>

function close(){
    
    parent.$.fancybox.close( );

}

</script>
<style>
  .error {
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
<div id="header"><?php __('Edit Subject'); ?></div>  
<?php echo $this->Session->flash()?>
<cake:nocache>
<?php echo $this->Form->create('Subject');?>
	<fieldset>
<?php
	//debug($this->data);
	echo $this->Form->input('id');
	echo $this->Form->input('name');
	echo $this->Form->input('code');
	$classes=$this->requestAction('/subjects/getClass');
	$teachers=$this->requestAction('/subjects/getTeachers');
	$selected=$this->data['Subject']['class'];
	$teacher1=$this->data['Teacher1']['id'];
	//$teacher2=$this->data['Teacher2']['id'];no more teacher2
?>
                
                   
		<label> Class</label>
               <select name="data[Subject][class]" id="SubjectClass" >
                                       
                    <?php 
                               foreach($classes as $class):
                                    //debug($teacher);
                                 if($class['subjects']['class']== $selected){
                     
                   echo '<option selected>'. $class['subjects']['class'].'</option>'; }
                                else   { 
                   echo '<option >'. $class['subjects']['class'].'</option>'; }

                         endforeach;
                 ?>  
                
                 </select>
               <label>Teacher</label> 
                 <select name="data[Subject][teacher1]" id="SubjectTeacher1" >
                                       
                    <?php 
                                 foreach($teachers as $teacher):
                                 if($teacher['users']['id']== $teacher1){
                     
                   echo '<option value = "'.$teacher['users']['id']. '" selected>'. $teacher['users']['name'].'</option>'; }
                                else   { 
                 echo '<option value = "'.$teacher['users']['id']. '" >'. $teacher['users']['name'].'</option>'; }
                  

                         endforeach;
                 ?>  
                
                 </select>
              <!--<label>Teacher 2</label> 
                 <select name="data[Subject][teacher2]" id="SubjectTeacher2" >
                    
                    <?php  
                   echo '<option value = "">Select</option>';    
                                 foreach($teachers as $teacher):
                                 if($teacher['users']['id']== $teacher2){
                     
                   echo '<option value = "'.$teacher['users']['id']. '" selected>'. $teacher['users']['name'].'</option>'; }
                         
                     else   { 
                   echo '<option value = "'.$teacher['users']['id']. '" >'. $teacher['users']['name'].'</option>'; }
           

                         endforeach;
                 ?>  
                
                </select>
              
              <?if($teacher2==NULL){?>         
                     <script>
                          
                         $('#SubjectTeacher2').attr('selectedIndex', '0');
                     </script>
                     <?}?>
                     <script>
                       
                      /*   $("#SubjectTeacher2").bind("change", function() {alert('here')
                          alert(hel);
                       /*   if( $('#SubjectTeacher2').val()===" "){alert(( $('#SubjectTeacher2').val()===" "))
                $('#SubjectTeacher2').attr('selectedIndex', '-1');}
           
            })	*/</script>-->
	</fieldset>
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="window.close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Save" />
</div>
</footer>
<?php echo $this->Form->end();?>
</div>
</cake:nocache>
<script>
//validation code placed after the form makes it work
var subjectName = new LiveValidation("SubjectName",{wait: 1000, onlyOnSubmit: true, validMessage: " "});
subjectName.add(Validate.Presence);
var code = new LiveValidation("SubjectCode",{wait: 1000, onlyOnSubmit: true, validMessage: " "});
code.add(Validate.Presence);
var theClass = new LiveValidation("SubjectClass",{wait: 1000, onlyOnSubmit: true, validMessage: " "});//class is a keyword in js
theClass.add(Validate.Format, {pattern: /[1-8][AB]/i, failureMessage: "Not a valid class"});
var teacher = new LiveValidation("SubjectTeacher",{wait: 1000, onlyOnSubmit: true, validMessage: " "});
teacher.add(Validate.Presence);
</script>
