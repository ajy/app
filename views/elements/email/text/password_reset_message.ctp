Did you request a password reset for your feedback account (<?php echo $username ?>)?

If you requested this password reset, go here:
<?php echo 'http://'.env('SERVER_NAME').$this->Html->url(array("controller" => "users",    "action" => "resetPassword",$emailtoken))?>
