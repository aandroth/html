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
    <div style="background-image:url('../Images/FS_Screens/iOS_Articles.png'); background-size:cover; position:relative; top:-20px; right:-100px; width:700px; height:900px; float:left; background-repeat:no-repeat;">
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
            Articles
        </h1>
        <p>
            The Articles page has the ten most recent articles posted to <a href="http://frontierscientists.com/">frontierscientists.com</a>, 
            and every article that the user has not read will have the "new" symbol, which goes away when the user selects that article to read.
        </p>
    </div>
</body>
</html>
