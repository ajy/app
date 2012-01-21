<?php echo $this->Html->script('autoresize.jquery.js'); ?> 
<?php echo $html->script("livevalidation")?>
<script>
$('textarea').autoResize({
    // On resize:
    onResize : function() {
        $(this).css({opacity:0.8});
    },
    // After resize:
    animateCallback : function() {
        $(this).css({opacity:1});
    },
    // Quite slow animation:
    animateDuration : 300,
    // More extra space:
    extraSpace : 400
});
</script>
<?php echo $html->css(array('Form','submitButton'));?>
<div class="users form">
<?php echo $this->Form->create('User', array('action' => 'feedbackEmail'));?>
	<fieldset>
		<legend><?php __('Your Feedback'); ?></legend>
	<?php
		echo $this->Form->input('subject',array('maxLength' => 25,'default' => $subject));//The subject of the email
		echo $this->Form->input('feedback', array('type' => 'textarea','default' => $message));//the content of the email
	?>
	</fieldset>
<?php echo $this->Form->end(__('Send to your HOD', true));?>
</div>
<script>
//validation code placed after the form makes it work
var subject = new LiveValidation("UserSubject",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
subject.add(Validate.Presence);
var feedback = new LiveValidation("UserFeedback",{wait: 1000, onlyOnSubmit: true, validMessage: "It seems to be alright"});
feedback.add(Validate.Presence);
</script>
