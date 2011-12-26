<?php
$html->css(array('reset','submitButton','add_edit'));
?>
<div class="users form">
<div id="header"><?php __('Choose file to be uploaded'); ?></div>
<?php
echo $this->Form->create('User',array('type'=>'file'));
?>
<fieldset>
<?php
echo $this->Form->file('File');
?>
</fieldset>
<?php
echo $this->Form->end(__('Upload', true));
?>
</div>
