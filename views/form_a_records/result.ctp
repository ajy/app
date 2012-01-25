 <?= $javascript->link(array('jquery-1.5.1.min','config'));?>
 <?= $html->css(array('style','subjects','button','alert')); ?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
	$(function() {
		$( "#accordion" ).accordion();
	});
	google.load('visualization', '1', {packages: ['corechart']});
</script>
<style>
.fb{
      float:right;
      padding-right:10px;
                     }
.opt{
padding-top:20px;  
}
.nav-top-item{
color: #1c9bf4 !important;
}
</style>
<script>
            $(function () {
              $("a[rel=twipsy]").twipsy({
                live: true
              })
            })
          </script>
    <body>
<div id="subjects"> 
        <div id="pHead">
                <h2>Feedback Results</h2> 
             </div>
<?php
	
        echo $this->Session->flash();
?>
        <div class='opt'>
        <?php echo  $html->tag('div',$html->link('Total Feedback ',array('controller'=>'form_a_records','action'=>'result',0),array('escape'=>false,'class'=>'btn primary '))
                  ,array('class' => 'fb'))?>
 <?php echo  $html->tag('div',$html->link('Feedback 3',array('controller'=>'form_a_records','action'=>'result',3),array('escape'=>false,'class'=>'btn primary '))
                  ,array('class' => 'fb'))?>
 <?php echo  $html->tag('div',$html->link('Feedback 2',array('controller'=>'form_a_records','action'=>'result',2),array('escape'=>false,'class'=>'btn primary '))
                  ,array('class' => 'fb'))?>
 <?php echo  $html->tag('div',$html->link('Feedback 1',array('controller'=>'form_a_records','action'=>'result',1),array('escape'=>false,'class'=>'btn primary '))
                  ,array('class' => 'fb'))?>
     </div>
       <ul id="main-nav"> 
       <?php
        //debug($form_a_results);
$i=0;
        foreach($form_a_results as $form_a_result){
         echo "<li>";?> 
         <?if(is_string($form_a_result))
            echo('<h3><a href="#" class="nav-top-item ">'.$form_a_result.'</a></h3>');
           else{
         ?>
         <a href="#" class="nav-top-item  "><?php echo($form_a_result['name']);?></a>
         <?
                
            echo $this->element('FormABarChart',array(
	'i' => $i++,
	'form_a_result' => $form_a_result,
));
              echo "</li>";
            }
}
            
?>
       </ul>
        </div>
