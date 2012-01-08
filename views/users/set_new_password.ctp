 <?=$html->css(array('reset','add_edit','button'));?> 

<div id="header">Reset Password</div>
<?php
	echo $this->Session->flash('auth');
?>
 <?php
	echo $this->Form->create('User',array('action'=>'resetPassword/'.$token));
	echo $this->Form->input('username',array('type'=>'hidden'));//not used, but activates autohashing of password, i hope
	echo $this->Form->input('password', array('type' => 'password'));
	echo $this->Form->input('confirm_password', array('type' => 'password'));
	echo $this->Form->end('Submit');
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
