<!DOCTYPE html>
<html>
<head>
<title></title>
  <?=$html->css(array('reset','style'));?>
                     
               <style type="text/css" title="currentStyle"> 
			  html{
                             overflow:hidden;
                         }
               </style> 
               
		<?= $javascript->link(array('js/jquery','config'));?>

                 
                
            
</head>

<body >
   
   
    <iframe  id="cont" src="subjects"  style="width:1366px; height:660px; overflow:hidden;" ></iframe>


		<div id="sidebar">
                    <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu --> 
			
			<ul id="main-nav">  <!-- Accordion Menu --> 
				
				<li> 
					<a href="#" class="nav-top-item current"> 
						Subjects
					</a> 
					<ul> 
						<li><a href="#">Add a new subject</a></li> 
						<li><a class="current" href="#">Manage Subjects</a></li> 
					</ul> 
				</li> 
				<li> 
					<a href="#" class="nav-top-item "> <!-- Add the class "current" to current menu item --> 
					Users
					</a> 
					<ul> 
						<li><a  href="#">Add new user</a></li>  
					
						<li><a href="#">Manage Users</a></li> 
						
					</ul> 
				</li> 
				
				
				
				<li> 
					<a href="#" class="nav-top-item"> 
						Feedbacks
					</a> 
					<ul> 
						<li><a href="#">Form A</a></li> 
						<li><a href="#">Form B</a></li> 
				        </ul> 
				</li> 
				
				<li> 
					<a href="#" class="nav-top-item"> 
						Comments
                                              
					</a> 
					
				</li> 
				
				<li> 
					<a href="#" class="nav-top-item"> 
						Settings
                                        </a> 
                                                  <ul> 
						<li><a href="#">Edit Profile</a></li> 
						<li><a href="#">Sign Out</a></li> 
				        </ul> 
					
					 
				</li>      
				
			</ul> <!-- End #main-nav --> 
			
				
		
			
			
			
		</div></div> <!-- End #sidebar --> 
		
		
		</div> <!-- End #main-content --> 
                       
	</body> 
</html>