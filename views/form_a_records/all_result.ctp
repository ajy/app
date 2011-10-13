<script type="text/javascript">
	$("#result").dataTable({
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sDom": '<"H"Tfr>t<"F"ip>',
		"oTableTools": {
			"aButtons": [
				"copy", "csv", "xls", "pdf",
				{
					"sExtends":    "collection",
					"sButtonText": "Save",
					"aButtons":    [ "csv", "xls", "pdf" ]
				}
			]
		}
	});	
</script>
<table id="result">
	<thead>
		<tr id="titles">
			<td class="tableTd">Teacher</td>
			<td class="tableTd">Subject</td>
			<td class="tableTd">Percentage_Q1</td>
			<td class="tableTd">Percentage_Q2</td>
			<td class="tableTd">Percentage_Q3</td>
			<td class="tableTd">Percentage_Q4</td>
			<td class="tableTd">Percentage_Q5</td>
			<td class="tableTd">Percentage_Q6</td>
			<td class="tableTd">Percentage_Q7</td>
			<td class="tableTd">Percentage_Q8</td>
			<td class="tableTd">Percentage_Q9</td>
			<td class="tableTd">Percentage_Q10</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($rows as $row):
			echo '<tr>';
			echo '<td class="tableTdContent">'.$row['teacherID'].'</td>';
			echo '<td class="tableTdContent">'.$row['teacherName'].'</td>';
			echo '<td class="tableTdContent">'.$row['subjectCode'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ1'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ2'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ3'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ4'].'</td>';
			
			echo '<td class="tableTdContent">'.$row['resultQ5'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ6'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ7'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ8'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ9'].'</td>';
			echo '<td class="tableTdContent">'.$row['resultQ10'].'</td>';
			echo '</tr>';
			endforeach;
		?>
	</tbody>
</table>


