<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <script src="jquery-ui-1.8.14.custom/js/jquery-1.5.1.min.js" type="text/javascript"></script>

    <script src="jquery-ui-1.8.14.custom/js/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script>

    <link href="jquery-ui-1.8.14.custom/themes/start/jquery.ui.all.css" rel="StyleSheet" type="text/css"/>
    <link href="submitButton.css" rel=" stylesheet" type="text/css" />
    <link href="img_buttons.css" rel="stylesheet" type="text/css"/>
    <style>
        input[type="submit"]{
            float:left;
        }

        .tabs{
            float:right;
            margin-left:280px;
            margin-top: -100px;
            margin-right:275px;
            position:fixed;
           
        }
        .left_pane{
            margin-right:30px;
        }
          .logout{
            font-family:"Lucida Sans Unicode", Tahoma, sans-serif;
            background-color: #ed0e0e;
            color:white;
            border-color:red;
            border-style:solid;
            border-width: thin;
            border-radius:3px;
            padding:4px;

        }
        .logout:hover{
            background-color: #fb4444;
        }
        h2{
            font-family:"Lucida Sans Unicode", Tahoma, sans-serif;
            color: #999999;
        }
        .ise{
            font-family:"Lucida Sans Unicode", Tahoma, sans-serif;
            color: #1fbee4;position:relative;

        }
        #tabs {
	padding: 0px;
	background: none;
	border-width: 0px;
}
#tabs.ui-tabs-nav {
	padding-left: 0px;
	background: transparent;
	border-width: 0px 0px 1px 0px;
	border-radius: 0px;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
}
#tabs.ui-tabs-panel {
	background: url(images/ui-bg_highlight-hard_100_f5f3e5_1x100.png) repeat-x scroll 50% top #f5f3e5;
	border-width: 0px 1px 1px 1px;
}
    </style>

    <div class="left_pane">

        <h2>Admin</h2>
        <p class="ise">ISE Department</p>
        <input type="button" class="add" value="Add a Subject"><br>
        <input type="button" class="remove" value="Remove a Subject"/><br>
        <input type="button" class="logout" value="Logout"/>
    </div>
    <script>
        $(function() {
            $( ".tabs" ).tabs({fx: { opacity: 'toggle' }});
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

            $(".insert").dialog({
                resizable: false,
                autoOpen:false,
                modal: true,
                title:"Add new subject",
                draggable:false,
                buttons: {
                    // end continue button
                    Cancel: function() {$( '.insert' ).dialog( "option", "hide", 'drop' );
                        $(this).dialog('close');
                    } //end cancel button
                }//end buttons

            });//end dialog

        }); //end ready event
        $('.add').click(function(){
            $( '.insert' ).dialog( "option","show", 'drop');
            $('.insert').dialog('open');

        }); //end click handler
    </script>
    <form class="insert" action="insert.php" method="POST" >
        <div>
            <label for="s_name">Subject Name</label>
            <input type="text" name="s_name" id="s_name" autofocus required  />
        </div>

        <div>
            <label for="s_code">Subject Code</label>
            <input type="text" name="s_code" id="s_code"  required />
        </div>
        <div>
            <label for="faculty1_a">Faculty 1(A)</label>
            <input type="text" name="faculty1_a" id="faculty1_a" required  />
        </div>
        <div>
            <label for="faculty2_a">Faculty 2(A)</label>
            <input type="text" name="faculty2_a" id="faculty2_a" required  />
        </div>
        <div>
            <label for="faculty1_b">Faculty 1(B)</label>
            <input type="text" name="faculty1_b" id="faculty1_b" required  />
        </div>
        <div>
            <label for="faculty2_b">Faculty 2(B)</label>
            <input type="text" name="faculty2_b" id="faculty2_b"  required />
        </div>
        <div style="padding-right:100px; ">
            <input type="submit" value="Add" />

        </div>
    </form>

    <div class="tabs">
        <ul>
            <li><a href="#tabs-1">II Semester</a></li>
            <li><a href="#tabs-2">IV Semester</a></li>
            <li><a href="#tabs-3">VI Semester</a></li>
            <li><a href="#tabs-4">VIII Semester</a></li>
        </ul>
        <div id="tabs-1">
<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
       
        </div>
        <div id="tabs-2">
             <?php include 'display.php';?>
            </div>
        <div id="tabs-3">
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
       
             </div>
        <div id="tabs-4">
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
    </div>
</html>
