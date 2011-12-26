<?=$html->css(array('reset','submitButton','add_edit'));?>
<script>
   $(document).ready(function(){$('#Class').hide()})
     function hide(){
                $('#Class').hide()
                pos= ($('#UserGroupId').val())
                if(pos==3)$('#Class').show()
               
               
            }
</script>
<div class="users form">
    <div id="header"><?php __('Add User'); ?></div>

<?php echo $this->Form->create('User');?>
	<fieldset>
		
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('name');
		//echo $this->Form->input('password');
                //echo $this->Form->input('confirm password', array('type' => 'password'));
                 echo $this->Form->input('group_id');
                  $classes=$this->requestAction('/subjects/getClass');
                 ?>
             <script>$("#UserGroupId").bind("change", function() {
           
            hide()})	</script>
             <div id="Class">   <label> Class</label>
		 <select name="data[User][class]" id="UserClass" >
                               <?foreach($classes as $class):?>
                        <option><?=$class['subjects']['class']?></option>
                      <?  endforeach;?>  
                   ?> </select></div>
		<?echo $this->Form->input('email');
               
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
