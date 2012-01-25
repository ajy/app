<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <?php echo  $javascript->link(array('autoResize'));?>
         <?php echo $html->css(array('alerts','style','comments'));?> 
         <?php echo  $javascript->link(array('jquery.fancybox.pack','add_edit'));?>
         <?php echo $html->css(array('jquery.fancybox'));?>
        <script>
        
            $(document).ready(function() {
               $('.reply').hide();
                $('textarea#comments').autoResize({
                    // On resize:
                    onResize : function() {
                        $(this).css({opacity:0.8});
                    },
                    // After resize:
                    animateCallback : function() {
                        $(this).css({opacity:1});
                    },
                    // Quite slow animation:
                    animateDuration : 300,
                    // More extra space:
                    extraSpace :10
                });
              
            });  

             function toggle(pos){
   
                // alert(pos)
                $jq='ul#container li:nth-child('+pos+') > ol.comments > ol.reply';
                var showing = ( $($jq).is(':visible'))
                              //  alert($jq);
                $('ul#container li:nth-child('+pos+') >ol.comments> .expand >img').attr('src','../img/expand.png');
                $($jq).slideToggle('fast');
                if (!showing) { // If it wasn't visible
                    $('ul#container li:nth-child('+pos+') >ol.comments> .expand >img').attr('src','../img/collapse.png');
             
                }}

        </script>
        <style>
 html{
              
                overflow-y:scroll ;
             
            }

#pHead{
 margin: 0 30px 0 260px;

 
}
.expand{
                position:relative;
                float:left;
                border-bottom-style:solid;
                top:-10px;
                width:100%;
                border-bottom-width:1px;
                color:lightgray;
            }
            img{
                float:right;
                padding:5px 5px 10px;
                cursor: pointer;
            }
            li{
                list-style: none;
            }
.opt{
position:relative;
float:right;
top:-20px;


}

.author{
    color:#4C8EFB;
    display:inline;
}
</style>
    </head>
    <body>
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Session->flash(); ?>
        <div id="pHead">
             <h2>Comments</h2> 
                </div>
	<?if(!is_null($comments)){?>
        <?echo $this->element('comments',array($comments));?>
  <?}
  else{
  ?>  
        <div class="message warning">No comments to display</div>
        <? }?>
    </body>
</html>
