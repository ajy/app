<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<title></title>
 
               <style type="text/css" title="currentStyle"> 
			  html{
                            overflow:hidden;
                         }
               </style> 
               
		<?= $javascript->link(array('config'));?>
                <?=$html->css(array('reset','style','teacher'));?>
                <?= $javascript->link(array('jquery.fancybox-1.3.4.pack','fbConfig'));?>
                 <?=$html->css(array('jquery.fancybox-1.3.4'));?>     
              
               <script>
               function LoadIFrame(pg)
{
   
    ifr = document.getElementById("ifr");
     ifr.style.display="block";
    switch(pg){
        case 1: ifr.src="../subjects/subjects";
                break;
        case 2: ifr.src="../comments/comments";
                break;
    }
    
}
               </script>
              
               
</head>

<body >
   
    
    <iframe  id="ifr" src="../form_a_records/result" style="width:1366px; height:660px; overflow:auto;" ></iframe>

    <?php $user=($this -> Session -> read("Auth.User"));?>
		<div id="sidebar">
                    <div id="sidebar-wrapper"> 			
			<ul id="main-nav">  <!-- Accordion Menu --> 
				
				<li> 
					<a href="#" onclick="return LoadIFrame(1)" class="nav-top-item current"> 
						Feedback Results
					</a> 
					
				</li> 
					
							
				<li> 
					<a href="#" onclick="return LoadIFrame(2)"class="nav-top-item"> 
						Comments
                                              
					</a> 
					
				</li> 
				
				<li> 
					<a href="#" class="nav-top-item"> 
						Settings
                                        </a> 
                                                  <ul> 
                                                      
						<li><?php echo $html->link('Edit Profile',array('controller'=>'users','action'=>'edit',$user['id']),array('class'=>'modal'));?>
                                                
                                                </li> 
						<li> <?php echo $html->link('Sign out',array('controller'=>'users','action'=>'logout'));
                                                
                                                ?></li> 
				        </ul> 
					
					 
				</li>      
				
			</ul> <!-- End #main-nav --> 
			
				
		
			
			
			
		</div></div> <!-- End #sidebar --> 
		
		
		</div> <!-- End #main-content --> 
                       
	</body> 
</html>
