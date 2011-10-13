<?php debug($result); ?>
<?php $Html->script("googleJsApi"); ?>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Options');
        data.addColumn('number', 'Reply');
        data.addRows(2);
        data.setValue(0, 0, 'Yes');
        data.setValue(0, 1, 11);
        data.setValue(1, 0, 'No');
        data.setValue(1, 1, 2);
        
        // Create and draw the visualization.
        new google.visualization.PieChart(document.getElementById('visualization')).
            draw(data, {
                        title:"Question",
                        tooltipText: 'percentage',
                        is3D: true
                       });
      }
      
      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="width: 600px; height: 400px;"></div>
  </body>
</html>
