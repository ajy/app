<?php echo $html->css(array('reset','button','add_edit'));?>
<script>
function close(){
    parent.$.fancybox.close();
}
</script>
<?php
echo $this->Form->create('User');
echo "All saved enrollments will be lost, are you sure you want to continue?";
echo $this->Form->input('ans',array('type'=>'hidden', 'value' => 'Y'));
echo $this->Form->end();
?>
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="window.close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Add" />
</div>
</footer>
