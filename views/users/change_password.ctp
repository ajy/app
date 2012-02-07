<?php echo $html->css(array('reset','button','add_edit','jquery.fancybox'));?>
<?php echo $html->script("livevalidation")?>
<style>
    a              { color: purple; text-decoration: none; }
/*    footer{
        padding-bottom:100px;;
    }*/
</style>
<script>

function close(){
 parent.$.fancybox.close( );
}
   
</script>
 <div id="header"><?php __('Change Password'); ?></div>
<cake:nocache>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('id');
	echo $this->Form->input('username',array('type'=>'hidden'));//not used but it activates the automatic password hashing
	echo $this->Form->input('password', array('type' => 'password'));
	echo $this->Form->input('confirm_password', array('type' => 'password'));
      ?>
	   <footer>

<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="window.close();" />

</div>
<div id="submit">
 <input class="btn info" type="submit" value="Save" />
</div>
<?php echo $this->Form->end();?> 
</footer>
</cake:nocache>
<script>
//validation code placed after the form makes it work
var password = new LiveValidation("UserPassword",{wait: 1000, onlyOnSubmit: true, validMessage: " "});
password.add(Validate.Length, {minimum:5,maximum:15});
password.add(Validate.Presence);
var confirmPassword = new LiveValidation("UserConfirmPassword",{wait: 1000, onlyOnSubmit: true, validMessage: " "});
confirmPassword.add(Validate.Confirmation, {match:"UserPassword", failureMessage:"The passwords don't match"});
confirmPassword.add(Validate.Presence);
</script>
