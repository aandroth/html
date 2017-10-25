<?php
    echo "_";
?>
</*
 ProjectsPage presents my AIE projects
 *
 * ProjectsPage will be a group of circles, each of which contain an image that represents that project
 * 
 * @version 1.0
 * @author Aquin
 */>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="OfficeDesk.scss" />
    <script src="ObjectLibrary.js" ></script>
    <script src="ProjectPageJs.js" ></script>
    <script>
        var startTime = (new Date()).getTime();
    </script>
</head>
<body>
    <div>
        <p>
            These are the projects that I've been working on during my time at the Academy of Interactive Entertainment!'
        </p>
        <div id="container" style="position:absolute; left:0px; top:150px;" onmousemove="userMouse.updateMousePosition(event)">
            <canvas id="myCanvas" width="700" height="450"> Whoa! You ain't rendering the canvas! Get a better browser, fool!</canvas>
        </div>
    </div>
    <script>
        var mainCanvas = document.getElementById("myCanvas");
        var mainContext = mainCanvas.getContext("2d");
 
        var canvasWidthAndHeight = new Vec2(mainCanvas.width, mainCanvas.height);
        var rect = mainCanvas.getBoundingClientRect();
        var canvasOffset = new Vec2(rect.left, rect.top);
         
        var frameCtrl = new projectPageFrameController();

        var userMouse = new mouse();
        
        var time = (new Date()).getTime();
        var currTime = 0;

        var posX = 0 + Math.sin(time / 1000);
        //
        var posY = 0 + Math.sin(time / 1000);
        //console.log(time + ", " + time);

        mainCanvas.addEventListener("mousedown", onMouseDownAction, false);

      setInterval(function() {
        time = (new Date()).getTime();
        currTime += 0.01;
        if(frameCtrl.animFrame(mainContext, canvasWidthAndHeight, canvasOffset, currTime, userMouse))
            currTime = 0;
      }, 1);

      
    function onMouseDownAction(e) {
        //alert(e.pageX + ", " + e.pageY);
        var coords = new Vec2(e.pageX, e.pageY);
        frameCtrl.checkCircleListForCollisionsWithPoint(sub(coords, canvasOffset));
    }
    </script>
</body>
</html>
