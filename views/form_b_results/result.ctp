<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load('visualization', '1', {packages: ['corechart']});
</script>
<?php
$i=0;
foreach($form_b_results as $form_b_result){
	echo('your results in '.$form_b_result['Subject']['code'].':'.$form_b_result['Subject']['name']);
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q1'],
		'k' => (10*$i+1),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q2'],
		'k' => (10*$i+2),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q3'],
		'k' => (10*$i+3),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q4'],
		'k' => (10*$i+4),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q5'],
		'k' => (10*$i+5),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q6'],
		'k' => (10*$i+6),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q7'],
		'k' => (10*$i+7),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q8'],
		'k' => (10*$i+8),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q9'],
		'k' => (10*$i+9),
	));
	echo $this->element('FormBPieChart', array(
		'Question' => "",
		'result' => $form_b_result['FormBResult']['percentage_q10'],
		'k' => (10*$i+10),
	));
}
$i++;
?>
