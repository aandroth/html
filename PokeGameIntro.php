<?php
    echo "&nbsp;";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../Script.js"></script>
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
    <div class="gameBoy" onmouseup="mouseUp('PokeGame.php')" onmouseover="mouseOver('gameBoy_H')" onmouseout="mouseOut('gameBoy_H')" style="background-image:url('Images/Cartoon_Gameboy_Full.png'); background-size:contain; position:absolute; top:1%; left:5%; width:35%; height:40%; float:left; background-repeat:no-repeat;">
        <div id="gameBoy_H" class="gameBoy_Highlight" style="background-image:url('Images/Cartoon_Gameboy_Full_Highlight.png'); background-size:contain; position:absolute; top:0%; left:0%; width:100%; height:100%; float:left; background-repeat:no-repeat; pointer-events:none; visibility:hidden;">
        </div>
    </div>
    <div class="infoBox" style="background-image:url('Images/Paper_Stack.png'); background-size:contain; background-position:center center; background-repeat:no-repeat; position:absolute; top:1%; right:10%; width:35%; height:90%; float:right; padding:5%;">
        <h1 style="color:black; text-align:center">
            Pokemon Beginnings
        </h1>    
        <p class="info_Box_Text">
            This game was created in Macromedia Flash MX, using Java as the coding language. It was birthed from the idea that the player can start
            with any pokemon type that they would like. The controls are the arrow keys for movement, and the space bar for selections.
            Like the website, this game is very much a work in progress, so check back as I add in the other pokemon types!
		Controls are the Arrow Keys and the Space Bar. To get started, just click on the Gameboy.
        </p>
    </div>    
    <!-- Menu buttons -->
    <div class="Menu_Bar">
        <div onmouseup="mouseUp('index.php')" onmousedown="mouseDown_MenuItem('Menu_Index_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Index_Highlight')" onmouseover="mouseOver('Menu_Index_Highlight')" style="position:absolute; top:0%; left:2%; width:14%; height:100%; float:left;">        
            <div id="Menu_Index_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Folder.php')" onmousedown="mouseDown_MenuItem('Menu_Folder_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Folder_Highlight')" onmouseover="mouseOver('Menu_Folder_Highlight')" style="position:absolute; top:0%; left:16%; width:13.5%; height:100%; float:left;">        
            <div id="Menu_Folder_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('iOS_Pages/iOS_Menu.php')" onmousedown="mouseDown_MenuItem('Menu_FS_Highlight')" onmouseout="mouseOut_MenuItem('Menu_FS_Highlight')" onmouseover="mouseOver('Menu_FS_Highlight')" style="position:absolute; top:0%; left:29.5%; width:15%; height:100%; float:left;">        
            <div id="Menu_FS_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Canvas.php')" onmousedown="mouseDown_MenuItem('Menu_Sketchpad_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Sketchpad_Highlight')" onmouseover="mouseOver('Menu_Sketchpad_Highlight')" style="position:absolute; top:0%; left:44.5%; width:14%; height:100%; float:left;">        
            <div id="Menu_Sketchpad_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Checkerboard.php')" onmousedown="mouseDown_MenuItem('Menu_Checkers_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Checkers_Highlight')" onmouseover="mouseOver('Menu_Checkers_Highlight')" style="position:absolute; top:0%; left:58%; width:15%; height:100%; float:left;">        
            <div id="Menu_Checkers_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('PokeGameIntro.php')" onmousedown="mouseDown_MenuItem('Menu_PokeBall_Highlight')" onmouseout="mouseOut_MenuItem('Menu_PokeBall_Highlight')" onmouseover="mouseOver('Menu_PokeBall_Highlight')" style="position:absolute; top:0%; left:73%; width:15%; height:100%; float:left;">        
            <div id="Menu_PokeBall_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('Dinaki_Adventures.php')" onmousedown="mouseDown_MenuItem('Menu_Dinaki_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Dinaki_Highlight')" onmouseover="mouseOver('Menu_Dinaki_Highlight')" style="position:absolute; top:0%; left:88%; width:11.9%; height:100%; float:left;">        
            <div id="Menu_Dinaki_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
    </div>
</body>
    <script>
        determineHeight('gameBoy', 1.28);
        determineHeight('infoBox', .65);
        //scaleTextByScreenWidth('info_Box_Text', 30);
        determineHeight('Menu_Bar', 0.15);
    </script>
</html>
