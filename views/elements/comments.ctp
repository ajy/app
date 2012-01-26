 
      <ul id="container">
    <?
       
    $reply=FALSE;$cnt=0;$count=count($comments);$printed=FALSE;
    for ($i = 0; $i < $count; $i++) { 
            if(!$reply){
echo <<< COMMENTS
                <li>
                     <ol class="comments">
COMMENTS;
$cnt++;
$pid=$comments[$i]['comments']['id'];
$sid=$comments[$i]['comments']['subject_id'];
$id=$this -> Session -> read("Auth.User.id");
$to=($id==$comments[$i]['comments']['to'])?$comments[$i]['comments']['from']:$comments[$i]['comments']['to'];


            }
            elseif(!($printed) && $reply){
echo <<< REPLY
                 <div class="expand" >
                
                            <img src="../img/expand.png" onclick="toggle($cnt);" width="8" height="7" alt="expand"/></div>
                            
                     <ol class="reply">
REPLY;

$printed=TRUE;
            }
  ?>          

                        <li>
                            <ul class="meta"><?if(!$reply){?>
                                <li class="subject"><? 
                                      $subject=(array_values($this->requestAction('/subjects/getName/'.$comments[$i]['comments']['subject_id'])));
                                      echo $subject[0]['subjects']['name'];
                                      ?></li>
                                <? } ?>
                                <li class="date"><?php echo date("jS M \, Y", strtotime($comments[$i]['comments']['created']))?> </li>
                            </ul>
                            <div class="body" onmouseover=""><?
                             $user=(array_values($this->requestAction('/users/getName/'.$comments[$i]['comments']['from'])));
                               echo '<div class ="author">'.$user[0]['users']['name'].'</div>'.' - ';
                            print_r (base64_decode($comments[$i]['comments']['comment']))?>
                                  
                            </div>
                          
                              <div class="opt">
                               
                                <?php if(!$reply){echo $html->link('Comment',array('controller'=>'comments','action'=>'add',$sid,$to,$pid),array('class'=>'modal5')).' &CenterDot;  ';}
                                 
                                   //echo '<a href="/newfbf/comments/report/'.$comments[$i]['comments']['id'].' onclick="return confirm(&#039;Are you sure you want to report this comment?&#039;);"><img src="../img/lag_off.png" width="13" height="13" alt="expand"/></a>'; ?>
                                  <?php echo $this->Html->link(__('Report',true), array('action' => 'report', $comments[$i]['comments']['id']), null, sprintf(__('Are you sure you want to report this comment?', true),$comments[$i]['comments']['id'])); ?>
        <?php //echo $html->link('Report',array('action' => 'report', $comments[$i]['comments']['id']), null, sprintf('Are you sure you want to report this comment?', true),$comments[$i]['comments']['id'],array('title'=>'Edit Profile','class'=>'modal'));?>                   
         <?php //echo $this->Html->image('flag.png', array('alt' => 'Flag','url'=>array()))?>
                            
<!--                                <a href="#"><img src="../img/flag.png"  width="13" height="13" /></a> -->
                                
                            </div>
                        </li>


 
<?php 
            
            if($i+1!=$count&&(($comments[$i+1]['comments']['parent_id'])!=NULL)){
                $reply=TRUE;}
               
            
            else {
                if($reply){
                    echo'</ol>';
                }
             echo'</ol>';
                echo'</li>';
                $reply=false;
                $printed=false;
              
                }
    }
?>
</ul>