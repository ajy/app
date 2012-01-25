<?php echo $html->css(array('reset','button','add_edit'));?>
<script>
function close(){
    parent.$.fancybox.close();
}
</script>
<style>
/*    footer{
padding-bottom:80px;
}*/
</style>
<div id="header"><?php __('Enroll Students'); ?></div>
<?php
echo $this->Form->create('User');
echo "All saved enrollments will be lost, are you sure you want to continue?";
echo $this->Form->input('ans',array('type'=>'hidden', 'value' => 'Y'));
echo $this->Form->end();
?>
<br>
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="window.close();" />

</div>
<div id="submit">
 <input class="btn danger" type="submit" value="Enroll" />
</div>
</footer>
