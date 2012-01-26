<?php echo $html->css(array('reset','LoginBoxstyle','button'));?>
<!--<style>
    footer {
  background-color: #eee;
  min-width: 940px;
  padding: 30px 0;
  text-shadow: 0 1px 0 #fff;
  border-top: 1px solid #e5e5e5;
  -webkit-box-shadow: inset 0 5px 15px rgba(0,0,0,.025);
     -moz-box-shadow: inset 0 5px 15px rgba(0,0,0,.025);
        box-shadow: inset 0 5px 15px rgba(0,0,0,.025);
        
}
.footer p {
  color: #555;
}
</style>-->

<div id="header">

</div>
<?php echo $this->Session->flash('auth');?>
<?php echo $this->Session->flash();?>
<div id="login">
<?php
	
	echo $this->Form->create('User', array('action' => 'login','class' => 'login'));
	echo $this->Form->inputs(array(
		'legend' => false,
		'fieldset' => false,
		'username',
		'password'
	));
	echo '<span id="frgt-pwd"><a href='.$this->Html->url(array("controller" => "users",    "action" => "resetPassword")).'>Forgot your password?</a></span>';
	echo $this->Form->submit("Sign in",array('class' => 'btn primary'));
	echo $this->Form->end();
?>
</div>
<footer>
    
</footer>
