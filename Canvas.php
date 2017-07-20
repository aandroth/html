<?php
    echo "_";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en" onmouseup="deactivateDraw()">
<head>
    <title>&dagger;Frontier Scientists Media&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script>
        var drawActive = false;

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

                        context.fillStyle = "#000000";
                        context.fillRect(event.clientX - rect.left - 25, event.clientY - rect.top - 25, 50, 50);
                    }
                }
            }
        }
    </script>
</head>
<body>
    <div style="background-image:url('../Images/Notepad_Canvas.png'); background-size:cover; position:relative; top:100px; right:-200px; width:1400px; height:750px; float:left; background-repeat:no-repeat;">
        <canvas id="canvas" onmousemove="drawSquare(event)" onmousedown="activateDraw(event)" onmouseup="deactivateDraw()" width="1210" height="710" style="background-color:white; position:relative; top:20px; right:30px; width:1210px; height:710px; float:right;">
            You need to upgrade your browser to one that supports the HTML canvas!
        </canvas>
    </div>
</body>
</html>
