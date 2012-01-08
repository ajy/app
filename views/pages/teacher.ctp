
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
                <?= $javascript->link(array('jquery.fancybox.pack','add_edit'));?>
                 <?=$html->css(array('jquery.fancybox'));?>     
              
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
        case 1: ifr.src="../form_a_records/result";
                break;
        case 2: ifr.src="../comments/comments";
                break;
    }
    
}
               </script>
              
               
</head>

<body>
   
    
    <iframe  id="ifr" src="../form_a_records/result" style="width:1366px; height:660px; overflow:auto;" ></iframe>

    <?php $user=($this -> Session -> read("Auth.User"));?>
		<div id="sidebar">
                    <div id="sidebar-wrapper"> 		
                         <?php $user=$this->Session->read("Auth.User");;?>
                <h1 id="sidebar-title"><?=$html->link($user['name'], array('controller' => 'users', 'action' => 'edit',$user['id']),array('title'=>'Edit Profile','class'=>'modal4'));?></h1>
                <div id="profile-links">

                    ISE Department
                    |
                    <?php echo $html->link('Sign Out', array('controller' => 'users', 'action' => 'logout'),array('title'=>'Sign Out')); ?>
                    <br>
	</div>
                    <ul id="main-nav">  <!-- Accordion Menu --> 
				
				<li> 
					<a href="#" onclick="return LoadIFrame(1)" class="nav-top-item current"> 
						Feedback Results
					</a> 
					
				</li> 
					
							
				<li> 
 					<a href="#" onclick="return LoadIFrame(2)" class="nav-top-item"> 
						Comments
                                              
					</a> 
					
				</li> 
				
				<li> 
					 <?php echo $html->link('Profile', array('controller' => 'users', 'action' => 'edit',$user['id']),array('id'=>'nav-top-item','class'=>' modal4','onclick'=>"LoadIFrame(3)")); ?>
                          
                                             <!--     <ul> 
                                                      
						<li><?php echo $html->link('Edit Profile',array('controller'=>'users','action'=>'edit',$user['id']),array('class'=>'modal'));?>
                                                
                                                </li> 
						<li> <?php echo $html->link('Sign out',array('controller'=>'users','action'=>'logout'));
                                                
                                                ?></li> 
				        </ul> --?
					
					 
				</li>      
				
			</ul> <!-- End #main-nav --> 
			
				
		
			
			
			
	
                    </div> 
                </div><!-- End #sidebar --> 
	                      
	
 </body> 
</html>
