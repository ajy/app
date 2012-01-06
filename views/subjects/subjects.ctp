 <?= $javascript->link(array('jquery-1.5.1.min','config'));?>
  <?= $javascript->link(array('jquery.fancybox.pack','fbConfig_a_b','comments'));?>
                 <?=$html->css(array('jquery.fancybox'));?>     
              
<?= $html->css(array('reset', 'style','subjects','button')); ?>
<style>
 .blue{
                    float:right;
                    position:relative;
                    right:60%;
                    top:-45px;
                    color:white;
                    
                 }
.green{
                    float:right;
                    position:relative;
                    right:60%;
                    top:-30px;
                    color:white;
                 }
</style>

    <body>
        <div id="subjects"> 
            <h2 id="sub">Your subjects</h2>
       <ul id="main-nav"> 
       <?php
       for($i=0;$i<count($subjects);$i++){
         echo "<li>";?> 
         <a href="#" class="nav-top-item ">  <? echo $subjects[$i]["subjects"]["name"];?></a>
         <?
                
                 echo "<ul>";
              echo "<li>";
           echo "<a>".$teacher1[$i][0]['users']['name']."</a>";
                   echo $html->tag('div',$html->link('Comment',array('controller'=>'comments','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher1"]),array('escape'=>false,'class'=>'btn info modal'))
                  ,array('class' => 'blue'));    
                 echo $html->tag('div',$html->link('Feedback',array('controller'=>'form_a_records','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher1"]),array('escape'=>false,'class'=>'btn success modal'))
                  ,array('class' => 'green'));                  
               echo "</li>";

               if($teacher2!=NULL){
            if($teacher2[$i][0]['users']['name']!= Null){
                
                 echo "<li>";
             echo "<a>".$teacher2[$i][0]['users']['name']."</a>";
             echo $html->link($html->tag('span','Comment',array('class' => 'green')),array('controller'=>'comments','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher2"]),array('escape'=>false,'class'=>'c_modal'));
             echo $html->link($html->tag('span','Feedback',array('class' => 'blue')),array('controller'=>'form_a_records','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher2"]),array('escape'=>false),array('class'=>'modal'));
             echo "</li>";
            }}
            
              echo "</ul>";
              echo "</li>";}
            
?>
       </ul>
        </div>
