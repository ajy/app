<?=$html->css(array('form_a_b','submitButton'));?>
<?php Configure::load('FormBQs'); ?>
<?php echo $this->Form->create('FormBRecord',array('id' => 'Form'));?>
	
	 <fieldset>
                <legend><?php echo Configure::read('Question.FormB.1'); ?></legend>
                <label style="display: inline-block" > <input title="Yes" type="radio" name="data[FormBRecord][q1]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input title="No" type="radio" name="data[FormBRecord][q1]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.2'); ?></legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q2]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q2]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.3'); ?></legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q3]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q3]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.4'); ?></legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q4]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q4]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.5'); ?></legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q5]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q5]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.6'); ?></legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q6]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q6]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.7'); ?></legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q7]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q7]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.8'); ?></legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q8]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q8]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.9'); ?></legend>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q9]" value="Yes" required> Yes </label>
                <label style="display: inline-block" > <input type="radio" name="data[FormBRecord][q9]" value="No" required>  No </label>
            </fieldset>

            <fieldset>
                <legend><?php echo Configure::read('Question.FormB.10'); ?></legend>
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
