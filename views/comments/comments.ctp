<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <?= $javascript->link(array('jquery-1.5.1.min','autoResize'));?>
          <?=$html->css(array('button_green','comments'));?> 
       
        <script>
            $(document).ready(function() {
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
               /* $('#comments').NobleCount('#count',{
                    on_negative: 'go_red',
                    on_positive: 'go_green'
                });*/

            });  
        </script>
    </head>
    <body>
     <ol class="comments">
            <li>
                <ul class="meta">
                    <li class="author">Subject</a></li>
                    <li class="date">posted on September 23rd, 2009</li>
                </ul>
                <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at enim augue, et luctus odio. Duis porttitor orci id arcu consequat varius. Pellentesque tempus augue sed purus facilisis vitae feugiat sem convallis. Maecenas a dolor velit. Ut tempus elit et nibh pellentesque et molestie mauris adipiscing. Curabitur elementum rutrum augue vitae tempus. Donec tincidunt ipsum ac arcu</div>
                 
            </li>
            <ol class="reply" >
                <li>
                    <ul class="meta">
                        <li class="author">Subject</a></li>
                        <li class="date">posted on September 23rd, 2009</li>
                    </ul>
                    <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at enim augue, et luctus odio. Duis porttitor orci id arcu consequat varius. Pellentesque tempus augue sed purus facilisis vitae feugiat sem convallis. Maecenas a dolor velit. Ut tempus elit et nibh pellentesque et molestie mauris adipiscing. Curabitur elementum rutrum augue vitae tempus. Donec tincidunt ipsum ac arcu</div>
                </li>

                <li>
                    <ul class="meta">
                        <li class="author">Subject</a></li>
                        <li class="date">posted on September 23rd, 2009</li>
                    </ul>
                    <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at enim augue, et luctus odio. Duis porttitor orci id arcu consequat varius. Pellentesque tempus augue sed purus facilisis vitae feugiat sem convallis. Maecenas a dolor velit. Ut tempus elit et nibh pellentesque et molestie mauris adipiscing. Curabitur elementum rutrum augue vitae tempus. Donec tincidunt ipsum ac arcu</div>
                </li>
            </ol >

        </ol>
        <textarea id="comments" name="comment" ></textarea>

        
         <span class="green">Post</span> 
    </body>
</html>
