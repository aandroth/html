<?php

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="OfficeDesk.scss" />
    <script src="ObjectLibrary.js" ></script>
    <script>
        var startTime = (new Date()).getTime();
    </script>
</head>
<body>
    <div>
        <p>
            This circle graph shows my knowledge and allows you to explore these areas by clicking on each one.
            </br>
            Go ahead and start exploring!
        </p>
        <div id="container" style="position:absolute; left:0px; top:150px;" onmousemove="userMouse.updateMousePosition(event)">
            <canvas id="myCanvas" width="700" height="450"> Whoa! You ain't rendering the canvas! Get a better browser, fool!</canvas>
        </div>
    </div>
    <script>
        var mainCanvas = document.getElementById("myCanvas");
        var mainContext = mainCanvas.getContext("2d");
 
        var canvasWidth = mainCanvas.width;
        var canvasHeight = mainCanvas.height;
         
        var frameCtrl = new frameController();

        var userMouse = new mouse();

        mainContext.fillStyle = "#000000";
        mainContext.fillRect(50, 50, canvasWidth, canvasHeight);
        
        var time = (new Date()).getTime();
        var currTime = 0;

        // color in the background
        mainContext.fillStyle = "#EEEEEE";
        mainContext.fillRect(0, 0, canvasWidth, canvasHeight);

        var posX = 0 + Math.sin(time / 1000);
        //
        var posY = 0 + Math.sin(time / 1000);
        //console.log(time + ", " + time);

      setInterval(function() {
        time = (new Date()).getTime();
        currTime += 0.01;
        if(frameCtrl.animFrame(mainContext, canvasWidth, canvasHeight, currTime, userMouse))
            currTime = 0;
      }, 1);
    </script>
</body>
</html>
