<STYLE type="text/css">
	.tableTd {
	   	border-width: 0.5pt; 
		border: solid; 
	}
	.tableTdContent{
		border-width: 0.5pt; 
		border: solid;
	}
	#titles{
		font-weight: bolder;
	}
   
</STYLE>
<table>
	<tr>
		<td><b>Export To Excel Sample<b></td>
	</tr>
	<tr>
		<td><b>Date:</b></td>
		<td><?php echo date("F j, Y, g:i a"); ?></td>
	</tr>
	<tr>
		<td><b>Number of Rows:</b></td>
		<td style="text-align:left"><?php echo count($rows);?></td>
	</tr>
	<tr>
		<td></td>
	</tr>
		<tr id="titles">
			<td class="tableTd">id</td>
			<td class="tableTd">username</td>
			<td class="tableTd">password</td>
			<td class="tableTd">group_id</td>
			<td class="tableTd">email</td>			
		</tr>		
		<?php foreach($rows as $row):
			echo '<tr>';
			echo '<td class="tableTdContent">'.$row['User']['id'].'</td>';
			echo '<td class="tableTdContent">'.$row['User']['username'].'</td>';
			echo '<td class="tableTdContent">'.$row['User']['password'].'</td>';
			echo '<td class="tableTdContent">'.$row['User']['group_id'].'</td>';
			echo '<td class="tableTdContent">'.$row['User']['email'].'</td>';
			echo '</tr>';
			endforeach;
		?>
</table>

