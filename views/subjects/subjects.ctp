 <?= $javascript->link(array('jquery-1.5.1.min','config'));?>
  <?= $javascript->link(array('jquery.fancybox-1.3.4.pack','fbConfig_a_b'));?>
                 <?=$html->css(array('jquery.fancybox-1.3.4'));?>     
              
<?= $html->css(array('reset', 'style','subjects','submitButton','button_green')); ?>
<style>
 .blue{
                    float:right;
                    position:relative;
                    right:60%;
                    top:-45px;
                  
                    
                 }
.green{
                    float:right;
                    position:relative;
                    right:60%;
                    top:-30px;
                    
                 }
</style>

    <body>
        <div id="subjects"> 
            <h2 id="sub">Your subjects</h2>
       <ul id="main-nav"> 
       <?
       for($i=0;$i<count($subjects);$i++){
         echo "<li>";?> 
         <a href="#" class="nav-top-item ">  <? echo $subjects[$i]["subjects"]["name"];?></a>
         <?
                
                 echo "<ul>";
              echo "<li>";
           echo "<a>".$teacher1[$i][0]['users']['name']."</a>";
                 echo $html->link($html->tag('span','Comment',array('class' => 'green')),array('controller'=>'comments','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher1"]),array('escape'=>false,'class'=>'modal'));
                 echo $html->link($html->tag('span','Feedback',array('class' => 'blue')),array('controller'=>'form_a_records','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher1"]),array('escape'=>false,'class'=>'modal'));
                                     
               echo "</li>";

               if($teacher2!=NULL){
            if($teacher2[$i][0]['users']['name']!= Null){
                
                 echo "<li>";
             echo "<a>".$teacher2[$i][0]['users']['name']."</a>";
             echo $html->link($html->tag('span','Comment',array('class' => 'green')),array('controller'=>'comments','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher2"]),array('escape'=>false,'class'=>'modal'));
             echo $html->link($html->tag('span','Feedback',array('class' => 'blue')),array('controller'=>'form_a_records','action'=>'add', $subjects[$i]["subjects"]["id"], $subjects[$i]["subjects"]["teacher2"]),array('escape'=>false),array('class'=>'modal'));
             echo "</li>";
            }}
            
              echo "</ul>";
              echo "</li>";}
            
?>
       </ul>
        </div>
