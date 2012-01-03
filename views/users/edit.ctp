<?=$html->css(array('reset','submitButton','add_edit'));?>
<style>
    a              { color: purple; text-decoration: none; }

</style>


<script>
    var pos;
    $(document).ready(function(){toggle();   });
function toggle(){
   
    
    pos=($('#UserGroupId').val());
     if(pos!=3){$('#Class').hide();
     $('#UserClass').attr('selectedIndex', '-1');
      
}
     else{
         $('#Class').show();
      }
}
</script>
<div class="users form">
 <div id="header"><?php __('Edit User'); ?></div>
<?php echo $this->Form->create('User');?>
	
		
	<?php
              	echo $this->Form->input('id');
                if(($this -> Session -> read("Auth.User.group_id"))==1)
                     echo $this->Form->input('username');
                else{
                    echo $this->Form->input('username',array('readonly'=>'readonly'));
                    }
                if(($this -> Session -> read("Auth.User.group_id"))==1)
                     echo $this->Form->input('name');
                else{
                    echo $this->Form->input('name',array('readonly'=>'readonly'));
                    }
                    echo $this->Form->input('email');
                echo $this->Form->input('password',array('type'=>'hidden'));
                echo '<label>Password</label>';
                echo $this->Html->link(__('Change Password', true), array('action' => 'changePassword', $id));
                if(($this -> Session -> read("Auth.User.group_id"))==1)
                echo $this->Form->input('group_id');
                else{
                         echo $this->Form->input('group_id',array('disabled'=>'disabled'));
                    }
                 $classes=$this->requestAction('/subjects/getClass');
                 $selected=$this->data['User']['class'];
                 
                    ?>
                     <script>$("#UserGroupId").bind("change", function() {
           
            toggle()})	</script>
   		 <div id="Class">   <label> Class</label>
                <?  if(($this -> Session -> read("Auth.User.group_id"))==1){ ?>
                     <select name="data[User][class]" id="UserClass">
                <?}
                 else{?>
                    <select name="data[User][class]" id="UserClass" disabled>
                                       
                    <? }   
                                foreach($classes as $class):
                                 if($class['subjects']['class']== $selected){
                     
                   echo '<option selected>'. $class['subjects']['class'].'</option>'; }
                                else   { 
                   echo '<option >'. $class['subjects']['class'].'</option>'; }

                         endforeach;
                 ?>  
                
                 </select>
                     
          </div>

<?php echo $this->Form->end(__('Submit', true));?>
</div>


