<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <style type="text/css" title="currentStyle"> 
            html{
                overflow:hidden;
            }
        </style> 

        <?= $javascript->link(array('config', 'add_edit')); ?>
        <?= $html->css(array('reset', 'style')); ?>
        <?= $javascript->link(array('jquery.fancybox-1.3.4.pack')); ?>
        <?= $html->css(array('jquery.fancybox-1.3.4')); ?>     

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
                    case 1: ifr.src="../subjects";
                        break;
                    case 2: ifr.src="../users";
                        break;
                    case 3: //ifr.src="../subjects";
                        break;
                    case 4: //ifr.src="../subjects";
                        break;
                    case 5: //ifr.src="../users/view/1";
                        break;
                    case 6: //ifr.src="../users/edit/1";
                        break;
                    case 7: //ifr.src="../users/add";
                        break;
                }
   
    
            }
        </script>

        <style>
            iframe{
                width:100%;
                height:660px; 
                overflow:hidden;
            } 
        </style>
    </head>

    <body >


        <iframe  id="ifr" src="../subjects" ></iframe>


        <div id="sidebar">
            <div id="sidebar-wrapper">
                <?php $user=$this->Session->read("Auth.User");;?>
                <h1 id="sidebar-title"><?=$html->link($user['name'], array('controller' => 'users', 'action' => 'edit',$user['id']),array('title'=>'Edit Profile','class'=>'modal','required'=>TRUE));?></h1>
                <div id="profile-links">

                    ISE Department
                    |
                    <?php echo $html->link('Sign Out', array('controller' => 'users', 'action' => 'logout'),array('title'=>'Sign Out')); ?>
                    <br>
                    <br>
                    <ul id="main-nav"> 

                        <li> 
                            <a href="#" class="nav-top-item current"  onclick="LoadIFrame(1);"> 
                                Subjects
                            </a> 
                            <!--<ul> 
                                    <li> <a href="../subjects/add" class="modal" >Add a Subject</li> 
                                    
                            </ul> -->
                        </li> 
                        <li> 
                            <a href="#" class="nav-top-item " onclick="LoadIFrame(2);"> <!-- Add the class "current" to current menu item --> 
                                Users
                            </a> 
                            <ul> 
                                <!--<li><a   href="../users/add" class="modal">Add new user</a></li>  
                        
                                <li><a href="#" onclick=" LoadIFrame(2)">Manage Users</a></li> -->

                            </ul> 
                        </li> 



                        <li> 
                            <a href="#" class="nav-top-item" onclick="LoadIFrame(3);"> 
                                Feedbacks
                            </a> 
                            <ul> 
                                <!--<li><a href="#" onclick="return LoadIFrame(3)">Form A</a></li> 
                                <li><a href="#" onclick="return LoadIFrame(4)">Form B</a></li> -->
                            </ul> 
                        </li> 

                        <li> 
                            <a href="#"  class="nav-top-item" onclick="LoadIFrame(4)"> 
                                Comments

                            </a> 

                        </li> 

                        <li> 
                             <?php echo $html->link('Profile', array('controller' => 'users', 'action' => 'edit',$user['id']),array('class'=>'nav-top-item modal','onclick'=>"LoadIFrame(5)")); ?>
                         
                          <!--  <a href="#" class="nav-top-item " onclick="LoadIFrame(5)" > 
                                 </a> -->
                            <ul> 
                              <!--  <li><a href="../users/edit/1" class="modal">Edit Profile</a></li> 
                                <li> <?php echo $html->link('Sign out', array('controller' => 'users', 'action' => 'logout')); ?></li> -->
                            </ul> 


                        </li>      

                    </ul> <!-- End #main-nav --> 






                </div></div></div ><!-- End #sidebar --> 




    </body> 
</html>