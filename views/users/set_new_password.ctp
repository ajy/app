<?php echo $html->css(array('reset','others','button'));?>
<?php echo $html->script("livevalidation")?>

<div id="header">Reset Password</div>
<?php
	echo $this->Session->flash('auth');
?>
<cake:nocache>
    <div class="container">
 <?php
	echo $this->Form->create('User',array('action'=>'resetPassword/'.$token));
	echo $this->Form->input('username',array('type'=>'hidden'));//not used, but activates autohashing of password, i hope
	echo $this->Form->input('password', array('type' => 'password'));

	echo $this->Form->input('confirm_password', array('type' => 'password'));

	echo $this->Form->input('confirm_password', array('type' => 'password'));	

?>
    <div id="submit">
 <input class="btn info" type="submit" value="Save" />
</div>
    </div>
<footer>


    </footer>
<?php echo $this->Form->end();?>
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
