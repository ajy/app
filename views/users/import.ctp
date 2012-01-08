<?=$html->css(array('reset','button','add_edit'));?>
<script>function close(){

    parent.$.fancybox.close( );
}
</script>
<style>
    
    #flashMessage {
  width:100%;
  color:#c43c35;
  
}
.error-message{
display:inline;
color:#c43c35;
padding-left:30px;
}

</style>
<div id="header">Import Users </div>
<?php
	echo $this->Session->flash();?>
<div class="users form">
    <p> &nbsp; <?php __('Choose a csv file to be imported'); ?></p>
<?php
echo $this->Form->create('User',array('type'=>'file'));
?>
<fieldset>
<?php
echo $this->Form->file('File');
?>
</fieldset>
 <footer>

<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick=" window. close();" />

</div>
<div id="submit">
 <input class="btn danger" type="submit" value="Import" />
</div>
<? $form->end();?>
 
   </footer>

</div>
