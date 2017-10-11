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
    <div style="background-image:url('../Images/FS_Screens/iOS_Map.png'); background-size:cover; position:relative; top:-20px; right:-100px; width:700px; height:900px; float:left; background-repeat:no-repeat;">
        <div style="position:relative; top:170px; right:-95px; width:520px; height:550px; float:left;">
            <div style="position:relative; top:0px; right:0px; width:520px; height:55px; float:left;">
                <!--invisible buttom to go to Research-->
            </div>
        </div>
    </div>
    <div style="position:relative; top:50px; right:100px; width:900px; height:800px; float:right; background-color:rgb(20, 50, 100); padding:30px;">
        <h1 style="color:white; text-align:center">
            Map
        </h1>
        <p>
            This interactive map allows users to see the approximate locations (they don't want tourists visiting)
             of the different Arctic research projects being done through the state of Alaska. 
            When the user selects a location, they get to see a custom popup, that has the image of the research project, 
            and a button that links to the Articles page for that project.
        </p>
    </div>
</body>
</html>
