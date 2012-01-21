<?php echo $html->css(array('reset','add_edit','button'));?>
<?php echo $html->script("livevalidation")?>
<style>
    legend{
        visibility: hidden;
    }
</style>

<div id="header">Send Reset Password mail to</div>
<?php   echo $this->Session->flash();
	echo $this->Session->flash('auth');
?>
<?php
	echo $this->Form->create('User',array('action'=>'resetPassword'));
	echo $this->Form->input('email');
?>
<footer>
<!--<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="close();" />
</div>-->
<div id="submit">
 <input class="btn info" type="submit" value="Send" />
</div>
    </footer>
<?php echo $this->Form->end();?>
<script>
//validation code placed after the form makes it work
var email = new LiveValidation("UserEmail",{wait: 1000, onlyOnSubmit: true, validMessage: ""});
email.add(Validate.Presence);
email.add(Validate.Email);
</script>
