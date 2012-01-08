
<!DOCTYPE html>
<html > 

    <head> 



        <title>Admin</title> 

        <!--                       CSS                       --> 


        <?= $html->css(array('reset', 'style','jquery.fancybox','button','alerts')); ?>
        <?= $html->css(array('demo_table')); ?>


        <?= $javascript->link(array('jquery-1.5.1.min', 'jquery.dataTables', 'jquery.fancybox.pack')); ?>
	<?= $javascript->link(array('config','add_edit'));?>

        <script>
            $(document).ready(function(){
                $('.subjects').dataTable();
            });

        </script>
        
        <style type="text/css" > 
            html{
                
            }
                .add{
                         float:right;
                         padding-right:10px;
                         position:relative;
                         top:20px;
                         
                          }
                 .btn{
                    font-weight:bold;
                    padding:10px;
                }
        </style> 
        
<script>

 parent.$.fancybox.close()
 //$(document).ready(function(){parent.location.reload();});
 
  
</script>
    </head> 

    <body>
    

        <div id="body-wrapper"> 

        <?php
	/*echo $this->Session->flash('auth');*/
        echo $this->Session->flash()
?>


            <div id="main-content"> <!-- Main Content Section with everything --> 

                <noscript> <!-- Show a notification if the user has disabled javascript -->
                <div class="notification error png_bg">
                    <div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                    </div>
                </div>
                </noscript> 

                <!-- Page Head  -->
                
                
                

       
                <div class="clear"></div> <!-- End .clear --> 
                     <div class="clear"></div> <!-- End .clear --> 
                   <div id="pHead">
                <h2>Subjects</h2> 
                </div>
                <?= $html->tag('div',$html->link('Add Subject',array('controller'=>'subjects','action'=>'add'),array('escape'=>false,'class'=>'btn success modal2'))
                  ,array('class' => 'add'))?>
                <div class="content-box"><!-- Start Content Box --> 

                    <div class="content-box-header"> 

                        <h3></h3> 
                        <div>
                            <ul class="content-box-tabs"> 
                                <li><a href="#tab-1" class="default-tab">Semester 4</a></li>  
                                <li><a href="#tab-2">Semester 6</a></li> 
                                <li><a href="#tab-3">Semester 8</a></li>
                            </ul> 
                        </div>
                        <div class="clear"></div> 

                    </div> <!-- End .content-box-header --> 

                    <div class="content-box-content"> 

                        <div class="tab-content default-tab" id="tab-1"> <!-- This is the target div. id must match the href of this div's tab --> 

                           

                            <table cellpadding="0" cellspacing="0" border="0" class="display subjects"> 


                                <thead> 
                                    <tr> 
                                        <th>Name</th> 
                                        <th>Code</th> 
                                        <th>Class </th>
                                        <th>Teacher 1</th>
                                        <th>Teacher 2</th>
                                        <th>Actions </th>
                                    </tr> 
                                    
                               </thead> 

                                <tfoot> 
                                    <tr> 
                                       <!--<td colspan="6"> 
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
                                  // debug($subjects);
                                   /* debug($teacher1);
                                    debug($teacher2);*/
                                    for ($i=0;$i<count($subjects);$i++){ 
		if($subjects[$i]['subjects']['class']=="4A"||$subjects[$i]['subjects']['class']=="4B"){
	?>
	<tr>
		
		<td><?php echo $subjects[$i]['subjects']['name']; ?></td>
		<td class="center"><?php echo $subjects[$i]['subjects']['code']; ?></td>
		<td class="center"><? echo  $subjects[$i]['subjects']['class']; ?></td>
		<td class="center"><?php echo $teacher1[$i][0]['users']['name']!=NULL? $teacher1[$i][0]['users']['name']:"-"; ?></td>
               <td class="center"><?php echo $teacher2[$i][0]['users']['name']!=NULL? $teacher2[$i][0]['users']['name']:"-"; ?></td>
               
                <td class="center"> 
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjects[$i]['subjects']['id']),array('class'=>'modal2')); ?>&nbsp;&nbsp;
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete',$subjects[$i]['subjects']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjects[$i]['subjects']['id'])); ?>
		</td>
	
	</tr>	
        <?php }}  ?>
                                </tbody> 

                            </table> 

                        </div> <!-- End #tab1 --> 

                        <!-- Start #tab2 --> 
                        <div class="tab-content " id="tab-2">
                           
                            
                            <table cellpadding="0" cellspacing="0" border="0" class="display subjects"> 


                                <thead> 
                                    <tr> 
                                        <th>Name</th> 
                                        <th>Code</th> 
                                        <th>Class </th>
                                        <th>Teacher 1</th>
                                        <th>Teacher 2</th>
                                        <th>Actions </th>
                                    </tr> 
                                    
                               </thead> 

                                <tfoot> 
                                    <tr> 
                                       <!--<td colspan="6"> 
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
                                    for ($i=0;$i<count($subjects);$i++){ 
		if($subjects[$i]['subjects']['class']=="6A"||$subjects[$i]['subjects']['class']=="6B"){
	?>
	<tr>
		
		<td><?php echo $subjects[$i]['subjects']['name']; ?></td>
		<td class="center"><?php echo $subjects[$i]['subjects']['code']; ?></td>
		<td class="center"><? echo  $subjects[$i]['subjects']['class']; ?></td>
		<td class="center"><?php echo $teacher1[$i][0]['users']['name']!=NULL? $teacher1[$i][0]['users']['name']:"-"; ?></td>
               <td class="center"><?php echo $teacher2[$i][0]['users']['name']!=NULL? $teacher2[$i][0]['users']['name']:"-"; ?></td>
               
                <td class="center"> 
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjects[$i]['subjects']['id']),array('class'=>'modal2')); ?>&nbsp;&nbsp;
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete',$subjects[$i]['subjects']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjects[$i]['subjects']['id'])); ?>
		</td>
	
	</tr>	
        <?php }}  ?>
                                </tbody> 

                            </table> 
                        </div>

                        <!-- End #tab2 --> 

                           <!-- Start #tab3 --> 
                        <div class="tab-content " id="tab-3">
                            
                            <table cellpadding="0" cellspacing="0" border="0" class="display subjects"> 


                                <thead> 
                                    <tr> 
                                        <th>Name</th> 
                                        <th>Code</th> 
                                        <th>Class </th>
                                        <th>Teacher 1</th>
                                        <th>Teacher 2</th>
                                        <th>Actions </th>
                                    </tr> 
                                    
                               </thead> 

                                <tfoot> 
                                    <tr> 
                                       <!--<td colspan="6"> 
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
                                
                                    for ($i=0;$i<count($subjects);$i++){ 
		if($subjects[$i]['subjects']['class']=="8A"||$subjects[$i]['subjects']['class']=="8B"){
	?>
	<tr>
		
		<td><?php echo $subjects[$i]['subjects']['name']; ?></td>
		<td class="center"><?php echo $subjects[$i]['subjects']['code']; ?></td>
		<td class="center"><? echo  $subjects[$i]['subjects']['class']; ?></td>
		<td class="center"><?php echo $teacher1[$i][0]['users']['name']!=NULL? $teacher1[$i][0]['users']['name']:"-"; ?></td>
               <td class="center"><?php echo $teacher2[$i][0]['users']['name']!=NULL? $teacher2[$i][0]['users']['name']:"-"; ?></td>
               
                <td class="center"> 
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjects[$i]['subjects']['id']),array('class'=>'modal2')); ?>&nbsp;&nbsp;
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete',$subjects[$i]['subjects']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjects[$i]['subjects']['id'])); ?>
		</td>
	
	</tr>	
        <?php }}  ?>
                                </tbody> 

                            </table> 



                        </div>

                        <!-- End #tab3 --> 

                        <div id="footer"> 
                            <small> <!-- Remove this notice or replace it with whatever you want 
                                &#169; Copyright 2011 PESIT 	</small> -->
                        </div><!-- End #footer --> 

                    </div> <!-- End #main-content --> 


                </div>

                </body> 

                </html> 
