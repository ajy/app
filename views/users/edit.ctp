<?=$html->css(array('reset','submitButton','add_edit'));?>

<div class="users form">
     <div id="header"><?php __('Edit User'); ?></div>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
       
        <?php
        echo $this->Form->input('id');
        if (($this->Session->read("Auth.User.group_id")) == 1)
            echo $this->Form->input('username');
      //  if (($this->Session->read("Auth.User.group_id")) == 1)
            echo $this->Form->input('password');
        echo $this->Form->input('email');
        if (($this->Session->read("Auth.User.group_id")) == 1)
            echo $this->Form->input('group_id');
        ?>
    </fieldset>
        <?php echo $this->Form->end(__('Submit', true)); ?>
</div>


