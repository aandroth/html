<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
          "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Frontier Scientists Media&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="Script.js"></script>
    <script>
       window.onload = function focusOnGame()
        {
            document.getElementById("game").focus();
        }
    </script>
</head>
<body>
    <div class="gameBoy" style="background-image:url('../Images/Cartoon_Gameboy.png'); background-size:cover; position:absolute; top:0%; right:0%; width:100%; height:100%; float:right; background-repeat:no-repeat; background-color:greenyellow;">
        <object id="game" class="Game" data="Pokemon.swf" style="position:relative; top:0%; right:10%; width:80%; height:100%; float:right;"></object>
    </div>
    <div class="Arrow" onmouseup="goBack()" onmouseout="mouseOut('Arrow_Highlight')" onmouseover="mouseOver('Arrow_Highlight')" style="background-image:url('../Images/Arrow.png'); background-size:cover; position:absolute; top:10%; left:0%; width:10%; height:20%; background-repeat:no-repeat;">
        <div id="Arrow_Highlight" style="visibility:hidden; pointer-events:none; background-image:url('../Images/Arrow_Highlight.png'); background-size:cover; position:absolute; top:0%; left:0%; width:100%; height:100%; background-repeat:no-repeat;">
        </div>
    </div>
    <script>
        determineHeight('Arrow', 1);
    </script>
</body>
</html>
