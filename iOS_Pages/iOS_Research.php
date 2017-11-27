<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../../Script.js"></script>
    <script>
        function mouseOver(idTag) {
            document.getElementById(idTag).style.border = "5px solid white";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.border = "0px solid white";
        }
    </script>
</head>
<body>
    <div class="iOS_Active" style="background-image:url('../Images/FS_Screens/iOS_Research.png');">
        <div style="position:absolute; top:10%; left:15%; width:70%; height:80%; float:left;">
            <div id="Back" class="iOS_Back" onmouseup="goBack()" onmouseover="mouseOver('Back')" onmouseout="mouseOut('Back')">
                <!--invisible button to go to Map-->
            </div>
            <div id="Videos" onmouseup="mouseUp('iOS_Videos.php')" onmouseover="mouseOver('Videos')" onmouseout="mouseOut('Videos')" style="position:relative; top:76%; right:0%; width:98.5%; height:9.5%; float:left;">
                <!--invisible button to go to Videos-->
            </div>
            <div id="Map" onmouseup="mouseUp('iOS_Map.php')" onmouseover="mouseOver('Map')" onmouseout="mouseOut('Map')" style="position:relative; top:76%; right:0%; width:98.5%; height:9.5%; float:left;">
                <!--invisible button to go to Map-->
            </div>
        </div>
    </div>
    <div class="iOS_Info_Box" style="position:relative;">
        <h1 style="color:black; text-align:center">
            Research
        </h1>
        <p class="info_Box_Text">            
            The research section shows all of the different Arctic science projects that Frontier Scientists is following.
            Each project has its own identifying image (which shows up in other pages), and a short article describing it.
            These pages also have links to the Map and the Videos pages as well, so that the user can quickly get more information on them.
        </p>
    </div>    
    <!-- Menu buttons -->
    <div class="iOS_Menu_Bar">
        <div onmouseup="mouseUp('../index.php')" onmousedown="mouseDown_MenuItem('Menu_Index_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Index_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Index_Highlight')" style="position:absolute; top:0%; left:2%; width:14%; height:100%; float:left;">
            <div id="Menu_Index_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Folder.php')" onmousedown="    mouseDown_MenuItem('Menu_Folder_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Folder_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Folder_Highlight')" style="position:absolute; top:0%; left:16%; width:13.5%; height:100%; float:left;">
            <div id="Menu_Folder_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('iOS_Menu.php')" onmousedown="    mouseDown_MenuItem('Menu_FS_Highlight')" onmouseout="mouseOut_MenuItem('Menu_FS_Highlight')" onmouseover="mouseOver_MenuItem('Menu_FS_Highlight')" style="position:absolute; top:0%; left:29.5%; width:15%; height:100%; float:left;">
            <div id="Menu_FS_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Canvas.php')" onmousedown="    mouseDown_MenuItem('Menu_Sketchpad_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Sketchpad_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Sketchpad_Highlight')" style="position:absolute; top:0%; left:44.5%; width:14%; height:100%; float:left;">
            <div id="Menu_Sketchpad_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Checkerboard.php')" onmousedown="    mouseDown_MenuItem('Menu_Checkers_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Checkers_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Checkers_Highlight')" style="position:absolute; top:0%; left:58%; width:15%; height:100%; float:left;">
            <div id="Menu_Checkers_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../PokeGameIntro.php')" onmousedown="    mouseDown_MenuItem('Menu_PokeBall_Highlight')" onmouseout="mouseOut_MenuItem('Menu_PokeBall_Highlight')" onmouseover="mouseOver_MenuItem('Menu_PokeBall_Highlight')" style="position:absolute; top:0%; left:73%; width:15%; height:100%; float:left;">
            <div id="Menu_PokeBall_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Dinaki_Adventures.php')" onmousedown="    mouseDown_MenuItem('Menu_Dinaki_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Dinaki_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Dinaki_Highlight')" style="position:absolute; top:0%; left:88%; width:11.9%; height:100%; float:left;">
            <div id="Menu_Dinaki_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
    </div>
</body>
    <script>
        determineHeight('iOS_Active', 1.27);
        determineHeight('iOS_Info_Box', 0.7);
        //scaleTextByScreenWidth('info_Box_Text', 30);
        determineHeight('Menu_Bar', 0.15);
    </script>
</html>
