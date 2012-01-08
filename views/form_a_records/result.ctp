<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<?= $html->css(array('reset', 'style','subjects','submitButton','button_green')); ?>

<script>
	$(function() {
		$( "#accordion" ).accordion();
	});
	google.load('visualization', '1', {packages: ['corechart']});
</script>
<style>
    #accordion{
                margin: 0 30px 0 260px;
                padding: 40px 0 0 0;
            }
</style>
<div id="accordion">    
<?php   
        debug($form_a_results);
        $i=0;
	foreach($form_a_results as $form_a_result){
	if(is_string($form_a_result))
		echo('<h3><a href="#">'.$form_a_result.'</a></h3>');
	else{
?>
<h3><a href="#"><?php echo($form_a_result['subjectCode']);?> : <?php echo($form_a_result['name']);?></a></h3>
<div>
<?php echo $this->element('FormABarChart',array(
	'i' => $i++,
	'form_a_result' => $form_a_result,
));?>
</div>
<?php }}//end of foreach and else ?>
</div>
