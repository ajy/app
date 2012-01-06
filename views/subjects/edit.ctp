<?=$html->css(array('reset','submitButton','add_edit'));?>
<script>

</script>
<div class="subjects form">
  <div id="header"><?php __('Edit Subject'); ?></div>  
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
                 $teacher2=$this->data['Teacher2']['id'];
                 
                ?>
                
                   
		<label> Class</label>
               <select name="data[Subject][class]" id="SubjectClass" >
                                       
                    <? 
                               foreach($classes as $class):
                                    //debug($teacher);
                                 if($class['subjects']['class']== $selected){
                     
                   echo '<option selected>'. $class['subjects']['class'].'</option>'; }
                                else   { 
                   echo '<option >'. $class['subjects']['class'].'</option>'; }

                         endforeach;
                 ?>  
                
                 </select>
               <label>Teacher 1</label> 
                 <select name="data[Subject][teacher1]" id="SubjectTeacher1" >
                                       
                    <? 
                                 foreach($teachers as $teacher):
                                 if($teacher['users']['id']== $teacher1){
                     
                   echo '<option value = "'.$teacher['users']['id']. '" selected>'. $teacher['users']['name'].'</option>'; }
                                else   { 
                 echo '<option value = "'.$teacher['users']['id']. '" >'. $teacher['users']['name'].'</option>'; }
                  

                         endforeach;
                 ?>  
                
                 </select>
              <label>Teacher 2</label> 
                 <select name="data[Subject][teacher2]" id="SubjectTeacher2" >
                    
                    <?  /*if($teacher2==NULL){
                        
                    }*/
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
           
            })	*/</script>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
  <script>
  $("form").submit(function() {
                 /*   alert('here');alert("<?php echo  $teacher2=$this->data['Teacher2']['id'];  ; ?>");
                if( $('#SubjectTeacher2').val()===" "){
                $('#SubjectTeacher2').attr('selectedIndex', '-1');
        ("<?php echo  $this->data['Teacher2']['id']=null;  ; ?>");    
        alert ("<?php echo  $this->data['Teacher2']['id'] ; ?>"); 
        }
          });*/
  </script>
 <?/* $options = array(
           /* array(
                'name' => 'usertype',
                'value' => '',
                'disabled' => TRUE,
                'selected' => TRUE
            ),*/
    /* 'usertype',
            'athlete',
            'trainer'
            );

echo $this->Form->input('User.usertype_id', array('type' => 'select', 'options' => $options,'empty'=>TRUE, 'selected'=>TRUE,'value'=>  '2'));*/?>
</div>
