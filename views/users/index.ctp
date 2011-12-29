
<!DOCTYPE html>
<html > 

    <head> 



        <title>Admin</title> 

        <!--                       CSS                       --> 

         <?=$html->css(array('reset','style','jquery.fancybox-1.3.4'));?>
        <?=$html->css(array('../media/css/demo_table','../media/css/TableTools'));?>
        
      <?= $javascript->link(array('../media/js/jquery','../media/js/jquery.dataTables','../media/js/TableTools','../media/js/ZeroClipboard','jquery.fancybox-1.3.4.pack'));?>
        

        <script>
            $(document).ready(function(){
                $('.example').dataTable({
                    "sDom": 'T<"clear">lfrtip'
                });
            });
        </script>
      <?= $javascript->link(array('config','add_edit'));?>
 <style type="text/css" title="currentStyle"> 
			  html{
                             overflow:hidden;
                         }
               </style> 
<script>
 parent.$.fancybox.close();
</script>
               
    </head> 

    <body>


        <div id="body-wrapper"> <!-- Wrapper for the radial gradient background --> 




            <div id="main-content"> <!-- Main Content Section with everything --> 

                <noscript> <!-- Show a notification if the user has disabled javascript -->
                <div class="notification error png_bg">
                    <div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                    </div>
                </div>
                </noscript> 

                <!-- Page Head --> 
               <!-- <a class="signout" href="#"><?php echo $html->link('Sign out',array('controller'=>'users','action'=>'logout'));?></a>-->
                <div class="clear"></div> <!-- End .clear --> 

                <div class="content-box"><!-- Start Content Box --> 

                    <div class="content-box-header"> 

                        <h3>Users</h3> 
                        <?=$this->Form->create('User',array('action'=>'delete'));?>
                        <div>
                            <ul class="content-box-tabs"> 
                                <li><a href="#tab-1" class="default-tab">Semester 4</a></li> <!-- href must be unique and match the id of target div --> 
                                <li><a href="#tab-2">Semester 6</a></li>
                                <li><a href="#tab-3">Semester 8</a></li>
                                <li><a href="#tab-4">Teachers</a></li>
                                <li><a href="#tab-5">Administrator</a></li>
                            </ul> 
                        </div>
                        <div class="clear"></div> 

                    </div> <!-- End .content-box-header --> 

                    <div class="content-box-content"> 

                        <!-- Start #tab1 -->
                        <div class="tab-content default-tab" id="tab-1"> <!-- This is the target div. id must match the href of this div's tab --> 



                            <table cellpadding="0" cellspacing="0" border="0" class="display example"> 


                                <thead> 
                                    <tr> 
                                        <th>Name</th>
                                        <th>Username</th> 
                                        <th>E-mail</th> 
                                        <th>Actions</th>
                                    </tr> 

                                </thead> 
                                
                                <tfoot> 
                                    <tr> 
                                     <!--   <td colspan="6"> 
                                            <div class="bulk-actions align-left"> 
                                                <select name="dropdown"> 
                                                    <option value="option1">Choose an action...</option> 
                                                    <option value="option2">Edit</option> 
                                                    <option value="option3">Delete</option> 
                                                </select> 
                                                <a class="button" href="#">Apply to selected</a> 
                                            </div> 

                                            <div class="clear"></div> 
                                        </td> -->
                                    </tr> 
                                </tfoot> 
                                
                                <tbody> 
                                  <?php
	$i = 0;
	foreach ($users as $user):
            if($user['User']['class']=="4A"||$user['User']['class']=="4B"){
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	
	<tr<?php echo $class;?>>
		
		<td ><?php echo $user['User']['name']; ?>&nbsp;</td>
		
		<td class="center">
			<?php echo $user['User']['username']; ?>&nbsp;	</td>
		<td class="center"><?php echo $user['User']['email']; ?>&nbsp;</td>
		
		<td  class="center">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id']),array('class'=>'modal')); ?>&nbsp;&nbsp;
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</td>
	</tr>
        
<?php }endforeach; ?>
	</table>
                        </div> 
                        <!-- End #tab1 --> 
                          
                        <!-- Start #tab2 --> 
                        <div class="tab-content " id="tab-2">
                         


                            <table cellpadding="0" cellspacing="0" border="0" class="display example"> 


                                <thead> 
                                    <tr> 
                                        <th>Name</th>
                                        <th>Username</th> 
                                        <th>E-mail</th> 
                                        <th>Actions</th>
                                    </tr> 

                                </thead> 
                                
                                <tfoot> 
                                    <tr> 
                                     <!--   <td colspan="6"> 
                                            <div class="bulk-actions align-left"> 
                                                <select name="dropdown"> 
                                                    <option value="option1">Choose an action...</option> 
                                                    <option value="option2">Edit</option> 
                                                    <option value="option3">Delete</option> 
                                                </select> 
                                                <a class="button" href="#">Apply to selected</a> 
                                            </div> 

                                            <div class="clear"></div> 
                                        </td> -->
                                    </tr> 
                                </tfoot> 
                                
                                <tbody> 
                                  <?php 
                              
	$i = 0;
	foreach ($users as $user):
            if($user['User']['class']=='6A'||$user['User']['class']=="6B"){
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
                
	?>
	
	<tr<?php echo $class;?>>
		
		<td ><?php echo $user['User']['name']; ?>&nbsp;</td>
		
		<td class="center">
			<?php echo $user['User']['username']; ?>&nbsp;	</td>
		<td class="center"><?php echo $user['User']['email']; ?>&nbsp;</td>
		
		<td  class="center">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id']),array('class'=>'modal')); ?>&nbsp;&nbsp;
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</td>
	</tr>
        
<?php }endforeach;     ?>
	</table>
                        </div>    
 
                        <!-- End #tab2 --> 
                        
                        <!-- Start #tab3 -->

                         <div class="tab-content " id="tab-3">
                        

                            <table cellpadding="0" cellspacing="0" border="0" class="display example"> 


                                <thead> 
                                    <tr> 
                                        <th>Name</th>
                                        <th>Username</th> 
                                        <th>E-mail</th> 
                                        <th>Actions</th>
                                    </tr> 

                                </thead> 
                                
                                <tfoot> 
                                    <tr> 
                                     <!--   <td colspan="6"> 
                                            <div class="bulk-actions align-left"> 
                                                <select name="dropdown"> 
                                                    <option value="option1">Choose an action...</option> 
                                                    <option value="option2">Edit</option> 
                                                    <option value="option3">Delete</option> 
                                                </select> 
                                                <a class="button" href="#">Apply to selected</a> 
                                            </div> 

                                            <div class="clear"></div> 
                                        </td> -->
                                    </tr> 
                                </tfoot> 
                                
                                <tbody> 
                                  <?php 
	$i = 0;
	foreach ($users as $user):
            if($user['User']['class']=="8A"||$user['User']['class']=="8B"){
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	
	<tr<?php echo $class;?>>
		
		<td ><?php echo $user['User']['name']; ?>&nbsp;</td>
		
		<td class="center">
			<?php echo $user['User']['username']; ?>&nbsp;	</td>
		<td class="center"><?php echo $user['User']['email']; ?>&nbsp;</td>
		
		<td  class="center">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id']),array('class'=>'modal')); ?>&nbsp;&nbsp;
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</td>
	</tr>
        
<?php }endforeach; ?>
	</table>
                     
                         </div>         
                        <!-- End #tab3 --> 
                       
                        <!-- Start #tab4 -->
                         <div class="tab-content " id="tab-4">
                        

                            <table cellpadding="0" cellspacing="0" border="0" class="display example"> 


                                <thead> 
                                    <tr> 
                                        <th>Name</th>
                                        <th>Username</th> 
                                        <th>E-mail</th> 
                                        <th>Actions</th>
                                    </tr> 

                                </thead> 
                                
                                <tfoot> 
                                    <tr> 
                                     <!--   <td colspan="6"> 
                                            <div class="bulk-actions align-left"> 
                                                <select name="dropdown"> 
                                                    <option value="option1">Choose an action...</option> 
                                                    <option value="option2">Edit</option> 
                                                    <option value="option3">Delete</option> 
                                                </select> 
                                                <a class="button" href="#">Apply to selected</a> 
                                            </div> 

                                            <div class="clear"></div> 
                                        </td> -->
                                    </tr> 
                                </tfoot> 
                                
                                <tbody> 
                                  <?php 
	$i = 0;
	foreach ($users as $user):
           if($user['Group']['id']==2) {
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	
	<tr<?php echo $class;?>>
		
		<td ><?php echo $user['User']['name']; ?>&nbsp;</td>
		
		<td class="center">
			<?php echo $user['User']['username']; ?>&nbsp;	</td>
		<td class="center"><?php echo $user['User']['email']; ?>&nbsp;</td>
		
		<td  class="center">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id']),array('class'=>'modal')); ?>&nbsp;&nbsp;
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</td>
	</tr>
        
<?php }endforeach; ?>
	</table>
                     
                         </div>         
                        <!-- End #tab4 --> 
                           
                        <!-- Start #tab5 -->
                         <div class="tab-content " id="tab-5">
                        
                            <table cellpadding="0" cellspacing="0" border="0" class="display example"> 
                                    

                                <thead> 
                                    <tr> 
                                        <th>Name</th>
                                        <th>Username</th> 
                                        <th>E-mail</th> 
                                        <th>Actions</th>
                                    </tr> 

                                </thead> 
                                
                                <tfoot> 
                                    <tr> 
                                     <!--   <td colspan="6"> 
                                            <div class="bulk-actions align-left"> 
                                                <select name="dropdown"> 
                                                    <option value="option1">Choose an action...</option> 
                                                    <option value="option2">Edit</option> 
                                                    <option value="option3">Delete</option> 
                                                </select> 
                                                <a class="button" href="#">Apply to selected</a> 
                                            </div> 

                                            <div class="clear"></div> 
                                        </td> -->
                                    </tr> 
                                </tfoot> 
                                
                                <tbody> 
                                  <?php 
	$i = 0;
	foreach ($users as $user):
             if($user['Group']['id']==1) {
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	
	<tr<?php echo $class;?>>
		
		<td ><?php echo $user['User']['name']; ?>&nbsp;</td>
		
		<td class="center">
			<?php echo $user['User']['username']; ?>&nbsp;	</td>
		<td class="center"><?php echo $user['User']['email']; ?>&nbsp;</td>
		
		<td  class="center">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id']),array('class'=>'modal')); ?>&nbsp;&nbsp;
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</td>
	</tr>
        
<?php }endforeach; ?>
	</table>
                     
                         </div>         
                        <!-- End #tab5 --> 
                             
                        <div id="footer"> 
                            <small> <!-- Remove this notice or replace it with whatever you want 
                                &#169; Copyright 2011 PESIT 	</small> -->
                        </div><!-- End #footer --> 

                    </div> <!-- End #main-content --> 


                </div>

                </body> 

                </html> 
