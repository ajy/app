<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
	$(function() {
		$( "#accordion" ).accordion();
	});
	google.load('visualization', '1', {packages: ['corechart']});
</script>
<div id="accordion">    
<?php   $i=0;
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
