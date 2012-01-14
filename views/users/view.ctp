<?php echo $html->css(array('reset','button_green','add_edit'));?>
 <style>
            
             .label{
               
                 color:gray;
                 font-size:20px;
                 padding-top:5px;
             }
              
             .value{
                  font-size:15px;
                  line-height:50%;
                  text-align: center;
                  position:relative;
                  top:-20px;
                  left:120px;
             }
             #profile{
                  padding:20px;
             }
             a{
                 text-decoration: none;
                
             }
             .green{
             padding:8px;
    }
    </style>
     <?php $user=$this->Session->read("Auth.User");
        $grp=  array('1'=>'Administrator','2'=>'Teacher','3'=>'Student')
     ?>
   <div id="header">Proflie</div>
        <div id="profile">
            <h2 class="label">Name </h2> <span class="value"><?php echo $user['name']?></span> 
            <h2 class="label">Username </h2> <span class="value"><?php echo $user['username']?></span> 
            <h2 class="label">Email </h2> <span class="value"><?php echo $user['email']?></span> 
            <h2 class="label">Group </h2> <span class="value"><?php echo $grp[$user['group_id']]?></span> 
            <?php if($user['class']!=NULL){?>
            <h2 class="label">Class </h2> <span class="value"><?php echo $user['class']?></span> 
           <?}?>
            
        </div>

<?php echo  $html->link($html->tag('span','Edit Profile',array('class' => 'green')),array('action'=>'edit', $user['id']),array('class'=>'modal','escape'=>false));?>
           
