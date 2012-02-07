<!DOCTYPE html>
<html>
<head>
<title></title>
 
               <style type="text/css" title="currentStyle"> 
			 html, body {height:100%;width:100%;overflow:hidden}
               </style> 
               
		<?php echo  $javascript->link(array('config'));?>
                <?php echo $html->css(array('reset','style','student'));?>
                <?php echo  $javascript->link(array('jquery.fancybox.pack','add_edit'));?>
                 <?php echo $html->css(array('jquery.fancybox'));?>     
              
               <script>
                   pos=1;
               function LoadIFrame(pg)
{
     jq='ul#main-nav li:nth-child('+pos+') > a';
                $(jq).removeClass('current');
                pos=pg;
                jq='ul#main-nav li:nth-child('+pos+') > a';
                $(jq).addClass('current');
   
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
               <style>
          
  
                    #ifr{
                        position:fixed;
                width:100%;
                height:100%; 
                overflow:auto;
            } 
           
               </style>
              
               
</head>

<body >
   
    
    <iframe  id="ifr" src="../subjects/subjects"  ></iframe>
    
    <?php $user=($this -> Session -> read("Auth.User"));?>
		<div id="sidebar">
                    
                    <div id="sidebar-wrapper"> 			
                         <?php $user=$this->Session->read("Auth.User");;?>
                <h1 id="sidebar-title"><?php echo $html->link($user['name'], array('controller' => 'users', 'action' => 'edit',$user['id']),array('title'=>'Edit Profile','class'=>'modal3','required'=>TRUE));?></h1>
                <div id="profile-links">

                    ISE Department
                    |
                    <?php echo $html->link('Sign Out', array('controller' => 'users', 'action' => 'logout'),array('title'=>'Sign Out')); ?>
                    <br>
                    <br>
			<ul id="main-nav">  <!-- Accordion Menu --> 
				
				<li> 
					<a href="#" onclick="return LoadIFrame(1)" class="nav-top-item current"> 
						Subjects
					</a> 
					
				</li> 
					
							
				<li> 
					<a href="#" onclick="return LoadIFrame(2)" class="nav-top-item"> 
						Comments
                                              
					</a> 
					
				</li> 
				
				<li> 
					 <?php echo $html->link('Profile', array('controller' => 'users', 'action' => 'edit',$user['id']),array('id'=>'nav-top-item','class'=>'modal3','onclick'=>"LoadIFrame(3)")); ?>
                         
                                             <!--     <ul> 
                                                      
						<li><?php echo $html->link('Edit Profile',array('controller'=>'users','action'=>'edit',$user['id']),array('class'=>'modal'));?>
                                                
                                                </li> 
						<li> <?php echo $html->link('Sign out',array('controller'=>'users','action'=>'logout'));
                                                
                                                ?></li> 
				        </ul> -->
					
					 
				</li>      
				
			</ul> <!-- End #main-nav --> 
			
				
		
			
			
			
		</div></div> <!-- End #sidebar --> 
		
		
		</div> <!-- End #main-content --> 
                       
	</body> 
</html>
