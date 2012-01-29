
<?php echo $html->css(array('reset','button','others','alerts'));?>

<?php echo $html->script(array('bootstrap-alerts','livevalidation'))?>
<script>
document.title='Forgot password';
 $(function () {$(".message").alert()})
</script>



<div id="header">Forgot Password</div>
<?php   echo $this->Session->flash();
	echo $this->Session->flash('auth');
?>
<div class="container">
    
    <h1>Forgot your password?</h1>
    <p>
        <?php
        Configure::load('feedback');
        if(Configure::read('enable_mails'))echo "To reset your password,enter your registered email address below.A link to reset your password will be sent to it. The email may be marked as spam";
        else echo "This feature is currently disabled, however you can contact an administrator to reset your password";
        ?>
    </p>
   
<?php
	echo $this->Form->create('User',array('action'=>'resetPassword'));
	echo $this->Form->input('email');
?>


<div id="submit">
 <input class="btn primary" type="submit" value="Send" />
</div>

</div>
<footer>
</footer>

<?php echo $this->Form->end();?>

<script>
//validation code placed after the form makes it work
var email = new LiveValidation("UserEmail",{wait: 1000, onlyOnSubmit: true, validMessage: " "});
email.add(Validate.Presence);
email.add(Validate.Email);
</script>
