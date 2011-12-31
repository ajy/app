<?=$html->css(array('reset','submitButton','add_edit'));?>
<style>
    a              { color: purple; text-decoration: none; }

</style>
<script>
   $(document).ready(function(){$('#Class').hide()})
     function hide(){
                $('#Class').hide()
                pos= ($('#UserGroupId').val())
                if(pos==3)$('#Class').show()
               
               
            }
</script>
<div class="users form">
     <div id="header"><?php __('Edit User'); ?></div>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
       
        <?php
        $user=$this->Session->read("Auth.User");
        echo $this->Form->input('id');
        if ($user['group_id'] != 1)
            echo $this->Form->input('username',array('value'=>$user['username'],'disabled'=> true ));
        else {
                echo $this->Form->input('username',array('value'=>$user['username'],'disabled'=>FALSE ));
}
 if ($user['group_id'] != 1)
            echo $this->Form->input('name',array('value'=>$user['name'],'disabled'=> true ));
        else {
                echo $this->Form->input('name',array('value'=>$user['name'],'disabled'=>FALSE ));
}
        ?>
        <label >Password</label>
        <? echo $this->Html->link(__('Change Password', true), array('action' => 'changePassword', $user['id']));
	
       echo $this->Form->input('email');
        if ($user['group_id'] != 1)
            echo $this->Form->input('group_id',array('value'=>$user['name'],'disabled'=>true ));
        else
             echo $this->Form->input('group_id',array('value'=>$user['name'],'disabled'=>false ));
     
         $classes=$this->requestAction('/subjects/getClass');
        ?>
         <script>$("#UserGroupId").bind("change", function() {
           
            hide()})	</script>

                    <div id="Class">   <label> Class</label>
		 <select name="data[User][class]" id="UserClass" disabled value= <?=$user['class']?> >
                               <?foreach($classes as $class):?>
                        <option><?=$class['subjects']['class']?></option>
                      <?  endforeach;?>  
                   ?> </select></div>
    </fieldset>
        <?php echo $this->Form->end(__('Submit', true)); ?>
</div>


