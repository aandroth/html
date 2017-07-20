<?php
    echo "_";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Frontier Scientists Media&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script>
        function mouseOver(idTag) {
            document.getElementById(idTag).style.border = "5px solid white";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.border = "0px solid white";
        }
        function mouseUp(new_page) {
            window.location.href = new_page;
        }
    </script>
</head>
<body>
    <div style="background-image:url('../Images/FS_Screens/iOS_Research.png'); background-size:cover; position:relative; top:-20px; right:-100px; width:700px; height:900px; float:left; background-repeat:no-repeat;">
        <div style="position:relative; top:590px; right:-95px; width:520px; height:300px; float:left;">
            <div id="Videos" onmouseup="mouseUp('iOS_Videos.php')" onmouseover="mouseOver('Videos')" onmouseout="mouseOut('Videos')" style="position:relative; top:0px; right:0px; width:520px; height:80px; float:left;">
                <!--invisible buttom to go to Research-->
            </div>
            <div id="Map" onmouseup="mouseUp('iOS_Map.php')" onmouseover="mouseOver('Map')" onmouseout="mouseOut('Map')" style="position:relative; top:0px; right:0px; width:520px; height:80px; float:left;">
                <!--invisible buttom to go to Videos-->
            </div>
        </div>
    </div>
    <div style="position:relative; top:50px; right:100px; width:900px; height:800px; float:right; background-color:rgb(20, 50, 100); padding:30px;">
        <h1 style="color:white; text-align:center">
            Research
        </h1>
        <p>            
            The research section shows all of the different arctic science projects that Frontier Scientists is following.
            Each project has its own identifying image (which shows up in other pages), and a short article describing it.
            These pages also have links to the Map and the Videos pages as well, so that the user can quickly get more information on them.
        </p>
    </div>
</body>
</html>
