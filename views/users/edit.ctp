<?=$html->css(array('reset','submitButton','add_edit'));?>
<style>
    a              { color: purple; text-decoration: none; }
</style>
<div class="users form">
     <div id="header"><?php __('Edit User'); ?></div>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
       
        <?php
        $user=$this->Session->read("Auth.User");
        echo $this->Form->input('id');
        if ($user['group_id'] == 1){
            echo $this->Form->input('username');
            echo $this->Form->input('name');
        }?>
        <label >Password</label>
        <? echo $this->Html->link(__('Change Password', true), array('action' => 'changePassword', $user['id']));
	// echo $html->link($html->tag('span','Comment',array('class' => 'green')),array('action'=>'changePassword', $user['id']),array('escape'=>false));
            		
        echo $this->Form->input('password', array('type'=> 'hidden'));//has to be there for user to be saved correctly
        echo $this->Form->input('email');
        if ($user['group_id'] == 1)
            echo $this->Form->input('group_id');
        ?>
    </fieldset>
        <?php echo $this->Form->end(__('Submit', true)); ?>
</div>


