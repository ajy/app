<?=$html->css(array('form_a_b','submitButton'));?>
<?=$html->script("livevalidation");?>
<?php Configure::load('FormAQs'); ?>
     
<?php echo $this->Form->create('FormARecord', array('id' => 'Form'));?>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.1'); ?></legend>
                <!--<input id="foo1" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q1]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q1]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q1]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q1]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q1]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.2'); ?></legend>
                <!--<input id="foo2" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q2]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q2]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q2]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q2]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q2]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.3'); ?></legend>
                <!--<input id="foo3" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q3]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q3]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q3]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q3]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q3]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.4'); ?></legend>
                <!--<input id="foo4" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q4]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q4]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q4]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q4]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q4]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.5'); ?></legend>
                <!--<input id="foo5" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q5]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q5]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q5]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q5]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q5]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.6'); ?></legend>
                <!--<input id="foo6" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q6]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q6]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q6]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q6]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q6]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.7'); ?></legend>
                <!--<input id="foo7" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q7]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q7]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q7]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q7]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q7]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.8'); ?></legend>
                <!--<input id="foo8" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q8]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q8]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q8]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q8]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q8]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.9'); ?></legend>
                <!--<input id="foo9" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q9]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q9]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q9]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q9]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q9]" value="1" required /></label>
            </fieldset>
            <fieldset>
                <legend><?php echo Configure::read('Question.FormA.10'); ?></legend>
                <!--<input id="foo10" type="text" style="display: none;" value="1" /><!-- Dummy input field to activate custom radio button validation -->
                <label style="display: inline-block">5<input type="radio" name="data[FormARecord][q10]" value="5" required /></label>
                <label style="display: inline-block">4<input type="radio" name="data[FormARecord][q10]" value="4" required /></label>
                <label style="display: inline-block">3<input type="radio" name="data[FormARecord][q10]" value="3" required /></label>
                <label style="display: inline-block">2<input type="radio" name="data[FormARecord][q10]" value="2" required /></label>
                <label style="display: inline-block">1<input type="radio" name="data[FormARecord][q10]" value="1" required /></label>
            </fieldset>            
  <?php echo $this->Form->end(__('Submit', true));?>
  <script>/*super weird validation code that never worked
  function customQValidation(value, args){
  	var i= args.i;
  	return (!$('input[name="data[FormARecord][q'+i+']]"').length);//returns true if input is set, else false
  }
  var custom1 = new LiveValidation("foo1", {wait: 1000, validMessage: "it seems alright"});
  custom1.add("Validate.Custom",{ against: customQValidation, args: { i:1 }, failureMessage: "the question is unanswered" });
  var custom2 = new LiveValidation("foo2", {wait: 1000, validMessage: "it seems alright"});
  custom2.add("Validate.Custom",{ against: customQValidation, args: { i:2 }, failureMessage: "the question is unanswered" });
  var custom3 = new LiveValidation("foo3", {wait: 1000, validMessage: "it seems alright"});
  custom3.add("Validate.Custom",{ against: customQValidation, args: { i:3 }, failureMessage: "the question is unanswered" });
  var custom4 = new LiveValidation("foo4", {wait: 1000, validMessage: "it seems alright"});
  custom4.add("Validate.Custom",{ against: customQValidation, args: { i:4 }, failureMessage: "the question is unanswered" });
  var custom5 = new LiveValidation("foo5", {wait: 1000, validMessage: "it seems alright"});
  custom5.add("Validate.Custom",{ against: customQValidation, args: { i:5 }, failureMessage: "the question is unanswered" });
  var custom6 = new LiveValidation("foo6", {wait: 1000, validMessage: "it seems alright"});
  custom6.add("Validate.Custom",{ against: customQValidation, args: { i:6 }, failureMessage: "the question is unanswered" });
  var custom7 = new LiveValidation("foo7", {wait: 1000, validMessage: "it seems alright"});
  custom7.add("Validate.Custom",{ against: customQValidation, args: { i:7 }, failureMessage: "the question is unanswered" });
  var custom8 = new LiveValidation("foo8", {wait: 1000, validMessage: "it seems alright"});
  custom8.add("Validate.Custom",{ against: customQValidation, args: { i:8 }, failureMessage: "the question is unanswered" });
  var custom9 = new LiveValidation("foo9", {wait: 1000, validMessage: "it seems alright"});
  custom9.add("Validate.Custom",{ against: customQValidation, args: { i:9 }, failureMessage: "the question is unanswered" });
  var custom10 = new LiveValidation("foo10", {wait: 1000, validMessage: "it seems alright"});
  custom10.add("Validate.Custom",{ against: customQValidation, args: { i:10 }, failureMessage: "the question is unanswered" });*/
  </script>
  
  
