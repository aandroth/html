<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>&dagger;Aquin's Great Games&dagger;</title>
    <link rel="stylesheet" type="text/css" href="../../OfficeDesk.scss" />
    <script src="../../../Script.js"></script>
    <script>
        function mouseOver(idTag) {
            document.getElementById(idTag).style.border = "5px solid white";
        }
        function mouseOut(idTag) {
            document.getElementById(idTag).style.border = "0px solid white";
        }
        function mouseUp_OpenMail(idTag) {
            if(document.getElementById('ask_Page').style.backgroundImage == "url(\"../Images/FS_Screens/iOS_Email.png\")")
            {
                // Change the image of the iOS screen
                document.getElementById('ask_Page').style.backgroundImage = "url(\"../Images/FS_Screens/iOS_AskAScientist.png\")";

                // Expand the Back button and Video highlights
                document.getElementById('Back').style.width = "15%";
                document.getElementById('Bio').style.width = "35.4%";

                // Put the Ask button in its original position
                document.getElementById(idTag).style.top = "80%";
                document.getElementById(idTag).style.left = "30%";
                document.getElementById(idTag).style.width = "38%";
            }
            else
            {
                document.getElementById('ask_Page').style.backgroundImage = "url(\"../Images/FS_Screens/iOS_Email.png\")"

                // Reduce the Back button and Video highlights
                document.getElementById('Back').style.width = "0%";
                document.getElementById('Bio').style.width = "0%";
                
                // Move the Ask button to where the Back button was
                document.getElementById(idTag).style.top = "14%";
                document.getElementById(idTag).style.left = "14%";
                document.getElementById(idTag).style.width = "8%";
            }
        }
    </script>
</head>
<body>
    <div id="ask_Page" class="iOS_Active" style="background-image:url('../Images/FS_Screens/iOS_AskAScientist.png');">
        <div id="Back" class="iOS_Back" onmouseup="goBack()" onmouseover="mouseOver('Back')" onmouseout="mouseOut('Back')" style="top:13%; left:14%; width:15%; height:5%;">
            <!--invisible button to go back-->
        </div>
        <div id="Bio" onmouseup="mouseUp('https://www.youtube.com/watch?v=oZUBzTg08TI')" onmouseover="mouseOver('Bio')" onmouseout="mouseOut('Bio')" style="position:absolute; top:37%; left:16%; width:35.4%; height:33.35%;">
            <!--invisible button to watch scientist's video-->
        </div>
        <div id="Ask" onmouseup="mouseUp_OpenMail('Ask')" onmouseover="mouseOver('Ask')" onmouseout="mouseOut('Ask')" style="position:absolute; top:80%; left:30%; width:38%; height:4%;">
            <!--invisible button to watch scientist's video-->
        </div>
    </div>
    <div class="iOS_Info_Box" style="position:relative;">
        <h1 style="color:black; text-align:center">
            Ask a Scientist
        </h1>
        <p class="info_Box_Text">
            This page allows the user to view information about the scientist on-call, a rotating list of scientists that have agreed to answer emails
            from interested users of the app or visitors to the Frontier Scientists' website. These emails are sent to Liz O`Connell, 
            the Frontier Scientists director, who will verify the email as a good question, and then send it off to the scientist.
            The user can also watch an introductory video of the on-call scientist, where they introduce themselves and their background.
            This page allows the user to send a modified email. The user puts in their name, the subject, and their question.
            When they select the send button, their preferred email app comes up to allow any further modification. 
            Because this email first gets sent to the Frontier Scientists inbox, before being sent to the on-call scientist, 
            The subject line gets "[frontsci]" added to it so that the inbox can specifically filter for those. 
            This page also lets the user see a video bio of the on-call scientist.
        </p>
    </div>    
    <!-- Menu buttons -->
    <div class="iOS_Menu_Bar">
        <div onmouseup="mouseUp('../index.php')" onmousedown="mouseDown_MenuItem('Menu_Index_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Index_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Index_Highlight')" style="position:absolute; top:0%; left:2%; width:14%; height:100%; float:left;">
            <div id="Menu_Index_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Folder.php')" onmousedown="    mouseDown_MenuItem('Menu_Folder_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Folder_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Folder_Highlight')" style="position:absolute; top:0%; left:16%; width:13.5%; height:100%; float:left;">
            <div id="Menu_Folder_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('iOS_Menu.php')" onmousedown="    mouseDown_MenuItem('Menu_FS_Highlight')" onmouseout="mouseOut_MenuItem('Menu_FS_Highlight')" onmouseover="mouseOver_MenuItem('Menu_FS_Highlight')" style="position:absolute; top:0%; left:29.5%; width:15%; height:100%; float:left;">
            <div id="Menu_FS_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Canvas.php')" onmousedown="    mouseDown_MenuItem('Menu_Sketchpad_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Sketchpad_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Sketchpad_Highlight')" style="position:absolute; top:0%; left:44.5%; width:14%; height:100%; float:left;">
            <div id="Menu_Sketchpad_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Checkerboard.php')" onmousedown="    mouseDown_MenuItem('Menu_Checkers_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Checkers_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Checkers_Highlight')" style="position:absolute; top:0%; left:58%; width:15%; height:100%; float:left;">
            <div id="Menu_Checkers_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../PokeGameIntro.php')" onmousedown="    mouseDown_MenuItem('Menu_PokeBall_Highlight')" onmouseout="mouseOut_MenuItem('Menu_PokeBall_Highlight')" onmouseover="mouseOver_MenuItem('Menu_PokeBall_Highlight')" style="position:absolute; top:0%; left:73%; width:15%; height:100%; float:left;">
            <div id="Menu_PokeBall_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
        <div onmouseup="mouseUp('../Dinaki_Adventures.php')" onmousedown="    mouseDown_MenuItem('Menu_Dinaki_Highlight')" onmouseout="mouseOut_MenuItem('Menu_Dinaki_Highlight')" onmouseover="mouseOver_MenuItem('Menu_Dinaki_Highlight')" style="position:absolute; top:0%; left:88%; width:11.9%; height:100%; float:left;">
            <div id="Menu_Dinaki_Highlight" style="visibility:hidden; pointer-events:none; position:absolute; top:0%; left:0%; width:100.5%; height:100%; float:left; background-color:rgba(100, 100, 255, 0.5);">
            </div>
        </div>
    </div>
</body>
    <script>
        determineHeight('iOS_Active', 1.27);
        determineHeight('iOS_Info_Box', 0.7);
        //scaleTextByScreenWidth('info_Box_Text', 30);
        determineHeight('Menu_Bar', 0.15);
    </script>
</html>
