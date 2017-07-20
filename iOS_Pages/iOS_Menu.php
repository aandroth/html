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
        function mouseOver(idTag)
        {
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
    <div style="background-image:url('../Images/FS_Screens/iOS_Menu.png'); background-size:cover; position:relative; top:-20px; right:-100px; width:700px; height:900px; float:left; background-repeat:no-repeat;">
        <div style="position:relative; top:170px; right:-95px; width:520px; height:550px; float:left;">
            <div id="Research" onmouseup="mouseUp('iOS_Research.php')" onmouseover="mouseOver('Research')" onmouseout="mouseOut('Research')" style="position:relative; top:0px; right:0px; width:513px; height:55px; float:left;">
                <!--invisible buttom to go to Research-->
            </div>
            <div id="Videos" onmouseup="mouseUp('iOS_Videos.php')" onmouseover="mouseOver('Videos')" onmouseout="mouseOut('Videos')" style="position:relative; top:0px; right:0px; width:513px; height:55px; float:left;">
                <!--invisible buttom to go to Videos-->
            </div>
            <div id="Map" onmouseup="mouseUp('iOS_Map.php')" onmouseover="mouseOver('Map')" onmouseout="mouseOut('Map')" style="position:relative; top:0px; right:0px; width:513px; height:55px; float:left;">
                <!--invisible buttom to go to Map-->
            </div>
            <div id="Articles" onmouseup="mouseUp('iOS_Articles.php')" onmouseover="mouseOver('Articles')" onmouseout="mouseOut('Articles')" style="position:relative; top:0px; right:0px; width:513px; height:55px; float:left;">
                <!--invisible buttom to go to Articles-->
            </div>
            <div id="Ask" onmouseup="mouseUp('iOS_Ask.php')" onmouseover="mouseOver('Ask')" onmouseout="mouseOut('Ask')" style="position:relative; top:0px; right:0px; width:513px; height:55px; float:left;">
                <!--invisible buttom to go to Ask-->
            </div>
            <div id="About" onmouseup="mouseUp('iOS_About.php')" onmouseover="mouseOver('About')" onmouseout="mouseOut('About')" style="position:relative; top:0px; right:0px; width:513px; height:55px; float:left;">
                <!--invisible buttom to go to About-->
            </div>
        </div>
    </div>
    <div style="position:relative; top:50px; right:100px; width:900px; height:800px; float:right; background-color:rgb(20, 50, 100); padding:30px;">
        <h1 style="color:white; text-align:center">
            Main Menu
        </h1>    
        <p>
            This app was created for the news group, Frontier Scientists, by the student workers at the Artcic Region Supercomputing Center. 
            The purpose of this app is to take the information from Frontier Scientist's website, 
            <a href="http://frontierscientists.com/">frontierscientists.com</a>, and put it into a unique, mobile-friendly format.
            This app was created based off of a protoype app, and has since gone through several iterations. 
            This app was created by a collection of artists and programmers, and is still seeing development and tweaks. 
            To get the data, we are supplied a document from the web administrator, 
            and use a script to convert the file into XML for the app to download.
            This script was originally written in PHP and MySQL.
        </p>
    </div>
</body>
</html>
