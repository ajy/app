	<?php $Html->script("googleJsApi"); ?>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        var raw_data = [['aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 13],
                        ['Q2', 40],
                        ['Q3', 10],
                        ['Q4', 10],
                        ['Q5', 10],
                        ['Q6', 10],
                        ['Q7', 10],
                        ['Q8', 10],
                        ['Q9', 10],
                        ['Q10', 17],];
        
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
        new google.visualization.BarChart(document.getElementById('visualization')).
            draw(data,
                 {title:"Your Score",
                  width:1000, height:150,
                  isStacked: true,
                  legend: 'none'
                 }
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="width: 600px; height: 400px;"></div>
  </body>
</html>
