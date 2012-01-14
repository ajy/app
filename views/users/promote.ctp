<?php echo $html->css(array('reset','submitButton','add_edit'));?>
<?php
echo $this->Form->create('User',array('action' => 'promote'));
echo "Would you like to promote students ";
$classes = array(
	'2A'=>'2A',
	'2B'=>'2B',
	'3A'=>'3A',
	'3B'=>'3B',
	'4A'=>'4A',
	'4B'=>'4B',
	'5A'=>'5A',
	'5B'=>'5B',
	'6A'=>'6A',
	'6B'=>'6B',
	'7A'=>'7A',
	'7B'=>'7B',
	'8A'=>'8A',
	'8B'=>'8B'
	);
echo $this->Form->label('From');
echo $this->Form->select('From',$classes);
echo $this->Form->label('To');
echo $this->Form->select('To',$classes);
echo $this->Form->end('Yes, Promote');
?>
