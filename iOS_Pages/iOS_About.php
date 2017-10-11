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
            document.getElementById(idTag).style.visibility = "visible";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.visibility = "hidden";
        }
        function mouseUp(new_page) {
            window.location.href = new_page;
        }
    </script>
</head>
<body>
    <div style="background-image:url('../Images/FS_Screens/iOS_About.png'); background-size:cover; position:relative; top:-20px; right:-100px; width:700px; height:900px; float:left; background-repeat:no-repeat;">
        <div style="position:relative; top:170px; right:-95px; width:520px; height:550px; float:left;">
            <div style="position:relative; top:0px; right:0px; width:520px; height:55px; float:left;">
                <!--invisible buttom to go to Research-->
            </div>
            <div style="position:relative; top:0px; right:0px; width:520px; height:55px; float:left;">
                <!--invisible buttom to go to Videos-->
            </div>
            <div style="position:relative; top:0px; right:0px; width:520px; height:55px; float:left;">
                <!--invisible buttom to go to Map-->
            </div>
            <div style="position:relative; top:0px; right:0px; width:520px; height:55px; float:left;">
                <!--invisible buttom to go to Articles-->
            </div>
            <div style="position:relative; top:0px; right:0px; width:520px; height:55px; float:left;">
                <!--invisible buttom to go to Scientist-->
            </div>
            <div style="position:relative; top:0px; right:0px; width:520px; height:55px; float:left;">
                <!--invisible buttom to go to About-->
            </div>
        </div>
    </div>
    <div style="position:relative; top:50px; right:100px; width:900px; height:800px; float:right; background-color:rgb(20, 50, 100); padding:30px;">
        <h1 style="color:white; text-align:center">
            About
        </h1>
        <p>
            The About page is a description of the app, why it was made, and the people behind it. 
            This page has short bios for the Frontier Scientists team, administators at the University of Alaska Fairbanks, and the ARSC staff.
        </p>
    </div>
</body>
</html>
