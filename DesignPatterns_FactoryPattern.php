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
    <script src="DesignPatterns_FactoryPattern.js" ></script>
    <script>
        var startTime = (new Date()).getTime();
    </script>
</head>
<body>
    <div>
        <h1>
            DESIGN PATTERNS
        </h1>
        <h2>
            FACTORY PATTERN
        </h2>
        <p>
            In design patterns, the factory pattern is a way to create multiple objects from a single source object or function. 
            For example, we could have a generic class like "Shape" or "Animal" that can be inherited from, creating new objects,
            such as "Circle", "Triangle", and "Square" fro "Shape", and "Monkey", "Tiger", and "Lizard" for "Animal". 
            It's also easy to see how each of these could also be the object to be inherited for use by other objects.
            To see how this design pattern works with inheritence, put some of the functions into the bucket representing the Shape class.
            Every function that goes into the bucket is then in the buckets for each of the classes that inherit from Shape.
            Another way that the Factory Pattern can be used is with components. 
            By having each function be a component that can be added to a base class, we can create many different kinds of objects with just one class.
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

      setInterval(function() {
        time = (new Date()).getTime();
        currTime += 0.01;

        if(frameCtrl.animFrame(mainContext, canvasWidthAndHeight, canvasOffset, currTime, userMouse))
            currTime = 0;
      }, 1);
    </script>
</body>
</html>
