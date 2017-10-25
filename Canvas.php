<?php
    echo "&nbsp;";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en" onmouseup="deactivateDraw()">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../Script.js"></script>
    <script>
        var drawActive = false;
	var color = "#000000";

        function activateDraw(event)
        {
            drawActive = true;

            drawSquare(event);
        }

        function deactivateDraw() {
            drawActive = false;
        }

        function drawSquare(event)
        {
            if (drawActive)
            {
                var canvas = document.getElementById('canvas');
                if (canvas && canvas.getContext) {
                    var context = canvas.getContext("2d");

                    if (context) {
                        var rect = canvas.getBoundingClientRect();

                        context.fillStyle = color;
                        context.fillRect(event.clientX - rect.left - 10, event.clientY - rect.top - 10, 20, 20);
                    }
                }
            }
        }

	function chooseColor(newColor)
	{
		color = newColor;
	}
    </script>
</head>
<body style="width:100%; height:100%;">
    <div id="sketchPad" style="background-image:url('../Images/Notepad_Canvas.png'); background-size:cover; position:absolute; top:-5%; left:-10%; width:100%; height:100%; float:left; background-repeat:no-repeat;">
	</div>
        <canvas id="canvas" onmousemove="drawSquare(event)" onmousedown="activateDraw(event)" onmouseup="deactivateDraw()" style="background-color:white; position:absolute; top:0%; left:2%;">
            You need to upgrade your browser to one that supports the HTML canvas!
        </canvas>
	<div style"top:0%; right0%; width:10%; height:100%">
		<div onmouseup="chooseColor('#FF0000')" style="top:0%; right:0%; width:100%; height:10%; background-color:RED;"></div>
		<div onmouseup="chooseColor('#00FF00')" style="top:0%; right:0%; width:100%; height:10%; background-color:GREEN;"></div>
		<div onmouseup="chooseColor('#0000FF')" style="top:0%; right:0%; width:100%; height:10%; background-color:BLUE;"></div>
		<div onmouseup="chooseColor('#000000')" style="top:0%; right:0%; width:100%; height:10%; background-color:BLACK;"></div>
		<div onmouseup="chooseColor('#FFFFFF')" style="top:0%; right:0%; width:100%; height:10%; background-color:WHITE;"></div>
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
        determineHeight('Menu_Bar', 0.15);

	var tempCanvas = document.getElementById('canvas');
	if (tempCanvas && tempCanvas.getContext) {
	    var context = canvas.getContext("2d");

	    if (context) {
		var rect = tempCanvas.getBoundingClientRect();
		context.canvas.width = window.innerWidth *0.92;
		context.canvas.height = window.innerHeight *0.9;
	    }
	}
    </script>
</body>
</html>
