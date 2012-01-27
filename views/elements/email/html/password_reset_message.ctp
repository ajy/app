Did you request a password reset for your e-feedback account (<?php echo $username ?>)?

If you requested this password reset, go here:
<?php echo Router::url($this->here, true)."/".$emailtoken;?>
