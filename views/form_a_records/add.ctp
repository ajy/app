
<?php echo $html->css(array('reset','form_a_b','button'));?>
<?php echo $html->script("livevalidation");?>

<?php Configure::load('FormAQs'); ?>
<style>
    html{
        overflow:hidden;
    }
</style>  
<script>

function close(){
    parent.$.fancybox.close( );
   

}


</script>
<div id="header">Feedback Form</div>
<?php echo $this->Form->create('FormARecord', array('id' => 'Form'));?>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.1'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q1]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q1]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q1]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q1]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q1]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.2'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q2]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q2]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q2]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q2]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q2]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.3'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q3]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q3]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q3]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q3]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q3]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.4'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q4]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q4]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q4]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q4]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q4]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.5'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q5]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q5]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q5]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q5]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q5]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.6'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q6]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q6]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q6]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q6]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q6]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.7'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q7]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q7]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q7]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q7]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q7]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.8'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q8]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q8]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q8]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q8]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q8]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.9'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q9]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q9]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q9]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q9]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q9]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.10'); ?></legend>
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q10]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q10]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q10]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q10]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q10]" value="1" required /></label>
            </fieldset>            
<footer>
<div id="cancel">
<input type="button" value="Cancel" class="btn close" name="Close" onclick="window.close();" />

</div>
<div id="submit">
 <input class="btn success" type="submit" value="Submit" />
</div>
</footer>
<? 

$form->end();?>

<?php
///debug($this->Session->read('params'));
//debug($this->params['pass'])
/*
 if(($this -> Session -> read("Auth.User.group_id"))==1){?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Form A Records', true), array('action' => 'index'));?></li>
	</ul>
</div>
 

<?php } */?>
