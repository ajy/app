<?=$html->css(array('reset','button','add_edit'));?>
<script>

$(document).ready(function(){

$('#UserGroupId').attr('selectedIndex', '-1');

$('#UserClass').attr("disabled","disabled")})
 function hide(){
            
            pos = ($('#UserGroupId').val())
            if(pos==3){$('#UserClass').attr("disabled","")}
            else{$('#UserClass').attr("disabled","disabled")}

        }
function close(){
    parent.$.fancybox.close();

}
</script>
<style>
#flashMessage {
  width:100%;
  color:#c43c35;
}
.error-message{
display:inline;
color:#c43c35;
padding-left:30px;
}
footer{
padding-bottom:80px;
}
</style>
<div class="users form">
<div id="header"><?php __('Add User'); ?></div>
<?php
	/*echo $this->Session->flash('auth');*/
        echo $this->Session->flash()
?>
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
<input type="button" value="Cancel" class="btn close" name="Close" onclick="window.close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Add" />
</div>
</footer>

<? $form->end();
?>
 
</div>
