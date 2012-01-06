 <?=$html->css(array('reset','add_edit','button'));?> 
<?php
	echo $this->Session->flash('auth');
?>
<div id="header">Reset Password</div>
<?php
	echo $this->Form->create('User',array('action'=>'resetPassword/'.$token));
	echo $this->Form->input('new password', array('type' => 'password'));
	echo $this->Form->input('confirm password', array('type' => 'password'));
?>
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="close();" />

</div>
<div id="submit">
 <input class="btn info" type="submit" value="Save" />
</div>
    </footer>
<? $form->end();?>
