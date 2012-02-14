<!--                       CSS                       --> 
<?php echo $html->css(array('reset','style','jquery.fancybox','button','demo_table','TableTools','alerts'),'import');?>
<!--                      JS                  --> 
<?php echo  $javascript->link(array('jquery-1.5.1.min','jquery.dataTables','TableTools','ZeroClipboard','jquery.fancybox.pack','config','add_edit'));?>
<script>
	$(document).ready(function(){
		$('.example').dataTable();
	});
</script>
<style type="text/css" title="currentStyle"> 
html{
    overflow:hidden;
}
.add,.import{
float:right;
padding-right:10px;
position:relative;
top:20px;
}
.btn{
font-weight:bold;
padding:10px;
}
</style>
<div id="main-content"> <!-- Main Content Section with everything --> 
<div class="subjectMemberships index">
	<div id="pHead">
        <h2>Enrollments</h2> 
        </div>
        <?php echo  $html->tag('div',
        	$this->Html->link('Enroll',
        		array('action' => 'enroll'),
        		array('escape'=>false,'class'=>'btn success imp')),
        	array('class' => 'import'));
        ?>
        <?php echo "<h5>".$form_a_submitted.'/'.$total." of the students have submitted the ".$max_sub_num." forms that are required</h5>";?>
	<div class="content-box"><!-- Start Content Box --> 
	<div class="content-box-content">
	<?php echo "<h4>Students who have not provided the required number of forms are-</h4>";?>
	<table cellpadding="0" cellspacing="0" class="display example" >
	<thead>
	<tr>
			<th>USN</th>
			<th>student</th>
			<th>subject</th>
			<th>number of submissions</th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$i = 0;
	foreach ($subjectMemberships as $subjectMembership):
		$class = null;
		if($subjectMembership['SubjectMembership']['form_a_submitted']<$max_sub_num){
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subjectMembership['Student']['username'];?>
		</td>
		<td>
			<?php echo $subjectMembership['Student']['name'];?>
		</td>
		<td>
			<?php echo $subjectMembership['Subject']['name']; ?>
		</td>
		<td><?php echo $subjectMembership['SubjectMembership']['form_a_submitted']; ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subjectMembership['SubjectMembership']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subjectMembership['SubjectMembership']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subjectMembership['SubjectMembership']['id'])); ?>
		</td>
	</tr>
	<?php 
		}
		endforeach;
	?>
	</tbody>
	</table>
	</div>
	</div>
</div>
</div>
