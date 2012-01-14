<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <?php echo  $javascript->link(array('autoResize'));?>
          <?php echo $html->css(array('button_green','style','comments'));?> 
          <?php echo  $javascript->link(array('jquery.fancybox.pack','add_edit'));?>
                 <?php echo $html->css(array('jquery.fancybox'));?>     
       
        <script>
        
            $(document).ready(function() {
               $('.reply').hide();
                $('textarea#comments').autoResize({
                    // On resize:
                    onResize : function() {
                        $(this).css({opacity:0.8});
                    },
                    // After resize:
                    animateCallback : function() {
                        $(this).css({opacity:1});
                    },
                    // Quite slow animation:
                    animateDuration : 300,
                    // More extra space:
                    extraSpace :10
                });
              
            });  

             function toggle(pos){
   
                // alert(pos)
                $jq='ul#container li:nth-child('+pos+') > ol.comments > ol.reply';
                var showing = ( $($jq).is(':visible'))
                              //  alert($jq);
                $('ul#container li:nth-child('+pos+') >ol.comments> .expand >img').attr('src','../img/expand.png');
                $($jq).slideToggle('fast');
                if (!showing) { // If it wasn't visible
                    $('ul#container li:nth-child('+pos+') >ol.comments> .expand >img').attr('src','../img/collapse.png');
             
                }}

        </script>
        <style>
 html{
              
                overflow-y:scroll ;

            }
#pHead{
 margin: 0 30px 0 260px;

 
}
.expand{
                position:relative;
                float:left;
                border-bottom-style:solid;
                top:-10px;
                width:100%;
                border-bottom-width:1px;
                color:lightgray;
            }
            img{
                float:right;
                padding:5px 5px 10px;
                cursor: pointer;
            }
            li{
                list-style: none;
            }
.opt{
position:relative;
float:right;
top:-20px;


}
</style>
    </head>
    <body>
<?php //debug($comments);?>
    <div id="pHead">
                <h2>Comments</h2> 
                </div>
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
                 <div class="expand">
                
                            <img src="../img/expand.png" onclick="toggle($cnt);" width="8" height="7" alt="expand"/></div>
                            
                     <ol class="reply">
REPLY;

$printed=TRUE;
            }
  ?>          

                        <li>
                            <ul class="meta">
                                <li class="subject">Subject</li>
                                <li class="date">posted on <?php echo date("jS M \, Y", strtotime($comments[$i]['comments']['created']))?> </li>
                            </ul>
                            <div class="body" onmouseover=""><?print_r (base64_decode($comments[$i]['comments']['comment']))?>
                                  
                            </div>
                              <div class="opt">
                                <?php if(!$reply){echo $html->link('Comment',array('controller'=>'comments','action'=>'add',$sid,$to,$pid),array('class'=>'modal5'));}?>
                                   <!--<img src="" " onclick="" width="13" height="13" alt="expand"/>-->
                                   
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
       
    </body>
</html>
