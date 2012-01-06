<div id="bar<?php echo($i);?>" style="width: 600px; height: 400px;"></div>
<?php Configure::load('FormAQs');?>
<script type="text/javascript">
	function drawVisualization<?php echo($i);?>() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        var raw_data = [["<?php echo 'Q1:'.Configure::read('Question.FormA.1'); ?>", <?php $score=$form_a_result['resultQ1']; echo($form_a_result['resultQ1']); ?>],
                        ["<?php echo 'Q2:'.Configure::read('Question.FormA.2'); ?>", <?php $score+=$form_a_result['resultQ2'];echo($form_a_result['resultQ2']); ?>],
                        ["<?php echo 'Q3:'.Configure::read('Question.FormA.3'); ?>", <?php $score+=$form_a_result['resultQ3'];echo($form_a_result['resultQ3']); ?>],
                        ["<?php echo 'Q4:'.Configure::read('Question.FormA.4'); ?>", <?php $score+=$form_a_result['resultQ4'];echo($form_a_result['resultQ4']); ?>],
                        ["<?php echo 'Q5:'.Configure::read('Question.FormA.5'); ?>", <?php $score+=$form_a_result['resultQ5'];echo($form_a_result['resultQ5']); ?>],
                        ["<?php echo 'Q6:'.Configure::read('Question.FormA.6'); ?>", <?php $score+=$form_a_result['resultQ6'];echo($form_a_result['resultQ6']); ?>],
                        ["<?php echo 'Q7:'.Configure::read('Question.FormA.7'); ?>", <?php $score+=$form_a_result['resultQ7'];echo($form_a_result['resultQ7']); ?>],
                        ["<?php echo 'Q8:'.Configure::read('Question.FormA.8'); ?>", <?php $score+=$form_a_result['resultQ8'];echo($form_a_result['resultQ8']); ?>],
                        ["<?php echo 'Q9:'.Configure::read('Question.FormA.9'); ?>", <?php $score+=$form_a_result['resultQ9'];echo($form_a_result['resultQ9']); ?>],
                        ["<?php echo 'Q10:'.Configure::read('Question.FormA.10'); ?>", <?php $score+=$form_a_result['resultQ10'];echo($form_a_result['resultQ10']); ?>]];
        
        data.addColumn('string', 'Your Score');
        data.addRows(1);
        data.setValue(0, 0, '');
        for (var i = 0; i  < raw_data.length; ++i) {
          data.addColumn('number', raw_data[i][0]);    
        }
        
        for (var i = 0; i  < raw_data.length; ++i) {
          for (var j = 1; j  < raw_data[i].length; ++j) {
            data.setValue(j-1, i+1, raw_data[i][j]);    
          }
        }
        
        // Create and draw the visualization.
        new google.visualization.BarChart(document.getElementById('bar<?php echo($i);?>')).
            draw(data,
        {title:"Your Score in  <?php echo($form_a_result['name'])?> :<?php echo round($score);?> ",
                  width:1000, height:150,
                  isStacked: true,
                  legend: 'none'
                 }
            );
      }
      google.setOnLoadCallback(drawVisualization<?php echo($i);?>);
  </script>
