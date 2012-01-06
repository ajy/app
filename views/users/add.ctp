<?=$html->css(array('reset','button','add_edit'));?>
<script>
$(document).ready(function(){

$('#UserGroupId').attr('selectedIndex', '-1');

$('#Class').show()})
 function hide(){
            $('#Class').hide()
            pos = ($('#UserGroupId').val())
            if(pos==3)$('#Class').show()


        }
</script>
<div class="users form">
<div id="header"><?php __('Add User'); ?></div>

<?php echo $this->Form->create('User');?>
    <fieldset>

    <?php
            echo $this->Form->input('username',array('required'=>'1'));
            echo $this->Form->input('name');
            echo $this->Form->input('group_id');
              $classes=$this->requestAction('/subjects/getClass');
             ?>
         <script>$("#UserGroupId").bind("change", function() {

        hide()})	</script>
     <!--    <div id="Class">   <label> Class</label>
             <select name="data[User][class]" id="UserClass" >
                           <?foreach($classes as $class):?>
                    <option><?=$class['subjects']['class']?></option>
                  <?  endforeach;?>
               ?> </select></div>-->
 <? echo $this->Form->input('class');
         
 echo $this->Form->input('email');

    ?>
    </fieldset>
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Add" />
</div>
</footer>
<? $form->end();?>
 
</div>
