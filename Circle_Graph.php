<?php
    echo "_";
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
    </div>
    <script>
        var mainCanvas = document.getElementById("myCanvas");
        var mainContext = mainCanvas.getContext("2d");
 
        var canvasWidth = mainCanvas.width;
        var canvasHeight = mainCanvas.height;
 
        mainContext.fillStyle = "#000000";
        mainContext.fillRect(50, 50, canvasWidth, canvasHeight);

        // color in the background
        mainContext.fillStyle = "#EEEEEE";
        mainContext.fillRect(0, 0, canvasWidth, canvasHeight);
        

        var time = (new Date()).getTime();
        var currTime = 0;
        var turnTime = 0;
        var colorTime = 0;
        var colorTime1 = 0.9;
        var moveTime = 0;
        var posX = 0 + Math.sin(time / 1000);
        //console.log(time);
        var posY = 0 + Math.sin(time / 1000);
        //console.log(time + ", " + time);
        
        function animFrame()
        {
            mainContext.clear  

            mainContext.fillStyle = "#FFFFFF";
            mainContext.fillRect(0, 0, canvasWidth, canvasHeight);
            
            var posX = Math.sin(turnTime * 100 * Math.PI / 180) * 50;
            var posY = Math.cos(turnTime * 100 * Math.PI / 180) * 50;
            var posX1 = Math.sin(((turnTime * 100) + 72) * Math.PI / 180) * 50;
            var posY1 = Math.cos(((turnTime * 100) + 72) * Math.PI / 180) * 50;
            var posX2 = Math.sin(((turnTime * 100) + 144) * Math.PI / 180) * 50;
            var posY2 = Math.cos(((turnTime * 100) + 144) * Math.PI / 180) * 50;
            var posX3 = Math.sin(((turnTime * 100) + 216) * Math.PI / 180) * 50;
            var posY3 = Math.cos(((turnTime * 100) + 216) * Math.PI / 180) * 50;
            var posX4 = Math.sin(((turnTime * 100) + 288) * Math.PI / 180) * 50;
            var posY4 = Math.cos(((turnTime * 100) + 288) * Math.PI / 180) * 50;
            
            var inputX  = Math.sin(((moveTime * 25)) * Math.PI / 180) * 50;
            var outputX = Math.sin(((moveTime * 25)) * Math.PI / 180) * 50;
            var colR = Math.sin((colorTime * 100) * Math.PI / 180) * 255;
            var colG = Math.sin((colorTime * 100) * Math.PI / 180) * 255;
            var colB = Math.sin((colorTime * 100) * Math.PI / 180) * 255;

            var colR1 = Math.sin((colorTime1 * 100) * Math.PI / 180) * 255;
            var colG1 = Math.sin((colorTime1 * 100) * Math.PI / 180) * 255;
            var colB1 = Math.sin((colorTime1 * 100) * Math.PI / 180) * 255;
        
            drawCircle(mainContext, 500, 200, 100, "rgb(0, 0, 255)");
            if(currTime < 5) // Do nothing
            {

            }
            else if(currTime < 10) // Move the input arrow forward
            {
                if(moveTime * 25 < 90)
                    moveTime += 0.01;
            }
            else if(currTime < 15) // Fade the input arrow out and spin the cog
            {
                turnTime += 0.01;
                if((colorTime * 100) < 90)
                    colorTime += 0.01;
            }
            else if(currTime < 20) //  Fade the output arrow in and move the input arrow back
            {
                if((colorTime1 * 100) > 0)
                    colorTime1 -= 0.01;
            }
            else if(currTime < 25) //  Move the output arrow away
            {
                if(moveTime * 25 > 0)
                    moveTime -= 0.01;
            }
            else if(currTime < 30) // Do nothing
            {
            }
            else if(currTime < 35) // Fade the input arrow back in and fade out the output arrow
            {
                if(colorTime > 0)
                    colorTime -= 0.01;
                if(colorTime1 < 0.9)
                    colorTime1 += 0.01;
            }
            else if(currTime < 40) // Reset the system
            {
                colorTime = 0;
                colorTime1 = 0.9;
                currTime = 0;
                moveTime = 0;
            }
            
            mainContext.fillStyle = "rgb("+colR+", "+colG+", "+100 + colB+")";
            mainContext.font = "30px Arial";
            mainContext.fillText("base_input", 10 + inputX, 75);
            mainContext.fillStyle = "rgb("+colR1+", "+colG1+", 255)";
            mainContext.font = "30px Arial";
            mainContext.fillText("hash_output", 135 + outputX, 275);
            drawRightArrow(mainContext, 160 + inputX, 50, 100, 10, "rgb("+colR+", "+colG+", "+255+")");
            drawLeftArrow(mainContext, 10 + outputX, 250, 100, 10, "rgb("+colR1+", "+colG1+", "+255+")");
            drawCircle(mainContext, 500 - posX, 200 + posY, 20, "rgb(255, 255, 255)");
            drawCircle(mainContext, 500 - posX1, 200 + posY1, 20, "rgb(255, 255, 255)");
            drawCircle(mainContext, 500 - posX2, 200 + posY2, 20, "rgb(255, 255, 255)");
            drawCircle(mainContext, 500 - posX3, 200 + posY3, 20, "rgb(255, 255, 255)");
            drawCircle(mainContext, 500 - posX4, 200 + posY4, 20, "rgb(255, 255, 255)");
            drawEmptySquare(mainContext, 350, 50, 300, 300, "rgb(0, 0, 0)");
        }

      setInterval(function() {
        time = (new Date()).getTime();
        currTime += 0.01;
        animFrame();
      }, 1);
    </script>
</body>
</html>
