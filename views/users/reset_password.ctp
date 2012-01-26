<?php $html->css(array('reset','button','alerts'));?>
<?php $html->script(array('bootstrap-alerts','livevalidation'))?>
<script>
document.title='Forgot password';
 $(function () {$(".message").alert()})
</script>

<style>
    html
{
    font-family:"Lucida Grande","Lucida Sans Unicode", Tahoma, sans-serif;
    overflow: hidden;
    

}
    .container{
        width:500px;
        margin-left:auto;
        margin-right: auto;
        
    }
    #header{
    color:gray;
    border-bottom-style:solid;
    padding:10px;
    border-bottom-width:1px;
    font-weight:bold;
    border-bottom-color:lightgray;
    /*width:330px;*/
    background-color:#F3F3F3;


}
    legend{
        visibility: hidden;
    }
    label
{
    display:block;
    text-align:left;
    font-weight: normal;
    padding-bottom:4px;
    padding-top:30px;


}
    input {

    border:1px solid #899caa;
    border-radius:3px;
    -moz-border-radius:3px;
    color:#3a454d;
    font-weight:bold;
    padding:8px 8px ;
    box-shadow:inset 0px 1px 3px #bbb;
    -webkit-box-shadow:inset 0px 1px 3px #bbb;
    -moz-box-shadow:inset 0px 1px 3px #bbb;
    font-size:12px;
    width:200px;


}
input[type=submit]{
    padding: 8px 8px;
    width:75px;
   

}
    #txt{
        padding-top:50px;

        
    }
    h1{
       font-size:20px;
       font-family: arial;
       font-weight:normal;
        padding-top:40px;
    }
    p{
        padding-top:30px;
        font-size: 15px;
    }
    #submit{
      padding-top:30px;   
    }
    footer {
   border-top-color:#EBEBEB;
  border-top-style:solid;
  border-top-width:1px;
  bottom:0;
  height:35px;
  position:absolute;
  width:100%;
    background-color:#F3F3F3;
}
:root .message {
    font-size:15px;
    width:50%;
    margin-left:25%;
    margin-right:25%;
}
span{
    padding-left:10px;
}
</style>

<div id="header">Forgot Password</div>
<?php   echo $this->Session->flash();
	echo $this->Session->flash('auth');
?>
<div class="container">
    
    <h1>Forgot your password?</h1>
    <p>
        <?php
        Configure::load('feedback');
        if(Configure::read('enable_mails'))echo "To reset your password,enter your registered email address below.A link to reset your password will be sent to it. The email may be marked as spam";
        else echo "This feature is currently disabled, however you can contact an administrator to reset your password";
        ?>
    </p>
   
<?php
	echo $this->Form->create('User',array('action'=>'resetPassword'));
	echo $this->Form->input('email');
?>


<div id="submit">
 <input class="btn primary" type="submit" value="Send" />
</div>

</div>
<footer>
</footer>

<?php echo $this->Form->end();?>

<script>
//validation code placed after the form makes it work
var email = new LiveValidation("UserEmail",{wait: 1000, onlyOnSubmit: true, validMessage: " "});
email.add(Validate.Presence);
email.add(Validate.Email);
</script>
