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
        <h1>
            Hash Tables
        </h1>
        <h2>
            And All Their Garbled Glory!
        </h2>
        <p>
            Alright, let's begin with what a hash table is. The official definition is 
            "a data structure used to implement an associative array, a structure that can map keys to values."
            This means that we can take a value from the user, hash it, and then use the result to get an index in an array.
            Because of this, hash tables have a faster average search time over normal arrays, they can keep keys secure, and they're reliable.
            </br></br>
            There are several questions that arise from this:
            </br>- What exactly does a hashing function do?
            </br>- How does hashing a key secure it?
            </br>- Why do some passwords only allow certain characters?
            </br>- Why are hash table searches so fast?
            </br></br>
            We will now dive into each of these.First up, hashing functions!</br>
        </p>
        <h2>
            Hashing Functions
        </h2>
        <p>
            Hashing functions are what takes a value, whether it's a string of characters or a number, and applies a "hashing function" to that value.
            This causes the value to be edited in a way that almost randomizes the values. 
            I say almost because we get the same hashed value from the original value every time. This also means that the value for, say a password,
            becomes the same value every time.
        </p>
        <div id="container">
            <canvas id="myCanvas" width="700" height="450"> Whoa! You ain't rendering the canvas! Get a better browser, fool!</canvas>
        </div>
        <h2>
            Hashing As Security
        </h2>
        <p>
            This is great, but what does this have to do with security and keeping passwords safe? Well, because we can hash a block of text to always arrive
            at the same block of hashed text, we never have to store the actual password. EVER. We always read the password from the user, hash it, and then
            compare the hashed result to the hashed block that we do store. This way, if there is ever a security breach in the system, we never release the 
            passwords of the users, just the hashed results of those passwords. Without knowing the hashing algorithm, the people who stole those hashes won't
            be able to use them to find out what the passwords are either. All they'll get is a bunch of garbled data that they won't be able to ungarble. They also
            can't use the garbled data to access an account because putting the garble into the password for an account would just garble it into an entirely 
            different hash result. Garbling garbled data doesn't get you anywhere.
        </p>
        <h2>
            Password Limitations
        </h2>
        <p>
            The next time a website asks for a password, you'll see that there are limitations. These limitations are in the length of the password and the characters
            that can be used. But, why? The security industry has learned and taught that a long password with special characters provides the best protection. So why
            would a website put limitations on what a password can be? The biggest reason for this is legacy systems. These systems were created years ago, 
            when passwords didn't have to contend with the password crackers we have now, but would be expensive and time-consuming to replace. This is why there are
            websites that limit passwords to 8 or 16 characters. As an example for special characters, the space is disallowed by Evernote's passwords, and the reason given was
            that the regular expression that checked passwords for correctness would end up being three times longer, with only 1.5% increase in security. They just
            don't see that as a worthwhile investment.
        </p>
        <h2>
            Speed and Slowdowns
        </h2>
        <p>
            Hash tables are fast for the same reason that accessing an array is fast when you have the index. You just add the index to your pointer, and access the
            data at that address. When we access a hash table, we are doing so by creating a hash, and accessing the array with the hash at the index. However, this
            isn't always perfect. Just like with sorting a list of numbers into their own preset slots, we have to have room for all possibilities, and we have to
            account for when we get doubles. In the case of doubles, the hashing algorithm created the same hash from two different passwords. The better the hashing
            algorithm, the fewer times that this will happen. To account for this, two approaches are used. The first is to create a list for each entry that has
            a collision, putting the doubles into that list. The way to deal with these lists becoming full, is to resize the entire list, and then mod the hash
            function by the size of the list, hopefully spreading the hashes out more easily. Because there is the possibility that all hashes in a hash table have
            gone to the same entry, hash tables have a worst case of O(n), rather than the case of O(1) that we hope for, and more often actually achieve.
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
