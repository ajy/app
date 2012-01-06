<?=$html->css(array('reset','button','add_edit','jquery.fancybox'));?>
 <?= $javascript->link(array('jquery-1.5.1.min','jquery.dataTables','TableTools','ZeroClipboard','jquery.fancybox.pack','config','add_edit'));?>
    
<style>
    a              { color: purple; text-decoration: none; }

</style>
<script>

   
</script>
 <div id="header"><?php __('Edit Password'); ?></div>
<?php
	echo $this->Form->create('User',array('action' => 'changePassword'));
	echo $this->Form->input('id');
	echo $this->Form->input('new password', array('type' => 'password'));
	echo $this->Form->input('confirm password', array('type' => 'password'));
         //echo $this->Html->link(__('Back', true), array('action' => 'edit',$this->Session->read("Auth.User.id")));
?>
	   <footer>

<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="close();" />

</div>
<div id="submit">
 <input class="btn info" type="submit" value="Save" />
</div>
<? $form->end();?>
 
   </footer>

