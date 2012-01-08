 <?=$html->css(array('reset','add_edit','button'));?> 
<style>
    legend{
        visibility: hidden;
    }
</style>

<div id="header">Send Reset Password mail to</div>
<?php   echo $this->Session->flash();
	echo $this->Session->flash('auth');?>
	<?echo $this->Form->create('User',array('action'=>'resetPassword'));
	echo $this->Form->inputs(array(
		
		'email'
	));
	
?>

<footer>
<!--<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="close();" />

</div>-->
<div id="submit">
 <input class="btn info" type="submit" value="Send" />
</div>
    </footer>
<? $form->end();?>