Use this link to set your new password-
<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'resetPassword', $emailtoken),true);?>

