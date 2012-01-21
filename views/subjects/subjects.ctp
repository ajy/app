<?php echo  $javascript->link(array('jquery-1.5.1.min','config'));?>
<?php echo  $javascript->link(array('jquery.fancybox.pack','add_edit'));?>
<?php echo $html->css(array('jquery.fancybox'));?>
<?php echo Configure::load('feedback');?>              
<?php echo  $html->css(array('style','subjects','button','alert')); ?>
<style>
 .blue{
                    float:right;
                   position:relative;
                   right:40%;
                   top:-20px;
                    
                    
                 }
.green{
                    float:right;
                     position:relative;
                     right:60%;
                     top:-20px;

                    
                 }
.btn{ color:white !important;}
#pHead{
 margin: 0 30px 0 260px;
 
}
.tname{
position:relative;
top:10px !important;
}

</style>

    <body>

        <div id="pHead">
                <h2>Your Subjects</h2> 
             </div>
<?php
	
        echo $this->Session->flash();
?>
        <div id="subjects"> 
            
       <ul id="main-nav"> 
       <?php
      /* debug($submitted);
      debug($subjects);*/
      // debug($allSubjects);
       for($i=0;$i<count($subjects);$i++){
         echo "<li>";?> 
         <a href="#" class="nav-top-item current ">  <?php echo $subjects[$i]["subjects"]["name"];?></a>
         <?
                
                 echo "<ul>";
              echo "<li>";
           echo "<a class = tname>".$teacher1[$i][0]['users']['name']."</a>";
                    echo '<div class = "green"> ';
                   if($submitted[$i]['subject_memberships']['form_a_submitted']<Configure::read('max_sub_num')){
                 echo $html->link('Feedback',array('controller'=>'form_a_records','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher1"]),array('escape'=>false,'class'=>'btn success fbf'));  
                    }
                  else{
                 echo '<a href="#"  class="btn success disabled" /> Feedback </a>';
                
                    }
                    echo '</div>';
                    echo $html->tag('div',$html->link('Comment',array('controller'=>'comments','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher1"],),array('escape'=>false,'class'=>'btn info  modal5'))
                  ,array('class' => 'blue')); 
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
