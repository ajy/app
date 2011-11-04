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
                <?=$html->css(array('reset','style'));?>
                <?= $javascript->link(array('jquery.fancybox-1.3.4.pack','fbConfig'));?>
                 <?=$html->css(array('jquery.fancybox-1.3.4'));?>     
              
               <script>
               function LoadIFrame(pg)
{
   
    ifr = document.getElementById("ifr");
     ifr.style.display="block";
    switch(pg){
        case 1: ifr.src="../subjects";
                break;
        case 2: ifr.src="../users";
                break;
        case 3: ifr.src="../subjects";
                break;
        case 4: ifr.src="../subjects";
                break;
        case 5: ifr.src="../subjects";
                break;
        case 6: ifr.src="../users/edit/1";
                break;
        case 7: ifr.src="../users/add";
                break;
    }
   
    
}
               </script>
              
               
</head>

<body >
   
    
    <iframe  id="ifr" src="../subjects" style="width:1366px; height:660px; overflow:hidden;" ></iframe>


		<div id="sidebar">
                    <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu --> 
			
			<ul id="main-nav">  <!-- Accordion Menu --> 
				
				<li> 
					<a href="#" class="nav-top-item current"> 
						Subjects
					</a> 
					<ul> 
						<li> <a href="../subjects/add" class="modal" >Add a Subject</li> 
						<li><a class="current" href="#" onclick="return LoadIFrame(1)">Manage Subjects</a></li> 
					</ul> 
				</li> 
				<li> 
					<a href="#" class="nav-top-item "> <!-- Add the class "current" to current menu item --> 
					Users
					</a> 
					<ul> 
						<li><a   href="../users/add" class="modal">Add new user</a></li>  
					
						<li><a href="#" onclick="return LoadIFrame(2)">Manage Users</a></li> 
						
					</ul> 
				</li> 
				
				
				
				<li> 
					<a href="#" class="nav-top-item"> 
						Feedbacks
					</a> 
					<ul> 
						<li><a href="#" onclick="return LoadIFrame(3)">Form A</a></li> 
						<li><a href="#" onclick="return LoadIFrame(4)">Form B</a></li> 
                                                 </ul> 
				</li> 
				
				<li> 
					<a href="#" onclick="return LoadIFrame(5)"class="nav-top-item"> 
						Comments
                                              
					</a> 
					
				</li> 
				
				<li> 
					<a href="#" class="nav-top-item"> 
						Settings
                                        </a> 
                                                  <ul> 
						<li><a href="../users/edit/1" class="modal">Edit Profile</a></li> 
						<li> <?php echo $html->link('Sign out',array('controller'=>'users','action'=>'logout'));?></li> 
				        </ul> 
					
					 
				</li>      
				
			</ul> <!-- End #main-nav --> 
			
				
		
			
			
			
		</div></div> <!-- End #sidebar --> 
		
		
		</div> <!-- End #main-content --> 
                       
	</body> 
</html>