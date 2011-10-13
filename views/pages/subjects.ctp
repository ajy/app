
<!DOCTYPE html>
<html > 

    <head> 



        <title>Admin</title> 

        <!--                       CSS                       --> 

         <?=$html->css(array('reset','style'));?>
        <?=$html->css(array('media/css/demo_table','jquery-ui-1.8.14.custom/css/ui-lightness/jquery-ui-1.8.14.custom'),'import');?>
        
      <?= $javascript->link(array('js/jquery','js/jquery.dataTables','jquery-ui-1.8.14.custom/js/jquery-ui-1.8.14.custom.min'));?>
        

        <script>
            $(document).ready(function(){
                $('#example').dataTable();
            });
        </script>
      <?= $javascript->link(array('config'));?>
 <style type="text/css" title="currentStyle"> 
			  html{
                             overflow:hidden;
                         }
               </style> 
               
    </head> 

    <body>
        <?php  print_r($this->$subjects);?>

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
                <h2>Welcome Admin</h2> 



                <div class="clear"></div> <!-- End .clear --> 

                <div class="content-box"><!-- Start Content Box --> 

                    <div class="content-box-header"> 

                        <h3>Content box</h3> 
                        <div>
                            <ul class="content-box-tabs"> 
                                <li><a href="#tab-1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div --> 
                                <li><a href="#tab-2">Forms</a></li> 
                                <li><a href="#tab-3">Another</a></li>
                            </ul> 
                        </div>
                        <div class="clear"></div> 

                    </div> <!-- End .content-box-header --> 

                    <div class="content-box-content"> 

                        <div class="tab-content default-tab" id="tab-1"> <!-- This is the target div. id must match the href of this div's tab --> 



                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example"> 


                                <thead> 
                                    <tr> 
                                        <th><input class="check-all" type="checkbox" /></th> 
                                        <th>Column 1</th> 
                                        <th>Column 2</th> 
                                        <th>Column 3</th> 
                                        <th>Column 4</th> 
                                        <th>Column 5</th> 
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
                                    <tr> 
                                    </tr> 
                                    
                                       ?>
                                        <tr>
                                         <td>No Data Found</td>
                                        </tr>
                                      <?php print_r( $this->$subjects);?>
                                </tbody> 

                            </table> 

                        </div> <!-- End #tab1 --> 
                          
                        <!-- Start #tab2 --> 
                        <div class="tab-content " id="tab-2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                            </p>
                            <p>
                                Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                            </p>
                            <p>
                                Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                            </p>

                        </div>
                             

                        <!-- End #tab2 --> 


                             
                        <div id="footer"> 
                            <small> <!-- Remove this notice or replace it with whatever you want --> 
                                &#169; Copyright 2011 PESIT 	</small> 
                        </div><!-- End #footer --> 

                    </div> <!-- End #main-content --> 


                </div>

                </body> 

                </html> 