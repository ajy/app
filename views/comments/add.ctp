 <?php echo $html->css(array('reset','add_edit','button'));?> 
<script>
    function close(){

    parent.$.fancybox.close( );
}

</script>
<style>
    textarea{
        width:450px;
    }
</style>
<div class="comments form">
    <div id="header"><?php __('Add Comment'); ?></div>
    
<?php echo $this->Form->create('Comment');?>
	<fieldset>
		
	<?php
                //debug($this -> Session ->read('params'));
		/*echo $this->Form->input('from');
		echo $this->Form->input('to');
		echo $this->Form->input('subject_code');*/
		echo $this->Form->input('comment',array('type'=>'textarea','label'=>''));
	?>
	</fieldset>
  <footer>

<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick=" window. close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Post" />
</div>
<?php $this->Form->end();?>
 
   </footer>


</div>
