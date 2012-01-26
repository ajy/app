
<!DOCTYPE html>
<html > 

    <head> 



        <title>Subjects</title> 

         <!--                       CSS                       --> 
        <?php echo $html->css(array('reset','style','jquery.fancybox','button','subjects','alerts'),'import');?>
   

        <!--                      JS                  --> 
      <?php echo  $javascript->link(array('jquery-1.5.1.min','jquery.fancybox.pack','config','add_edit','twipsy'));?>
     
<script>
            $(function () {
              $("a[rel=twipsy]").twipsy({
                live: true
              })
            })
          </script>
        
       <style>
 .blue{
                    float:right;
                   
                    
                 }
.green{
                    float:right;
                    padding-right:25px;
                    
                   
                    
                 }
.opt{
  
 position:relative;
 top:-20px;
 right:40%;    
}
html{
    overflow:hidden;
}
.btn{ color:white !important;}
/*#pHead{
 margin: 0 30px 0 260px;
 
}*/
.tname{
position:relative;
top:10px !important;
}

</style>

    </head> 

    <body>
    
        <?php
	/*echo $this->Session->flash('auth');*/
        echo $this->Session->flash()
?>


            <div id="subjects"> 
                <div class="clear"></div> <!-- End .clear --> 
                    
                 <div id="pHead">
                <h2>Your Subjects</h2> 
             </div>
        
            
       <ul id="main-nav"> 
       <?php
        for($i=0;$i<count($subjects);$i++){
         echo "<li>";?> 
         <a href="#" class="nav-top-item current ">  <?php echo $subjects[$i]["subjects"]["name"];?></a>
         <?
                
                 echo "<ul>";
              echo "<li>";
           echo "<a class = tname>".$teacher1[$i][0]['users']['name']."</a>";
                echo '<div class="opt">';
                   echo $html->tag('div',$html->link('Comment',array('controller'=>'comments','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher1"],),array('escape'=>false,'class'=>'btn info  modal5'))
                  ,array('class' => 'blue')); 
                    echo '<div class = "green"> ';
        if($submitted[$i][0]['subnum']==$max_sub_num){
                         echo '<a href="#"  rel="twipsy" title="Feedback Submitted" class="btn success disabled" /> Feedback </a>';
                     }

                  else{
                 echo $html->link('Feedback',array('controller'=>'form_a_records','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher1"]),array('escape'=>false,'class'=>'btn success fbf'));  
               
                    }
                    echo '</div>';
                 
                  echo "</div>";
               echo "</li>";

            /*   if($teacher2!=NULL){
            if($teacher2[$i][0]['users']['name']!= Null){
                

             echo "<li>";
             echo "<a>".$teacher2[$i][0]['users']['name']."</a>";
             echo $html->link($html->tag('span','Comment',array('class' => 'green')),array('controller'=>'comments','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher2"]),array('escape'=>false,'class'=>'c_modal'));
             echo $html->link($html->tag('span','Feedback',array('class' => 'blue')),array('controller'=>'form_a_records','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher2"]),array('escape'=>false),array('class'=>'modal'));
             echo "</li>";
            }}no more teacher2*/

            
              echo "</ul>";
              echo "</li>";}
            
?>
       </ul>

                </div>

                </body> 

                </html> 
