<?=$html->css(array('reset','button','add_edit','jquery.fancybox'));?>
     
<style>
    a              { color: purple; text-decoration: none; }

</style>
<script>

function close(){
 parent.$.fancybox.close( );
}
   
</script>
 <div id="header"><?php __('Edit Password'); ?></div>
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
<? $form->end();?>
 
   </footer>

