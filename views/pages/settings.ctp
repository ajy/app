<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php echo $javascript->link(array('autoResize')); ?>
        <?php echo $html->css(array('button', 'style', 'comments', 'alerts')); ?> 
        <?php echo $javascript->link(array('jquery.fancybox.pack', 'add_edit')); ?>
        <?php echo $html->css(array('jquery.fancybox')); ?>     

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
                padding-top:40px;

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
            .opt{
                /*    display:inline-block;*/
                    padding:15px 0 30px;
                   border-bottom-style:solid;
                border-bottom-width:1px;
                width: 100%;
            }
            .oHead{
                font-family:arial;
                font-size:16px;
/*                line-height:1.5;*/
                margin-bottom: 10px
            }
            .btn{
                float:right;
                margin-right:20%;
            }
        </style>
    </head>
    <body>

        <? //debug($comments);?>

        <div id="pHead">
            <h2>Settings</h2> 
        </div>
        
        <div id="search">
           <div class="opt">
               <div class="oHead">Users </div>
                            Delete all the students in class
              
                            <?php
                                    echo $this->Form->create('User', array('action' => 'deleteClass'));
                                    $classes = ($this->requestAction('subjects/getClass'));
                                    //debug($classes);
                            ?>
                            <select name="data[User][Class]" id="UserClass" >
                                <?php
                                foreach ($classes as $class):
                                    echo '<option >' . $class['subjects']['class'] . '</option>';
                                endforeach;
                                ?>  
                            </select>

                            <div id="submit">
                                <input class="btn danger" type="submit" value="Delete" />
                            </div>
                            <?php echo $this->Form->end(); ?>
              </div>
            <div class="opt">
                <div class="oHead">Form Records </div>
                            Delete all the Form Records
                             <? echo $html->link('Delete',array('controller'=>'form_a_records','action'=>'deleteAll'),array('class'=>'btn danger '));  ?>
               
                            
                        </div>
                        <div class="opt">
                            <div class="oHead">Comments </div>
                            Delete all the Comments
                            <? echo $html->link('Delete',array('controller'=>'comments','action'=>'deleteAll'),array('class'=>'btn danger '));  ?>
               
                         
                        </div>
                        <div class="opt">
                            <div class="oHead">Enrollment </div>
                            Enroll the students to their respective subjects
                             <?php echo  $html->tag('div',
        	$this->Html->link('Enroll',
        		array('controller'=>'subject_memberships','action' => 'enroll'),
        		array('escape'=>false,'class'=>'btn success modal7')),
        	array('class' => 'import'));
        ?>
                           
                        </div>
        </div>

    </body>
</html>
