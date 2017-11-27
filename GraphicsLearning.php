<?php
    
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
    <script src="GraphicsLearning_DotProduct.js" ></script>
    <script>
        var startTime = (new Date()).getTime();
    </script>
</head>
<body>
    <div>
        <form>
            <div class="degreesInput">
                Degrees_Blue:
                <input id="degrees0" type="number" name="degrees0" size="3" value="0" min="0" max="360">
                Degrees_Orange:
                <input id="degrees1" type="number" name="degrees1" size="3" value="0" min="0" max="360">
            </div>
        </form>
        <p>
            These are the projects that I've been working on during my time at the Academy of Interactive Entertainment!
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
         
        var frameCtrl = new graphicsPageFrameController();
        frameCtrl.windowCenter = new Vec2(canvasWidthAndHeight.x / 2.0, canvasWidthAndHeight.y / 2.0);

        var userMouse = new mouse();
        
        var time = (new Date()).getTime();
        var currTime = 0;

        var posX = 0 + Math.sin(time / 1000);
        //
        var posY = 0 + Math.sin(time / 1000);
        //console.log(time + ", " + time);
        
        var newDegrees0 = document.querySelector('#degrees0').value;
        var newDegrees1 = document.querySelector('#degrees1').value;

      setInterval(function() {
        time = (new Date()).getTime();
        currTime += 0.01;
        
        newDegrees0 = document.querySelector('#degrees0').value;
        newDegrees1 = document.querySelector('#degrees1').value;
        frameCtrl.SetDegrees(newDegrees0, newDegrees1);

        if(frameCtrl.animFrame(mainContext, canvasWidthAndHeight, canvasOffset, currTime, userMouse))
            currTime = 0;
      }, 1);
    </script>
</body>
</html>
