  <!--                       CSS                       --> 
        <?php echo $html->css(array('reset','style','jquery.fancybox','button','demo_table','demo_table_jui','jquery-ui-1.8.4.custom','TableTools','alerts'),'import');?>
        
      <!--                      JS                  --> 
      <?php echo  $javascript->link(array('jquery-1.5.1.min','jquery.dataTables','TableTools','ZeroClipboard','jquery.fancybox.pack','config','add_edit'));?>
<script>
            $(document).ready(function(){
                $('.example').dataTable( {
//		"sDom": 'T<"clear">lfrtip',
//		"oTableTools": {
//			"aButtons": [
//				"copy",
//				"print",
//				{
//					"sExtends":    "collection",
//					"sButtonText": "Save",
//					"aButtons":    [ "csv", "xls", "pdf" ]
//				}
//			]
//		}
"bJQueryUI": true,
		"sPaginationType": "full_numbers"
	} );
            });

           
        </script>
 
<div id="main-content">
<div id="pHead">
                <h2>
                <?php 
                	if($sub_num==0)echo "Overall ";echo "Feedback Results ";if($sub_num!=0)echo "#".$sub_num;
                ?>
                </h2> 
                </div>
<div class="content-box">
<table class="display example">
	<thead>
		<tr>
			<td class="tableTd">TeacherID</td>
			<td class="tableTd">Teacher</td>
			<td class="tableTd">Subject</td>
			<td class="tableTd"> Q1</td>
			<td class="tableTd">  Q2</td>
			<td class="tableTd"> Q3</td>
			<td class="tableTd"> Q4</td>
			<td class="tableTd"> Q5</td>
			<td class="tableTd"> Q6</td>
			<td class="tableTd"> Q7</td>
			<td class="tableTd"> Q8</td>
			<td class="tableTd"> Q9</td>
			<td class="tableTd"> Q10</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($rows as $row):
			echo '<tr>';
			echo '<td class="tableTdContent">'.$row['teacherUserName'].'</td>';
			echo '<td class="tableTdContent">'.$row['teacherName'].'</td>';
			echo '<td class="tableTdContent">'.$row['subjectCode'].'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ1']).'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ2']).'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ3']).'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ4']).'</td>';
			
			echo '<td class="tableTdContent">'.round($row['resultQ5']).'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ6']).'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ7']).'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ8']).'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ9']).'</td>';
			echo '<td class="tableTdContent">'.round($row['resultQ10']).'</td>';
			echo '</tr>';
			endforeach;
		?>
	</tbody>
</table>
</div>
</div>
