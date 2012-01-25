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
          <?php echo $html->css(array('button','style','comments','alerts'));?> 
          <?php echo  $javascript->link(array('jquery.fancybox.pack','add_edit'));?>
                 <?php echo $html->css(array('jquery.fancybox'));?>     
       
        <script>
      
            $(document).ready(function() {
                 $('.reply').hide();
               
            });  

             function toggle(pos){
   
               
                $jq='ul#container li:nth-child('+pos+') > ol.comments > ol.reply';
                var showing = ( $($jq).is(':visible'));
                               
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

#pHead,#search{
 margin: 0 0 0 260px;

}
#search{
    position:relative;
    padding-top:15px;
    
/*   padding-left:34%;*/
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
#submit{
    
    display:inline !important;
}
select {

    border:1px solid #899caa;
    border-radius:3px;
    -moz-border-radius:3px;
    color:#3a454d;
    font-weight:bold;
    padding:6px 8px;
    box-shadow:inset 0px 1px 3px #bbb;
    -webkit-box-shadow:inset 0px 1px 3px #bbb;
    -moz-box-shadow:inset 0px 1px 3px #bbb;
    font-size:12px;

}

</style>
    </head>
    <body>

<? //debug($comments);?>

    <div id="pHead">
                <h2>Comments</h2> 
                </div>
        <?php echo $this->Form->create('Comment', array('action' => 'search', 'class' => 'search'));
$teachers=($this->requestAction('subjects/getTeachers'));
$subjects=$this->requestAction('subjects/getSubjects');
?>
         <div id="search">
<label>Teacher</label>
		 <select name="data[Comment][teacher]" id="CommentTeacher" >
                     <option value=0></option>
                   <?foreach($teachers as $teacher):
                        $id=$teacher ['users']['id'];$name=$teacher ['users']['name'];
                     
                     echo<<< OPTIONS
                        <option value = $id > $name </option>
                       
OPTIONS;
                         endforeach;?>  
                    </select>
<label>Subject</label>
		 <select name="data[Comment][subject_id]" id="CommentSubjectId" >
                     <option value=0></option>
                   <?foreach($subjects as $subject):
                        $id=$subject['subjects']['id'];$name=$subject['subjects']['name'];
                     
                     echo<<< OPTIONS
                        <option value = $id > $name </option>
                       
OPTIONS;
                         endforeach;?>  
                    </select>
<div id="submit">
 <input class="btn success" type="submit" value="Search" />
</div>

<?echo $this->Form->end();
//debug($this->data);
//debug($comments);
?>
</div>
        <?if(isset($flag))echo "Reported comments";?>
        <?if(!is_null($comments)){?>
        <?echo $this->element('comments',array($comments));?>
  <?}
  else{
  ?>  
        <div class="message warning">No comments to display</div>
        <? }?>
    </body>
</html>
