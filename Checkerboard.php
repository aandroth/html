<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../Script.js"></script>
    <script src="Checkerboard.js"></script>
    <script src="ObjectLibrary.js" ></script>
</head>
<body>
    <div class="checkerBoard" id="checkerboard" <!--style="background-image:url('../Images/Checker_Board.png')-->; background-size:cover; position:relative; top:10%; left:5%; width:40%; height:45%; float:left; background-repeat:no-repeat;">
            <canvas id="myCanvas" width="700" height="700"> Whoa! You ain't rendering the canvas! Get a better browser, fool!</canvas>
    </div>
    <div class="infoBox" style="background-image:url('Images/Paper_Stack_Tall.png'); background-size:contain; background-position:center center; background-repeat:no-repeat; position:absolute; top:2%; right:5%; width:35%; height:90%; float:right; padding:5%;">
        <h1 style="color:black; text-align:center">
            Checkers Playing Neural Network
        </h1>    
        <p class="info_Box_Text">
            An Artificial Intelligence that could play the classic game of Checkers was the goal of my Introduction to Artificial Intelligence class.
            The way we created our AIs was by creating neural networks, which consisted of many layers of nodes. 
            The nodes in these layers began as just random weights that would multiply against any input they were given. 
            At first their moves were very much random and inept, but by having the winners copied with minor random tweaks to their node wieghts,
            the ones with better and better weights would eventually win out, reproduce, and randomly produce better and better Checkers players. 
            This is called an evolutionary model, and one that I find fascinating at the possibilities of what they can do. 
		See the code on <a href="https://github.com/aandroth/Checkers_AI">Github</a>!
        </p>
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
        determineHeight('checkerBoard', 1);
        determineHeight('infoBox',0.7);
        //scaleTextByScreenWidth('info_Box_Text', 30);
        determineHeight('Menu_Bar', 0.15);

        var mainCanvas = document.getElementById("myCanvas");
        var mainContext = mainCanvas.getContext("2d");
 
        var canvasWidthAndHeight = new Vec2(mainCanvas.width, mainCanvas.height);
        var rect = mainCanvas.getBoundingClientRect();
        var canvasOffset = new Vec2(rect.left, rect.top);
         
        var frameCtrl = new checkerboardFrameController(canvasWidthAndHeight);
        frameCtrl.windowCenter = new Vec2(canvasWidthAndHeight.x / 2.0, canvasWidthAndHeight.y / 2.0);

        var userMouse = new mouse();
        
        var time = (new Date()).getTime();
        var currTime = 0;

        var posX = 0 + Math.sin(time / 1000);
        //
        var posY = 0 + Math.sin(time / 1000);
        //console.log(time + ", " + time);

      setInterval(function() {
        time = (new Date()).getTime();
        currTime += 0.01;


        if(frameCtrl.animFrame(mainContext, canvasWidthAndHeight, canvasOffset, currTime, userMouse))
            currTime = 0;
      }, 1);
    </script>
</body>
</html>
