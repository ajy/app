<?=$html->css(array('reset','button','add_edit'));?>
<?=$html->script("livevalidation")?>
<style>
    a              { color: purple; text-decoration: none; }

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
<script>
/*	var pos;
	$(document).ready(

function(){toggle();});
 	function toggle(){
 		pos=($('#UserGroupId').val());
 		if(pos!=3){
 			$('#UserClass > option').hide();
 			$('#UserClass').attr('selectedIndex', '-1');
 		}else{
 			$('#UserClass > option').show();
                        
                    }
 	}
*/
function close(){

    parent.$.fancybox.close( );
}
</script>
<div class="users form">
<div id="header"><?php __('Edit User'); ?></div>
<?php
	echo $this->Session->flash('auth');
        echo $this->Session->flash();
?>
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
	echo '<label>Password</label>';
	echo $this->Html->link('Change Password', array('action' => 'changePassword',$this->data['User']['id']));
        if(($this -> Session -> read("Auth.User.group_id"))==3){
        	echo $this->Form->input('class',array('readonly'=>'readonly'));
        }
        if($this->Session->read("Auth.User.group_id")==1){
        	echo $this->Form->input('group_id');
        }
?>
<?php
	if(($this->Session->read("Auth.User.group_id")==1)&&($this->data['User']['group_id']==3)){
        	$classes=$this->requestAction('/subjects/getClass');
        	$selected=$this->data['User']['class'];
?>
<script>
$("#UserGroupId").bind("change", function(){toggle()})</script>
<div id="Class">
<label> Class</label>
<select name="data[User][class]" id="UserClass">
<?php
	foreach($classes as $class):
		if($class['subjects']['class']== $selected){
			echo '<option selected>'. $class['subjects']['class'].'</option>';
		}else{
			echo '<option >'. $class['subjects']['class'].'</option>';
		}
	endforeach;
?>
</select>
</div>
<?php }/*end of if*/ ?>
   <footer>

<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick=" window. close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Save" />
</div>
<? $form->end();?>
 
   </footer>
</div>
<script>
//validation code placed after the form makes it work
<?php
	if($this->Session->read("Auth.User.group_id")==1){//must be admin for these validations to activate
?>
var userName = new LiveValidation("UserUsername",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
userName.add(Validate.Presence);
var name = new LiveValidation("UserName",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
name.add(Validate.Presence);
var group = new LiveValidation("UserGroupId",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
group.add(Validate.Inclusion, {within: ["1","2","3"]});
<?php
		if($this->data['User']['group_id']==3){//user being edited must be a student for this validation to be added
?>
var theClass = new LiveValidation("UserClass",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});//class is a keyword in js
theClass.add(Validate.Format, {pattern: /[1-8][AB]/i, failureMessage: "Not a valid class"});
<?php
		}/*end of inner if*/
	}/*end of outer if*/
?>
var email = new LiveValidation("UserEmail",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
email.add(Validate.Email);
email.add(Validate.Presence);
</script>
