<?=$html->css(array('form_a_b','submitButton'));?>

<?php echo $this->Form->create('FormBRecord',array('id' => 'Form'));?>
	
	 <fieldset>
                <legend> Teacher was regular and punctual to the class </legend>
                <label style="display: inline-block" > <input title="Yes" type="radio" name="data[FormBRecord][q1]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input title="No" type="radio" name="data[FormBRecord][q1]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> Teacher spoke clearly, audibly and directly to the class  </legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q2]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q2]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> Teacher effectively used examples and illustrations to teach the subject </legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q3]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q3]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> Internal test questions were clear and free from ambiguity </legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q4]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q4]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> The tests were graded and returned within reasonable time </legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q5]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q5]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> Course contents were clear and coverage was adequate and well placed </legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q6]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q6]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> Teacher had good organization on the chalkboard and the writing was legible </legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q7]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q7]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> Teacher effectively utilized the class time without wasting on unneessary matters </legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q8]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q8]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> Test evaluation was fair and impartial </legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q9]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q9]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend> Test papers were discussed adequately upon return</legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q10]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q10]" value="No" required>  No </label>
            </fieldset>
        
<?php echo $this->Form->end(__('Submit', true));?>
<?php /*
 if(($this -> Session -> read("Auth.User.group_id"))==1){ ?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Form B Records', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php }*/ ?>