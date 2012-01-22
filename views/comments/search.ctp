 <!--                       CSS                       --> 
        <?php echo $html->css(array('reset','style','jquery.fancybox','button','demo_table','demo_table_jui','jquery-ui-1.8.4.custom','TableTools','alerts'),'import');?>
        
      <!--                      JS                  --> 
      <?php echo  $javascript->link(array('jquery-1.5.1.min','jquery.dataTables','TableTools','ZeroClipboard','jquery.fancybox.pack','config','add_edit'));?>

<div id="mian content">
    <div class="content-box">
<?php echo $this->Form->create('Comment', array('action' => 'search', 'class' => 'search'));
$teachers=($this->requestAction('subjects/getTeachers'));
$subjects=$this->requestAction('subjects/getSubjects');
?>
<label>Teachers</label>
		 <select name="data[Comment][teacher]" id="SubjectTeacher1" >
                     <option value=""></option>
                   <?foreach($teachers as $teacher):
                        $id=$teacher ['users']['id'];$name=$teacher ['users']['name'];
                     
                     echo<<< OPTIONS
                        <option value = $id > $name </option>
                       
OPTIONS;
                         endforeach;?>  
                    </select>
<label>Subjects</label>
<?php echo $this->Form->select('subject',$subjects);?>
<div id="submit">
 <input class="btn success" type="submit" value="Search" />
</div>

<?echo $this->Form->end();
debug($this->data);
//debug($comments);
?>

</div></div>
