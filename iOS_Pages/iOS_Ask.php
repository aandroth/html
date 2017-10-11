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
    <div style="background-image:url('../Images/FS_Screens/iOS_AskAScientist.png'); background-size:cover; position:relative; top:-20px; right:-100px; width:700px; height:900px; float:left; background-repeat:no-repeat;">
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
            Ask a Scientist
        </h1>
        <p>
            This page allows the user to send a modified email. The user puts in their name, the subject, and their question.
            When they select the send button, their preferred email app comes up to allow any further modification. 
            Because this email first gets sent to the Frontier Scientists inbox, before being sent to the on-call scientist, 
            The subject line gets "[frontsci]" added to it so that the inbox can specifically filter for those. 
            This page also lets the user see a video bio of the on-call scientist.
        </p>
    </div>
</body>
</html>
