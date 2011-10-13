<script type="text/javascript">
    $(document).ready(function(){
         $(".button-slide").click(function(){
            $("#board").slideToggle("slow");
            $(this).toggleClass("active"); return false;
        });
    });
</script>
<div align="center"><a href="#" class="button-slide">Feedback </a></div>

<div style="display: none;" class="board" align="center"><br />

<form id="form1" name="form1" method="post" action="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feedbackEmail'),true);?>">

  Your Email : <input type="text" name="email" size="25"/><br />
  Message :<textarea name="msg"  rows="5" cols="23"></textarea><br />

  <input type="submit" value=" Send " />  
  </form></div>

