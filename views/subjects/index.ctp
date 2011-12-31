
<!DOCTYPE html>
<html > 

    <head> 



        <title>Admin</title> 

        <!--                       CSS                       --> 

        <?= $html->css(array('reset', 'style','jquery.fancybox-1.3.4','button_green')); ?>
        <?= $html->css(array('media/css/demo_table', 'jquery-ui-1.8.14.custom/css/ui-lightness/jquery-ui-1.8.14.custom')); ?>

        <?= $javascript->link(array('js/jquery', 'js/jquery.dataTables', 'js/jquery-ui-1.8.14.custom.min','jquery.fancybox-1.3.4.pack')); ?>


        <script>
            $(document).ready(function(){
                $('.subjects').dataTable({"bJQueryUI":true});
            });

             function fnShowHide(iCol)
			{
				/* Get the DataTables object again - this is not a recreation, just a get of the object */
				var oTable = $('#example').dataTable();
				
				var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
				oTable.fnSetColumnVis( iCol, bVis ? false : true );
                               
                           
                            
                                
			}
        </script>
          <?= $javascript->link(array('config','add_edit'));?>

        <style type="text/css" > 
            html{
                
            }
              .green{
                         float:right;
                         padding:10px;
                         position:relative;
                         top:10px;
                          } 
        </style> 

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

                <!-- Page Head  -->
                
                
                

       
                <div class="clear"></div> <!-- End .clear --> 
                     <div class="clear"></div> <!-- End .clear --> 
                   <div id="pHead">
                <h2>Subjects</h2> 
                </div>
                <?= $html->link($html->tag('span','Add Subject',array('class' => 'green')),array('controller'=>'subjects','action'=>'add'),array('escape'=>false,'class'=>'modal'));?>
              
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
                                        <th  rowspan="2">Name</th> 
                                        <th  rowspan="2">Code</th> 
                                        <th  colspan="2">Section A </th>
                                        <th  colspan="2">Section B </th>
                                        <th  rowspan="2">Actions </th>
                                    </tr> 
                                    
                                   <tr>
                                                <th>Teacher 1</th>
                                                <th>Teacher 2</th>
                                                <th>Teacher 1</th>
                                                <th>Teacher 2</th>
			
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
		if($subjects[$i]['s1']['class']=="4A"||$subjects[$i]['s1']['class']=="4B"){
	?>
	<tr>
		
		<td><?php echo $subjects[$i]['s1']['name']; ?></td>
		<td class="center"><?php echo $subjects[$i]['s1']['code']; ?></td>
		<td class="center"><? echo $teacher1[$i]['a'][0]['users']['name']; ?></td>
		<td class="center"><?php echo $teacher2[$i]['a'][0]['users']['name']!=NULL? $teacher2[$i]['a'][0]['users']['name']:"-"; ?></td>
                <td class="center"><?echo $teacher1[$i]['b'][0]['users']['name']; ?></td>
		<td class="center"><?php echo$teacher2[$i]['b'][0]['users']['name']!=NULL?$teacher2[$i]['b'][0]['users']['name']:"-"; ?></td>
               
                <td class="center"> 
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjects[$i]['s1']['id']),array('class'=>'modal')); ?>&nbsp;&nbsp;
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete',$subjects[$i]['s1']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjects[$i]['s1']['id'])); ?>
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
                                        <th rowspan="2" class="center"><input class="check-all" type="checkbox" /></th> 
                                        <th  rowspan="2">Name</th> 
                                        <th  rowspan="2">Code</th> 
                                        <th  colspan="2">Section A </th>
                                        <th  colspan="2">Section B </th>
                                        <th  rowspan="2">Actions </th>
                                    </tr> 
                                    
                                   <tr>
                                                <th>Teacher 1</th>
                                                <th>Teacher 2</th>
                                                <th>Teacher 1</th>
                                                <th>Teacher 2</th>
			
                                    </tr>
                                </thead> 

                                <tfoot> 
                                    <tr> 
                                       <td colspan="6"> 
                                            <div class="bulk-actions align-left"> 
                                                <select name="dropdown"> 
                                                    <option value="option1">Choose an action...</option> 
                                                    <option value="option2">Edit</option> 
                                                    <option value="option3">Delete</option> 
                                                </select> 
                                                <a class="button" href="#">Apply to selected</a> 
                                            </div> 

                                            <div class="clear"></div> 
                                        </td> 
                                    </tr> 
                                </tfoot> 

                                <tbody> 
                                      <?php
                                     
	
	for ($i=0;$i<count($subjects);$i++){
		if($subjects[$i]['s1']['class']=="6A"||$subjects[$i]['s1']['class']=="6B"){
	?>
	<tr>
		
		<td class="center"><input class="check-all" type="checkbox" /></td> 
                <td><?php echo $subjects[$i]['s1']['name']; ?></td>
		<td class="center"><?php echo $subjects[$i]['s1']['code']; ?></td>
		<td class="center"><? echo $teacher1[$i]['a'][0]['users']['name']; ?></td>
		<td class="center"><?php echo $teacher2[$i]['a'][0]['users']['name']!=NULL? $teacher2[$i]['a'][0]['users']['name']:"-"; ?></td>
                <td class="center"><?echo $teacher1[$i]['b'][0]['users']['name']; ?></td>
		<td class="center"><?php echo$teacher2[$i]['b'][0]['users']['name']!=NULL?$teacher2[$i]['b'][0]['users']['name']:"-"; ?></td>
               
                <td class="center">   <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjects[$i]['s1']['id']),array('class'=>'modal')); ?> &nbsp;&nbsp;
			 <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete',$subjects[$i]['s1']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjects[$i]['s1']['id'], $subjects[$i]['s2']['id'])); ?>
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
                                        <th rowspan="2" class="center"><input class="check-all" type="checkbox" /></th> 
                                        <th  rowspan="2">Name</th> 
                                        <th  rowspan="2">Code</th> 
                                        <th  colspan="2">Section A </th>
                                        <th  colspan="2">Section B </th>
                                        <th  rowspan="2">Actions </th>
                                    </tr> 
                                    
                                   <tr>
                                                <th>Teacher 1</th>
                                                <th>Teacher 2</th>
                                                <th>Teacher 1</th>
                                                <th>Teacher 2</th>
			
                                    </tr>
                                </thead> 

                                <tfoot> 
                                    <tr> 
                                       <td colspan="6"> 
                                            <div class="bulk-actions align-left"> 
                                                <select name="dropdown"> 
                                                    <option value="option1">Choose an action...</option> 
                                                    <option value="option2">Edit</option> 
                                                    <option value="option3">Delete</option> 
                                                </select> 
                                                <a class="button" href="#">Apply to selected</a> 
                                            </div> 

                                            <div class="clear"></div> 
                                        </td> 
                                    </tr> 
                                </tfoot> 

                                <tbody> 
                                      <?php
                                     
	
	for ($i=0;$i<count($subjects);$i++){
		if($subjects[$i]['s1']['class']=="8A"||$subjects[$i]['s1']['class']=="8B"){
	?>
	<tr>
		<td class="center"><input class="check-all" type="checkbox" /></td> 
		<td><?php echo $subjects[$i]['s1']['name']; ?></td>
		<td class="center"><?php echo $subjects[$i]['s1']['code']; ?></td>
		<td class="center"><? echo $teacher1[$i]['a'][0]['users']['name']; ?></td>
		<td class="center"><?php echo $teacher2[$i]['a'][0]['users']['name']!=NULL? $teacher2[$i]['a'][0]['users']['name']:"-"; ?></td>
                <td class="center"><?echo $teacher1[$i]['b'][0]['users']['name']; ?></td>
		<td class="center"><?php echo$teacher2[$i]['b'][0]['users']['name']!=NULL?$teacher2[$i]['b'][0]['users']['name']:"-"; ?></td>
               
                <td class="center">   <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjects[$i]['s1']['id']),array('class'=>'modal')); ?> &nbsp;&nbsp;
			 <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete',$subjects[$i]['s1']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjects[$i]['s1']['id'], $subjects[$i]['s2']['id'])); ?>
		</td>
	
	</tr>	
        <?php } } ?>
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
