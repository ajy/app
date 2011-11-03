<?=$html->css(array('form_a_b','submitButton'));?>
     
<?php echo $this->Form->create('FormARecord', array('id' => 'Form'));?>
	
	
          <?
           
          /* $user=($this -> Session -> read("Auth.User"));
         $params['subject']=$param[0];
         $params['teacher']=$param[1];
         $params['student']=$user['id'];
         $this -> Session ->write('params',$params);*/
          ?>
                

            <fieldset>
                <legend>The course was well organized</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q1]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q1]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q1]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q1]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q1]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend>The teacher stressed important concepts in the lecture</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q2]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q2]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q2]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q2]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q2]" value="1" required/></label>
            </fieldset>
            <fieldset>
                <legend>The teacher communicated ideas and concepts effectively</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q3]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q3]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q3]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q3]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q3]" value="1" required/></label>
            </fieldset>
            <fieldset>
                <legend>Syllabus covered was above 95%(5),90%(4),85%(3),80%(2),75%(1)</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q4]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q4]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q4]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q4]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q4]" value="1" required/></label>
            </fieldset>
            <fieldset>
                <legend>The teacher provided motivation in the subject</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q5]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q5]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q5]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q5]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q5]" value="1" required/></label>
            </fieldset>
            <fieldset>
                <legend>The teacher was considerate and helpful</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q6]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q6]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q6]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q6]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q6]" value="1" required/></label>
            </fieldset>
            <fieldset>
                <legend>The teacher was available to the student outside the class</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q7]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q7]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q7]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q7]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q7]" value="1" required/></label>
            </fieldset>
            <fieldset>
                <legend>Tests, Assignments and course material aided subject understanding</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q8]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q8]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q8]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q8]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q8]" value="1" required/></label>
            </fieldset>
            <fieldset>
                <legend>Overall ranking of the effort of this teacher in the class</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q9]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q9]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q9]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q9]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q9]" value="1" required/></label>
            </fieldset>
            <fieldset>
                <legend>Overall ranking of teacher's performance as an effective teacher</legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q10]" value="5" required/></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q10]" value="4" required/></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q10]" value="3" required/></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q10]" value="2" required/></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q10]" value="1" required/></label>
            </fieldset>
  <?php echo $this->Form->end(__('Submit', true));?>
<?php 
 if(($this -> Session -> read("Auth.User.group_id"))==1){?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Form A Records', true), array('action' => 'index'));?></li>
	</ul>
</div>
 

<?php } ?>
