<?php
    echo "&nbsp;";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="OfficeDesk.scss" />
    <script src="Script.js"></script>
    <script>
        function mouseOver(idTag)
        {
            document.getElementById(idTag).style.visibility = "visible";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.visibility = "hidden";
        }
    </script>
</head>
<body>
    <div class="iOS" onmouseup="mouseUp('iOS_Pages/iOS_Menu.php')" onmouseover="mouseOver('iOS_Highlight')" onmouseout="mouseOut('iOS_Highlight')">
        <div id="iOS_Highlight" style="pointer-events:none; visibility:hidden; position:absolute; width:100%; height:100%">
            <img src="Images/iOS_Screen_Highlight.png" style="position:absolute; top:0%; left:0%; max-width:100%; max-height:100%;"/>
        </div>
    </div>
    <div class="DrawPad" onmouseup="mouseUp('Canvas.php')" onmouseout="mouseOut('NB_Highlight')" onmouseover="mouseOver('NB_Highlight')" style="background-image:url('Images/Notepad.png'); background-size:cover; position:absolute; top:30%; left:3%; width:12%; height:28%; float:left; box-shadow:5px 10px 15px #000000; background-repeat:no-repeat;">
        <div id="NB_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0px; left:0px; width:100%; height:102%; float:left;">
            <img src="Images/Notepad_Highlight.png" style="height:100%; width:100%"/>
        </div>
    </div>
    <div class="CheckerBoard" onmouseup="mouseUp('Checkerboard.php')" onmouseover="mouseOver('CB_Highlight')" onmouseout="mouseOut('CB_Highlight')">
        <div id="CB_Highlight" style="pointer-events:none; visibility:hidden; position:absolute; top:0%; left:0%; height:100%; width:100%;">
            <img src="Images/CheckerBoardBox_Highlight.png" style="top:0%; left:0%; height:100%; width:100%"/>
        </div>
    </div>
    <div class="Book" onmouseup="mouseUp('Dinaki_Adventures.php')" onmouseover="mouseOver('BB_Highlight')" onmouseout="mouseOut('BB_Highlight')">
        <div id="BB_Highlight" style=" pointer-events:none; visibility:hidden; position:absolute; top:0%; right:6%; width:97%; height:100%; float:right;">
            <img src="Images/BB_Highlight.png" style="position:absolute; height:100%; width:100%;"/>
        </div>
    </div>
    <div class="Poke" onmouseup="mouseUp('PokeGameIntro.php')" onmouseout="mouseOut('PB_Highlight')" onmouseover="mouseOver('PB_Highlight')" style="background-image:url('Images/Pokeball.png'); background-size:contain; position:absolute; top:0px; right:30%; width:12%; height:15%; float:right; background-repeat:no-repeat;">
        <div id="PB_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0px; left:-1px; width:100%; height:100%;">
            <img src="Images/Pokeball_Highlight.png" style="max-height:100%; max-width:100%; height:87%; width:87%;"/>
        </div>
    </div>
    <div class="Folder" onmouseup="mouseUp('Folder.php')" onmouseout="mouseOut('Folder_Highlight')" onmouseover="mouseOver('Folder_Highlight')" style="background-image:url('Images/top-secret-folder.png'); background-size:cover; position:absolute; top:20%; left:22%; width:45%; height:70%; float:left; background-repeat:no-repeat;">
        <div id="Folder_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0px; left:0px; width:100.5%; height:100%; float:left;">
            <img src="Images/top-secret-folder_highlight.png" style="height:100%; width:100%"/>
        </div>
    </div>
    <!-- Menu buttons -->
    <div class="Menu_Bar">
        <div onmouseup="mouseUp('index.php')" onmousedown="mouseDown_MenuItem('Menu_Index_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Index_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Index_Highlight')" style="position:absolute; top:0%; left:2%; width:14%; height:100%; float:left;">
            <div id="Menu_Index_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Folder.php')" onmousedown="mouseDown_MenuItem('Menu_Folder_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Folder_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Folder_Highlight')" style="position:absolute; top:0%; left:16%; width:13.5%; height:100%; float:left;">
            <div id="Menu_Folder_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('iOS_Pages/iOS_Menu.php')" onmousedown="mouseDown_MenuItem('Menu_FS_Highlight')" onmouseout="mouseOut_MenuItem('Menu_FS_Highlight')" onmouseover="mouseOver_MenuItem('Menu_FS_Highlight')" style="position:absolute; top:0%; left:29.5%; width:15%; height:100%; float:left;">
            <div id="Menu_FS_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Canvas.php')" onmousedown="mouseDown_MenuItem('Menu_Sketchpad_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Sketchpad_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Sketchpad_Highlight')" style="position:absolute; top:0%; left:44.5%; width:14%; height:100%; float:left;">
            <div id="Menu_Sketchpad_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Checkerboard.php')" onmousedown="mouseDown_MenuItem('Menu_Checkers_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Checkers_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Checkers_Highlight')" style="position:absolute; top:0%; left:58%; width:15%; height:100%; float:left;">
            <div id="Menu_Checkers_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('PokeGameIntro.php')" onmousedown="mouseDown_MenuItem('Menu_PokeBall_Highlight')" onmouseout="mouseOut_MenuItem('Menu_PokeBall_Highlight')" onmouseover="mouseOver_MenuItem('Menu_PokeBall_Highlight')" style="position:absolute; top:0%; left:73%; width:15%; height:100%; float:left;">
            <div id="Menu_PokeBall_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Dinaki_Adventures.php')" onmousedown="mouseDown_MenuItem('Menu_Dinaki_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Dinaki_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Dinaki_Highlight')" style="position:absolute; top:0%; left:88%; width:11.9%; height:100%; float:left;">
            <div id="Menu_Dinaki_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
    </div>
    <script>
        determineHeight('iOS', 1.25);
        determineHeight('CheckerBoard', 0.5);
        determineHeight('Book', 1.1);
        determineHeight('Poke', 1);
        determineHeight('DrawPad', 1.5);
        determineHeight('Folder', 0.815);
        determineHeight('Menu_Bar', 0.15);
        document.getElementsByClassName('DrawPad')[0].style.top = document.getElementsByClassName('iOS')[0].offsetTop + document.getElementsByClassName('iOS')[0].offsetHeight + (window.innerHeight * 0.05);
    </script>
</body>
</html>
