<?php
    echo "_";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="OfficeDesk.scss" />
    <script>
        function mouseOver(idTag)
        {
            document.getElementById(idTag).style.visibility = "visible";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.visibility = "hidden";
        }
        function mouseUp(new_page) {
            window.location.href = new_page;
        }

        function determineHeight(objectClass, ratio){
            var obj = document.getElementsByClassName(objectClass)[0].offsetWidth;
            document.getElementsByClassName(objectClass)[0].style.height = obj*ratio + 'px';
        }
    </script>
</head>
<body>
    <div class="iOS" onmouseup="mouseUp('iOS_Pages/iOS_Menu.php')" onmouseover="mouseOver('iOS_Highlight')" onmouseout="mouseOut('iOS_Highlight')">
        <div id="iOS_Highlight" style=" pointer-events:none; visibility:hidden; position:absolute; width:100%; height:100%">
            <img src="Images/iOS_Screen_Highlight.png" style="position:absolute; top:0%; left:0%; max-width:100%; max-height:100%;"/>
        </div>
    </div>
    <div class="CheckerBoard" onmouseup="mouseUp('CheckerBoard.php')" onmouseover="mouseOver('CB_Highlight')" onmouseout="mouseOut('CB_Highlight')">
        <div id="CB_Highlight" style="pointer-events:none; visibility:hidden; position:absolute; top:0%; left:0%; height:100%; width:100%;">
            <img src="Images/Checkerboard_Highlight.png" style="top:0%; left:0%; height:100%; width:100%"/>
        </div>
    </div>
    <div class="Book" onmouseup="mouseUp('Dinaki_Adventures.php')" onmouseover="mouseOver('BB_Highlight')" onmouseout="mouseOut('BB_Highlight')">
        <div id="BB_Highlight" style=" pointer-events:none; visibility:hidden; position:absolute; top:0%; right:4%; width:97%; height:100%; float:right;">
            <img src="Images/BB_Highlight.png" style="position:absolute; height:100%; width:100%;"/>
        </div>
    </div>
    <div class="Poke" onmouseup="mouseUp('PokeGame.php')" onmouseout="mouseOut('PB_Highlight')" onmouseover="mouseOver('PB_Highlight')" style="background-image:url('Images/Pokeball.png'); background-size:contain; position:absolute; top:0px; right:30%; width:15%; height:15%; float:right; background-repeat:no-repeat;">
        <div id="PB_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0px; left:-1px; width:100%; height:100%;">
            <img src="Images/Pokeball_Highlight.png" style="max-height:100%; max-width:100%; height:87%; width:87%;" />
        </div>
    </div>
    <div class="DrawPad" onmouseup="mouseUp('Canvas.php')" onmouseout="mouseOut('NB_Highlight')" onmouseover="mouseOver('NB_Highlight')" style="background-image:url('Images/Notepad.png'); background-size:cover; position:absolute; top:30%; left:3%; width:15%; height:30%; float:left; box-shadow:5px 10px 15px #000000; background-repeat:no-repeat;">
        <div id="NB_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0px; left:0px; width:100%; height:102%; float:left;">
            <img src="Images/Notepad_Highlight.png" style="height:100%; width:100%" />
        </div>
    </div>

    <script>
    
        determineHeight('iOS', 1.25);
        determineHeight('CheckerBoard', 1);
        determineHeight('Book', 1.1);
        determineHeight('Poke', 1);
        determineHeight('DrawPad', 1.3);

        document.getElementsByClassName('DrawPad')[0].style.top = document.getElementsByClassName('iOS')[0].offsetTop + document.getElementsByClassName('iOS')[0].offsetHeight + (window.innerHeight * 0.05);

    </script>


</body>
</html>
