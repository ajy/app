<div id="bar<?php echo($i);?>" style="width: 600px; height: 400px;"></div>
<script type="text/javascript">
	function drawVisualization<?php echo($i);?>() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        var raw_data = [['Q1:The course was well organized', <?php $score=$form_a_result['resultQ1']; echo($form_a_result['resultQ1']); ?>],
                        ['Q2:The teacher stressed important concepts in the lecture', <?php $score+=$form_a_result['resultQ2'];echo($form_a_result['resultQ2']); ?>],
                        ['Q3:The teacher communicated ideas and concepts effectively', <?php $score+=$form_a_result['resultQ3'];echo($form_a_result['resultQ3']); ?>],
                        ['Q4:Syllabus covered was above 95%(5),90%(4),85%(3),80%(2),75%(1)', <?php $score+=$form_a_result['resultQ4'];echo($form_a_result['resultQ4']); ?>],
                        ['Q5:The teacher provided motivation in the subject', <?php $score+=$form_a_result['resultQ5'];echo($form_a_result['resultQ5']); ?>],
                        ['Q6:The teacher was considerate and helpful', <?php $score+=$form_a_result['resultQ6'];echo($form_a_result['resultQ6']); ?>],
                        ['Q7:The teacher was available to the student outside the class', <?php $score+=$form_a_result['resultQ7'];echo($form_a_result['resultQ7']); ?>],
                        ['Q8:Tests, Assignments and course material aided subject understanding', <?php $score+=$form_a_result['resultQ8'];echo($form_a_result['resultQ8']); ?>],
                        ['Q9:Overall ranking of the effort of this teacher in the class', <?php $score+=$form_a_result['resultQ9'];echo($form_a_result['resultQ9']); ?>],
                        ['Q10:Overall ranking of teacher\'s performance as an effective teacher', <?php $score+=$form_a_result['resultQ10'];echo($form_a_result['resultQ10']); ?>],];
        
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
                 {title:"Your Score in  <?php echo($form_a_result['name'])?> :<?php echo $score;?> ",
                  width:1000, height:150,
                  isStacked: true,
                  legend: 'none'
                 }
            );
      }
      google.setOnLoadCallback(drawVisualization<?php echo($i);?>);
  </script>
