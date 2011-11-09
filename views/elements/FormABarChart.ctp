<div id="bar<?php echo($i);?>" style="width: 600px; height: 400px;"></div>
<script type="text/javascript">
	function drawVisualization<?php echo($i);?>() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        var raw_data = [['Q1', <?php echo($form_a_result['resultQ1']); ?>],
                        ['Q2', <?php echo($form_a_result['resultQ2']); ?>],
                        ['Q3', <?php echo($form_a_result['resultQ3']); ?>],
                        ['Q4', <?php echo($form_a_result['resultQ4']); ?>],
                        ['Q5', <?php echo($form_a_result['resultQ5']); ?>],
                        ['Q6', <?php echo($form_a_result['resultQ6']); ?>],
                        ['Q7', <?php echo($form_a_result['resultQ7']); ?>],
                        ['Q8', <?php echo($form_a_result['resultQ8']); ?>],
                        ['Q9', <?php echo($form_a_result['resultQ9']); ?>],
                        ['Q10', <?php echo($form_a_result['resultQ10']); ?>],];
        
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
                 {title:"Your Score in <?php echo($form_a_result['subjectCode'])?> : <?php echo($form_a_result['name'])?>",
                  width:1000, height:150,
                  isStacked: true,
                  legend: 'none'
                 }
            );
      }
      google.setOnLoadCallback(drawVisualization<?php echo($i);?>);
  </script>
