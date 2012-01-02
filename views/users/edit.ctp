
<?=$html->css(array('reset','submitButton','add_edit'));?>
<style>
    a              { color: purple; text-decoration: none; }

</style>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Edit User'); ?></legend>
	<?php
               
		 echo $this->Form->input('id');
                 if(($this -> Session -> read("Auth.User.group_id"))==1)
                 echo $this->Form->input('name',array('disabled'=>'true'));
		echo $this->Form->input('username');?>
                <label >Password</label>
        <? echo $this->Html->link(__('Change Password', true), array('action' => 'changePassword', $id));
                 echo $this->Form->input('email');
	  if(($this -> Session -> read("Auth.User.group_id"))==1)
		echo $this->Form->input('group_id');
                  $classes=$this->requestAction('/subjects/getClass');
                  $selected=print_r($class);
            ?>
                 <div id="Class">   <label> Class</label>
		 <select name="data[User][class]" id="UserClass" disabled >
                               <?foreach($classes as $class):
                                   if($class['subjects']['class']== $selected){
                                   ?>
                        <option><?=$class['subjects']['class'];?></option><? } 
                                else   { ?>
                         <option><?=$class['subjects']['class'];?></option> <? } ?>
                      <?  endforeach;?>  
                   ?> </select></div>
                <? echo $this->Form->input('class',array('empty'=>$class['subjects']['class'] ));?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>

</div>


