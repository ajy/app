<?=$html->css(array('reset','button','add_edit'));?>
<?=$html->script("livevalidation")?>
<script>
$(document).ready(function(){

$('#UserGroupId').attr('selectedIndex', '-1');

$('#UserClass').attr("disabled","disabled")})
 function hide(){
            
            pos = ($('#UserGroupId').val())
            if(pos==3){$('#UserClass').attr("disabled","")}
            else{$('#UserClass').attr("disabled","disabled")}

        }
function close(){
    parent.$.fancybox.close();

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
<div class="users form">
<div id="header"><?php __('Add User'); ?></div>
<?php
	/*echo $this->Session->flash('auth');*/
        echo $this->Session->flash()
?>
<?php echo $this->Form->create('User');?>
    <fieldset>
<?php
	echo $this->Form->input('username');
	echo $this->Form->input('name');
	echo $this->Form->input('group_id');
?>
<script>
	$("#UserGroupId").bind("change", function() {hide()})
</script>
<?
	echo $this->Form->input('class');
	echo $this->Form->input('email');
?>
    </fieldset>
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="window.close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Add" />
</div>
</footer>

<? $form->end();?>
</div>
<script>
//validation code placed after the form makes it work
var userName = new LiveValidation("UserUsername",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
userName.add(Validate.Presence);
var name = new LiveValidation("UserName",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
name.add(Validate.Presence);
var group = new LiveValidation("UserGroupId",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
group.add(Validate.Inclusion, {within: [1,2,3]});
var theClass = new LiveValidation("UserClass",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});//class is a keyword in js
theClass.add(Validate.Format, {pattern: /[1-8][AB]/i, failureMessage: "Not a valid class"});
var email = new LiveValidation("UserEmail",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
email.add(Validate.Presence);
email.add(Validate.Email);
</script>
